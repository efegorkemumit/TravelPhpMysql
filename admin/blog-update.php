<?php require "includes/header.php"?>


<?php 


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt= $conn->prepare("SELECT * FROM blog WHERE `id`=:id ");
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount()==1){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
      
        
        



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
    $title = $_POST['title'];
    $description = $_POST['description'];
   

    $targetDirectory = "uploads/";
    $uploadFileName = $_FILES['image']['name'];
    $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);
    $newFileName = uniqid().'.'.$extension;

    $targetFilePath = $targetDirectory.$newFileName;

 
    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        
        
        $insertQuery = "UPDATE `blog` SET `title`=:title,`image`=:image,
        `description`= :description WHERE  `id`=:id ";
         $stmt= $conn->prepare($insertQuery);
         $stmt->bindParam(':title',$title );
         $stmt->bindParam(':image',$targetFilePath );
         $stmt->bindParam(':description',$description );
         $stmt->bindParam(':id',$id );

         try{
            $stmt->execute();
            echo "success";


         }
         catch(PDOException $e){
            echo "danger".$e->getMessage();

         }

    }
    else {
        echo "image not move";
    }




}


?>
<main class="content">
			
			</main>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">blog</h1>

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
                                    <input type="file"  name="image" placeholder="image" required>
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