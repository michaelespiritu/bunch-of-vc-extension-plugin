<?php


/*
Element Description: Bulletin Board Box
Text Domain: bovce
*/

if(!class_exists('bovceBulletinBoardBox'))
{



  class bovceBulletinBoardBox extends WPBakeryShortCode {

      function __construct() {
          add_action( 'init', array( $this, 'bovce_bb_mapping' ) );
      }


      public function bovce_bb_mapping() {

        if ( !defined( 'WPB_VC_VERSION' ) ) {
            return;
        }


        vc_map(

            array(
                'name' => __('Bulletin Board Box', 'bovce'),
                'base' => 'bovce_bulletin_board',
                'class' => 'bovce_bulletin_board',
                'description' => __('Bulletin Board VC box', 'bovce'),
                'content_element' => true,
        				'show_settings_on_create' => true,
        				'category' => __('Me Elements', 'BOVCE'),
                'html_template'  => BOVCE_DIR_HTML . '/bovce_bulletin_board.php',
                'icon' => 'bovce_bulletin_board',
                'params' => array(
                        array(
                            'type' => 'textfield',
                            'holder' => 'div',
                            'class' => 'bovce-title',
                            'heading' => __( 'Title', 'bovce' ),
                            'param_name' => 'bovcetitle',
                        ),

                        array(
                            'type' => 'textarea_html',
                            'holder' => 'div',
                            'class' => 'bovce-content',
                            'heading' => __( 'Content', 'bovce' ),
                            'param_name' => 'content',
                        )

                    )

                )
            );


      }


  }


  new bovceBulletinBoardBox();

  if(class_exists('WPBakeryShortCode'))
  {

    class WPBakeryShortCode_bovce_bulletin_board extends WPBakeryShortCode {}

  }

}//end of if class exist
