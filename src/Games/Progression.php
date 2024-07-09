<?php

namespace Project\Src\Games;

use function Project\Src\engine;

function getProgression()
{
    $a = mt_rand(1, 100);
    $d = mt_rand(2, 10);
    $arr = [$a];

    for ($i = 1; $i < 10; $i++) {
        $arr[$i] = $arr[$i - 1] + $d;
    }

    return $arr;
}

function progression()
{
    $rules = 'What number is missing in the progression?';
    $getQuestion = function() {
        $array = getProgression();
        $randIndex = array_rand($array);
        $correctAnswer = (string) $array[$randIndex];
        $array[$randIndex] = '..';
        $question = implode(' ', $array);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
