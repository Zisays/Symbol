# Symbol

Symbol is a `PHP` library that you can import directly into your framework or your project using composer.

## 一、Installation

### 1. Install using `composer`

````php
composer require zisays/symbol
````

### 2. Install using `composer.json`

````php
"require": {
    "zisays/symbol": "dev-master"
  }
````

### 3. How to use?

You need to `use` into your `php` file first, then use as described in Chapter 2

````php
use Zisays\Symbol\Symbol;
````

If you want to test the functionality of `Symbol` individually, you can create a `test.php` file in the root directory and write the following code

````php
require __DIR__ . '/vendor/autoload.php';

use Zisays\Symbol\Symbol;
````



## 二、Second, the function library introduction

### 1. Symbol.php

#### (1), output

Function: output data

Syntax: Symbol::output($data,$info='Symbol');

parameter

$data : the data you want to output

$info: title information of the output window

Return value: void

example:

````php
Symbol::output('PHP');
Symbol::output('PHP','Symbol');
````

#### (2), server

Function: output server and execution environment information

Syntax: Symbol::server();

Return value: void

example:

````php
Symbol::server()
````