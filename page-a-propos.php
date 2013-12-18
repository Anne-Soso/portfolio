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
		<section id="descriptionMoi">
			<h2 class="titreSection">Petite introduction</h2>
			
			<img src="<?php the_field('photo'); ?>" alt="Photo d'Anne-Sophie Pirlet" id="photoMoi">
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
	 			 <?php the_content(); ?>

			<?php endwhile; endif; ?>
	 			

			

		</section>
	
		<section id="motsAbout">
			<h2 class="titreSection">Compétences</h2>
			<ul>
				<li style="font-size:1.3em;">HTML</li>
				<li style="font-size:1.5em;">CSS</li>
				<li style="font-size:0.7em;">JS</li>
				<li style="font-size:0.55em;">PHP</li>
				<li style="font-size:1em;">SPIP</li>
				<li style="font-size:1.2em;">Photoshop</li>
				<li style="font-size:0.8em;">Illustrator</li>

			</ul>
			
		</section>
		<section id="loisir">
			<h2 class="titreSection">Mon temps libre</h2>
			<?php the_field('temps_libre');?>
		</section>


		<section id="contact">
			<h2 class="titreSection">Contact</h2>

		
			<form action="post">
				<div>
					<label for="nom">Nom&nbsp;:</label>
					<input type="text" id="nom" required>
				</div>
				<div>
					<label for="email">Email&nbsp;:</label>
					<input id="email" type="email" required>
				</div>
				<div>
					<label for="sujetMessage">Sujet&nbsp;:</label>
					<input type="text" id="sujet" required>
				</div>
				<div>
					<label for="contenuMessage" >Contenu&nbsp;:</label>
					<textarea id="contenuMessage" required></textarea>
				</div>
				<input type="submit" value="Envoyer" id="soumission">
			</form>
		</section>
	</div>
 <?php
get_footer();
 ?>