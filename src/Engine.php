<?php

declare(strict_types=1);

use function cli\line;
use function cli\prompt;

if (!defined('GAME_MESSAGES')) {
    define('GAME_MESSAGES', [
        'en' => [
            'correct' => 'Correct!',
            'wrong' => "'%s' is wrong answer ;(. Correct answer was '%s'.",
            'try_again' => "Let's try again, %s!",
        ],
        'ru' => [
            'correct' => 'Правильно!',
            'wrong' => "'%s' неправильный ответ ;(. Правильный ответ '%s'.",
            'try_again' => "Давайте попробуем ещё раз, %s!",
        ]
    ]);
}

if (!function_exists('runGame')) {
    function runGame(callable $getGameData, string $description, string $language, string $name): void
    {
        line($description);
        
        $roundsCount = 3;
        
        for ($i = 0; $i < $roundsCount; $i++) {
            ['question' => $question, 'correctAnswer' => $correctAnswer] = $getGameData();
            line("Question: %s", $question);
            $answer = prompt('Your answer');

            if ($answer !== $correctAnswer) {
                line(GAME_MESSAGES[$language]['wrong'], $answer, $correctAnswer);
                line(GAME_MESSAGES[$language]['try_again'], $name);
                return;
            }
            line(GAME_MESSAGES[$language]['correct']);
        }
        
        line($language === 'ru' 
            ? "Победа! Победа! Время обеда, %s!" 
            : "Winner Winner Chicken Dinner, %s!", 
        $name);
        line("        ,~.");
        line("       (o o)");
        line("      /  V  \\");
        line("     /(  _  )\\");
        line("      ^^   ^^");
    }
}