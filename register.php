<?php 

if(!empty($_POST))
{
	include 'db.php'; 


	foreach($_POST as $value)
	{
		$value = strip_tags($value);
		$value = $cxn->real_escape_string($value);
	}

	extract($_POST);

	//Username Password Email

	$password = md5($password);

	$query ="INSERT INTO users (username, password, email) VALUES ('$username','$password','$email')";


	if($cxn->query($query) === false)
	{
		 trigger_error(' Error: ' . $conn->error, E_USER_ERROR);
	}
	else
	{
		echo "done!";
	}



}





?>