<?php

require 'vendor/autoload.php';

use BracketValidator\BracketValidator;

try {
    $result = BracketValidator::isValid("(())(())");
    var_dump($result); // true
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
