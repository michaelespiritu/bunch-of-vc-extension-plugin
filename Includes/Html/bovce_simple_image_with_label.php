<?php

extract(
    shortcode_atts(
        array(
            'siwltitle'   => '',
            'siwllink'   => '',
            'siwltitlebgcolor'   => '',
            'siwltitlecolor'   => '',
            'siwltitlefontsize'   => '',
            'siwltitletextalign'   => '',
            'siwltitlepadding'   => '',
            'siwltitlelocation' => '',
            'siwlimage' => ''
        ),
        $atts
    )
);

$img = wp_get_attachment_image_src($siwlimage, "large");


$titlebgcolor = "background-color: none;";
$titlecolor = "color: #fff;";
$titlefontsize = "font-size: 13px;";
$titlepadding = "padding: 0px;";
$titletextalign = "text-align: center;";

$contentElement = "";

if( !empty($siwltitlecolor) ){

  $titlecolor = "color: {$siwltitlecolor};";

}

if( !empty($siwltitlepadding) ){

  $titlepadding = "padding: {$siwltitlepadding};";

}

if( !empty($siwltitletextalign) ){

  $titletextalign = "text-align: {$siwltitletextalign};";

}

if( !empty($siwltitlefontsize) ){

  $titlefontsize = "font-size: {$siwltitlefontsize};";

}

if( !empty($siwltitlebgcolor) ){

  $titlebgcolor = "background-color: {$siwltitlebgcolor}; ";

}

if( !empty($siwltitle) ){

  if(!empty($siwllink)){

    $siwltitle = "<div class='siwl-title' style='{$titlebgcolor}{$titletextalign}{$titlepadding}'><h3><a href='{$siwllink}' style='{$titlecolor}{$titlefontsize}'>{$siwltitle}</a></h3></div>";

  }else{

    $siwltitle = "<div class='siwl-title' style='{$titlebgcolor}{$titletextalign}{$titlepadding}'><h3 style='{$titlecolor}{$titlefontsize}'>{$siwltitle}</h3></div>";

  }


}

if( !empty($siwlimage) ){

  if(!empty($siwllink)){

    $siwlimage = "<div class='siwl-img'><a href='{$siwllink}'><img src='{$img[0]}'></a></div>";

  }else{

    $siwlimage = "<div class='siwl-img'><img src='{$img[0]}'></div>";

  }



}


    switch ($siwltitlelocation) {
      case 'top':

          $contentElement = $siwltitle;
          $contentElement .= $siwlimage;

        break;

      case 'bottom':

          $contentElement = $siwlimage;
          $contentElement .= $siwltitle;

        break;

      case 'left':
          $contentElement = "<div class='vc_row'>";

            $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-9'>";
              $contentElement .= $siwltitle;
            $contentElement .= "</div>";

            $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-3'>";
              $contentElement .= $siwlimage;
            $contentElement .= "</div>";

          $contentElement .= "</div>";
        break;

      case 'right':

      $contentElement = "<div class='vc_row'>";

          $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-3'>";
            $contentElement .= $siwlimage;
          $contentElement .= "</div>";

        $contentElement .= "<div class='vc_col-xs-12 vc_col-sm-12 vc_col-md-9'>";
          $contentElement .= $siwltitle;
        $contentElement .= "</div>";


      $contentElement .= "</div>";

        break;

      default:
          $contentElement = $siwltitle;
          $contentElement .= $siwlimage;
        break;
    }




?>


<div class='siwl-box'>

  <?php echo $contentElement; ?>

</div>
