<?php
declare(strict_types=1);

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $a, int $b): int
{
    return $b ? gcd($b, $a % $b) : $a;
}

function getDescription(): string
{
    return DESCRIPTION;
}

function getGameData(): callable
{
    return function (): array {
        $a = rand(1, 50);
        $b = rand(1, 50);
        $question = "$a $b";
        $correctAnswer = (string) gcd($a, $b);

        return compact('question', 'correctAnswer');
    };
}