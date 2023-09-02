<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="assets/styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/styles/my.css">
<!-- Home -->

<div class="home">
		<div class="home_background parallax-window page-banner-register" data-parallax="scroll"></div>
		<div class="home_content">
			<div class="home_title">about us</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="intro_image"><img src="assets/images/intro.png" alt=""></div>
				</div>
				<div class="col-lg-5">
                <?php 
							try{
								$query2= "SELECT * FROM about";
								$result2 = $conn->query($query2);
								while($row = $result2->fetch(PDO::FETCH_ASSOC)){
							?>
					<div class="intro_content">
						<div class="intro_title"><?php echo $row['title'];  ?></div>
						<p class="intro_text"><?php echo $row['description'];  ?></p>
                    
                    </div>
                        <?php 
							} }
							catch(PDOException $e){
								echo "Error :" .$e->getMessage();
							}
							?>
                    
                    
                    </div>
				</div>
			</div>
		</div>
	</div>



<?php require "includes/footer.php"?>
<script src="assets/js/about_custom.js"></script>
