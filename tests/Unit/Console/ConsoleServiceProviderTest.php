<?php

declare(strict_types=1);

use Zorachka\Framework\Console\Application;
use Zorachka\Framework\Console\ConsoleConfig;
use Zorachka\Framework\Console\ConsoleServiceProvider;

test('ConsoleServiceProvider should contain definitions', function () {
    expect(
        array_keys(ConsoleServiceProvider::getDefinitions())
    )->toMatchArray([
        Application::class,
        ConsoleConfig::class,
    ]);
});
