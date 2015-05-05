<?php

class BaseSeed {

    function run()
    {
    	/* Pengguna */
    	$pengguna1 = new Pengguna;
    	$pengguna1->npm = '1206240814';
    	$pengguna1->nama = 'Thirafi Dide';
    	$pengguna1->role = Pengguna::ADMINISTRATOR;

    	/* DOSEN */
		$dosen1 = new Dosen;
		$dosen1->nip = "1112";
		$dosen1->nama = "Anto";
		$dosen1->jeniskelamin = "Laki-Laki";
		$dosen1->pendidikan = "S1";
		$dosen1->foto = "tes.jpg";
		
		$dosen2 = new Dosen;
		$dosen2->nip = "1113";
		$dosen2->nama = "Budi";
		$dosen2->jeniskelamin = "Laki-Laki";
		$dosen2->pendidikan = "S2";
		$dosen2->foto = "tes.jpg";
		
		$dosen3 = new Dosen;
		$dosen3->nip = "1114";
		$dosen3->nama = "Caca";
		$dosen3->jeniskelamin = "Perempuan";
		$dosen3->pendidikan = "S3";
		$dosen3->foto = "tes.jpg";
		
		$dosen1->save();
		$dosen2->save();
		$dosen2->penggunas()->attach($pengguna1->npm);
		$dosen3->save();
		
		/* MATA KULIAH */
		$matkul1 = new MataKuliah;
		$matkul1->kodemk = "IK00001";
		$matkul1->nama = "Proyek Perangkat Lunak";
		$matkul1->sks = 6;
		$matkul1->semester = 6;
		$matkul1->prodi = "Ilmu Komputer";
		$matkul1->jenis = "Wajib Studi";
		$matkul1->singkatan_1 = "PPL";
		$matkul1->singkatan_2 = "SE";
		$matkul1->deskripsi = "Mata kuliah ini mempersiapkan mahasiswa untuk dapat menyelesaikan masalah yang terkait dengan aljabar matriks dan konsep ruang vektor. Mata kuliah ini membekali mahasiswa dengan logical reasoning dan abstraksi matematika.";
		$matkul1->save();
		$matkul1->dosens()->attach($dosen1->id);
		$matkul1->dosens()->attach($dosen3->id);
		
		
		$matkul2 = new MataKuliah;
		$matkul2->kodemk = "SI00001";
		$matkul2->nama = "Proyek Pengembangan Sistem Informasi";
		$matkul2->sks = 6;
		$matkul2->semester = 6;
		$matkul2->prodi = "Sistem Informasi";
		$matkul2->jenis = "Wajib Studi";
		$matkul2->singkatan_1 = "Propensi";
		$matkul2->singkatan_2 = "SE";
		$matkul2->deskripsi = "Mata kuliah ini mempersiapkan mahasiswa untuk dapat menyelesaikan masalah yang terkait dengan aljabar matriks dan konsep ruang vektor. Mata kuliah ini membekali mahasiswa dengan logical reasoning dan abstraksi matematika.";
		$matkul2->save();
		$matkul2->dosens()->attach($dosen1->id);
		$matkul2->dosens()->attach($dosen2->id);
		

		$matkul3 = new MataKuliah;
		$matkul3->kodemk = "IK00003";
		$matkul3->nama = "Analisis Numerik";
		$matkul3->sks = 3;
		$matkul3->semester = 6;
		$matkul3->prodi = "Ilmu Komputer";
		$matkul3->jenis = "Wajib Studi";
		$matkul3->singkatan_1 = "Anum";
		$matkul3->singkatan_2 = "NA";
		$matkul3->deskripsi = "Mata kuliah ini mempersiapkan mahasiswa untuk dapat menyelesaikan masalah yang terkait dengan aljabar matriks dan konsep ruang vektor. Mata kuliah ini membekali mahasiswa dengan logical reasoning dan abstraksi matematika.";
		$matkul3->save();
		$matkul3->dosens()->attach($dosen1->id);
		$matkul3->dosens()->attach($dosen2->id);
		

		$matkul4 = new MataKuliah;
		$matkul4->kodemk = "IK00002";
		$matkul4->nama = "Aljabar Linear";
		$matkul4->sks = 3;
		$matkul4->semester = 2;
		$matkul4->prodi = "Fakultas";
		$matkul4->jenis = "Wajib Studi";
		$matkul4->singkatan_1 = "Alin";
		$matkul4->singkatan_2 = "LA";
		$matkul4->deskripsi = "Mata kuliah ini mempersiapkan mahasiswa untuk dapat menyelesaikan masalah yang terkait dengan aljabar matriks dan konsep ruang vektor. Mata kuliah ini membekali mahasiswa dengan logical reasoning dan abstraksi matematika.";
		$matkul4->save();
		$matkul4->dosens()->attach($dosen1->id);
		$matkul4->dosens()->attach($dosen2->id);
		
		
		$matkulmatdas1 = new MataKuliah;
		$matkulmatdas1->kodemk = "MAT10113";
		$matkulmatdas1->nama = "Matematika Dasar 1";
		$matkulmatdas1->sks = 2;
		$matkulmatdas1->prodi = "Fakultas";
		
		$matkulfisdas1 = new MataKuliah;
		$matkulfisdas1->kodemk = "FSK10111";
		$matkulfisdas1->nama = "Fisika Dasar 1";
		$matkulfisdas1->sks = 3;
		$matkulfisdas1->prodi = "Fakultas";
		
		$matkulmatdis1 = new MataKuliah;
		$matkulmatdis1->kodemk = "IKI10100";
		$matkulmatdis1->nama = "Matematika Diskret 1";
		$matkulmatdis1->sks = 3;
		$matkulmatdis1->prodi = "Fakultas";
		
		$matkulddp = new MataKuliah;
		$matkulddp->kodemk = "IKI10200";
		$matkulddp->nama = "Dasar-Dasar Pemrograman";
		$matkulddp->sks = 6;
		$matkulddp->prodi = "Fakultas";
		
		$matkulsda = new MataKuliah;
		$matkulsda->kodemk = "IKI10400";
		$matkulsda->nama = "Struktur Data & Algoritma";
		$matkulsda->sks = 4;
		$matkulsda->prodi = "Fakultas";
		
		$matkulalin = new MataKuliah;
		$matkulalin->kodemk = "IKI10103";
		$matkulalin->nama = "Aljabar Linier";
		$matkulalin->sks = 3;
		$matkulalin->prodi = "Fakultas";
		
		$matkulmatdis2 = new MataKuliah;
		$matkulmatdis2->kodemk = "IKI20101";
		$matkulmatdis2->nama = "Matematika Diskret 2";
		$matkulmatdis2->sks = 3;
		$matkulmatdis2->prodi = "Fakultas";
		
		$matkulstatprob = new MataKuliah;
		$matkulstatprob->kodemk = "IKI20102";
		$matkulstatprob->nama = "Statistika & Probabilitas";
		$matkulstatprob->sks = 4;
		$matkulstatprob->prodi = "Fakultas";
		
		$matkulppw = new MataKuliah;
		$matkulppw->kodemk = "IKI20201";
		$matkulppw->nama = "Perancangan & Pemrograman Web";
		$matkulppw->sks = 3;
		$matkulppw->prodi = "Fakultas";
		
		$matkulsistemoperasi = new MataKuliah;
		$matkulsistemoperasi->kodemk = "IKI20505";
		$matkulsistemoperasi->nama = "Sistem Operasi";
		$matkulsistemoperasi->sks = 4;
		$matkulsistemoperasi->prodi = "Fakultas";
		
		$matkulbasdat = new MataKuliah;
		$matkulbasdat->kodemk = "IKI20700";
		$matkulbasdat->nama = "Basis Data";
		$matkulbasdat->sks = 4;
		$matkulbasdat->prodi = "Fakultas";
		
		$matkulppw = new MataKuliah;
		$matkulppw->kodemk = "IKI30202";
		$matkulppw->nama = "Rekayasa Perangkat Lunak";
		$matkulppw->sks = 3;
		$matkulppw->prodi = "Fakultas";
		
		$matkulkp = new MataKuliah;
		$matkulkp->kodemk = "IKI40902";
		$matkulkp->nama = "Kerja Praktik";
		$matkulkp->sks = 3;
		$matkulkp->prodi = "Fakultas";
		
		$matkulkomas = new MataKuliah;
		$matkulkomas->kodemk = "IKI40903";
		$matkulkomas->nama = "Komputer & Masyarakat";
		$matkulkomas->sks = 3;
		$matkulkomas->prodi = "Fakultas";
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "|IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		
		$matkulkp = new MataKuliah;
		$matkulkp->kodemk = "IKI40902";
		$matkulkp->nama = "Kerja Praktik";
		$matkulkp->sks = 3;
		$matkulkp->prodi = "Fakultas";
		
		$matkulkomas = new MataKuliah;
		$matkulkomas->kodemk = "IKI40903";
		$matkulkomas->nama = "Kerja Praktik";
		$matkulkomas->sks = 3;
		$matkulkomas->prodi = "Fakultas";
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		$matkulpsd = new MataKuliah;
		$matkulpsd->kodemk = "IKO12500";
		$matkulpsd->nama = "Pengantar Sistem Dijital";
		$matkulpsd->sks = 4;
		$matkulpsd->prodi = "Fakultas";
		
		$matkulpok = new MataKuliah;
		$matkulpok->kodemk = "IKO21502";
		$matkulpok->nama = "Pengantar Organisasi Komputer";
		$matkulpok->sks = 3;
		$matkulpok->prodi = "Fakultas";
		
		$matkulmatdas2 = new MataKuliah;
		$matkulmatdas2->kodemk = "IKO21105";
		$matkulmatdas2->nama = "Matematika Dasar 2";
		$matkulmatdas2->sks = 4;
		$matkulfisdas2->prodi = "Fakultas";
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "IKO22401";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		/* REVIEW */

		$review1 = new Review;
		$review1->jenis = "baik";
		$review1->isi = "sangat direkomendasikan";
		$review1->dosen_id = $dosen1->id;
		$review1->pengguna_npm = $pengguna1->npm;
		
		$review2 = new Review;
		$review2->jenis = "buruk";
		$review2->isi = "terlalu cepat ngajarnya";
		$review2->dosen_id = $dosen1->id;
		$review2->pengguna_npm = $pengguna1->npm;

		$review1->save();
		$review2->save();
		
		$komentar1 = new Komentar;
		$komentar1->isi = "saya setuju";
		$komentar1->review_id = $review1->id;
		$komentar1->pengguna_npm = $pengguna1->npm;
		
		$komentar2 = new Komentar;
		$komentar2->isi = "saya tidak setuju";
		$komentar2->review_id = $review1->id;
		$komentar2->pengguna_npm = $pengguna1->npm;
		
		$komentar3 = new Komentar;
		$komentar3->isi = "mantap!";
		$komentar3->review_id = $review2->id;
		$komentar3->pengguna_npm = $pengguna1->npm;
		
		$vote1 = new UpvoteDownvote;
		$vote1->tipe = 1;
		$vote1->review_id = $review1->id;
		$vote1->pengguna_npm = $pengguna1->npm;
		
		$vote2 = new UpvoteDownvote;
		$vote2->tipe = 0;
		$vote2->review_id = $review1->id;
		$vote2->pengguna_npm = $pengguna1->npm;
		
		$vote3 = new UpvoteDownvote;
		$vote3->tipe = 1;
		$vote3->review_id = $review2->id;
		$vote3->pengguna_npm = $pengguna1->npm;
		
		$report1 = new Report;
		$report1->review_id = $review1->id;
		$report1->pengguna_npm = $pengguna1->npm;
		
		$report2 = new Report;
		$report2->review_id = $review1->id;
		$report2->pengguna_npm = $pengguna1->npm;
		
		$report3 = new Report;
		$report3->review_id = $review2->id;
		$report3->pengguna_npm = $pengguna1->npm;
		
		$pengguna1->save();
		
		$komentar1->save();
		$komentar2->save();
		$komentar3->save();

		$vote1->save();
		$vote2->save();
		$vote3->save();

		$report1->save();
		$report2->save();
		$report3->save();
		
    	$pengguna1->save();

        // $dosen = new Dosen;
        // $dosen->nik = "0089645";
        // $dosen->nama = "Budi Gugun";
        // $dosen->save();
    }
}