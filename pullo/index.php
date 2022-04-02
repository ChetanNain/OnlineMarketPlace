<?php 
require_once 'db.php';
$query1="SELECT * FROM product";
$products = $mysqli->query($query1);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pullo</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout" onload="preparePage()">
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo"><a href="#"><img src="images/logo.png"></a></div>
				</div>
				<div class="col-sm-8">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.php">Home</a>
                           <a class="nav-item nav-link" href="collection.php">Collection</a>
                           <a class="nav-item nav-link" href="shoes.php">Shoes</a>
                           <a class="nav-item nav-link" href="racing boots.php">Racing Boots</a>
						   <a class="nav-item nav-link" href="https://rs1215.me/MarketPlace/home.php">Market</a>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<!-- <p class="mens_taital">Men Shoes</p> -->
						<div class="page_no">1/4</div>
						<!-- <p class="mens_taital_2">Men Shoes</p> -->
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Reebok Pump</strong></h1><br>
							<!-- <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt" onclick="location.href='shoes.php'">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/try3.png.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<!-- <p class="mens_taital">Men Shoes</p> -->
						<div class="page_no">2/4</div>
						<!-- <p class="mens_taital_2">Men Shoes</p> -->
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Nike Air Jordan</strong></h1>
						
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt" onclick="location.href='shoes.php'">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/NikeairJordan.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<!-- <p class="mens_taital">Men Shoes</p> -->
						<div class="page_no">3/4</div>
						<!-- <p class="mens_taital_2">Men Shoes</p> -->
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Nike Air Max</strong></h1>
						
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt" onclick="location.href='shoes.php'">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/airmax.png"></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<!-- <p class="mens_taital">Men Shoes</p> -->
						<div class="page_no">4/4</div>
						<!-- <p class="mens_taital_2">Men Shoes</p> -->
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">New Running Shoes </h1>
							<h1 class="mens_text"><strong>Adidas Crazy 8</strong></h1>
						
							<button class="buy_bt">Buy Now</button>
							<button class="more_bt" onclick="location.href='shoes.php'">See More</button>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><img src="images/crazy8.png.png"></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>			
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
    	    <h1 class="new_text"><strong>New  Collection</strong></h1>
    	
    	    <div class="collection_section_2">
    	    	<div class="row">
    	    		<div class="col-md-6">
    	    			<div class="about-img">
    	    				<button class="new_bt">New</button>
    	    				<div class="shoes-img"><img src="images/jordon1.jpg"></div>
    	    				<p class="sport_text">Jordon Air</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">150</strong> </div>
    	    				<div class="star_icon">
    	    					<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
    	    			<button class="seemore_bt" onclick="location.href='shoes.php'">See More</button>
    	    		</div>
    	    		<div class="col-md-6">
    	    			<div class="about-img2">
    	    				<div class="shoes-img2"><img src="images/jordon2.jpg"></div>
    	    				<p class="sport_text">Jordon Air Max</p>
    	    				<div class="dolar_text">$<strong style="color: #f12a47;">170</strong> </div>
    	    				<div class="star_icon">
    	    					<ul>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    						<li><a href="#"><img src="images/star-icon.png"></a></li>
    	    					</ul>
    	    				</div>
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
    <div class="collection_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Racing Boots</strong></h1>
    	
    	</div>
    </div>
    <div class="collectipn_section_3 layuot_padding">
    	<div class="container">
    		<div class="racing_shoes">
    			<div class="row">
    				<div class="col-md-8">
    					<div class="shoes-img3"><img src="images/kob7.jpg"></div>
    				</div>
    				<div class="col-md-4">
    					<div class="sale_text"><strong>Sale <br><span style="color: #0a0506;">JOGING</span> <br>SHOES</strong></div>
    					<div class="number_text"><strong>$ <span style="color: #0a0506">170</span></strong></div>
    					<button class="seemore" onclick="location.href='shoes.php'">See More</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="collection_section layout_padding">
    	<div class="container">
    		<h1 class="new_text"><strong>New Arrivals Products</strong></h1>
    	
    	</div>
    </div>
	<!-- new collection section end -->
	<!-- New Arrivals section start -->
    <div class="layout_padding gallery_section">
    	<div class="container">
    		<div class="row">
			<?php while($product = $products->fetch_row()) {?>
				<div class="col-sm-4" onclick="handleCardClick(<?php echo $product[0]?>, '<?php echo $product[1] ?>', '<?php echo $product[4] ?>')">
    				<div class="best_shoes">
    					<p class="best_text"><?php echo $product[1]?> </p>
    					<div class="shoes_icon"><img class="shoe_image" src=<?php echo $product[4]?>></div>
    					<div class="star_text">
    						<div class="left_part">
    							<ul>
									<?php for($i = 0; $i < $product[3]; $i++) {?> 
										<li><a href="#"><img src="images/star-icon.png"></a></li>	
									<?php }?>
    	    					</ul>
    						</div>
    						<div class="right_part">
    							<div class="shoes_price">$ <span style="color: #ff4e5b;"><?php echo $product[2]?></span></div>
    						</div>
    					</div>
    				</div>
    			</div>

			<?php }?>
    		</div>
    		<!-- <div class="buy_now_bt">
    			<button class="buy_text">Buy Now</button>
    		</div> -->
    	</div>
    </div>
   	<!-- New Arrivals section end -->
   	<!-- contact section start -->
    <!-- <div class="layout_padding contact_section">
    	<div class="container">
    		<h1 class="new_text"><strong>Contact Now</strong></h1>
    	</div>
    	<div class="container-fluid ram">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="email_box">
                    <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Name" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Phone Numbar" name="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email" name="Email">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
                            </div>
                          </form>   
                       </div> 
                       <div class="send_btn">
                        <button class="main_bt">Send</button>
                       </div>                   
                    </div>
    		</div>
    			</div>
    			<div class="col-md-6">
    				<div class="shop_banner">
    					<div class="our_shop">
    						<button class="out_shop_bt">Our Shop</button>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> -->
   	<!-- contact section end -->
	<!-- section footer start -->
    <div class="section_footer">
    	<div class="container">
    		<div class="mail_section">
    			<div class="row">

					
    				<div class="col-sm-6 col-lg-2">
    					<div><a href="#"><img src="images/footer-logo.png"></a></div>
    				</div>
    				<div class="col-sm-6 col-lg-2">
    					<div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">
						<?php
                    		$contacts = file_get_contents('contacts.txt','r') or die('Error in opening contacts');
                    		$contact_lines = explode('\n',$contacts);
                    		foreach($contact_lines as $newline) {
                    			echo nl2br('<div style="Color:grey;text-align:center;">'.$newline.'</div>');
                			}
                    	?>
						</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="footer-logo"><img src="images/email-icon.png"><span class="map_text">chetan.nain@sjsu.edu</span></div>
    				</div>
    				<div class="col-sm-6 col-lg-3">
    					<div class="social_icon">
    						<ul>
    							<li><a href="#"><img src="images/fb-icon.png"></a></li>
    							<li><a href="#"><img src="images/twitter-icon.png"></a></li>
    							<li><a href="#"><img src="images/in-icon.png"></a></li>
    							<li><a href="#"><img src="images/google-icon.png"></a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-2"></div>
    			</div>
    	    </div> 
    	    <div class="footer_section_2">
		        <div class="row">
    		        <div class="col-sm-4 col-lg-2">
    		        	<!-- <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p> -->
    		        </div>
    		        <div class="col-sm-4 col-lg-2">
    		        	<h2 class="shop_text">Address </h2>
    		        	<div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">San Jose State University, San Jose, CA, USA</span></div>
    		        </div>
    		        <div class="col-sm-4 col-md-6 col-lg-3">
    				    <h2 class="shop_text">Our Company </h2>
    				    <div class="delivery_text">
    				    	<ul>
    				    		<li>Delivery</li>
    				    		<li>Legal Notice</li>
    				    		<li>About us</li>
    				    		<li>Secure payment</li>
    				    		<li>Contact us</li>
    				    	</ul>
    				    </div>
    		        </div>
    			<div class="col-sm-6 col-lg-3">
    				<h2 class="adderess_text">Products</h2>
    				<div class="delivery_text">
    				    	<ul>
    				    		<li>Prices drop</li>
    				    		<li>New products</li>
    				    		<li>Best sales</li>
    				    		<li>Contact us</li>
    				    		<li>Sitemap</li>
    				    	</ul>
    				    </div>
    			</div>
    			<div class="col-sm-6 col-lg-2">
    				<h2 class="adderess_text">Newsletter</h2>
    				<div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
    			</div>
    			</div>
    	        </div> 
	        </div>
    	</div>
    </div>
	<!-- section footer end -->
	<div class="copyright">2019 All Rights Reserved.</div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
	  <script src="js/common.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>