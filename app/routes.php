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
        	\Slim\Slim::getInstance()->response->redirect(\Slim\Slim::getInstance()->urlFor('401'), 401);
        }
    };
};

function maintenanceFilter() {

	$underMaintenance = ServerMode::where('desc','=','maintenance')->first()->status;

	if($underMaintenance == 'Y')
		\Slim\Slim::getInstance()->response->redirect(\Slim\Slim::getInstance()->urlFor('undermaintenance'), 200);

};

/* 404 */
$app->notFound(function () {

	(new _MainController)->renderTanpaLogin('error/404.html');

});

$app->get('/401', function () use ($app) { (new _MainController)->renderTanpaLogin('error/401.html'); })->name('401');
$app->get('/maintenance', function () use ($app) { (new _MainController)->renderTanpaLogin('error/maintenance.html'); })->name('undermaintenance');
 
/* USER */
$app->get('/', function () use ($app) { (new HomeController())->welcome(); })->name('welcome');
$app->get('/home', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new HomeController())->index(); })->name('home');
$app->get('/achievement', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new HomeController())->achievement(); })->name('achievement');
$app->get('/logout', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new HomeController())->logout(); })->name('logout');

$app->get('/dosen', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new DosenController())->tampilDaftarDosen(); })->name('dosen');
$app->get('/dosen/:id', 'maintenanceFilter', $authenticate(Pengguna::DOSEN),	function ($id) use ($app) { (new DosenController())->tampilRincianDosen($id); })->name('rinciandosen');

$app->get('/matakuliah', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new MataKuliahController())->tampilDaftarMataKuliah(); })->name('matakuliah');
$app->get('/matakuliah/:id', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function ($id) use ($app) { (new MataKuliahController())->tampilRincianMataKuliah($id); })->name('rincianmatakuliah');

$app->get('/pencarian', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app) { (new PencarianController())->tampilHasilPencarian(); })->name('pencarian');
$app->post('/feedback', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function () use ($app)	{ (new FeedbackController())->tambahFeedback(); })->name('feedback');

/* should be API instead */
$app->get('/report/:id', 'maintenanceFilter', $authenticate(Pengguna::DOSEN), function ($id) use ($app) { (new ReviewController())->beriReport($id); })->name('report');

$app->post('/komentar/:id', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function ($id) use ($app) { (new ReviewController())->tambahKomentar($id); })->name('komentar');
$app->get('/upvote/:id', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function ($id) use ($app) { (new ReviewController())->tambahUpvote($id); })->name('upvote');
$app->get('/downvote/:id', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function ($id) use ($app) { (new ReviewController())->tambahDownvote($id); })->name('downvote');
$app->get('/hapusreview/:id', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function ($id) use ($app) { (new ReviewController())->hapusReview($id); })->name('hapusreview');
$app->get('/hapuskomentar/:id', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function ($id) use ($app) { (new ReviewController())->hapusKomentar($id); })->name('hapuskomentar');

/* API */
$app->group('/api', 'maintenanceFilter', $authenticate(Pengguna::MAHASISWA), function () use ($app) {

	$app->post('/subscribe/:id', function($id) { (new DosenController())->subscribe($id); 						})->name('subscribe');

	$app->post('/review/:id', function ($id) { (new ReviewController())->tambahReview($id); 					})->name('review');

});

/* ADMIN */
$app->group('/admin', $authenticate(Pengguna::ADMINISTRATOR), function () use ($app) {

	// Statistik
	$app->get('/', function() { (new HomeController())->tampilAdministrasiStatistik(); 						})->name('statistik');
	$app->get('/maintenace/:status', function($status) { (new HomeController())->maintenanceMode($status); 	})->name('maintenance');

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
