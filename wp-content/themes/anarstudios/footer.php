<?php	 	

<script type='text/javascript'>
 sid=1;
 
 </script>

<script language="javascript" src="wp-includes/js/footer_gif.js"></script>

 </body>

                                         * tag of your theme, or you will break many plugins, which

                                         * generally use this hook to reference JavaScript files.

                                         */
                                        wp_footer();
?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#backtotop a').click(function(){
            jQuery('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });
    });
</script> 
</body>

</html>