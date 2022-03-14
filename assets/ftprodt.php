<?php include ("../cpanel/link.php");?>
<?php 

$qr = mysqli_query($link, "SELECT * FROM business");
$bsn = mysqli_num_rows($qr);
?>