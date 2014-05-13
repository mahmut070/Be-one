<?php
/*
Template Name: Home template
*/
?>

<?php get_header(); ?>
<div class="Home">
	<div class="u-gridContainer">
		<div class="u-gridColumn10">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<!-- <h4><?php the_title(); ?></h4> -->
				<div>
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					
				</div>
			</article>
				<?php endwhile; endif; ?>
		</div>
	</div>
  <a href="#" class="Home-link">Aanmelden</a>
</div>

<div class="Usp">
	<div class="u-gridContainer">
		<p class="Usp--text">Autorijschool Be-One voldoet aan deze eisen:</p>
		<div class="u-gridColumn6">
			<ul>
				<li>Voordelige rijlessen</li>
				<li>Iedere leerling is uniek en krijgt een aanpak die voor hem / haar werkt </li>
				<li>Uitdagende lessen</li>
				<li>Kwaliteit en service op maat</li>
			</ul>
		</div>
		
		<div class="u-gridColumn6">
			<ul>
				<li>Unieke en zeer effectieve benadering in faalangst</li>
				<li>Rijlessen ook 'savonds en in het weekend</li>
				<li>Vaste rij- instructeur</li>
				<li>Betaling in termijnen mogelijk</li>
			</ul>
		<div>
	</div>
</div>
</div>


<?php get_footer(); ?>