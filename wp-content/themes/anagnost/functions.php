<?php 

class anagnost {

	public function __construct(){
		add_shortcode("schema", array($this, "schema_shortcode"));
		add_shortcode("schema_prop", array($this, "schema_shortcode"));
		add_shortcode('minti_headline', 'minti_headline_function');
	}

	public function schema_shortcode($atts, $content, $sc){
		$schema = array();

		if($sc == "schema"){
			$schema[] = "itemscope";
		}

		if(isset($atts["itemprop"])){
			$schema[] = "itemprop='{$atts["itemprop"]}'";
		}

		if(isset($atts["itemtype"])){
			$schema[] = "itemtype='{$atts["itemtype"]}'";
		}

		$schema = implode(" ", $schema);

		$tag = (isset($atts["tag"])) ? $atts["tag"] : "span";

		$html = "<{$tag} {$schema}>" . do_shortcode($content) . "</{$tag}>";

		return $html;
	}
}

$anagnost = new anagnost();


function minti_headline_function( $atts, $content = null) {
	extract( shortcode_atts( array(
		'type'   => 'h1',
		'margin' => '0 0 20px 0',
		'size'	 => 'fontsize-inherit',
		'color'	 => '',
		'weight' => 'fontweight-inherit',
		'lineheight' => 'lh-inherit',
		'class'	 => '',
		'transform'	 => 'transform-inherit',
		'align'	 => 'align-center',
		'font'	 => 'font-inherit'
	), $atts ) );

	$style = '';

	if($margin != '') {
		$style .= 'margin: '.esc_attr($margin).';';
	}
	if($color != '') {
		$style .= ' color: '.esc_attr($color).';';
	}

	return '<' . esc_attr($type) . ' class="headline '.esc_attr($font).' '.esc_attr($size).' '.esc_attr($weight).' '.esc_attr($lineheight).' '.esc_attr($align).' '.esc_attr($transform).' '.esc_attr($class).'" style="'.esc_attr($style).'">' . do_shortcode($content) . '</' . esc_attr($type) . '>';
}
