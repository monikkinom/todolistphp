<?php 

/* mysql connection file */

$cxn = new mysqli("localhost","root","root","todolist");

if ($cxn->connect_error) {
  trigger_error('Database connection failed: '  . $cxn->connect_error, E_USER_ERROR);
}

?>
