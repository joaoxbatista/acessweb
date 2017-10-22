<?php

namespace AcessWeb\Core\Tags;

use PHPUnit\Framework\TestCase;

class ParagraphTest extends TestCase
{

    public function testCreateParagraph()
    {
        $p = new Paragraph('Some text here!');

        $this->assertEquals('<p>Some text here!</p>', $p->printHtml());
    }
}