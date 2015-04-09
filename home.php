<?php 

/* home.php */

session_start();
if(isset($_SESSION['uid']))
{

include 'db.php';

echo "Hello ".$_SESSION['username']."<br/>";

echo "<h3> <a href='add.php'> Add a task </a> </h3>";
echo "<h3> <a href='pending.php'> View pending tasks </a> </h3>";
echo "<h3> <a href='complete.php'> View completed tasks </a> </h3>";

}
else
{
	echo "please login to view your todolist";
}






?>
