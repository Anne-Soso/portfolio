<?php
get_header();
 ?>
	<div id="content">
	
		<div id="enTete">
			<a href="index.html" title="retour à l'accueil">
					<img src="http://imageshack.us/a/img32/2509/bis1.png" id="parapluie" alt="">
			</a>
			<h1><?php wp_title(" "); ?>
				<span><?php the_field('sous-titre'); ?></span>
			</h1>
		</div>
		<section id="galerie">
			<?php $args = array( 'post_type' => 'travail','orderby'=>'date','order'=>'DESC');
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<a href="<?php the_permalink();?>">
					<div class="galerie bigVignette">
						<img src="<?php the_field('image_principale');?>" alt="">
						<div class="legende"><h3><?php the_title();?></h3>
							<p><?php the_field('description_courte');?></p>
						</div>
					</div>
				</a>
			
			<?php endwhile; ?>
	</section>
	</div>
 <?php
get_footer();
 ?>