<?php

namespace App\Games\Even;

use function App\Engine\runGame;
use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

/**
 * Функция принимает число и определяет является ли число чётным.
 * @param int $number
 *
 * @return string возвращает строку 'yes' или 'no'
 */
function isEven(int $number): string
{
    return $number % 2 === 0 ? 'yes' : 'no';
}

/**
 * Игра "Проверка на чётность".
 * Суть игры в следующем: пользователю показывается случайное число от 1 до 15.
 * Нужно ответить yes, если число чётное, или no - если нечётное.
 *
 * @return void and calling the engine() function
 */
function runEven()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestion = function () {
        $question = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $correctAnswer = isEven($question);

        return [$question, $correctAnswer];
    };

    runGame($rules, $getQuestion);
}
