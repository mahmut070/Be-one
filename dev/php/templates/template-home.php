<?php
/*
Template Name: Home template
*/
?>

<?php get_header(); ?>
<div class="Home">
	<div class="u-gridContainer">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="Home-content">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					
				</div>
			</article>
				<?php endwhile; endif; ?>
	</div>
  <a href="/contact" class="Home-link">Aanmelden</a>
</div>

<div class="Usp-wrap">
	<div class="u-gridContainer">
		<p class="Usp-text">Autorijschool Be-One voldoet aan deze eisen:</p>
		<div class="u-gridColumn6">
			<ul class="Usp">
				<li class="icon-check">Betaling in termijnen mogelijk</li>
				<li class="icon-check">Nu Rijles vanaf 16,5 jaar</li>
				<li class="icon-check">Vaste rij-instructeur</li>
				<li class="icon-check">Flexibele lestijden ook in de avonden en weekend -voordelige rijlessen</li>
			</ul>
		</div>
		
		<div class="u-gridColumn6">
			<ul class="Usp">
				<li class="icon-check">Spoed opleidingen op maat -ervaring in het begeleiden van Faalangstig leerlingen</li>
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
				<div class="Usp-big-icon">
					<img src="/files/2014/06/eyewhitebig.png"></img>
				</div>
				<div class="Usp-small-icon">
					<img src="/files/2014/06/eyewhite.png"></img> 
				</div>
				<h4 class="Usp-title">Persoonlijke instructeur</h3>
				<p>Kies een pakket en je krijgt bij Be-One een persoonlijke instructeur tijdens de opleiding</p>
				<a href="/contact"><p class="Usp-link">Meer info</p></a>
		</div> 

		<div class="Usp-block">
			<div class="Usp-big-icon">
					<img src="/files/2014/06/keywhitebig.png"></img>
			</div>
			<div class="Usp-small-icon">
				<img src="/files/2014/06/keywhite.png"></img>

			</div>
			<h4 class="Usp-title">Rijexamen</h3>
			<a href="/praktijkexamen"><p>Bij Be-One vragen wij pas het rijexamen aan wanneer we er zeker van zijn dat de leerling 
				alles beheerst. Hierdoor is de kans hoog dat het rijbewijs in een keer wordt behaald </p>
				<p class="Usp-link"> Meer info</p></a>
		</div>

		<div class="Usp-block">
			<div class="Usp-big-icon">
					<img src="/files/2014/06/cardwhitebig.png"></img>
			</div>
			<div class="Usp-small-icon">
				<img src="/files/2014/06/cardwhite.png"></img>
			</div>

			<h4 class="Usp-title">Passend pakket</h3>
			<p>Bij Be-One kijken wij naar alles tijdens de introductieles. Elke leerling krijgt een 
				passend pakket aangemeten, waardoor het rijbewijs het snelste behaald wordt</p>
				<a href="/tarieven"><p class="Usp-link"> Meer info</p></a>
		</div>
		<div class="Facebook">
			<div class="u-gridContainer">
				<div class="fb-like-box" data-href="https://www.facebook.com/AutorijschoolBeOne" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
			</div>
		</div>
</div>


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


