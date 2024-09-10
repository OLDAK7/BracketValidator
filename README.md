# Bracket Validator

Библиотека для проверки корректности скобок в строке.

## Установка

bash
composer require your-username/bracket-validator

## Использование

php
use BracketValidator\\BracketValidator;

try {
$result = BracketValidator::isValid("()()()()");
    var_dump($result); // true
} catch (InvalidArgumentException $e) {
echo $e->getMessage();
}
