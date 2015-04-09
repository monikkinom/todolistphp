<?php

/*View Pending Tasks */

session_start();

if(isset($_SESSION['uid']))
{
	
	include 'db.php';

	$userid = $_SESSION['uid'];

	if(isset($_POST['action']))
	{

		extract($_POST);

		//item array contains items to be altered
		//action contains type of action


		$type = ($action == "complete") ? 1 : 2 ;

		$ids = implode(",",$item);

		$query = "UPDATE  items SET status = $type WHERE id IN ($ids) AND userid = $userid";

		if($cxn->query($query) === false)
		{
			"Error altering items";
		}
		else
		{
			echo $cxn->affected_rows." items have been altered";
		}


	}

	$query = "SELECT * from items WHERE userid = $userid AND status = 0";

	$rs = $cxn->query($query);

	$rs->data_seek(0);

	echo "<h2>You have ".$rs->num_rows." pending tasks";

	echo "<form method='post' name='completion'>";

	while($row= $rs->fetch_assoc())
	{

		echo "<h4><input type='checkbox' value='".$row['id']."' name='item[]'>".$row['description']."</h4>";

	}

	echo "<input type='submit' value='complete' name='action'> <input type='submit' value='delete' name='action'></form>";

}



?>