<?php
/*
*Sahba Bahizad
* This is a top them item file that retrieves data from database
*
*/

//Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    //Connect to the database (my root directory is two
    //levels up from my 305 directory)
    require '../../db/db.php';
    

//Define the SELECT query
    $sql = "SELECT * FROM `top_items`";

	//Send the query to the database
    $result = @mysqli_query($cnxn, $sql);
echo "<ul>";
	//Process the rows
    while ($row = mysqli_fetch_assoc($result)) {

        $name = $row['item_name'];
        
		echo  "<li>$name</li>";        
	} 
echo "</ul>";
?>
