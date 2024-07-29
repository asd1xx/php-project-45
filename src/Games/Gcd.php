<?php

namespace App\Games\Gcd;

use function App\Engine\runGame;

use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

/**
 * Функция принимает два числа и определяет наибольший общий делитель.
 */
function getGcd(int $num1, int $num2): int
{
    while ($num2 !== 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return $num1;
}

/**
 * Игра "Наибольший общий делитель".
 * Суть игры в следующем: пользователю показывается
 * два случайных числа от 1 до 15, например, 14 5.
 * Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.
 */
function runGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $getQuestion = function () {
        $randOne = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $randTwo = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $question = "$randOne $randTwo";
        $correctAnswer = (string) getGcd($randOne, $randTwo);

        return [$question, $correctAnswer];
    };

    runGame($rules, $getQuestion);
}
