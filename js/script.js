// JavaScript Document

        function Signin()
        {
            var eml = $('#email').val();
            var pwd = $('#password').val();
            
			var typ = "Login";
            
	
			 
            if(eml!="" && pwd!="")
            {
				document.getElementById("sng").disabled = true;
                $('#lres').html("<span class='btn-primary' style='padding:5px'><i class='fa fa-spinner fa-spin'></i> Checking...</span>");
                $.ajax({
                    url: "../api/",
                    data: {typ: typ, eml: eml, pwd: pwd},
                    type: "POST",
                    success: function(data)
                    {
                        $('#lres').html(data);
				document.getElementById("sng").disabled = false;
                        if(data.includes("Terminated"))
                        {
                            $(this).delay(200).queue(function() {
                            $(this).dequeue();
                            });      
                        }    
                        else if(data.includes("Successful"))
                        {
				document.getElementById("sng").disabled = false;
                            $(this).delay(200).queue(function() {
                                location.href="account";
                            $(this).dequeue();
                            });      
                        }    
                    }                
                });
            }
            else
            {
                $('#lres').html("<span style='padding:5px;color:#f00'> All fields required!</span>")
                            $(this).delay(2000).queue(function() {
   $('#lres').html("<span style='padding:5px;color:#fff'></span>")
                            $(this).dequeue();
                            });      

            }
		 
        }
