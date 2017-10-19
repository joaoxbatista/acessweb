<?php

namespace AcessWeb\Core;

class Property 
{

	private $key;
	private $value;

	public function __construct(array $property = [])
	{
	
		try {
		
			if($this->isValid($property))
			{
				$this->key = $property[0];
				$this->value = $property[1];
			}


		} catch (\Exception $e) {

			dump($e);

		}	
		
	}

	/*Return object in string*/
	public function __toString()
	{
		return "{$this->key}=\"{$this->value}\"";
	}

	/*Verify if the format is valid*/
	public function isValid(array $property)
	{
		
		if(!(count($property) == 2))
		{
			throw new \Exception('Property: Invalid array size, the format array is ["key", "value"]');
		}

		return true;
	}
}