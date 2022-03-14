// JavaScript Document
 

function btnsubmit()
{
             var fname = $("#firstname").val();
            var lname = $('#lastname').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            var confirmpass = $('#confirmpassword').val();
            var age = $('#age').val();
 			
			alert("OK");
			
            var typ = "Student";
 		   
			 if(fname ==""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>First name required!</span>");
 			 }
			 else if(lname == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Last name required!</span>");
			 }
			 else if(email == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Email required!</span>");
			 }
			 else if(pass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password required!</span>");
			 }
			 else if(confirmpass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Confirm password required!</span>");
			 }
   			 else if(pass !== confirmpass){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password missmatch!</span>");
		     }
  			 else{
  					$.ajax({
						url: "scripts/",
				data: {typ: typ, fname: fname, lname: lname, email: email, password: password},
						type: "POST",
						success: function(data)
						{
							$('#errormsg').html(data);
							
							if(data.includes("Successful"))
							{
			$('#errormsg').html("<span style='color:green; font-size: 20px;'>Registration Successful</span>");
								$(this).delay(2000).queue(function() {
			location.href='addStudent.php';
								$(this).dequeue();
								});      
							} 
							   
						}                
					});
			     }
}
 
 $(document).ready(function() {
	 $('.sb_got').click(function (e){
		
		e.preventDefault();

             var fname = $("#firstname").val();
            var lname = $('#lastname').val();
            var email = $('#email').val();
            var pass = $('#password').val();
            var confirmpass = $('#confirmpassword').val();
            var age = $('#age').val();
 			
			alert("OK");
			
            var typ = "Student";
 		   
			 if(fname ==""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>First name required!</span>");
 			 }
			 else if(lname == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Last name required!</span>");
			 }
			 else if(email == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Email required!</span>");
			 }
			 else if(pass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password required!</span>");
			 }
			 else if(confirmpass == ""){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Confirm password required!</span>");
			 }
   			 else if(pass !== confirmpass){
	  $('#errormsg').html("<span style='padding:5px;color:#f00'>Password missmatch!</span>");
		     }
  			 else{
  					$.ajax({
						url: "scripts/",
				data: {typ: typ, fname: fname, lname: lname, email: email, password: password},
						type: "POST",
						success: function(data)
						{
							$('#errormsg').html(data);
							
							if(data.includes("Successful"))
							{
			$('#errormsg').html("<span style='color:green; font-size: 20px;'>Registration Successful</span>");
								$(this).delay(2000).queue(function() {
			location.href='addStudent.php';
								$(this).dequeue();
								});      
							} 
							   
						}                
					});
			     }
				 
		 });
	});

 
