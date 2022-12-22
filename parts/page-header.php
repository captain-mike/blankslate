      <!-- PAGE HERO
			============================================= -->	
			<?php
             $sfondo = get_field('immagine_header') ? get_field('immagine_header')['sizes']['2048x2048'] : '';
			?>
			<div style="background-image:url(<?=$sfondo?>)" class="page-hero-section division">
			<div class="overlay"></div>
			<div class="overlay"></div>
				<div class="container">	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1">
							<div class="hero-txt text-center white-color">

								<!-- Breadcrumb -->
								<div id="breadcrumb">
									<div class="row">						
										<div class="col">
											<div class="breadcrumb-nav">
												<nav aria-label="breadcrumb">
												  	<ol class="breadcrumb">
												    	<li class="breadcrumb-item"><a href="/">Home</a></li>
												    	<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
												  	</ol>
												</nav>
											</div>
										</div>
									</div> 
								</div>

								<!-- Title -->
								<h2 class="h2-xl"><?php the_title(); ?></h2>

							</div>
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- End container --> 
			</div>	<!-- END PAGE HERO -->	

            