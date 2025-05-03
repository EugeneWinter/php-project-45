<?php

declare(strict_types=1);

const DESCRIPTIONS = [
    'en' => 'Find the greatest common divisor of given numbers.',
    'ru' => 'Найдите наибольший общий делитель данных чисел.'
];

function gcd(int $a, int $b): int
{
    return $b ? gcd($b, $a % $b) : $a;
}

function getDescription(string $language): string
{
    return DESCRIPTIONS[$language];
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