<?php get_header(); ?>

<main role="main">
    <div class="container">
        <?php
        if (have_posts()) :
            printf('<h2>Search Results for: %s</h2>', get_search_query());
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;
            the_posts_pagination();
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
