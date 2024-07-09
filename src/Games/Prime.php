<?php

namespace Project\Src\Games;

use function Project\Src\engine;

    /**
     * Функция принимает число и определяет является ли число простым.
     * @param $number
     * 
     * @return string 'yes' или 'no'
     */
function isPrime($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return 'no';
        }
    }

    return 'yes';
}

    /**
     * Игра "Простое ли число?".
     * Суть игры в следующем: пользователю показывается рандомное число от 1 до 100.
     * Нужно ответить является ли число простым.
     * yes - число является простым.
     * no - число не является простым.
     * 
     * @return callable and calling the engine() function
     */
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
