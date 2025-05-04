<?php
declare(strict_types=1);

const LANGUAGES = ['en', 'ru'];
const MESSAGES = [
    'en' => [
        'welcome' => 'Welcome to the Brain Games!',
        'ask_name' => 'May I have your name?',
        'hello' => 'Hello, %s!',
        'exit' => 'Goodbye, %s!',
        'menu' => "Choose a game:\n1. Even\n2. Calc\n3. GCD\n4. Progression\n5. Prime\n0. Exit\n\nYour choice: ",
        'invalid_choice' => 'Invalid choice. Try again.',
        'select_language' => 'Select language:',
        'language_options' => "en - English\nru - Russian",
        'invalid_language' => 'Invalid language. Try again: '
    ],
    'ru' => [
        'welcome' => 'Добро пожаловать в Игры Разума!',
        'ask_name' => 'Как вас зовут?',
        'hello' => 'Привет, %s!',
        'exit' => 'До свидания, %s!',
        'menu' => "Выберите игру:\n1. Чётность\n2. Калькулятор\n3. НОД\n4. Прогрессия\n5. Простое число\n0. Выход\n\nВаш выбор: ",
        'invalid_choice' => 'Неверный выбор. Попробуйте снова.',
        'select_language' => 'Выберите язык:',
        'language_options' => "en - English\nru - Русский",
        'invalid_language' => 'Неверный язык. Попробуйте снова: '
    ]
];

use function cli\line;
use function cli\prompt;

function selectLanguage(): string
{
    if (getenv('PHP_ENV') === 'test') {
        return 'en';
    }

    line(MESSAGES['en']['select_language']);
    line(MESSAGES['en']['language_options']);
    
    while (true) {
        $input = strtolower(trim(fgets(STDIN)));
        if (in_array($input, LANGUAGES)) {
            return $input;
        }
        line(MESSAGES['en']['invalid_language']);
    }
}

function welcomeUser(string $language): string
{
    line(MESSAGES[$language]['welcome']);
    $name = prompt(MESSAGES[$language]['ask_name']);
    line(MESSAGES[$language]['hello'], $name);
    return $name;
}

function showMenu(string $language): void
{
    echo MESSAGES[$language]['menu'];
}

function exitGame(string $language, string $name): void
{
    line(MESSAGES[$language]['exit'], $name);
    exit;
}

function showMessage(string $language, string $key, ...$args): void
{
    line(MESSAGES[$language][$key], ...$args);
}