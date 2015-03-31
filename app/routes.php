<?php 

/* USER */
$app->get('/', 					function () use ($app) 		{ (new Home())->welcome(); 						})->name('welcome');
$app->get('/home/', 			function () use ($app) 		{ (new Home())->index(); 						})->name('home');
$app->get('/dosen/', 			function () use ($app) 		{ (new Home())->tampildosen(); 					})->name('dosen');
$app->get('/matakuliah/', 		function () use ($app) 		{ (new Home())->tampilmatkul(); 				})->name('matakuliah');
$app->get('/logout/', 			function () use ($app) 		{ (new Home())->logout(); 						})->name('logout');
$app->get('/rinciandosen/:id',	function ($id) use ($app) 	{ (new Home())->tampilrinciandosen($id); 		})->name('rinciandosen');
$app->get('/rincianmatkul/:id', function ($id) use ($app) 	{ (new Home())->tampilrincianmatkul($id); 		})->name('rincianmatkul');
$app->get('/pencarian/:query', 	function ($query) use ($app){ (new Home())->tampilhasilpencarian($query); 	})->name('pencarian');

$app->post('/feedback/', 		function () use ($app)		{ (new Home())->welcome(); 						})->name('feedback');


/* ADMIN */
$app->get('/admin/cruddosen/', function () use ($app) 		{ (new Home())->tampilcruddosen(); 		})->name('cruddosen');
$app->get('/admin/cruddosen/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deletecruddosen($id); 		})->name('dosendelete');
$app->get('/admin/rudreview/', function () use ($app) 		{ (new Home())->tampilrudreview(); 		})->name('rudreview');
$app->get('/admin/rudreview/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deleterudreview($id); 		})->name('reviewdelete');
$app->get('/admin/rudkomentar/', function () use ($app) 		{ (new Home())->tampilrudkomentar(); 		})->name('rudkomentar');
$app->get('/admin/rudkomentar/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deleterudkomentar($id); 		})->name('komentardelete');
$app->get('/admin/crudpengguna/', function () use ($app) 		{ (new Home())->tampilcrudpengguna(); 		})->name('crudpengguna');
$app->get('/admin/crudpengguna/delete/:id', function ($npm) use ($app) 		{ (new Home($npm))->deletecrudpengguna($npm); 		})->name('penggunadelete');