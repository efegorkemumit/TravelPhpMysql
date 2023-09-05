<?php require "includes/header.php"?>


<?php 


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt= $conn->prepare("SELECT * FROM hotels WHERE `id`=:id ");
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount()==1){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = $row['id'];
        $title = $row['title'];
        $price = $row['price'];
        $description = $row['description'];
        $score = $row['score'];
        $user_rating = $row['user_rating'];
        $destination = $row['destination'];
        $checking = $row['checking'];
        $checkout = $row['checkout'];
        $adults = $row['adults'];
        $children = $row['children'];

        $pet= $row['pet'] ? 1:0 ;
        $carPark= $row['carPark'] ? 1:0 ;
        $wireless= $row['wireless'] ? 1:0 ;
        $reservations= $row['reservations'] ? 1:0 ;
        $privatePark= $row['privatePark'] ? 1:0 ;
        $smoking= $row['smoking'] ? 1:0 ;
     
        



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
    $price = $_POST['price'];
    $description = $_POST['description'];
    $score = $_POST['score'];
    $user_rating = $_POST['user_rating'];
    $destination = $_POST['destination'];
    $checking = $_POST['checking'];
    $checkout = $_POST['checkout'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $pet= isset($_POST['pet']) ? 1:0 ;
    $carPark= isset($_POST['carPark']) ? 1:0 ;
    $wireless= isset($_POST['wireless']) ? 1:0 ;
    $reservations= isset($_POST['reservations']) ? 1:0 ;
    $privatePark= isset($_POST['privatePark']) ? 1:0 ;
    $smoking= isset($_POST['smoking']) ? 1:0 ;

    

    $targetDirectory = "uploads/";
    $uploadFileName = $_FILES['image']['name'];
    $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);
    $newFileName = uniqid().'.'.$extension;

    $targetFilePath = $targetDirectory.$newFileName;

 
    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        
        
        $insertQuery = "UPDATE `hotels` SET `title`=:title,`image`=:image ,`price`= :price,
        `description`= :description,`score`= :score,`user_rating`= :user_rating,`destination`= :destination,`checking`= :checking,
        `pet`= :pet,`carPark`= :carPark,`wireless`= :wireless,`reservations`= :reservations,`privatePark`= :privatePark,
        `smoking`= :smoking,
        `checkout`=:checkout,`adults`=:adults,`children`= :adults WHERE  `id`=:id ";
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
         $stmt->bindParam(':id',$id );
         $stmt->bindParam(':pet',$pet );
         $stmt->bindParam(':carPark',$carPark );
         $stmt->bindParam(':wireless',$wireless );
         $stmt->bindParam(':reservations',$reservations );
         $stmt->bindParam(':privatePark',$privatePark );
         $stmt->bindParam(':smoking',$smoking );

        
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

					<h1 class="h3 mb-3">hotel</h1>

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
									<input type="text" class="form-control" value="<?php echo $price; ?>" name="price" placeholder="Price">
								</div>
								<div class="card-body">
									<input type="number" class="form-control" value="<?php echo $score; ?>"  name="score" placeholder="score">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="user_rating"  value="<?php echo $user_rating; ?>" placeholder="user_rating">
								</div>
                                <div class="card-body">
									<input type="text" class="form-control" name="destination"  value="<?php echo $destination; ?>" placeholder="destination">
								</div>
                                <div class="card-body">
									<input type="date" class="form-control" name="checking"  value="<?php echo $checking; ?>" placeholder="checking">
								</div>
                                <div class="card-body">
									<input type="date" class="form-control" name="checkout" value="<?php echo $checkout; ?>"  placeholder="checkout">
								</div>

                                <div class="card-body">
									<input type="number" class="form-control" name="adults" value="<?php echo $adults; ?>" placeholder="adults">
								</div>

                                <div class="card-body">
									<input type="number" class="form-control" name="children" value="<?php echo $children; ?>" placeholder="children">
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="6" name="description"   placeholder="description"> <?php echo $description; ?></textarea>
								</div>

                                <div class="card-body">
                                Pet <input class="form-check-input" name="pet" type="checkbox"  <?php echo $pet ? 'checked' : ''; ?>>
                                </div>
                                <div class="card-body">
                                carPark<input class="form-check-input" type="checkbox" name="carPark"  <?php echo $carPark ? 'checked' : ''; ?>> 
                                </div>
                                <div class="card-body">
                                wireless <input class="form-check-input" type="checkbox" name="wireless"  <?php echo $wireless ? 'checked' : ''; ?>> 
                                </div>
                                <div class="card-body">
                                reservations <input class="form-check-input" type="checkbox" name="reservations"  <?php echo $reservations ? 'checked' : ''; ?>> 
                                </div>
                                <div class="card-body">
                                privatePark <input class="form-check-input" type="checkbox" name="privatePark" <?php echo $privatePark ? 'checked' : ''; ?> > 
                                </div>

                                <div class="card-body">
                                smoking <input class="form-check-input" type="checkbox" name="smoking" <?php echo $smoking ? 'checked' : ''; ?>> 
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