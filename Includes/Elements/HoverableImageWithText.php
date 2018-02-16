<?php
/*
Element Description: Hoverable Image with text Box
Text Domain: bovce
*/

if(!class_exists('bovceHiwtBox'))
{
    class bovceHiwtBox extends WPBakeryShortCode {

      function __construct()
      {

        add_action( 'init', array( $this, 'bovce_hiwt_mapping' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'front_end_css' ) );

      }


    	function front_end_css(){
            wp_register_style( 'bunch-of-vc-extension-hiwt', plugins_url( 'bunch_of_vc_extension/Includes/Assets/css/hiwt.css' ));
            wp_enqueue_style( 'bunch-of-vc-extension-hiwt' );

            wp_register_script( 'bunch-of-vc-extension-hiwt-js', plugins_url( 'bunch_of_vc_extension/Includes/Assets/js/hiwt.js' ), array ('jquery'), false, true);
            wp_enqueue_script('bunch-of-vc-extension-hiwt-js');
      }



      public function bovce_hiwt_mapping()
    	{

        if ( !defined( 'WPB_VC_VERSION' ) )
    	  {
            return;
        }

          vc_map(
              array(
      				'name' => __('Hoverable Image with Text Box' , 'bovce'),
              'base' => 'bovce_hiwt',
              'class' => 'bovce_hiwt',
              'description' => __('Hoverable Image with Text Box', 'bovce'),
              'content_element' => true,
              'show_settings_on_create' => true,
              'category' => __('Me Elements', 'BOVCE'),
              'html_template'  => BOVCE_DIR_HTML . '/bovce_hiwt.php',
              'icon' => 'bovce_hiwt',
      				'params' => array(

                      array(
                          'type' => 'textarea_html',
                          'holder' => 'p',
                          'class' => 'vc_hiwt_textinbox',
                          'heading' => __( 'Text inside Box', 'bovce' ),
                          'param_name' => 'content',
                      ),

                      array(
                          'type' => 'vc_link',
                          'class' => 'vc_hiwt_link',
                          'heading' => __( 'Link', 'bovce' ),
                          'param_name' => 'link',
                      ),
                      array(
                          'type' => 'colorpicker',
                          'class' => 'vc_hiwt_background-hover',
                          'heading' => __( 'Background Hover', 'bovce' ),
                          'param_name' => 'bgcolor',
                          'value' => __( '#f48120', 'vc_hiwt' ),
                      ),
                      array(
                          'type' => 'attach_image',
                          'class' =>'vc_hiwt_bgimage',
                          'heading' => __( 'Background Image', 'bovce' ),
                          'param_name' => 'bgimage',
                      ),

            				  array(
            						'type' => 'css_editor',
            						'heading' => __( 'Css', 'bovce' ),
            						'param_name' => 'css',
            						'group' => __( 'Design options', 'bovce' ),
            					),
                  )
              )
          );
        }



    }
    new bovceHiwtBox();


    if(class_exists('WPBakeryShortCode'))
    {

    	class WPBakeryShortCode_bovce_hiwt extends WPBakeryShortCode {}

    }

}
