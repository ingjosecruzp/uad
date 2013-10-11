<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Test\Controller\Test' => 'Test\Controller\TestController'
        ),
    ),
        'router' => array(
        'routes' => array(
            'test' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/test[/[:action]]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'controller' => 'Test\Controller\Test',
                                'action' => 'test'
                    ),
                ),
            ),
        ),
    ),
   'view_manager' => array(
        'template_path_stack' => array(
            'test' => __DIR__ . '/../view',
        ),
    ),
);