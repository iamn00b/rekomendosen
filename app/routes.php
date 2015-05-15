<?php 

$authenticate = function( $role = Pengguna::DOSEN) {
	return function () use ($role) {

		$authenticated = true;
        switch ($role) {
        	case Pengguna::ADMINISTRATOR: $authenticated = Auth::isAdministrator(); break;
        	case Pengguna::MAHASISWA: $authenticated = Auth::isAktif(); break;
        	case Pengguna::DOSEN: $authenticated = Auth::isLogin(); break;
        	default: $authenticated = false;
        }

        if (!$authenticated) {
        	// TODO : redirect
        }
    };
};

/* 404 */
$app->notFound(function () {

	(new _MainController)->renderTanpaLogin('404.html');

});
 
/* USER */
$app->get('/', 					function () use ($app) 		{ (new HomeController())->welcome(); 						})->name('welcome');
$app->get('/home', 			function () use ($app) 		{ (new HomeController())->index(); 						})->name('home');
$app->get('/logout', 			function () use ($app) 		{ (new HomeController())->logout(); 						})->name('logout');

$app->get('/dosen', 			function () use ($app) 		{ (new DosenController())->tampilDaftarDosen(); 					})->name('dosen');
$app->get('/dosen/:id',	function ($id) use ($app) 	{ (new DosenController())->tampilRincianDosen($id); 		})->name('rinciandosen');

$app->post('/komentar/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahKomentar($id); 		})->name('komentar');
$app->get('/upvote/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahUpvote($id); 		})->name('upvote');
$app->get('/downvote/:id', function ($id) use ($app) 		{ (new ReviewController())->tambahDownvote($id); 		})->name('downvote');
$app->get('/report/:id', function ($id) use ($app) 		{ (new ReviewController())->beriReport($id); 		})->name('report');

$app->get('/matakuliah', 		function () use ($app) 		{ (new MataKuliahController())->tampilDaftarMataKuliah(); 		})->name('matakuliah');
$app->get('/matakuliah/:id', function ($id) use ($app) 	{ (new MataKuliahController())->tampilRincianMataKuliah($id); 		})->name('rincianmatakuliah');

$app->get('/pencarian', 	function () use ($app){ (new PencarianController())->tampilHasilPencarian(); 	})->name('pencarian');
$app->post('/feedback', 		function () use ($app)		{ (new FeedbackController())->tambahFeedback(); 						})->name('feedback');

/* API */
$app->group('/api', $authenticate(Pengguna::DOSEN), function () use ($app) {

	$app->post('/subscribe/:id', function($id) { (new DosenController())->subscribe($id); 						})->name('subscribe');

	$app->post('/review/:id', function ($id) { (new ReviewController())->tambahReview($id); 					})->name('review');

});

/* ADMIN */
$app->group('/admin', $authenticate(Pengguna::ADMINISTRATOR), function () use ($app) {

	// Statistik
	$app->get('/', function() { (new HomeController())->tampilAdministrasiStatistik(); 						})->name('statistik');

	// CRUD Profil Dosen
	$app->group('/profildosen', function () use ($app) {
		$app->get('/', function () { (new DosenController())->tampilAdministrasiDosen(); 					})->name('cruddosen');
		$app->post('/create', function () { (new DosenController())->createDosen(); 						})->name('dosencreate');
		$app->post('/update/:id', function ($id) { (new DosenController())->updateDosen($id); 				})->name('dosenupdate');
		$app->get('/delete/:id', function ($id) { (new DosenController($id))->deleteDosen($id); 			})->name('dosendelete');
	});

	// CRUD Mata Kuliah
	$app->group('/matakuliah', function () use ($app) {
		$app->get('/', function () { (new MataKuliahController())->tampilAdministrasiMataKuliah(); 			})->name('crudmatakuliah');
		$app->post('/create', function () { (new MataKuliahController())->createMataKuliah(); 				})->name('matakuliahcreate');
		$app->post('/update/:id', function ($id) { (new MataKuliahController())->updateMataKuliah($id); 	})->name('matakuliahupdate');
		$app->get('/delete/:id', function ($id) { (new MataKuliahController())->deleteMataKuliah($id); 		})->name('matakuliahdelete');
	});

	// RUD Review
	$app->group('/review', function () use ($app) {
		$app->get('/', function () { (new ReviewController())->tampilAdministrasiReview(); 					})->name('rudreview');
		$app->get('/delete/:id', function ($id) { (new ReviewController($id))->deleteReview($id); 			})->name('reviewdelete');
		$app->post('/update/:id', function ($id) { (new ReviewController())->updateReview($id); 			})->name('reviewupdate');
	});

	// RUD Komentar
	$app->group('/komentar', function () use ($app) {
		$app->get('/', function () { (new ReviewController())->tampilAdministrasiKomentar(); 				})->name('rudkomentar');
		$app->get('/delete/:id', function ($id) { (new ReviewController($id))->deleteKomentar($id); 		})->name('komentardelete');
		$app->post('/update/:id', function ($id) { (new ReviewController())->updateKomentar($id); 			})->name('komentarupdate');
	});

	// RUD Pengguna
	$app->group('/pengguna', function () use ($app) {
		$app->get('/', function () { (new PenggunaController())->tampilAdministrasiPengguna(); 				})->name('crudpengguna');
		$app->post('/create/', function () { (new PenggunaController())->createPengguna(); 					})->name('penggunacreate');
		$app->post('/update/:npm', function ($npm) { (new PenggunaController())->updatePengguna($npm); 		})->name('penggunaupdate');
		$app->get('/delete/:npm', function ($npm) { (new PenggunaController())->deletePengguna($npm); 		})->name('penggunadelete');
	});

	// RD Feedback
	$app->group('/feedback', function () use ($app) {
		$app->get('/', function () { (new FeedbackController())->tampilAdministrasiFeedback(); 				})->name('rdfeedback');
		$app->get('/delete/:id', function ($id) { (new FeedbackController($id))->deleteFeedback($id); 		})->name('feedbackdelete');
	});

	// R Report
	$app->group('/report', function () use ($app) {
		$app->get('/', function () { (new ReviewController())->tampilAdministrasiReport(); 			})->name('rreport');
	});

});
