<?php

$xml = new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load('../../productList.xml');  

if(!$xml)
{
    $products = $xml -> createElement("p");
    $xml->appendChild($products);
}
else
{
    $products = $xml->firstChild;
}

    $title = $_POST['product_name'];
    $price = $_POST['product_price'];
    $tagline = $_POST['product_tagline'];
    $description = $_POST['product_description'];
    $aisle = $_POST['product_aisle'];
    $qnt = $_POST['quantity_product'];

    $list = $xml->getElementsByTagName('p');
    $listLength = $list->length;

    $newID = ' 0'.($listLength+1);

    $item = $xml -> createElement("p");
    $products -> appendChild($item);    

    $productName = $xml -> createElement("name",$title);
    $item->appendChild($productName);

    $productPrice = $xml -> createElement("price",$price);
    $item->appendChild($productPrice);

    $productTag = $xml -> createElement("description",$tagline);
    $item->appendChild($productTag);

    $productInfo = $xml -> createElement("moreInfo",$description);
    $item->appendChild($productInfo);

    $productAisle = $xml -> createElement("aisle",$aisle);
    $item->appendChild($productAisle );

    $productQnty = $xml -> createElement("quantity",$qnt);
    $item->appendChild($productQnty);
    
    $productNum = $xml->createElement("productNumber",$newID);
    $item->appendChild($productNum);

    $xml->save('../../productList.xml');
?>