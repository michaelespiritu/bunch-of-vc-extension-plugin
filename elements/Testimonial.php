<?php

/*
Element Description: Testimonials Box
Text Domain: bovce
*/


class bovceTestimonial {

    function __construct() {
        add_action( 'init', array( $this, 'testimonials_mapping' ) );
        add_shortcode( 'vc_testimonials', array( $this, 'testimonial_html' ) );
    }


    public function testimonials_mapping() {

      if ( !defined( 'WPB_VC_VERSION' ) ) {
          return;
      }


      vc_map(

          array(
              'name' => __('Testimonials Box', 'BOVCE'),
              'base' => 'vc_testimonials',
              'description' => __('Testimonials VC box', 'BOVCE'),
              'content_element' => true,
      				'show_settings_on_create' => true,
      				'category' => __('Me Elements', 'BOVCE'),
              'icon' => get_stylesheet_directory_uri().'/vc-elements/assets/vc_icon_testimonial.png',
              'params' => array(

                  array(
                      'type' => 'textarea_html',
                      'holder' => 'div',
                      'class' => 'testimonial',
                      'heading' => __( 'Testimonial', 'BOVCE' ),
                      'param_name' => 'content',
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Custom Group',
                  ),

                  array(
                      'type' => 'attach_image',
                      'class' => 'testimonial-image',
                      'heading' => __( 'Image', 'BOVCE' ),
                      'param_name' => 'testimonialimage',
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Custom Group',
                  ),

                  array(
                      'type' => 'textfield',
                      'class' => 'testimonial-class',
                      'heading' => __( 'Class', 'BOVCE' ),
                      'param_name' => 'testimonialclass',
                      'admin_label' => false,
                      'weight' => 0,
                      'group' => 'Custom Group',
                  ),

              )
          )
      );

    }



    public function testimonial_html( $atts , $content = null) {


      extract(
          shortcode_atts(
              array(
                  'testimonialimage'   => '',
                  'testimonialclass' => ''
              ),
              $atts
          )
      );

      $content = wpb_js_remove_wpautop($content, true);

      $html = "<div class='bovce-testimonial-box {$testimonialclass}'>";

        if( !empty($testimonialimage) ){

          $img = wp_get_attachment_image_src($testimonialimage, "large");
          $html .= "<p><img src='{$img[0]}' class='bovce-testimonial-image' style='width: 100%;'></p>";

        }

        if( !empty($content) ){

          $html .= "<div class='bovce-testimonial-body'>{$content}</div>";

        }


      $html .= "</div>";



      return $html;

    }

}


new bovceTestimonial;


if(class_exists('WPBakeryShortCode'))
{
	class WPBakeryShortCode_vc_testimonials extends WPBakeryShortCode {
	}
}
