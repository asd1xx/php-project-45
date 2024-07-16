### Hexlet tests and linter status:
[![Actions Status](https://github.com/asd1xx/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/asd1xx/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/475debc79e4bc29ba228/maintainability)](https://codeclimate.com/github/asd1xx/php-project-45/maintainability)

# Brain Games (Игры разума)

## О проекте

«Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново.

## Системные требования

- Linux, MacOS
- PHP 8.3
- Composer 2.6.6

## Инструкция по установке

Выполните последовательно следующие действия:

1. Клонируем репозиторий:
    
    ```bash
    git clone git@github.com:asd1xx/php-project-45.git brain-games
    ```
    
2. Переходим в директорию проекта:
    
    ```bash
    cd brain-games
    ```
    
3. Устанавливаем зависимости:
    
    ```bash
    make install
    ```
    
4. Добавляем права на исполнение файлов в директории bin:
    
    ```bash
    chmod +x ./bin/*
    ```

## Запуск игр

Команды для запуска игр:

- `make brain-even` — запуск игры "Проверка на четность".
- `make brain-calc` — запуск игры "Калькулятор".
- `make brain-gcd` — запуск игры "Наибольший общий делитель".
- `make brain-progression` — запуск игры "Арифметическая прогрессия".
- `make brain-prime` — запуск игры "Простое ли число?".

## Демонстрация игр

### Игра "Проверка на чётность"
[![asciicast](https://asciinema.org/a/MgY7iGosUPEN0INb1ukYHACzb.svg)](https://asciinema.org/a/MgY7iGosUPEN0INb1ukYHACzb)

### Игра "Калькулятор"
[![asciicast](https://asciinema.org/a/ylvaYp3XQW6hUzoHipkKFoAXn.svg)](https://asciinema.org/a/ylvaYp3XQW6hUzoHipkKFoAXn)

### Игра "Наибольший общий делитель"
[![asciicast](https://asciinema.org/a/acqELJ4dL3Cg8uV5QdhJCEX33.svg)](https://asciinema.org/a/acqELJ4dL3Cg8uV5QdhJCEX33)

### Игра "Арифметическая прогрессия"
[![asciicast](https://asciinema.org/a/vykpzNDyEdH8tR3t6uBTCQUOO.svg)](https://asciinema.org/a/vykpzNDyEdH8tR3t6uBTCQUOO)

### Игра "Простое ли число?"
[![asciicast](https://asciinema.org/a/x3gdcxl03utfHQYtZBT0YlPBp.svg)](https://asciinema.org/a/x3gdcxl03utfHQYtZBT0YlPBp)
