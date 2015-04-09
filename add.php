<?php 

/* add a task */


session_start();

if(isset($_SESSION['uid']))
{
	

if(isset($_POST['todoitem']))
{
	include 'db.php';
	$userid = $_SESSION['uid'];
	$desc = $cxn->real_escape_string($_POST['todoitem']);

	$query ="INSERT INTO items (userid, description) VALUES ($userid,'$desc')";

	if($cxn->query($query) === false)
	{
		 trigger_error(' Error: ' . $conn->error, E_USER_ERROR);
	}
	else
	{
		echo "<h4> Item successfully added! Add another? </h4>";
	}

}



?>


<form method="post">

<input type='text' name='todoitem' size='100' placeholder='Add an item'>
<input type='submit' value='Add'>

</form>

<?
}
else
{
	echo "login to continue";
}


?>