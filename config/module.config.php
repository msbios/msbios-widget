<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use MSBios\Factory\ModuleFactory;

return [
    'controller_plugins' => [
        'factory' => [
            Controller\Plugin\WidgetPlugin::class =>
                Factory\WidgetInvokeFactory::class
        ],
        'aliases' => [
            'widget' =>
                Controller\Plugin\WidgetPlugin::class
        ]
    ],

    'widget_manager' => [
        'initializers' => [
            WidgetAwareInitializer::class =>
                new WidgetAwareInitializer
        ]
    ],

    'service_manager' => [
        'factories' => [
            Module::class =>
                ModuleFactory::class
        ],

    ],

    'view_helpers' => [
        'factories' => [
            View\Helper\WidgetHelper::class =>
                Factory\WidgetInvokeFactory::class
        ],
        'aliases' => [
            'widget' =>
                View\Helper\WidgetHelper::class
        ]
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
