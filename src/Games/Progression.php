<?php

namespace App\Games\Progression;

use function App\Engine\runGame;
use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

const MIN_PROGRESSION_STEP = 2;
const MAX_PROGRESSION_STEP = 10;
const PROGRESSION_SIZE = 10;

/**
 * Функция для получения арифметической прогрессии из 10 чисел.
 * $a - первое случайное число прогрессии от 1 до 15.
 * $d - случайный шаг прогрессии от 2 до 10.
 *
 * @return array возвращает массив с арифметической прогрессией
 */
function getProgression(): array
{
    $a = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
    $d = mt_rand(MIN_PROGRESSION_STEP, MAX_PROGRESSION_STEP);
    $arr = [$a];

    for ($i = 1; $i < PROGRESSION_SIZE; $i++) {
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
function runProgression()
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

    runGame($rules, $getQuestion);
}
