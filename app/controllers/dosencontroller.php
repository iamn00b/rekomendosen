<?php

use Illuminate\Database\Eloquent\ModelNotFoundException; 

class DosenController extends _MainController { 

	const HALAMAN_DAFTAR_DOSEN = 'dosen/dosen.html';
	const HALAMAN_RINCIAN_DOSEN = 'dosen/rinciandosen.html';

	const HALAMAN_ADMIN_DOSEN = 'admin/dosen.html';


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

		$this->render(self::HALAMAN_RINCIAN_DOSEN, $data);
	}

	function subscribe($id) {
		try {
			$dosen = Dosen::findOrFail($id);
			$pengguna = Auth::getPengguna();

			$data = array();
			$data['status'] = 'success';

			if (!$pengguna->isSubscribe($dosen->id)) {
				$pengguna->subscribe()->attach($dosen->id);
				$data['subscribe'] = true;
			} else {
				$pengguna->subscribe()->detach($dosen->id);
				$data['subscribe'] = false;
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
		$pendidikan = $dosen['pendidikan'];

		$dosen1 = new Dosen;
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->pendidikan = $pendidikan;
		$dosen1->save();
		$this->app->flash('notif', 'Berhasil menambah dosen '.$nama);

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 200);
	}
	
	function updateDosen($id) {
		$dosen = $this->app->request->post();

		$nip = $dosen['nip'];
		$nama = $dosen['nama'];
		$jeniskelamin = $dosen['jeniskelamin'];
		$pendidikan = $dosen['pendidikan'];

		$dosen1 = Dosen::find($id);
		$dosen1->nip = $nip;
		$dosen1->nama = $nama;
		$dosen1->jeniskelamin = $jeniskelamin;
		$dosen1->pendidikan = $pendidikan;
		$dosen1->save();
		$this->app->flash('notif', 'Berhasil mengubah dosen '.$nama);

		$this->app->response->redirect($this->app->urlFor('cruddosen'), 200);
	}
	
	function deleteDosen($id) {
		$dosen = Dosen::find($id);
		$this->app->flash('notif', 'Berhasil menghapus dosen '.$dosen->nama);
		$dosen->delete();
		
		$this->app->response->redirect($this->app->urlFor('cruddosen'), 200);
	}

}