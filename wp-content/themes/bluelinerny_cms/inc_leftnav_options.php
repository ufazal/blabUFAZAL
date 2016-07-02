<?php  ?><?php if(is_page(35) || is_page(41) || is_page(57) ||is_page(60) ||is_page(63) ||is_page(68) ||is_page(71) ||is_page(74) || is_child_of(35) || is_child_of(41) || is_child_of(57) ||is_child_of(60) ||is_child_of(63) ||is_child_of(68) ||is_child_of(71) ||is_child_of(74))
{
// over
echo 'class="over"';
}
?>


<?php if(is_page(80) || is_page(83) || is_page(87) || is_child_of(80) || is_child_of(83) || is_child_of(87))
{
// over
echo 'class="over"';
}
?>
<?php if(is_page(91) || is_page(94) || is_page(97) || is_page(101) || is_child_of(91) || is_child_of(94) || is_child_of(97) || is_child_of(101))
{
// over
echo 'class="over"';
}
?>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>

<?php endif; ?>
