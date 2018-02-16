<?php

extract(
    shortcode_atts(
        array(
            'bovcetitle'   => '',
            'bovceicon' => '',
            'bovcetitlecolor' => '',
            'bovcetitlefontsize' => '',
            'bovceiconposition' => '',
            'css' => ''
        ),
        $atts
    )
);


$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$fontsize = ( !empty( $bovcetitlefontsize ) ) ? "font-size: {$bovcetitlefontsize};" : "font-size: 15px;" ;
$fontcolor = ( !empty( $bovcetitlecolor ) ) ? "color: {$bovcetitlecolor};" : "color: #ffffff;" ;

$text = "<p style='{$fontsize}{$fontcolor}'>{$bovcetitle}</p>";
$icon = "<p style='{$fontcolor}'><i class='{$bovceicon}'></i></p>";

$contentElement = "";

$bovceiconposition = ( empty($bovceiconposition) ) ? "top" : $bovceiconposition;

switch ($bovceiconposition) {
  case 'top':

    $contentElement = $icon;
    $contentElement .= $text;

    break;

  case 'bottom':

    $contentElement = $text;
    $contentElement .= $icon;

    break;

  case 'left':
    $contentElement = "<div class='vc_row'>";

      $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-9'>";
      $contentElement .= $text;
      $contentElement .= "</div>";

      $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-3'>";
      $contentElement .= $icon;
      $contentElement .= "</div>";

    $contentElement .= "</div>";
    break;

  case 'right':

  $contentElement = "<div class='vc_row'>";

    $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-3'>";
      $contentElement .= $icon;
    $contentElement .= "</div>";

    $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-9'>";
    $contentElement .= $text;
    $contentElement .= "</div>";


  $contentElement .= "</div>";

    break;

  default:
    $contentElement = $text;
    $contentElement .= $icon;
    break;
  }





?>


<div class='<?php echo $css_class; ?>'>


  <?php echo $contentElement;  ?>

</div><!-- /.iwit -->
