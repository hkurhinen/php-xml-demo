<?php
$xml = file_get_contents('http://localhost/php-demo/generate-xml.php');

$url = 'http://localhost/php-demo/parse-xml.php';
$data = array('xml' => $xml);

$options = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result;

?>
