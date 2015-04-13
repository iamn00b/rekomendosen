<?php

class FeedbackController extends _MainController {

	const HALAMAN_ADMIN_FEEDBACK = 'admin/feedback.html';
	
	function tambahFeedback() {
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

		$this->app->response->redirect($this->app->urlFor('home'), 400);
	}
	
	function tampilAdministrasiFeedback() {
		$feedback = Feedback::all();
		$data = array();
		$data['daftarFeedback'] = $feedback;
		$this->render(self::HALAMAN_ADMIN_FEEDBACK,$data);
	}
	
	function deleteAdministrasiFeedback($id) {
		$feedback = Feedback::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rdfeedback'), 400);
	}
}