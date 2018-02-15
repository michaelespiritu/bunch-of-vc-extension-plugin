<?php

extract(
    shortcode_atts(
        array(
            'partnername'   => '',
            'title' => '',
            'phonenumber' => '',
            'email' => '',
            'partnersimage' => ''
        ),
        $atts
    )
);

$htmlimage = '';
$htmldetails = '';
$content = wpb_js_remove_wpautop($content, true);
$img = wp_get_attachment_image_src($partnersimage, "large");


$htmlimage = "<div class='vc_col-sm-3'>";
$htmlimage .= "<div  class='partner-image'><img src='{$img[0]}'></div>";
$htmlimage .= "</div>";

$htmldetails = "<div class='vc_col-sm-9'>";
$htmldetails .= "<h4 class='partner-name'>{$partnername}</h4>";
$htmldetails .= "<h6 class='partner-title'>{$title}</h6>";
$htmldetails .= "<p>{$content}</p>";
$htmldetails .= "<p class='partner-contact'>{$phonenumber}<br><a href='mailto: {$email}'>{$email}</a></p>";
$htmldetails .= "</div>";






?>


<div class="partners-box vc_row">

    <?php echo $htmlimage; ?>
    <?php echo $htmldetails; ?>

</div>
