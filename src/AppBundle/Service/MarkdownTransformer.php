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
    public function parse($str)
    {
        return strtoupper($str);
    }
}