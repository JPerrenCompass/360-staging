<?php
$css = '<style type="text/css">';
$css = $css.'#spacer'.$index.'{height:'.get_sub_field('desktop_height').'rem;}';

if(get_sub_field('fc_spacer_tablet_landscape_height')) {
    $css = $css.'@media(max-width:1024px){#spacer'.$index.'{height:'.get_sub_field('laptop_height').'rem;}}';
}
if(get_sub_field('fc_spacer_tablet_portrait_height')) {
    $css = $css.'@media(max-width:768px){#spacer'.$index.'{height:'.get_sub_field('tablet_height').'rem;}}';
}

if(get_sub_field('fc_spacer_mobile_height')) {
    $css = $css.'@media(max-width:575px){#spacer'.$index.'{height:'.get_sub_field('mobile_height').'rem;}}';
}

$css = $css.'</style>';
echo $css;
?>
<section class="full-width spacer" id="spacer<?php echo $index; ?>"></section>
