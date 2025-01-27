<?php

namespace App\Games\Calc;

use function App\Engine\runGame;

use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

/**
 * Функция принимает 2 числа и оператор. Считает результат выражения.
 */
function calculate(int $num1, int $num2, string $operator)
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            break;
    }
}

/**
 * Игра "Калькулятор".
 * Суть игры в следующем: пользователю показывается случайное
 * математическое выражение с операндами от 1 до 15, например 5 + 10,
 * которое нужно вычислить и записать правильный ответ.
 */
function runCalc()
{
    $rules = 'What is the result of the expression?';
    $getQuestion = function () {
        $operators = ['+', '-', '*'];
        $randOne = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $randTwo = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $key = array_rand($operators);
        $randOperator = $operators[$key];
        $question = "$randOne $randOperator $randTwo";
        $correctAnswer = (string) calculate($randOne, $randTwo, $randOperator);

        return [$question, $correctAnswer];
    };

    runGame($rules, $getQuestion);
}
