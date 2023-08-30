<?php require "../includes/header.php"?>
<?php require "../config/config.php"?>

<?php 

if(isset($_SESSION["username"])) {
    header("location: ".APPURL."");
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
                $_SESSION['username']= $fetch['username'];
                $_SESSION['user_id']= $fetch['id'];
                header("location: ".APPURL."");
                echo "<script>alert('giriş ok')</script>";



            }
            else
            {
                echo "<script>1alert('Email or password wrong')</script>";
            }

        }
        else
        {
            echo "<script>2alert('Email or password wrong')</script>";
        }




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
    


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label"> Email</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="email">

                            </div>
                        
                            <div class="mb-3">
                                <label for="password" class="form-label"> Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="password">

                            </div>
                            <button  name="submit" type="submit" class="btn btn-primary"> Register</button>



                        </form>

                    </div>

                </div>

            </div>

        </div>

    


    </div>
    


    </div>

    <?php require "../includes/footer.php"?>