<?php

namespace Project\Src;

use function cli\line;
use function cli\prompt;

function even()
{
    // Знакомство
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");

    // Старт игры "Проверка на чётность"
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= 3; $i++) {
        $rand = mt_rand(1, 15);
        line("Question: {$rand}");
        $answer = mb_strtolower(prompt('Your answer'));
        
        if (($rand % 2 === 0 && $answer === 'yes') || ($rand % 2 !== 0 && $answer === 'no')) {
            line('Correct!');
        }
    
        if ($rand % 2 !== 0 && $answer === 'yes') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, {$name}!");
            break;
        } elseif ($rand % 2 === 0 && $answer === 'no') {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, {$name}!");
            break;
        }
    }
    
    if ($i > 3) {
        line("Congratulations, {$name}!");
    }
}
