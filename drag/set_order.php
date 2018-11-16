<?php

// including the config file
include('config.php');

// get the list of items id separated by cama (,)
$list_order = $_POST['list_order'];

// convert the string list to an array
$list = explode(',' , $list_order);
$i = 1 ;

foreach($list as $id) {

	$sql = "UPDATE items SET item_order = $i WHERE id = $id";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} 

	else {
	    echo "Error updating record: " . $conn->error;
	}

	$i++ ;
}