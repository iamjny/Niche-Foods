<?php

$newTitle = '';
$title = '';
$err = array('newprod'=>'');

if(isset($_POST['add']))
{   
    header('Location: p8.php'); 
}




$title = $tagline = $description = $aisle = $price = $qnt = '';
$errors = array('product_name'=>'', 'product_tagline'=>'', 'product_description'=>'', 'product_aisle'=>'', 'product_price'=>'', 'quantity_product'=>'');



// server-side validation of input
if(isset($_POST['save']))
{

    //check name
    if(empty($_POST['product_name']))
    {
        $errors['product_name'] = 'Input Required <br />';
    }else
    {
        $title = $_POST['product_name'];
        if(!preg_match('/^[A-Za-z\s]+$/',$title))
        {
            $errors['product_name'] = 'Illegal product title.';
        }
    }

    //check tagline
    if(empty($_POST['product_tagline']))
    {
        $errors['product_tagline'] = 'Input Required <br />';
    }else
    {
        $tagline = $_POST['product_tagline'];
        if(!preg_match('/^[A-Za-z\s,.-:]+$/',$tagline))
        {
            $errors['product_tagline'] = 'Illegal product description: use letters only.';
        }
    }


    //check moreInfo
    if(empty($_POST['product_description']))
    {
        $errors['product_description'] = 'Input Required <br />';
    }else
    {
        $description = $_POST['product_description'];
        if(!preg_match('/^[A-Za-z\s,.-:]+$/',$description))
        {
            $errors['product_description'] = 'Information field contains illegal characters: Use letters only.';
        }
    }

    //check aisle
    if(empty($_POST['product_aisle']))
    {
        $errors['product_aisle'] = 'Input Required <br />';
    }else
    {
        $aisle = $_POST['product_aisle'];
        if(!preg_match('/^[A-Za-z\s,.-]+$/',$aisle))
        {
            $errors['product_aisle'] = 'Aisle field contains illegal characters: Use letters only.';
        }
    }

    //check price
    if(empty($_POST['product_price']))
    {
        $errors['product_price'] = 'Input Required <br />';
    }else
    {
        $price = $_POST['product_price'];
        if(!preg_match('/^\d{1,3}(?:[.,]\d{3})*(?:[.,]\d{2})?$/',$price))
        {
            $errors['product_price'] = 'Illegal input: must be greater than 0.<br>Input numbers only.';
        }
    }


   if(empty($_POST['quantity_product']))
    {
        $errors['quantity_product'] = 'Input Required <br />';
    }else
    {
        $qnt = $_POST['quantity_product'];
        if(!preg_match('/^[0-9]/',$qnt))
        {
            $errors['quantity_product'] = 'Illegal input: must contain numbers.';
        }
    }
    //end of POST check

    if(!array_filter($errors))
    { 
       include('readXML.php');
       header('Location: p7.php');
    } 
}



?>