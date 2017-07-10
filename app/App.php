<?php

/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 7/9/17
 * Time: 3:39 PM
 */

namespace Cart;

use DI\ContainerBuilder;
use DI\Bridge\Slim\App as DIBridge;

class App extends DIBridge {
    protected function configureContainer(ContainerBuilder $builder) {
        $builder->addDefinitions([
            'settings.displayErrorDetails' => true,
        ]);

        $builder->addDefinitions(__DIR__ . '/container.php');
    }
}