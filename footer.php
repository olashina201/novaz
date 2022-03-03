    <!-- CALL TO ACTION START (call-to-action-6) -->
   
  <script src="js/jqueryV3.4.1.js"></script> 
   <script>
   		function Newsletter()
        {
          var fd = new FormData($("#myform")[0]);

             var newsemail = $('#newsemail').val();
    
 		     if(newsemail !="" )
			 {
  			    $.ajax({
				url: 'newsletter/',
				type: 'post',
                data: fd,
                contentType: false,
                processData: false,
				success: function(data)
						{
 							if(data.includes("Successful"))
							{
							$('#showme').html(data);
                                  location.href="https://www.novazarc.com/product-details?pid=<?php echo $pid;?>"
 							} 
							   
						}                
					});
			 }
			 else
			 {
                alert("Provide your email");
			 }
			 
         }	
		 
 
   </script>
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="contact">Contact Us <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                        <h4 class="footer-title">Address</h4>
                             <div class="footer-address">
                               
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Akoka University Road</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+234 817 946 0095">+234 817 946 0095</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@novazarc.com">info@novazarc.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:info@novazarc.com">novazarcproperties@gmail.com</a></p>
                                        </div>
                                    </li>
									
									
									
									
									
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Services</h4>
                            <div class="footer-menu">
                                <ul>
                                    
                                    <li><a href="hostel">Hostel</a></li>
                                    <li><a href="houses">Houses</a></li>
                                    <li><a href="shortlet">Shortlet</a></li>
                                    <li><a href="land">Lands</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Links</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="users/login">Login</a></li>
                                    <li><a href="users/register">My account</a></li>
                                   
                                    <li><a href="faq">FAQ</a></li>
                                    
                                    <li><a href="terms_privacy">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget footer-newsletter-widget">
                            <h4 class="footer-title">Newsletter</h4>
                            <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                            <div class="footer-newsletter">
                                <form method="post" id="myform" onSubmit="return false;">
                                    <input type="email" name="newsemail" id="newsemail" placeholder="Email*">
                                    <div class="btn-wrapper">
                                        <button class="theme-btn-1 btn" onClick="Newsletter()" type="submit">Subscribe</button>
                                    
									
									</div>
                                </form>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
       
    </footer>
    <!-- FOOTER AREA END -->

             
