
<!DOCTYPE html>
<html lang="en">
<head>
<title>effective register form Flat Responsive Widget Template::w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="effective register form Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="css/style_signup.css" type="text/css" media="all" /><!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min_signup.css" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Expletus+Sans" rel="stylesheet">
</head>
    <!-- Site Icons -->
<body>
	<section class="agile-main">
	<header>
		
		<br>
		<br>
		<h1>effective<label>register</label> for</h1></header>
		<h2> <label>effective new success</label> </h2>
	
	<div class="agile-top">
		
	<?php
        	if(isset($_POST["btnsubmet"]))
            {
                if(isset($_POST["checkbox"]))
                {
                    if($_POST["password"]==$_POST["cpassword"])
                    {
                    	include_once "Database.php";
                        	$db=new Database();
                            $msg=$db->RunDML("insert into learner values('Default','".$_POST["Date_of_birth"]."','".$_POST["location"]."','".$_POST["phone"].
                            "','".$_POST["email"]."','".$_POST["name"]."','".$_POST["cpath"]."','".$_POST["gender"]."','".$_POST["password"]."')");
                                    if($msg=="ok")
                                    {
                                        echo "<div class='alert alert-success'>User has been created success</div>";
                                    }
                                    else if(strpos($msg,"UQphone"))
                                    {
                                        echo "<div class='alert alert-danger'>This phone already exsist,please try with anther phone number.</div>";
                                    }
                                    else if(strpos($msg,"UQmail"))
                                    {
                                        echo "<div class='alert alert-danger'> This Email already exsist,please try with anther email.</div>";
                                    }
                                    else
                                    {
                                        echo "<div class='alert alert-danger'>$msg</div>";
                                    }
                    }
                    else
					{
                        echo "<div class='alert alert-danger'>Sorry Password doesn't match</div>";
                   	}
                }
				else
				{
					echo "<div class='alert alert-warning'> Please check the terms & conditions</div>";
				}
                            
            }
    ?>
		<h2>sign up</h2>
		<form action="#" method="post">
			<div class="agile-user">
				<p>name</p>
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
				<input type="text" name="name" id="name" placeholder="enter your name" required="">
				<div class="clear"></div>
			</div>
			<div class="agile-email">
				<p>email</p>
				<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
				<input type="email" name="email" id="email" placeholder="enter your email" required="">
				<div class="clear"></div>
			</div>
			<div class="agile-mobile">
				<p>Mobile phone</p>
				<span><i class="fa fa-users" aria-hidden="true"></i></span>
				<input type="text" name="phone" id="phone" placeholder="enter your moblie number" required="">
				<div class="clear"></div>
			</div>
			<div class="agile-password">
				<p>password</p>
				<span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				<input type="password" name="password" id="password" placeholder="enter your password" required="">
				<div class="clear"></div>
			</div>
			<div class="agile-cpassword">
				<p>confirm password</p>
				<span><i class="fa fa-lock" aria-hidden="true"></i></span>
				<input type="password" name="cpassword" id="cpassword" placeholder="confirm your password" required="">
				<div class="clear"></div>
			</div>
			<div class='agile-date'>
				<p>date of birth</p>
					<!-- <form action="/action_page.php" > -->
					<input type="date" id="Date_of_birth" name="Date_of_birth" required="">
					<!-- </form> -->
				<br><br>
			</div>
            <!-- pending options -->
				<div class='agile-gender'>
					<p>Select your gender: </p>
					 <span><i class="fa fa-unlock-alt" aria-hidden="true"></i></span> 
						<select name="gender" id="gender">
							<option value="male">male</option>
							<option value="female">female</option>
					</select>
					</div>
                    <div>
					<p>Select your Location: </p>
						<span><i class="fas fa-map-marked-alt	" aria-hidden="true"></i></span>
						<select name="location" id="location">
							<option value="africa">africa</option>
							<option value="Europe">Europe</option>
							<option value="Asia">Asia</option>
							<option value="America">America</option>
						</select>
                    </div>
						<div>
						<select name="cpath" id="cpath">
							<option value="programming">programming</option>
							<option value="analysis">analysis</option>
							<option value="sales">sales</option>
							<option value="language">language</option>
							<option value="other">other</option>
						</select>
						</div>

			<button type="submit" name="btnsubmet" id="btnsubmet"></button>

			<div class="container signup">
				<input type="checkbox" placeholder="terms" name="checkbox" id="checkbox" required>
				<label for="terms">
				<b>By creating an account you agree to our
				<a href="#">Terms & Privacy</a></b></label>
    		</div>	
				<!--لازم نحط لينك لصافحة اللوجين هنا لما نعملها ان شاء الله-->
			<div class="container signin">
				<p>Already have an account? <a href="login.php">login in</a>.</p><br>

                <h2><a href="index.php">back to Home</a></h2>

			</div>
		</form>
			<div class="clear"></div>
	</div>
			<div class="clear"></div>
	<footer>&copy; 2018 effective register form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></footer>
	</section>
</body>
</html>