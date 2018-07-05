<?php

function laureus_setup() {
	add_editor_style('css/editor-style.css');
	add_theme_support('post-thumbnails');
	add_post_type_support( 'page', 'excerpt' );
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 970);
}
add_action('init', 'laureus_setup');

if (! isset($content_width))
	$content_width = 600;

function laureus_excerpt_readmore() {
	return '...';
}
add_filter('excerpt_more', 'laureus_excerpt_readmore');

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

//Support language
function language_selector(){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
        foreach($languages as $l){
            if(!$l['active']){
                echo '<a href="'.$l['url'].'">' . $l['translated_name'] . '</a>';
            }
        }
    }
}

function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="og:type" content="website" />';
        echo '<meta property="og:title" content="' . get_the_title() . '"/>';
        echo '<meta property="og:url" content="'. get_the_permalink().'"/>';
        echo '<meta property="og:description" content="'. get_the_excerpt() .'" />';
        echo '<meta property="og:site_name" content="'.  get_option( 'blogname' ) .'"/>';


        //Twitter
        echo '<meta name="twitter:card" content="'. get_the_excerpt() .'" />';
        echo '<meta name="twitter:site" content="'.  get_option( 'blogname' ) .'"/>';


    if(!has_post_thumbnail( $post->ID )) {
        $default_image = '/images/logo.png';
        echo '<meta property="og:image" content="' . $default_image . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );

/*
	
	Custom tabs fields
	
*/


function laureus_options() { 
    
    /* Social Options Section */

	add_settings_section(
		"section-social", 
		"Social Settings", 
		'laureus_social_callback', 
		"theme-social-options"
	);

	add_settings_field(
		"facebook_url", 
		"Facebook Url", 
		"display_facebook_element", 
		"theme-social-options", 
		"section-social"
	);

    add_settings_field(
    	"twitter_url", 
    	"Twitter Url", 
    	"display_twitter_element", 
    	"theme-social-options", 
		"section-social"
    );

    add_settings_field(
        "instagram_url", 
        "Instagram Url", 
        "display_instagram_element", 
        "theme-social-options", 
        "section-social"
    ); 

    add_settings_field(
        "youtube_url", 
        "Youtube Url", 
        "display_youtube_element", 
        "theme-social-options", 
        "section-social"
    );  	


    register_setting("theme-social-options", "facebook_url");
    register_setting("theme-social-options", "twitter_url");
    register_setting("theme-social-options", "instagram_url");
    register_setting("theme-social-options", "youtube_url");

}

add_action('admin_init', 'laureus_options');


/* Call Backs
-----------------------------------------------------------------*/

function laureus_social_callback() { 
    echo '<h1>Laureus Social  Settings</h1>'; 
}

//Fields of settings


function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_instagram_element()
{
    ?>
        <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
    <?php
}

function display_youtube_element()
{
    ?>
        <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
    <?php
}




/* Display Page
-----------------------------------------------------------------*/
function laureus_index() {
?>
    <div class="wrap">  
        <div id="icon-themes" class="icon32"></div>  
        <h2>Theme Options</h2>  
        <?php settings_errors(); ?>  

        <?php  
            $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'theme-social-options';  
        ?>  

        <h2 class="nav-tab-wrapper">  
            <a href="?page=theme-panel&tab=theme-social-options" class="nav-tab <?php echo $active_tab == 'theme-social-options' ? 'nav-tab-active' : ''; ?>">Social Settings</a>
        </h2>  


        <form method="post" action="options.php">  

            <?php 
            if( $active_tab == 'theme-social-options' ) {
                settings_fields( 'theme-social-options' );
                do_settings_sections( 'theme-social-options' ); 
            }

            ?>             
            <?php submit_button(); ?>  
        </form> 

    </div> 
<?php
}

function add_theme_menu_item()
{
	add_menu_page("Theme Panel Options", "Theme Panel Options", "manage_options", "theme-panel", "laureus_index", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");


// Get top taxtonomies
function wpse_get_category_parents( $id, $link = false, $separator = '/', $nicename = false, $visited = array(), $iscrumb=false ) {
    $chain = '';
    $parent = get_term( $id, 'category' );
    if ( is_wp_error( $parent ) ) {
        return $parent;
    }
    if ( $nicename ) {
        $name = $parent->slug;
    } else {
        $name = $parent->name;
    }
    if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
        $visited[] = $parent->parent;
        $chain .= wpse_get_category_parents( $parent->parent, $link, $separator, $nicename, $visited , $iscrumb);
    }
    if (is_rtl()){
        $sep_direction ='\\';
    } else {
        $sep_direction ='/';
    }
    if ($iscrumb){
        $chain .= '<li><span class="sep">'.$sep_direction.'</span><a href="' . esc_url( get_category_link( $parent->term_id ) ) . '"><span>'.$name.'</span></a></li>' . $separator ;
    } elseif ( $link && !$iscrumb) {
        $chain .= '<a href="' . esc_url( get_category_link( $parent->term_id ) ) . '">'.$name.'</a>' . $separator ;
    } else {
        $chain .= $name.$separator;
    }
    return $chain;
}

// Breadcrumbs
function wpse_get_breadcrumbs() {
    global $wp_query;
        $sep_direction ='|';
    ?>
    <ul><?php
        // Adding the Home Page  ?>
        <li><a href="<?php echo esc_url( home_url() ); ?>"><span> <?php bloginfo('name'); ?></span></a></li><?php
        if ( ! is_front_page() ) {
            // Check for categories, archives, search page, single posts, pages, the 404 page, and attachments
            if ( is_page() ) {
                $post = $wp_query->get_queried_object();
                if ( $post->post_parent == 0 ) { ?>
                    <li><?php _e( '<span class="sep">|</span>' ); the_title(); ?></li><?php
                } else {
                    $title = the_title( '','', false );
                    $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
                    array_push( $ancestors, $post->ID );
                    foreach ( $ancestors as $ancestor ) {
                        if ( $ancestor != end( $ancestors ) ) { ?>
                            <li>
                                <span class="sep"><?php echo $sep_direction;?></span><a href="<?php echo esc_url( get_permalink( $ancestor ) ); ?>"> <span><?php echo strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ); ?></span></a>
                            </li><?php
                        } else { ?>
                            <li>
                                <span class="sep"><?php echo $sep_direction;?></span><?php echo strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ); ?>
                            </li><?php
                        }
                    }
                }
            }
        } ?>
    </ul><?php
}

// Browser detection body_class() output

function laureus_browser_body_class( $classes ) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$browser = surbcr( "$browser", 25, 8);
		if ($browser == "MSIE 7.0"  ) {
			$classes[] = 'ie7';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 6.0" ) {
			$classes[] = 'ie6';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 8.0" ) {
			$classes[] = 'ie8';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 9.0" ) {
			$classes[] = 'ie9';
			$classes[] = 'ie';
		} else {
	            $classes[] = 'ie';
	        }
	}
	else $classes[] = 'unknown';

	if( $is_iphone ) $classes[] = 'iphone';

	return $classes;
}
add_filter( 'body_class', 'laureus_browser_body_class' );

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));