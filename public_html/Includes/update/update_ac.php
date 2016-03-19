<?php
require '../../../db/db.php';
// update data in mysql database 
$name = $_POST['name'];
$id =  $_POST['id'];
$sql="UPDATE `top_items` SET `item_name`= '".$name."' WHERE item_id='".$id."'" or die ("this stuffed up");
$result = @mysqli_query($cnxn, $sql);

// if successfully updated. 
if($result){
echo "Successful";
echo "<br />";
echo '<a href="list_records.php"> Go Back to List of Items </a>';

}
else {
echo "ERROR";
}


?>