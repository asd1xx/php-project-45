<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

/**
 * Общая логика игр реализована в функции engine.
 * @param string $rules
 * @param callable $getQuestion
 * Принимает аргумент $rules с правилами игры.
 * Принимает функцию обратного вызова $getQuestion.
 *
 * @return void
 */
function engine(string $rules, callable $getQuestion)
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
    line($rules);

    for ($i = 0; $i < 3; $i++) {
        [$question, $correctAnswer] = $getQuestion();
        line("Question: {$question}");
        $answer = mb_strtolower(prompt('Your answer'));
        if ($correctAnswer === $answer) {
            line('Correct!');
        } else {
            $isWrong = "'%s' is wrong answer ;(. Correct answer was '%s'.\n";
            $tryAgain = "Let's try again, %s!\n";
            echo sprintf($isWrong, $answer, $correctAnswer);
            echo sprintf($tryAgain, $userName);
            break;
        }
    }

    if ($i === 3) {
        line("Congratulations, {$userName}!");
    }
}
