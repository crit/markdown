<?php
namespace Markdown;

use \HTML_To_Markdown;
use Michelf\MarkdownExtra;

class Markdown
{
    static function ToHTML($md)
    {
        return MarkdownExtra::defaultTransform($md);
    }

    static function FromHTML($html)
    {
        $markdown = new HTML_To_Markdown();
        $markdown->set_option('strip_tags', true);
        return $markdown->convert($html);
    }
}