<?php require "includes/header.php"?>


<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $cta_button_link = $_POST['cta_button_link'];
    $scor = $_POST['scor'];
    $cta_text = $_POST['cta_text'];
    $cta_button_text = $_POST['cta_button_text'];
  
    
        
        $insertQuery = "INSERT INTO `cta_content`( `title`, `cta_button_link`, `scor`, `cta_text`, `cta_button_text`) 
                                           VALUES (:title, :cta_button_link, :scor, :cta_text, :cta_button_text)";
         $stmt= $conn->prepare($insertQuery);
         $stmt->bindParam(':title',$title );
         $stmt->bindParam(':cta_button_link',$cta_button_link );
         $stmt->bindParam(':scor',$scor );
         $stmt->bindParam(':cta_text',$cta_text );
         $stmt->bindParam(':cta_button_text',$cta_button_text );
      
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

					<h1 class="h3 mb-3">cta Add</h1>

					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
                                <form method="post" enctype="multipart/form-data">
								<div class="card-header">
									<h5 class="card-title mb-0">Add</h5>
								</div>

                             
  
								<div class="card-body">
									<input type="text" class="form-control" name="title" placeholder="Title">
								</div>
								
								<div class="card-body">
									<input type="text" class="form-control" name="cta_button_link" placeholder="cta_button_link">
								</div>
								<div class="card-body">
									<input type="number" class="form-control" name="scor" placeholder="scor">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="cta_button_text" placeholder="cta_button_text">
								</div>
                               
								<div class="card-body">
									<textarea class="form-control" rows="6" name="cta_text" placeholder="cta_text"></textarea>
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