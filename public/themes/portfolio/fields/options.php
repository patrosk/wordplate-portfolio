<?php
if (function_exists('acf_add_options_page')) :

    acf_add_options_page(
        array(
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title'     => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'    => 'theme-general-settings',
        )
    );

endif;

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_options',
        'title' => 'Options',
        'fields' => [
            [
                'key' => 'field_email',
                'label' => 'Email',
                'name' => 'email',
                'type' => 'email',
            ],
            [
                'key' => 'field_contact',
                'label' => 'Contact',
                'name' => 'contact',
                'type' => 'text',
            ],
            [
                'key' => 'field_copyright',
                'label' => 'Copyright',
                'name' => 'copyright',
                'default_value' => '©',
                'type' => 'text',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-general-settings',
                ]
            ]
        ]

    ));

endif;
