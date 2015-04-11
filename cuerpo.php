<div id="home" class="header">
	<div class="container">
		<div class="header-info">
			<div class="header-info-left">
				<div class="logo">
					<a href="#"><img src="images/logo.png" class="img-responsive" height="80px" width="180dp" alt=""/></a>
				</div>
			</div>
						<div class="header-info-right">
							<div class="header cbp-spmenu-push">
								<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
									<h3>MENU</h3>
									<a class="scroll" href="#home">Home</a>		
									<a class="scroll" href="#Contact">Buscar</a>							
									<a class="scroll" href="#portfolio">Jugadores</a>					
								</nav>
																<!--script-nav -->	
			<script>
					$("span.menu").click(function(){
						$("ul.navigatoin").slideToggle("300" , function(){
						});
					});
					</script>
					<script type="text/javascript">
							jQuery(document).ready(function($) {
								$(".scroll").click(function(event){		
									event.preventDefault();
									$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
								});
							});
							</script>
						<div class="clearfix"> </div>
					<!-- /script-nav -->

									<div class="main">
										<section class="buttonset">
											<button id="showRightPush">MENU</button><br><br>
										</section>
										
									</div>
									<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
									<script src="js/classie.js"></script>
									<script>
										var	menuRight = document.getElementById( 'cbp-spmenu-s2' ),
											showRightPush = document.getElementById( 'showRightPush' ),
											body = document.body;
							
										showRightPush.onclick = function() {
											classie.toggle( this, 'active' );
											classie.toggle( body, 'cbp-spmenu-push-toleft' );
											classie.toggle( menuRight, 'cbp-spmenu-open' );
											disableOther( 'showRightPush' );
										};
							
									</script>
			
							</div>
	
						</div>
									<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-banner-->
<div class="header-banner">
	<div class="container">
		<div class="header-banner-info">
			<h1>CROWDFUNDING</h1>
			<p>AYUDANDO AL DEPORTE</p>
		</div>
		<a href="login.php" class="more">REGISTRO</a>
	</div>
</div>

<!--/header-banner-->
<!--content-start-here-->
<!--introducing-->
<div class="introducing">
	<div class="container">
		<div class="introducing-info">
			<h2>Young Promise</h2>
			<p>Helping the locals Sports</p>
				<h3>HELP THE SPORTS</h3>
		</div>
	</div>
</div>
<div id="Contact" class="contact-us">
	<div class="container">
		<div class="contact-us-info">
			<h3>BUSCAR</h3>
			<p><span></span> Buscar Jugadores</p>
				<div class="contact-us-info-bottom">
					<form>
							<input type="text" class="text" value="Nombre Jugador" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Mail';}">
							<input type="submit" value="Buscar">
						</form>
				</div>
		</div>
	</div>
</div>
<!--/introducing-->

<!-- slid -->
<!---->
<script src="js/jquery.min.js"> </script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
 <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<div class="portfolio">
	 <div id="portfolio" class="container">
			<div class="portfolio-heading">
				<h3>Nuestros Jugadores</h3>
			</div>
		 
				<ul class="rslides" id="slider2">
				  <li>
					 <div class="works main">						  
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a7.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span><span class="rollover2"> </span></a> </p></div>     
								<img src="images/a7.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a1.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span><span class="rollover2"> </span></a> </p></div>     
								<img src="images/a1.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a2.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
							    <img src="images/a2.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a3.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
								<img src="images/a3.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a4.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
								<img src="images/a4.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a5.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
								<img src="images/a5.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a6.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
								<img src="images/a6.jpg" alt="">
						  </div>
						  <div class="gallery-box">
								<div id="nivo-lightbox-demo"> <p> <a href="images/a7.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo">  <span class="rollover1"> </span></a> </p></div>     
								<img src="images/a7.jpg" alt="">
						  </div>
						 <div class="clearfix"></div>
					  </div>				
				  </li>
				 
				  </li>
				</ul>
				   <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
				<script type="text/javascript">
				$(document).ready(function(){
				    $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
				});
				</script>
		  </div>
	 </div>
</div>
<!---->

<!-- /slid -->
<!--portfolio-->


<!--/portfolio-->
<!--skills-->
<div class="skills">
	<div class="container">
		<div class="skills-heading">
			<h3>Jugadores Financiados</h3>
		</div>
		<div class="skills-info">
			<div id="canvas">
							<div class="row skill-grids text-center">
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-1"> </div>
												<h5 class="web">Juan Perez</h5>
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-2"> </div>
												<h5 class="web">John Smith</h5>
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-3"> </div>
												<h5 class="web">Jorge Ruiz</h5>
										 </div>								  
									</div>
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-4"> </div>
												<h5 class="web">Alexis Sanchez</h5>
										 </div>								  
									</div>
									<div class="clearfix"> </div>
					          </div>
									  <script type="text/javascript" src="js/circles.js"></script>
									 <script>
										var colors = [
												['#FFFFFF', '#202835'], ['#FFFFFF', '#202835'], ['#FFFFFF', '#202835'], ['#FFFFFF', '#202835']
											];
										for (var i = 1; i <= 6; i++) {
											var child = document.getElementById('circles-' + i),
												percentage = 50 + (i * 10);
												
											Circles.create({
												id:         child.id,
												percentage: percentage,
												radius:     70,
												width:      8,
												number:   	percentage / 1,
												text:       '%',
												colors:     colors[i - 1]
											});
										}
								
						</script>
					<!--/-->
				</div>	
		</div>
	</div>
</div>
<div class="skills-bottom">
	<div class="container">
		<div class="skills-bottom-info">
			<p>"The best way to find yourself is to lose yourself in the service of others."
Mahatma Gandhi</p>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<!--/skills-->
<!--/Content-End-Here-->
<!--contcct-us-->


<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-info">
			<a href="#"><img src="images/logo.png" height="80px" width="180dp"></a>
		</div>
		<div class="copy-rights">
			<p>Diseñado por<a href="http://w3layouts.com/"> Hackathon - Young Promise</a></p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--/footer-->