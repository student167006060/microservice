<?php
    use PHPMailer\PHPMailer\PHPMailer;
    require_once "functions.php";

    if (isset($_POST['send'])) {
        $conn = new mysqli('localhost', 'root', 'root', 'dejasa');

        $email = $conn->real_escape_string($_POST['email']);

        $sql = $conn->query("SELECT id FROM pelanggan WHERE email='$email'");
        if ($sql->num_rows > 0) {

            $token = generateNewString();

	        $conn->query("UPDATE pelanggan SET token='$token', 
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE email='$email'
            ");

	        require_once "PHPMailer/PHPMailer.php";
	        require_once "PHPMailer/Exception.php";

	        $mail = new PHPMailer();
	        $mail->addAddress($email);
	        $mail->setFrom("YOUR_EMAIL", "YOUR_COMPANY");
	        $mail->Subject = "Reset Password";
	        $mail->isHTML(true);
	        $mail->Body = "
	            Hi,<br><br>
	            
	            In order to reset your password, please click on the link below:<br>
	            <a href='
	            http://gorideme.fun/resetPassword.php?email=$email&token=$token
	            '>http://gorideme.fun/resetPassword.php?email=$email&token=$token</a><br><br>
				
				
	            
	            Kind Regards,<br>
	            Go Ride Me TEAM
	        ";

	        if ($mail->send())
    	        echo  "<script>alert('berhasil! silahkan cek email anda');</script>";
}
else
{
echo "<script>alert('Email salah/tidak terdaftar');</script>";	
}
	}

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="asset/forgotpass/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/css/util.css">
	<link rel="stylesheet" type="text/css" href="asset/forgotpass/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
				<form class="login100-form validate-form" method="post">

					<span class="login100-form-title p-t-5 p-b-15">
						Forgot Password
					</span>
					

					<div class="wrap-input100 validate-input m-b-5" data-validate = "email salah">
						<input class="input100" type="text" name="email" value="" placeholder="email anda" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-mail"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit" name="send" onClick="myFunction()" value="Send Email">
							kirim
						</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
