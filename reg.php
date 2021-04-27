<!DOCTYPE html>
</html>
<head>
    <title>Login form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery.3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://mxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <style>

		@import url('https://fonts.googlrapis.com/css?family=Roboto');

		body {
			font-family: 'Roboto', sans-serif;
			background: url(img/bg1.jpg) center no-repeat fixed;
			background-size: cover;
		}

		.main-section {
			margin: 0 auto;
			margin-top: 130px;
			padding: 0;
		}

		.modal-content {
			background-color: white;
			padding: 0 18px;
			border-radius: 10px;
		}

		.user-img img {
			height: 120px; 
			width: 120px;
			border-radius: 20px;
		}

		.user-img {
			margin-top: -60px;
			margin-bottom: 45px;
		}

		.form-group {
			margin-bottom: 25px;
		}

		.form-group {
			height: 42px;
			border-radius: 5px;
			border: 0;
			font-size: 18px;
			letter-spacing: 2px;
			padding-left: 40px;
		}

		.form-group::before {
			font-family: 'Font Awesome\ 5 Free';
			content: "\f1fa";
			position: absolute;
			font-size: 22px;
			left: 28px;
			padding-top: 4px;
			color: #555e60;
		}

		.form-group:last-of-type::before {
			content: "\f023";
		}

		.form-input button {
			width: 40%;
			margin: 5px 0 25px;
		}

		.btn-success {
			background-color: #1c6288;
			font-size: 19px;
			border-radius: 5px;
			padding: 7px 14px;
			border: 1px solid #daf1ff;
		}

		.btn-success:hover {
			border-color: #13445e;
			border: 1px solid #daf1ff;
		}

		.forgot {
			padding: 5px 0 18px;
		}

		.forgot a {
			color: #4e97cc;
		}

		.signup {
			padding: 2px 0 18px;
			color: black;
		}

		.signup a {
			color: #4e97cc;
		}

		.sign {
			color: blue;
		}

		.login {
			margin-right: 900px;
		}

    </style>
</head>
<body>
	<?php
        require('config.php');
        require('session.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_REQUEST['submit'])){
            $Name = $_REQUEST['Name'];
            $Email = $_REQUEST['Email'];
            $Password = $_REQUEST['Password'];
            $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$Name', '$Password', '$Email', '$trn_date')";

                $result = mysqli_query($con,$query);
                if($result){
                    header("Location: Doodle.html");
                }
        }
        else{
    ?>
    
	<div class="modal-dialog text-center login">
		<div class="col-sm-9 main-section">
			<div class="modal-content">

				<div class="col-12 user-img">
					<img src="img/login.jpg">
				</div>
				
				<div class="col-12 form-input">
					<form action="" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter Name" name="Name" style="margin-left: 10px;">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Enter Email" name="Email" style="margin-left: 10px;">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Enter Password" name="Password" style="margin-left: 10px;">
						</div>
						
						<button type="submit" class="btn btn-success" name="submit">SignUp</button>

					</form>
				</div>

				<div class="col-12 forgot">
					<a href="#">Forgot Password</a>					
				</div>

				<div class="col-12 signup">
					Already have an account? 
					<a href="login.php" class="sign">Log In here</a>					
				</div>
				
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>