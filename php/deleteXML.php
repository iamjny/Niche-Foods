<?php

$toDelete = '';
$err = array('newprod'=>'');

if(isset($_POST['delete']))
{   
    //check new title
    if(!empty($_POST['delProd']))
    {
        $toDelete = $_POST['delProd'];
        if(!preg_match('/^[A-Za-z\s]+$/',$toDelete))
        {
            $err['newprod'] = 'Illegal product title: Use letters only.';
        }
        else
        {
	    $err['newprod'] = '';
        }
    }        
    if(!array_filter($errors))
    {

      $xml = new DomDocument("1.0","UTF-8");
      $xml->formatOutput=true;
      $xml->preserveWhiteSpace=false;
      $xml->load('../../productList.xml');  
 
      $xpath = new DOMXPATH($xml);

      foreach($xpath->query("/products/p[name = '$toDelete']") as $node)
      {
        $node->parentNode->removeChild($node);
      }
    
      $xml->save('../../productList.xml');
 
    }

}

?>