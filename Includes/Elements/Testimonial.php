<?php

/*
Element Description: Testimonials Box
Text Domain: bovce
*/

if(!class_exists('bovcePartnersBox'))
{

  class bovceTestimonial {

      function __construct() {
          add_action( 'init', array( $this, 'testimonials_mapping' ) );
      }


      public function testimonials_mapping() {

        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }


        vc_map(

            array(
                'name' => __('Testimonials Box', 'BOVCE'),
                'base' => 'bovce_testimonials',
                'class' => 'bovce_testimonials',
                'description' => __('Testimonials VC box', 'BOVCE'),
                'content_element' => true,
        				'show_settings_on_create' => true,
        				'category' => __('Me Elements', 'BOVCE'),
                'html_template'           => BOVCE_DIR . '/Includes/Html/bovce_testimonials.php',
                'icon' => 'vc_testimonials',
                'params' => array(

                    array(
                        'type' => 'textarea_html',
                        'holder' => 'div',
                        'class' => 'testimonial',
                        'heading' => __( 'Testimonial', 'BOVCE' ),
                        'param_name' => 'content',
                    ),

                    array(
                        'type' => 'attach_image',
                        'class' => 'testimonial-image',
                        'heading' => __( 'Image', 'BOVCE' ),
                        'param_name' => 'testimonialimage',
                    ),

                    array(
                        'type' => 'textfield',
                        'class' => 'testimonial-class',
                        'heading' => __( 'Class', 'BOVCE' ),
                        'param_name' => 'testimonialclass',
                    ),

                )
            )
        );

      }


  }




  new bovceTestimonial;


  if(class_exists('WPBakeryShortCode'))
  {

  	class WPBakeryShortCode_bovce_testimonials extends WPBakeryShortCode {}

  }

}
