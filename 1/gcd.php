<?php

declare(strict_types=1);

namespace EugeneWinter\BrainGames\Games\Gcd;

const GCD_GAME_DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    return $b !== 0 ? gcd($b, $a % $b) : $a;
}

function getGcdDescription(): string
{
    return GCD_GAME_DESCRIPTION;
}

function getGcdGameData(): callable
{
    return function (): array {
        $a = rand(1, 50);
        $b = rand(1, 50);
        $question = "$a $b";
        $correctAnswer = (string) gcd($a, $b);

        return compact('question', 'correctAnswer');
    };
}
