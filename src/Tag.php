<?php

namespace AcessWeb\Core;

class Tag 
{
	private $name;
	private $properties;
	private $content;

	public function __construct(string $name, string $content, array $properties = [])
	{
		$this->name = $name;
		$this->content = $content;

		if(count($properties) > 0)
		{
			foreach($properties as $property)
			{
				$this->properties[$property[0]] = new Property($property);
			}
		}

	}

	public function addProperty(string $key, string $value) : void
	{
		$this->properties[$key] = new Property($key, $value);
	}

	public function getHtmlProperties() : string
	{

		if(count($this->properties) == 0)
		{
			return "";
		}

		$html = "";

		foreach($this->properties as $property)
		{
			$html .= " {$property->__toString()}";
		}

		return $html;
	}

	public function printHtml() : string
	{
		return "<{$this->name}{$this->getHtmlProperties()}>{$this->content}</{$this->name}>";
	}

	


}