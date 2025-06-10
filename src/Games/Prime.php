<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;

function primeGame(&$result)
{
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }

    for ($i = 0; $i < 3; $i++) {
        $num = random_int(1, 100);
        $rightAnswer = isPrime($num) ? 'yes' : 'no';

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
