<?php 


/* completed tasks */

session_start();

if(isset($_SESSION['uid']))
{

echo "<h2>Completed Tasks</h2>";

$userid = $_SESSION['uid'];

include 'db.php';

$query = "SELECT * FROM items WHERE status = 1 AND userid = $userid";

$rs = $cxn->query($query);

$rs->data_seek(0);

while($rows = $rs->fetch_assoc())
{
	echo "<h4>".$rows['description']."</h4>"; 
}

}


?>