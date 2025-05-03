<?php

declare(strict_types=1);

const DESCRIPTIONS = [
    'en' => 'What number is missing in the progression?',
    'ru' => 'Какое число пропущено в прогрессии?'
];

function getDescription(string $language): string
{
    return DESCRIPTIONS[$language];
}

function getGameData(): callable
{
    return function (): array {
        $length = rand(5, 10);
        $step = rand(1, 5);
        $start = rand(1, 20);
        $hiddenIndex = rand(0, $length - 1);

        $progression = [];
        for ($i = 0; $i < $length; $i++) {
            $progression[] = $i === $hiddenIndex ? '..' : $start + $i * $step;
        }

        $question = implode(' ', $progression);
        $correctAnswer = (string) ($start + $hiddenIndex * $step);

        return compact('question', 'correctAnswer');
    };
}