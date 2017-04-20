<?php
/**
 * Created by PhpStorm.
 * User: evalds
 * Date: 17.20.4
 * Time: 16:17
 */

namespace AppBundle\Twig;


use AppBundle\Service\MarkdownTransformer;

class MarkdownExtension extends \Twig_Extension
{

    private $markdownTransformer;

    public function __construct(MarkdownTransformer $markdownTransformer)
    {
        $this->markdownTransformer = $markdownTransformer;
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdownify', array($this, 'parseMarkdown'))
        ];
    }

    public function parseMarkdown($str)
    {
        return $this->markdownTransformer->parse($str);
    }

    public function getName()
    {
        return 'app_markdown';
    }
}