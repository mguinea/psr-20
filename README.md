# PSR-20 Implementation

[![Latest Version](https://img.shields.io/github/release/mguinea/psr-20.svg?style=flat-square)](https://github.com/mguinea/psr-20/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Tests](https://github.com/mguinea/psr-20/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/mguinea/psr-20/actions/workflows/tests.yml?query=branch%3Amain)

A PSR-20 Implementation

## Installation

```bash
composer install mguinea/psr-20
```

## Usage

### Create a clock and retrieve DateTimeImmutable

```php
<?php

use Mguinea\Psr20\Clock;

$now = (new Clock())->now(); // $now is an instance of DateTimeImmutable
```

## Test

Run phpunit suite

```bash
./vendor/bin/phpunit tests
```
