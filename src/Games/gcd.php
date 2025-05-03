<?php

declare(strict_types=1);

function getDescription(): string
{
    return 'Find the greatest common divisor of given numbers.';
}

function gcd(int $a, int $b): int
{
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function getGameData(): callable
{
    return function (): array {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "$num1 $num2";
        $correctAnswer = (string) gcd($num1, $num2);

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
}