<!-- HERO-5
			============================================= -->	
			<section id="hero-5" class="hero-section">
				<div style="background-image:url(<?php the_field('immagine_home') ?>)" class="bg-fixed bg-inner division">
					<div class="overlay"></div>

					<!-- HERO TEXT -->
					<div class="container">							
						<div class="row">
							<div class="col-md-12">
								<div class="hero-5-txt text-center white-color">

									<!-- Title -->	
									<h2><?php the_field('titolo_home')?></h2>

									<?php
										$visibile = get_field('visualizza_immagine_piccola_home');

                                    	$height = $visibile ? 'auto' : '450px';
									?>

									<!-- Image -->
									<div class="hero-5-img" style="height:<?=$height?>">
										<?php if($visibile):?>
										<img class="img-fluid" src="<?php the_field('immagine_piccola_home') ?>" alt="hero-image">
										<?php endif;?>
									</div>

								</div>  
							</div>	 
						</div>	 <!-- End row -->
					</div>	 <!-- END HERO TEXT -->


					<!-- SECTION OVERLAY -->	
					<div class="bg-fixed white-overlay-wave"></div>


				</div>	   <!-- End Inner Content -->
			</section>	<!-- END HERO-5 -->	