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

				$review = new Review;
				$review->isi = $isi;
				$review->rating = $rating;
				$review->dosen_id = $id;
				$review->pengguna_id = $pengguna->id;
				$review->save();
				
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
	
	function tambahKomentar($id) {
		$komentar = $this->app->request->post();

		$isi = $komentar['komentar'];
		$pengguna = Auth::getPengguna();

		$komentar1 = new Komentar;
		$komentar1->isi = $isi;
		$komentar1->review_id = $id;
		$komentar1->pengguna_id = $pengguna->id;
		$komentar1->save();
		$this->app->flash('notif', 'Berhasil menambah komentar pada review');

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahVote($id, $tipe) {
		$pengguna1 = Auth::getPengguna();

		if(!$pengguna->isGivingVote($id)){
			$vote = new Vote;
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
		
		$this->app->flash('notif', 'Berhasil melakukan vote "'.$tipe.'" pada review');

		$iddosen = Review::find($id)->dosen->id;
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $iddosen)), 400);
	}

	function tambahUpvote($id) {
		$this->tambahVote($id, Vote::UPVOTE);
	}
	
	function tambahDownvote($id) {
		$this->tambahVote($id, Vote::DOWNVOTE);
	}

	function beriReport($id) {
		$report = new Report;
		$report->review_id = $id;
		$pengguna1 = Auth::getPengguna();
		$report->pengguna_npm = $pengguna1->npm;
		$report->save();
		$this->app->flash('notif', 'Berhasil melakukan report review');

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