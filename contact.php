<?php require "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="assets/styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="assets/styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/styles/my.css">

<div class="home">
		<div class="home_background parallax-window page-banner-register" data-parallax="scroll" ></div>
		<div class="home_content">
			<div class="home_title">contact</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact_form_section mb-50">
		<div class="container">
			<div class="row">
				<div class="col">
                    <?php 

                    if($_SERVER["REQUEST_METHOD"]=="POST"){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $description = $_POST['description'];


                        $sqlcontact = "INSERT INTO contact (name, email, subject, description) 
                        VALUES (:name, :email, :subject, :description) ";
                        $stmt = $conn->prepare($sqlcontact);

                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':subject', $subject);
                        $stmt->bindParam(':description', $description);

                        $stmt->execute();


                        echo '<script>alert ("Successfull ") </script>';

                    }


                    ?>

					<!-- Contact Form -->
					<div class="contact_form_container">
						<div class="contact_title text-center">get in touch</div>
						<form method="POST" id="contact_form" class="contact_form text-center">
							<input type="text"  name="name" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text"  name="email"  id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text"  name="subject"   id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message"  name="description"  class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button name="submit"  type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>




<?php require "includes/footer.php"?>