<?php

/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 7/9/17
 * Time: 3:52 PM
 */

namespace Cart\Controllers;

use Slim\Views\Twig;
use Cart\Models\Flight;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController {
    public function index(Request $request, Response $response, Twig $view, Flight $flight) {
        $flights = $flight->get();

        return $view->render($response, 'home.twig', [
            'flights' => $flights
        ]);
    }
}