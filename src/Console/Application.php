<?php

declare(strict_types=1);

namespace Zorachka\Framework\Console;

interface Application
{
    /**
     * Get application name.
     * @return string
     */
    public function getName(): string;

    /**
     * Get all available commands.
     * @return array
     */
    public function getCommands(): array;

    /**
     * Run application.
     */
    public function run(): void;
}
