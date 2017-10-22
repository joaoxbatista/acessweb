<?php
include './vendor/autoload.php';

use AcessWeb\Core\Tag;
use AcessWeb\Core\TagNavigable;
use AcessWeb\Core\Attribute;
use AcessWeb\Core\AttributeList;
use AcessWeb\Core\AttributeStyle;
use AcessWeb\Core\Tags\Paragraph;

$large_text = "Incididunt laborum deserunt consectetur ipsum excepteur voluptate nulla voluptate. Voluptate excepteur do voluptate duis quis sit tempor. Nulla qui incididunt consectetur sit sit in anim in mollit labore commodo laboris adipisicing ut.";
$paragrafo = new Paragraph($large_text);
$paragrafo->attributes->add('align', 'center');


// $align = new Attribute('align', 'left');

// $style = new AttributeStyle();
// $style->add('color', 'red');

// $style = new AttributeStyle(
//     [
//         ['font-size', '22px'],
//         ['color', '#fff'],
//         ['text-align', 'justify'],
//         ['background', '#222'],
//         ['padding', '20px']
//     ]
// );

// $attributes_list = new AttributeList();
// $attributes_list->add($style);
// $attributes_list->add($align);



// $p = new Tag('p',$large_text, $attributes_list);

// $tags = [$p];