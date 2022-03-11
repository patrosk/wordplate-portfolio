<?php
$postType = get_field('latest-posts-post-type');
$numberOfPosts = get_field('latest-posts-number-of-posts');

$args = [
    'post_type' => $postType,
    'numberofposts' => $numberOfPosts,
    'order' => 'desc',
];

$latestPosts = get_posts($args); ?>

<div class="grid gap-5 grid-flow-col mt-8">
    <?php foreach ($latestPosts as $post) : ?>
        <a href="<?php echo get_the_permalink($post); ?>">
            <?php if ($image = get_the_post_thumbnail($post, 'large')) : ?>
                <?php echo $image ?>
            <?php endif; ?>
            <h3 class="text-2xl"><?php echo get_the_title($post); ?></h3>
        </a>
    <?php endforeach;
    wp_reset_postdata(); ?>
</div>


<h4><a href="<?= get_permalink(get_option('page_for_posts')) ?>">Go to Blog</a></h4>
