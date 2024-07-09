<?php

namespace Project\Src\Games;

use function Project\Src\engine;

    /**
     * Игра "Проверка на чётность".
     * Суть игры в следующем: пользователю показывается случайное число от 1 до 15.
     * Нужно ответить yes, если число чётное, или no - если нечётное.
     * 
     * @return callable and calling the engine() function
     */
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
