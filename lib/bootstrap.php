<?php

/*
 * SLIM INSTANTIATION
 */

// Start php session.
session_cache_limiter(false);
session_start();

// Require definition
require_once 'define.php';

// Require vendors (Slim, Eloquent, etc.).
require_once VENDOR_PATH . 'autoload.php';

// Include configuration files
foreach (glob(APP_PATH . 'config/*.php') as $configs) {
	require_once $configs;
}

// include library classes
require_once 'controller.php';
require_once 'model.php';

// Instantiate app
$app = new Slim\Slim($config['slim']['global']);

$app->configureMode('production', function () use ($app, $config) {
	$app->config($config['slim']['production']);
});

$app->configureMode('development', function () use ($app, $config) {
	$app->config($config['slim']['development']);
});

// Enabling Twig extensions
$view = $app->view();
$view->parserExtensions = $config['twig']['extensions'];

/*
 * INCLUDES
 */

// Include models
foreach (glob(APP_PATH . 'models/*.php') as $model) {
  require_once $model;
}

// Include middlewares
foreach (glob(APP_PATH . 'middlewares/*.php') as $middleware) {
  require_once $middleware;
}

// Include controllers
foreach (glob(APP_PATH . 'controllers/*.php') as $controller) {
  require_once $controller;
}

// Include default routes
require_once APP_PATH . 'routes.php';