<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Games\Even\evenGame;
use function BrainGames\Games\Calc\calcGame;
use function BrainGames\Games\Gcd\gcdGame;
use function BrainGames\Games\Progression\progressionGame;
use function BrainGames\Games\Prime\primeGame;

function gameEngine(string $gameName): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    $result = 0;

    switch ($gameName) {
        case 'even':
            evenGame($result);
            break;
        case 'calc':
            calcGame($result);
            break;
        case 'gcd':
            gcdGame($result);
            break;
        case 'progression':
            progressionGame($result);
            break;
        case 'prime':
            primeGame($result);
            break;
    }

    if ($result === 3) {
        line("Congratulations, %s!", $name);
    } else {
        line("Let's try again, %s!", $name);
    }
}
