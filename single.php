<?php
get_header();
 ?>
	<div id="content">
	
		<div id="enTete">
			<a href="index.html" title="retour à l'accueil">
					<img src="http://imageshack.us/a/img266/8388/bd8y.png" id="parapluie" alt="">
			</a>
			<h1><?php wp_title(" "); ?>
				<span><?php the_field('sous-titre'); ?></span>
			</h1>
		</div>
		<section id="blog">
			
	
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="articleSingle">
					<time datetime="<?php the_time(DATE_W3C); ?>" pubdate><?php the_time('l j F Y') ?></time>
					<div>
						<div class="overflowArticle"><img src="<?php the_field('image'); ?>" alt=""></div>
						<?php the_content();?>
					</div>
					<div class="comments-template">
						<?php comments_template(); ?>
					</div>
				</article>

			<?php endwhile; ?>
		</section>
		<aside>
			<h2 class="titreSection">
				Travaux par mots clés
			</h2>
			<ul>
				<?php $args = array( 'post_type' => 'travail','orderby'=>'date','order'=>'DESC');
				$loop = new WP_Query( $args ); 
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php the_terms( $post->ID, 'outils', '<li>', '</li> <li>', '</li>' ) ?>
				<?php endwhile; ?>
			</ul>
		</aside>
	</div>
 <?php
get_footer();
 ?>