<?php require "includes/header.php"?>


<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$id = $_POST['id'];
	$stmt = $conn->prepare("DELETE FROM bookings_active  WHERE `booking_id`=:id");
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

					<h1 class="h3 mb-3">booking TABLE</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
							<div class="card-header">

</div>

							<div class="card-header">
							<form method="post"> 
							<input type="number" class="form-control" name="id">
<button name="submit"  class="btn btn-danger" type="submit" id="form_submit_button" class="form_submit_button button trans_200">DELETE<span></span><span></span><span></span></button>

								</div>	
								</form>		

							
								<div class="card-header">
									<h5 class="card-title mb-0">Users</h5>
								</div>

									
								<table class="table table-hover my-0">
									<thead>
										<tr>
                                        <th>id</th>
											<th>booking_date</th>
											<th class="d-none d-xl-table-cell">first_name</th>
											<th class="d-none d-xl-table-cell">last_name</th>
											<th>phone_number</th>
                                            <th>username</th>
                                            <th> email</th>
                                           
                                      
										</tr>
									</thead>
									<tbody>
<?php 

try {

    $stmt= $conn->prepare("SELECT  bt.booking_id,  bt.booking_date, bt.first_name, bt.last_name, bt.phone_number, u.username, u.email, t.title, t.price
    FROM     bookings_active bt    INNER JOIN    users u ON bt.user_id = u.id    INNER JOIN    active t ON bt.active_id = t.id     ");
    $stmt ->execute();


    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
?>

										<tr>
										<td class="d-none d-xl-table-cell"><?php echo $row["booking_id"]; ?></td>
											<td class="d-none d-xl-table-cell"><?php echo $row["booking_date"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["first_name"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["last_name"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["phone_number"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["username"]; ?>  </td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["email"]; ?>  </td>
											
										</tr>


                                <?php 
    }
}
catch(PDOException $e)
{
    echo "Error" .$e->getMessage();
}
                                
                                
                                ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
			</main>

			
			



<?php require "includes/footer.php"?>