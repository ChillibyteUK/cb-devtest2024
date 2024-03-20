<?php
/*
Template Name: Templated Page
*/

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="container-xl">
    <h1><?=get_field('title')?></h1>

    <?php
echo apply_filters('the_content',get_the_content());
    ?>


    <div class="row py-5">
        <div class="col-md-4"><img src="<?=wp_get_attachment_image_url(get_field('image'),'full')?>"></div>
        <div class="col-md-8"><?=get_field('content')?></div>
    </div>

    <div class="d-flex justify-content-around">
    <?php
    foreach (get_field('related') as $r) {
        ?>
        <a href="<?=get_the_permalink($r)?>"><h2><?=get_the_title($r)?></h2></a>
        <?php
    }
    ?>
    </div>
</div>
<?php

get_footer();