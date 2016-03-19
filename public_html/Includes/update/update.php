<?php

//Turn on error reporting

   // ini_set('display_errors', 1);

   // error_reporting(E_ALL);

    

    //Connect to the database (my root directory is two

    //levels up from my 305 directory)

    require '../../../db/db.php';



// get value of id that sent from address bar

$id=$_GET['id'];



// Retrieve data from database 

$sql="SELECT * FROM `top_items` WHERE item_id = ".$id;

 $result = @mysqli_query($cnxn, $sql);

$row = mysqli_fetch_assoc($result);

?>



<table width="400" border="0" cellspacing="1" cellpadding="0">

<tr>

<form name="form1" method="post" action="update_ac.php">

<td>

<table width="100%" border="0" cellspacing="1" cellpadding="0">

<tr>

<td>&nbsp;</td>

<td colspan="3"><strong>Update data in mysql</strong> </td>

</tr>

<tr>

<td align="center">&nbsp;</td>

<td align="center">&nbsp;</td>

<td align="center">&nbsp;</td>

<td align="center">&nbsp;</td>

</tr>

<tr>

<td align="center">&nbsp;</td>

<td align="center"><strong>Name</strong></td>

</tr>

<tr>

<td>&nbsp;</td>

<td align="center">

<input name="name" type="text" id="name" size="55" value="<? $name = $row['item_name'];

		echo $name; ?>">

</td>
<td>

<input name="id" type="hidden" id="id" value="<? $name = $row['item_id'];

		echo $id; ?>">

</td>
<td align="center">

<input type="submit" name="Submit" value="Update">

</td>
</tr>

</table>

</td>

</form>

</tr>

</table>

