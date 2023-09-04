<?php require "includes/header.php"?>

<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">USER TABLE</h1>

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Users</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Username</th>
											<th class="d-none d-xl-table-cell">Email</th>
											<th class="d-none d-xl-table-cell">create At</th>
											<th>Role</th>
											<th class="d-none d-md-table-cell">Action</th>
                                            <th class="d-none d-md-table-cell">Action</th>
										</tr>
									</thead>
									<tbody>
<?php 

try {

    $stmt= $conn->prepare("SELECT * FROM users");
    $stmt ->execute();


    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){

   
?>

										<tr>
											<td><?php echo $row["username"]; ?></td>
											<td class="d-none d-xl-table-cell"><?php echo $row["email"]; ?></td>
											<td class="d-none d-xl-table-cell"><?php echo $row["create_at"]; ?></td>
											<td>
                                                
                                            <?php 
                                            if($row["admin"]==1)
                                            {
                                                echo '<span class="badge bg-success">Admin</span>';

                                            }
                                            else
                                            {
                                                echo '<span class="badge bg-danger">user</span>';
                                            }
                                            
                                         
                                            
                                            
                                            ?>
                                       </td>
											<td class="d-none d-md-table-cell"><a href="user-update.php?id=<?php echo $row["id"]; ?>">Update</a></td>
                                            <td class="d-none d-md-table-cell">Delete</td>
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