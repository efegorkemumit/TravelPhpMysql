<?php require "includes/header.php"?>


<?php 



    $id = 1;
    $stmt= $conn->prepare("SELECT * FROM about WHERE `id`=:id ");
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount()==1){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $title = $row['title'];
        $description = $row['description'];
        $facebook = $row['facebook'];
        $twitter = $row['twitter'];
        $linkedin = $row['linkedin'];
        $pinterest = $row['pinterest'];
        $phone = $row['phone'];
        $email = $row['email'];
        $adress = $row['adress'];

        



    }
    else
    {
        echo "no results";
        exit();
    }






if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = 1;
    
    $title = $_POST['title'];
    $description = $_POST['description'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $pinterest = $_POST['pinterest'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];

    

        
        
        $insertQuery = "UPDATE `about` SET `title`=:title,
        `description`= :description,`facebook`= :facebook,`twitter`= :twitter,`linkedin`= :linkedin,`pinterest`= :pinterest,
        `phone`= :phone,
        `email`=:email,`adress`=:adress WHERE  `id`=:id ";
         $stmt= $conn->prepare($insertQuery);
         $stmt->bindParam(':title',$title );
         $stmt->bindParam(':facebook',$facebook );
         $stmt->bindParam(':twitter',$twitter );
         $stmt->bindParam(':description',$description );
         $stmt->bindParam(':linkedin',$linkedin );
         $stmt->bindParam(':pinterest',$pinterest );
         $stmt->bindParam(':phone',$phone );
         $stmt->bindParam(':email',$email );
         $stmt->bindParam(':adress',$adress );
         $stmt->bindParam(':id',$id );
      

        
         try{
            $stmt->execute();
            echo "success";


         }
         catch(PDOException $e){
            echo "danger".$e->getMessage();

         }

   


}


?>
<main class="content">
			
			</main>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">about</h1>

                 

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
                                <form method="post" enctype="multipart/form-data">
								<div class="card-header">
									<h5 class="card-title mb-0">Add</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" value="<?php echo $title; ?>" name="title" placeholder="Title">
								</div>
								
								<div class="card-body">
									<input type="text" class="form-control" value="<?php echo $facebook; ?>" name="facebook" placeholder="facebook">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" value="<?php echo $twitter; ?>"  name="twitter" placeholder="twitter">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="linkedin"  value="<?php echo $linkedin; ?>" placeholder="linkedin">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="pinterest"  value="<?php echo $pinterest; ?>" placeholder="pinterest">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="phone"  value="<?php echo $phone; ?>" placeholder="phone">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="email" value="<?php echo $email; ?>"  placeholder="email">
								</div>

                                <div class="card-body">
									<input type="text" class="form-control" name="adress" value="<?php echo $adress; ?>" placeholder="adress">
								</div>

                            

								<div class="card-body">
									<textarea class="form-control" rows="6" name="description"   placeholder="description"> <?php echo $description; ?></textarea>
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