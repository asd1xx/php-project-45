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
[![asciicast](https://asciinema.org/a/ltTsFHnkL1wHUJvxZq05NFEpo.svg)](https://asciinema.org/a/ltTsFHnkL1wHUJvxZq05NFEpo)

### Игра "Калькулятор"
[![asciicast](https://asciinema.org/a/4eQztDAXxi4yYsmH98Tiw50VJ.svg)](https://asciinema.org/a/4eQztDAXxi4yYsmH98Tiw50VJ)

### Игра "Наибольший общий делитель"
[![asciicast](https://asciinema.org/a/ZLjXdooHxtEgpVOjaijW211sa.svg)](https://asciinema.org/a/ZLjXdooHxtEgpVOjaijW211sa)

### Игра "Арифметическая прогрессия"
[![asciicast](https://asciinema.org/a/LPHI7kiyUwZ9oArd16VH4wZRB.svg)](https://asciinema.org/a/LPHI7kiyUwZ9oArd16VH4wZRB)

### Игра "Простое ли число?"
[![asciicast](https://asciinema.org/a/CGcVKSymEOaFyevOqdTPc1IQS.svg)](https://asciinema.org/a/CGcVKSymEOaFyevOqdTPc1IQS)
