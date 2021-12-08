<?php
include ('../../php/edit.php');
include ('../../php/deleteXML.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://users.encs.concordia.ca/~ca_henr/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="https://users.encs.concordia.ca/~ca_henr/css/backstore.css"/>

    <title>Backstore Product list</title>

<style>
.newprod{text-align: center;}
.newprod button{background-color: #0d674a;}

.list_display
{
 border-radius: 5px;
 padding: 15px;
 box-shadow: 0 1px 3px rgb(0 0 0 / 12%), 0 1px 2px rgb(0 0 0 / 24%);
 background-color: #00000025;
}

.list_display:hover
{
 box-shadow: 2px 2px 6px rgba(0, 0, 0, 2);
 transform: scale(1.01);
 
}
#id_display
{
width: 60px;
border-style:none;
font-weight: 600;
color:white;
background-color:#0d674a;
float: right;
}
.img_list img
{
height: 100px;
}

</style>
  </head>
  <body>
    
    <div class="backstore_content backstore_form">
    <div style="text-align: center; font-size: 60px; color: #4b6667;"><i class="fas fa-clipboard-list"></i></div><br>

      <h1 class="backstore_title">Backstore Product List</h1>

<form action="p7.php" method="POST">
<div class="newprod"><button name="add">Add New Product</button></div>


<div class="error"><?php echo $err['newprod'];?></div>

<div style="display: flex;">
      <input type="text" name="delProd" placeholder="Enter a Product" value="<?php echo $toDelete ?>">
      &nbsp
      <button name="delete">Delete</button>
</div>
</form>
<form action="p8EDIT.php" method="POST">
<?php

$xml = new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("../../productList.xml");  

if(!$xml)
{
    $products = $xml -> createElement("p");
    $xml->appendChild($products);
}
else
{
    $products = $xml->firstChild;
}

$list = $xml->getElementsByTagName('p');

$listLength = $list->length;

for ($k = 0; $k < $listLength; $k++) {

$ids = $xml->getElementsByTagName('productNumber');
$titles = $xml->getElementsByTagName('name');
$aisles = $xml->getElementsByTagName('aisle');
$prices = $xml->getElementsByTagName('price');
$qnts = $xml->getElementsByTagName('quantity');

$id = ($ids->item($k)->nodeValue);

?>
<div class="list_display">

<?php
    echo '<input type="text" name="prodID" id="id_display" value="'. $id.'">';
  
   if(isset($_POST['edit']))
   {
      $_POST['prodID'] = $id;
   }
    //previous id
    //echo 'ID'.($ids->item($k)->nodeValue).'<br>';
    echo '<h3>Title: '.($titles->item($k)->nodeValue).'</h3>';
    echo 'Aisle: '.($aisles->item($k)->nodeValue).'<br>';
    echo ($prices->item($k)->nodeValue).'<br>';

    echo '<div class="img_list"><img src="../prodListImages/'.$id.'.jpg"/></div>';

    echo 'In Stock: '.($qnts->item($k)->nodeValue).'<br>';

    
    //search for index of ID in the list here and assign to variable 
?>


    <input type="submit" name="edit" value="Edit">

<br>


</div>
<br>
<?php


}

?>


      </form> 
  </body>
</html>
