<?php global $page;
$page = 'update'; 
include '../../header.html' ?>

<body>
<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;"></div>
 <?php include '../../menu.html' ?>
    <div class="contentArea">
	<div class="divPanel notop page-content">

<br/>


<?php

//Turn on error reporting

   // ini_set('display_errors', 1);

   // error_reporting(E_ALL);

    require '../../../db/db.php';

//Define the SELECT query

    $sql = "SELECT * FROM `top_items`";

    //Send the query to the database

    $result = @mysqli_query($cnxn, $sql);

?>



<table width="400" border="0" cellspacing="1" cellpadding="0">

<tr>

<td>

<table width="400" border="1" cellspacing="0" cellpadding="3">

<tr>

<td colspan="4"><strong>List items from database </strong> </td>

</tr>



<tr>

<td align="center"><strong>Item </strong></td>

<td align="center"><strong>Update</strong></td>

</tr>



<?php



while($row = mysqli_fetch_assoc($result)){

?>



<tr>

    

<td><? $name = $row['item_name'];

		echo $name; ?></td>





<td align="center"><a href="update.php? id=<? $id = $row['item_id'];

		echo $id;?>">update</a></td>

</tr>



<?php

}

?>



</table>

</td>

</tr>

</table>

<?php include '../../footer.html' ?>
</div>
</div>
</div>

</body>
</html>
