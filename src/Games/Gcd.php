<?php

namespace Project\Src\Games;

use function Project\Src\engine;

function getGcd(int $num1, int $num2)
{
    while ($num2 !== 0){
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return (string) $num1;
}

function gcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $getQuestion = function() {
        $randOne = mt_rand(1, 15);
        $randTwo = mt_rand(1, 15);
        $question = "$randOne $randTwo";
        $correctAnswer = getGcd($randOne, $randTwo);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
