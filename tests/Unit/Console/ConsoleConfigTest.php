<?php

declare(strict_types=1);

use Zorachka\Framework\Console\ConsoleConfig;

test('ConsoleConfig should be created with defaults', function () {
    $defaultConfig = ConsoleConfig::withDefaults();

    expect($defaultConfig->appName())->toBe('Console App');
    expect($defaultConfig->catchExceptions())->toBeFalsy();
    expect($defaultConfig->commands())->toBeEmpty();
});

test('ConsoleConfig should be able to change appName', function () {
    $defaultConfig = ConsoleConfig::withDefaults();
    $newConfig = $defaultConfig->withAppName('Super Console App');

    expect($newConfig->appName())->toBe('Super Console App');
});

test('ConsoleConfig should be able to change catch exceptions', function () {
    $defaultConfig = ConsoleConfig::withDefaults();
    $newConfig = $defaultConfig->withCatchExceptions(true);

    expect($newConfig->catchExceptions())->toBeTrue();
});

test('ConsoleConfig should be able to add new command', function () {
    $defaultConfig = ConsoleConfig::withDefaults();
    $newConfig = $defaultConfig->withCommand(stdClass::class);

    expect($newConfig->commands())->toContain(stdClass::class);
});
