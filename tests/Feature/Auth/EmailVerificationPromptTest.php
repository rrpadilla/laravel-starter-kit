<?php

declare(strict_types=1);

use App\Models\User;

test('verified user is redirected to dashboard', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->get(route('verification.notice'));

    $response->assertRedirect(route('dashboard', absolute: false));
});

test('unverified user sees verification notice', function () {
    $user = User::factory()->unverified()->create();

    $response = $this
        ->actingAs($user)
        ->get(route('verification.notice'));

    $response->assertStatus(200);
    $response->assertViewIs('auth.verify-email');
});
