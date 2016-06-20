<?php
$xml = simplexml_load_string($_POST['xml']);

foreach($xml->item as $item ):
  $type = $item['type'];
  if($type == 'even'){
    $desc = $item->description;
    echo '<p>' . $desc . '</p>';
  }
endforeach;

echo '<ul>';
$oddNames = $xml->xpath('item[@type="odd"]/name');

foreach($oddNames as $oddName):
  echo '<li>' . $oddName . '</li>';
endforeach;

echo '</ul>';

?>
