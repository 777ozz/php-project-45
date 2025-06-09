<?php

namespace BrainGames\Game;

use function cli\line;
use function cli\prompt;

function brainEven()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $result = 0;

    for ($i = 0; $i < 3; $i++) {
        $num = random_int(1, 99);
        $isEven = $num % 2 === 0;

        line("Question: %s", $num);
        $answer = prompt('Your answer');

        if (
            ($isEven && $answer === 'yes')
            || (!$isEven && $answer === 'no')
        ) {
            line('Correct!');
            $result++;
        } else {
            line('"yes" is wrong answer ;(. Correct answer was "no".');
            break;
        }
    }

    if ($result === 3) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
