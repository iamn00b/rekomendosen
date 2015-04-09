<?php

class FeedbackController extends _MainController {
	


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
		$this->render('home.html');
	}
	
	function tampilAdministrasiFeedback() {
		$feedback = Feedback::all();
		$data = array();
		$data['feedback'] = $feedback;
		$this->render('rdfeedback.html',$data);
	}
	
	function deleteFeedback($id) {
		$feedback = Feedback::where('id', '=', $id)->delete();
		$this->app->response->redirect($this->app->urlFor('rdfeedback'), 400);
	}
}