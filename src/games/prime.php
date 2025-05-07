<?php
declare(strict_types=1);

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num): bool
{
    if ($num < 2) return false;
    for ($i = 2, $max = sqrt($num); $i <= $max; $i++) {
        if ($num % $i === 0) return false;
    }
    return true;
}

function getDescription(): string
{
    return DESCRIPTION;
}

function getGameData(): callable
{
    return function (): array {
        $number = rand(1, 50);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        return [
            'question' => (string) $number,
            'correctAnswer' => $correctAnswer
        ];
    };
}