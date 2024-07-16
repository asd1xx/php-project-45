<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_QUESTIONS = 3;

/**
 * Общая логика игр реализована в функции engine.
 * @param string $rules
 * @param callable $getQuestion
 * Принимает аргумент $rules с правилами игры.
 * Принимает функцию обратного вызова $getQuestion.
 *
 * @return void
 */
function engine(string $rules, callable $getQuestion): void
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
    line($rules);

    $countCorrectAnswers = 0;

    for ($i = 0; $i < COUNT_QUESTIONS; $i++) {
        [$question, $correctAnswer] = $getQuestion();
        line("Question: {$question}");
        $answer = mb_strtolower(prompt('Your answer'));

        if ($correctAnswer === $answer) {
            line('Correct!');
            $countCorrectAnswers++;
        } else {
            $isWrong = "'%s' is wrong answer ;(. Correct answer was '%s'.\n";
            $tryAgain = "Let's try again, %s!\n";
            echo sprintf($isWrong, $answer, $correctAnswer);
            echo sprintf($tryAgain, $userName);
            break;
        }
    }

    if ($countCorrectAnswers === COUNT_QUESTIONS) {
        line("Congratulations, {$userName}!");
    }
}
