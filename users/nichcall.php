<?php
include("../cpanel/link.php");
    session_start();
 
    $viewme = $_GET['viewme'];


     if($viewme !="")
	 {
			$sql =mysqli_query($link, "SELECT * FROM statelgas WHERE stateid = '$viewme' ");
 		
			echo "<select id='lga' onchange='change_subnich'>";
            echo '<option value="">Select</option>';
			while ($row = mysqli_fetch_array($sql))
			{
			echo "<option>";  echo $row['lga']; echo "</option>";
 			}
  			echo "</select>";
 	 }
      
	   
 ?>