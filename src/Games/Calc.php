<?php

namespace Project\Src\Games;

use function Project\Src\engine;

function calc()
{
    $rules = 'What is the result of the expression?';
    $getQuestion = function() {
        $operators = ['+', '-', '*'];
        $randOne = mt_rand(1, 15);
        $randTwo = mt_rand(1, 15);
        $key = array_rand($operators);
        $randOperator = $operators[$key];
        $question = "$randOne $randOperator $randTwo";
        $correctAnswer = (string)eval("return $question;");

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
