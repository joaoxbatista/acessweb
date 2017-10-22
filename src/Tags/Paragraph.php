<?php

namespace AcessWeb\Core\Tags;
use AcessWeb\Core\Tag;
use AcessWeb\Core\AttributeList;

class Paragraph extends Tag
{
    public function __construct(string $content, AttributeList $attributes = null)
    {
        parent::__construct('p', $content, $attributes);
        
    }
}