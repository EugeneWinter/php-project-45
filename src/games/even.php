<?php
declare(strict_types=1);

const EVEN_GAME_DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getEvenDescription(): string
{
    return EVEN_GAME_DESCRIPTION;
}

function getEvenGameData(): callable
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