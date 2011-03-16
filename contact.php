<?php

session_start();

if(isset($_POST['submit'])) {
	
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['code'])) {
	
		if($_POST['code'] == $_SESSION['rand_code']) {
		
			// send email
			$accept = "Thank you for contacting me.";
		
		} else {
		
			$error = "Please verify that you typed in the correct code.";
		
		}
		
	} else {
	
		$error = "Please fill out the entire form.";
	
	}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<style type="text/css">
form {
	margin:0;
	padding:0;
}
input {
	padding:2px;
	width:200px;
}
textarea {
	padding:2px;
	width:200px;
	height:100px;
}
.button {
	width:60px;
}
p {
	margin:0 0 5px 0;
	padding:0;
}
.error {
	color:#FF0000;
	margin:0 0 10px 0;
}
.accept {
	color:#339966;
	margin:0 0 10px 0;
}
</style>
</head>

<body>

<?php if(!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
<?php if(!empty($accept)) echo '<div class="accept">'.$accept.'</div>'; ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<p><input type="text" name="name" /> Name</p>
	<p><input type="text" name="email" /> Email</p>
	<p><textarea name="message"></textarea></p>
	<img src="captcha.php"/>
	<p><input type="text" name="code" /> Are you human?</p>
    <p><input type="submit" name="submit" value="Send" class="button" /></p>
</form>

</body>
</html>