<?php
/*
Element Description: Image with Icon and Text
Text Domain: bovce
*/

if(!class_exists('bovceImageWithIconAndTextBox'))
{

  class bovceImageWithIconAndTextBox extends WPBakeryShortCode {

    function __construct()
  	{
          add_action( 'init', array( $this, 'bovce_bovce_mapping' ) );
          add_action( 'wp_enqueue_scripts', array( $this, 'front_end_css' ) );
    }


  	function front_end_css()
  	{
          wp_register_script( 'bunch-of-vc-extension-iwit-js', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', '', false, true);
          wp_enqueue_script('bunch-of-vc-extension-iwit-js');
      }


    public function bovce_bovce_mapping()
  	{

      if ( !defined( 'WPB_VC_VERSION' ) )
  	  {
          return;
      }


        vc_map(

            array(
      				'name' => __('Image with Icon and Text', 'bovce'),
              'base' => 'bovce_iwit',
              'class' => 'bovce_iwit',
              'description' => __('Image with Icon and Text', 'bovce'),
              'content_element' => true,
              'show_settings_on_create' => true,
              'category' => __('Me Elements', 'BOVCE'),
              'html_template'  => BOVCE_DIR_HTML . '/bovce_iwit.php',
              'icon' => 'bovce_iwit',
      				'params' => array(

                    array(
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => 'bovce-title',
                        'heading' => __( 'Title', 'bovce' ),
                        'param_name' => 'bovcetitle',
                    ),

	                  array(
                        'type' => 'textfield',
                        'class' => 'bovce-title',
                        'heading' => __( 'Icon', 'bovce' ),
                        'param_name' => 'bovceicon',
				                'description' => __( 'Go to font awesome to get the icon code', 'bovce' )
                    ),

			              array(
                        'type' => 'textfield',
                        'class' => 'bovce-font-size',
                        'heading' => __( 'Font Size', 'bovce' ),
                        'param_name' => 'bovcetitlefontsize',
			                 'description' => __( 'Put font size in px', 'bovce' )
                    ),

			              array(
                        'type' => 'colorpicker',
                        'class' => 'bovce-title-color',
                        'heading' => __( 'Icon and Title Color', 'bovce' ),
                        'param_name' => 'bovcetitlecolor',
		                     'value' => __( '#ffffff', 'bovce' ),
                    ),

        				  array(
                              'type' => 'dropdown',
                              'class' => 'bovce-icon-position',
                              'heading' => __( 'Icon Position', 'bovce' ),
                              'param_name' => 'bovceiconposition',
                              'admin_label' => false,
                              'value'       => array(
                              'Top'   => 'top',
                              'Bottom'   => 'bottom',
                              'Left'   => 'left',
                              'Right'   => 'right',
                        )
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


  new bovceImageWithIconAndTextBox();


  if(class_exists('WPBakeryShortCode'))
  {

    class WPBakeryShortCode_bovce_iwit extends WPBakeryShortCode {}

  }

}
