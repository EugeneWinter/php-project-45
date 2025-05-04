```text                                                                              
,-----.                 ,--.          ,----.                                    
|  |) /_ ,--.--. ,--,--.`--',--,--,  '  .-./    ,--,--.,--,--,--. ,---.  ,---.  
|  .-.  \|  .--'' ,-.  |,--.|      \ |  | .---.' ,-.  ||        || .-. :(  .-'  
|  '--' /|  |   \ '-'  ||  ||  ||  | '  '--'  |\ '-'  ||  |  |  |\   --..-'  `) 
`------' `--'    `--`--'`--'`--''--'  `------'  `--`--'`--`--`--' `----'`----'

```
                                                                                                                
Ультимативное решение, объединяющее 5 математических игр для тренировки мозга в едином стиле.

## О проекте

Это набор консольных игр, включающий:
- Проверку на чётность
- Математический калькулятор
- Поиск наибольшего общего делителя
- Арифметическую прогрессию
- Проверку на простое число

## 🛠 Особенности игр

### Общие для всех игр:
-  Интерфейс с выбором языка (русский/английский)
-  3 раунда в каждой игре
-  Крутая ASCII картинка при победе

## Уникальные особенности

- **Проверка на чётность**:
  - Случайная генерация чисел от 1 до 100
  - Простая механика "да/нет"

```bash
Welcome to the Brain Games!
May I have your name? Albert
Hello, Albert!
Answer "yes" if the number is even, otherwise answer "no".

Question: 15
Your answer: no
Correct!
Question: 28
Your answer: yes
Correct!
Question: 7
Your answer: no
Correct!

Winner Winner Chicken Dinner, Albert!
        ,~.
       (o o)
      /  V  \
     /(  _  )\
      ^^   ^^
```
```bash
Welcome to the Brain Games!
May I have your name? Albert
Hello, Albert!
Answer "yes" if the number is even, otherwise answer "no".

Question: 15
Your answer: yes
'yes' is wrong answer ;(. Correct answer was 'no'.
Let's try again, Albert!
```

- **Калькулятор**:
  - Три операции: сложение, вычитание, умножение
  - Динамический подбор сложности примеров

```bash
Добро пожаловать в Игры Разума!
Как вас зовут? Крис
Привет, Крис!
Каков результат выражения?

Question: 5 + 3
Your answer: 8
Правильно!
Question: 10 - 7
Your answer: 3
Правильно!
Question: 4 * 3
Your answer: 12
Правильно!

Поздравляю, Крис!
        ,~.
       (o o)
      /  V  \
     /(  _  )\
      ^^   ^^
```

```bash
Добро пожаловать в Игры Разума!
Как вас зовут? Крис
Привет, Крис!
Каков результат выражения?

Question: 5 + 3
Your answer: 7
'7' неправильный ответ ;(. Правильный ответ '8'.
Давайте попробуем ещё раз, Крис!
```

- **Наибольший общий делитель**:
  - Алгоритм Евклида для вычисления
  - Парная генерация чисел

```bash
Welcome to the Brain Games!
May I have your name? Jill
Hello, Jill!
Find the greatest common divisor of given numbers.

Question: 25 50
Your answer: 25
Correct!
Question: 100 52
Your answer: 4
Correct!
Question: 3 9
Your answer: 3
Correct!

Winner Winner Chicken Dinner, Jill!
        ,~.
       (o o)
      /  V  \
     /(  _  )\
      ^^   ^^
```

```bash
Welcome to the Brain Games!
May I have your name? Jill
Hello, Jill!
Find the greatest common divisor of given numbers.

Question: 25 50
Your answer: 10
'10' is wrong answer ;(. Correct answer was '25'.
Let's try again, Jill!
```

- **Арифметическая прогрессия**:
  - Случайная длина от 5 до 10 элементов
  - Переменный шаг прогрессии
  - Один скрытый элемент

```bash
Добро пожаловать в Игры Разума!
Как вас зовут? Клэр
Привет, Клэр!
Какое число пропущено в прогрессии?

Question: 5 7 9 .. 13 15
Your answer: 11
Правильно!
Question: 2 5 8 .. 14 17
Your answer: 11
Правильно!
Question: 14 19 24 29 34 39 44 49 54 ..
Your answer: 59
Правильно!

Поздравляю, Клэр!
        ,~.
       (o o)
      /  V  \
     /(  _  )\
      ^^   ^^
```

```bash
Добро пожаловать в Игры Разума!
Как вас зовут? Клэр
Привет, Клэр!
Какое число пропущено в прогрессии?

Question: 5 7 9 .. 13 15
Your answer: 10
'10' неправильный ответ ;(. Правильный ответ '11'.
Давайте попробуем ещё раз, Клэр!
```

- **Простое число**:
  - Оптимизированная проверка на простоту
  - Диапазон чисел 1-50

```bash
Welcome to the Brain Games!
May I have your name? Ada
Hello, Ada!
Answer "yes" if given number is prime. Otherwise answer "no".

Question: 7
Your answer: yes
Correct!
Question: 22
Your answer: no
Correct!
Question: 13
Your answer: yes
Correct!

Winner Winner Chicken Dinner, Ada!
        ,~.
       (o o)
      /  V  \
     /(  _  )\
      ^^   ^^
```

```bash
Welcome to the Brain Games!
May I have your name? Ada
Hello, Ada!
Answer "yes" if given number is prime. Otherwise answer "no".

Question: 7
Your answer: no
'no' is wrong answer ;(. Correct answer was 'yes'.
Let's try again, Ada!
```

## 🚀 Запуск приложения

1. Установите PHP 8.0+ и Composer
2. Выполните в терминале:
```bash
git clone https://github.com/EugeneWinter/php-project-45
cd brain-games
composer install
chmod +x bin/*
```

3. Запустите нужную игру:
```bash
./bin/brain-games       # Ультимативное решение со всеми играми
./bin/brain-even        # Чётность
./bin/brain-calc        # Калькулятор
./bin/brain-gcd         # НОД
./bin/brain-progression # Прогрессия
./bin/brain-prime       # Простое число
```

Или используйте Makefile:
```bash
make brain-games
make brain-even
make brain-calc
make brain-gcd
make brain-progression
make brain-prime
```

## ⚠️ Возможные проблемы

> **Note**  
> При ошибках проверьте:
> - Наличие прав на выполнение файлов (`chmod +x bin/*`)
> - Установлен ли PHP и Composer
> - Корректность путей при запуске

### Hexlet tests and linter status:
[![Actions Status](https://github.com/EugeneWinter/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/EugeneWinter/php-project-45/actions)

[![Actions Status](https://github.com/EugeneWinter/php-project-45/workflows/hexlet-check/badge.svg)](https://github.com/EugeneWinter/php-project-45/actions)

[![Maintainability](https://api.codeclimate.com/v1/badges/<YOUR_BADGE_ID>/maintainability)](https://codeclimate.com/github/EugeneWinter/php-project-45/maintainability)