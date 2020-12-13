<?php
get_header();
?>

<main id="main" class="site-main" role="main">
<?php
    if (have_posts()):
        while(have_posts()): the_post();
            get_template_part('template-parts/content-landingpage');
        endwhile;
    endif;
?>
</main>
<?php
get_footer();
?>