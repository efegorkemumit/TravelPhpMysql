<?php require "../includes/header.php"?>

<?php

if(isset($_SESSION["username"])) {
    echo "<script>window.location.href='".APPURL."';</script>";
  }


if(isset($_POST['submit'])){

    if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password'])){
        echo "<script>alert('some inputs are empty')</script>";
    }
    else{
        $username= $_POST['username'];
        $email= $_POST['email'];
        $password=  password_hash($_POST['password'], PASSWORD_DEFAULT);

        $insert = $conn->prepare("INSERT INTO users (username, email, mypassword) VALUES (:username, :email, :mypassword)");

        $insert->execute([
            ":username"=> $username,
            ":email"=> $email,
            ":mypassword"=> $password,
        ]);

        echo "<script>window.location.href='".APPURL."/auth/login.php';</script>";




    }


}

?>

<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/my.css">


	<div class="home">
		<div class="home_background page-banner-register parallax-window" data-parallax="scroll"></div>
		<div class="home_content">
			<div class="home_title">Register</div>
		</div>
	</div>
    


    <div class="container mt-5 mb-50">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register</h3>
                    </div>
                    <div class="card-body">
                        <form name="register" method="POST" action="register.php" >
                            <div class="mb-3">
                                <label for="username" class="form-label"> username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"> Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">

                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="password">

                            </div>
                            <button type="submit" name="submit" class="btn btn-primary"> Register</button>



                        </form>

                    </div>

                </div>

            </div>

        </div>

    


    </div>

    <?php require "../includes/footer.php"?>