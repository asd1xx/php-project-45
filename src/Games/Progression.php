<?php

namespace App\Games\Progression;

use function App\Engine\engine;

const MIN = 1;
const MAX = 100;
const MIN_STEP = 2;
const MAX_STEP = 10;
const SIZE = 10;

/**
 * Функция для получения арифметической прогрессии из 10 чисел.
 * $a - первое случайное число прогрессии от 1 до 100.
 * $d - случайный шаг прогрессии от 2 до 10.
 *
 * @return array возвращает массив с арифметической прогрессией
 */
function getProgression()
{
    $a = mt_rand(MIN, MAX);
    $d = mt_rand(MIN_STEP, MAX_STEP);
    $arr = [$a];

    for ($i = 1; $i < SIZE; $i++) {
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
 * @return void and calling the engine() function
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
