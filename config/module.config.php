<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use MSBios\Factory\ModuleFactory;

return [
    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\Plugin::class =>
                Factory\WidgetInvokeFactory::class
        ],
        'aliases' => [
            'widget' =>
                Controller\Plugin\Plugin::class
        ]
    ],

    'widget_manager' => [
        'initializers' => [
            RendererAwareInitializer::class =>
                new RendererAwareInitializer
        ]
    ],

    'service_manager' => [
        'factories' => [
            Module::class =>
                ModuleFactory::class
        ],

    ],

    Module::class => [

        /**
         *
         */
        'default_template_suffix' => 'phtml',

        /**
         *
         */
        'template_map' => [
            // ...
        ],

        /**
         *
         */
        'template_path_stack' => [
            // ...
        ],
    ],
];
