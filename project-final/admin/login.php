
<?php 
	session_start();
?>	
<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<!--// Stylesheets //-->
<link href="assets/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>

</head>

<body>
<!-- Wrapper Start -->
<div class="loginwrapper">
	<span class="circle"></span>
	<div class="loginone">
    	<header>
        	<img src="assets/images/logo.png" alt="" />
            <p>Enter your credentials to login to your account</p>
        </header>
        <form method="post" action="#" name="form1">
        	<div class="username">
        		<input type="text" class="form-control" name="txtemail" placeholder="Enter your email" required />
                <i class="glyphicon glyphicon-user"></i>
            </div>
            <div class="password">
            	<input type="password" class="form-control" name="txtpassword" required placeholder="Enter your password" />
                <i class="glyphicon glyphicon-lock"></i>
            </div>
            <br><br>
			
	
			
			<script>
				$(document).ready(function(){
				  $('.bluecheckradios').iCheck({
					checkboxClass: 'icheckbox_flat-blue',
					radioClass: 'iradio_flat-blue',
					increaseArea: '20%' // optional
				  });
				});  	
			</script>
            <input type="submit" name="btnsubmit" class="btn btn-primary style2" value="Log In" />
        </form>
    		<?php
	
	if(isset($_POST['btnsubmit']))
	{
	$email=$_POST["txtemail"];
	$password=$_POST["txtpassword"];
	
	
	include 'database.php';
	$obj=new database();
	$con=$obj->connect();
$res=mysqli_query($con,"select * from user_tbl where pk_email_id='$email' and u_pwd='$password' and u_type='admin'");
$cnt=mysqli_num_rows($res);

		if($cnt==1)
		{
			$_SESSION["email"]=$email;
			while($row=mysqli_fetch_array($res))
				{
					header('location:demo.php');
				}
			
		}
		else
		{
			
				echo "Invalid Email or password";
		}
	


	}
	
	
	?>   
    </div>
</div>
<!-- Wrapper End -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42761673-1', 'extracoding.com');
  ga('send', 'pageview');

</script>

</body>

<!-- Mirrored from www.extracoding.com/demo/html/adminise/login1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 09:20:08 GMT -->
</html>
