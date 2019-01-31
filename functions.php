<?php
function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image')) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>

<?php }

function easyLearning_resources(){
   wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyBh9b1rNCp6kOi5JeMHiRP4klDymBeoEWk', NULL, '1.0', true);
	wp_enqueue_script('scripts' , get_theme_file_uri('/js/scripts-bundled.js')  , NULL, '1.0' , true);
	
	wp_enqueue_style('custom-google-font' , '//fonts.googleapis.com/css?
	family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-style' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	//wp_enqueue_style( 'style', get_stylesheet_directory_uri() . 'css/style.css ' );
	 wp_enqueue_style( 'style-name', get_stylesheet_directory_uri() . '/css/style.css', array('jquery') );
		wp_enqueue_style( 'style', get_stylesheet_uri() ,NULL ,microtime() );
	wp_localize_script('main-university-js', 'universityData', array(
    'root_url' => get_site_url() )) ;
}

add_action('wp_enqueue_scripts' , 'easyLearning_resources');

function easyLearning_features(){
	register_nav_menu('headerMenuLocation', 'My Header Menu');
	add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('collegeCard', 900, 700,true);
  add_image_size('examCard', 1000, 900,true);
  add_image_size('pageBanner', 1500, 400, true);

}

add_action('after_setup_theme' , 'easyLearning_features');

function eventArchive($query){
	if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
	$query-> set('orderby', 'title');
    $query-> set('order', 'ASC');
    $query-> set('posts_per_page' , -1);	
		
	}
	
	if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
		$today = date('Ymd');	 
		$query ->set('meta_key', 'event_date');
		$query ->set('orderby', 'meta_value_num');
		$query ->set('order', 'ASC');
		$query ->set('meta_query', array(
		  array(
		  'key' => 'event_date',
		  'compare' =>'>=',
		  'value'=>$today,
          'type' => 'numeric'		 
		 )
		 ));
	}
  
	
}

add_action('pre_get_posts', 'eventArchive');


// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    wp_redirect(site_url('/'));
    exit;
  }
}

add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
  $ourCurrentUser = wp_get_current_user();

  if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber') {
    show_admin_bar(false);
  }
}

// Customize Login Screen
add_filter('login_headerurl', 'ourHeaderUrl');

function ourHeaderUrl() {
  return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginCSS() {
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}

add_filter('login_headertitle', 'ourLoginTitle');

function ourLoginTitle() {
  return get_bloginfo('name');
}
