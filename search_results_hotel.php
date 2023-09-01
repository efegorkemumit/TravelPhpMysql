<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="assets/styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/offers_responsive.css">

<?php require "config/config.php"?>
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="assets/images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">our offers</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->
        <?php require "includes/sidebar.php"?>
		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				<div class="col-lg-11">
					
					<!-- Offers Sorting -->
					<div class="offers_sorting_container">
						<ul class="offers_sorting">
							<li>
								<span class="sorting_text">price</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>show all</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>ascending</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">location</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>default</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>alphabetical</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">stars</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="filter_btn" data-filter="*"><span>show all</span></li>
									<li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>ascending</span></li>
									<li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
									<li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
									<li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
								</ul>
							</li>
							<li class="distance_item">
								<span class="sorting_text">distance from center</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="num_sorting_btn"><span>distance</span></li>
									<li class="num_sorting_btn"><span>distance</span></li>
									<li class="num_sorting_btn"><span>distance</span></li>
								</ul>
							</li>
							<li>
								<span class="sorting_text">reviews</span>
								<i class="fa fa-chevron-down"></i>
								<ul>
									<li class="num_sorting_btn"><span>review</span></li>
									<li class="num_sorting_btn"><span>review</span></li>
									<li class="num_sorting_btn"><span>review</span></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">


					<?php 
					if (isset($_GET['destination']) && isset($_GET['check_in']) &&  isset($_GET['check_out']) && 
					isset($_GET['adults']) && isset($_GET['children'])  ){
					$destination = $_GET['destination'];
					$checkIn = $_GET['check_in'];
					$checkOut = $_GET['check_out'];
					$adults = $_GET['adults'];
					$children = $_GET['children'];

					$optionalParams= [
						'pet'=>'pet',
						'carPark'=>'carPark',
						'wireless'=>'wireless',
						'reservation'=>'reservation',
						'private'=>'private',
						'smoking'=>'smoking'


					];

					$conditions = [];
					foreach ($optionalParams as $param => $column) {
						if (isset($_GET[$param])) {
							$conditions[] = "$column = :$param";
						}
					}


					
					try{
						$query= "SELECT * FROM hotels WHERE destination=:destination AND 
						(DATE(checking) <= :checkIn AND DATE(checkout) >=:checkOut) AND
						adults= :adults AND children = :children";
						if (!empty($conditions)) {
							$query .= " AND " . implode(" AND ", $conditions);
						}



						$stmt = $conn->prepare($query);
						$stmt->bindParam(':destination', $destination);
						$stmt->bindParam(':checkIn', $checkIn);
						$stmt->bindParam(':checkOut', $checkOut);
						$stmt->bindParam(':adults', $adults);
						$stmt->bindParam(':children', $children);


						foreach ($optionalParams as $param => $column) {
							if (isset($_GET[$param])) {
								$stmt->bindValue(":$param", 1, PDO::PARAM_INT);
							}
						}





						$stmt->execute();

						if($stmt->rowCount()===0){
					 ?>

					<div class="offers_item rating_4">
							<div class="row">
								
								<div class="col-lg-12">
								<div class="alert alert-warning" role="alert">
  No results
</div>
								
							   </div>
								
							</div>
						</div>


					<?php
						} else {

						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
							
						?>
							
						<div class="offers_item rating_<?php echo $row['score']; ?>">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@thoughtcatalog -->
										<div class="offers_image_background" style="background-image:url(<?php echo DBIMAGE;?>/<?php echo $row['image']; ?> )"></div>
										<div class="offer_name"><a href="<?php echo APPURL;?>/detail/hotel.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">$<?php echo $row['price']; ?><span>per night</span></div>
										<div class="rating_r rating_r_<?php echo $row['score']; ?> offers_rating" data-rating="<?php echo $row['score']; ?>">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text"><?php echo $row['description']; ?></p>
										
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
										<div class="offer_reviews">
										
											<div class="offer_reviews_rating text-center"><?php echo $row['user_rating']; ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php 
						}}
				} catch(PDOException $e){
					echo "Error : ".$e->getMessage();
				}
			}
				?>



						<!-- Offers Item -->

					</div>
				</div>

			</div>
		</div>		
	</div>

    <?php require "includes/footer.php"?>
<script src="assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="assets/js/offers_custom.js"></script>