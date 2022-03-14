<?php 
session_start();

 $pid = $_SESSION['pid'];

 include ("../cpanel/link.php");
 
      			       
					$qrs = mysqli_query($link, "SELECT * FROM posts
					WHERE prodid = '$pid' ");
                      while($alcmt = mysqli_fetch_assoc($qrs))
					 {
					?>
                         <div class="ltn__commenter-comment">
                              <h6><?php echo $alcmt['name'];?>  </h6>
                                   <div class="product-ratting">
                                                        
                                   </div>  
                               <p> <?php echo $alcmt['comments'];?></p> <br> 
                               <span class="ltn__comment-reply-btn"><?php echo $alcmt['pdate'];?></span>
                         </div>
                         <?php
						 
					  }
		
 ?>


 