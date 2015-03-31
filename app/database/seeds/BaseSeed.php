<?php

class BaseSeed {

    function run()
    {
		$dosen1 = new Dosen;
		$dosen1->nip = "1112";
		$dosen1->nama = "Anto";
		$dosen1->jeniskelamin = "Laki-Laki";
		$dosen1->ttl = date("1995-07-22");
		
		$dosen2 = new Dosen;
		$dosen2->nip = "1113";
		$dosen2->nama = "Budi";
		$dosen2->jeniskelamin = "Laki-Laki";
		$dosen2->ttl = date("1999-07-22");
		
		$dosen3 = new Dosen;
		$dosen3->nip = "1114";
		$dosen3->nama = "Caca";
		$dosen3->jeniskelamin = "Perempuan";
		$dosen3->ttl = date("1994-07-22");
		
		$matkul1 = new MataKuliah;
		$matkul1->kodemk = "IK00001";
		$matkul1->nama = "PPL";
		$matkul1->sks = 6;
		$matkul1->prodi = "Ilmu Komputer";
		$matkul1->dosens()->attach($dosen1->nip);
		$matkul1->dosens()->attach($dosen3->nip);
		
		$matkul2 = new MataKuliah;
		$matkul2->kodemk = "IK00002";
		$matkul2->nama = "Propensi";
		$matkul2->sks = 6;
		$matkul2->prodi = "Sistem Informasi";
		$matkul2->dosens()->attach($dosen2->nip);
		
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
		$matkulmatdas2->prodi = "Fakultas";
		
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
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Fakultas";
		
		
		$feedback = new Feedback;
		$feedback->isi = "kotak feedbacknya";
		
		
		$review1 = new Review;
		$review1->jenis = "baik";
		$review1->isi = "sangat direkomendasikan";
		$review1->dosen_nip = $dosen1->nip;
		
		$review2 = new Review;
		$review2->jenis = "buruk";
		$review2->isi = "terlalu cepat ngajarnya";
		$review2->dosen_nip = $dosen1->nip;
		
		$dosen1->save();
		$dosen2->save();
		$dosen3->save();
		$matkul1->save();
		$matkul2->save();
		$review1->save();
		$review2->save();
		
		$komentar1 = new Komentar;
		$komentar1->isi = "saya setuju";
		$komentar1->review_id = $review1->id;
		
		$komentar2 = new Komentar;
		$komentar2->isi = "saya tidak setuju";
		$komentar2->review_id = $review1->id;
		
		$komentar3 = new Komentar;
		$komentar3->isi = "mantap!";
		$komentar3->review_id = $review2->id;
		
		$vote1 = new UpvoteDownvote;
		$vote1->tipe = 1;
		$vote1->review_id = $review1->id;
		
		$vote2 = new UpvoteDownvote;
		$vote2->tipe = 0;
		$vote2->review_id = $review1->id;
		
		$vote3 = new UpvoteDownvote;
		$vote3->tipe = 1;
		$vote3->review_id = $review2->id;
		
		$report1 = new Report;
		$report1->review_id = $review1->id;
		
		$report2 = new Report;
		$report2->review_id = $review1->id;
		
		$report3 = new Report;
		$report3->review_id = $review2->id;
		
		$komentar1->save();
		$komentar2->save();
		$komentar3->save();
		$vote1->save();
		$vote2->save();
		$vote3->save();
		$report1->save();
		$report2->save();
		$report3->save();

        // $dosen = new Dosen;
        // $dosen->nik = "0089645";
        // $dosen->nama = "Budi Gugun";
        // $dosen->save();
    }
}