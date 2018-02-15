<?php

$attr = (
    shortcode_atts(
        array(
            'testimonialimage'   => '',
            'testimonialclass' => '',
        ),
        $atts
    )
);

$contentvalue = wpb_js_remove_wpautop($content, true);
$img = wp_get_attachment_image_src($attr['testimonialimage'], "large");
$class = $attr['testimonialclass'];
$htmlimage = '';
$htmlcontent = '';

if( !empty($attr['testimonialimage']) )
{

  $htmlimage = "<p><img src='{$img[0]}' class='bovce-testimonial-image' style='width: 100%;'></p>";

}


if( !empty($content) )
{

  $htmlcontent = "<div class='bovce-testimonial-body'>{$content}</div>";

}

?>

<div class="bovce-testimonial-box <?php echo $class ?>">

  <?php echo $htmlimage; ?>
  <?php echo $htmlcontent; ?>

</div>
