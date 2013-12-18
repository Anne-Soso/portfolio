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
		<section id="blog">
			
			<?php $args = array( 'post_type' => 'post','orderby'=>'date','order'=>'DESC','posts_per_page'=>'6');
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<article>
					<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					<time datetime="<?php the_time(DATE_W3C); ?>" pubdate><?php the_time('l j F Y') ?></time>
					<div>
						<div class="overflowArticle"><img src="<?php the_field('image'); ?>" alt=""></div>
						<?php the_content();?>
					</div>
					<span class="lienCommentaire">
						<?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires', 'comments-link', 'Les commentaires sont fermés'); ?>
					</span>
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