<?php

namespace App\Games\Even;

use function App\Engine\runGame;

use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

/**
 * Функция принимает число и определяет является ли число чётным.
 */
function isEven(int $number): bool
{
    return $number % 2 === 0;
}

/**
 * Игра "Проверка на чётность".
 * Суть игры в следующем: пользователю показывается случайное число от 1 до 15.
 * Нужно ответить yes, если число чётное, или no - если нечётное.
 */
function runEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestion = function () {
        $question = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    runGame($rules, $getQuestion);
}
