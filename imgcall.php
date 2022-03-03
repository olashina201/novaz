<?php 
 header("Content-Type: application/json; charset=UTF-8");
include ("cpanel/link.php");

 
	 
	
//$obj = json_decode($_GET["x"], false);

//$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");

$stmt = $link->prepare("SELECT * FROM business WHERE promotion ='active' ");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>