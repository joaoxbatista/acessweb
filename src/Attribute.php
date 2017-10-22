<?php

namespace AcessWeb\Core;

class Attribute
{
    protected $key;
    protected $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function html() : string
    {
        return "{$this->key}=\"{$this->value}\"";
    }

}