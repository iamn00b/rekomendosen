<?php

class ReviewController extends _MainController {

	const HALAMAN_ADMIN_REVIEW = 'admin/review.html';
	const HALAMAN_ADMIN_KOMENTAR = 'admin/komentar.html';
	const HALAMAN_ADMIN_REPORT = 'admin/report.html';
	
	function checkNotifikasi($id, $tipe) {
		$pengguna = Auth::getPengguna();
		if($id == 0) {
			$iddsn = 0;
		}
		else {
			$review = Review::where('id', '=', $id)->first();
			$iddsn = $review->dosen_id;
		}
		$notifikasi1 = Notifikasi::where('review_id', '=', $id)->where('pengguna_npm', '=', $pengguna->npm)->where('tipe', '=', $tipe)->get();
		if($notifikasi1->count() > 0) {
			$notifikasi = $notifikasi1->last();
			if($notifikasi->updated_at >= $pengguna->updated_at) {
				$total = $notifikasi->total;
				$notifikasi->total = $total+1;
				$notifikasi->save();
			}
			else {
				$notifikasi1 = new Notifikasi;
				$notifikasi1->tipe = $tipe;
				$notifikasi1->pengguna_npm = $pengguna->npm;
				$notifikasi1->total = 1;
				$notifikasi1->review_id = $id;
				$notifikasi1->dosen_id = $iddsn;
				$notifikasi1->save();
			}
		}
		else {
				$notifikasi1 = new Notifikasi;
				$notifikasi1->tipe = $tipe;
				$notifikasi1->pengguna_npm = $pengguna->npm;
				$notifikasi1->total = 1;
				$notifikasi1->review_id = $id;
				$notifikasi1->dosen_id = $iddsn;
				$notifikasi1->save();
		}
	}
	
	function checkReward($tipe) {
		$pengguna = Auth::getPengguna();
		if($tipe == "review") {
			$model = Review::where('pengguna_npm', '=', $pengguna->npm);
		}
		if($tipe == "komentar") {
			$model = Komentar::where('pengguna_npm', '=', $pengguna->npm);
		}
		if($tipe == "upvote") {
			$vote = UpvoteDownvote::where('pengguna_npm', '=', $pengguna->npm);
			$model = $vote->where('tipe', '=', 1);
		}
		if($tipe == "downvote") {
			$vote = UpvoteDownvote::where('pengguna_npm', '=', $pengguna->npm);
			$model = $vote->where('tipe', '=', 0);
		}
		$total = $model->count();
		foreach (Achievment::where('tipe', '=', $tipe)->get() as $achiev) {
			if($achiev->target <= $total) {
				$reward = $achiev->penggunas()->get();
				if($reward->count() != 0) {
					if($reward->first()->pivot->where('pengguna_nomor', '=', $pengguna->npm)->count() < 1) {
						$pengguna1 = Pengguna::where('npm', '=', $pengguna->npm)->first();
						$pengguna1->touch();
						$achiev->penggunas()->attach($pengguna1->npm);
					}
				}
				else {
					$pengguna1 = Pengguna::where('npm', '=', $pengguna->npm)->first();
					$achiev->penggunas()->attach($pengguna1->npm);
				}
				$this->checkNotifikasi(0, 'achievment');
			}
		}
	}
	
	function tambahReview($id, $tipe) {
		$review = $this->app->request->post();

		$isi = $review['review'];
		$gambar = $review['badge'];
		$pengguna = Auth::getPengguna();
		$pengguna->touch();

		$review1 = new Review;
		$review1->jenis = $tipe;
		$review1->isi = $isi;
		$review1->dosen_id = $id;
		$review1->pengguna_npm = $pengguna->npm;
		$review1->gambar = $gambar;
		$review1->save();
		
		$dosen = Dosen::where('id', '=', $id)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "memberi Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna->npm;
		$activity1->dosen_id = $id;
		$activity1->save();

		$tipeAsString = ($tipe == 'baik')? 'rekomendasi' : 'tidak rekomendasi';
		$this->app->flash('notif', 'Berhasil memberi "'.$tipeAsString.'"');
		$this->checkReward('review');
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $id)), 400);
	}

	function tambahReviewBaik($id) {
		$this->tambahReview($id, 'baik');
	}

	function tambahReviewBuruk($id) {
		$this->tambahReview($id, 'buruk');
	}
	
	function hapusReview($id) {
		$iddosen = Review::find($id)->dosen->id;
		$review = Review::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus review');
		$pengguna = Auth::getPengguna();
		$dosen = Dosen::where('id', '=', $iddosen)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "menghapus Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna->npm;
		$activity1->dosen_id = $iddosen;
		$activity1->save();

		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function tambahKomentar($id) {
		$komentar = $this->app->request->post();

		$isi = $komentar['komentar'];
		$gambar = $komentar['badgekomentar'];
		$pengguna = Auth::getPengguna();
		$pengguna->touch();

		$komentar1 = new Komentar;
		$komentar1->isi = $isi;
		$komentar1->review_id = $id;
		$komentar1->pengguna_npm = $pengguna->npm;
		$komentar1->gambar = $gambar;
		$komentar1->save();
		$this->app->flash('notif', 'Berhasil menambah komentar pada review');
		
		$review = Review::where('id', '=', $id)->first();
		$iddsn = $review->dosen_id;
		$dosen = Dosen::where('id', '=', $iddsn)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "memberi Komentar Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna->npm;
		$activity1->dosen_id = $iddsn;
		$activity1->save();
		$this->checkNotifikasi($id, 'komentar');
		$iddosen = Review::find($id)->dosen->id;
		$this->checkReward('komentar');
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	function hapusKomentar($id) {
		$idreview = Komentar::find($id)->review->id;
		$iddosen = Review::find($idreview)->dosen->id;
		$review = Komentar::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus komentar');
		$pengguna = Auth::getPengguna();
		$dosen = Dosen::where('id', '=', $iddosen)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "menghapus Komentar Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna->npm;
		$activity1->dosen_id = $iddosen;
		$activity1->save();

		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahVote($id, $tipe) {
		$pengguna1 = Auth::getPengguna();
		$pengguna1->touch();

		if(UpvoteDownvote::where('review_id' , '=' , $id)->count() < 1){
			$vote = new UpvoteDownvote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_npm = $pengguna1->npm;
			$vote->save();
		} else {
			$vote1 = UpvoteDownvote::where('review_id' , '=' , $id)->delete();
			$vote = new UpvoteDownvote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_npm = $pengguna1->npm;
			$vote->save();
		}
		$review = Review::where('id', '=', $id)->first();
		$iddsn = $review->dosen_id;
		$dosen = Dosen::where('id', '=', $iddsn)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->pengguna_npm = $pengguna1->npm;
		$activity1->dosen_id = $iddsn;
		
		if($tipe == 0) {
			$activity1->activity = "memberi Downvote untuk dosen $namadsn";
			$this->checkNotifikasi($id, 'downvote');
			$this->checkReward('downvote');
		}
		else {
			$activity1->activity = "memberi Upvote untuk dosen $namadsn";
			$this->checkNotifikasi($id, 'upvote');
			$this->checkReward('upvote');
		}
		$activity1->save();
		$this->app->flash('notif', 'Berhasil melakukan vote "'.$tipe.'" pada review');

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
		$this->app->flash('notif', 'Berhasil melakukan report review');
		
		$pengguna = Auth::getPengguna();
		$pengguna->touch();
		
		$review = Review::where('id', '=', $id)->first();
		$iddsn = $review->dosen_id;
		$dosen = Dosen::where('id', '=', $iddsn)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "memberi Report Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna->npm;
		$activity1->dosen_id = $iddsn;
		$activity1->save();
		$this->checkNotifikasi($id, 'report');
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
		$this->app->flash('notif', 'Berhasil mengupdate review id #' . $id);

		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
	}
	
	function deleteReview($id) {
		$review = Review::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus review id #' . $id);

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
		$this->app->flash('notif', 'Berhasil mengupdate komentar id #' . $id);

		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function deleteKomentar($id) {
		$komentar = Komentar::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus komentar id #' . $id);
		
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}

	function tampilAdministrasiReport() {
		$report = Report::all();
		$data = array();
		$data['daftarReport'] = $report;
		$this->render(self::HALAMAN_ADMIN_REPORT, $data);
	}
}