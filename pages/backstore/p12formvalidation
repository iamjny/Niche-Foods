<?php
$q = $status = "";
$errors = array('q'=>'', 'status'=>'');

if(_$SERVER["REQUEST_METHOD"] == "POST") {
	
	if(!isset($_POST['formStatus'])) {
		$errors['status'] .= "<li>Please select the order status</li>";
	}
	else {
		$status = $_POST['formStatus'];
	}
	if(empty($_POST['quantitiy']))
		{
			$errors['q'] = 'Input Required <br />';
		}
	else
    {
        $q = $_POST['quantity'];
        if(!preg_match('/^[0-9]/',$q)){
            $errors['q'] = 'Illegal input: must contain numbers.';
        }
    }
}
?>
