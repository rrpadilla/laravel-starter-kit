<?php

declare(strict_types=1);

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Event;
use Illuminate\Validation\ValidationException;

test('login screen can be rendered', function () {
    $response = $this->get(route('login'));

    $response->assertStatus(200);
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $this->assertAuthenticated();
    $response->assertRedirect(route('dashboard', absolute: false));
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $this->post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
});

test('users can logout', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect('/');
});

test('login request validates email', function () {
    $response = $this->post('/login', [
        'email' => 'not-an-email',
        'password' => 'password',
    ]);

    $response->assertSessionHasErrors('email');
});

test('login request validates required fields', function () {
    $response = $this->post('/login', []);

    $response->assertSessionHasErrors(['email', 'password']);
});

test('too many failed login attempts triggers lockout', function () {
    Event::fake();

    $user = User::factory()->create();

    // Attempt to login 6 times with wrong password to trigger lockout
    for ($i = 0; $i < 6; $i++) {
        try {
            $this->post('/login', [
                'email' => $user->email,
                'password' => 'wrong-password',
            ]);
        } catch (ValidationException $e) {
            // Expected exception
        }
    }

    Event::assertDispatched(Lockout::class);
});

test('throttle key is generated correctly', function () {
    $request = new LoginRequest();
    $request->merge(['email' => 'test@example.com']);
    $request->setMethod('POST');

    $throttleKey = $request->throttleKey();

    expect($throttleKey)->toContain('test@example.com');
    expect($throttleKey)->toContain('|');
});
