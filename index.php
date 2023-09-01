<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="<?php echo APPURL;?>/assets/styles/main_styles.css">
<?php require "config/config.php"?>


<?php
$sql= "SELECT * FROM slider";
$result= $conn->query($sql);


?>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">


<?php 
if($result->rowCount()>0){
	while($row = $result->fetch(PDO::FETCH_ASSOC)){
		$image = $row['image'];
		$title_1 = $row['title_1'];
		$title_2 = $row['title_2'];
		$button_url = $row['button_url'];
		$button_text = $row['button_text'];
		?>

				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(<?php echo DBIMAGE;?>/<?php echo $image;?>)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1><?php echo $title_1;?></h1>
							<h1><?php echo $title_2;?></h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="<?php echo $button_url;?>"><?php echo $button_text;?><span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<?php 
					for($i=1; $i<=$result->rowCount(); $i++){
					 $dotClass = ($i ===1) ?  'active' :'';
					?>
					
				
				<li class="home_slider_custom_dot <?php echo $dotClass;?>"><div></div><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.</li>
				<?php
					}
					?>

				</ul>
			</div>
			
		</div>

	</div>

	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/bus.png" alt="">car rentals</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/island.png" alt="">trips</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="assets/images/diving.png" alt="">activities</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="search_results_hotel.php" method="GET" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>hotels destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="search_results_car.php" method="GET" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>car destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="search_results_flight.php" method="GET" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>flight destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="search_resulst_tour.php" method="GET" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>trips destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="search_results_cruise.php" method="GET" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>cruise destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="search_results_activate.php" method="GET" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>act destination</div>
								<input type="text" name="destination" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="date" name="check_in" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="date"  name="check_out" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
							<button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<?php 

				try{
					$query3 = "SELECT * FROM trips";
					$result3 = $conn-> query($query3);
					while($row = $result3->fetch(PDO::FETCH_ASSOC)){
				?>


			

				<div class="col-lg-4 intro_col mb-50">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(<?php echo DBIMAGE;?>/<?php echo $row['image']; ?> )"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
						<div class="intro_date">
    <?php
    echo date("F jS", strtotime($row['checking']));
    echo " - ";
    echo date("F jS", strtotime($row['checkout']));
    ?>
</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="<?php echo APPURL;?>/detail/trips.php?id=<?php echo $row['id'] ?>">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1><?php echo $row['title']; ?> </h1>
								<div class="intro_price">From $<?php echo $row['price']; ?> </div>
								<div class="rating rating_<?php echo $row['score']; ?> ">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
					}
				} catch(PDOException $e){
					echo "Error : ".$e->getMessage();
				}
				
				?>

			</div>
		</div>
	</div>

<!-- CTA -->

<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(assets/images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">
							<?php 
							try{
								$query2= "SELECT * FROM cta_content";
								$result2 = $conn->query($query2);
								while($row = $result2->fetch(PDO::FETCH_ASSOC)){
							?>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"><?php echo $row['title']; ?></div>
								<div class="rating_r rating_r_<?php echo $row['scor']; ?>">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text"><?php echo $row['cta_text']; ?></p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="<?php echo $row['cta_button_link']; ?>"><?php echo $row['cta_button_text']; ?><span></span><span></span><span></span></a></div>
							</div>

							<?php 
							} }
							catch(PDOException $e){
								echo "Error :" .$e->getMessage();
							}
							?>

							
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

	<!-- Offers -->


	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">the best offers with cruise</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->

				<?php 
							try{
								$query5= "SELECT * FROM cruise ORDER BY score DESC LIMIT 4;";
								$result5 = $conn->query($query5);
								while($row = $result5->fetch(PDO::FETCH_ASSOC)){
							?>


				
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
						
							
							
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo DBIMAGE; ?>/<?php echo $row['image']; ?>)"></div>
									<div class="offer_name"><a href="#"><?php echo $row['title']; ?></a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">$<?php echo $row['price']; ?><span>per night</span></div>
									<div class="rating_r rating_r_<?php echo $row['score']; ?> offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text"><?php 
    $trim = strlen($row['description']) > 100 ? substr($row['description'], 0, 100) . '...' : $row['description'];
    echo $trim;
?> </p>
									
									<div class="offers_link"><a href="<?php echo APPURL;?>/detail/cruise.php?id=<?php echo $row['id'] ?>">read more</a></div>
								</div>
							</div>
						</div>
					</div>
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

	
	<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">trending now</h2>
				</div>
			</div>
			<div class="row trending_container">


			<?php 
							try{
								$query6= "SELECT * FROM hotels ORDER BY score DESC LIMIT 8;";
								$result6 = $conn->query($query6);
								while($row = $result6->fetch(PDO::FETCH_ASSOC)){
							?>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="<?php echo DBIMAGE; ?>/<?php echo $row['image']; ?>" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="<?php echo APPURL;?>/detail/hotel.php?id=<?php echo $row['id'] ?>"><?php echo $row['title']; ?></a></div>
							<div class="trending_price">From $<?php echo $row['price']; ?></div>
							<div class="trending_location"><?php echo $row['destination']; ?></div>
						</div>
					</div>
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

	<div class="contact">
		<div class="contact_background" style="background-image:url(assets/images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require "includes/footer.php"?>