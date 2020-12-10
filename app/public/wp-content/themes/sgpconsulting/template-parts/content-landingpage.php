<?php
/*
@package: wwd blankslate
*/

$header_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0];
?>

<section <?php post_class( array('wwd-content-page', 'landing-page') ); ?>>
	
	<article id="page-<?php the_ID(); ?>" 
		<?php post_class(array($post->post_name)); ?>>

		<div class="entry-header">
			<img src="<?php echo $header_image; ?>" alt="">
		</div>	

		<div class="entry-body">
			<?php the_content(); ?>
		</div>

		<div class="entry-footer"></div>

	</article>

</section>