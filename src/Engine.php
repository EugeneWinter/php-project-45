<?php

declare(strict_types=1);

use function cli\line;
use function cli\prompt;

function runGame(callable $getGameData, string $description): void
{
    require_once __DIR__ . '/cli.php'; // Используем require_once
    $name = welcomeUser();

    line($description);

    $roundsCount = 3;
    
    for ($i = 0; $i < $roundsCount; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getGameData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line("Winner Winner Chicken Dinner, %s!", $name);
    line("        ,~.");
    line("       (o o)");
    line("      /  V  \\");
    line("     /(  _  )\\");
    line("      ^^   ^^");
}