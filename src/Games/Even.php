<?php

declare(strict_types=1);

const DESCRIPTIONS = [
    'en' => 'Answer "yes" if the number is even, otherwise answer "no".',
    'ru' => 'Ответьте "yes", если число чётное, иначе ответьте "no".'
];

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getDescription(string $language): string
{
    return DESCRIPTIONS[$language];
}

function getGameData(): callable
{
    return function (): array {
        $number = rand(1, 100);
        $correctAnswer = isEven($number) ? 'yes' : 'no';

        return [
            'question' => (string) $number,
            'correctAnswer' => $correctAnswer
        ];
    };
}