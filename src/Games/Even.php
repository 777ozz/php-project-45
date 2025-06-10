<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;

function evenGame(&$result)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 0; $i < 3; $i++) {
        $num = random_int(1, 99);
        $isEven = $num % 2 === 0;
        $rightAnswer = ($isEven) ? 'yes' : 'no';

        line("Question: %s", $num);
        $answer = prompt('Your answer');

        if ($answer === $rightAnswer) {
            line('Correct!');
            $result++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.\n");
            break;
        }
    }
}
