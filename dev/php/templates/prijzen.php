<?php
/*
Template Name: Prijzen template
*/
?>
<?php get_header(); ?>

	

 
	<div class="u-gridRow Content-wrap">
		<div class="u-gridContainer">
			<div class=".u-gridColumn10">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="Content-article" id="post-<?php the_ID(); ?>">
					<?php if(!is_front_page()) { ?>
					<h2><?php the_title(); ?></h2>
					<?php } ?>
					<div>
						<table class="Table">
								<tr>
									<td style="text-align: center;"><strong>Reguliere opleiding praktijk</strong></td>
									<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
								</tr>
								<tr>
									<td>Losse les van 60 min.</td>
									<td>€ 32.50</td>
								</tr>
								<tr>
									<td>Losse les van 60 min.</td>
									<td>€ 48.50</td>
								</tr>
								<tr>
									<td>Losse les 120 min.</td>
									<td>€ 60</td>
								</tr>
								<tr>
									<td>Kennismakingsles van 90 min.</td>
									<td>€ 40</td>
								</tr>
								<tr>
									<td>Praktijkexamen</td>
									<td>€ 200</td>
								</tr>
								<tr>
									<td>Eigen verklaring</td>
									<td>€ 25</td>
								</tr>
								<tr>
									<td>Tussentijdse toets</td>
									<td>€125</td>
								</tr>

						</table>

						<tr>
							<table class="Table">
								<tr>
									<td style="text-align: center;"><strong>Theorie</strong></td>
									<td style="text-align: center;" width="90"><strong>Prijs</strong></td>
								</tr>
								<tr>
									<td>Theorie leerboek</td>
									<td>€ 25</td>
								</tr>
								<tr>
									<td>Theorie oefen cd</td>
									<td>€ 15</td>
								</tr>
								<tr>
									<td>Theorie examen</td>
									<td>€ 40</td>
								</tr>
						</table>

		<!--PAKKET A////////////////////////////////////////////////////////////////////////////////////-->
	
		<div class="Price">
			<h4 class="Price-title">Pakket A</h4>
			<hr class="Price-line"></hr>
			<h5 class="Price-price">€ 1045</h5>
			<hr class="Price-line"></hr>
			<p class="Price-text">Met deze opleiding heb je 24 lessen a 60 minuten en is inclusief een tussentijdse toets en praktijkexamen. 
				De opleiding is geschikt voor de ervaren leerling</p>
			<ul>
				<li class="icon-price">24 lessen a 60 minuten</li>
				<li class="icon-price"> Tussentijdse toets<li>
				<li class="icon-price">Praktijkexamen</li>
			</ul>
			<a class="Button--price" href="/contact"><strong>Meld je nu aan!</strong></a>
		</div>

		<!--PAKKET B////////////////////////////////////////////////////////////////////////////////////-->

		<div class="Price">
			<h4 class="Price-title">Pakket B</h4>
			<hr class="Price-line"></hr>
			<h5 class="Price-title">€ 1225</h5>
			<hr class="Price-line"></hr>
			<p class="Price-text">Met deze opleiding heb je 30 lessen a 60 minuten en is inclusief een tussentijdse toets en 
				praktijkexamen. De opleiding is geschikt voor de gemiddelde leerling. </p>
			<ul>
				<li class="icon-price">30 lessen a 60 minuten</li>
				<li class="icon-price"> Tussentijdse toets<li>
				<li class="icon-price">Praktijkexamen</li>
			</ul>
			<a class="Button--price" href="/contact"><strong>Meld je nu aan!</strong></a>
		</div>

		<!--PAKKET C////////////////////////////////////////////////////////////////////////////////////-->

		<div class="Price2">
			<h4 class="Price-title2">Pakket C</h4>
			<hr class="Price-line"></hr>
			<h5 class="Price-title2">€ 1400</h5>
			<hr class="Price-line"></hr>
			<p class="Price-text">Met deze opleiding heb je 36 lessen a 60 minuten en is inclusief een tussentijdse toets en 
				praktijkexamen. De opleiding is geschikt voor de beginnende leerling.</p>
			<ul>
				<li class="icon-price">36 lessen a 60 minuten</li>
				<li class="icon-price"> Tussentijdse toets<li>
				<li class="icon-price">Praktijkexamen</li>
			</ul>
			<a class="Button--price2" href="/contact"><strong>Meld je nu aan!</strong></a>
		</div>

		<!--PAKKET D////////////////////////////////////////////////////////////////////////////////////-->

		<div class="Price">
			<h4 class="Price-title">Pakket D</h4>
			<hr class="Price-line"></hr>
			<h5 class="Price-price">€ 1580</h5>
			<hr class="Price-line"></hr>
			<p class="Price-text">Met deze opleiding heb je 42 lessen a 60 minuten en is inclusief een tussentijdse toets en 
				praktijkexamen. De opleiding is geschikt voor de startende leerling.</p>
			<ul>
				<li class="icon-price">42 lessen a 60 minuten</li>
				<li class="icon-price"> Tussentijdse toets<li>
				<li class="icon-price">Praktijkexamen</li>
			</ul>
			<a class="Button--price" href="/contact"><strong>Meld je nu aan!</strong></a>
		</div>
	</div>
</div>


						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
			</div>   

		</div>
	</div>

	




<?php get_footer(); ?>
