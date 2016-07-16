<!DOCTYPE html>
<html lang="en">

    <?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
                            <br><br>
				<h2>Cercle de Reflexion des Ingenieurs Centrafricains (CRI)</h2>
                                <p class="lead" style="color: green"><i>... Et si nous parlions desormain avec le coeur, la tete et les bras... Au lieu de la bouche ?</i></p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>
					<div class="carousel-inner">
					   <div class="item">
							<img src="images/selected/_1.jpg" class="img-responsive" alt=""> 
					   </div> 
                                           <div class="item">
                                                  <img src="images/selected/1.jpg" class="img-responsive" alt="">
					   </div>
					   <div class="item">
							<img src="images/selected/_3.jpg" class="img-responsive" alt=""> 
					   </div>
                                           <div class="item active">
							<img src="images/selected/_4.jpg" class="img-responsive" alt=""> 
					   </div>
                                           <div class="item">
							<img src="images/selected/_5.jpg" class="img-responsive" alt=""> 
					   </div>
					</div>
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Ce dont nous somme capables</h2>
					<p class="lead">Compose de plus de 14 equipes dans differents domaines d'ingenierie,  <br>a l'appel du gouvernement ou d'une ONG, nous pouvons:</p>
				</div>
				
				<div class="row">
		
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="joomla-skill">                                   
								<p><em>100%</em></p>
								<p>Etudier</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="html-skill">                                  
								<p><em>90%</em></p>
								<p>Planifier</p>
							</div>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
							<div class="css-skill">                                    
								<p><em>75%</em></p>
								<p>Concevoir</p>
							</div>
						</div>
					</div>
					
					 <div class="col-sm-3">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Integrer</p>                                     
							</div>
						</div>
					</div>
					
				</div>
	
            </div><!--/.our-skill-->
            
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				
					
    </section><!--/about-us-->
	
    

    <?php include 'footer.php'; ?>
    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>