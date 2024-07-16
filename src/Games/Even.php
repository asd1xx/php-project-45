<?php

namespace App\Games\Even;

use function App\Engine\engine;

const MIN = 1;
const MAX = 15;

/**
 * Функция принимает число и определяет является ли число чётным.
 * @param int $number
 *
 * @return string возвращает строку 'yes' или 'no'
 */
function isEven(int $number)
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
function even()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestion = function () {
        $question = mt_rand(MIN, MAX);
        $correctAnswer = isEven($question);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
