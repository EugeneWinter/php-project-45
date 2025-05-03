<?php

declare(strict_types=1);

function getDescription(): string
{
    return 'What is the result of the expression?';
}

function calculate(int $num1, int $num2, string $operator): int
{
    return match ($operator) {
        '+' => $num1 + $num2,
        '-' => $num1 - $num2,
        '*' => $num1 * $num2,
        default => throw new \Exception("Unknown operator: $operator"),
    };
}

function getGameData(): callable
{
    return function (): array {
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $num1 = rand(1, 50);
        $num2 = rand(1, 50);

        $question = "$num1 $operator $num2";
        $correctAnswer = (string) calculate($num1, $num2, $operator);

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };
}