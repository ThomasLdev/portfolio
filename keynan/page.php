<?php get_header();?>

<section>

    <div class="container mt-5">

    <?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php the_content();?>

    <?php endwhile; else: endif;?>

    </div>

</section>

<?php get_footer();?>