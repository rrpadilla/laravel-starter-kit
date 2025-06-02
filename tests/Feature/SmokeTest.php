<?php

declare(strict_types=1);

test('the application returns a successful response', function () {
    $this->get('/')->assertStatus(200);
});
