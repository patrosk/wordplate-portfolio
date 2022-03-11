<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <span><?php the_date(); ?></span>

        <?php the_post_thumbnail() ?>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <div class="previous-next">
        <span><?= get_previous_post_link() ?></span>
        <span><?= get_next_post_link() ?></span>
    </div>

<?php endif; ?>

<?php get_footer(); ?>