<?php

namespace App\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Тестовая функция для знакомства с игроком.
 *
 * @return void
 */
function welcome()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
}
