<?php include ("includes/header.php");?>

 <script src="js/jquery-1.11.2.min.js"></script>
  <script src="script.js"></script>

   <section class="container-new" style="min-height:450px;">
  		<center><h1 class="headerpupple">Payment</h1></center>
   <div class="container">
    <div class="row">  
            <div class="col-lg-3 col-sm-3 col-md-3">
        	</div>
            <div class="col-lg-6 col-sm-6 col-md-6">
				 
                 <div class="panel panel-yellow">
                         <div class="panel-body">
                         
             <form method="POST" class="form-horizontal" id="myform" onSubmit="return false">
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-4 ">Full Name  </label>
                          <div class="col-lg-8">
                            <input name="name" type="text" class="form-control " id="name" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-4 ">Amount  </label>
                          <div class="col-lg-8">
                            <input name="amount" type="text" class="form-control" id="amount" readonly value="<?php echo $my = "15000"; ?> " >
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-4 ">Phone number  </label>
                          <div class="col-lg-8">
                            <input name="phonenumber" type="text" class="form-control" id="phonenumber" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group ">
                          <label for="cemail" class="control-label col-lg-4 ">Email  </label>
                          <div class="col-lg-8">
                            <input name="email" type="email" class="form-control" id="email" autocomplete="off">
                          </div>
                        </div>
                        <div class="form-group" >
                          <div class="col-lg-offset-4 col-lg-12">
                            <input onClick="btndonate()" type="submit" class="btn btn-primary" value="Proceed"> 
                           </div> 
                        </div> 
                <div id="msg-bar" class="text-center h4"></div>  
                     </form>
                        </div>
                         <div>

                 </div>
 <script src="js/jquery-1.11.2.min.js"></script>
  <script src="script.js"></script>
  <script src="https://checkout.flutterwave.com/v3.js"></script>
 
 


            </div>
    </div>       
    </div>
    </div>
  </section>

<?php include ("includes/footer.php");?>