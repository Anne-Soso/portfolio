<?php
get_header();
 ?>


	<div id="content">
	
		<div id="enTete" class="travail">
			<a href="index.html" title="retour à l'accueil">
					<img src="http://imageshack.us/a/img32/2509/bis1.png" id="parapluie" alt="">
			</a>
			<h1><?php the_title(); ?>
				<span>Le projet en détail </span>
			</h1>
		</div>
		<section id="descriptionProjet">
			<h2 class="titreSection">Description</h2>
			<div id="imagePrincipale">
				<img src="<?php the_field('image_principale');?>">
			</div>
			<div id="imageSecondaire">
				<img src="<?php the_field('image_secondaire');?>">
			</div>
	
			<?php the_field('description_du_travail'); ?>

		</section>
		<section id="motsCreation">
			<h2 class="titreSection">Outils utilisés</h2>
					
						<?php the_terms( $post->ID, 'outils', '<ul><li>', '</li> <li>', '</li></ul>' ) ?>
			
			
		</section>

	</div>
 <?php
get_footer();
 ?>