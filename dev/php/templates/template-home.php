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

<div class="Usp-wrap">
	<div class="u-gridContainer">
		<p class="Usp--text">Autorijschool Be-One voldoet aan deze eisen:</p>
		<div class="u-gridColumn6">
			<ul class="Usp">
				<li class="icon-check">Voordelige rijlessen</li>
				<li class="icon-check">Iedere leerling is uniek en krijgt <br>een aanpak die voor hem / haar werkt </li>
				<li class="icon-check">Uitdagende lessen</li>
				<li class="icon-check">Kwaliteit en service op maat</li>
			</ul>
		</div>
		
		<div class="u-gridColumn6">
			<ul class="Usp">
				<li class="icon-check">Unieke en zeer effectieve benadering in faalangst</li>
				<li class="icon-check">Rijlessen ook 'savonds en in het weekend</li>
				<li class="icon-check">Vaste rij- instructeur</li>
				<li class="icon-check">Betaling in termijnen mogelijk</li>
			</ul>
		<div>
	</div>
</div>
</div>

<div class="Usp-under">
	<div class="u-gridContainer">
	
		<div class="Usp-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-user"></use>
			</svg>
			<h3 class="Usp-title">Persoonlijke instructeur</h3>
			<p>Kies een pakket en je krijgt bij Be-One een persoonlijke instructeur tijdens de opleiding</p>
		</div>

		<div class="Usp-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-key"></use>
			</svg>
			<h3 class="Usp-title">Rijexamen</h3>
			<p>Bij Be-One vragen wij pas het rijexamen aan wanneer we er zeker van zijn dat de leerling alles beheerst. Hierdoor is de kans hoog dat het rijbewijs in een keer wordt behaald </p>
		</div>

		<div class="Usp-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-users"></use>
			</svg>
			<h3 class="Usp-title">Passend pakket</h3>
			<p>Bij Be-One kijken wij naar alles tijdens de introductieles. Elke leerling krijgt een passend pakket aangemeten, waardoor het rijbewijs het snelste behaald wordt</p>
		</div>
	</div>
</div>
<div class="Facebook">
	<div class="u-gridContainer">
<div class="fb-like-box" data-href="https://www.facebook.com/AutorijschoolBeOne" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div></div>

<!-- <div class="Customers">
	<div class="u-gridContainer">
	
		<div class="Customers-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-user"></use>
			</svg>
			<p>Persoonlijke instructeur</p>
			<p>Kies een pakket en je krijgt bij Be-One een persoonlijke instructeur tijdens de opleiding</p>
		</div>

		<div class="Customers-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-user"></use>
			</svg>
			<p>Rijexamen</p>
			<p>Bij Be-One vragen wij pas het rijexamen aan wanneer we er zeker van zijn dat de leerling alles beheerst. Hierdoor is de kans hoog dat het rijbewijs in een keer wordt behaald </p>
		</div>

		<div class="Customers-block">
			<svg class="Icon Icon--usp" viewBox="0 0 128 128">
			<use xlink:href="#icon-user"></use>
			</svg>
			<p>Passend pakket</p>
			<p>Bij Be-One kijken wij naar alles tijdens de introductieles. Elke leerling krijgt een passend pakket aangemeten, waardoor het rijbewijs het snelste behaald wordt</p>
		</div>
	</div>
</div> -->

<?php get_footer(); ?>


