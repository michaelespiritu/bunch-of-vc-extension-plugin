<?php

extract(
    shortcode_atts(
        array(
          'bovcetextalignment' => '',
          'css' => ''
        ),
        $atts
    )
);


$content = wpb_js_remove_wpautop($content, true);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$alignment = ( !empty( $spdmtrtextalignment ) ) ? "text-align: {$spdmtrtextalignment};" : "text-align: center;" ;






?>

<div class='<?php echo $css_class; ?>' style='<?php echo $alignment; ?>'>

  <div class='spdmtr'>
    <span class='speedometer'>
    </span><span class='needle'></span>
  </div>

  <div class='spdmtr-content'><?php echo $content ?></div>

<div>
