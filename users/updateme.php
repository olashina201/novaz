<?php
include("../cpanel/link.php");
									 $query = mysqli_query($link, "SELECT *
                                     FROM  lgas
									 ");
											 while($row = mysqli_fetch_array($query))
										{	
											$id = $row['id'];
											$state = $row['state'];
											
											$querys = mysqli_query($link, "UPDATE lgas SET stateids = '$id'
                                           WHERE id ='$id'");
                                            if($querys)
                                            {
                                            echo "Done";
                                            }
                                            else{
                                            echo mysqli_error($link);
                                            }
                                            
                                        }

?>