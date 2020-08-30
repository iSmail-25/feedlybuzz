<?php include "includes/header.php"?>
<?php include "includes/menu.php"?>



    <div class="hero-wrap js-fullheight">
	    <div class="home-slider owl-carousel js-fullheight">
	      <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
		          <div class="col-md-7 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Welcome to Health Coach</h2>
			            <h1 class="mb-4">Get in shape faster, live your happy life</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center">
		          <div class="col-md-7 ftco-animate">
		          	<div class="text w-100">
		          		<h2>A Fresh approach to healthy life</h2>
			            <h1 class="mb-4 color-white">Unlock your potential with good nutrition</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight" style="background-image:url(images/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-end">
		          <div class="col-md-6 ftco-animate">
		          	<div class="text w-100">
		          		<h2>Welcome Health Coach</h2>
			            <h1 class="mb-4">You can transform health through habit change</h1>
			            <p><a href="#" class="btn btn-primary">Learn more</a> <a href="#" class="btn btn-white">Contact us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
		
    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
        <?php
        include("classes/classblog.php");
          $blog = new blog();

          $data = $blog->showCat();
          for ($i=0; $i < count($data) ; $i++) {
              $id_cat = $data[$i]["id_cat"];
              $name_cat = $data[$i]["name_cat"];
              $img_blog = $data[$i]["image_blog"];
              $description = $data[$i]["description"];
          ?>


          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(images/<?php echo"$img_blog" ?>);"></div>
              <div class="media-body p-2 mt-3">

                <h3 class="heading"><?php echo"$name_cat" ?></h3>
                <p><?php echo"$description" ?></h3></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
              </div>
            </div>      
          </div>

          
          <?php } ?>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(images/coach-1.jpg);">
					</div>
					<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
	          <div class="heading-section mb-5">
	          	<div class="pl-md-5">
		          	<span class="subheading mb-2">Welcome to Healthcare</span>
		            <h2 class="mb-2">Hello! Health Care is a natural way of improving your health</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<div class="founder d-flex align-items-center mt-5">
								<div class="img" style="background-image: url(images/coach-1.jpg);"></div>
								<div class="text pl-3">
									<h3 class="mb-0">Cythia Hunter</h3>
									<span class="position">Personal Dietitian</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Other Services</span>
            <h2>How it works?</h2>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Follow the program</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-workout"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Work for result</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diet-1"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Eat healthy food</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-first"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Enjoy your life</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-section ftco-no-pb bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading mb-3">Stories</span>
            <h2>Successfull Stories</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
          	<div class="carousel-stories owl-carousel">
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url(images/person-1.jpg);"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">Joy Smith</p>
														<span class="position">Client/Manager</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url(images/person-2.jpg);"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">Rony Smith</p>
														<span class="position">Client/Messenger</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row justify-content-center">
									<div class="col-md-11">
										<div class="stories-wrap d-md-flex">
											<div class="img" style="background-image: url(images/person-3.jpg);"></div>
											<div class="text p-4 py-xl-5 px-xl-5 d-flex align-items-center">
												<div class="desc w-100">
													<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<p class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
													<div class="pt-4">
														<p class="name mb-0">John Doe</p>
														<span class="position">Client</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
          </div>
        </div>
      </div>
    </section>
		
	

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Latest news from our blog</h2>
            <span class="subheading">News &amp; Blog</span>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<?php include "includes/footer.php"?>