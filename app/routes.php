<?php 

$app->get('/', function () use ($app) 			{ (new Home())->welcome(); 		})->name('welcome');
$app->get('/home/', function () use ($app) 		{ (new Home())->index(); 		})->name('home');
$app->get('/dosen/', function () use ($app) 	{ (new Home())->tampilandosen(); 		})->name('home');
$app->get('/logout/', function () use ($app) 	{ (new Home())->logout(); 		})->name('logout');

$app->get('/admin/crudmatkul/', function () use ($app) 	{ (new Home())->tampilcrudmatkul(); })->name('home');
$app->get('/admin/crudmatkul/delete/:id', function ($id) use ($app) 	{ (new Home())->deletecrudmatkul(id); })->name('matkuldelete');