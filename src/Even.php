<?php

namespace Project\Src;

use function cli\line;
use function cli\prompt;

function even()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $rand = mt_rand(1, 15);
    line("Question: {$rand}");
    $answer = mb_strtolower(prompt('Your answer'));
    $correct = line('Correct!');
    $congratulations = line("Congratulations, {$name}!");

    for ($i = 1; ($rand % 2 === 0 && $answer === 'yes' && $i < 3) || ($rand % 2 !== 0 && $answer === 'no' && $i < 3); $i++) {
        $congratulations;
        $rand = mt_rand(1, 15);
        line("Question: {$rand}");
        $answer = mb_strtolower(prompt('Your answer'));
        if ($rand % 2 !== 0 && $answer === 'yes') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.\nLet's try again, Bill!");
        } elseif ($rand % 2 === 0 && $answer === 'no') {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.\nLet's try again, Bill!");
        }
    }
}
