<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;

function calcGame(&$result)
{
    line('What is the result of the expression?');

    for ($i = 0; $i < 3; $i++) {
        $num1 = random_int(1, 25);
        $num2 = random_int(1, 25);
        $operand = ['+', '-', '*'];
        $randOperand = $operand[array_rand($operand, 1)];
        $expression = "{$num1} {$randOperand} {$num2}";

        switch ($randOperand) {
            case '+':
                $numResult = $num1 + $num2;
                break;
            case '-':
                $numResult = $num1 - $num2;
                break;
            case '*':
                $numResult = $num1 * $num2;
                break;
        }

        line("Question: %s", $expression);
        $answer = prompt('Your answer');

        if (intval($answer) === $numResult) {
            line('Correct!');
            $result++;
        } else {
            print_r("'{$answer}' is wrong answer ;(. Correct answer was '{$numResult}'.\n");
            break;
        }
    }
}
