<?php


$xml = new DOMDocument('1.0','UTF-8');
$xml->preserveWhiteSpace=false;
$xml->formatOutput=true;
            
$xml->load("../../productList.xml");

$product = $xml->getElementsByTagName("p");


$title = $xml->getElementsByTagName('name')->item(0);
$tagline = $xml->getElementsByTagName('description')->item(0);
$description = $xml->getElementsByTagName('moreInfo')->item(0);
$aisle = $xml->getElementsByTagName('aisle')->item(0);
$price = $xml->getElementsByTagName('price')->item(0);
$qnt = $xml->getElementsByTagName('quantity')->item(0);


$title->parentNode->replaceChild($title, $title);
$tagline->parentNode->replaceChild($tagline, $tagline);
$description->parentNode->replaceChild($description, $description);
$aisle->parentNode->replaceChild($aisle, $aisle);
$price->parentNode->replaceChild($price, $price);
$qnt->parentNode->replaceChild($qnt, $qnt);



if(isset($_POST['save']))
{

$title->nodeValue = $_POST['product_name'];    
$tagline->nodeValue = $_POST['product_tagline'];
$description->nodeValue = $_POST['product_description'];
$aisle->nodeValue = $_POST['product_aisle'];
$price->nodeValue = $_POST['product_price'];
$qnt->nodeValue = $_POST['quantity_product'];

$xml->save("../../productList.xml");

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://users.encs.concordia.ca/~ca_henr/css/index.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://users.encs.concordia.ca/~ca_henr/css/backstore.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://users.encs.concordia.ca/~ca_henr/css/editProduct.css"
    />


    <title>Edit Product</title>

  </head>
  <body>
    <div class="content">
      <div class="title">
        <h1>Edit Product</h1>
      </div>
    </div>

<div class="editor">
    <!--<div class="modify_product">
      <div class="preview">
        <form action="">
          <label for="preview">Display</label><br />
          <button class="upload_img"><i class="fas fa-image"></i>&nbspSelect URL</button>
          <button class="upload_img"><i class="fa fa-upload" aria-hidden="true"></i>&nbspUpload Image</button>
          <div class="img_template">[Show Current Image]</div>
        </form>

      </div>

      <div class="keep_modif">
        <input type="submit" value="Save Changes" />
      </div>
    </div>
-->
    <div class="modify_product">
      <div class="product_form">
        <form action="p8EDIT.php" method="POST">
         <h4 style="float:right; color: darkgrey;"> Product # 
<?php 

echo $_POST['prodID'];

?>

</h4><br><br>
          
<label>Title</label><br />
          <input
            type="text"
            id="product_name"
            name="product_name"
            value="<?php echo $title->nodeValue ?>"
          />
	
<br />

<label>Description</label><br />
          <input
            type="text"
            id="product_tagline"
            name="product_tagline"
	    value="<?php echo ($tagline->nodeValue) ?>"
           />
	<br>

          <label>More Information</label><br />
          <textarea
            name="product_description"
            id="product_description"
	    cols="30"
            rows="10"
          > <?php echo ($description->nodeValue) ?></textarea>

	
<br />
          <label>Aisle</label>
          <input type="text" id="product_aisle" name="product_aisle" value="<?php echo ($aisle->nodeValue) ?>">



<br />
          <label>Price $CAD</label><br>
          <input type="text" id="product_price" name="product_price" style="width: 15%;" value="<?php echo ($price->nodeValue) ?>">

	
<br />
          <label>Quantity In Stock</label>
          <input type="number" id="quantity_product" name="quantity_product" min="0" style="width: 15%;" value="<?php echo ($qnt->nodeValue) ?>">
          
	
      <div class="keep_modif">
        <input type="submit" name="save" value="Save" />
        <input type="reset" value="Clear the Form">
      </div>

        </form>

      </div>

      
    </div>
 </div>
  </body>
</html>
