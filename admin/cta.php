<?php require "includes/header.php"?>


<?php 

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$id = $_POST['id'];
	$stmt = $conn->prepare("DELETE FROM cta_content  WHERE `id`=:id");
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

					<h1 class="h3 mb-3">CTA TABLE</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
							<div class="card-header">
								<p><a href="cta-add.php">						<button class="btn btn-info">NEW CTA</button>
</a> </p>
</div>

							<div class="card-header">
							<form method="post"> 
							<input type="number" class="form-control" name="id">
<button name="submit"  class="btn btn-danger" type="submit" id="form_submit_button" class="form_submit_button button trans_200">DELETE<span></span><span></span><span></span></button>

								</div>	
								</form>		

							
								<div class="card-header">
									<h5 class="card-title mb-0">CTA</h5>
								</div>

									
								<table class="table table-hover my-0">
									<thead>
										<tr>
										<th class="d-none d-md-table-cell">id</th>

											<th>title</th>
											<th class="d-none d-xl-table-cell">	cta_button_link</th>
											<th class="d-none d-xl-table-cell">scor</th>
											<th>cta_text	</th>
                                            <th>cta_button_text</th>
                                           
                                      
										</tr>
									</thead>
									<tbody>
<?php 

try {

    $stmt= $conn->prepare("SELECT * FROM cta_content");
    $stmt ->execute();


    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
?>

										<tr>
										<td><?php echo $row["id"]; ?></td>
											<td><?php echo $row["title"]; ?></td>
											<td class="d-none d-xl-table-cell"><?php echo $row["cta_button_link"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["scor"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["cta_text"]; ?></td>
                                            <td class="d-none d-xl-table-cell"><?php echo $row["cta_button_text"]; ?></td>
                                            
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