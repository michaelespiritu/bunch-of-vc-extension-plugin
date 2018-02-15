<?php
/*
Element Description: Bulletin Board Box
Text Domain: bovce
*/

if(!class_exists('bovceSimpleImageWithLabelBox'))
{


      class bovceSimpleImageWithLabelBox extends WPBakeryShortCode {

          function __construct() {
              add_action( 'init', array( $this, 'vc_bovce_mapping' ) );
          }


          public function vc_bovce_mapping() {

            if ( !defined( 'WPB_VC_VERSION' ) ) {
                return;
            }


            vc_map(

                array(
                    'name' => __('Simple Image with Label', 'bovce'),
                    'base' => 'bovce_siwl',
                    'class' => 'bovce_siwl',
                    'description' => __('Simple Image with Label VC box', 'bovce'),
                    'content_element' => true,
            				'show_settings_on_create' => true,
            				'category' => __('Me Elements', 'BOVCE'),
                    'html_template'  => BOVCE_DIR_HTML . '/bovce_simple_image_with_label.php',
                    'icon' => 'bovce_simple_image_with_label',
                    'params' => array(

                        array(
                            'type' => 'textfield',
                            'holder' => 'div',
                            'class' => 'siwl-title',
                            'heading' => __( 'Title', 'bovce' ),
                            'param_name' => 'siwltitle',
                        ),

                        array(
                            'type' => 'textfield',
                            'class' => 'siwl-link',
                            'heading' => __( 'Link', 'bovce' ),
                            'param_name' => 'siwllink',
                        ),

                        array(
                            'type' => 'colorpicker',
                            'class' => 'siwl-title-bg-color',
                            'heading' => __( 'Title Background Color', 'bovce' ),
                            'param_name' => 'siwltitlebgcolor',
                            'admin_label' => false,
                            'value' => __( '#000000', 'bovce' ),
                        ),

                        array(
                            'type' => 'colorpicker',
                            'class' => 'siwl-title-color',
                            'heading' => __( 'Title Color', 'bovce' ),
                            'param_name' => 'siwltitlecolor',
                            'admin_label' => false,
                            'value' => __( '#ffffff', 'bovce' ),
                        ),

                        array(
                            'type' => 'textfield',
                            'class' => 'siwl-title-font-size',
                            'heading' => __( 'Title Font Size', 'bovce' ),
                            'param_name' => 'siwltitlefontsize',
                            'admin_label' => false,
                            'value' => __( '15px', 'bovce' ),
                        ),

                        array(
                            'type' => 'dropdown',
                            'class' => 'siwl-title-text-align',
                            'heading' => __( 'Title Text Alignment', 'bovce' ),
                            'param_name' => 'siwltitletextalign',
                            'admin_label' => false,
                            'value'       => array(
                              'Center'   => 'center',
                              'Left'   => 'left',
                              'Right'   => 'right'
                            ),
                        ),


                        array(
                            'type' => 'textfield',
                            'class' => 'siwl-title-padding',
                            'heading' => __( 'Title Padding', 'bovce' ),
                            'param_name' => 'siwltitlepadding',
                            'admin_label' => false,
                            'value' => __( '0px', 'bovce' ),
                        ),

                        array(
                            'type' => 'dropdown',
                            'class' => 'siwl-title-location',
                            'heading' => __( 'Title Location', 'bovce' ),
                            'param_name' => 'siwltitlelocation',
                            'admin_label' => false,
                            'value'       => array(
                              'Top'   => 'top',
                              'Bottom'   => 'bottom',
                              'Left'   => 'left',
                              'Right'   => 'right'
                            ),
                        ),

                        array(
                            'type' => 'attach_image',
                            'class' => 'siwl-image',
                            'heading' => __( 'Image', 'bovce' ),
                            'param_name' => 'siwlimage',
                            'admin_label' => false,
                        ),


                    )
                )
            );

          }



      }


      new bovceSimpleImageWithLabelBox();


      if(class_exists('WPBakeryShortCode'))
      {

        class WPBakeryShortCode_bovce_siwl extends WPBakeryShortCode {}

      }

}//end of if class exist
