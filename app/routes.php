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