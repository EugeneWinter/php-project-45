<?php
declare(strict_types=1);

use function cli\line;
use function cli\prompt;

const GAME_MESSAGES = [
    'correct' => 'Correct!',
    'wrong' => "'%s' is wrong answer ;(. Correct answer was '%s'.",
    'try_again' => "Let's try again, %s!"
];

function runGame(callable $getGameData, string $description, string $name): void
{
    line($description);
    
    $roundsCount = 3;
    
    for ($i = 0; $i < $roundsCount; $i++) {
        ['question' => $question, 'correctAnswer' => $correctAnswer] = $getGameData();
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer !== $correctAnswer) {
            line(GAME_MESSAGES['wrong'], $answer, $correctAnswer);
            line(GAME_MESSAGES['try_again'], $name);
            return;
        }
        line(GAME_MESSAGES['correct']);
    }
    
    line("Congratulations, %s!", $name);
}
