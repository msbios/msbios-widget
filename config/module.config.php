<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Widget;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class,
            PhpRendererInterface::class =>
                Factory\PhpRendererFactory::class,
            ResolverInterface::class =>
                Factory\ResolverFactory::class,
            TemplatePathStackInterface::class =>
                Factory\TemplatePathStackFactory::class,
            TemplateMapResolverInterface::class =>
                Factory\TemplateMapResolverFactory::class
        ],
        'aliases' => [
            'WidgetRenderer' =>
                PhpRendererInterface::class,
            'WidgetResolver' =>
                ResolverInterface::class,
            'WidgetTemplatePathStack' =>
                TemplatePathStackInterface::class,
            'WidgetTemplateMapResolver' =>
                TemplateMapResolverInterface::class
        ]
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
        'default_template_suffix' => 'phtml',
        'template_map' => [
        ],
        'template_path_stack' => [
        ],
    ],
];
