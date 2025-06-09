<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Support\Facades\Notification;

test('verified user is redirected to dashboard when requesting verification notification', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->post(route('verification.send'));

    $response->assertRedirect(route('dashboard', absolute: false));
});

test('unverified user receives verification notification', function () {
    $user = User::factory()->unverified()->create();

    Notification::fake();

    $response = $this
        ->actingAs($user)
        ->post(route('verification.send'));

    $response->assertRedirect();
    $response->assertSessionHas('status', 'verification-link-sent');

    Notification::assertSentTo($user, Illuminate\Auth\Notifications\VerifyEmail::class);
});
