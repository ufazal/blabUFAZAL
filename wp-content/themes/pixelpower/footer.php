<?php 
/*
* The template for displaying the footer.
*/
?>
	</section><!--//main-->		

	<footer id="footer" class="container" role="contentinfo">	
		<div class="sixteen columns">
        <div style="padding:10px 30px; background-color:white; margin:10px 0; font-size:12px; width:640px;">
       
        </div>
			<?php if ( is_active_sidebar( 'footer-bottom' ) ) { ?>
					<?php dynamic_sidebar( 'footer-bottom' ); ?>
			<?php } ?>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
</body>
</html>