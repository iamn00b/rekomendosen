<?php 

$app->get('/', function () use ($app) 			{ (new Home())->welcome(); 		})->name('welcome');
$app->get('/home/', function () use ($app) 		{ (new Home())->index(); 		})->name('home');
$app->get('/logout/', function () use ($app) 	{ (new Home())->logout(); 		})->name('logout');
$app->get('/index', function () use ($app) 			{ 

	(new _MainController())->render('index.html');
})->name('welcome');