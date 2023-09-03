<?php require "../includes/header.php"?>
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/offers_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/my.css">




<?php 
$carId= $_GET['id'];

$query = "SELECT * FROM blog WHERE `id`= :id";
$stmt= $conn ->prepare($query);
$stmt -> bindParam(":id", $carId, PDO::PARAM_INT);
$stmt->execute();

$trip = $stmt->fetch(PDO::FETCH_ASSOC);

if($trip){
?>

<div class="home">
		<div class="home_background page-banner-detail parallax-window" data-parallax="scroll"></div>
		<div class="home_content">
			<div class="home_title">Trips</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->
        <?php require "../includes/sidebar.php"?>
		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				

				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

                    <div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="intro_image "><img  class="m-height-600" src="<?php echo DBIMAGE; ?>/<?php echo $trip['image']; ?>" alt=""></div>
				</div>
				<div class="col-lg-12">
					<div class="intro_content">
						<div class="intro_titlec">  <?php echo $trip['title']; ?></div>
						<p class="intro_text">  <?php echo $trip['description']; ?></p>
					</div>
				</div>
			</div>
		</div>

        




                    

					</div>

                   
				</div>

			</div>
		</div>		
	</div>

<?php  }
else {
    echo "no result";
    exit();

}
?>
    <?php require "../includes/footer.php"?>
<script src="<?php echo APPURL;?>/assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo APPURL;?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo APPURL;?>/assets/js/offers_custom.js"></script>
<script src="<?php echo APPURL;?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo APPURL;?>/assets/js/about_custom.js"></script>
<script src="<?php echo APPURL;?>/assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo APPURL;?>/assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo APPURL;?>/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>

