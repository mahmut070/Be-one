<?php
/*
Template Name: Landingspagina template
*/
?>
<?php get_header(); ?>
<div class="u-gridRow Content-wrap">
	<div class="u-gridContainer">
		<div class="u-gridColumn9">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content-article" id="post-<?php the_ID(); ?>">
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		
	</div>

	<?php endwhile; endif; ?>

	
</div>
<div class="Usp-wrap gridColumn4">
		<div class="u-gridContainer">
 		 <a href="/contact" class="Home-link2">Aanmelden</a>
			<p class="Usp-text">Autorijschool Be-One voldoet aan deze eisen:</p>
				<ul class="Usp2">
					<li class="icon-check">Voordelige rijlessen</li>
					<li class="icon-check">Iedere leerling is uniek en krijgt <br>een aanpak die voor hem / haar werkt </li>
					<li class="icon-check">Uitdagende lessen</li>
					<li class="icon-check">Kwaliteit en service op maat</li>
				<li class="icon-check">Unieke en zeer effectieve benadering in faalangst</li>
				<li class="icon-check">Rijlessen ook 'savonds en in het weekend</li>
				<li class="icon-check">Vaste rij- instructeur</li>
				<li class="icon-check">Betaling in termijnen mogelijk</li>
			</ul>
			</div>
		
		
			
	</div>


<?php get_footer(); ?>
