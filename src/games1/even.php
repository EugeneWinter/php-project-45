<?php
declare(strict_types=1);

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getDescription(): string
{
    return DESCRIPTION;
}

function getGameData(): callable
{
    return function(): array {
        $number = rand(1, 100);
        $correctAnswer = isEven($number) ? 'yes' : 'no';
        return [
            'question' => (string) $number,
            'correctAnswer' => $correctAnswer
        ];
    };
}