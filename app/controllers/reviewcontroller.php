<?php

class ReviewController extends _MainController {

	const HALAMAN_ADMIN_REPORT = 'admin/report.html';
	
	
	function tambahReview($id, $tipe) {
		$review = $this->app->request->post();

		$isi = $review['review'];
		$pengguna = Auth::getPengguna();

		$review1 = new Review;
		$review1->jenis = $tipe;
		$review1->isi = $isi;
		$review1->dosen_id = $id;
		$review1->pengguna_npm = $pengguna->npm;
		$review1->save();

		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $id)), 400);
	}

	function tambahReviewBaik($id) {
		$this->tambahReview($id, 'baik');
	}

	function tambahReviewBuruk($id) {
		$this->tambahReview($id, 'buruk');
	}
	
	function tambahKomentar($id) {
		$komentar = $this->app->request->post();

		$isi = $komentar['komentar'];
		$pengguna = Auth::getPengguna();

		$komentar1 = new Komentar;
		$komentar1->isi = $isi;
		$komentar1->review_id = $id;
		$komentar1->pengguna_npm = $pengguna->npm;
		$komentar1->save();

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahVote($id, $tipe) {
		$pengguna1 = Auth::getPengguna();

		// if(UpvoteDownvote::all()->where('review_id' , '=' , $id)->count() < 1){
			$vote = new UpvoteDownvote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_npm = $pengguna1->npm;
			$vote->save();
		// }
		// echo UpvoteDownvote::all()->where('review_id' , '=' , $id)->count();

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahUpvote($id) {
		$this->tambahVote($id, UpvoteDownvote::UP);
	}
	
	function tambahDownvote($id) {
		$this->tambahVote($id, UpvoteDownvote::DOWN);
	}

	function beriReport($id) {
		$report = new Report;
		$report->review_id = $id;
		$pengguna1 = Auth::getPengguna();
		$report->pengguna_npm = $pengguna1->npm;
		$report->save();

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	/* ADMIN */
	function tampilAdministrasiReview() {
		$review = Review::all();
		$dosen = Dosen::all();

		$data = array();
		$data['review'] = $review;
		$data['dosen'] = $dosen;
		$this->render('/admin/admin-review.html',$data);
	}
	
	function updateReview($id) {
		$review = $this->app->request->post();
		$jenis = $review['jenisrvw'];
		$isi = $review['isirvw'];

		$review1 = Review::find($id);
		$review1->jenis = $jenis;
		$review1->isi = $isi;
		$review1->save();

		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
	}
	
	function deleteReview($id) {
		$review = Review::find($id)->delete();

		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
	}
	
	function tampilAdministrasiKomentar() {
		$komentar = Komentar::all();

		$data = array();
		$data['komentar'] = $komentar;
		$this->render('rudkomentar.html',$data);
	}
	
	function updateKomentar($id) {
		$komentar = $this->app->request->post();
		$isi = $komentar['isikmntr'];

		$komentar1 = Komentar::find($id);
		$komentar1->isi = $isi;
		$komentar1->save();

		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function deleteKomentar($id) {
		$komentar = Komentar::find($id)->delete();
		
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}

	function tampilAdministrasiReport() {
		$report = Report::all();
		$data = array();
		$data['daftarReport'] = $report;
		$this->render(self::HALAMAN_ADMIN_REPORT, $data);
	}
}