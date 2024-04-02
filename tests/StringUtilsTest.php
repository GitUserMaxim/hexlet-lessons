<?php

require '../src/StringUtils.php';
require __DIR__ . '/../vendor/autoload.php';

use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');

Assert::eq(capitalize('hello'), 'Hello');

echo 'Все тесты пройдены! Ура!';