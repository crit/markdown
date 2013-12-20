<?php
namespace Markdown;

use \HTML_To_Markdown;
use \Michelf\MarkdownExtra;

/**
 * Class Markdown
 *
 * @package Markdown
 */
class Markdown
{
    /**
     * @param string $md
     *
     * @return mixed
     */
    static function ToHTML($md)
    {
        return MarkdownExtra::defaultTransform($md);
    }

    /**
     * @param string $html
     *
     * @return string
     */
    static function FromHTML($html)
    {
        $markdown = new HTML_To_Markdown();
        $markdown->set_option('strip_tags', true);
        return $markdown->convert($html);
    }
}