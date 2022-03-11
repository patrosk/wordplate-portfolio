<?php
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_project_info',
        'title' => 'Project info',
        'fields' => [
            [
                'key' => 'field_client_name',
                'label' => 'Project client',
                'name' => 'client_name',
                'type' => 'text',
            ],
            [
                'key' => 'field_client_website',
                'label' => 'Project client website',
                'name' => 'client_website',
                'type' => 'url',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'project',
                ]
            ]
        ]

    ));

endif;
