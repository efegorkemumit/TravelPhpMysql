<?php require "includes/header.php"?>

<?php





if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt= $conn->prepare("SELECT * FROM users WHERE `id`=:id ");
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount()==1){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['mypassword'];
        $email = $row['email'];
        $admin = $row['admin'];
        



    }
    else
    {
        echo "no results";
        exit();
    }


}
else
{
    echo "Error no found";
    exit();
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_GET['id'];
    $newEmail = $_POST["newEmail"];
    $newPassword = $_POST["newPassword"];
    $newUsername = $_POST["newUsername"];
    $newAdmin = $_POST["newAdmin"];

    $hashPassword = password_hash($newPassword,  PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE  users SET `username`=:newUsername, `mypassword`=:newPassword, `email`=:newEmail,
    `admin`=:newAdmin WHERE `id`=:id");
    $stmt->bindParam(':newUsername',$newUsername );
    $stmt->bindParam(':newPassword',$hashPassword );
    $stmt->bindParam(':newEmail',$newEmail );
    $stmt->bindParam(':newAdmin',$newAdmin );
    $stmt->bindParam(':id',$id );

    if($stmt->execute()){
        echo "Success";
    }
    else
    {
        echo "Error";
    }





}

?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Blank Page</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
                                <form method="post"> 
							
								<div class="card-body">
									Email <input type="text" name="newEmail" value="<?php echo $email; ?>" class="form-control" placeholder="Input">
								</div>
								<div class="card-body">
								Password	<input type="password" name="newPassword" value="<?php echo $password; ?>" class="form-control" placeholder="Password">
								</div>
								<div class="card-body">
									Username <input type="text" name="newUsername" value="<?php echo $username; ?>"  class="form-control" placeholder="Username">
								</div>
								<div class="card-body">
									Admin <input type="text" class="form-control" name="newAdmin" value="<?php echo $admin; ?>" placeholder="Admin">
								</div>
							
								<div class="card-body">
								<button name="submit"  class="btn btn-primary" type="submit" id="form_submit_button" class="form_submit_button button trans_200">Save<span></span><span></span><span></span></button>
								</div>

					
                                </form>

								
							

					
						</div>
					</div>

				</div>
			</main>
			



<?php require "includes/footer.php"?>