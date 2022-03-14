<?php
session_start();
 $lastid = $_SESSION['lastid'];

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>Admin Panel</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
<style>
.suggested-posts-article{
    background: white;
    -moz-box-shadow: rgba(0,0,0,0.0666) 0 3px 10px;
    -webkit-box-shadow: rgba(0,0,0,0.0666) 0 3px 10px;
    box-shadow: rgba(0,0,0,0.0666) 0 3px 10px;
    display: inline-block;
    margin: 5px;
    width: 23%;
}
article, aside, details, figcaption, figure, footer, header, main, nav, section {
    display: block;
}

article, aside, footer, header, hgroup, main, nav, section {
    display: block;
}

.suggested-posts-articlees {
	display: inline-block;
	width: 49.5%;
}
@media screen and (max-width:450px) {
	.suggested-posts-article {
	
		width:40% !important;
		}
}
.more-photos:after{    right: 3px !important;
    bottom: 0px !important;}
	
article, aside, details, figcaption, figure, footer, header, main, nav, section {
    display: block;
}
.posts_article {
    background-color: #333;
    background-position: 50%;
    background-size: cover;
	    margin-bottom: 2px;
    padding-bottom: 63.5%;
}


@media screen and (max-width:450px) {
	.suggested-posts-article {
	
		width:40% !important;
		}
}

.more-photos:after{    right: 3px !important;
    bottom: 0px !important;}
	
.more-photos{
	cursor:pointer !important;
}	

.bluess {
    width:100%;
	margin:10px;
}


.btn-group-sm>.btn, .btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
}

.btn-outline-secondary {
    color: #868e96;
    background-color: transparent;
    background-image: none;
    border-color: #868e96;
}


.btnxc {
    display: inline-block;
    padding: .5rem .75rem;
	border:1px solid #868e96;
	margin:3px;
	padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
	color:#868e96;
}
.rrrr{
	color:red;
	fill:red;
}
.rrrr2{
	
    background-color:  red;
	
}
 
.datepost{
	margin-top:-15px;
}
.anther_ma
{
	margin:1px;
}

	

.set_process
{
	margin: 0px 7px 0px 0px;
}
.messaf{display:none;}
.progress{
	width:80%;
}
.success_msg{
	color:green;
	display:none;
}
#post_send{
	margin:8px 0 8px 0;
}
.fa_p{
margin-right:20px; 
margin-top:10px; 
border:0px; 
z-index:9999
}
.p_run_div{
margin-top:-7px;
border-radius:0px; 
padding:0px;
margin-bottom:8px;
display:none;
}
.btnxc{
margin-left:15px;
cursor:pointer;
}
.btnxc_r{
margin-left:15px; 
display:none;
}

</style>
<div class="container"style="padding-top: 70px;">			
	<div class="row">
		<div class="col-md-8">
			<h2>Upload your images</h2>
			<button class="imgbuts btn btn-success">Browse...</button>
			<form action="method" name="upload-file" class="main_form" id="form-upload-file" enctype="multipart/form-data">
				<div class="ui-block">
					<aside class="suggested-posts">
						<div class="suggested-posts-container"> 
							<div class="row" id="message_box"></div> 
						</div>	
					</aside>
				</div>
			</form>
			<br> <br>
			<button class="btn btn-primary btn-md-2 " id='post_send' onclick="save_muliple_image()">Upload</button>
			<div class="progress">
				<div class="progress-bar" role="progressbar"  style="width:0%">
				  <span class="sr-only">0</span>
				</div>
			</div>
			<h2 class="success_msg">File has uploaded successfully!</h2>
		</div>
	</div> 
</div> 
<script src="img.js">
</script>
	</body>
</html>
