<?php

declare(strict_types=1);

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function getDescription(): string
{
    return 'Answer "yes" if the number is even, otherwise answer "no".';
}

function getGameData(): callable
{
    return function (): array {
        $question = rand(1, 100);
        $correctAnswer = isEven($question) ? 'yes' : 'no';

        return [
            'question' => (string) $question,
            'correctAnswer' => $correctAnswer
        ];
    };
}