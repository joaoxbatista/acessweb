<?php

namespace AcessWeb\Core;

class AttributeStyle extends Attribute
{
    private $properties;

    public function __construct(array $properties = [])
    {
        $this->properties = $properties;
        parent::__construct('style', $this->convertToValue());
    }

    public function convertToValue() : string
    {
        $html = "";
      
        foreach($this->properties as $property)
        {
           
            $html .= "{$property[0]}:{$property[1]};";
        }

      return $html;
    }

    public function add(string $property, string $value)
    {
        array_push($this->properties, [$property, $value]);
        $this->value = $this->convertToValue();
    }
    
}