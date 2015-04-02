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
	
	function addreviewbaik($nip) {
		$review = $this->app->request->post();
		$isi = $review['review-baik'];
		$pengguna = Auth::getPengguna();
		$review1 = new Review;
		$review1->jenis = "baik";
		$review1->isi = $isi;
		$review1->dosen_nip = $nip;
		$review1->pengguna_npm = $pengguna->npm;
		$review1->save();
		$dosen = Dosen::where('nip', '=', $nip)->get();
		$iddosen = $dosen[0]->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function addreviewburuk($nip) {
		$review = $this->app->request->post();
		$isi = $review['review-buruk'];
		$pengguna = Auth::getPengguna();
		$review1 = new Review;
		$review1->jenis = "buruk";
		$review1->isi = $isi;
		$review1->dosen_nip = $nip;
		$review1->pengguna_npm = $pengguna->npm;
		$review1->save();
		$dosen = Dosen::where('nip', '=', $nip)->get();
		$iddosen = $dosen[0]->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function addkomentar($id) {
		$komentar = $this->app->request->post();
		$isi = $komentar['komentar'];
		$pengguna = Auth::getPengguna();
		$komentar1 = new Komentar;
		$komentar1->isi = $isi;
		$komentar1->review_id = $id;
		$komentar1->pengguna_npm = $pengguna->npm;
		$komentar1->save();
		$review = Review::where('id', '=', $id)->get();
		$nip = $review[0]->dosen_nip;
		$dosen = Dosen::where('nip', '=', $nip)->get();
		$iddosen = $dosen[0]->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function addupvote($id) {
		$vote = new UpvoteDownvote;
		$vote->tipe = 1;
		$vote->review_id = $id;
		$pengguna1 = Auth::getPengguna();
		$vote->pengguna_npm = $pengguna1->npm;
		$vote->save();
		$review = Review::where('id', '=', $id)->get();
		$nip = $review[0]->dosen_nip;
		$dosen = Dosen::where('nip', '=', $nip)->get();
		$iddosen = $dosen[0]->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function adddownvote($id) {
		$vote = new UpvoteDownvote;
		$vote->tipe = 0;
		$vote->review_id = $id;
		$pengguna1 = Auth::getPengguna();
		$vote->pengguna_npm = $pengguna1->npm;
		$vote->save();
		$review = Review::where('id', '=', $id)->get();
		$nip = $review[0]->dosen_nip;
		$dosen = Dosen::where('nip', '=', $nip)->get();
		$iddosen = $dosen[0]->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function tampilhasilpencarian($query) {
		$dosen = Dosen::where('nama','LIKE', "%".$query."%")->get();
		$matkul = MataKuliah::where('nama','LIKE', "%".$query."%")->get();
		$data = array();
		$data['dosen'] = $dosen;
		$data['matkul'] = $matkul;
		$this->render('pencarian.html',$data);
	}
	
	function createcruddosen() {
		$dosen = $this->app->request->post();
		$nip = $dosen['nipdsn'];
		$nama = $dosen['namadsn'];
		$jeniskelamin = $dosen['jeniskelamindsn'];
		$ttl = $dosen['ttldsn'];
		$dosen1 = new Dosen;
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function tampilcruddosen() {
		$dosen = Dosen::all();
		$data = array();
		$data['dosen'] = $dosen;
		$this->render('cruddosen.html',$data);
	}
	
	function updatecruddosen($id) {
		$dosen = $this->app->request->post();
		$nip = $dosen['nipdsn'];
		$nama = $dosen['namadsn'];
		$jeniskelamin = $dosen['jeniskelamindsn'];
		$ttl = $dosen['ttldsn'];
		$dosen1 = Dosen::find($id);
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
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
	
	function updaterudreview($id) {
		$review = $this->app->request->post();
		$jenis = $review['jenisrvw'];
		$isi = $review['isirvw'];
		$review1 = Review::find($id);
		$review1->jenis = $jenis;
		$review1->isi = $isi;
		$review1->save();
		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
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
	
	function updaterudkomentar($id) {
		$komentar = $this->app->request->post();
		$isi = $komentar['isikmntr'];
		$komentar1 = Komentar::find($id);
		$komentar1->isi = $isi;
		$komentar1->save();
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function deleterudkomentar($id) {
		$komentar = Komentar::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function createcrudpengguna() {
		$pengguna = $this->app->request->post();
		$npm = $pengguna['npmpng'];
		$nama = $pengguna['namapng'];
		$role = $pengguna['rolepng'];
		$bannedhingga = $pengguna['bannedhinggapng'];
		$pengguna1 = new Pengguna;
		$pengguna1->npm = $npm;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->banned_hingga = $bannedhingga;
		$pengguna1->save();
		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
	}
	
	function tampilcrudpengguna() {
		$pengguna = Pengguna::all();
		$data = array();
		$data['daftarpengguna'] = $pengguna;
		$this->render('crudpengguna.html',$data);
	}
	
	function updatecrudpengguna($npm) {
		$pengguna = $this->app->request->post();
		$npm = $pengguna['npmpng'];
		$nama = $pengguna['namapng'];
		$role = $pengguna['rolepng'];
		$bannedhingga = $pengguna['bannedhinggapng'];
		$pengguna1 = Pengguna::find($npm);
		$pengguna1->npm = $npm;
		$pengguna1->nama = $nama;
		$pengguna1->role = $role;
		$pengguna1->banned_hingga = $bannedhingga;
		$pengguna1->save();
		$this->app->response->redirect($this->app->urlFor('crudpengguna'), 400);
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
	
	function tampilreport() {
		$report = Report::all();
		$data = array();
		$data['report'] = $report;
		$this->render('melihatreport.html',$data);
	}
	
	function tampilstatistik() {

		$this->render('melihatstatistik.html');
	}
}