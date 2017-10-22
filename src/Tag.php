<?php

namespace AcessWeb\Core;

class Tag implements TagContract
{
    protected $name;
    public $attributes;
    protected $content;

    public function __construct(string $name, string $content, AttributeList $attributes = null)
    {
        $this->name = $name;
        $this->content = $content;
        if(!$attributes)
        {
            $this->attributes = new AttributeList();
        }
        else
        {
            $this->attributes = $attributes;
        }
    }
    
    public function __toString()
    {
        return $this->html();
    }

    public function html() : string
    {
        $html = "<{$this->name}"; 
        if($this->attributes)
        {
            $html .= "{$this->attributes->html()}";
        }
        $html .= ">{$this->content}</{$this->name}>";

        return $html;
    }

    public function details()
    {
        dump($this);
    }

}