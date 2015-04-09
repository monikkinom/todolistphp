<?php 

/* Login Form 
Attributes - Username, Pass

*/

?>

<h2>Login </h2>
<form method='post' action='login.php' name='login-form'>

<label>Username : </label><input type='text' name='username'>
<label>Password : </label><input type='password' name='password'>
<input type='submit' value='submit'>

</form>

<?php

/* Register Form 
Attributes - username, email id, password*/


?>

<br/>
<br/>

<h2>Register</h2>
<form method='post' action='register.php' name='register-form'>

<label>Username : </label><input type='text' name='username'>
<label>Password : </label><input type='password' name='password'>
<label>Email Id : </label><input type='text' name='email'>
<input type='submit' value='submit'>

</form>