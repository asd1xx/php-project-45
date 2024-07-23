<?php

namespace App\Games\Gcd;

use function App\Engine\runGame;

const MIN = 1;
const MAX = 15;

/**
 * Функция принимает два числа и определяет наибольший общий делитель.
 * @param int $num1
 * @param int $num2
 *
 * @return string возвращает строку с наибольшим общим делителем двух чисел
 */
function getGcd(int $num1, int $num2): string
{
    while ($num2 !== 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return (string) $num1;
}

/**
 * Игра "Наибольший общий делитель".
 * Суть игры в следующем: пользователю показывается
 * два случайных числа от 1 до 15, например, 14 5.
 * Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.
 *
 * @return void and calling the engine() function
 */
function runGcd()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $getQuestion = function () {
        $randOne = mt_rand(MIN, MAX);
        $randTwo = mt_rand(MIN, MAX);
        $question = "$randOne $randTwo";
        $correctAnswer = getGcd($randOne, $randTwo);

        return [$question, $correctAnswer];
    };

    runGame($rules, $getQuestion);
}
