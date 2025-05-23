<?php

declare(strict_types=1);

namespace EugeneWinter\BrainGames;

const MESSAGES = [
    'welcome' => 'Welcome to the Brain Games!',
    'ask_name' => 'May I have your name?',
    'hello' => 'Hello, %s!',
    'exit' => 'Goodbye, %s!',
    'menu' => "Choose a game:\n1. Even\n2. Calculator\n3. GCD\n4. Progression\n5. Prime\n0. Exit\n\nYour choice: ",
    'invalid_choice' => 'Invalid choice. Try again.'
];

use function cli\line;

function showMenu(): void
{
    echo MESSAGES['menu'];
}

function exitGame(string $name): void
{
    line(MESSAGES['exit'], $name);
    exit;
}

function showMessage(string $key, mixed ...$args): void
{
    line(MESSAGES[$key], ...$args);
}
