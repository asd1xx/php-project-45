<?php

namespace Project\Src\Games;

use function Project\Src\engine;

function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }

    return 'yes';
}

function prime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $getQuestion = function() {
        $question = mt_rand(1, 100);
        $correctAnswer = isPrime($question);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
