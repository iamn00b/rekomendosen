<?php

use SSO\SSO;
// simple controller example
// you can access Slim app instance via $this->app

class Home extends _MainController {

	function welcome() {
		if (Auth::check()) 
			$this->app->response->redirect($this->app->urlFor('home'), 400);
		
		$this->render('welcome.html');
	}

	function index() {
		$this->render('home.html'); 
	}

	function logout() {
		Auth::logout();
	}
	
	function tampildosen() {
		$daftardosen = Dosen::all();
		$data = array();
		$data['dosen'] = $daftardosen;
		$this->render('dosen.html',$data);
	}
	
	function tampilmatkul() {
		$daftar = Matakuliah::all();
		foreach ($daftar as $in) {
			$in->dosens;
		}
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('matakuliah.html',$data);
	}
	
	function tampilrincianmatkul($id) {
		$daftar = Matakuliah::find($id);
		$daftar->dosens;
		$data = array();
		$data['matakuliah'] = $daftar;
		$this->render('rincianmatkul.html',$data);
	}
	
	function tampilrinciandosen($id) {
		$dosen = Dosen::find($id);
		$temp = $dosen->nip;
		$daftarreview = Review::where('dosen_nip','=', $temp)->get();
		$daftarkomentar = Komentar::all();
		$daftarvote = UpvoteDownvote::all();
		$daftarreport = Report::all();
		$data = array();
		$data['dosen'] = $dosen;
		$data['review'] = $daftarreview;
		$data['komentar'] = $daftarkomentar;
		$data['vote'] = $daftarvote;
		$data['report'] = $daftarreport;
		$this->render('rinciandosen.html',$data);
	}
	
	function tampilhasilpencarian($query) {
		$dosen = Dosen::where('nama','LIKE', "%".$query."%")->get();
		$matkul = MataKuliah::where('nama','LIKE', "%".$query."%")->get();
		$data = array();
		$data['dosen'] = $dosen;
		$data['matkul'] = $matkul;
		$this->render('pencarian.html',$data);
	}
	
	function tampilcruddosen() {
		$dosen = Dosen::all();
		$data = array();
		$data['dosen'] = $dosen;
		$this->render('cruddosen.html',$data);
	}
	
	function deletecruddosen($id) {
		$dosen = Dosen::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function createcrudmatakuliah() {
		$matkul = $this->app->request->post();
		$kodemk = $matkul['kodemk'];
		$nama = $matkul['namamk'];
		$sks = $matkul['sksmk'];
		$prodi = $matkul['prodimk'];
		$matkul1 = new MataKuliah;
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->save();
		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
	
	function tampilcrudmatakuliah() {
		$matakuliah = Matakuliah::all();
		$data = array();
		$data['matakuliah'] = $matakuliah;
		$this->render('crudmatakuliah.html',$data);
	}
	
	function updatecrudmatakuliah($id) {
		$matkul = $this->app->request->post();

		$kodemk = $matkul['kodemk'];
		$nama = $matkul['namamk'];
		$sks = $matkul['sksmk'];
		$prodi = $matkul['prodimk'];

		$matkul1 = MataKuliah::find($id);
		$matkul1->kodemk = $kodemk;
		$matkul1->nama = $nama;
		$matkul1->sks = $sks;
		$matkul1->prodi = $prodi;
		$matkul1->save();
		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
	
	function deletecrudmatakuliah($kodemk) {
		$matakuliah = Matakuliah::where('kodemk', '=', $kodemk)->delete();
		$this->app->response->redirect($this->app->urlFor('crudmatakuliah'), 400);
	}
	
	function tampilrudreview() {
		$review = Review::all();
		$data = array();
		$data['review'] = $review;
		$this->render('rudreview.html',$data);
	}
	
	function deleterudreview($id) {
		$review = Review::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
	}
	
	function tampilrudkomentar() {
		$komentar = Komentar::all();
		$data = array();
		$data['komentar'] = $komentar;
		$this->render('rudkomentar.html',$data);
	}
	
	function deleterudkomentar($id) {
		$komentar = Komentar::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function tampilcrudpengguna() {
		$pengguna = Pengguna::all();
		$data = array();
		$data['daftarpengguna'] = $pengguna;
		$this->render('crudpengguna.html',$data);
	}
	
	function deletecrudpengguna($npm) {
		$pengguna = Pengguna::where('npm', '=', $npm)->delete();
		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
	}
	
	function isifeedback() {
		$feedback = $this->app->request->post();
		$rating = $feedback['rating'];
		$isi = $feedback['feedback'];
		$pengguna = Auth::getPengguna();
		$npm = $pengguna->npm;
		$feedback1 = new Feedback;
		$feedback1->rating = $rating;
		$feedback1->isi = $isi;
		$feedback1->pengguna_npm = $npm;
		$feedback1->save();
		$this->render('home.html');
	}
	
	function tampilrdfeedback() {
		$feedback = Feedback::all();
		$data = array();
		$data['feedback'] = $feedback;
		$this->render('rdfeedback.html',$data);
	}
	
	function deleterdfeedback($id) {
		$feedback = Feedback::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rdfeedback'), 400);
	}
}