<?php 

/* USER */
$app->get('/', 					function () use ($app) 		{ (new Home())->welcome(); 						})->name('welcome');
$app->get('/home/', 			function () use ($app) 		{ (new Home())->index(); 						})->name('home');
$app->get('/dosen/', 			function () use ($app) 		{ (new Home())->tampildosen(); 					})->name('dosen');
$app->get('/matakuliah/', 		function () use ($app) 		{ (new Home())->tampilmatkul(); 				})->name('matakuliah');
$app->get('/logout/', 			function () use ($app) 		{ (new Home())->logout(); 						})->name('logout');
$app->get('/rinciandosen/:id',	function ($id) use ($app) 	{ (new Home())->tampilrinciandosen($id); 		})->name('rinciandosen');
$app->post('/review/baik/:nip', function ($nip) use ($app) 		{ (new Home())->addreviewbaik($nip); 		})->name('reviewbaik');
$app->post('/review/buruk/:nip', function ($nip) use ($app) 		{ (new Home())->addreviewburuk($nip); 		})->name('reviewburuk');
$app->post('/komentar/:id', function ($id) use ($app) 		{ (new Home())->addkomentar($id); 		})->name('komentar');
$app->get('/upvote/:id', function ($id) use ($app) 		{ (new Home($id))->addupvote($id); 		})->name('upvote');
$app->get('/downvote/:id', function ($id) use ($app) 		{ (new Home($id))->adddownvote($id); 		})->name('downvote');
$app->get('/rincianmatkul/:id', function ($id) use ($app) 	{ (new Home())->tampilrincianmatkul($id); 		})->name('rincianmatkul');
$app->get('/pencarian/:query', 	function ($query) use ($app){ (new Home())->tampilhasilpencarian($query); 	})->name('pencarian');
$app->post('/feedback/', 		function () use ($app)		{ (new Home())->isifeedback(); 						})->name('feedback');


/* ADMIN */
$app->get('/admin/cruddosen/', function () use ($app) 		{ (new Home())->tampilcruddosen(); 		})->name('cruddosen');
$app->get('/admin/cruddosen/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deletecruddosen($id); 		})->name('dosendelete');
$app->post('/admin/cruddosen/create/', 		function () use ($app)		{ (new Home())->createcruddosen(); 						})->name('dosencreate');
$app->post('/admin/cruddosen/update/:id', 		function ($id) use ($app)		{ (new Home())->updatecruddosen($id); 						})->name('dosenupdate');
$app->get('/admin/crudmatakuliah/', function () use ($app) 		{ (new Home())->tampilcrudmatakuliah(); 		})->name('crudmatakuliah');
$app->get('/admin/crudmatakuliah/delete/:kodemk', function ($kodemk) use ($app) 		{ (new Home($kodemk))->deletecrudmatakuliah($kodemk); 		})->name('matakuliahdelete');
$app->post('/admin/crudmatakuliah/create/', 		function () use ($app)		{ (new Home())->createcrudmatakuliah(); 						})->name('matakuliahcreate');
$app->post('/admin/crudmatakuliah/update/:kodemk', 		function ($kodemk) use ($app)		{ (new Home())->updatecrudmatakuliah($kodemk); 						})->name('matakuliahupdate');
$app->get('/admin/rudreview/', function () use ($app) 		{ (new Home())->tampilrudreview(); 		})->name('rudreview');
$app->get('/admin/rudreview/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deleterudreview($id); 		})->name('reviewdelete');
$app->post('/admin/rudreview/update/:id', 		function ($id) use ($app)		{ (new Home())->updaterudreview($id); 						})->name('reviewupdate');
$app->get('/admin/rudkomentar/', function () use ($app) 		{ (new Home())->tampilrudkomentar(); 		})->name('rudkomentar');
$app->get('/admin/rudkomentar/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deleterudkomentar($id); 		})->name('komentardelete');
$app->post('/admin/rudkomentar/update/:id', 		function ($id) use ($app)		{ (new Home())->updaterudkomentar($id); 						})->name('komentarupdate');
$app->get('/admin/crudpengguna/', function () use ($app) 		{ (new Home())->tampilcrudpengguna(); 		})->name('crudpengguna');
$app->get('/admin/crudpengguna/delete/:npm', function ($npm) use ($app) 		{ (new Home($npm))->deletecrudpengguna($npm); 		})->name('penggunadelete');
$app->post('/admin/crudpengguna/create/', 		function () use ($app)		{ (new Home())->createcrudpengguna(); 						})->name('penggunacreate');
$app->post('/admin/crudpengguna/update/:npm', 		function ($npm) use ($app)		{ (new Home())->updatecrudpengguna($npm); 						})->name('penggunaupdate');
$app->get('/admin/rdfeedback/', function () use ($app) 		{ (new Home())->tampilrdfeedback(); 		})->name('rdfeedback');
$app->get('/admin/rdfeedback/delete/:id', function ($id) use ($app) 		{ (new Home($id))->deleterdfeedback($id); 		})->name('feedbackdelete');
$app->get('/admin/melihatreport/', function () use ($app) 		{ (new Home())->tampilreport(); 		})->name('rreport');
$app->get('/admin/melihatstatistik/', function () use ($app) 		{ (new Home())->tampilstatistik(); 		})->name('rstatistik');
