<?php

/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 7/9/17
 * Time: 3:45 PM
 */

use function DI\get;
use Slim\Views\Twig;
use Cart\Models\Flight;
use Slim\Views\TwigExtension;
use Interop\Container\ContainerInterface;

return [
    'route' => get(Slim\Router::class),
    Twig::class => function (ContainerInterface $c) {
        $twig = new Twig(__DIR__ . '/../resources/views', [
            'cache' => false
        ]);

        $twig->addExtension(new TwigExtension(
            $c->get('route'),
            $c->get('request')->getUri()
        ));

        return $twig;
    },

    Flight::class => function (ContainerInterface $c) {
        return new Flight;
    },
];