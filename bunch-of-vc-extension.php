<?php

/*
* Plugin Name: Bunch of VC Extension
* Author: Michael Espiritu
* Description: Local House Listing
* Version: 1.0
*
* Text Domain: BOVCE
*
*/


//Exit if access directly
if( !defined('ABSPATH') ){

  exit;

}


if ( ! defined( 'BOVCE_DIR' ) )
{

	define( 'BOVCE_DIR', dirname( __FILE__ ) );

}

if ( ! defined( 'BOVCE_DIR_INCLUDES' ) )
{

	define( 'BOVCE_DIR_INCLUDES', BOVCE_DIR.'/Includes' );

}

if ( ! defined( 'BOVCE_DIR_ELEMENTS' ) )
{

	define( 'BOVCE_DIR_ELEMENTS', BOVCE_DIR_INCLUDES.'/Elements' );

}


if ( ! defined( 'BOVCE_DIR_HTML' ) )
{

	define( 'BOVCE_DIR_HTML', BOVCE_DIR_INCLUDES.'/Html' );

}

if ( ! defined( 'BOVCE_DIR_ASSETS' ) )
{

	define( 'BOVCE_DIR_ASSETS', BOVCE_DIR_INCLUDES.'/Assets' );

}

if ( ! defined( 'BOVCE_DIR_CSS' ) )
{

	define( 'BOVCE_DIR_CSS', BOVCE_DIR_ASSETS.'/css' );

}



require_once( ABSPATH . 'wp-admin/includes/plugin.php' );


if ( is_plugin_active( 'js_composer/js_composer.php' ) )
{
    add_action( 'vc_before_init', 'bovce_before_init_actions' );
}




function bovce_before_init_actions()
{
  require_once BOVCE_DIR_ELEMENTS . "/Partners.php";
  require_once BOVCE_DIR_ELEMENTS . "/Speedometer.php";
  require_once BOVCE_DIR_ELEMENTS . "/Testimonial.php";
  require_once BOVCE_DIR_ELEMENTS . "/BulletinBoard.php";
  require_once BOVCE_DIR_ELEMENTS . "/ImageWithIconAndText.php";
  require_once BOVCE_DIR_ELEMENTS . "/SimpleImageWithLabel.php";
  require_once BOVCE_DIR_ELEMENTS . "/HoverableImageWithText.php";
}
