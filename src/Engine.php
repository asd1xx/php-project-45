<?php

namespace Project\Src;

use function cli\line;
use function cli\prompt;

// Знакомство
function userName()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    return $name;
}
