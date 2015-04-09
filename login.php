<?php

/* login php */

if(!empty($_POST))
{
	include 'db.php';

	foreach($_POST as $value)
	{
		$value = $cxn->real_escape_string($value);
	}

	extract($_POST);

	//username password

	$password = md5($password);

	$sql="SELECT * FROM users WHERE username = '".$username."'";

	$rs=$cxn->query($sql);
 
	if($rs === false) {
 	 trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $cxn->error, E_USER_ERROR);
 	 die();
		} 

		$rs->data_seek(0);
		
		$data = $rs->fetch_assoc();

		if($data['password'] == $password)
		{
			session_start();

			$_SESSION['uid'] = $data['id'];
			$_SESSION['username'] = $data['username'];

			echo "Welcome ".$data['username']."!";

		}
		else
		{

			echo "damn";
		}


}

?>