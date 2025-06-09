<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->laravel();
arch()->preset()->security();

pest()->presets()->custom('laravelStrict', function () {
    return [
        // No protected methods (except casts).
        expect('App')->classes()->not->toHaveProtectedMethodsBesides(['casts']),
        // No abstract classes
        expect('App')->classes()->not->toBeAbstract(),
        // Enforces strict_types
        expect('App')->toUseStrictTypes(),
        // Enforces strict equality
        expect('App')->toUseStrictEquality(),
        // Forces classes to be final
        expect('App\Models')->classes()->toBeFinal(),
        // Prevents usage of sleep and usleep
        expect([
            'sleep',
            'usleep',
        ])->not->toBeUsed(),
    ];
});
arch('laravel strict')->preset()->laravelStrict();
