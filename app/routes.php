<?php 


$app->get('/', 					function () use ($app) 		{ (new Home())->welcome(); 						})->name('welcome');
$app->get('/home/', 			function () use ($app) 		{ (new Home())->index(); 						})->name('home');
$app->get('/dosen/', 			function () use ($app) 		{ (new Home())->tampildosen(); 					})->name('dosen');
$app->get('/matakuliah/', 		function () use ($app) 		{ (new Home())->tampilmatkul(); 				})->name('matakuliah');
$app->get('/logout/', 			function () use ($app) 		{ (new Home())->logout(); 						})->name('logout');
$app->get('/rinciandosen/:id',	function ($id) use ($app) 	{ (new Home())->tampilrinciandosen($id); 		})->name('rinciandosen');
$app->get('/rincianmatkul/:id', function ($id) use ($app) 	{ (new Home())->tampilrincianmatkul($id); 		})->name('rincianmatkul');
$app->get('/pencarian/:query', 	function ($query) use ($app){ (new Home())->tampilhasilpencarian($query); 	})->name('pencarian');

$app->post('/feedback/', 		function () use ($app)		{ (new Home())->welcome(); 						})->name('feedback');

