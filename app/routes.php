<?php 
 
/* USER */
$app->get('/', 					function () use ($app) 		{ (new HomeController())->welcome(); 						})->name('welcome');
$app->get('/home/', 			function () use ($app) 		{ (new HomeController())->index(); 						})->name('home');
$app->get('/logout/', 			function () use ($app) 		{ (new HomeController())->logout(); 						})->name('logout');
$app->get('/login/', 			function () use ($app) 		{ (new HomeController())->login(); 						})->name('login');

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

$app->get('/admin/admin-mata-kuliah/', function () use ($app) 		{ (new MataKuliahController())->tampilAdministrasiMataKuliah(); 		})->name('crudmatakuliah');
$app->post('/admin/admin-mata-kuliah/create/', 		function () use ($app)		{ (new MataKuliahController())->createMataKuliah(); 						})->name('matakuliahcreate');
$app->post('/admin/admin-mata-kuliah/update/:kodemk', 		function ($kodemk) use ($app)		{ (new MataKuliahController())->updateMataKuliah($kodemk); 		})->name('matakuliahupdate');
$app->get('/admin/admin-mata-kuliah/delete/:kodemk', function ($kodemk) use ($app) 		{ (new MataKuliahController($kodemk))->deleteMataKuliah($kodemk); 	})->name('matakuliahdelete');

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
$app->get('/admin/feedback/delete/:id', function ($id) use ($app) 		{ (new FeedbackController($id))->deleteAdministrasiFeedback($id); 		})->name('feedbackdelete');

$app->get('/admin/report/', function () use ($app) 		{ (new ReviewController())->tampilAdministrasiReport(); 		})->name('rreport');

// =======
// $app->get('/', function () use ($app) 			{ (new Home())->welcome(); 		})->name('welcome');
// $app->get('/home/', function () use ($app) 		{ (new Home())->index(); 		})->name('home');
// $app->get('/logout/', function () use ($app) 	{ (new Home())->logout(); 		})->name('logout');
// $app->get('/index', function () use ($app) 		{ (new _MainController())->render('index.html');	})->name('index');
// $app->get('/dosen', function () use ($app) 		{ (new _MainController())->render('dosen.html');	})->name('dosen');
// $app->get('/mata-kuliah', function () use ($app) { (new _MainController())->render('mata-kuliah.html');})->name('mata-kuliah');
// $app->get('/detil-mata-kuliah/', function () use ($app) { (new _MainController())->render('detil-mata-kuliah.html');	})->name('detil-mata-kuliah');
// $app->get('/detil-dosen/', function () use ($app) 		{ (new _MainController())->render('detil-dosen.html');	})->name('detil-dosen');
// $app->post('/feedback/', function () use ($app)	{ (new Home())->welcome(); 		})->name('feedback');
// $app->post('/tutorial/', function () use ($app)	{ (new Home())->welcome(); 		})->name('tutorial');
// $app->get('/hasil-pencarian/', function () use ($app) 	{ (new _MainController())->render('hasil-pencarian.html');	})->name('hasil-pencarian');
// $app->get('/admin-profil-dosen/', function () use ($app) 	{ (new _MainController())->render('admin-profil-dosen.html');	})->name('admin-profil-dosen');
// $app->get('/admin-mata-kuliah/', function () use ($app) 	{ (new _MainController())->render('admin-mata-kuliah.html');	})->name('admin-mata-kuliah');
// $app->get('/admin-pengguna/', function () use ($app) 	{ (new _MainController())->render('admin-pengguna.html');	})->name('admin-pengguna');
// $app->get('/admin-review/', function () use ($app) 	{ (new _MainController())->render('admin-review.html');	})->name('admin-review');
// $app->get('/admin-komentar/', function () use ($app) 	{ (new _MainController())->render('admin-komentar.html');	})->name('admin-komentar');
// $app->get('/admin-report/', function () use ($app) 	{ (new _MainController())->render('admin-report.html');	})->name('admin-report');
// $app->get('/admin-feedback/', function () use ($app) 	{ (new _MainController())->render('admin-feedback.html');	})->name('admin-feedback');
// $app->get('/admin-statistics/', function () use ($app) 	{ (new _MainController())->render('admin-statistics.html');	})->name('admin-statistics');
// $app->get('/admin/', function () use ($app) { (new _MainController())->render('admin.html');	})->name('admin');
// >>>>>>> 1400809c6b5aa9e2431516349927adcdbeb89cc4
