
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>start your login journey</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- Custom Theme files -->
	<link href="css/style_login.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.min_login.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->

	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
	<!-- //web font -->

</head>
<body>
    <script>
        function Login()
            {
                var user=document.getElementById("user").value;
                var pass=document.getElementById("password").value;
                var checkBox = document.getElementById("chkrem");

                xhttp = new XMLHttpRequest();

                xhttp.onreadystatechange = function() {
            
                if (this.readyState == 4 && this.status == 200) {

                    var result=this.responseText;
                    if(result=="ok")
                    {
                        window.open('index.php','_self');
                    }
                    else
                        document.getElementById("dvlog").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "checklogin.php?user="+user+"&password="+password+"", true);
                xhttp.send();

            }
    </script>
<!-- main -->

<div class="w3layouts-main"> 
	<div class="bg-layer">
		<h1>Slide Login form</h1>
		<div class="header-main">
			<div class="main-icon">
				<span class="fa fa-eercast"></span>
			</div>

            

			<div class="header-left-bottom">
				<form action="#" method="post">
					<div class="icon1">
						<span class="fa fa-user"></span>
						<input type="text" class="user" id="user" placeholder="Email or Phone number" required=""/>
					</div>
					<div class="icon1">
						<span class="fa fa-lock"></span>
						<input type="password" class="password" id="password" placeholder="Password" required=""/>
					</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
					</div>
					<div class="bottom" class="btnsub" id="btnsub">
						<button type="button" class="btn" onclick="Login()">Log In</button>
					</div>
                    <div id="dvlog"></div>
					<div class="links">
						<p><a href="#">Forgot Password?</a></p>
						<p class="right"><a href="signup.php">New User? Register</a></p>
						<div class="clear"></div>
					</div>
				</form>	
			</div>
			<div class="social">
				<ul>
					<li>or login using : </li>
					<li><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
					<li><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
					<li><a href="#" class="google"><span class="fa fa-google-plus"></span></a></li>
				</ul>
            
                
                    <ul>
                    <li>or back to :</li>
                        <li><a href="index.php" class="home"><span class="fa fa-home"></span></a></li>
                    </ul>
                
			</div>
		</div>
		
		<!-- copyright -->
		<div class="copyright">
			<p>© 2019 Slide Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
		</div>
		<!-- //copyright --> 
	</div>
</div>	
<!-- //main -->

</body>
</html>