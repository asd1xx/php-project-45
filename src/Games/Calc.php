<?php

namespace Project\Src\Games;

use function Project\Src\engine;

/**
 * Игра "Калькулятор".
 * Суть игры в следующем: пользователю показывается случайное
 * математическое выражение с операндами от 1 до 15, например 5 + 10,
 * которое нужно вычислить и записать правильный ответ.
 *
 * @return void and calling the engine() function
 */
function calc()
{
    $rules = 'What is the result of the expression?';
    $getQuestion = function () {
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
