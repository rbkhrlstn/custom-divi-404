<?php get_header(); ?>

<div id="main-content">
	<div class="container" style="width:100%;max-width:100%; margin-bottom:0;">
		<div id="content-area" class="clearfix">
				<article id="post-0" style="margin-bottom:0;" <?php post_class( 'et_pb_post not_found' ); ?>>
					<?php get_template_part( 'includes/no-results', '404' ); ?>
				</article> <!-- .et_pb_post -->

		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>
