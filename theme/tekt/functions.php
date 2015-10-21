<?php
 add_theme_support( 'post-thumbnails' );

  function register_my_menu() {
   register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );


add_filter('show_admin_bar', '__return_false');

 function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');


 function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

 function my_login_logo_url_title() {
return 'tek-today';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

 function login_error_override()
{
    return 'Nope.';
}
add_filter('login_errors', 'login_error_override');

 function my_login_head() {
remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');

 function admin_login_redirect( $redirect_to, $request, $user )
{
global $user;
if( isset( $user->roles ) && is_array( $user->roles ) ) {
if( in_array( "administrator", $user->roles ) ) {
return $redirect_to;
} else {
return home_url();
}
}
else
{
return $redirect_to;
}
}
add_filter("login_redirect", "admin_login_redirect", 10, 3);

 function login_checked_remember_me() {
add_filter( 'login_footer', 'rememberme_checked' );
}
add_action( 'init', 'login_checked_remember_me' );

 function rememberme_checked() {
echo "<script>document.getElementById('rememberme').checked = true;</script>";
}


 function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

 function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

add_action('admin_head', 'my_custom_logo');

function my_custom_logo() {
echo '
<style type="text/css">
#header-logo { background-image: url('.get_bloginfo('template_directory').'/img/banner_white.png) !important; }
</style>
';
}


function comicpress_copyright() {
global $wpdb;
$copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
$output = '';
if($copyright_dates) {
$copyright = "&copy; " . $copyright_dates[0]->firstdate;
if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
$copyright .= '-' . $copyright_dates[0]->lastdate;
}
$output = $copyright;
}
return $output;
}


// Register Sidebars
function tekt() {

	$args = array(
		'id'            => 'right_sidebar',
		'class'         => 'right_sidebar',
		'name'          => __( 'right_sidebar', 'text_domain' ),
		'description'   => __( 'Sidebar located on the right of the page', 'text_domain' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'tekt' );
// Register Sidebars
function tekt2() {

	$args = array(
		'id'            => 'bottom_widget',
		'class'         => 'bottom_widget',
		'name'          => __( 'Bottom Widget', 'bottom_widget' ),
		'description'   => __( 'Sidebar located on the bottom of the page', 'bottom_widget' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'tekt2' );

function howdy_message($translated_text, $text, $domain) {
    $new_message = str_replace('Howdy', 'Welcome', $text);
    return $new_message;
}
add_filter('gettext', 'howdy_message', 10, 3);

function remove_footer_admin () {
echo 'Fueled by <a href="http://www.wordpress.org" target="_blank">WordPress</a> | Designed by <strong>Meher Vohra</strong> | Banter by <strong>Arya Vohra</strong> and <strong>Taichi Kato</strong></a></p>';
}

add_filter('admin_footer_text', 'remove_footer_admin');
?>

