<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 24.03.16
 * Time: 14:02
 */

return [
    'controllers' => [
        'invokables' => [
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        ]
    ],
    'router' => [
        'routes' => [
            'album' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/album[/][:action][/:id]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-z0-9_-]*',
                        'id' => '[0-9]+'
                    ],
                    'defaults' => [
                        'controller' => 'Album\Controller\Album',
                        'action' => 'index',
                    ]
                ]
            ]
        ]
    ],
    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
];