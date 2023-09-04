<?php 

session_start();
define("APPURL","http://localhost/TravelPhpMysql");
require_once($_SERVER['DOCUMENT_ROOT'].'/TravelPhpMysql/config/config.php');



if(isset($_SESSION["admin"])) {
    echo "<script>window.location.href='".APPURL."';</script>";
  }


if(isset($_POST['submit'])){

	
    if(empty($_POST['email']) OR empty($_POST['password'])){
        echo "<script>alert('some inputs are empty')</script>";
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];



        $login= $conn->query("SELECT * FROM users WHERE email='$email'");
        $login ->execute();

        $fetch = $login->fetch(PDO::FETCH_ASSOC);

        if($login->rowCount()> 0)
        {
            if(password_verify($password, $fetch['mypassword']))
            {
				if($fetch['admin']==1)
				{
					$_SESSION['admin']= $fetch['username'];
					$_SESSION['user_id']= $fetch['id'];
					echo "<script>window.location.href='".APPURL."/admin/dashboard.php';</script>";

				}
				else
				{
					echo "<script>alert('Email or password wrong')</script>";
				}

              


            }
            else
            {
                echo "<script>alert('Email or password wrong')</script>";
            }

        }
        else
        {
            echo "<script>alert('Email or password wrong')</script>";
        }




    }


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back!</h1>
							
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="index.php" method="POST">
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email"  name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>
										
										<div class="d-grid gap-2 mt-3">
										<button  name="submit" type="submit" class="btn btn-lg btn-primary"> Sign in</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>