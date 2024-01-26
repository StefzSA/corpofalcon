<?php
/*
 * Template Name: Home
 */

get_header();

$home_var = get_fields();
?>

<main id="<?php echo $post_slug = get_post_field('post_name', get_post()); ?>">
    <?php 
    include_once(PARTS_DIR .'/home/hero.php');
    include_once(PARTS_DIR .'/home/hero-transition.php'); 
    include_once(PARTS_DIR .'/home/section-1.php');
    include_once(PARTS_DIR .'/home/section-2.php'); 
    //include_once(PARTS_DIR .'/home/section-3.php');
    include_once(PARTS_DIR .'/home/section-4.php'); 
    ?>
</main>

<?php
get_footer();
?>