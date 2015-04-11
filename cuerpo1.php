<div id="home" class="header">
	<div class="container">
		<div class="header-info">
			<div class="header-info-left">
				<div class="logo">
					<a href="#"><img src="images/logo.png" class="img-responsive" height="80px" width="180dp" alt=""/></a>
				</div>
			</div>
						
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
									
		</div>
	</div>
</div>



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
				<h3>Informacion Personal Jugador</h3>
				<br><br>
			</div>

			<div class="gallery-box">
								<div > <p> <a href="player/alexis.jpg" ><img src="player/alexis.jpg" alt=""></a> </p></div>     
								
						  </div>
						  
						  <div class="gallery-box">
								<p>Nombre Apellido:</p><p>Alexis Sanchez</p><p>Edad:</p><p>28 años</p><p>Equipo:</p><p>Arsenal</p><p>Pais:</p><p>Chile</p>
						  </div>
						  <div class="gallery-box">
								<p>Total Financiado</p><p><strong>$3.000.000</p></strong><p>Por Financiar</p><strong><p>$2.000.000</p></strong><p></p>
						  </div>
						  <div class="row skill-grids text-center">
									<div class="col-md-3">	
										<div class="skill-grid">
											<div class="circle" id="circles-1"> </div>
												<h5 class="web">Financiado</h5>
										 </div>								  
									</div>
									<br><br>
									<div class="clearfix"> </div>
					          </div>
					          <div class="gallery-box">
								
						  </div>
						  <div class="gallery-box">
								
						  </div>
						  <div class="gallery-box">
								
						  </div>

						  <div class="gallery-box">
								<p><strong>$1000</p></strong><h4>1 de 100</h4><p>5% Descuento en Adidas</p>
								<hr>
								<p><strong>$5000</p></strong><h4>1 de 70</h4><p>10% Descuento en Adidas</p>
								<hr>
								<p><strong>$10000</p></strong><h4>1 de 40</h4><p>15% Descuento en Adidas</p>
								<hr>
								<p><strong>$20000</p></strong><h4>1 de 20</h4><p>30% Descuento en Adidas + 15% Descuento en Equity de otro Jugador</p>
								<hr>
								<p><strong>Equity $125000</p></strong><h4>1 de 10</h4><p>10 Cupos Disponible</p>
						  </div>
		 
				
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
		
		<div class="skills-info">
			<div id="canvas">
							
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
			<a href="#"><img src="images2/logo.png" height="80px" width="180dp"></a>
		</div>
		<div class="copy-rights">
			<p>Diseñado por<a href="#"> Hackathon - Young Promise</a></p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>