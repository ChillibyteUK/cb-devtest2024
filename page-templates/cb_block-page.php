<?php
/*
Template Name: Block Page
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="container-xl">
    <?php

$order = array();

    foreach (get_fields(get_the_ID()) as $k => $v) {
        if( preg_match('/^(.*)_id$/',$k,$m)) {
            $order[$v] = $m[1];
        }
    }

    foreach ($order as $id => $block) {

        if ($block == 'title_block') {
            $x = get_field($block);
            
            ?>
    <h1><?=$x['title']?></h1>
            <?php
        }
        if ($block == 'text_block') {
            $x = get_field($block);
            ?>
    <div><?=$x['content']?></div>
            <?php
        }
        if ($block == 'text_image') {
            $x = get_field($block);
            ?>
    <div><img src="<?=wp_get_attachment_image_url($x['image'],'large')?>" width=130> <p><?=$x['content']?></p></div>
            <?php
        }

    }


    ?>
</div>
<?php

get_footer();