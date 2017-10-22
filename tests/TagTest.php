<?php

namespace AcessWeb\Core;

use PHPUnit\Framework\TestCase;

class TagTest extends TestCase
{
	public function testCreateTag()
	{
		$tag = new Tag('p', 'Commodo nisi sunt nisi.');
		$this->assertEquals('<p>Commodo nisi sunt nisi.</p>', $tag->printHtml());
		
	}

	public function testInvalidArray()
	{
		$tag = new Tag('p', 'Commodo nisi sunt nisi.', ['id', 'class', 'content']);
		$this->assertEquals('<p>Commodo nisi sunt nisi.</p>', $tag->printHtml());

	}

	
	
}