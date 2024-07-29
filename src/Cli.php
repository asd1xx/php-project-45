<?php

namespace App\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Тестовая функция для знакомства с игроком.
 */
function welcome(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
}
