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
		
		$dosenbela = new Dosen;
		$dosenbela->nip = "030603001";
		$dosenbela->nama = "Prof. Belawati H. Widjaja, Dra, M.Sc., Ph.D.";
		$dosenbela->jeniskelamin = "Perempuan";
		$dosenbela->ttl = date("1938-12-27");
		
		$dosenaniati = new Dosen;
		$dosenaniati->nip = "194805291975012001";
		$dosenaniati->nama = "Prof. Aniati Murni Arymurthy , Ir, M.Sc, Dr.";
		$dosenaniati->jeniskelamin = "Perempuan";
		$dosenaniati->ttl = date("1948-05-29");
		
		$dosenheru = new Dosen;
		$dosenheru->nip = "196104191992031001";
		$dosenheru->nama = "Prof. Heru Suhartanto, Drs, M.Sc , Ph.D.";
		$dosenheru->jeniskelamin = "Laki-Laki";
		$dosenheru->ttl = date("1961-04-19");
		
		$dosenchan = new Dosen;
		$dosenchan->nip = "196111251992031001";
		$dosenchan->nama = "Prof. T. Basaruddin,Drs, M.Sc, PhD";
		$dosenchan->jeniskelamin = "Laki-Laki";
		$dosenchan->ttl = date("1961-11-25");
		
		$dosentoemin = new Dosen;
		$dosentoemin->nip = "194901071976031001";
		$dosentoemin->nama = "Prof. Toemin A. Masoem, M.Sc, Dr.";
		$dosentoemin->jeniskelamin = "Laki-Laki";
		$dosentoemin->ttl = date("1949-01-07");
		
		$dosenzainal = new Dosen;
		$dosenzainal->nip = "195912241995121001";
		$dosenzainal->nama = "Prof. Zainal Arifin Hasibuan, Ir.,MLS, PhD.";
		$dosenzainal->jeniskelamin = "Laki-Laki";
		$dosenzainal->ttl = date("1959-12-24");
		
		$dosennizar = new Dosen;
		$dosennizar->nip = "197607242000121001";
		$dosennizar->nama = "Achmad Nizar Hidayanto, S.Kom, M.Kom. Dr.";
		$dosennizar->jeniskelamin = "Laki-Laki";
		$dosennizar->ttl = date("1976-07-24");
		
		$dosenade = new Dosen;
		$dosenade->nip = "197612122010121001";
		$dosenade->nama = "Ade Azurat, S.Kom., Dr.";
		$dosenade->jeniskelamin = "Laki-Laki";
		$dosenade->ttl = date("1976-12-12");
		
		$dosenadhi = new Dosen;
		$dosenadhi->nip = "195906231997021001";
		$dosenadhi->nama = "Adhi Yuniarto L.Y., Ir, M.Kom.";
		$dosenadhi->jeniskelamin = "Laki-Laki";
		$dosenadhi->ttl = date("1111-06-23");
		
		$dosenalfan = new Dosen;
		$dosenalfan->nip = "121303009";
		$dosenalfan->nama = "Alfan Farizki Wicaksono, ST., M.Sc.";
		$dosenalfan->jeniskelamin = "Laki-Laki";
		$dosenalfan->ttl = date("1111-11-11");
		
		$dosenamril = new Dosen;
		$dosenamril->nip = "120703001";
		$dosenamril->nama = "Amril Syalim, S.Kom. M.Eng.";
		$dosenamril->jeniskelamin = "Laki-Laki";
		$dosenamril->ttl = date("1111-11-11");
		
		$dosenbagyo = new Dosen;
		$dosenbagyo->nip = "130517315";
		$dosenbagyo->nama = "Bagyo Y. Moeliodihardjo, Ir, M.Sc.";
		$dosenbagyo->jeniskelamin = "Laki-Laki";
		$dosenbagyo->ttl = date("1111-11-11");
		
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
		$dosenbela->save();
		$dosenaniati->save();
		$dosenheru->save();
		$dosenchan->save();
		$dosentoemin->save();
		$dosenzainal->save();
		$dosennizar->save();
		$dosenade->save();
		$dosenadhi->save();
		$dosenalfan->save();
		$dosenamril->save();
		$dosenbagyo->save();
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