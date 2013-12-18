# Markdown Abstraction Class

This method wraps my preferred libraries for working with markdown content.

- [PHP Markdown Extra](http://michelf.ca/projects/php-markdown/extra/)
- [HTML To Markdown for PHP](https://github.com/nickcernis/html-to-markdown)

## Install

Easy install with [Composer](http://getcomposer.org/).

```php
php composer.phar require "crit/markdown": "dev-master"
```

## Usage

```php
<?php
include "vendor/autoload.php";

use Markdown\Markdown;

$html = Markdown::ToHTML("# Title\n\nParagraph 1\n\n- List Element 1\n- List Element 2\n\n");
$markdown = Markdown::FromHTML("<h1>Title</h1><p>Paragraph 1</p><ul><li>List Element 1</li><li>List Element 2</li></ul>");
```
