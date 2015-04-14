<?php

class ReviewController extends _MainController {

	const HALAMAN_ADMIN_REVIEW = 'admin/review.html';
	const HALAMAN_ADMIN_KOMENTAR = 'admin/komentar.html';
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

		 if(UpvoteDownvote::where('review_id' , '=' , $id)->count() < 1){
			$vote = new UpvoteDownvote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_npm = $pengguna1->npm;
			$vote->save();
		 }
		 else {
			$vote1 = UpvoteDownvote::where('review_id' , '=' , $id)->delete();
			$vote = new UpvoteDownvote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_npm = $pengguna1->npm;
			$vote->save();
		 }

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahUpvote($id) {
		$this->tambahVote($id, UpvoteDownvote::UPVOTE);
	}
	
	function tambahDownvote($id) {
		$this->tambahVote($id, UpvoteDownvote::DOWNVOTE);
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
		$review = Review::orderBy('created_at', 'desc')->get();

		$data = array();
		$data['daftarReview'] = $review;
		$this->render(self::HALAMAN_ADMIN_REVIEW, $data);
	}
	
	function updateReview($id) {
		$review = $this->app->request->post();
		$jenis = $review['jenis'];
		$isi = $review['isi'];

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
		$data['daftarKomentar'] = $komentar;
		$this->render(self::HALAMAN_ADMIN_KOMENTAR, $data);
	}
	
	function updateKomentar($id) {
		$komentar = $this->app->request->post();
		$isi = $komentar['isi'];

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