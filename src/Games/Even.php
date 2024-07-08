<?php

namespace Project\Src\Games;

use function Project\Src\engine;

function even()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestion = function() {
        $question = mt_rand(1, 15);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
