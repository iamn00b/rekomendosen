<?php 
 
/* USER */
$app->get('/', 					function () use ($app) 		{ (new HomeController())->welcome(); 						})->name('welcome');
$app->get('/home/', 			function () use ($app) 		{ (new HomeController())->index(); 						})->name('home');
$app->get('/logout/', 			function () use ($app) 		{ (new HomeController())->logout(); 						})->name('logout');

$app->get('/dosen/', 			function () use ($app) 		{ (new DosenController())->tampilDaftarDosen(); 					})->name('dosen');
$app->get('/dosen/:id',	function ($id) use ($app) 	{ (new DosenController())->tampilRincianDosen($id); 		})->name('rinciandosen');

$app->post('/review/baik/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahReviewBaik($id); 		})->name('reviewbaik');
$app->post('/review/buruk/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahReviewBuruk($id); 		})->name('reviewburuk');
$app->post('/komentar/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahKomentar($id); 		})->name('komentar');
$app->get('/upvote/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahUpvote($id); 		})->name('upvote');
$app->get('/downvote/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahDownvote($id); 		})->name('downvote');
$app->get('/report/:id', function ($id) use ($app) 		{ (new ReviewController())->beriReport($id); 		})->name('report');

$app->get('/matakuliah/', 		function () use ($app) 		{ (new MataKuliahController())->tampilDaftarMataKuliah(); 		})->name('matakuliah');
$app->get('/matakuliah/:id', function ($id) use ($app) 	{ (new MataKuliahController())->tampilRincianMataKuliah($id); 		})->name('rincianmatakuliah');

$app->get('/pencarian/', 	function () use ($app){ (new PencarianController())->tampilHasilPencarian(); 	})->name('pencarian');
$app->post('/feedback/', 		function () use ($app)		{ (new FeedbackController())->tambahFeedback(); 						})->name('feedback');


/* ADMIN */
$app->get('/admin/', function() use ($app) { (new HomeController())->tampilAdministrasiStatistik(); })->name('statistik');

$app->get('/admin/dosen/', function () use ($app) 		{ (new DosenController())->tampilAdministrasiDosen(); 		})->name('cruddosen');
$app->post('/admin/dosen/create/', 		function () use ($app)		{ (new DosenController())->createDosen(); 				})->name('dosencreate');
$app->post('/admin/dosen/update/:id', 		function ($id) use ($app)		{ (new DosenController())->updateDosen($id); 		})->name('dosenupdate');
$app->get('/admin/dosen/delete/:id', function ($id) use ($app) 		{ (new DosenController($id))->deleteDosen($id); 	})->name('dosendelete');

$app->get('/admin/matakuliah/', function () use ($app) 		{ (new MataKuliahController())->tampilAdministrasiMataKuliah(); 		})->name('crudmatakuliah');
$app->post('/admin/matakuliah/create/', 		function () use ($app)		{ (new MataKuliahController())->createMataKuliah(); 						})->name('matakuliahcreate');
$app->post('/admin/matakuliah/update/:kodemk', 		function ($kodemk) use ($app)		{ (new MataKuliahController())->updateMataKuliah($kodemk); 		})->name('matakuliahupdate');
$app->get('/admin/matakuliah/delete/:kodemk', function ($kodemk) use ($app) 		{ (new MataKuliahController())->deleteMataKuliah($kodemk); 	})->name('matakuliahdelete');

$app->get('/admin/review/', function () use ($app) 		{ (new ReviewController())->tampilAdministrasiReview(); 		})->name('rudreview');
$app->get('/admin/review/delete/:id', function ($id) use ($app) 		{ (new ReviewController($id))->deleteReview($id); 		})->name('reviewdelete');
$app->post('/admin/review/update/:id', 		function ($id) use ($app)		{ (new ReviewController())->updateReview($id); 						})->name('reviewupdate');

$app->get('/admin/komentar/', function () use ($app) 		{ (new ReviewController())->tampilAdministrasiKomentar(); 		})->name('rudkomentar');
$app->get('/admin/komentar/delete/:id', function ($id) use ($app) 		{ (new ReviewController($id))->deleteKomentar($id); 		})->name('komentardelete');
$app->post('/admin/komentar/update/:id', 		function ($id) use ($app)		{ (new ReviewController())->updateKomentar($id); 						})->name('komentarupdate');

$app->get('/admin/pengguna/', function () use ($app) 		{ (new PenggunaController())->tampilAdministrasiPengguna(); 		})->name('crudpengguna');
$app->post('/admin/pengguna/create/', 		function () use ($app)		{ (new PenggunaController())->createPengguna(); 				})->name('penggunacreate');
$app->post('/admin/pengguna/update/:npm', 		function ($npm) use ($app)		{ (new PenggunaController())->updatePengguna($npm); 	})->name('penggunaupdate');
$app->get('/admin/pengguna/delete/:npm', function ($npm) use ($app) 		{ (new PenggunaController())->deletePengguna($npm); 		})->name('penggunadelete');

$app->get('/admin/feedback/', function () use ($app) 		{ (new FeedbackController())->tampilAdministrasiFeedback(); 		})->name('rdfeedback');
$app->get('/admin/feedback/delete/:id', function ($id) use ($app) 		{ (new FeedbackController($id))->deleteFeedback($id); 		})->name('feedbackdelete');

$app->get('/admin/report/', function () use ($app) 		{ (new ReviewController())->tampilAdministrasiReport(); 		})->name('rreport');
