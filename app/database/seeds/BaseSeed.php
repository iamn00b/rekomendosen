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
		
		$dosenbela = new Dosen;
		$dosenbela->nip = "030603001";
		$dosenbela->nama = "Prof. Belawati H. Widjaja, Dra, M.Sc., Ph.D.";
		$dosenbela->jeniskelamin = Dosen::PEREMPUAN;
		$dosen1->pendidikan = 'S3';
		
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
			
    }
}
//////////////////////////////////////////////////////////////////////////

<?php

class BaseSeed {

    function run()
    {
		
		
		$dosenani = new Dosen;
		$dosenani->nip = "194805291975012001";
		$dosenani->nama = "Prof. Aniati Murni Arymurthy , Ir, M.Sc, Dr.";
		$dosenani->jeniskelamin = "Perempuan";
		$dosenani->ttl = date("1948-05-29");
		
		$dosenherus = new Dosen;
		$dosenherus ->nip = "196104191992031001";
		$dosenherus ->nama = "Prof. Heru Suhartanto, Drs, M.Sc , Ph.D.";
		$dosenherus ->jeniskelamin = "Laki-Laki";
		$dosenherus ->ttl = date("1961-04-19");
		
		$dosencan = new Dosen;
		$dosencan ->nip = "196111251992031001";
		$dosencan ->nama = "Prof. T. Basaruddin,Drs, M.Sc, PhD";
		$dosencan ->jeniskelamin = "Laki-Laki";
		$dosencan ->ttl = date("1961-11-25");
		
		$dosenzain = new Dosen;
		$dosenzain ->nip = "195912241995121001";
		$dosenzain ->nama = "Prof. Zainal Arifin Hasibuan, Ir.,MLS, PhD.";
		$dosenzain ->jeniskelamin = "Laki-Laki";
		$dosenzain ->ttl = date("1959-12-24");
		
		$dosennizar = new Dosen;
		$dosennizar ->nip = "197607242000121001";
		$dosennizar ->nama = "Achmad Nizar Hidayanto, S.Kom, M.Kom. Dr.";
		$dosennizar ->jeniskelamin = "Laki-Laki";
		$dosennizar ->ttl = date("1976-07-24");
		
		$dosenade = new Dosen;
		$dosenade ->nip = "197612122010121001";
		$dosenade ->nama = "Ade Azurat, S.Kom., Dr.";
		$dosenade ->jeniskelamin = "Laki-Laki";
		$dosenade ->ttl = date("1976-12-12");
		
		$dosenadhi = new Dosen;
		$dosenadhi ->nip = "195906231997021001";
		$dosenadhi ->nama = "Adhi Yuniarto L.Y., Ir, M.Kom.";
		$dosenadhi ->jeniskelamin = "Laki-Laki";
		$dosenadhi ->ttl = date("xxxx-06-23");
		
		$dosenalfan = new Dosen;
		$dosenalfan ->nip = "121303009";
		$dosenalfan ->nama = "Alfan Farizki Wicaksono, ST., M.Sc.";
		$dosenalfan ->jeniskelamin = "Laki-Laki";
		$dosenalfan ->ttl = date("xxxx-xx-xx");
		
		$dosenamril = new Dosen;
		$dosenamril ->nip = "120703001";
		$dosenamril ->nama = "Amril Syalim, S.Kom. M.Eng.";
		$dosenamril ->jeniskelamin = "Laki-Laki";
		$dosenamril ->ttl = date("xxxx-xx-xx");
		
		$dosenamril = new Dosen;
		$dosenamril ->nip = "130517315";
		$dosenamril ->nama = "Bagyo Y. Moeliodihardjo, Ir, M.Sc.";
		$dosenamril ->jeniskelamin = "Laki-Laki";
		$dosenamril ->ttl = date("xxxx-xx-xx");
		
		$dosenbayu = new Dosen;
		$dosenbayu ->nip = "198704262012121002";
		$dosenbayu ->nama = "Bayu Distiawan Trisedya, M.Kom";
		$dosenbayu ->jeniskelamin = "Laki-Laki";
		$dosenbayu ->ttl = date("xxxx-xx-xx");
		
		$dosenbetty = new Dosen;
		$dosenbetty ->nip = "197006301997032001";
		$dosenbetty ->nama = "Betty Purwandari, S.Kom., M.Sc., PhD.";
		$dosenbetty ->jeniskelamin = "Perempuan";
		$dosenbetty ->ttl = date("1970-06-23-30");
		
		$dosenbob = new Dosen;
		$dosenbob ->nip = "196604261997021001";
		$dosenbob ->nama = "Bob Hardian Syahbuddin, Ir, Ph.D.";
		$dosenbob ->jeniskelamin = "Laki-Laki";
		$dosenbob ->ttl = date("xxxx-xx-xx");
		
		$dosenbobby = new Dosen;
		$dosenbobby ->nip = "1207050178";
		$dosenbobby ->nama = "Bobby A. Nazief, Drs., M.Sc., Ph.D.";
		$dosenbobby ->jeniskelamin = "Laki-Laki";
		$dosenbobby ->ttl = date("1959-11-01");
		
		$dosenbobby = new Dosen;
		$dosenbobby ->nip = "196901161997031003";
		$dosenbobby ->nama = "Dadan Hardianto, S.Kom, M.Kom.";
		$dosenbobby ->jeniskelamin = "Laki-Laki";
		$dosenbobby ->ttl = date("xxxx-xx-xx");
		
		$dosendana = new Dosen;
		$dosendana ->nip = "196110221995031001";
		$dosendana ->nama = "Dana Indra Sensuse, Ir, MLIS, PhD.";
		$dosendana ->jeniskelamin = "Laki-Laki";
		$dosendana ->ttl = date("1961-10-22");
		
		$dosendenny = new Dosen;
		$dosendenny ->nip = "197704182012121003";
		$dosendenny ->nama = "Denny, S.Kom, MIT, PhD.";
		$dosendenny ->jeniskelamin = "Laki-Laki";
		$dosendenny ->ttl = date("xxxx-xx-xx");
		
		$dosendina = new Dosen;
		$dosendina ->nip = "197705022000122001";
		$dosendina ->nama = "Dina Chahyati, S.Kom., M.Kom.";
		$dosendina ->jeniskelamin = "Perempuan";
		$dosendina ->ttl = date("xxxx-xx-xx");
		
		$doseneko = new Dosen;
		$doseneko ->nip = "195911031992031002";
		$doseneko ->nama = "Eko Kuswardono Budiardjo, Ir, M.Sc.Dr.";
		$doseneko ->jeniskelamin = "Laki-Laki";
		$doseneko ->ttl = date("xxxx-xx-xx");
		

		$doseneko = new Dosen;
		$doseneko ->nip = "	195906171985032000";
		$doseneko ->nama = "Erdefi Rakun, Ir., M.Sc .";
		$doseneko ->jeniskelamin = "Perempuan";
		$doseneko ->ttl = date("xxxx-xx-xx");
		
		$dosenglad = new Dosen;
		$dosenglad ->nip = "1408150029";
		$dosenglad ->nama = "Gladhi Guarddin, S.Kom., M.Kom.";
		$dosenglad ->jeniskelamin = "Laki-Laki";
		$dosenglad ->ttl = date("xxxx-xx-xx");
		
		$dosenefi = new Dosen;
		$dosenefi ->nip = "120803003";
		$dosenefi ->nama = "Harry Budi Santoso, S.Kom., M.Kom., Ph.D.";
		$dosenefi ->jeniskelamin = "Laki-Laki";
		$dosenefi ->ttl = date("xxxx-xx-xx");
		
		$dosenheri = new Dosen;
		$dosenheri ->nip = "198005192010121003";
		$dosenheri ->nama = "Heri Kurniawan, S.Kom, M.Kom.";
		$dosenheri ->jeniskelamin = "Laki-Laki";
		$dosenheri ->ttl = date("xxxx-xx-xx");
		
		$dosenruli = new Dosen;
		$dosenruli ->nip = "1208050380";
		$dosenruli ->nama = "Hisar Maruli Manurung, S.Kom., Ph.D.";
		$dosenruli ->jeniskelamin = "Laki-Laki";
		$dosenruli ->ttl = date("1974-11-09");
		
		$doseniik = new Dosen;
		$doseniik ->nip = "195304201989031002";
		$doseniik ->nama = "Iik Wilarso, dr, MTI";
		$doseniik ->jeniskelamin = "Laki-Laki";
		$doseniik ->ttl = date("xxxx-xx-xx");
		
		$dosenika = new Dosen;
		$dosenika ->nip = "197512202009122003";
		$dosenika ->nama = "Ika Alfina, S.Kom., M.Kom.";
		$dosenika ->jeniskelamin = "Laki-Laki";
		$dosenika ->ttl = date("xxxx-xx-xx");
		
		$dosenindra = new Dosen;
		$dosenindra ->nip = "197603012008121001";
		$dosenindra ->nama = "Indra Budi, S.Kom, M.Kom, Dr";
		$dosenindra ->jeniskelamin = "Laki-Laki";
		$dosenindra ->ttl = date("19xx-03-01");
		
		$dosenito = new Dosen;
		$dosenito ->nip = "120903013";
		$dosenito ->nama = "Ito Wasito, Ph.D";
		$dosenito->jeniskelamin = "Laki-Laki";
		$dosenito ->ttl = date("xxxx-xx-xx");
		
		$dosenkas = new Dosen;
		$dosenkas ->nip = "196105101987032001";
		$dosenkas ->nama = "Kasiyah, Dra, M.Sc.";
		$dosenkas ->jeniskelamin = "Perempuan";
		$dosenkas ->ttl = date("19xx-05-10");
		
		$dosenstef = new Dosen;
		$dosenstef ->nip = "195903251993111001";
		$dosenstef ->nama = "Lim Yohanes Stefanus, Drs, M.Math, Ph.D.";
		$dosenstef ->jeniskelamin = "Laki-Laki";
		$dosenstef ->ttl = date("19xx-xx-xx");
		
		$dosenivan = new Dosen;
		$dosenivan  ->nip = "121003005";
		$dosenivan  ->nama = "M. Ivan Fanany, S.Si, M.Kom, Ph.D.	";
		$dosenivan  ->jeniskelamin = "Laki-Laki";
		$dosenivan  ->ttl = date("19xx-xx-xx");

		$dosenmirna = new Dosen;
		$dosenmirna ->nip = "1207050179";
		$dosenmirna ->nama = "Mirna Adriani, Dra, Ph.D.";
		$dosenmirna ->jeniskelamin = "Perempuan";
		$dosenmirna ->ttl = date("1961-12-23");

		$dosenhilman- = new Dosen;
		$dosenhilman ->nip = "121203003";
		$dosenhilman ->nama = "Muhammad Hafizhuddin Hilman, S.Kom., M.Kom.";
		$dosenhilman ->jeniskelamin = "Laki-Laki";
		$dosenhilman ->ttl = date("1987-04-21"); 
		
		$dosenrah = new Dosen;
		$dosenrah ->nip = "197511261999031001";
		$dosenrah ->nama = "Muhammad Rahmat Widyanto, SKom., M.Eng.Dr. Eng.";
		$dosenrah ->jeniskelamin = "Laki-Laki";
		$dosenrah ->ttl = date("1975-11-26");
		
		$dosenrifki= new Dosen;
		$dosenrifki ->nip = "120503001";
		$dosenrifki->nama = "Muhammad Rifki Shihab, B.B.A., M.Sc.";
		$dosenrifki ->jeniskelamin = "Laki-Laki";
		$dosenrifki ->ttl = date("19xx-01-23");
		
		
		$dosenpetrus = new Dosen;
		$dosenpetrus ->nip = "196706252000031002";
		$dosenpetrus->nama = "Petrus Mursanto, Ir, M.Sc.Dr";
		$dosenpetrus->jeniskelamin = "Laki-Laki";
		$dosenpetrus ->ttl = date("1967-06-25");
		
		$dosenpuspa = new Dosen;
		$dosenpuspa ->nip = "121103004";
		$dosenpuspa ->nama = "Puspa Indahati Sandhyaduhita S.T., M.Sc";
		$dosenpuspa ->jeniskelamin = "Perempuan";
		$dosenpuspa ->ttl = date("19xx-xx-xx");
		
		$dosenputu = new Dosen;
		$dosenputu ->nip = "120803007";
		$dosenputu ->nama = "Putu Wuri Handayani, S.Kom., MSc";
		$dosenputu ->jeniskelamin = "Perempuan";
		$dosenputu ->ttl = date("19xx-xx-xx");
		
		$dosenyugo = new Dosen;
		$dosenyugo ->nip = "196201021992031003";
		$dosenyugo ->nama = "R. Yugo Kartono Isal, Drs, M.Sc., Dr.";
		$dosenyugo ->jeniskelamin = "Laki-Laki";
		$dosenyugo ->ttl = date("19xx-01-02");
		
		$dosenibam = new Dosen;
		$dosenibam->nip = "196012311992031010";
		$dosenibam ->nama = "Rahmat M. Samik-Ibrahim, M. Kom.";
		$dosenibam ->jeniskelamin = "Laki-Laki";
		$dosenibam ->ttl = date("1960-12-31");
		
		$dosenrizal = new Dosen;
		$dosenrizal ->nip = "198202242010121002";
		$dosenrizal ->nama = "Rizal Fathoni Aji, S.Kom., M.Kom";
		$dosenrizal ->jeniskelamin = "Laki-Laki";
		$dosenrizal ->ttl = date("19xx-xx-xx");//
		
		$dosensby = new Dosen;
		$dosensby ->nip = "198305122010121004";
		$dosensby ->nama = "Satrio Baskoro Yudhoatmojo, S.Kom, MTI";
		$dosensby ->jeniskelamin = "Laki-Laki";
		$dosenruli ->ttl = date("119xx-xx-xx");
		 
		$dosenyazid = new Dosen;
		$dosenyazid ->nama = "Setiadi Yazid, Ph.D.";
		$dosenyazid ->jeniskelamin = "Laki-Laki";
		$dosenyazid ->ttl = date("1954-08-15");
		
		$dosenaminah = new Dosen;
		$dosenaminah ->nip = "197801212008122001";
		$dosenaminah ->nama = "Siti Aminah, S.Kom., M.Kom.";
		$dosenaminah ->jeniskelamin = "Perempuan";
		$dosenaminah ->ttl = date("19xx-xx-xx");
		
		$dosensuryana = new Dosen;
		$dosensuryana ->nip = "196210311995031001";
		$dosensuryana ->nama = "Suryana Setiawan, Ir, M.Sc.";
		$dosensuryana ->jeniskelamin = "Laki-Laki";
		$dosensuryana ->ttl = date("1962-01-01");
		
		$dosenwcw = new Dosen;
		$dosenwcw ->nip = "196312061995031001";
		$dosenwcw ->nama = "Wahyu Catur Wibowo, Ir., M.Sc., Ph.D.";
		$dosenwcw ->jeniskelamin = "Laki-Laki";
		$dosenwcw ->ttl = date("1963-12-06");
		
		$dosenwidi = new Dosen;
		$dosenwidi->nip = "1207050180";
		$dosenwidi ->nama = "Widijanto Satyo Nugroho, Drs., M.Math., Ph.D.";
		$dosenwidi ->jeniskelamin = "Laki-Laki";
		$dosenwidi ->ttl = date("1960-05-24");
		
		$dosenwisnu = new Dosen;
		$dosenwisnu ->nip = "1208050382";
		$dosenwisnu ->nama = "Wisnu Jatmiko, Ir.,M.Kom, Dr.Eng.";
		$dosenwisnu ->jeniskelamin = "Laki-Laki";
		$dosenwisnu ->ttl = date("1973-12-16");
		
		$dosenyova = new Dosen;
		$dosenyova ->nip = "197209201998022001";
		$dosenyova ->nama = "Yova Ruldeviyani, S.Kom., M.Kom.";
		$dosenyova ->jeniskelamin = "Perempuan";
		$dosenyova ->ttl = date("19xx-09-20"); 20 September
		
		$dosenyudho = new Dosen;
		$dosenyudho ->nip = "197204271997031002";
		$dosenyudho ->nama = "Yudho Giri Sucahyo, S.Kom., M.Kom., PhD.";
		$dosenyudho->jeniskelamin = "Laki-Laki";
		$dosenyudho ->ttl = date("1972-04-27");
		
		$dosenadila = new Dosen;
		$dosenadila->nip = "198009062008121003";
		$dosenadila->nama = "Adila Alfa Krisnadhi, S.Kom., M.Sc.";
		$dosenadila->jeniskelamin = "Perempuan";
		$dosenadila->ttl = date("19xx-xx-xx");
		
		$dosenagus = new Dosen;
		$dosenagus ->nip = "197708132010121001";
		$dosenagus ->nama = "Agus Kurniawan, ST. M.Si";
		$dosenagus ->jeniskelamin = "Laki-Laki";
		$dosenagus ->ttl = date("19xx-08-13");
		
		$dosenaris = new Dosen;
		$dosenaris ->nip = "197609262010121001";
		$dosenaris ->nama = "Ari Saptawijaya, S.Kom., M.C.S.";
		$dosenaris ->jeniskelamin = "Laki-Laki";
		$dosenaris ->ttl = date("19xx-xx-xx");
			
		$dosenclara = new Dosen;
		$dosenclara ->nip = "121103002";
		$dosenclara ->nama = "Clara Vania, M.Kom.";
		$dosenclara ->jeniskelamin = "Perempuan";
		$dosenclara ->ttl = date("19xx-xx-xx");
		
		$dosendewi = new Dosen;
		$dosendewi ->nip = "1206050119";
		$dosendewi ->nama = "Dewi Mairiza, S.Kom.M.Kom.";
		$dosendewi	 ->jeniskelamin = "Perempuan";
		$dosendewi ->ttl = date("19xx-xx-xx");
		
		$dosenherry = new Dosen;
		$dosenherry ->nip = "120903005";
		$dosenherry ->nama = "Herry, S.Kom, M.Kom";
		$dosenherry ->jeniskelamin = "Laki-Laki";
		$dosenherry ->ttl = date("19xx-xx-xx");
				
		$dosenpertami = new Dosen;
		$dosenpertami ->nip = "121103009";
		$dosenpertami ->nama = "Pertami Junia Hayuningtyas, M.Sc";
		$dosenpertami ->jeniskelamin = "Perempuan";
		$dosenpertami ->ttl = date("19xx-xx-xx");
		
		$dosentisha = new Dosen;
		$dosentisha ->nip = "121003004";
		$dosentisha ->nama = "Tisha Melia, B.Sc, M,Sc.";
		$dosentisha ->jeniskelamin = "Perempuan";
		$dosentisha ->ttl = date("19xx-xx-xx");
		
		$dosensam = new Dosen;
		$dosensam  ->nip = "121003006";
		$dosensam  ->nama = "Samuel Louvan, S.Kom, M.Sc";
		$dosensam  ->jeniskelamin = "Laki-Laki";
		$dosensam ->ttl = date("19xx-xx-xx");
		
		$dosenaritonang = new Dosen;
		$dosenaritonang ->nip = "120903002";
		$dosenaritonang->nama = "Dr. Drs. Manusun Gala Sebulon Aritonang, S.E., MBA";
		$dosenaritonang ->jeniskelamin = "Laki-Laki";
		$dosenaritonang ->ttl = date("19xx-xx-xx");
		
		$dosenkasfu = new Dosen;
		$dosenkasfu ->nip = "120513901";
		$dosenkasfu ->nama = "Muhammad Kasfu Hammi S.Kom., M.T.I.";
		$dosenkasfu ->jeniskelamin = "Laki-Laki";
		$dosenkasfu ->ttl = date("19xx-xx-xx");
			
		$dosenimairi = new Dosen;
		$dosenimairi ->nip = "121203001";
		$dosenimairi ->nama = "Imairi Eitiveni M.Kom.";
		$dosenimairi ->jeniskelamin = "Perempuan";
		$dosenimairi ->ttl = date("19xx-xx-xx");
		
		$dosenbilih = new Dosen;
		$dosenbilih ->nip = "xxxxxxxx";
		$dosenbilih ->nama = "	Bilih Priyogi S.Kom., M.Kom.";
		$dosenbilih->jeniskelamin = "Laki-Laki";
		$dosenbilih ->ttl = date("1990-xx-xx");
				
		$dosenqorib = new Dosen;
		$dosenqorib  ->nip = "xxxxxxxx";
		$dosenqorib  ->nama = "Qorib Munajat S.Kom.";
		$dosenqorib ->jeniskelamin = "Laki-Laki";
		$dosenqorib  ->ttl = date("19xx-xx-xx");
		
		$dosenherup = new Dosen;
		$dosenherup ->nip = "121303013";
		$dosenherup ->nama = "Nursidik Heru Praptono, S.Kom, M.Kom";
		$dosenherup ->jeniskelamin = "Laki-Laki";
		$dosenherup ->ttl = date("1988-05-08");
		
		$dosenave = new Dosen;
		$dosenave ->nip = "xxxxxxxx";
		$dosenave ->nama = "Ave Adriana Pinem S.Kom.";
		$dosenave ->jeniskelamin = "Perempuan";
		$dosenave ->ttl = date("19xx-xx-xx");
		
		$dosenhaya = new Dosen;
		$dosennhaya ->nip = "xxxxxxxx";
		$dosennhaya ->nama = "Haya Rizqi Fajrina S.Kom.";
		$dosennhaya ->jeniskelamin = "Perempuan";
		$dosennhaya ->ttl = date("19xx-xx-xx");
			
		$dosenarlisa = new Dosen;
		$dosenarlisa ->nip = "121303010";
		$dosenarlisa ->nama = "Arlisa Yuliawati S.Kom, M.Kom.	";
		$dosenarlisa ->jeniskelamin = "Perempuan";
		$dosenarlisa ->ttl = date("19xx-xx-xx");
	
		$dosenika = new Dosen;
		$dosenika ->nip = "xxxxxxx";
		$dosenika ->nama = "Ika Chandra Hapsari S.Kom..";
		$dosenika ->jeniskelamin = "Perempuan";
		$dosenika ->ttl = date("1990-05-24");
		
		$dosenarief = new Dosen;
		$dosenarief ->nip = "121303006";
		$dosenarief ->nama = "Dr. Arief Ramadhan S.Kom.";
		$dosenarief ->jeniskelamin = "Laki-Laki";
		$dosenarief ->ttl = date("19xx-xx-xx");
		
		$doseniis = new Dosen;
		$doseniis ->nip = "121203008";
		$doseniis ->nama = "Iis Solichah S.Kom., M.Kom.";
		$doseniis ->jeniskelamin = "Perempuan";
		$doseniis ->ttl = date("19xx-xx-xx");
		
		$dosenari = new Dosen;
		$dosenari ->nip = "121303007";
		$dosenari ->nama = "Ari Wibisono M.Kom.";
		$dosenari ->jeniskelamin = "Laki-Laki";
		$dosenari ->ttl = date("19xx-xx-xx");
		
		$dosenherdi = new Dosen;
		$dosenherdi ->nip = "xxxxxxx";
		$dosenherdi ->nama = "Herdiansyah Rhamadan S.Kom.";
		$dosenherdi ->jeniskelamin = "Laki-Laki";
		$dosenherdi ->ttl = date("19xx-03-14");
		
		$dosenmega = new Dosen;
		$dosenmega ->nip = "xxxxxxx";
		$dosenmega ->nama = "Meganingrum Arista Jiwanggi S.Kom., M.Kom.";
		$dosenmega ->jeniskelamin = "Perempuan";
		$dosenmega ->ttl = date("1990-03-15");
		
		$dosenhadaiq = new Dosen;
		$dosenhadaiq  ->nip = "121203004";
		$dosenhadaiq  ->nama = "Hadaiq Rolis Sanabila S.Kom., M.Kom.";
		$dosenhadaiq  ->jeniskelamin = "Laki-Laki";
		$dosenhadaiq ->ttl = date("19xx-xx-xx");
		
		$dosennurul = new Dosen;
		$dosennurul ->nip = "xxxxxxxxx";
		$dosennurul ->nama = "Nurul Qomariyah S.Kom., M.Kom.	";
		$dosennurul ->jeniskelamin = "Perempuan";
		$dosennurul->ttl = date("19xx-xx-xx");
		
		$dosenedy = new Dosen;
		$dosenedy ->nip = "121303004";
		$dosenedy ->nama = "I Putu Edy Suardiyana Putra S.Kom., M.Kom.";
		$dosenedy ->jeniskelamin = "Laki-Laki";
		$dosenedy ->ttl = date("19xx-xx-xx");

		$dosengilang = new Dosen;
		$dosengilang ->nip = "121303003";
		$dosengilang ->nama = "Gilang Kusuma Jati S.T., M.Kom.";
		$dosengilang ->jeniskelamin = "Laki-Laki";
		$dosengilang ->ttl = date("1990-01-02");
		
		$dosenhanif = new Dosen;
		$dosenhanif ->nip = "121203009";
		$dosenhanif ->nama = "Hanif Rasyidi M.Kom.";
		$dosenhanif ->jeniskelamin = "Laki-Laki";
		$dosenhanif ->ttl = date("1986-08-12");
		
		$dosenmaya = new Dosen;
		$dosenmaya ->nip = "121403002";
		$dosenmaya ->nama = "Maya Retno Ayu Setyautami S.Kom., M.Kom.	";
		$dosenmaya ->jeniskelamin = "Perempuan";
		$dosenmaya ->ttl = date("19xx-xx-xx");
		
		$dosenrahmad = new Dosen;
		$dosenrahmad ->nip = "121403001";
		$dosenrahmad ->nama = "Rahmad Mahendra S.Kom., M.Sc.";
		$dosenrahmad ->jeniskelamin = "Laki-Laki";
		$dosenrahmad->ttl = date("19xx-xx-xx");
		
		$dosenevi = new Dosen;
		$dosenevi ->nip = "121303008";
		$dosenevi ->nama = "Evi Yulianti S.Kom.";
		$dosenevi ->jeniskelamin = "Perempuan";
		$dosenevi ->ttl = date("19xx-xx-xx");

		$dosenary = new Dosen;
		$dosenary ->nip = "121303002";
		$dosenary ->nama = "Ary Noviyanto S.Kom., M.Kom.";
		$dosenary ->jeniskelamin = "Laki-Laki";
		$dosenary ->ttl = date("19xx-xx-xx");
		
		$dosenangga = new Dosen;
		$dosenangga ->nip = "121203006";
		$dosenangga ->nama = "Anggha Satya Nugraha S.Si., M.Kom.	";
		$dosenangga ->jeniskelamin = "Laki-Laki";
		$dosenangga ->ttl = date("1988-05-14");
		
		$dosentieta = new Dosen;
		$dosentieta ->nip = "121303001";
		$dosentieta ->nama = "Tieta Antaresti Riska Putri S.Kom.";
		$dosentieta ->jeniskelamin = "Perempuan";
		$dosentieta ->ttl = date("1992-01-15");
		
		$dosenlia = new Dosen;
		$dosenlia ->nip = "121403003";
		$dosenlia ->nama = "Lia Sadita S.Kom.";
		$dosenlia ->jeniskelamin = "Perempuan";
		$dosenlia ->ttl = date("19xx-xx-xx");
		
		$dosenyayan = new Dosen;
		$dosenyayan ->nip = "xxxxxxxxx";
		$dosenyayan ->nama = "Yulistiyan Wardhana S.Kom.";
		$dosenyayan ->jeniskelamin = "Laki-Laki";
		$dosenyayan ->ttl = date("1991-07-25");
		
		$dosenhisyam = new Dosen;
		$dosenhisyam ->nip = "121303012";
		$dosenhisyam ->nama = "Hisyam Fahmi S.Kom, M.Kom.";
		$dosenhisyam ->jeniskelamin = "Laki-Laki";
		$dosenhisyam ->ttl = date("19xx-xx-xx");
		
		$matkulmatdas1 = new MataKuliah;
		$matkulmatdas1->kodemk = "MAT10113";
		$matkulmatdas1->nama = "Matematika Dasar 1";
		$matkulmatdas1->sks = 2;
		$matkulmatdas1->prodi = "Fakultas";
		$matkulmatdas1->dosens()->attach($dosenkas->nip);
		$matkulmatdas1->dosens()->attach($dosenlia->nip);
		$matkulmatdas1->dosens()->attach($dosenrah->nip);
		
		$matkulfisdas1 = new MataKuliah;
		$matkulfisdas1->kodemk = "FSK10111";
		$matkulfisdas1->nama = "Fisika Dasar 1";
		$matkulfisdas1->sks = 3;
		$matkulfisdas1->prodi = "Fakultas";
		//gada yang dari pacil

		$matkulmatdis1 = new MataKuliah;
		$matkulmatdis1->kodemk = "IKI10100";
		$matkulmatdis1->nama = "Matematika Diskret 1";
		$matkulmatdis1->sks = 3;
		$matkulmatdis1->prodi = "Fakultas";
		//gada didata
		
		$matkulddp = new MataKuliah;
		$matkulddp->kodemk = "IKI10200";
		$matkulddp->nama = "Dasar-Dasar Pemrograman";
		$matkulddp->sks = 6;
		$matkulddp->prodi = "Fakultas";
		$matkulddp->dosens()->attach($dosengilang->nip);
		$matkulddp->dosens()->attach($dosenbayu->nip);
		$matkulddp->dosens()->attach($dosendenny->nip);
		$matkulddp->dosens()->attach($deosenalfan->nip);
		$matkulddp->dosens()->attach($dosenclara->nip);
		$matkulddp->dosens()->attach($dosenhanif->nip);
		
		$matkulsda = new MataKuliah;
		$matkulsda->kodemk = "IKI10400";
		$matkulsda->nama = "Struktur Data & Algoritma";
		$matkulsda->sks = 4;
		$matkulsda->prodi = "Fakultas";
		$matkulsda->dosens()->attach($dosengilang->nip);
		$matkulsda->dosens()->attach($dosenbayu->nip);
		$matkulsda->dosens()->attach($dosendenny->nip);
		$matkulsda->dosens()->attach($dosenhadaiq->nip);
		
		$matkulalin = new MataKuliah;
		$matkulalin->kodemk = "IKI10103";
		$matkulalin->nama = "Aljabar Linier";
		$matkulalin->sks = 3;
		$matkulalin->prodi = "Fakultas";
		$matkulalin->dosens()->attach($dosenlia->nip);
		$matkulalin->dosens()->attach($dosennizar->nip);
		$matkulalin->dosens()->attach($dosenhadaiq->nip);
		$matkulalin->dosens()->attach($dosenkas->nip);
		//anwar masum knp gada
		
		$matkulmatdis2 = new MataKuliah;
		$matkulmatdis2->kodemk = "IKI20101";
		$matkulmatdis2->nama = "Matematika Diskret 2";
		$matkulmatdis2->sks = 3;
		$matkulmatdis2->prodi = "Fakultas";
		$matkulmatdis2->dosens()->attach($dosentieta->nip);
		$matkulmatdis2->dosens()->attach($dosendina->nip);
		$matkulmatdis2->dosens()->attach($dosenevi->nip);
		
		$matkulstatprob = new MataKuliah;
		$matkulstatprob->kodemk = "IKI20102";
		$matkulstatprob->nama = "Statistika & Probabilitas";
		$matkulstatprob->sks = 4;
		$matkulstatprob->prodi = "Fakultas";
		$matkulstatprob->dosens()->attach($dosenika->nip);
		$matkulstatprob->dosens()->attach($dosenary->nip);
		$matkulstatprob->dosens()->attach($dosenalfan->nip);
		
		$matkulppw = new MataKuliah;
		$matkulppw->kodemk = "IKI20201";
		$matkulppw->nama = "Perancangan & Pemrograman Web";
		$matkulppw->sks = 3;
		$matkulppw->prodi = "Fakultas";
		$matkulppw->dosens()->attach($dosenherup->nip);
		$matkulppw->dosens()->attach($dosengilang->nip);
		$matkulppw->dosens()->attach($dosenhisyam->nip);
		$matkulppw->dosens()->attach($dosenrizal->nip);
		
		$matkulsistemoperasi = new MataKuliah;
		$matkulsistemoperasi->kodemk = "IKI20505";
		$matkulsistemoperasi->nama = "Sistem Operasi";
		$matkulsistemoperasi->sks = 4;
		$matkulsistemoperasi->prodi = "Fakultas";
		$matkulsistemoperasi->dosens()->attach($dosenibam->nip);
		$matkulsistemoperasi->dosens()->attach($dosenamril->nip);
		$matkulsistemoperasi->dosens()->attach($dosenhilman->nip); 
		
		$matkulbasdat = new MataKuliah;
		$matkulbasdat->kodemk = "IKI20700";
		$matkulbasdat->nama = "Basis Data";
		$matkulbasdat->sks = 4;
		$matkulbasdat->prodi = "Fakultas";
		Yova Ruldeviyani S.Kom., M.Kom., Yulistiyan Wardhana S.Kom., Maya Retno Ayu Setyautami S.Kom., M.Kom., Ika Alfina S.Kom., M.Kom., Clara Vania S.Kom., M.Kom, Evi Yulianti S.Kom.
		
		$matkulppw = new MataKuliah;
		$matkulppw->kodemk = "IKI30202";
		$matkulppw->nama = "Rekayasa Perangkat Lunak";
		$matkulppw->sks = 3;
		$matkulppw->prodi = "Fakultas";
		Satrio Baskoro Yudhoatmojo S.Kom., M.T.I., Nursidik Heru Praptono S.Kom, M.Kom., Iis Solichah S.Kom., M.Kom., Ika Alfina S.Kom., M.Kom.
		
		$matkulkp = new MataKuliah;
		$matkulkp->kodemk = "IKI40902";
		$matkulkp->nama = "Kerja Praktik";
		$matkulkp->sks = 3;
		$matkulkp->prodi = "Fakultas";
		Iis Solichah S.Kom., M.Kom., Imairi Eitiveni M.Kom., Nursidik Heru Praptono S.Kom, M.Kom. , Ave Adriana Pinem S.Kom., Satrio Baskoro Yudhoatmojo S.Kom., M.T.I., Bilih 
		
		$matkulkomas = new MataKuliah;
		$matkulkomas->kodemk = "IKI40903";
		$matkulkomas->nama = "Komputer & Masyarakat";
		$matkulkomas->sks = 3;
		$matkulkomas->prodi = "Fakultas";
		Drs. Widijanto Satyo Nugroho M.Math., Ph.D., Dr. Drs. R. Yugo Kartono Isal M.Sc.
		
		$matkulfisdas2 = new MataKuliah;
		$matkulfisdas2->kodemk = "|IKO12106";
		$matkulfisdas2->nama = "Fisika Dasar 2";
		$matkulfisdas2->sks = 3;
		$matkulfisdas2->prodi = "Ilmu Komputer";
		Dr. Eng. Supriyanto M.Sc, Dr. Vivi Fauzia S.Si., M.Si., Arief Syarifuddin Fitrianto M.Si.
		
		$matkulpsd = new MataKuliah;
		$matkulpsd->kodemk = "IKO12500";
		$matkulpsd->nama = "Pengantar Sistem Dijital";
		$matkulpsd->sks = 4;
		$matkulpsd->prodi = "Ilmu Komputer";
		Ir. Erdefi Rakun M.Sc., Ari Wibisono M.Kom.
		
		$matkulpok = new MataKuliah;
		$matkulpok->kodemk = "IKO21502";
		$matkulpok->nama = "Pengantar Organisasi Komputer";
		$matkulpok->sks = 3;
		$matkulpok->prodi = "Ilmu Komputer";
		
		$matkulmatdas2 = new MataKuliah;
		$matkulmatdas2->kodemk = "IKO21105";
		$matkulmatdas2->nama = "Matematika Dasar 2";
		$matkulmatdas2->sks = 4;
		$matkulmatdas2->prodi = "Ilmu Komputer";
		
		$matkultba = new MataKuliah;
		$matkultba->kodemk = "IKO22401";
		$matkultba->nama = "Teori Bahasa dan Automata";
		$matkultba->sks = 4;
		$matkultba->prodi = "Ilmu Komputer";
		
		$matkulpemdek = new MataKuliah;
		$matkulpemdek->kodemk = "IKO22203";
		$matkulpemdek->nama = "Pemrograman Deklaratif";
		$matkulpemdek->sks = 3;
		$matkulpemdek->prodi = "Ilmu Komputer";
		
		$matkulsisprog = new MataKuliah;
		$matkulsisprog ->kodemk = "IKO31204";
		$matkulsisprog ->nama = "Pemrograman Sistem";
		$matkulsisprog ->sks = 3;
		$matkulsisprog ->prodi = "Ilmu Komputer";
		
		$matkulsc = new MataKuliah;
		$matkulsc->kodemk = "IKO31300";
		$matkulsc->nama = "Sistem Cerdas";
		$matkulsc->sks = 4;
		$matkulsc->prodi = "Ilmu Komputer";
		
		
		$matkulpi = new MataKuliah;
		$matkulpi->kodemk = "IKO31900";
		$matkulpi->nama = "Penulisan Ilmiah";
		$matkulpi->sks = 2;
		$matkulpi->prodi = "Ilmu Komputer";
		
		$matkuljarkom = new MataKuliah;
		$matkuljarkom->kodemk = "IKO31503";
		$matkuljarkom->nama = "Jaringan Komputer";
		$matkuljarkom->sks = 4;
		$matkuljarkom->prodi = "Ilmu Komputer";
		
		$matkulanum = new MataKuliah;
		$matkulanum->kodemk = "IKO32104";
		$matkulanum->nama = "Analisis Numerik";
		$matkulanum->sks = 3;
		$matkulanum->prodi = "Ilmu Komputer";
		
		$matkuldaa = new MataKuliah;
		$matkuldaa->kodemk = "IKO32402";
		$matkuldaa->nama = "Desain & Analisis Algoritma";
		$matkuldaa->sks = 4;
		$matkuldaa->prodi = "Ilmu Komputer";
		
		$matkulppl = new MataKuliah;
		$matkulppl->kodemk = "IKO32205";
		$matkulppl->nama = "Proyek Perangkat Lunak";
		$matkulppl->sks = 6;
		$matkulppl->prodi = "Ilmu Komputer";
		
		$matkulpkp = new MataKuliah;
		$matkulpkp->kodemk = "IKO31258";
		$matkulpkp->nama = "Pemrograman Konkuren & Paralel";
		$matkulpkp->sks = 4;
		$matkulpkp->prodi = "Ilmu Komputer";
		
		$matkulosk = new MataKuliah;
		$matkulosk->kodemk = "IKO31550";
		$matkulosk->nama = "Organisasi Sistem Komputer";
		$matkulosk->sks = 3;
		$matkulosk->prodi = "Ilmu Komputer";
		
		$matkulembed = new MataKuliah;
		$matkulembed->kodemk = "IIKO31551";
		$matkulembed->nama = "Embedded Systems";
		$matkulembed->sks = 3;
		$matkulembed->prodi = "Ilmu Komputer";
		
		$matkulti = new MataKuliah;
		$matkulti->kodemk = "IKO32150";
		$matkulti->nama = "Teori Informasi";
		$matkulti->sks = 3;
		$matkulti->prodi = "Ilmu Komputer";
		
		$matkultk = new MataKuliah;
		$matkultk->kodemk = "IKO32257";
		$matkultk->nama = "Teknik Kompilator";
		$matkultk->sks = 4;
		$matkultk->prodi = "Ilmu Komputer";
		
		$matkulcis = new MataKuliah;
		$matkulcis->kodemk = "IKO32453";
		$matkulcis->nama = "Kriptografi & Keamanan Informasi";
		$matkulcis->sks = 4;
		$matkulcis->prodi = "Ilmu Komputer";
		
		$matkullaw = new MataKuliah;
		$matkullaw->kodemk = "IKO32751";
		$matkullaw->nama = "Layanan & Aplikasi Web";
		$matkullaw->sks = 3;
		$matkullaw->prodi = "Ilmu Komputer";
		
		$matkulsp = new MataKuliah;
		$matkulsp->kodemk = "IKO41151";
		$matkulsp->nama = "Simulasi & Pemodelan";
		$matkulsp->sks = 3;
		$matkulsp->prodi = "Ilmu Komputer";
		
		$matkulpsd2 = new MataKuliah;
		$matkulpsd2->kodemk = "IKO41552";
		$matkulpsd2->nama = "Pengolahan Sinyal Dijital";
		$matkulpsd2->sks = 3;
		$matkulpsd2->prodi = "Ilmu Komputer";
		
		$matkulst = new MataKuliah;
		$matkulst->kodemk = "IKO41554";
		$matkulst->nama = "Sistem Terdistribusi";
		$matkulst->sks = 3;
		$matkulst->prodi = "Ilmu Komputer";
		
		$matkulubi = new MataKuliah;
		$matkulubi->kodemk = "IKO41557";
		$matkulubi->nama = "Ubiquitous & Net-centric Computing";
		$matkulubi->sks = 3;
		$matkulubi->prodi = "Ilmu Komputer";
		
		$matkulrobotik = new MataKuliah;
		$matkulrobotik->kodemk = "IKO42360";
		$matkulrobotik->nama = "Robotika";
		$matkulrobotik->sks = 3;
		$matkulrobotik->prodi = "Ilmu Komputer";
		
		$matkulrsd = new MataKuliah;
		$matkulrsd->kodemk = "IKO42553";
		$matkulrsd->nama = "Rancangan Sistem Dijital";
		$matkulrsd->sks = 3;
		$matkulrsd->prodi = "Ilmu Komputer";
		
		$matkultka = new MataKuliah;
		$matkultka->kodemk = "IKO42555";
		$matkultka->nama = "Topik Khusus Arsitektur & Infrastuktur";
		$matkultka->sks = 3;
		$matkultka->prodi = "Ilmu Komputer";
		
		$matkulta = new MataKuliah;
		$matkulta->kodemk = "IKI40999";
		$matkulta->nama = "Tugas Akhir";
		$matkulta->sks = 6;
		$matkulta->prodi = "Fakultas";
		
		$matkulsister = new MataKuliah;
		$matkulsister->kodemk = "IKO31250";
		$matkulsister->nama = "Sistem Interaksi";
		$matkulsister->sks = 4;
		$matkulsister->prodi = "Ilmu Komputer";
		
		$matkulbanjut = new MataKuliah;
		$matkulbanjut->kodemk = "IKO31754";
		$matkultbanjut->nama = "Basis Data Lanjut";
		$matkulbanjut->sks = 3;
		$matkulbanjut->prodi = "Ilmu Komputer";
		
		$matkulgraf = new MataKuliah;
		$matkulgraf->kodemk = "IKO32450";
		$matkulgraf->nama = "Grafika Komputer";
		$matkulgraf->sks = 3;
		$matkulgraf->prodi = "Ilmu Komputer";
		
		$matkulgame = new MataKuliah;
		$matkulgaeme->kodemk = "IKO41251";
		$matkulgame->nama = "Game Development";
		$matkulgame->sks = 3;
		$matkulgame->prodi = "Ilmu Komputer";
		
		$matkulpl = new MataKuliah;
		$matkulpl->kodemk = "IKO41253";
		$matkulpl->nama = "Pemrograman Logika";
		$matkulpl->sks = 4;
		$matkulpl->prodi = "Ilmu Komputer";
		
		$matkulpmpl = new MataKuliah;
		$matkulpmpl->kodemk = "IKO41254";
		$matkulpmpl->nama = "Penjaminan Mutu Perangkat Lunak";
		$matkulpmpl->sks = 4;
		$matkulpmpl->prodi = "Ilmu Komputer";
		
		$matkulsw = new MataKuliah;
		$matkulsw->kodemk = "IKO41361";
		$matkulsw->nama = "Semantic Web";
		$matkulsw->sks = 3;
		$matkulsw->prodi = "Ilmu Komputer";
		
		$matkulpbk = new MataKuliah;
		$matkulpbk->kodemk = "IKO41853";
		$matkulpbk->nama = "Pengajaran Berbantuan Komputer";
		$matkulpbk->sks = 3;
		$matkulpbk->prodi = "Ilmu Komputer";
		
		$matkulmetfor = new MataKuliah;
		$matkulmetfor->kodemk = "IKO42252";
		$matkulmetfor->nama = "Metode Formal";
		$matkulmetfor->sks = 4;
		$matkulmetfor->prodi = "Ilmu Komputer";
		
		$matkultkt = new MataKuliah;
		$matkultkt->kodemk = "IKO42256";
		$matkultkt->nama = "Topik Khusus Teknologi Perangkat Lunak";
		$matkultkt->sks = 3;
		$matkultkt->prodi = "Ilmu Komputer";
		
		$matkuldm = new MataKuliah;
		$matkuldm->kodemk = "IKO42351";
		$matkuldm->nama = "Data Mining";
		$matkuldm->sks = 3;
		$matkuldm->prodi = "Ilmu Komputer";
		
		$matkulpc = new MataKuliah;
		$matkulpc->kodemk = "IKO31355";
		$matkulpc->nama = "Pengolahan Citra";
		$matkulpc->sks = 3;
		$matkulpc->prodi = "Ilmu Komputer";
		
		$matkulpm = new MataKuliah;
		$matkulpm->kodemk = "IKO32353";
		$matkulpm->nama = "Pemelajaran Mesin";
		$matkulpm->sks = 3;
		$matkulpm->prodi = "Ilmu Komputer";
		
		$matkulpbm = new MataKuliah;
		$matkulpbm->kodemk = "IKO32354";
		$matkulpbm->nama = "Pengolahan Bahasa Manusia";
		$matkulpbm->sks = 3;
		$matkulpbm->prodi = "Ilmu Komputer";
		
		$matkulpengmul = new MataKuliah;
		$matkulpengmul->kodemk = "IKO41356";
		$matkupengmul->nama = "Pengolahan Multimedia";
		$matkulpengmul->sks = 3;
		$matkulpengmul->prodi = "Ilmu Komputer";
		
		$matkulperin = new MataKuliah;
		$matkulperin->kodemk = "IKO41357";
		$matkulperin->nama = "Perolehan Informasi";
		$matkulperin->sks = 3;
		$matkulperin->prodi = "Ilmu Komputer";
		
		$matkulgm = new MataKuliah;
		$matkulgm->kodemk = "IKO41452";
		$matkulgm->nama = "Geometric Modelling";
		$matkulgm->sks = 4;
		$matkulgm->prodi = "Ilmu Komputer";
		
		$matkulsig = new MataKuliah;
		$matkulsig->kodemk = "IKO41854";
		$matkulsig->nama = "Sistem Informasi Geografis";
		$matkulsig->sks = 3;
		$matkulsig->prodi = "Ilmu Komputer";
		
		$matkultkpim = new MataKuliah;
		$matkultkpim->kodemk = "IKO42359";
		$matkultkpim->nama = "Topik Khusus Pengolahan Informasi Multimedia";
		$matkultkpim->sks = 3;
		$matkultkpim->prodi = "Ilmu Komputer";
		
		$matkulcg = new MataKuliah;
		$matkulcg->kodemk = "IKO42451";
		$matkulcg->nama = "Computational Geometry";
		$matkulcg->sks = 4;
		$matkulcg->prodi = "Ilmu Komputer";
		
		$matkulbio = new MataKuliah;
		$matkulbio->kodemk = "IKO31350";
		$matkulbio->nama = "Bioinformatika";
		$matkulbio->sks = 3;
		$matkulbio->prodi = "Ilmu Komputer";
		
		$matkulpd = new MataKuliah;
		$matkulpd->kodemk = "IKO32152";
		$matkulpd->nama = "Persamaan Diferensial";
		$matkulpd->sks = 3;
		$matkulpd->prodi = "Ilmu Komputer";
		
		$matkulasn = new MataKuliah;
		$matkulasn->kodemk = "IKO41153";
		$matkulasn->nama = "Aproksimasi & Sistem Nonlinier";
		$matkulasn->sks = 3;
		$matkulasn->prodi = "Ilmu Komputer";
		
		$matkulalinn = new MataKuliah;
		$matkulalinn->kodemk = "IKO41154";
		$matkulalinn->nama = "Aljabar Linier Numerik";
		$matkulalinn->sks = 3;
		$matkulalinn->prodi = "Ilmu Komputer";
			
		$matkulkl = new MataKuliah;
		$matkulkl->kodemk = "IKO41352";
		$matkulkl->nama = "Komputasi Lunak";
		$matkulkl->sks = 3;
		$matkulkl->prodi = "Ilmu Komputer";
		
		$matkullk = new MataKuliah;
		$matkullk->kodemk = "IKO41454";
		$matkullk->nama = "Logika Komputasional";
		$matkullk->sks = 3;
		$matkullk->prodi = "Ilmu Komputer";
		
		$matkultkkk = new MataKuliah;
		$matkultkkk->kodemk = "IKO42358";
		$matkultkkk->nama = "Topik Khusus Kecerdasan Komputasional";
		$matkultkkk->sks = 3;
		$matkultkkk->prodi = "Ilmu Komputer";
		
		$matkultkl = new MataKuliah;
		$matkultkl->kodemk = "IKO61480";
		$matkultkl->nama = "Teori Komputasi Lanjut";
		$matkultkl->sks = 4;
		$matkultkl->prodi = "Ilmu Komputer";
	
		//SI
		
		
		$matkulppsi = new MataKuliah;
		$matkulppsi->kodemk = "IKS12800";
		$matkulppsi->nama = "Prinsip-Prinsip Sistem Informasi";
		$matkulppsi->sks = 3;
		$matkulppsi->prodi = "Sistem Informasi";
		
		$matkuladbis = new MataKuliah;
		$matkuladbis->kodemk = "IKS12600";
		$matkuladbis->nama = "Administrasi Bisnis";
		$matkuladbis->sks = 3;
		$matkuladbis->prodi = "Sistem Informasi";
		
		$matkulddak = new MataKuliah;
		$matkulddak->kodemk = "IKS21501";
		$matkulddak->nama = "Dasar-Dasar Arsitektur Komputer";
		$matkulddak->sks = 4;
		$matkulddak->prodi = "Sistem Informasi";
		
		$matkulppm = new MataKuliah;
		$matkulppm->kodemk = "IKS21601";
		$matkulppm->nama = "Prinsip-Prinsip Manajemen";
		$matkulppm->sks = 3;
		$matkulppm->prodi = "Sistem Informasi";
		
		$matkulerp = new MataKuliah;
		$matkulerp->kodemk = "IKS22602";
		$matkulerp->nama = "Enterprise Resource Planning";
		$matkulerp->sks = 3;
		$matkulerp->prodi = "Sistem Informasi";
		
		$matkulro = new MataKuliah;
		$matkulro->kodemk = "IKS22403";
		$matkulro->nama = "Riset Operasi";
		$matkulro->sks = 3;
		$matkulro->prodi = "Sistem Informasi";
		
		$matkulcrm = new MataKuliah;
		$matkulcrm->kodemk = "IKS31603";
		$matkulcrm->nama = "Customer Relationship Management";
		$matkulcrm->sks = 3;
		$matkulcrm->prodi = "Sistem Informasi";
		
		$matkulmsdm = new MataKuliah;
		$matkulmsdm->kodemk = "IKS31604";
		$matkulmsdm->nama = "Manajemen Sumber Daya Manusia";
		$matkulmsdm->sks = 3;
		$matkulmsdm->prodi = "Sistem Informasi";
		
		$matkulspm = new MataKuliah;
		$matkulspm->kodemk = "IKS31605";
		$matkulspm->nama = "Supply Chain Management";
		$matkulspm->sks = 3;
		$matkulspm->prodi = "Sistem Informasi";
		
		$matkuljarkomdat = new MataKuliah;
		$matkuljarkomdat->kodemk = "IKS31504";
		$matkuljarkomdat->nama = "Jaringan Komunikasi Data";
		$matkuljarkomdat->sks = 3;
		$matkuljarkomdat->prodi = "Sistem Informasi";
		
		$matkulsiak = new MataKuliah;
		$matkulsiak->kodemk = "IKS32606";
		$matkulsiak->nama = "Sistem Informasi Akuntansi dan Keuangan";
		$matkulsiak->sks = 3;
		$matkulsiak->prodi = "Sistem Informasi";
		
		$matkulmppi = new MataKuliah;
		$matkulmppi->kodemk = "IKS32901";
		$matkulmppi->nama = "Metodologi Penelitian & Penulisan Ilmiah";
		$matkulmppi->sks = 3;
		$matkulmppi->prodi = "Sistem Informasi";
		
		$matkulpropensi = new MataKuliah;
		$matkulpropensi->kodemk = "IKS32206";
		$matkulpropensi->nama = "Proyek Pengembangan Sistem Informasi";
		$matkulpropensi->sks = 6;
		$matkulpropensi->prodi = "Sistem Informasi";
		
		$matkulmpti = new MataKuliah;
		$matkulmpti->kodemk = "IKS31259";
		$matkulmpti->nama = "Manajemen Proyek TI";
		$matkulmpti->sks = 3;
		$matkulmpti->prodi = "Sistem Informasi";
		
		$matkulkombistek = new MataKuliah;
		$matkulkombistek->kodemk = "IKS31951";
		$matkulkombistek->nama = "Komunikasi Bisnis dan Teknis";
		$matkulkombistek->sks = 3;
		$matkulkombistek->prodi = "Sistem Informasi";
		
		$matkuladbis = new MataKuliah;
		$matkuladbis->kodemk = "IKS32753";
		$matkuladbis->nama = "Administrasi Sistem";
		$matkuladbis->sks = 3;
		$matkuladbis->prodi = "Sistem Informasi";
		
		$matkulitim = new MataKuliah;
		$matkulitim->kodemk = "IKS32756";
		$matkulitim->nama = "Infrastruktur TI Modern";
		$matkulitim->sks = 3;
		$matkulitim>prodi = "Sistem Informasi";
		
		$matkulmlti = new MataKuliah;
		$matkulmlti->kodemk = "IKS32758";
		$matkulmlti->nama = "Manajemen Layanan TI";
		$matkulmlti->sks = 3;
		$matkulmlti->prodi = "Sistem Informasi";
		
		$matkultm = new MataKuliah;
		$matkultm->kodemk = "IKS41759";
		$matkultm>nama = "Teknologi Mobile";
		$matkultm->sks = 3;
		$matkultm->prodi = "Sistem Informasi";
		
		$matkulddasi = new MataKuliah;
		$matkulddasi->kodemk = "IKS41851";
		$matkulddasi->nama = "Dasar-Dasar Audit SI";
		$matkulddasi->sks = 3;
		$matkulddasi->prodi = "Sistem Informasi";
		
		$matkulmsi = new MataKuliah;
		$matkulmsi->kodemk = "IKS41852";
		$matkulmsi->nama = "Manajemen Sistem Informasi";
		$matkulmsi->sks = 3;
		$matkulkmsi->prodi = "Sistem Informasi";
		
		$matkulpplos = new MataKuliah;
		$matkulpplos->kodemk = "IKS42260";
		$matkulpplos->nama = "Pengembangan Perangkat Lunak Open Source";
		$matkulpplos->sks = 3;
		$matkulpplos->prodi = "Sistem Informasi";
		
		$matkulbi= new MataKuliah;
		$matkulbi->kodemk = "IKS42651";
		$matkulbi->nama = "Business Intelligence";
		$matkulbi->sks = 3;
		$matkulbi->prodi = "Sistem Informasi";
		
		$matkultkbmti = new MataKuliah;
		$matkultkbmti->kodemk = "IKS42760";
		$matkultkbmti->nama = "Topik Khusus Bidang Minat Teknologi Informasi";
		$matkultkbmti->sks = 3;
		$matkultkbmti->prodi = "Sistem Informasi";
		
		$matkultechno = new MataKuliah;
		$matkultechno->kodemk = "IKS42950";
		$matkultechno->nama = "Technopreneurship";
		$matkultechno->sks = 3;
		$matkultechno->prodi = "Sistem Informasi";
		
		$matkultasi = new MataKuliah;
		$matkultasi->kodemk = "IKI40999";
		$matkultasi->nama = "Tugas Akhir";
		$matkultasi->sks = 6;
		$matkultasi->prodi = "Sistem Informasi";
		
		$matkulppp = new MataKuliah;
		$matkulppp->kodemk = "IKS40652";
		$matkulppp->nama = "Pengembangan dan Pemasaran Produk";
		$matkulppp->sks = 3;
		$matkulppp->prodi = "Sistem Informasi";
		
		$matkulecom = new MataKuliah;
		$matkulecom->kodemk = "IKS31650";
		$matkulecom->nama = "E-Commerce";
		$matkulecom->sks = 3;
		$matkulecom->prodi = "Sistem Informasi";
		
		$matkulkonfig = new MataKuliah;
		$matkulkonfig->kodemk = "IKS32656";
		$matkulkonfig->nama = "Konfigurasi ERP";
		$matkulkonfig->sks = 3;
		$matkulkonfig->prodi = "Sistem Informasi";
		
		$matkulsik = new MataKuliah;
		$matkulsik->kodemk = "IKS32855";
		$matkulsik->nama = "Sistem Informasi Kesehatan";
		$matkulsik->sks = 3;
		$matkulsik->prodi = "Sistem Informasi";
		
		$matkulpo = new MataKuliah;
		$matkulpo->kodemk = "IKS41653";
		$matkulpo->nama = "Perilaku Organisasi";
		$matkulpo->sks = 3;
		$matkulpo->prodi = "Sistem Informasi";
		
		$matkulmp = new MataKuliah;
		$matkulmp->kodemk = "IKS41850";
		$matkulmp->nama = "Manajemen Pengetahuan";
		$matkulmp->sks = 3;
		$matkulmp->prodi = "Sistem Informasi";
		
		$matkultkbmes = new MataKuliah;
		$matkultkbmes->kodemk = "IKS42655";
		$matkultkbmes->nama = "Topik Khusus Bidang Minat Enterprise System";
		$matkultkbmes>sks = 3;
		$matkultkbmes->prodi = "Sistem Informasi";
		
		
		$matkuleai = new MataKuliah;
		$matkuleai->kodemk = "IKS42755";
		$matkuleai->nama = "Enterprise Application Integration";
		$matkuleai>sks = 3;
		$matkuleai->prodi = "Sistem Informasi";
		
		//
		
		
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
