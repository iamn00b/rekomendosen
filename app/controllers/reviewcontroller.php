<?php

class ReviewController extends _MainController {

	const HALAMAN_ADMIN_REVIEW = 'admin/review.html';
	const HALAMAN_ADMIN_KOMENTAR = 'admin/komentar.html';
	const HALAMAN_ADMIN_REPORT = 'admin/report.html';
	
	
	function tambahReview($id) {

		try {
			$data = array();

			// VALIDATION
			$validator = new GUMP();

			$validator->validation_rules(array(
			    'rating'    => 'required|integer|min_numeric,1|max_numeric,6',
			    'review'    => 'required',
			));

			$validator->filter_rules(array(
			    'rating' => 'trim',
			    'review' => 'trim|sanitize_string',
			));

			$postData = $validator->sanitize($this->app->request->post());
			$validated_data = $validator->run($postData);

			// Validation Fail
			if($validated_data === false) {
				$data['status'] = 'invalid';
			    $data['message'] =  $validator->get_readable_errors(true);

			// Validation Success
			} else {
				$isi = $validated_data['review'];
				$rating = $validated_data['rating'];

				$pengguna = Auth::getPengguna();
				$dosen = Dosen::find($id);
				// $semuaReview = $dosen->review()->get();

				// $usedIcons = new \Illuminate\Database\Eloquent\Collection;
				// foreach ($semuaReview as $r) 
				// 	$usedIcons = $usedIcons->add($r->icon()->first());

				// $icons = $pengguna->getAllEligableIcons();

				// $flag = array();
				// foreach (Icon::AVAILABLE_COLOR as $color) {
				// 	$flag[$color] = array();
				// 	foreach ($icons as $key => $icon)
				// 		$flag[$color][$key] = $usedIcons->contains($icon->id);
				// }

				// $getCorrectIcon = false;
				// $finalIcon = null;
				// $finalColor = null;
				// while(!$getCorrectIcon) {
				// 	$getIcon = array_rand($icons->toArray());
				// 	$getColor = array_rand(Icon::AVAILABLE_COLOR);

				// 	if ($flag)
				// }

				$review = new Review;
				$review->isi = $isi;
				$review->rating = $rating;
				$review->dosen_id = $id;
				$review->pengguna_id = $pengguna->id;
				$review->save();

				$riwayat = new Riwayat;
				$riwayat->id_log = $review->id;
				$riwayat->jenis = Riwayat::BERI_REVIEW;
				$riwayat->pengguna_id = $pengguna->id;
				$riwayat->save();

				foreach ($dosen->subscriber()->get() as $subscriber) {
					$notif = new Notifikasi;
					$notif->id_log = $dosen->id;
					$notif->jenis = Notifikasi::BERI_REVIEW;
					$notif->pengguna_id = $subscriber->id;
					$notif->save();
				}
				
				$data['status'] = 'success';
				$data['review'] = $validated_data;
			}

			$this->renderAPI($data);

		// 404
		} catch (ModelNotFoundException $e) {
			$data = array();
			$data['status'] = 'invalid';
			$data['message'] = 'Dosen tidak ditemukan';

			$this->renderAPI($data);

		// Other Error
		} catch (Exception $e) {
			$data = array();
			$data['status'] = 'failed';

			$this->renderAPI($data);
		}
	}

	function hapusReview($id) {
		$pengguna = Auth::getPengguna();
		$review = Review::find($id);
		$iddosen = $review->dosen->id;

		if ($review->pengguna->id == $pengguna->id) {
			$riwayat = new Riwayat;
			$riwayat->id_log = $review->dosen->id;
			$riwayat->jenis = Riwayat::HAPUS_REVIEW;
			$riwayat->pengguna_id = $pengguna->id;
			$riwayat->save();

			$review->delete();
			$this->app->flash('notif', 'Berhasil menghapus review');
		}
			
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 200);
	}
	
	function tambahKomentar($id) {
		$komentar = $this->app->request->post();
		$review = Review::find($id);

		$isi = $komentar['komentar'];
		$pengguna = Auth::getPengguna();

		$komentar1 = new Komentar;
		$komentar1->isi = $isi;
		$komentar1->review_id = $id;
		$komentar1->pengguna_id = $pengguna->id;
		$komentar1->save();

		$riwayat = new Riwayat;
		$riwayat->id_log = $komentar1->id;
		$riwayat->jenis = Riwayat::BERI_KOMENTAR;
		$riwayat->pengguna_id = $pengguna->id;
		$riwayat->save();

		foreach ($review->komentar()->groupBy('pengguna_id')->get() as $komentar) {
			if ($komentar->pengguna_id != $review->pengguna_id) {
				$notif = new Notifikasi;
				$notif->id_log = $id;
				$notif->jenis = Notifikasi::BERI_KOMENTAR;
				$notif->pengguna_id = $komentar->pengguna->id;
				$notif->save();
			}
		}

		$notif = new Notifikasi;
		$notif->id_log = $id;
		$notif->jenis = Notifikasi::BERI_KOMENTAR;
		$notif->pengguna_id = $review->pengguna_id;
		$notif->save();

		$this->app->flash('notif', 'Berhasil menambah komentar pada review');

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 200);
	}

	function hapusKomentar($id) {
		$komentar = Komentar::find($id);
		$pengguna = Auth::getPengguna();
		$iddosen = $komentar->review->dosen->id;

		if ($komentar->pengguna->id == $pengguna->id) {
			$riwayat = new Riwayat;
			$riwayat->id_log = $komentar->review->dosen->id;
			$riwayat->jenis = Riwayat::HAPUS_KOMENTAR;
			$riwayat->pengguna_id = $pengguna->id;
			$riwayat->save();

			$komentar->delete();
			$this->app->flash('notif', 'Berhasil menghapus komentar');
		}

		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 200);
	}

	function tambahVote($id, $tipe) {
		$pengguna = Auth::getPengguna();
		$review = Review::find($id);
		$vote = $pengguna->getVote($id);

		if(!$vote){
			$vote = new Vote;
			$vote->tipe = $tipe;
			$vote->review_id = $id;
			$vote->pengguna_id = $pengguna->id;
			$vote->save();

			$riwayat = new Riwayat;
			$riwayat->id_log = $id;
			$riwayat->jenis = Riwayat::BERI_VOTE;
			$riwayat->keterangan = $tipe;
			$riwayat->pengguna_id = $pengguna->id;
			$riwayat->save();

			$notif = new Notifikasi;
			$notif->id_log = $id;
			$notif->jenis = Notifikasi::BERI_VOTE;
			$notif->pengguna_id = $review->pengguna_id;
			$notif->save();
		} else {
			$vote->tipe = $tipe;
			$vote->save();

			$riwayat = new Riwayat;
			$riwayat->id_log = $id;
			$riwayat->jenis = Riwayat::UBAH_VOTE;
			$riwayat->keterangan = $tipe;
			$riwayat->pengguna_id = $pengguna->id;
			$riwayat->save();
		}
		
		$this->app->flash('notif', 'Berhasil melakukan vote "'.$tipe.'" pada review');

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 200);
	}

	function tambahUpvote($id) {
		$this->tambahVote($id, Vote::UP);
	}
	
	function tambahDownvote($id) {
		$this->tambahVote($id, Vote::DOWN);
	}

	function beriReport($id) {
		$report = new Report;
		$report->review_id = $id;
		$pengguna1 = Auth::getPengguna();
		$report->pengguna_id = $pengguna1->id;
		$report->save();
		$this->app->flash('notif', 'Berhasil melakukan report review');

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 200);
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
		$isi = $review['isi'];

		$review1 = Review::find($id);
		$review1->isi = $isi;
		$review1->save();
		$this->app->flash('notif', 'Berhasil mengupdate review' );

		$this->app->response->redirect($this->app->urlFor('rudreview'), 200);
	}
	
	function deleteReview($id) {
		$review = Review::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus review');

		$this->app->response->redirect($this->app->urlFor('rudreview'), 200);
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
		$this->app->flash('notif', 'Berhasil mengupdate komentar');

		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 200);
	}
	
	function deleteKomentar($id) {
		$komentar = Komentar::find($id)->delete();
		$this->app->flash('notif', 'Berhasil menghapus komentar');
		
		$this->app->response->redirect($this->app->urlFor('rudkomentar'), 200);
	}

	function tampilAdministrasiReport() {
		$report = Report::all();
		$data = array();
		$data['daftarReport'] = $report;
		$this->render(self::HALAMAN_ADMIN_REPORT, $data);
	}
}