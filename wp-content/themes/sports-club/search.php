<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Search Page Template
 * Created by CMSMasters
 * 
 */


get_header();


list($cmsmasters_layout) = cmsmasters_theme_page_layout_scheme();


echo '<!--_________________________ Start Content _________________________ -->' . "\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo '<div class="content entry" role="main">' . "\n\t";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo '<div class="content entry fr" role="main">' . "\n\t";
} else {
	echo '<div class="middle_content entry" role="main">' . "\n\t";
}


echo '<div class="cmsmasters_search">' . "\n";


if (!have_posts()) : 
	echo '<div class="cmsmasters_search_zero">' . 
		'<h4>' . esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sports-club') . '</h4>' . 
		'<br />';
		
		
		get_search_form();
		
	echo '</div>';
else : 
	$cmsmasters_posts_count = 1;
	
	$cmsmasters_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	
	if ($cmsmasters_page > 1) {
		$cmsmasters_posts_count = ((int) ($cmsmasters_page - 1) * (int) get_query_var('posts_per_page')) + 1;
	}
	
	
	while (have_posts()) : the_post();
?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('cmsmasters_search_post'); ?>>
			<div class="cmsmasters_search_post_number_wrap">
				<div class="cmsmasters_search_post_number"><?php echo esc_html($cmsmasters_posts_count) ?></div>
				<div class="cmsmasters_post_type_label"><?php 
					$post_type_obj = get_post_type_object(get_post_type());
					
					
					echo $post_type_obj->labels->singular_name;
				?></div>
			</div>
			<div class="cmsmasters_search_post_cont">
				<header class="cmsmasters_search_post_header entry-header">
					<h2 class="cmsmasters_search_post_title entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php cmsmasters_title(get_the_ID(), true); ?>
						</a>
					</h2>
				</header>
				<?php 
					echo cmsmasters_divpdel('<div class="cmsmasters_search_post_content entry-content">' . "\n" . 
						wpautop(theme_excerpt(55, false)) . 
					'</div>' . "\n");
				?>
				<footer class="cmsmasters_post_cont_info entry-meta">
				<?php 
					if (comments_open()) {
						echo '<div class="cmsmasters_post_meta_info">' . 
								'<a class="cmsmasters_search_post_comments cmsmasters_theme_icon_comment" href="' . esc_url(get_comments_link()) . '" title="' . esc_attr__('Comment on', 'sports-club') . ' ' . esc_attr(get_the_title()) . '">' . esc_html(get_comments_number()) . '</a>' . 
						'</div>';
					}
					
					
					if (
						get_post_type() == 'post' || 
						get_post_type() == 'project' 
					) {
						echo '<span class="cmsmasters_search_post_user_name">' . 
								esc_html__('By', 'sports-club') . ' ' . 
								'<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '" rel="author" title="' . esc_attr__('Posts by', 'sports-club') . ' ' . esc_attr(get_the_author_meta('display_name')) . '">' . esc_html(get_the_author_meta('display_name')) . '</a>' . 
							'</span>';
						
						
						if (
							(
								get_post_type() == 'post' && 
								get_the_category()
							) || (
								get_post_type() == 'project' && 
								get_the_terms(get_the_ID(), 'pj-categs')
							)
						) {
							echo '<span class="cmsmasters_search_post_category">' . 
								esc_html__('In ', 'sports-club') . 
								(get_post_type() == 'post' ? get_the_category_list(', ') : '') . 
								(get_post_type() == 'project' ? get_the_term_list(get_the_ID(), 'pj-categs', '', ', ', '') : '') . 
							'</span>';
						}
					}
					
					
					echo '<span class="cmsmasters_post_date">' . 
						esc_html__('On', 'sports-club') . ' ' . 
						'<abbr class="published cmsmasters_search_post_date" title="' . esc_attr(get_the_date()) . '">' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
						'<abbr class="dn date updated" title="' . esc_attr(get_the_modified_date()) . '">' . 
							esc_html(get_the_date()) . 
						'</abbr>' . 
					'</span>';
					
					
					echo '<a class="cmsmasters_post_read_more" href="' . esc_url(get_permalink()) . '">' . esc_html__('Read More', 'sports-club') . '</a>'
				?>
				</footer>
			</div>
		</article>
		
<?php 
		$cmsmasters_posts_count += 1;
		
	endwhile;
	
	
	echo pagination();
endif;


echo '</div>' . "\n" . 
'</div>' . "\n" . 
'<!-- _________________________ Finish Content _________________________ -->' . "\n\n";


if ($cmsmasters_layout == 'r_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
} elseif ($cmsmasters_layout == 'l_sidebar') {
	echo "\n" . '<!-- _________________________ Start Sidebar _________________________ -->' . "\n" . 
	'<div class="sidebar fl" role="complementary">' . "\n";
	
	
	get_sidebar();
	
	
	echo "\n" . '</div>' . "\n" . 
	'<!-- _________________________ Finish Sidebar _________________________ -->' . "\n";
}


get_footer();

