<?php require "includes/header.php"?>


<?php 


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $stmt= $conn->prepare("SELECT * FROM cruise WHERE `id`=:id ");
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
    

    $targetDirectory = "uploads/";
    $uploadFileName = $_FILES['image']['name'];
    $extension = pathinfo($uploadFileName, PATHINFO_EXTENSION);
    $newFileName = uniqid().'.'.$extension;

    $targetFilePath = $targetDirectory.$newFileName;

 
    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
        
        
        $insertQuery = "UPDATE `cruise` SET `title`=:title,`image`=:image ,`price`= :price,
        `description`= :description,`score`= :score,`user_rating`= :user_rating,`destination`= :destination,`checking`= :checking,
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

					<h1 class="h3 mb-3">cruise</h1>

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
								<button name="submit"  class="btn btn-primary" type="submit" id="form_submit_button" class="form_submit_button button trans_200">Save<span></span><span></span><span></span></button>
								</div>

					


								</form>
							

					
						</div>
					</div>

				</div>
			</main>
			



<?php require "includes/footer.php"?>