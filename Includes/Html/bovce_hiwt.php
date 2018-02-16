<?php

extract(
    shortcode_atts(
        array(
            'link'   => '',
            'bgcolor' => '',
            'bgimage' => '',
    'css' => ''
        ),
        $atts
    )
);

$img = wp_get_attachment_image_src($bgimage, "large");

$content = wpb_js_remove_wpautop($content, true);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );


$href = vc_build_link( $link );

$hiwtbgcolor = ( !empty($bgcolor) ) ? $hiwtbgcolor = $bgcolor  :  $hiwtbgcolor = '#f48120'  ;



?>

<div class='<?php echo $css_class; ?>'>

  <a href='<?php echo $href['url']; ?>' >

    <div class='vc_hiwt_container' style='background-image: url(<?php echo $img[0]; ?>);'>

      <div class='vc_hiwt_container on-hover' data-bg='<?php echo $hiwtbgcolor; ?>' >

        <div class='vc_hiwt_content'>

          <div class='vc_hiwt_content_element'><?php echo $content; ?></div>

        </div>

      </div>

    </div><!-- /.vc_hiwt_container -->

  </a>

</div>
