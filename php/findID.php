<?php

$xml = new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("../productList.xml");  

if(!$xml)
{
    $products = $xml -> createElement("p");
    $xml->appendChild($products);
}
else
{
    $products = $xml->firstChild;
}

    $list = $xml->getElementsByTagName('productNumber');

    $listLength = $list->length;
    
    echo ($list->item($listLength-1)->nodeValue);

    echo 'LENGTH P: '.($listLength);
?>