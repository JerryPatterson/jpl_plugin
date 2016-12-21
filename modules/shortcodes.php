<!-- add_shortcode first param must match return text in shortcode.js file  -->
<?php
//----------Section--------------//
function pwd_section_shortcode($atts,$content,$tags) {
$value = shortcode_atts(array(
    'class' => ''
    ), $atts);
  return '<section class="'.$value['class'].'">'.do_shortcode($content).'</section>'; 
}
add_shortcode('section','pwd_section_shortcode');

//----------Container--------------//
function pwd_container_shortcode($atts,$content,$tags) {
$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="container '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('container','pwd_container_shortcode');

//-------------Row-------------//
function pwd_row_shortcode($atts,$content,$tags) {
    $value = shortcode_atts(array(
    'class'=> '',
    ), $atts);
	return '<div class="row '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('row','pwd_row_shortcode');

//--------------Columns-------------//
function pwd_col_shortcode($atts,$content,$tags) {
	$value = shortcode_atts(array(
		'columns' => '',
		'offset' => '',
		'class'=> '',
		), $atts);

  if (!$value['offset'] == ''){
	$result = $value['columns']." offset-by-".$value['offset'];
}else {
  $result = $value['columns'];
}

	return '<div class="'.$result.' '.$value['class'].' columns">'.do_shortcode($content).'</div>';
}
add_shortcode('col','pwd_col_shortcode');

//----------Buttons--------------//
function pwd_button_shortcode($atts,$content,$tags) {
$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="button '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('button','pwd_button_shortcode');

//----------Video--------------//
function pwd_video_shortcode($atts,$content,$tags) {
$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="video-container '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('video-wrap','pwd_video_shortcode');

//----------Comment--------------//
function pwd_comment_shortcode($atts,$content,$tags) {
$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<!--'.do_shortcode($content).'-->'; 
}
add_shortcode('comment','pwd_comment_shortcode');

//-------------Accordian-------------//
function pwd_acc_container_shortcode($atts,$content,$tags) {
	$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="_accordian '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('acc-container','pwd_acc_container_shortcode'); 

function pwd_acc_title_shortcode($atts,$content,$tags) {
	$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="_accordian-title '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('acc-title','pwd_acc_title_shortcode'); 

function pwd_acc_content_shortcode($atts,$content,$tags) {
	$value = shortcode_atts(array(
		'class' => ''
		), $atts);
	return '<div class="_accordian-content '.$value['class'].'">'.do_shortcode($content).'</div>'; 
}
add_shortcode('acc-content','pwd_acc_content_shortcode'); 
 
//Ignore whitespace inside shortcode
	add_filter( 'the_content', 'pwd_shortcode_empty_paragraph_fix' );
function pwd_shortcode_empty_paragraph_fix( $content ) {

	$array = array(
		'<p>['    => '[',
		']</p>'   => ']',
		']<br />' => ']'
		);
	return strtr( $content, $array );

}

//Shortcode Buttons
function pwd_enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["shortcode_plugin"] =  plugin_dir_url(dirname(__FILE__)) . "js/shortcode.js";
    return $plugin_array;
}

add_filter("mce_external_plugins", "pwd_enqueue_plugin_scripts");
function pwd_register_buttons_editor($buttons)
{
    //add each button here and on js page
    array_push($buttons, "pwd_button");
    return $buttons;
}
add_filter("mce_buttons_2", "pwd_register_buttons_editor");
?>