<?php
/*
 * Template Name: Contact Us
 */

get_header();
?>
<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
<?php 
    include_once(PARTS_DIR .'/contact-us/section_1.php');
    include_once(PARTS_DIR .'/contact-us/section_2.php');
    include_once(PARTS_DIR .'/contact-us/section_3.php');
?>
</main>
<?php
include_once(INCLUDES_DIR .'/inc.modal.php');
get_footer();
?>