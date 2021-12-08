<?php
include ('../../php/edit.php');
include ('../../php/writeData.php');
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
    <div class="modify_product">
      <div class="preview">
        <form action="#">
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

    <div class="modify_product">
      <div class="product_form">
        <form action="p8.php" method="POST">
         <h4 style="float:right; color: darkgrey;"> Product # 
<?php 

echo $i;

?>

</h4><br><br>
          
<label>Title</label><br />
          <input
            type="text"
            id="product_name"
            name="product_name"
            placeholder="<?php echo $title ?>"
            value="<?php echo $title ?>"
          />
	<div class="error">
		<?php echo $errors['product_name'];?>
	</div>

<br />

<label>Description</label><br />
          <input
            type="text"
            id="product_tagline"
            name="product_tagline"
	    value="<?php echo ($tagline) ?>"
           />
	<div class="error">
		<?php echo $errors['product_tagline'];?>
	</div>
<br>

          <label>More Information</label><br />
          <textarea
            name="product_description"
            id="product_description"
	    cols="30"
            rows="10"
          > <?php echo ($description) ?></textarea>

	<div class="error">
		<?php echo $errors['product_description'];?>
	</div>

<br />
          <label>Aisle</label>
          <input type="text" id="product_aisle" name="product_aisle" value="<?php echo ($aisle) ?>">

	<div class="error">
		<?php echo $errors['product_aisle'];?>
	</div>


<br />
          <label>Price $CAD</label><br>
          <input type="text" id="product_price" name="product_price" style="width: 15%;" value="<?php echo ($price) ?>">

	<div class="error">
		<?php echo $errors['product_price'];?>
	</div>

<br />
          <label>Quantity In Stock</label>
          <input type="number" id="quantity_product" name="quantity_product" min="0" style="width: 15%;" value="<?php echo ($qnt) ?>">
          
	<div class="error">
		<?php echo $errors['quantity_product'];?>
	</div>

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