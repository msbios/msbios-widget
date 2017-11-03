<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

use MSBios\Widget\Initializer\WidgetAwareInitializer;

return [

    'widget_manager' => [
        'initializers' => [
            new WidgetAwareInitializer
        ]
    ],

    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class
        ],

    ],

    'view_helpers' => [
        'factories' => [
            View\Helper\WidgetHelper::class =>
                Factory\WidgetHelperFactory::class
        ],
        'aliases' => [
            'widget' => View\Helper\WidgetHelper::class
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
            // 'key' => 'path/to/file.template_suffix'
        ],

        /**
         *
         */
        'template_path_stack' => [
            // path/to/template
        ],
    ],
];
