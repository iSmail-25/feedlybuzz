<?php include "includes/header.php"?>
	<div class="wrap">
		<div class="container">
			<div class="row justify-content-between">
					<div class="col d-flex align-items-center">
						<p class="mb-0 phone"> <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
					</div>
					<div class="col d-flex justify-content-end">
						<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						</p>
				</div>
					</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.html">Feedly<span>Buzz<i class="#"></i></span></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="fa fa-bars"></span> Menu
		  </button>
		  <div class="collapse navbar-collapse" id="ftco-nav">
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
			<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
			<li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
			<li><a href="Signup.php"><i class="nav-link fa fa-user "></i> Sign in</a>
			</li>   
		  </ul>
		  </div>
		</div>
	</nav>
	  <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>
		
    
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Get in touch</h3>
										<div id="form-message-warning" class="mb-4"></div> 
					      		<div id="form-message-success" class="mb-4">
					            Your message was sent, thank you!
					      		</div>
										<form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name">
													</div>
												</div>
												<div class="col-md-6"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-md-5 p-4">
										<h3>Let's get in touch</h3>
										<p class="mb-4">We're open for any suggestion or just to have a chat</p>
					        	
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a href="#">yoursite.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-12">
    				<div id="map" class="map"></div> -->
    			</div>
				</div>
    	</div>
    </section>
	<?php include "includes/footer.php"?>