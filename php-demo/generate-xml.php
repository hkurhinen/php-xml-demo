<?php

$xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8" ?><items></items>');

for ($i = 1; $i <= 8; ++$i) {
	$item = $xml->addChild('item');
  if($i % 2){
    $item->addAttribute('type', 'odd');
  }else{
    $item->addAttribute('type', 'even');
  }
	$item->addChild('name', 'item - ' . $i);
  $item->addChild('description', 'This is item number: ' . $i);
}

Header('Content-type: text/xml');
echo $xml->asXML();

?>
