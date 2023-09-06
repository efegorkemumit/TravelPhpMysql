
	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

			<?php 
							try{
								$query14= "SELECT * FROM about";
								$result14 = $conn->query($query14);
								while($row = $result14->fetch(PDO::FETCH_ASSOC)){
							?>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="<?php echo APPURL; ?>/assets/images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">   <?php 
    $trim = strlen($row['description']) > 200 ? substr($row['description'], 0, 200) . '...' : $row['description'];
    echo $trim;
?></p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="<?php echo $row['pinterest']; ?>"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="<?php echo $row['facebook']; ?>"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="<?php echo $row['twitter']; ?>"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="<?php echo $row['pinterest']; ?>"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php 
							} }
							catch(PDOException $e){
								echo "Error :" .$e->getMessage();
							}
							?>



				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							<?php
						try{
								$query20= "SELECT * FROM blog ORDER BY  create_at DESC LIMIT 3";
								$result20 = $conn->query($query20);
								while($row = $result20->fetch(PDO::FETCH_ASSOC)){
							?>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="<?php echo DBIMAGE; ?>/<?php echo $row['image']; ?>" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html"><?php echo $row['title']; ?></a></div>
									<div class="footer_blog_date"><?php echo $row['create_at']; ?></div>
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

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">fashion</a></li>
								<li class="tag_item"><a href="#">music</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<?php 
							try{
								$query13= "SELECT * FROM about";
								$result13 = $conn->query($query13);
								while($row = $result13->fetch(PDO::FETCH_ASSOC)){
							?>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo APPURL; ?>/assets/images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text"><?php echo $row['adress']; ?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo APPURL; ?>/assets/images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text"><?php echo $row['phone']; ?></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo APPURL; ?>/assets/images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top"><?php echo $row['email']; ?></a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="<?php echo APPURL; ?>/assets/images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.travelmysql.com</a></div>
								</li>
							</ul>
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
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="<?php echo APPURL; ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo APPURL; ?>/assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo APPURL; ?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo APPURL; ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo APPURL; ?>/assets/plugins/easing/easing.js"></script>
<script src="<?php echo APPURL; ?>/assets/js/custom.js"></script>

</body>

</html>