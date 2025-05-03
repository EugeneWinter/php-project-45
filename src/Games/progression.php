<?php

declare(strict_types=1);

function getDescription(): string
{
    return 'What number is missing in the progression?';
}

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function getGameData(): callable
{
    return function (): array {
        $length = rand(5, 10);
        $step = rand(1, 10);
        $start = rand(1, 50);
        $hiddenIndex = rand(0, $length - 1);

        $progression = generateProgression($start, $step, $length);
        $correctAnswer = (string) $progression[$hiddenIndex];
        
        $progression[$hiddenIndex] = '..';
        $question = implode(' ', $progression);

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
}