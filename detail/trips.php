<?php require "../includes/header.php"?>
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/offers_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/my.css">


<?php require "../config/config.php"?>


<?php 
$tripId= $_GET['id'];

$query = "SELECT * FROM trips WHERE `id`= :tripId";
$stmt= $conn ->prepare($query);
$stmt -> bindParam(":tripId", $tripId, PDO::PARAM_INT);
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

                    <div class="blog_post">
							<div class="blog_post_image">
								<img src="assets/images/blog_1.jpg" alt="https://unsplash.com/@anniespratt">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">01</div>
									<div class="blog_post_month">Dec, 2017</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href="">by Lore Papp</a></li>
									<li class="blog_post_meta_item"><a href="">Uncategorized</a></li>
									<li class="blog_post_meta_item"><a href="">3 Comments</a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#">	<p><?php echo $row['title']; ?></p></a></div>
							<div class="blog_post_text">
								<p>Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum qua.</p>
							</div>
							<div class="blog_post_link"><a href="#">read more</a></div>
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

