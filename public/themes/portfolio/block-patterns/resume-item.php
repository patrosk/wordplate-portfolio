<?php

if (function_exists('register_block_pattern')) {

    register_block_pattern(
        'portfolio-theme/resume-item',
        [
            'title' => 'Resume item',
            'description' => 'A list item for building a resume.',
            'categories' => ['text'],
            'content' => '<!-- wp:group -->
            <div class="wp-block-group"><!-- wp:group {"backgroundColor":"pale-pink","textColor":"vivid-red"} -->
            <div class="wp-block-group has-vivid-red-color has-pale-pink-background-color has-text-color has-background"><!-- wp:heading -->
            <h2>Education / Employment - School / Company</h2>
            <!-- /wp:heading -->

            <!-- wp:separator {"color":"black","align":"center","className":"is-style-wide"} -->
            <hr class="wp-block-separator aligncenter has-text-color has-background has-black-background-color has-black-color is-style-wide"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph -->
            <p>2021-2023</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p>Description</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:group --></div>
            <!-- /wp:group -->',
        ]
    );
}
