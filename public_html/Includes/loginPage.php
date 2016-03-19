<!DOCTYPE html>
<html>
<?php global $page; $page = 'Login'; ?>
<?php include 'header.html' ?>

<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
	<?php include 'menu.html' ?>
    <div class="contentArea">
    <div class="divPanel notop page-content">
	<div class="border">
    <div class="row-fluid">
	<div class="span12">
        
<?php global $page; $page = 'Login'; ?>
<?php # login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';


// Print any error messages, if they exist:
 if (isset($errors) && !empty($errors)) {
 echo '<h1>Error!</h1>
 <p class="error">The following error(s) occurred:<br />';
 foreach ($errors as $msg) {
	echo " - $msg<br />\n";
 }
	echo '</p><p>Please try again.</p>';
 }
 ?>
 <!--Display the form:-->
 <div class="box">
    <div class="login">
 <h1>Login</h1>
 <form action="" method="post">
 <label>User Name:</label><input id="login" type="text"
name="user" size="20" maxlength="20" required/>

 <label>Password: </label><input id="login" type="password"
name="pass" size="20" maxlength="20" required/>
 <!--Login button-->
 <p>
    <input class="btn btn-info" type="submit" name="send" id="send" value="Login">
  </p>
 </form>
 </div>
</div>
 </body>
</html>