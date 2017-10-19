<?php

include './vendor/autoload.php';

use AcessWeb\Core\Tag;
use AcessWeb\Core\Property;

/*Teste de Validação de Propriedade*/
$style = new Property(['dasodas', 'dasdasd']);
dump($style);


/*Testar criação de Tags*/
$tag1 = new Tag('h3','', 
	[
		['style', 'color:red; background: black; display: inline; padding: 10px;'],
	]
);
dump($tag1);

/*Testar validação de Tags*/
$tag2 = new Tag('h2', '', 
	[
		['color']
	]
);

dump($tag2);
