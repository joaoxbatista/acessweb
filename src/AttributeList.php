<?php

namespace AcessWeb\Core;

class AttributeList
{
    private $attributes;

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    public function add(string $name, string $value)
    {
        array_push($this->attributes, new Attribute($name, $value));
    }
   
    public function html() : string
    {
        $result = "";
        foreach($this->attributes as $attribute)
        {
            $result .= " ".$attribute->html();
        }

        return $result;
    }
}