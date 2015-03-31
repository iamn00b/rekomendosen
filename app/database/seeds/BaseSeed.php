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