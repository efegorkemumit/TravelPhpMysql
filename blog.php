<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="assets/styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/blog_responsive.css">

<link rel="stylesheet" type="text/css" href="assets/styles/my.css">

<!-- Home -->

<div class="home">
		<div class="home_background parallax-window page-blog" data-parallax="scroll" ></div>
		<div class="home_content">
			<div class="home_title">the blog</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

				<!-- Blog Content -->

				<div class="col-lg-12">
					
					<div class="blog_post_container">

						<!-- Blog Post -->

                        <?php 
                       $page = isset($_GET['page']) ? $_GET['page'] : 1;
                       $per_page = 5; 
                       
                       $starts = ($page - 1) * $per_page;
                       
                       $stmt = $conn->prepare("SELECT * FROM blog ORDER BY create_at DESC LIMIT :starts, :per_page");
                       $stmt->bindParam(':starts', $starts, PDO::PARAM_INT);
                       $stmt->bindParam(':per_page', $per_page, PDO::PARAM_INT);
                       $stmt->execute();
                       
                       while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        ?>
						
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="<?php echo DBIMAGE;?>/<?php echo $row['image']; ?>" alt="">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div class="blog_post_day">01</div>
									<div class="blog_post_month">Dec, 2017</div>
								</div>
							</div>
							<div class="blog_post_meta">
								<ul>
									<li class="blog_post_meta_item"><a href=""><?php echo $row['create_at']; ?></a></li>
								</ul>
							</div>
							<div class="blog_post_title"><a href="#"><?php echo $row['title']; ?></a></div>
							<div class="blog_post_text">
								<p>
                                <?php 
    $trim = strlen($row['description']) > 100 ? substr($row['description'], 0, 100) . '...' : $row['description'];
    echo $trim;
?> 
                                </p>
							</div>
							<div class="blog_post_link"><a href="<?php echo APPURL;?>/detail/blog-detail.php?id=<?php echo $row['id'] ?>">read more</a></div>
						</div>
                        <?php

                        }

                        ?>


					</div>
						
					<div class="blog_navigation">
						<ul>
                            <?php 
                                $stmt = $conn->prepare("SELECT COUNT(*) FROM blog ");
                                $stmt->execute();
                                $total_posts = $stmt->fetchColumn();
                                $total_pages = ceil($total_posts / $per_page);

                                for($i = 1; $i <= $total_pages; $i++){
                                    echo '<li class="blog_dot';
                                    if($i == $page){
                                        echo ' active pageactive';
                                    }
                                    echo '">
                                    <a class="page-num" href="blog.php?page='.$i.'">0'.$i.'</a></li> ';
                                    
                                }
                            
                            
                            ?>

						

						</ul>
					</div>
				</div>

				<!-- Blog Sidebar -->

			
			</div>
		</div>
	</div>

	<!-- Footer -->


<?php require "includes/footer.php"?>
<script src="assets/js/blog_custom.js"></script>
