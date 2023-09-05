<?php require "includes/header.php"?>


<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $score = $_POST['score'];
    $user_rating = $_POST['user_rating'];
    $destination = $_POST['destination'];
    $checking = $_POST['checking'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    

    $targetDirectory = "uploads/";
    $uploadFileName = $_FILES['image']['name'];
    $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);
    $newFileName = uniqid().'.'.$extension;

    $targetFilePath = $targetDirectory.$newFileName;

 
    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        
        $insertQuery = "INSERT INTO `flight`(`title`, `image`, `price`, `description`, `score`, `user_rating`,
         `destination`, `checking`, `checkout`, `adults`, `children`)  VALUES (:title, :image, :price,  :description,
         :score, :user_rating, :destination, :checking, :checkout, :adults, :children )";
         $stmt= $conn->prepare($insertQuery);
         $stmt->bindParam(':title',$title );
         $stmt->bindParam(':image',$targetFilePath );
         $stmt->bindParam(':price',$price );
         $stmt->bindParam(':description',$description );
         $stmt->bindParam(':score',$score );
         $stmt->bindParam(':user_rating',$user_rating );
         $stmt->bindParam(':destination',$destination );
         $stmt->bindParam(':checking',$checking );
         $stmt->bindParam(':checkout',$checkout );
         $stmt->bindParam(':adults',$adults );
         $stmt->bindParam(':children',$children );

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

					<h1 class="h3 mb-3">flight Add</h1>

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
                                    <input type="file"  name="image" placeholder="image" required>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" name="price" placeholder="Price">
								</div>
								<div class="card-body">
									<input type="number" class="form-control" name="score" placeholder="score">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="user_rating" placeholder="user_rating">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="destination" placeholder="destination">
								</div>
                                <div class="card-body">
									<input type="date" class="form-control" name="checking" placeholder="checking">
								</div>
                                <div class="card-body">
									<input type="date" class="form-control" name="checkout" placeholder="checkout">
								</div>

                                <div class="card-body">
									<input type="number" class="form-control" name="adults" placeholder="adults">
								</div>

                                <div class="card-body">
									<input type="number" class="form-control" name="children" placeholder="children">
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" name="description" placeholder="description"></textarea>
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