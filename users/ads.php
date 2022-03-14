<?php 

include("../cpanel/link.php");
session_start();

if(empty($_SESSION['LOGIN_STATE']))
{
			echo '<script> location.href="login";</script>';
exit();
}
 
$uml =  $_SESSION['US_mail'] ;
$qry  = mysqli_query($link, "SELECT * FROM business WHERE uemail = '$uml' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Novazarc Properties   | Admin - Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <?php include("../links/jsStyles.php");?>
 

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>  
  </nav>
  <!-- /.navbar -->

<?php include ("../links/userLinks.php"); ?>

  <div class="content-wrapper">
     
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">My Ads</h3>
          </div>  
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right" style="display:;">
              <li class="breadcrumb-item"><a href="../">Portal Home</a></li>
              
            </ol>
          </div>
        </div> 
      </div>
    </div>
    
    
    <section class="content">
      <div class="container-fluid">
        
      <div class="card card-default">
          
      
            <div class="card-body">
              <div class="row">
               
                          <div class="table-responsive">
						  
                            <?php 
                              if($row = mysqli_num_rows($qry) > 0)
                               {
                                ?>
                                  <table class="table table-striped table-bordered table-hover h7">
                                        <thead>
                                          <tr>
                                            <th>S/N</th>
                                            <th>Promote Ads </th>
                                            <th>Category</th>
                                            <th>Purpose</th>
                                            <th>Description</th>
                                            <th>Primary Image</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                           </tr>
                                        </thead>
                                        <tbody class="">
                                             <?php
                    
                                    $qur  = mysqli_query($link, "SELECT * FROM business WHERE uemail = '$uml' ");
                                                
                                                $i = 1;
                                                   
                                                    while ($rows = mysqli_fetch_array($qur))
                                                      {	
                                                          ?>
                                                          <tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td style=" color:#000;"> <a href="promote?sads=<?php echo $rows['id'];  ?>">Promote Ads</a> </td>
                                                            <td>
                                                              <?php  
                                                                if($rows['cate'] == 1)
                                                                {
                                                                  echo 'House';
                                                                }
                                                                elseif($rows['cate'] == 2) 
                                                                {
                                                                  echo 'Hostel';
                                                                }
                                                                elseif($rows['cate'] == 3)
                                                                {
                                                                  echo 'Land';
                                                                }
                                                                elseif($rows['cate'] == 4)
                                                                {
                                                                  echo 'Shortlet';
                                                                }
                                                                elseif($rows['cate'] == 5) 
                                                                {
                                                                  echo 'Shop';
                                                                }
                                                                elseif($rows['cate'] == 6)
                                                                { 
                                                                  echo 'Office';
                                                                }
                                                              ?>
                                                            </td>
                                                            <td>
                                                              <?php  
                                                                if($rows['purpose'] == 1)
                                                                {
                                                                echo 'For Rent';
                                                                }
                                                                elseif($rows['purpose'] == 2)
                                                                { 
                                                                echo 'For Sale';
                                                                }
                                                              ?>
                                                            </td>

                                                            <td> <?php echo $rows['catedescript']; ?></td>
                                                            <td><img src="../uploads/<?php echo $rows['imagepath']; ?>" height="50p" width="70"/> </td>
                                                            <td style="display: "> <?php if($rows['promotion']=='')
															{
																echo 'Not promoted';
																
															}	
															elseif($rows['promotion']=='active')
															{
																echo 'Ads running';
																					
															}																													
															else
															{
																echo 'Ads Expired';
																					
															}																													
															?> </td>
                                                          
                      <td class="diag_id" style="display:none" ><?php echo $rows['id']; ?></td>
                      <td><input type="button" class="btn btn-danger btn-xs round-input edit_tbns" value="Delete">
															 
                                                            <td style="display: none"> <a href="edit-ads?sads=<?php echo $rows['id'];  ?>">View / Edit</a> </td>
                                                          </tr>
                                                          <?php
                                                            $i++;
                                                      }
                                                  //$i++;
                                                
                                             ?>
                                         </tbody>
                                  </table>
                                <?php 
                              }
                              else
                              {
                                echo '<P class="text-center">Your Ads profile is empty</p>';
                              }
                            ?>  
                          </div>
              </div>
			  
			   <!-- Updating clerking modal starts here -->         
<div class="modal fade" id="Editdiag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
               <div class="modal-content" style="width: 500px;">
              
                    <div class="panel panel-yellow">
 
                         <div class="panel-body">
                             
                               <div class="row">   
                                  
                                  
	    						  <div class="col-lg-2"> </div>
	    						  <div class="col-lg-8"> 
                                         <br> <br>    
                                        
                                           <div id="lses" class="text-center">  </div>
                                        
                                         
                                      <br> <br>  
                                  </div>
                                    
                               </div>
                                 
                        
                         </div>

                    </div>

                    </div>
                                          
                </div>
		</div>

</div> 
			  
            </div>
        <br> <br> 
         <div class="card-footer"> Ads  </div>
      </div>
    </section>
     
  </div>

 
  <?php include ("../links/footer.php"); ?>

 
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

<script>
        function myFunction() 
        {
          var x = document.getElementById("password");
          var y = document.getElementById("confirmpass");
          
              if (x.type === "password")
              {
                x.type = "text";
                y.type = "text";
              } else
              {
                x.type = "password";
                y.type = "password";
              }
        }
		
 $(document).ready(function() {
	 $('.edit_tbns').click(function (e){
		
		e.preventDefault();

			var diags =  $(this).closest('tr').find('.diag_id').text();
            
			$('#Editdiag').modal('show');
		
             var typ = "Delete";
			 
             $('#lses').html("<span style='padding:5px; font-size: 20px;'><i class='fa fa-spinner fa-spin'></i> Deleting... </span>");
                
				$.ajax({
					
					type: "POST",
                    
					url: "../Api/",
					
					cache:false,
                    
					data: {typ: typ, diags: diags},
						
						success: function(result)  
						
						 {
							if(result.includes("Ok"))
							{

							   $(this).delay(1000).queue(function()
							   {
							   $('#lses').html("<span style='padding:5px; font-size: 30px; color: green;'> Operation successful </span>");
										location.href="ads";
									$(this).dequeue();
							   });         
							}    
						 }
                });
		 
	 });
});
		
		
		
		
</script>
</body>
</html>
