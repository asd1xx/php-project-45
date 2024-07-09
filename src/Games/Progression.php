<?php

namespace Project\Src\Games;

use function Project\Src\engine;

    /**
     * Функция для получения арифметической прогрессии.
     * $a - первое случайное число прогрессии от 1 до 100.
     * $d - случайный шаг прогрессии от 2 до 10.
     *
     * @return array возвращает массив с арифметической прогрессией
     */
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

    /**
     * Игра "Арифметическая прогрессия".
     * Суть игры в следующем: пользователю показывается ряд чисел, образующих
     * арифметическую прогрессию, заменив любое из чисел двумя точками.
     * Игрок должен определить это число.
     *
     * @return callable and calling the engine() function
     */
function progression()
{
    $rules = 'What number is missing in the progression?';
    $getQuestion = function () {
        $array = getProgression();
        $randIndex = array_rand($array);
        $correctAnswer = (string) $array[$randIndex];
        $array[$randIndex] = '..';
        $question = implode(' ', $array);

        return [$question, $correctAnswer];
    };

    engine($rules, $getQuestion);
}
