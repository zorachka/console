<?php

declare(strict_types=1);

use Zorachka\Framework\Console\Application;
use Zorachka\Framework\Console\ConsoleApplication;

test('ConsoleApplication constructor', function () {
    $application = new ConsoleApplication(
        'Console App',
        false,
        [],
    );

    expect($application)->toBeInstanceOf(Application::class);
    expect($application->getName())->toBe('Console App');
    expect(array_keys($application->getCommands()))->toMatchArray(['help', 'list']);
});
