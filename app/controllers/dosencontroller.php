<?php

class DosenController extends _MainController { 

	const HALAMAN_DAFTAR_DOSEN = 'dosen/dosen.html';
	const HALAMAN_RINCIAN_DOSEN = 'dosen/rinciandosen.html';

	const HALAMAN_ADMIN_DOSEN = 'admin/dosen.html';
	
	function checkReward($tipe) {
		$pengguna = Auth::getPengguna();
		$model = $pengguna->dosens()->get();
		$total = $model->count();
		foreach (Achievment::where('tipe', '=', $tipe)->get() as $achiev) {
			if($achiev->target <= $total) {
				$reward = $achiev->penggunas()->get();
				if($reward->count() != 0) {
					if($reward->first()->pivot->where('pengguna_nomor', '=', $pengguna->npm)->count() < 1) {
						$pengguna1 = Pengguna::where('npm', '=', $pengguna->npm)->first();
						$achiev->penggunas()->attach($pengguna1->npm);
					}
				}
				else {
					$pengguna1 = Pengguna::where('npm', '=', $pengguna->npm)->first();
					$achiev->penggunas()->attach($pengguna1->npm);
				}
			}
		}
	}


	function tampilDaftarDosen() {
		$daftarDosen = Dosen::all();	//TODO : Paginasi

		$data = array();
		$data['daftarDosen'] = $daftarDosen;

		$this->render(self::HALAMAN_DAFTAR_DOSEN, $data);
	}

	function tampilRincianDosen($id) {
		$dosen = Dosen::find($id);		//TODO : Handle Not Found (404)
		$data = array();
		$data['dosen'] = $dosen;
		$subscribe = Dosen::find($id)->penggunas()->get();
		$data['subscribe'] = $subscribe;
		$this->render(self::HALAMAN_RINCIAN_DOSEN, $data);
	}
	
	function subunsub($id) {
		$pengguna1 = Auth::getPengguna();
		$nomor = $pengguna1->npm;
		$sub = Dosen::find($id)->penggunas()->get();
		
		$dosen = Dosen::where('id', '=', $id)->first();
		$namadsn = $dosen->nama;
		
		$activity1 = new ActivityLog;
		$activity1->pengguna_npm = $pengguna1->npm;
		$activity1->dosen_id = $id;
		
		if($sub->count() > 0){
			if($sub->first()->pivot->where('pengguna_nomor' , '=' , $nomor)->where('dosen_nip', '=', $id)->count() < 1){
				$dosen = Dosen::where('id', '=', $id)->first();
				$pengguna = Pengguna::where('npm', '=', $nomor)->first();
				$dosen->penggunas()->attach($pengguna->npm);
				$this->app->flash('notif', 'Berhasil melakukan subscribe');
				$activity1->activity = "melakukan Subscribe dosen $namadsn";
				$this->checkReward('subscribe');
			} else {
				$sub1 = $sub->first()->pivot->where('pengguna_nomor' , '=' , $nomor)->where('dosen_nip', '=', $id)->delete();
				$this->app->flash('notif', 'Berhasil melakukan unsubscribe');
				$activity1->activity = "melakukan Unsubscribe dosen $namadsn";
			}
		}
		else {
			$dosen = Dosen::where('id', '=', $id)->first();
			$pengguna = Pengguna::where('npm', '=', $nomor)->first();
			$dosen->penggunas()->attach($pengguna->npm);
			$this->app->flash('notif', 'Berhasil melakukan subscribe');
			$activity1->activity = "melakukan Subscribe dosen $namadsn";
			$this->checkReward('subscribe');
		}
		$activity1->save();
		$this->app->response->redirect($this->app->urlFor('rinciandosen', array('id' => $id)), 400);
	}

	/* ADMIN */
	function tampilAdministrasiDosen() {	// TODO : Auth harus admin
		$dosen = Dosen::all();			// TODO : Paginasi

		$data = array();
		$data['daftarDosen'] = $dosen;

		$this->render(self::HALAMAN_ADMIN_DOSEN,$data);
	}
	
	// CRUD
	function createDosen() {
		$dosen = $this->app->request->post();

		$nip = $dosen['nip'];
		$nama = $dosen['nama'];
		$jeniskelamin = $dosen['jeniskelamin'];
		$ttl = $dosen['ttl'];

		$dosen1 = new Dosen;
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();
		$this->app->flash('notif', 'Berhasil menambah dosen '.$nama.' dengan id #' . $dosen1->id);

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function updateDosen($id) {
		$dosen = $this->app->request->post();

		$nip = $dosen['nip'];
		$nama = $dosen['nama'];
		$jeniskelamin = $dosen['jeniskelamin'];
		$ttl = $dosen['ttl'];

		$dosen1 = Dosen::find($id);
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->ttl = $ttl;
		$dosen1->save();
		$this->app->flash('notif', 'Berhasil mengubah dosen '.$nama.' dengan id #' . $id);

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}
	
	function deleteDosen($id) {
		$dosen = Dosen::find($id);
		$this->app->flash('notif', 'Berhasil menghapus dosen '.$dosen->nama.' dengan id #' . $id);
		$dosen->delete();
		
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 400);
	}

}