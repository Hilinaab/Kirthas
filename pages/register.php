<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KIRTHAS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	
	<link href="../assets/css/lowsig.css" rel="stylesheet" type="text/css" media="all" />
<!--===============================================================================================-->
</head>
<style type="text/css">
    body{
    background-image:  url("../images/demo/backgrounds/ty.jpg");
}
</style>
  
	
  







	<!-- Main Content -->
	<div class="main">
	<div class="main-w3l">
		
	
		<div class="w3layouts-main">
			<h2><span>Register now</span></h2>
			<form  method="post" action="register.php">
					<?php include('errors.php'); ?>
					<input placeholder="Full Name" name="fullname" type="text" required="">
					<input placeholder="UserName" name="username" type="text" required="" value="<?php echo $username;?>">
					<input placeholder="Email" name="email" type="email" required="" value="<?php echo $email; ?>">
					<input placeholder="Phone Number" name="phone" type="text" required="">
					<input placeholder="Password" name="password_1" type="password"  id="password1" required="">
					<input placeholder="Confirm Password" name="password_2" type="password"  id="password2" required="">
					<input type="submit" value="Get Started" name="reg_user">
				</form>
				<br/>
				<br/>
				<br/>
				<br/>
				<p>If You have an account ...<a href="login.php">LOGIN</a></p>
		</div>
		<!-- //main -->
	<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
