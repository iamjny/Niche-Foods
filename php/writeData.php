<?php

$xml = simplexml_load_file('../../productList.xml');

$list = $xml->p;

$index = count($list)+1;

$i = '0' .$index;

?>