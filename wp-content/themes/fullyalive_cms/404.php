<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */

get_header(); ?>
<div id="content">
	<div id="main">
		<h1 class="pagetitle"><?php _e( 'Not Found', 'bluelinerfoundation' ); ?></h1>	
		<div id="post-0" class="error404 not-found">
			<div class="entry-content">
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'bluelinerfoundation' ); ?></p>
				<?php get_search_form(); ?>
			</div><!-- entry-content -->
		</div><!-- #post -->
	  <div class="clear"></div><!-- clear float -->
	</div><!-- end #main -->
</div><!-- end #content -->
<script type="text/javascript">
	// focus on search field after it has loaded
	document.getElementById('s') && document.getElementById('s').focus();
</script>
<?php get_footer(); ?>