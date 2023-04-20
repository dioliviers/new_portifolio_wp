<?php get_header(); ?>
    <?php 
        if(is_front_page()){
            the_title();
            the_content();
        };
    ?>
<?php get_footer(); ?>