<?php

namespace Project\Src\Games;

use function cli\line;
use function cli\prompt;

function calc()
{
    // Знакомство
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");

    // Старт игры "Калькулятор"
    line('What is the result of the expression?');
    $operators = ['+', '-', '*'];

    for ($i = 0; $i < 3; $i++) {
        $operandOne = mt_rand(1, 15);
        $operandTwo = mt_rand(1, 15);
        $key = array_rand($operators);
        $randOperator = $operators[$key];
        $expression = "$operandOne $randOperator $operandTwo";
        $resultExpression = (string)eval("return $expression;");
        line("Question: {$operandOne} {$randOperator} {$operandTwo}");
        $answer = mb_strtolower(prompt('Your answer'));
        if ($resultExpression === $answer) {
            line('Correct!');
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$resultExpression}'.\nLet's try again, {$name}!");
            break;
        }
    }

    if ($i === 3) {
        line("Congratulations, {$name}!");
    }
}
