
<?php get_header();?>


<?php while(have_posts()):the_post();?>
<?php the_content();?>
<?Php endwhile;?>

 <?php get_footer();?>