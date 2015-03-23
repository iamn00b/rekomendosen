<?php

$config['slim'] = [];

// Slim global mode
$config['slim']['global'] = [
  'mode' => SLIM_MODE,
  'view' => new \Slim\Views\Twig()
];

// Slim production mode
$config['slim']['production'] = [
  'debug' => false
];

// Slim development mode
$config['slim']['development'] = [
  'debug' => true,
  'log.level' => \Slim\Log::ERROR,
  'log.enabled' => true
];

// twig extensions
$config['twig']['extensions'] = [ new \Slim\Views\TwigExtension() ];