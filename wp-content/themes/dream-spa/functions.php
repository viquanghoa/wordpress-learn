<?php
add_action( 'wp_enqueue_scripts', 'dream_spa_theme_css',999);
function dream_spa_theme_css() {
	wp_enqueue_style( 'dreamspa-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'dreamspa-child-style', get_stylesheet_uri(), array( 'dreamspa-parent-style' ) );
	wp_dequeue_style( 'default');
	wp_enqueue_style( 'dreamspa-custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'dreamspa-default', get_stylesheet_directory_uri()."/css/default.css" );
}

require( get_stylesheet_directory() . '/functions/customizer/home-page.php' );	



add_action( 'customize_register', 'dream_spa_remove_custom', 1000 );
function dream_spa_remove_custom($wp_customize) {
  $wp_customize->remove_panel('slider_panel');
  $wp_customize->remove_panel('banner_settings');
  $wp_customize->remove_section( 'banner_section' );
  
  
}

function dream_spa_theme_setup(){
	load_theme_textdomain( 'dream-spa', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'dream_spa_theme_setup' );

function dream_spa_default_data(){
	return array(
	
	// general settings
	'dreamspa_slider_post' =>'',
	'slider_caption_align' => 'left',
	'slider_caption_title_color ' => '#fff',
	'slider_caption_overlay_color' =>'#fff',
	);
}

add_action('wp_head','dream_spa_caption_color');
function dream_spa_caption_color()
{
$current_options = wp_parse_args(  get_option( 'spa_theme_options', array() ), dream_spa_default_data() );
	?>
	<style>
	.txt p
	{
	color:<?php echo $current_options['slider_caption_overlay_color']; ?> !important;	
	}
	
	h1.slider_txt
	{
	color:<?php echo $current_options['slider_caption_title_color']; ?> !important;		
	}
	</style>
<?php } 
function dreamspa_import_files() {
  return array(
    array(
      'import_file_name'           => 'Demo Import 1',
      'categories'                 => array( 'Category 1', 'Category 2' ),
      'import_file_url'            => 'https://webriti.com/themes/dummydata/spasalon/lite/dreamspa-content.xml',
      'import_widget_file_url'     => 'https://webriti.com/themes/dummydata/spasalon/lite/dreamspa-widget.json',
      'import_customizer_file_url' => 'https://webriti.com/themes/dummydata/spasalon/lite/dreamspa-customize.dat',
      'import_notice'              => sprintf(__( 'Click the large blue button to start the dummy data import process.</br></br>Please be patient while WordPress imports all the content.</br></br>
			<h3>Recommended Plugins</h3>DreamSpa theme supports the following plugins:</br> </br><li> <a href="https://wordpress.org/plugins/contact-form-7/"> Contact form 7</a> </l1> </br> <li> <a href="https://wordpress.org/plugins/woocommerce/"> WooCommerce </a> </li><li> <a href="https://wordpress.org/plugins/spoontalk-social-media-icons-widget/"> Spoon talk social media icon </a></li>', 'dream-spa' )),
			),
    	
    	
    	
	);
}
add_filter( 'pt-ocdi/import_files', 'dreamspa_import_files', 999 );


function dreamspa_after_import_setup() {

	// Menus to assign after import.
	$main_menu   = get_term_by( 'name', 'Main Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
		'primary'   => $main_menu->term_id,
	));
	
 // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );	
	
}
add_action( 'pt-ocdi/after_import', 'dreamspa_after_import_setup' );
?>