<?php

/*
Element Description: Partners Box
Text Domain: bovce
*/

if(!class_exists('bovcePartnersBox'))
{

    class bovcePartnersBox extends WPBakeryShortCode {


      function __construct() {
          add_action( 'init', array( $this, 'bovce_partners_mapping' ) );
          add_action( 'wp_enqueue_scripts', array( $this, 'front_end_css' ) );
      }

      function front_end_css(){

          wp_register_style( 'bunch-of-vc-extension-partners', plugins_url( 'bunch_of_vc_extension/Includes/Assets/css/partners.css' ));
          wp_enqueue_style( 'bunch-of-vc-extension-partners' );


      }


      public function bovce_partners_mapping() {

        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }


        vc_map(

            array(
                'name' => __('Partners Box', 'BOVCE'),
                'base' => 'bovce_partners',
                'class' => 'bovce_partners',
                'description' => __('Partners VC box', 'BOVCE'),
                'content_element' => true,
        				'show_settings_on_create' => true,
        				'category' => __('Me Elements', 'BOVCE'),
                'html_template'  => BOVCE_DIR_HTML . '/bovce_partners.php',
                'icon' => 'bovce_partners',
                'params' => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => 'partners-name',
                        'heading' => __( 'Name', 'BOVCE' ),
                        'param_name' => 'partnername',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => 'partners-title',
                        'heading' => __( 'Title', 'BOVCE' ),
                        'param_name' => 'title',
                    ),


                    array(
                        'type' => 'textarea_html',
                        'class' => 'partners-description',
                        'heading' => __( 'Partners Description', 'BOVCE' ),
                        'param_name' => 'content',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => 'partners-number',
                        'heading' => __( 'Phone Number', 'BOVCE' ),
                        'param_name' => 'phonenumber',
                    ),

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => 'partners-email',
                        'heading' => __( 'Email', 'BOVCE' ),
                        'param_name' => 'email',
                    ),

                    array(
                        'type' => 'attach_image',
                        'class' => 'partners-image',
                        'heading' => __( 'Image', 'BOVCE' ),
                        'param_name' => 'partnersimage',
                    ),

                )
            )
        );

      }


  }



  new bovcePartnersBox();



  if(class_exists('WPBakeryShortCode'))
  {

  	class WPBakeryShortCode_bovce_partners extends WPBakeryShortCode {}

  }


}
