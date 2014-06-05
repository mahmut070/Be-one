<?php
/*
Template Name: Contact template 
*/
?>
<?php get_header(); ?>
	<div class="Content-yellow">
		<div class="u-gridContainer">
				<div class="Contactbar">
			<aside class="u-gridColumn4">

					<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
					<div id="map_canvas"></div>
					<div class="Contactbar-form">
					<?php echo do_shortcode('[gravityform id="2" name="Contact" title="false"]'); ?>
					</div>
				</div>
			</aside>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article class="Contact-text u-gridColumn4 " id="post-<?php the_ID(); ?>">
				
				<div>
					
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>


				</div>
			</article>

			<aside class="u-gridColumn4">

			<iframe class="Contact-map" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=De+Bockstraat+31+2525+SW+Den+Haag&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.621153,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=De+Bockstraat+31,+2525+SW+Den+Haag,+The+Netherlands&amp;ll=52.064706,4.301833&amp;spn=0.083793,0.154324&amp;t=m&amp;z=13&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=De+Bockstraat+31+2525+SW+Den+Haag&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=54.621153,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=De+Bockstraat+31,+2525+SW+Den+Haag,+The+Netherlands&amp;ll=52.064706,4.301833&amp;spn=0.083793,0.154324&amp;t=m&amp;z=13" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			</aside>

		<?php endwhile; endif; ?>
	
			
		</div>
	</div>

<?php get_footer(); ?>