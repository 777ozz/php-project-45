<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;

function gcdGame(&$result)
{
    line('Find the greatest common divisor of given numbers.');

    for ($i = 0; $i < 3; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);
        $pairNum = "{$num1} {$num2}";
        $max = max($num1, $num2);
        $min = min($num1, $num2);
        $remainder = 1;

        while ($remainder !== 0) {
            $remainder = $max % $min;
            $max = $min;
            $min = $remainder;
        }

        $gcd = $max;

        line("Question: %s", $pairNum);
        $answer = prompt('Your answer');

        if ($answer === "{$gcd}") {
            line('Correct!');
            $result++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.\n");
            break;
        }
    }
}
