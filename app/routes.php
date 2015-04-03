<?php 

$app->get('/', function () use ($app) 			{ (new Home())->welcome(); 		})->name('welcome');
$app->get('/home/', function () use ($app) 		{ (new Home())->index(); 		})->name('home');
$app->get('/logout/', function () use ($app) 	{ (new Home())->logout(); 		})->name('logout');
$app->get('/index', function () use ($app) 		{ (new _MainController())->render('index.html');	})->name('index');
$app->get('/dosen', function () use ($app) 		{ (new _MainController())->render('dosen.html');	})->name('dosen');
$app->get('/mata-kuliah', function () use ($app) { (new _MainController())->render('mata-kuliah.html');})->name('mata-kuliah');
$app->get('/detil-mata-kuliah/', function () use ($app) { (new _MainController())->render('detil-mata-kuliah.html');	})->name('detil-mata-kuliah');
$app->get('/detil-dosen/', function () use ($app) 		{ (new _MainController())->render('detil-dosen.html');	})->name('detil-dosen');
$app->post('/feedback/', function () use ($app)	{ (new Home())->welcome(); 		})->name('feedback');
$app->post('/tutorial/', function () use ($app)	{ (new Home())->welcome(); 		})->name('tutorial');
$app->get('/hasil-pencarian/', function () use ($app) 	{ (new _MainController())->render('hasil-pencarian.html');	})->name('hasil-pencarian');
$app->get('/admin-profil-dosen/', function () use ($app) 	{ (new _MainController())->render('admin-profil-dosen.html');	})->name('admin-profil-dosen');
$app->get('/admin-mata-kuliah/', function () use ($app) 	{ (new _MainController())->render('admin-mata-kuliah.html');	})->name('admin-mata-kuliah');
$app->get('/admin-pengguna/', function () use ($app) 	{ (new _MainController())->render('admin-pengguna.html');	})->name('admin-pengguna');
$app->get('/admin-review/', function () use ($app) 	{ (new _MainController())->render('admin-review.html');	})->name('admin-review');
$app->get('/admin-komentar/', function () use ($app) 	{ (new _MainController())->render('admin-komentar.html');	})->name('admin-komentar');
$app->get('/admin-report/', function () use ($app) 	{ (new _MainController())->render('admin-report.html');	})->name('admin-report');
$app->get('/admin-feedback/', function () use ($app) 	{ (new _MainController())->render('admin-feedback.html');	})->name('admin-feedback');
$app->get('/admin-statistics/', function () use ($app) 	{ (new _MainController())->render('admin-statistics.html');	})->name('admin-statistics');
$app->get('/admin/', function () use ($app) { (new _MainController())->render('admin.html');	})->name('admin');