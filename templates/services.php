<?php
/*
 * Template Name: Services
 */

get_header();

$template_fields = get_fields();
?>

<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
    <?php 
    include_once(PARTS_DIR .'/services/section_1.php');
    include_once(PARTS_DIR .'/services/section_2.php');
    // include_once(PARTS_DIR .'/services/section_3.php');
    // include_once(PARTS_DIR .'/services/section_4.php');
    // include_once(PARTS_DIR .'/services/section_5.php');
    ?>
</main>

<?php
get_footer();
?>