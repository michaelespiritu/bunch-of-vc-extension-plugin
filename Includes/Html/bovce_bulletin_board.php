<?php

extract(
    shortcode_atts(
        array(
            'bovcetitle'   => ''
        ),
        $atts
    )
);

$content = wpb_js_remove_wpautop($content, true);
$title = "";
$contentElement = "";

if( !empty($bovcetitle) ){

  $title = "<div class='bb-title'><h3>{$bovcetitle}</h3></div>";

}

if( !empty($content) ){

  $contentElement = "<div class='bb-content'>{$content}</div>";

}




?>

<div class='bb-box'>

  <?php echo $title; ?>
  <?php echo $contentElement; ?>

</div>
