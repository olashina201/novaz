// JavaScript Document
 

function payFee(){

 	
	FlutterwaveCheckout({
		
		
		public_key: "FLWPUBK-2e5f0af25bc51d87ed06291811669fcd-X",
		tx_ref: "Novazarc_"+Math.floor((Math.random()*100000000)+1),
		amount: document.getElementById("amount").value,
		email: document.getElementById("email").value,
		adsid: document.getElementById("adsid").value,
		name: document.getElementById("name").value,
		currency: "NGN",
		customer: {
			email: document.getElementById("email").value,
			phonenumber: document.getElementById("phonenumber").value,
			name: document.getElementById("name").value
 			},
 	
		callback: function(data){


			var reference = data.tx_ref;
	

			location.href="https://www.novazarc.com/users/promot";

		},
		
		customizations: {
			'title': 'Novazarc Properties',
			'description': 'Ads Promotion payment'
		}
		
			//}
	});	
	
}

          function Pay()
        {
 
			var phone = document.getElementById("phonenumber").value;
			var name = document.getElementById("name").value;
			var email = document.getElementById("email").value;
			var amount = document.getElementById("amount").value;
            // var amount = $('#amount').val();
		    var validRegex = /^[A-Z0-9_'%=+!`#~$*?^{}&|-]+([\.][A-Z0-9_'%=+!`#~$*?^{}&|-]+)*@[A-Z0-9-]+(\.[A-Z0-9-]+)+$/i;
		
			if(name =='')
			{
                alert('Name required');     
  			}
			else if(amount =="")
			{
                alert('Please select ads category');         
			}
			else if(phone =='')
			{
                alert('Phone number required');     
			}
			else if(email =='')
			{
                 alert('Email required');     
			}
			else if(!email.match(validRegex))
			{
                alert('Invalid Email provided');         
			}
			else
			{
			 
			$.ajax({
                url: 'setss.php',
                 type: 'post',
                data: {amount: amount},
                success: function(data)
                    {
                        if(data.includes("Good"))
                        {
							 
                          payFee();         
                        }    
                    }                
             });

			 
			}

function postings()
{
  		
  			var fd = new FormData($("#myform")[0]);

               $.ajax({
                url: 'promot.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(data)
                    {
                      
                     
                        if(data.includes("Good"))
                        {
                              $(this).delay(50).queue(function() {
								
                            $(this).dequeue();
                            });      
                        }    
                    }                
           });
            
            

			
}


}      
