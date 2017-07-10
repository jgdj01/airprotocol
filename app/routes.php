<?php

/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 7/9/17
 * Time: 3:51 PM
 */

$app->get('/', ['Cart\Controllers\HomeController', 'index'])->setName('home');