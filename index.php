<?php get_header(); ?>
<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h3>
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
            </h3>
            <p>
                <?php echo get_the_excerpt() ?> <a href="<?php the_permalink(); ?>">Lanjut</a>
            </p>

            <p class="info_meta">
                <?php the_author();
                echo ' || ';
                the_time('F j, Y'); ?> at <?php the_time('g:i a');
                                            echo ' || ';
                                            the_category();
                                            ?>
            </p>

    <?php
        endwhile;
    else :
        echo 'tidak ada post';
    endif;
    ?>
</main>
<aside>
    <?php dynamic_sidebar('sidebar1'); ?>
</aside>
<?php get_footer(); ?>