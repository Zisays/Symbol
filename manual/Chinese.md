# Symbol

Symbol是一个 `PHP` 函数库，您可以直接使用composer导入到您的框架或者您的项目中。

## 一、安装

### 1、使用 `composer` 安装

```php
composer require zisays/symbol
```

### 2、使用 `composer.json` 安装

```php
"require": {
    "zisays/symbol": "dev-master"
  }
```

### 3、如何使用？

您需要先 `use` 到您的 `php` 文件中，然后再根据第二章的介绍使用

```php
use Zisays\Symbol\Symbol;
```

如果您想单独测试`Symbol`的功能，可以在根目录创建`test.php`文件，并写入以下代码

```php
require __DIR__ . '/vendor/autoload.php';

use Zisays\Symbol\Symbol;
```



## 二、函数库介绍

### 1、Symbol.php

#### （1）、output

功能：输出数据

语法：Symbol::output($data,$info='Symbol');

参数

$data ：您要输出的数据

$info：输出窗口的标题信息

返回值：void

例子：

```php
Symbol::output('PHP');
Symbol::output('PHP','Symbol');
```

#### （2）、server

功能：输出服务器和执行环境信息

语法：Symbol::server();

返回值：void

例子：

```php
Symbol::server()
```

