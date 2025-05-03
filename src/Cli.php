<?php

declare(strict_types=1);

use function cli\line;
use function cli\prompt;

function welcomeUser(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}