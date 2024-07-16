<?php

namespace App\Games\Calc;

use function App\Engine\engine;

const MIN = 1;
const MAX = 15;

/**
 * Функция принимает 2 числа и оператор. Считает результат выражения.
 * @param int $num1
 * @param int $num2
 * @param string $operator
 *
 * @return int возвращает результат выражения в строке
 */
function makeCalc(int $num1, int $num2, $operator): int
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
    }
}

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
        $randOne = mt_rand(MIN, MAX);
        $randTwo = mt_rand(MIN, MAX);
        $key = array_rand($operators);
        $randOperator = $operators[$key];
        $question = "$randOne $randOperator $randTwo";
        $correctAnswer = (string) makeCalc($randOne, $randTwo, $randOperator);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
