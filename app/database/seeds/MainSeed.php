<?php

class MainSeed {

    function run()
    {

    	/* Pengguna */
    	$pengguna1 = new Pengguna;
    	$pengguna1->nomor = '1206240814';
    	$pengguna1->nama = 'Thirafi Dide';
    	$pengguna1->role = Pengguna::ADMINISTRATOR;
    	$pengguna1->save();

    	/* DOSEN */
		$dosen1 = new Dosen;
		$dosen1->nip = "1112";
		$dosen1->nama = "Anto";
		$dosen1->jeniskelamin = Dosen::LAKI_LAKI;
		$dosen1->pendidikan = 'S2';
		
		$dosen2 = new Dosen;
		$dosen2->nip = "1113";
		$dosen2->nama = "Budi";
		$dosen2->jeniskelamin = Dosen::LAKI_LAKI; 
		$dosen2->pendidikan = 'S3';
		
		$dosen3 = new Dosen;
		$dosen3->nip = "1114";
		$dosen3->nama = "Caca";
		$dosen3->jeniskelamin = Dosen::PEREMPUAN;
		$dosen3->pendidikan = 'S2';
		
		$dosen1->save();
		$dosen2->save();
		$dosen3->save();
		
		/* MATA KULIAH */
		$matkul_ppl = new MataKuliah;
		$matkul_ppl->kodemk = "IK00001";
		$matkul_ppl->nama = "Proyek Perangkat Lunak";
		$matkul_ppl->singkatan_1 = "PPL";
		$matkul_ppl->singkatan_2 = "RPL Lanjut";
		$matkul_ppl->sks = 6;
		$matkul_ppl->semester = 6;
		$matkul_ppl->jenis = MataKuliah::JURUSAN;
		$matkul_ppl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ppl->save();
		
		$matkul_propensi = new MataKuliah;
		$matkul_propensi->kodemk = "SI00001";
		$matkul_propensi->nama = "Proyek Pengembangan Sistem Informasi";
		$matkul_propensi->singkatan_1 = "Propensi";
		$matkul_propensi->sks = 6;
		$matkul_propensi->semester = 6;
		$matkul_propensi->jenis = MataKuliah::JURUSAN;
		$matkul_propensi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_propensi->save();

		$matkul_anum = new MataKuliah;
		$matkul_anum->kodemk = "IK00003";
		$matkul_anum->nama = "Analisis Numerik";
		$matkul_anum->singkatan_1 = "Anum";
		$matkul_anum->sks = 3;
		$matkul_anum->semester = 6;
		$matkul_anum->jenis = MataKuliah::JURUSAN;
		$matkul_anum->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_anum->save();

		$matkul_matdas2 = new MataKuliah;
		$matkul_matdas2->kodemk = "IK00002";
		$matkul_matdas2->nama = "Matematika Dasar 2";
		$matkul_matdas2->singkatan_1 = "Matdas 2";
		$matkul_matdas2->sks = 3;
		$matkul_matdas2->semester = 2;
		$matkul_matdas2->jenis = MataKuliah::JURUSAN;
		$matkul_matdas2->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_matdas2->save();

		$matkul_ppl->dosen()->attach($dosen1->id);
		$matkul_ppl->dosen()->attach($dosen3->id);
		$matkul_ppl->save();

		$matkul_propensi->dosen()->attach($dosen1->id);
		$matkul_propensi->dosen()->attach($dosen2->id);
		$matkul_propensi->save();

		$matkul_matdas2->dosen()->attach($dosen1->id);
		$matkul_matdas2->save();

		$matkul_anum->dosen()->attach($dosen1->id);
		$matkul_anum->dosen()->attach($dosen2->id);
		$matkul_anum->prasyarat()->attach($matkul_matdas2->id);
		$matkul_anum->save();
		
		
		/* REVIEW */
		$review1 = new Review;
		$review1->rating = 5;
		$review1->isi = "sangat direkomendasikan";
		$review1->dosen_id = $dosen1->id;
		$review1->pengguna_id = $pengguna1->id;
		
		$review2 = new Review;
		$review2->rating = 2;
		$review2->isi = "terlalu cepat ngajarnya";
		$review2->dosen_id = $dosen1->id;
		$review2->pengguna_id = $pengguna1->id;

		$review1->save();
		$review2->save();
		
		$komentar1 = new Komentar;
		$komentar1->isi = "saya setuju";
		$komentar1->review_id = $review1->id;
		$komentar1->pengguna_id = $pengguna1->id;
		
		$komentar2 = new Komentar;
		$komentar2->isi = "saya tidak setuju";
		$komentar2->review_id = $review1->id;
		$komentar2->pengguna_id = $pengguna1->id;
		
		$komentar3 = new Komentar;
		$komentar3->isi = "mantap!";
		$komentar3->review_id = $review2->id;
		$komentar3->pengguna_id = $pengguna1->id;
		
		$komentar1->save();
		$komentar2->save();
		$komentar3->save();
		
		$vote1 = new Vote;
		$vote1->tipe = Vote::UP;
		$vote1->review_id = $review1->id;
		$vote1->pengguna_id = $pengguna1->id;
		
		$vote2 = new Vote;
		$vote2->tipe = Vote::DOWN;
		$vote2->review_id = $review2->id;
		$vote2->pengguna_id = $pengguna1->id;

		$vote1->save();
		$vote2->save();	
			
		// $report1 = new Report;
		// $report1->review_id = $review1->id;
		// $report1->pengguna_npm = $pengguna1->npm;
		
		// $report2 = new Report;
		// $report2->review_id = $review1->id;
		// $report2->pengguna_npm = $pengguna1->npm;
		
		// $report3 = new Report;
		// $report3->review_id = $review2->id;
		// $report3->pengguna_npm = $pengguna1->npm;


		// $vote3->save();

		// $report1->save();
		// $report2->save();
		// $report3->save();
		
  //   	$pengguna1->save();

        // $dosen = new Dosen;
        // $dosen->nik = "0089645";
        // $dosen->nama = "Budi Gugun";
        // $dosen->save();
    }
}