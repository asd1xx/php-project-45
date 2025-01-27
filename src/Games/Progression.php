<?php

namespace App\Games\Progression;

use function App\Engine\runGame;

use const App\Engine\MIN_RANDOM_NUMBER;
use const App\Engine\MAX_RANDOM_NUMBER;

const MIN_PROGRESSION_STEP = 2;
const MAX_PROGRESSION_STEP = 10;
const PROGRESSION_SIZE = 10;
const PROGRESSION_END = 150;
const ARRAY_KEY = 0;

/**
 * Функция для получения арифметической прогрессии из 10 чисел.
 * $progressionStart - первое случайное число прогрессии от 1 до 15.
 * $progressionStep - случайный шаг прогрессии от 2 до 10.
 */
function getProgression(): array
{
    $progressionStart = mt_rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
    $progressionStep = mt_rand(MIN_PROGRESSION_STEP, MAX_PROGRESSION_STEP);
    $progressionFull = range($progressionStart, PROGRESSION_END, $progressionStep);
    $progression = array_slice($progressionFull, ARRAY_KEY, PROGRESSION_SIZE);

    return $progression;
}

/**
 * Игра "Арифметическая прогрессия".
 * Суть игры в следующем: пользователю показывается ряд чисел, образующих
 * арифметическую прогрессию, заменив любое из чисел двумя точками.
 * Игрок должен определить это число.
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
