<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.19.4
 * Time: 16:36
 */

namespace AppBundle\Service;


class MarkdownTransformer
{
    private  $markdownParser;

    public function __construct($markdownParser)
    {
        $this->markdownParser = $markdownParser;
    }

    public function parse($str)
    {
        return $this->markdownParser
            ->transform($str);
    }
}