<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;

function progressionGenerator(int $numStart, int $numStep, int $progressionLength): array
{
    $progression = [];
    $progression[] = $numStart;
    for ($i = 1; $i < $progressionLength; $i++) {
        $progression[] = $numStart + $numStep * $i;
    }
    return $progression;
}

function progressionGame(int &$result): void
{
    line('What number is missing in the progression?');

    for ($i = 0; $i < 3; $i++) {
        $progressionLength = random_int(5, 10);
        $numStart = random_int(1, 99);
        $numStep = random_int(1, 25);
        $indexHide = random_int(0, $progressionLength - 1);
        $progression = progressionGenerator($numStart, $numStep, $progressionLength);
        $numHide = $progression[$indexHide];
        $progression[$indexHide] = '..';
        $progressionString = implode(' ', $progression);

        line("Question: %s", $progressionString);
        $answer = prompt('Your answer');

        if ($answer === "{$numHide}") {
            line('Correct!');
            $result++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$numHide}'.\n");
            break;
        }
    }
}
