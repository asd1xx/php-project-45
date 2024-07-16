<?php

namespace App\Games\Prime;

use function App\Engine\engine;

const MIN = 1;
const MAX = 15;

/**
 * Функция принимает число и определяет является ли число простым.
 * @param int $number
 *
 * @return string возвращает строку 'yes' или 'no'
 */
function isPrime(int $number)
{
    if ($number < 2) {
        return 'no';
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }

    return 'yes';
}

/**
 * Игра "Простое ли число?".
 * Суть игры в следующем: пользователю показывается рандомное число от 1 до 15.
 * Нужно ответить является ли число простым.
 * yes - число является простым.
 * no - число не является простым.
 *
 * @return void and calling the engine() function
 */
function prime()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $getQuestion = function () {
        $question = mt_rand(MIN, MAX);
        $correctAnswer = isPrime($question);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
