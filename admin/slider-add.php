<?php require "includes/header.php"?>


<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];
    $button_url = $_POST['button_url'];
    $button_text = $_POST['button_text'];
 
    

    $targetDirectory = "uploads/";
    $uploadFileName = $_FILES['image']['name'];
    $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);
    $newFileName = uniqid().'.'.$extension;

    $targetFilePath = $targetDirectory.$newFileName;

 
    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        
        $insertQuery = "INSERT INTO `slider`(`title_1`, `image`, `title_2`, `button_url`, `button_text`)  
        VALUES (:title1, :image, :title2,  :button_url, :button_text)";
         $stmt= $conn->prepare($insertQuery);
         $stmt->bindParam(':title1',$title1 );
         $stmt->bindParam(':image',$targetFilePath );
         $stmt->bindParam(':title2',$title2 );
         $stmt->bindParam(':button_url',$button_url );
         $stmt->bindParam(':button_text',$button_text );
       

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

					<h1 class="h3 mb-3">Slider Add</h1>
               
 
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
                                <form method="post" enctype="multipart/form-data">
								<div class="card-header">
									<h5 class="card-title mb-0">Add</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="title1" placeholder="title_1">
								</div>
								<div class="card-body">
                                    <input type="file"  name="image" placeholder="image" required>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="title2" placeholder="title_2">
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="button_url" placeholder="button_url">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="button_text" placeholder="button_text">
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