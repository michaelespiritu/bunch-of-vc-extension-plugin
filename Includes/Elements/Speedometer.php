<?php

/*
Element Description: Animated Speedometer Box
Text Domain: bovce
*/

if(!class_exists('bovceSpeedoMeterBox'))
{


    class bovceSpeedoMeterBox extends WPBakeryShortCode {

      function __construct()
    	{
            add_action( 'init', array( $this, 'bovce_spdmtr_mapping' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'front_end_css' ) );
      }

    	function front_end_css(){
          wp_register_style( 'bunch-of-vc-extension-speedometer', plugins_url( 'bunch_of_vc_extension/Includes/Assets/css/speedometer.css' ));
          wp_enqueue_style('bunch-of-vc-extension-speedometer');
      }

      public function bovce_spdmtr_mapping()
    	{

          if ( !defined( 'WPB_VC_VERSION' ) )
    	  {
              return;
          }


          vc_map(

              array(
          				'name' => __('Animated Speedometer Box', 'bovce'),
                  'base' => 'bovce_spdmtr',
                  'class' => 'bovce_spdmtr',
                  'description' => __('Speedometer VC box', 'bovce'),
                  'content_element' => true,
                  'show_settings_on_create' => true,
                  'category' => __('Me Elements', 'BOVCE'),
                  'html_template'  => BOVCE_DIR_HTML . '/bovce_speedometer.php',
                  'icon' => 'bovce_spdmtr',
          				'params' => array(

                            array(
                                'type' => 'textarea_html',
                                'holder' => 'div',
                                'class' => 'bovce-content',
                                'heading' => __( 'Content', 'bovce' ),
                                'param_name' => 'content',
                                'admin_label' => false
                            ),

          				  array(
                                'type' => 'dropdown',
                                'class' => 'bovce-text-align',
                                'heading' => __( 'Aligment', 'bovce' ),
                                'param_name' => 'bovcetextalignment',
                                'admin_label' => false,
                                'value'       => array(
                                  'Center'   => 'center',
                                  'Left'   => 'left',
                                  'Right'   => 'right',
                                )
                            ),

          				  array(
          						'type' => 'css_editor',
          						'heading' => __( 'Css', 'ftb' ),
          						'param_name' => 'css',
          						'group' => __( 'Design options', 'bovce' ),
          					),

                  )
              )
          );

        }



    }


    new bovceSpeedoMeterBox();

    if(class_exists('WPBakeryShortCode'))
    {

      class WPBakeryShortCode_bovce_spdmtr extends WPBakeryShortCode {}

    }


}//end of if class exist
