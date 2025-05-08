<?php

declare(strict_types=1);

const CALC_GAME_DESCRIPTION = 'What is the result of the expression?';

function calculate(int $a, int $b, string $operator): int
{
    return match ($operator) {
        '+' => $a + $b,
        '-' => $a - $b,
        '*' => $a * $b,
        default => throw new Exception("Unknown operator: $operator")
    };
}

function getCalcDescription(): string
{
    return CALC_GAME_DESCRIPTION;
}

function getCalcGameData(): callable
{
    return function (): array {
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];
        $a = rand(1, 20);
        $b = rand(1, 20);
        $question = "$a $operator $b";
        $correctAnswer = (string) calculate($a, $b, $operator);

        return compact('question', 'correctAnswer');
    };
}
