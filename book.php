<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="assets/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/contact_responsive.css">

<!-- Home -->
<?php 

if(!isset($_SESSION["username"])) {
    echo "<script>window.location.href='".APPURL."';</script>";
  }

  ?>
<div class="home">
		<div class="home_background parallax-window page-book " data-parallax="scroll"></div>
		<div class="home_content">
			<div class="home_title">BOOKING</div>
		</div>
	</div>

	<!-- Elements -->

    

	<div class="elements">
		<div class="container">
			<div class="row">
				<div class="col">

            <div class="container mt-5 mb-50">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <?php 
                                $id= $_GET['id'];
                                $category = $_GET['category'];

                                if($category==='trip')
                                {   $sql = "SELECT * FROM trips WHERE id= :id";   }
                                elseif($category==='hotel')
                                {   $sql = "SELECT * FROM hotels WHERE id= :id";   }
                                elseif($category==='flight')
                                {   $sql = "SELECT * FROM flight WHERE id= :id";   }
                                elseif($category==='cruise')
                                {   $sql = "SELECT * FROM cruise WHERE id= :id";   }
                                elseif($category==='car')
                                {   $sql = "SELECT * FROM car WHERE id= :id";   }
                                elseif($category==='active')
                                {   $sql = "SELECT * FROM active WHERE id= :id";   }
                               else{
                                echo "<script>window.location.href='".APPURL."';</script>";
                               }
                               
                               $stmt= $conn->prepare($sql);
                               $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
                               $stmt->execute();

                               if($stmt->rowCount()>0){
                                while($row= $stmt-> fetch(PDO::FETCH_ASSOC)){
                               ?>


                                <ul class="list-group list-group-light">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <img src="<?php echo DBIMAGE; ?>/<?php echo $row['image']; ?>" alt="" style="width: 45px;    margin-right: 10px; height: 45px"
                                          class="rounded-circle" />
                                        <div class="ms-3">
                                          <p class="fw-bold mb-1"><?php echo $row['title']; ?></p>
                                          <p class="text-muted mb-0">
                                          <?php 
    $trim = strlen($row['description']) > 100 ? substr($row['description'], 0, 100) . '...' : $row['description'];
    echo $trim;
?> 

                                          </p>
                                        </div>
                                      </div>
                                    </li>
                                  
                                  </ul>

                                  <?php }
                               }
                               else{
                                echo "<script>window.location.href='".APPURL."';</script>";
                               }
                               ?>
                
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="text-center">BOOKING</h3>
                                    </div>
                                    
                                    <div class="card-body">
<?php 

if ($_SERVER ["REQUEST_METHOD"]=="POST"){
    $category = $_GET['category'];
    $booking_table="";
    $column_name="";

    switch($category){
        case 'trip':
            $booking_table= "bookings_trip";
            $column_name= "trip_id";
            break;
         case 'hotels':
            $booking_table= "bookings_hotels";
            $column_name= "hotel_id";
            break;
          case 'flight':
            $booking_table= "bookings_flight";
            $column_name= "flight_id";
            break;
         case 'cruise':
            $booking_table= "bookings_cruise";
            $column_name= "cruise_id";
            break;
         case 'car':
            $booking_table= "bookings_car";
            $column_name= "car_id";
            break;
         case 'active':
            $booking_table= "bookings_active";
            $column_name= "active_id";
            break;
        default:
             echo "<script>window.location.href='".APPURL."';</script>";
    
    }

    $user_id = $_SESSION['user_id'];
    $id= $_GET['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];


    $sql = "INSERT INTO $booking_table (user_id, $column_name, first_name, last_name, phone_number ) 
    VALUES (:user_id, :column, :first_name, :last_name, :phone_number)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->bindParam(":column", $id, PDO::PARAM_INT);
    $stmt->bindParam(":first_name", $first_name, PDO::PARAM_STR);
    $stmt->bindParam(":last_name", $last_name, PDO::PARAM_STR);
    $stmt->bindParam(":phone_number", $phone_number, PDO::PARAM_STR);

    if($stmt->execute())
    {
        echo '<div class="alert alert-success"> Sucess </div>';
    }
    else
    {
        echo '<div class="alert alert-danger"> Danger </div>';
    }



}



?>



                                        <form method="POST">
                                            <!-- 2 column grid layout with text inputs for the first and last names -->
                                            <div class="row mb-4">
                                              <div class="col">
                                                <div class="form-outline">
                                                  <input name="first_name"  type="text" id="form6Example1" class="form-control" />
                                                  <label class="form-label" for="form6Example1">First name</label>
                                                </div>
                                              </div>
                                              <div class="col">
                                                <div class="form-outline">
                                                  <input  name="last_name" type="text" id="form6Example2" class="form-control" />
                                                  <label class="form-label" for="form6Example2">Last name</label>
                                                </div>
                                              </div>
                                            </div>
                                          
                                            <!-- Text input -->
                                            <div class="form-outline mb-4">
                                              <input name="phone_number" type="text" id="form6Example3" class="form-control" />
                                              <label class="form-label" for="form6Example3">Phone</label>
                                            </div>
                                          
                                          
                                            <!-- Submit button -->
                                            <button name="submit" type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
                                          </form>

                                        
                
                                    </div>
                
                                </div>
                
                            </div>
                
                        </div>

                   

					
                    </div>
				</div>
			</div>
		</div>	
	</div>




<?php require "includes/footer.php"?>