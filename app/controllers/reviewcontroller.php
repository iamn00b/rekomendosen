<?php

class ReviewController extends _MainController {

	const HALAMAN_ADMIN_REVIEW = 'admin/review.html';
	const HALAMAN_ADMIN_KOMENTAR = 'admin/komentar.html';
	const HALAMAN_ADMIN_REPORT = 'admin/report.html';
	
	function checkNotifikasi($id, $tipe) {
		$pengguna = Auth::getPengguna();
		if($id == 0) {
			$iddsn = 0;
			$penggunareview = $pengguna->npm;
			$namadosen = "";
		}
		else {
			$review = Review::where('id', '=', $id)->first();
			$iddsn = $review->dosen_id;
			$dosentemp = Dosen::where('id', '=', $iddsn)->first();
			$namadosen = $dosentemp->nama;
			$penggunareview = $review->pengguna_npm;
		}
		if($tipe == "achievment") {
			$notifikasi1 = Notifikasi::where('review_id', '=', $id)->where('pengguna_npm', '=', $pengguna->npm)->where('tipe', '=', $tipe)->get();
		}
		else {
			$notifikasi1 = Notifikasi::where('review_id', '=', $id)->where('tipe', '=', $tipe)->get();
			$sub = Dosen::find($iddsn)->penggunas()->get();
			if($tipe == "komentar") {
				foreach ($sub as $dosensub) {
					$notifikasisubk = Notifikasi::where('review_id', '=', $id)->where('tipe', '=', "subscribe komentar")->where('pengguna_npm', '=', $dosensub->pivot->pengguna_nomor)->get();
					if($notifikasisubk->count() > 0) {
						$notifsubk = $notifikasisubk->last();
							$penggunanotif = Pengguna::where('npm', '=', $notifsubk->pengguna_npm)->first();
							if($notifsubk->updated_at >= $penggunanotif->updated_at) {
								$total = $notifsubk->total;
								$notifsubk->total = $total+1;
								$notifsubk->save();
							}
							else {
								$notifsubk = new Notifikasi;
								$notifsubk->tipe = "subscribe komentar";;
								$notifsubk->pengguna_npm = $penggunanotif->npm;
								$notifsubk->total = 1;
								$notifsubk->review_id = $id;
								$notifsubk->dosen_id = $iddsn;
								$notifsubk->namadosen = $namadosen;
								$notifsubk->read = 0;
								$notifsubk->save();
							}
					}
					else {
						$notifikasi3 = new Notifikasi;
						$notifikasi3->tipe = "subscribe komentar";
						$notifikasi3->pengguna_npm = $dosensub->pivot->pengguna_nomor;
						$notifikasi3->total = 1;
						$notifikasi3->review_id = $id;
						$notifikasi3->dosen_id = $iddsn;
						$notifikasi3->namadosen = $namadosen;
						$notifikasi3->read = 0;
						$notifikasi3->save();
					}
				}
			}
		}
		if($notifikasi1->count() > 0) {
			if($tipe == "achievment") {
				$notif = $notifikasi1->last();
					$penggunanotif = Pengguna::where('npm', '=', $notif->pengguna_npm)->first();
					if($notif->updated_at >= $penggunanotif->updated_at) {
						$total = $notif->total;
						$notif->total = $total+1;
						$notif->save();
					}
					else {
						$notif = new Notifikasi;
						$notif->tipe = $tipe;
						$notif->pengguna_npm = $penggunanotif->npm;
						$notif->total = 1;
						$notif->review_id = $id;
						$notif->dosen_id = $iddsn;
						$notif->namadosen = $namadosen;
						$notif->read = 0;
						$notif->save();
					}
				}
				else {
					foreach($notifikasi1 as $notif) {
						$penggunanotif = Pengguna::where('npm', '=', $notif->pengguna_npm)->first();
					if($notif->updated_at >= $penggunanotif->updated_at) {
						$total = $notif->total;
						$notif->total = $total+1;
						$notif->save();
					}
					else {
						$notif = new Notifikasi;
						$notif->tipe = $tipe;
						$notif->pengguna_npm = $penggunanotif->npm;
						$notif->total = 1;
						$notif->review_id = $id;
						$notif->dosen_id = $iddsn;
						$notif->namadosen = $namadosen;
						$notif->read = 0;
						$notif->save();
					}
					}
				}
		}
		else {
				$notifikasi1 = new Notifikasi;
				$notifikasi1->tipe = $tipe;
				$notifikasi1->pengguna_npm = $penggunareview;
				$notifikasi1->total = 1;
				$notifikasi1->review_id = $id;
				$notifikasi1->dosen_id = $iddsn;
				$notifikasi1->namadosen = $namadosen;
				$notifikasi1->read = 0;
				$notifikasi1->save();
				if($tipe == "komentar") {
					$notifcek = Notifikasi::where('review_id', '=', $id)->where('tipe', '=', $tipe)->where('pengguna_npm', '=', $pengguna->npm)->get();
					if($notifcek->count() == 0) {
						$notifikasi2 = new Notifikasi;
						$notifikasi2->tipe = $tipe;
						$notifikasi2->pengguna_npm = $pengguna->npm;
						$notifikasi2->total = 0;
						$notifikasi2->review_id = $id;
						$notifikasi2->dosen_id = $iddsn;
						$notifikasi2->namadosen = $namadosen;
						$notifikasi2->read = 0;
						$notifikasi2->save();
					}
				}
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
			if($achiev->target == $total) {
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
		
		$sub = Dosen::find($id)->penggunas()->get();
			foreach ($sub as $dosensub) {
					$notifikasisubr = Notifikasi::where('dosen_id', '=', $id)->where('tipe', '=', "subscribe review")->where('pengguna_npm', '=', $dosensub->pivot->pengguna_nomor)->get();
					if($notifikasisubr->count() > 0) {
							$notifsubr = $notifikasisubr->last();
							$penggunanotif = Pengguna::where('npm', '=', $notifsubr->pengguna_npm)->first();
							if($notifsubr->updated_at >= $penggunanotif->updated_at) {
								$total = $notifsubr->total;
								$notifsubr->total = $total+1;
								$notifsubr->save();
							}
							else {
								$notifsubr = new Notifikasi;
								$notifsubr->tipe = "subscribe review";
								$notifsubr->pengguna_npm = $penggunanotif->npm;
								$notifsubr->total = 1;
								$notifsubr->review_id = $review1->id;
								$notifsubr->dosen_id = $id;
								$notifsubr->namadosen = $namadsn;
								$notifsubr->read = 0;
								$notifsubr->save();
							}
					}
					else {
						$notifikasi3 = new Notifikasi;
						$notifikasi3->tipe = "subscribe review";
						$notifikasi3->pengguna_npm = $dosensub->pivot->pengguna_nomor;
						$notifikasi3->total = 1;
						$notifikasi3->review_id = $review1->id;
						$notifikasi3->dosen_id = $id;
						$notifikasi3->namadosen = $namadsn;
						$notifikasi3->read = 0;
						$notifikasi3->save();
					}
				}
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
		$pengguna->touch();
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
		$pengguna->touch();
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
		$pengguna1->touch();
		$report->pengguna_npm = $pengguna1->npm;
		$report->save();
		$this->app->flash('notif', 'Berhasil melakukan report review');
		
		$review = Review::where('id', '=', $id)->first();
		$iddsn = $review->dosen_id;
		$dosen = Dosen::where('id', '=', $iddsn)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->activity = "memberi Report Review untuk dosen $namadsn";
		$activity1->pengguna_npm = $pengguna1->npm;
		$activity1->dosen_id = $iddsn;
		$activity1->save();
		$this->checkNotifikasi($id, 'report');
		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}
	
	/* ADMIN */
	function tampilAdministrasiReview() {
		$review = Review::orderBy('created_at', 'desc')->get();
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
		$data = array();
		$data['daftarReview'] = $review;
		$this->render(self::HALAMAN_ADMIN_REVIEW, $data);
	}
	
	function updateReview($id) {
		$review = $this->app->request->post();
		$jenis = $review['jenis'];
		$isi = $review['isi'];
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
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
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();

		$this->app->response->redirect($this->app->urlFor('rudreview'), 400);
	}
	
	function tampilAdministrasiKomentar() {
		$komentar = Komentar::all();
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
		$data = array();
		$data['daftarKomentar'] = $komentar;
		$this->render(self::HALAMAN_ADMIN_KOMENTAR, $data);
	}
	
	function updateKomentar($id) {
		$komentar = $this->app->request->post();
		$isi = $komentar['isi'];
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
		$komentar1 = Komentar::find($id);
		$komentar1->isi = $isi;
		$komentar1->save();
		$this->app->flash('notif', 'Berhasil mengupdate komentar id #' . $id);

		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}
	
	function deleteKomentar($id) {
		$komentar = Komentar::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus komentar id #' . $id);
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 400);
	}

	function tampilAdministrasiReport() {
		$report = Report::all();
		$pengguna = Pengguna::getPengguna();
		$pengguna->touch();
		$data = array();
		$data['daftarReport'] = $report;
		$this->render(self::HALAMAN_ADMIN_REPORT, $data);
	}
}