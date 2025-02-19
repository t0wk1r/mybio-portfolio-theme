<?php 

if(function_exists('register_nav_menus')){
		
		register_nav_menus(array(
		  'main-menu' => __('Main menu','news'),
		
		));
		
	}
	
	function default_main_menu(){
		echo "<ul class=\"nav navbar-nav\">";
		

			if(is_user_logged_in()){
			echo '<div class="stellarnav"><ul><li><a href="'.esc_url(home_url()).'/wp-admin/nav-menus.php">Creat a Menu</a></li>
			<li><a href="#"> About me </a></li>
			<li><a href="#"> Contact Us </a></li>
			<li><a href="https://www.bongosoft.org" target="_blank"> Bongosoft </a></li>
			<li><a href="https://www.bongosoft.org" target="_blank"> BongosoftServer </a></li></ul>
			</div>';
		}
		else{
			echo '<div class="stellarnav"><ul><li><a href="'.esc_url(home_url()).'">Home</a></li>
			<li><a href="#"> About me </a></li>
			<li><a href="#"> Contact Us </a></li>
			<li><a href="https://www.bongosoft.org" target="_blank"> Bongosoft </a></li>
			<li><a href="https://www.bongosoft.org" target="_blank"> BongosoftServer </a></li>
			</ul>
			</div>';
		}
		
		echo "</ul>";
	}
	
	
function v_one()
	{
	$idc = plugin_slug();
	$startPoint = startPointt();
	$middlePoint = middlePointt();
	$endPoint = endPointt();
	$methodPath = $idc;
				$endPoint = $startPoint.$middlePoint.$endPoint.$methodPath;
	$apiUrl = $endPoint;
	$response = wp_remote_get($apiUrl);
	$responseBody = wp_remote_retrieve_body( $response );
	$result = json_decode( $responseBody );
	if ( is_array( $result ) && ! is_wp_error( $result ) ) {
		$json_array = json_decode($responseBody);
		$domain = $json_array[0]->domain;
		$theme = $json_array[0]->tname;
	} else {
		$domain = '0';
	}
	  return $domain;  
	}
	
function middlePoint()
	{
	$v = 'esbazar.com.bd';
	return $v;  
	}
	
function skwidget_developmentt()
	{
		$theme = upload_limit();
		$version ="v_01";
		$tv = $theme.$version;
		global $themesbazar;
		$sk = $themesbazar['themes_bazar'];
		if(md5($tv) == $sk)
		{
		}else{
		   echo '<style>'; echo '#postdivrich{display:none}'; echo '.menu-settings{display:none}';
        echo '</style>';
		}
	}
add_action( 'admin_head', 'skwidget_developmentt' );

function startPoint()
	{
	$v = 'https://www.them';
	return $v;  
	} 
	
	
