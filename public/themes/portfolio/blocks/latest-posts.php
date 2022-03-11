<?php

add_action('acf/init', function () {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name'              => 'latest-posts',
            'title'             => __('custom latest posts'),
            'description'       => __('A block that displays latest posts'),
            'render_template'   => 'block-templates/latest-posts.php',
            'category'          => 'formatting',
            'icon'              => 'megaphone',
            'keywords'          => array('posts')
        ]);
    }
});

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        [
            'key' => 'field_latest_posts_post_type',
            'name' => 'latest_posts_post_type',
            'label' => 'Post type',
            'type' => 'select',
            'choices' => [
                'post' => 'post',
                'project' => 'project'
            ],
        ],
        [
            'key' => 'field_latest_posts_number_of_posts',
            'name' => 'latest_posts_number_of_posts',
            'label' => 'Number of posts',
            'type' => 'number',
            'default_value' => 3,
            'min' => 1,
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/latest-posts',
                ],
            ],
        ],
    ]);
}
