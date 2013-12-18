<?php
include dirname(__DIR__) . "/vendor/autoload.php";

use \Markdown\Markdown;

$html = Markdown::ToHTML("# Title\n\nParagraph 1\n\n- List Element 1\n- List Element 2\n\n");
$markdown = Markdown::FromHTML("<h1>Title</h1><p>Paragraph 1</p><ul><li>List Element 1</li><li>List Element 2</li></ul>");

print_r($html);
print_r($markdown);
