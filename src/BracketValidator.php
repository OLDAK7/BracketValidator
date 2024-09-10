<?php

namespace BracketValidator;

class BracketValidator
{
    public static function isValid($string)
    {
        // Проверка на недопустимые символы
        if (preg_match('/[^()\s\n\t\r]/', $string)) {
            throw new \InvalidArgumentException("Недопустимый символ в строке.");
        }

        $balance = 0;

        // Удаляем пробелы и проверяем баланс скобок
        foreach (str_split($string) as $char) {
            if ($char === '(') {
                $balance++;
            } elseif ($char === ')') {
                $balance--;
                // Если закрывающая скобка идет первой, это ошибка
                if ($balance < 0) {
                    return false;
                }
            }
        }

        return $balance === 0;
    }
}
