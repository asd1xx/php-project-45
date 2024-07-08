<?php

namespace Project\Src;

use function cli\line;
use function cli\prompt;

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
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$userName}!");
            break;
        }
    }

    if ($i === 3) {
        line("Congratulations, {$userName}!");
    }
}
