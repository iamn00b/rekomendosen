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
		$dosenbela->pendidikan = 'S3';
		
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
		//////
		
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
		
		$dosengladhi = new Dosen;
		$dosengladhi ->nip = "1408150029";
		$dosengladhi ->nama = "Gladhi Guarddin, S.Kom., M.Kom.";
		$dosengladhi ->jeniskelamin = "Laki-Laki";
		$dosengladhi ->ttl = date("xxxx-xx-xx");
		
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
		
		/* MATA KULIAH */
		$matkul_matdas1 = new MataKuliah;
		$matkul_matdas1->kodemk = "MAT10113";
		$matkul_matdas1->nama = "Matematika Dasar 1";
		$matkul_matdas1->singkatan_1 = "Matdas1";
		$matkul_matdas1->singkatan_2 = "Calculus1";
		$matkul_matdas1->sks = 2;
		$matkul_matdas1->semester = 1;
		$matkul_matdas1->jenis = MataKuliah::RUMPUN;
		$matkul_matdas1->prodi = MataKuliah::FAKULTAS;
		$matkul_matdas1->deskripsi = "Mata kuliah ini mengajarkan topik-topik berikut: sistem bilangan riil dan bilangan kompleks, pertidaksamaan dan harga mutlak, fungsi satu peubah, grafik (kartesian, polar, parameter), operasi pada fungsi, teorema limit, kekontinuan, rumus-rumus dasar, aturan rantai, turunan tingkat tinggi, turunan implisit, aplikasi turunan, integral tak tentu dan tentu, teorema dasar kalkulus, sifat dasar integral, teknik integrasi";
		$matkul_matdas1->dosen()->attach($dosenkas->nip);
		$matkul_matdas1->dosen()->attach($dosenlia->nip);
		$matkul_matdas1->dosen()->attach($dosenrah->nip);
		$matkul_matdas1->save();
		
		$matkul_fisdas1 = new MataKuliah;
		$matkul_fisdas1->kodemk = "FSK10111";
		$matkul_fisdas1->nama = "Fisika Dasar 1";
		$matkul_fisdas1->singkatan_1 = "Fisdas1";
		$matkul_fisdas1->sks = 3;
		$matkul_fisdas1->semester = 1;
		$matkul_fisdas1->jenis = MataKuliah::RUMPUN;
		$matkul_fisdas1->prodi = MataKuliah::FAKULTAS;
		$matkul_fisdas1->deskripsi ="Mata kuliah ini mengajarkan topik-topik berikut:Besaran Fisis dan Vektor, Gerak dalam satu, dua, dan tiga dimensi, Hukum Newton, Aplikasi Hukum Newton, Kerja dan Energi Kinetik, Energi Potensial dan Kekekalan Energi, Momentum, Impuls dan Tumbukan, Gravitasi, Benda Tegar dan Rotasi Benda Tegar, Dinamika Gerak Rotasi, Statika dan Elastisitas, Mekanika Fluida, Gerak Periodik, Temperatur, Kalor dan Hukum, Termodinamika";
		$matkul_fisdas1->save();
		
	
		$matkul_matdis1 = new MataKuliah;
		$matkul_matdis1->kodemk = "IKI10100";
		$matkul_matdis1->nama = "Matematika Diskret 1";
		$matkul_matdis1->singkatan_1 = "Matdis1";
		$matkul_matdis1->singkatan_2 = "MD1";
		$matkul_matdis1->sks = 3;
		$matkul_matdis1->semester = 1;
		$matkul_matdis1->jenis = MataKuliah::FAKULTAS;
		$matkul_matdis1->prodi = MataKuliah::FAKULTAS;
		$matkul_matdas1->deskripsi ="Dalam mata kuliah ini, mahasiswa akan memperoleh pemahaman tentang matematika diskret yang sesuai untuk aplikasi komputer. Topik yang dibahas meliputi logika proposisional, logika predikat, teori himpunan, fungsi, teori bilangan, metode pembuktian, induksi matematika, prinsip pigeonhole, permutasi, dan kombinasi";
		$matkul_matdis1->save();
		
		
		$matkul_ddp = new MataKuliah;
		$matkul_ddp->kodemk = "IKI10200";
		$matkul_ddp->nama = "Dasar-Dasar Pemrograman";
		$matkul_ddp->singkatan_1 = "DDP";
		$matkul_ddp->sks = 6;
		$matkul_ddp->semester = 1;
		$matkul_ddp->jenis = MataKuliah::FAKULTAS;
		$matkul_ddp->prodi = MataKuliah::FAKULTAS;
		$matkul_ddp->deskripsi ="Mata kuliah ini bertujuan untuk mengajarkan konsep-konsep dasar serta teknik untuk membuat program komputer menggunakan paradigma berorientasi obyek pada bahasa pemrograman Java. Mata kuliah ini diajarkan melalui kombinasi kuliah tatap muka serta sesi latihan pemrograman di mana setiap peserta kuliah mengakses PC yang tersambung ke Internet. Mata kuliah ini memraktekkan prinsip di mana pemrograman tidak bisa diajarkan dalam cara yang sepenuhnya linier, namun topik-topik awal tetap dibahas lagi di belakang dengan tingkat kedalaman yang lebih canggih";
		$matkul_ddp->dosen()->attach($dosengilang->nip);
		$matkul_ddp->dosen()->attach($dosenbayu->nip);
		$matkul_ddp->dosen()->attach($dosendenny->nip);
		$matkul_ddp->dosen()->attach($deosenalfan->nip);
		$matkul_ddp->dosen()->attach($dosenclara->nip);
		$matkul_ddp->dosen()->attach($dosenhanif->nip);
		$matkul_ddp->save();
		
		$matkul_sda = new MataKuliah;
		$matkul_sda->kodemk = "IKI10400";
		$matkul_sda->nama = "Struktur Data & Algoritma";
		$matkul_sda->singkatan_1 = "SDA";
		$matkul_sda->sks = 4;
		$matkul_sda->semester = 2;
		$matkul_sda->jenis = MataKuliah::FAKULTAS;
		$matkul_sda->prodi = MataKuliah::FAKULTAS;
		$matkul_sda->deskripsi ="Mata kuliah ini bertujuan untuk mengajarkan konsep-konsep dasar serta teknik untuk membuat program komputer menggunakan paradigma berorientasi obyek pada bahasa pemrograman Java. Mata kuliah ini diajarkan melalui kombinasi kuliah tatap muka serta sesi latihan pemrograman di mana setiap peserta kuliah mengakses PC yang tersambung ke Internet. Mata kuliah ini memraktekkan prinsip di mana pemrograman tidak bisa diajarkan dalam cara yang sepenuhnya linier, namun topik-topik awal tetap dibahas lagi di belakang dengan tingkat kedalaman yang lebih canggih";
		$matkul_sda->dosen()->attach($dosengilang->nip);
		$matkul_sda->dosen()->attach($dosenbayu->nip);
		$matkul_sda->dosen()->attach($dosendenny->nip);
		$matkul_sda->dosen()->attach($dosenhadaiq->nip);
		$matkul_sda->prasyarat()->attach($matkul_ddp->nip);
		$matkul_sda->save();
		
		$matkul_alin = new MataKuliah;
		$matkul_alin->kodemk = "IKI10103";
		$matkul_alin->nama = "Aljabar Linier";
		$matkul_alin->singkatan_1 = "Alin";
		$matkul_alin->sks = 3;
		$matkul_alin->semester = 2;
		$matkul_alin->jenis = MataKuliah::FAKULTAS;
		$matkul_alin->prodi = MataKuliah::FAKULTAS;
		$matkul_alin->deskripsi ="Mata kuliah ini mempersiapkan mahasiswa untuk dapat menyelesaikan masalah yang terkait dengan aljabar matriks dan konsep ruang vektor. Mata kuliah ini membekali mahasiswa dengan logical reasoning dan abstraksi matematika.";
		$matkul_alin->dosen()->attach($dosenlia->nip);
		$matkul_alin->dosen()->attach($dosennizar->nip);
		$matkul_alin->dosen()->attach($dosenhadaiq->nip);
		$matkul_alin->dosen()->attach($dosenkas->nip);
		$matkul_alin->save();
		//anwar masum knp gada
		
		$matkul_matdis2 = new MataKuliah;
		$matkul_matdis2->kodemk = "IKI20101";
		$matkul_matdis2->nama = "Matematika Diskret 2";
		$matkul_matdis2->singkatan_1 = "Matdis2";
		$matkul_matdis2->singkatan_2 = "MD2";
		$matkul_matdis2->sks = 3;
		$matkul_matdis2->semester = 3;
		$matkul_matdis2->jenis = MataKuliah::FAKULTAS;
		$matkul_matdis2->prodi = MataKuliah::FAKULTAS;
		$matkul_matdis2->deskripsi ="Mata kuliah ini merupakan kelanjutan dari mata kuliah Matematika Diskret 1 dan memberikan landasan yang lebih teoritis untuk ilmu komputer. Mata kuliah ini mencakup teori kombinatorik, relasi, dan graph";		$matkul_matdis2->dosen()->attach($dosentieta->nip);
		$matkul_matdis2->dosen()->attach($dosendina->nip);
		$matkul_matdis2->dosen()->attach($dosenevi->nip);
		$matkul_matdis2->save();
		
		$matkul_statprob = new MataKuliah;
		$matkul_statprob->kodemk = "IKI20102";
		$matkul_statprob->nama = "Statistika & Probabilitas";
		$matkul_statprob->singkatan_1 = "Matdis2";
		$matkul_statprob->singkatan_2 = "MD2";
		$matkul_statprob->sks = 4;
		$matkul_statprob->semester = 3;
		$matkul_statprob->jenis = MataKuliah::FAKULTAS;
		$matkul_statprob->prodi = MataKuliah::FAKULTAS;
		$matkul_statprob->deskripsi ="Mata kuliah ini memberikan penguasaan tentang pokok bahasan mengenai konsep peluang dan peubah acak, statistika deskriptif dan uji hipotesis, simulasi dan pemodelan non-deterministik, estimasi parameter dan regresi, serta teori antrian";
		$matkul_statprob->dosen()->attach($dosenika->nip);
		$matkul_statprob->dosen()->attach($dosenary->nip);
		$matkul_statprob->dosen()->attach($dosenalfan->nip);
		$matkul_statprob->save();
		
		$matkul_ppw = new MataKuliah;
		$matkul_ppw->kodemk = "IKI20201";
		$matkul_ppw->nama = "Perancangan & Pemrograman Web";
		$matkul_ppw->singkatan_1 = "PPW";
		$matkul_ppw->sks = 3;
		$matkul_ppw->semester = 3;
		$matkul_ppw->jenis = MataKuliah::FAKULTAS;
		$matkul_ppw->prodi = MataKuliah::FAKULTAS;
		$matkul_ppw->deskripsi ="HTML dan CSS, yang merupakan komponen dasar dari halaman web, merupakan dua topik pertama yang dibahas dalam mata kuliah ini. Mata kuliah ini kemudian membahas penampilan web secara dinamis menggunakan Javascript. Javascript juga merupakan dasar pemrograman Ajax yang juga akan diperkenalkan pada akhir kuliah ini. Pemrograman dari sisi server juga akan dibahas dengan menggunakan bahasa PHP dan ASP. Untuk memperkaya presentasi web, topik ini juga membahas pembuatan gambar untuk halaman web dan presentasi dinamis";		$matkul_ppw->dosen()->attach($dosenherup->nip);
		$matkul_ppw->dosen()->attach($dosengilang->nip);
		$matkul_ppw->dosen()->attach($dosenhisyam->nip);
		$matkul_ppw->dosen()->attach($dosenrizal->nip);
		$matkul_ppw->prasyarat()->attach($matkul_ddp->nip);
		$matkul_ppw->save();
			
		$matkul_os = new MataKuliah;
		$matkul_os->kodemk = "IKI20505";
		$matkul_os->nama = "Sistem Operasi";
		$matkul_os->singkatan_1 = "OS";
		$matkul_os->sks = 4;
		$matkul_os->semester = 4;
		$matkul_os->jenis = MataKuliah::FAKULTAS;
		$matkul_os->prodi = MataKuliah::FAKULTAS;
		$matkul_os->deskripsi ="Mata kuliah ini akan dimulai dengan pengenalan singkat dari sistem operasi, hubungan antara hardware dan sistem operasi, dan beberapa komponen utama dari sebagian besar sistem operasi. Mata kuliah ini membahas trade-off yang mungkin muncul antara kinerja dan fungsionalitas dalam perancangan dan implementasi sistem operasi. Penekanan khusus akan diberikan kepada subsistem utama sebuah sistem operasi, yaitu manajemen proses (proses, thread, penjadwalan CPU, sinkronisasi, dan deadlock), manajemen memori (segmentasi, paging, swapping), sistem file, penyimpanan sekunder dan dukungan sistem operasi untuk sistem terdistribus";
		$matkul_os->dosen()->attach($dosenibam->nip);
		$matkul_os->dosen()->attach($dosenamril->nip);
		$matkul_os->dosen()->attach($dosenhilman->nip); 
		$matkul_os->prasyarat()->attach($matkul_ddak->nip);
		$matkul_os->prasyarat()->attach($matkul_pok->nip);
		$matkul_os->save();
		
		$matkul_basdat = new MataKuliah;
		$matkul_basdat->kodemk = "IKI20700";
		$matkul_basdat->nama = "Basis Data";
		$matkul_basdat->singkatan_1 = "basdat";
		$matkul_basdat->sks = 4;
		$matkul_basdat->semester = 4;
		$matkul_basdat->jenis = MataKuliah::FAKULTAS;
		$matkul_basdat->prodi = MataKuliah::FAKULTAS;
		$matkul_basdat->deskripsi ="Mata kuliah ini membahas konsep dasar dari manajemen database yang mencakup aspek pemodelan dan desain, bahasa dan fasilitas, implementasi dan penggunaan database. Topik yang diajarkan meliputi: arsitektur dan konsep sistem manajemen basis data (DBMS), struktur dan organisasi file, indexing, pemodelan data menggunakan model entity-relationship, pemodelan data menggunakan model relasional, bahasa kueri formal, aljabar relasional, basisdata berorientasi obyek, SQL dan QBE, functional dependency, normalisasi basis data relasional, algoritma dan proses desain basis data relasional, pemrosesan serta optimasi kueri, transaksi, kendali konkurensi, pemulihan basis data serta basis data client-server";
		$matkul_basdat->dosen()->attach($dosenyova->nip);
		$matkul_basdat->dosen()->attach($dosenmaya->nip);
		$matkul_basdat->dosen()->attach($dosenika->nip);
		$matkul_basdat->dosen()->attach($dosenevi->nip);
		$matkul_basdat->dosen()->attach($dosenclara->nip);
		$matkul_basdat->dosen()->attach($dosenyayan->nip);
		$matkul_basdat->prasyarat()->attach($matkul_sda->nip);
		$matkul_basdat->save();
		
		$matkul_rpl = new MataKuliah;
		$matkul_rpl->kodemk = "IKI30202";
		$matkul_rpl->nama = "Rekayasa Perangkat Lunak";
		$matkul_rpl->singkatan_1 = "RPL";
		$matkul_rpl->sks = 3;
		$matkul_rpl->semester = 5;
		$matkul_rpl->jenis = MataKuliah::FAKULTAS;
		$matkul_rpl->prodi = MataKuliah::FAKULTAS;
		$matkul_rpl->deskripsi ="Mata kuliah ini mencakup siklus pengembangan perangkat lunak, yang terdiri dari perencanaan, analisis, desain, coding, pengujian dan pemeliharaan. Pada mata kuliah ini, mahasiswa membentuk sebuah kelompok dan mengembangkan proyek yang akan dilakukan selama satu semester. Topik yang tercakup dalam mata kuliah ini adalah: metodologi pengembangan perangkat lunak, rekayasa perangkat lunak berbantuan komputer (CASE tool); perencanaan proyek pengembangan perangkat lunak, analisis permasalahan dan kebutuhan pengguna; pengorganisasian spesifikasi perangkat lunak; prinsip dasar perancangan perangkat lunak; masalah-masalah dalam pengkodean, penjaminan kualitas perangkat lunak; pengukuran kualitas perangkat lunak; pengujian perangkat lunak, pemeliharaan perangkat lunak";
		$matkul_rpl->dosen()->attach($dosensby->nip);
		$matkul_rpl->dosen()->attach($dosenherup->nip);
		$matkul_rpl->dosen()->attach($doseniis->nip);
		$matkul_rpl->dosen()->attach($dosenika->nip);
		$matkul_rpl->prasyarat()->attach($matkul_ddp->nip);
		$matkul_rpl->save();
		
		$matkul_kp = new MataKuliah;
		$matkul_kp->kodemk = "IKI40902";
		$matkul_kp->nama = "Kerja Praktik";
		$matkul_kp->singkatan_1 = "KP";
		$matkul_kp->sks = 3;
		$matkul_kp->semester = 7;
		$matkul_kp->jenis = MataKuliah::FAKULTAS;
		$matkul_kp->prodi = MataKuliah::FAKULTAS;
		$matkul_kp->deskripsi ="Mata kuliah ini memberikan kesempatan kepada mahasiswa untuk memperoleh pengalaman dalam penyelesaian permasalahan yang terdapat pada sebuah organisasi menggunakan Teknologi Informasi dan Komunikasi (TIK) dengan cara terjun secara langsung ke dunia kerja";
		$matkul_kp->dosen()->attach($dosenherup->nip);
		$matkul_kp->dosen()->attach($dosenimairi->nip);
		$matkul_kp->dosen()->attach($doseave-->nip);
		$matkul_kp->dosen()->attach($dosensby->nip);
		$matkul_kp->dosen()->attach($dosenbilih->nip);
		$matkul_kp->save();
		
		$matkul_komas = new MataKuliah;
		$matkul_komas->kodemk = "IKI40903";
		$matkul_komas->nama = "Komputer & Masyarakat";
		$matkul_komas->singkatan_1 = "Komas";
		$matkul_komas->sks = 3;
		$matkul_komas->semester = 7;
		$matkul_komas->jenis = MataKuliah::FAKULTAS;
		$matkul_komas->prodi = MataKuliah::FAKULTAS;
		$matkul_komas->deskripsi ="Mata kuliah ini menimbulkan kesadaran dan kepekaan mahasiswa terhadap berbagai persoalan sosial dan ekonomi terkait penerapan teknologi komputer dalam kehidupan sehari-hari. Mahasiswa diharapkan mampu merespon positif terhadap masalah-masalah sosial yang ada dalam konteks disiplin ilmu komputer. Mahasiswa akan dihadapkan pada isu-isu yang berkaitan dengan IT, dan diharapkan mampu menganalisa isu tersebut dan memberikan solusi dari sudut pandang mereka sebagai mahasiswa ilmu komputer";
		$matkul_komas->dosen()->attach($dosenwidi->nip);
		$matkul_komas->dosen()->attach($dosenyugo->nip);
		$matkul_komas->dosen()->attach($dosen->nip);//pa pbk
		$matkul_komas->save();
		
		$matkul_fisdas2 = new MataKuliah;
		$matkul_fisdas2->kodemk = "IKO12106";
		$matkul_fisdas2->nama = "Fisika Dasar 2";
		$matkul_fisdas2->singkatan_1 = "fisdas2";
		$matkul_fisdas2->sks = 3;
		$matkul_fisdas2->semester = 2;
		$matkul_fisdas2->jenis = MataKuliah::JURUSAN;
		$matkul_fisdas2->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_fisdas2->deskripsi ="Mata kuliah ini mengajarkan topik-topik berikut: Muatan Listrik, Hukum Coulomb dan Medan Listrik, Hukum Gauss, Potensial Listrik, Kapasitansi dan Dielektrik, Arus Listrik Searah, Resistansi dan Rangkaian Arus Searah, Medan Magnetik dan Gaya Magnetik, Sumber Medan Magnetik dan Hukum Ampere, Induksi Elektro-magnetik, Induktansi, Arus Bolak-Balik, Gelombang (umum, mekanik & e.m.), Bunyi, Gelombang Elektro-magnetik, Sifat dasar & Perambatan Cahaya, Polarisasi Cahaya, Interferensi Gelombang Cahaya";
		$matkul_fisdas2->save();	
		
		$matkul_psd = new MataKuliah;
		$matkul_psd->kodemk = "IKO12500";
		$matkul_psd->nama = "Pengantar Sistem Dijital";
		$matkul_psd->singkatan_1 = "PSD";
		$matkul_psd->sks = 4;
		$matkul_psd->semester = 2;
		$matkul_psd->jenis = MataKuliah::JURUSAN;
		$matkul_psd->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_psd->deskripsi ="Mata kuliah ini memberikan pemahaman dasar dan pengalaman praktis dalam merancang sistem dijital yang menjadi dasar sebuah komputer. Peserta akan mempelajari konsep-konsep dalam operasi rangkaian digital dan cara merancang dan mensimulasikan rangkaian digital dengan alat bantu dan teknik yang mutakhir. Topik yang dibahas meliputi: sistem bilangan biner; dasar rangkaian digital: logika biner, gerbang logika, aljabar Boolean, bentuk standar fungsi Boolean, representasi, penyederhanaan dan manipulasi fungsi Boolean dengan Karnaugh-Map; rangkaian kombinasi: prosedur analisis & perancangan rangkaian kombinasi, rangkaian aritmatika, decoder, multiplexer; rangkaian sekuensial: latch, flip-flop, characteristic table, excitation table, state table, state diagram, propagation delay, analisis dan perancangan rangkaian sekuensial; rangkaian register dan counter; memori & programmable logic";
		$matkul_psd->dosen()->attach($dosenefi->nip);
		$matkul_psd->dosen()->attach($dosenari->nip);
		$matkul_psd->dosen()->attach($dosenwisnu->nip);
		$matkul_psd->save();
		
		$matkul_pok = new MataKuliah;
		$matkul_pok->kodemk = "IKO21502";
		$matkul_pok->nama = "Pengantar Organisasi Komputer";
		$matkul_pok->singkatan_1 = "POK";
		$matkul_pok->sks = 3;
		$matkul_pok->semester = 3;
		$matkul_pok->jenis = MataKuliah::JURUSAN;
		$matkul_pok->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pok->deskripsi ="Mata kuliah ini mengajarkan dasar-dasar organisasi komputer sekuensial, yang terdiri dari komponen- komponen: input, output, memori, dan prosesor (kontrol dan datapath). Pemahaman akan konsep-konsep ini juga akan disampaikan melalui latihan pemrograman dengan bahasa tingkat rendah (low-level language) seperti bahasa rakitan (assembly language).";
		$matkul_pok->dosen()->attach($dosenhanif->nip);
		$matkul_pok->dosen()->attach($dosenari->nip);
		$matkul_pok->dosen()->attach($dosenwisnu->nip);
		$matkul_pok->prasyarat()->attach($matkul_psd->nip);
		$matkul_pok->prasyarat()->attach($matkul_ddp->nip);
		$matkul_pok->save();
		
		
		$matkul_matdas2 = new MataKuliah;
		$matkul_matdas2->kodemk = "IKO21105";
		$matkul_matdas2->nama = "Matematika Dasar 2";
		$matkul_matdas2->singkatan_1 = "MatDas2";
		$matkul_matdas2->singkatan_2 = "Calculus2";
		$matkul_matdas2->sks = 4;
		$matkul_matdas2->semester = 3;
		$matkul_matdas2->jenis = MataKuliah::JURUSAN;
		$matkul_matdas2->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_matdas2->deskripsi ="Mata kuliah ini mengajarkan topik-topik lanjut dari Kalkulus sebagai berikut: aplikasi integral, bentuk tak tentu dan integral tak wajar, barisan dan deret tak hingga, geometri dalam ruang dan vektor, fungsi peubah banyak, integral lipat";
		$matkul_matdas2->dosen()->attach($dosenangga->nip);
		$matkul_matdas2->save();
	
		
		
		$matkul_tba = new MataKuliah;
		$matkul_tba->kodemk = "IKO22401";
		$matkul_tba->nama = "Teori Bahasa dan Automata";
		$matkul_tba->singkatan_1 = "TBA";
		$matkul_tba->sks = 4;
		$matkul_tba->semester = 4;
		$matkul_tba->jenis = MataKuliah::JURUSAN;
		$matkul_tba->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tba->deskripsi ="Mata kuliah ini membahas model teoritis tentang komputasi serta bahasa formal yang melandasi semua sistem komputer. Topik-topik yang dibahas meliputi: finite state automata dan bahasa reguler, pushdown automata dan bahasa context-free, mesin Turing dan bahasa recursively enumerable, masalah decision dan (un)decidability";
		$matkul_tba->dosen()->attach($dosendina->nip);
		$matkul_tba->dosen()->attach($dosenstef->nip);
		$matkul_tba->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tba->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tba->save();
		
		$matkul_pemdek = new MataKuliah;
		$matkul_pemdek->kodemk = "IKO22203";
		$matkul_pemdek->nama = "Pemrograman Deklaratif";
		$matkul_pemdek->singkatan_1 = "PemDek";
		$matkul_pemdek->sks = 3;
		$matkul_pemdek->semester = 4;
		$matkul_pemdek->jenis = MataKuliah::JURUSAN;
		$matkul_pemdek->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pemdek->deskripsi ="Tujuan dari mata kuliah ini adalah untuk memperkenalkan prinsip-prinsip pemrograman deklaratif, dalam hal ini dengan paradigma pemrograman fungsional, menggunakan bahasa pemrograman ML. Mata kuliah ini mengilustrasikan prinsip-prinsip deklaratif menggunakan fitur-fitur utama dari ML seperti tipe data terstruktur, fungsi orde tinggi, serta pemeriksaan tipe. Aplikasi dan penerapan aspek-aspek ini akan didemonstrasikan melalui serangkaian studi kasus";
		$matkul_pemdek->dosen()->attach($dosenade->nip);
		$matkul_pemdek->dosen()->attach($dosenalfan->nip);
		$matkul_pemdek->dosen()->attach($dosenevi->nip);
		$matkul_pemdek->prasyarat()->attach($matkul_sda->nip);
		$matkul_pemdek->save();
		
		$matkul_sisprog = new MataKuliah;
		$matkul_sisprog ->kodemk = "IKO31204";
		$matkul_sisprog ->nama = "Pemrograman Sistem";
		$matkul_sisprog->singkatan_1 = "SisProg";
		$matkul_sisprog ->sks = 3;
		$matkul_sisprog->semester = 5;
		$matkul_sisprog->jenis = MataKuliah::JURUSAN;
		$matkul_sisprog->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sisprog->deskripsi ="Mata kuliah ini akan mendalami konsep-konsep sebuah sistem operasi, khususnya GNU/Linux, dengan penekanan khusus pada kemampuan praktis untuk mengimplementasikan dan memodifikasi program di bawah lapisan aplikasi. Para peserta akan diperkenalkan pada berbagai lapisan implementasi dari sebuah sistem operasi,  seperti pengelolaan proses, sistem berkas, IPC, soket jaringan, dan struktur kernel. Latihan dan tugas akan menggunakan bahasa C/C++, serta beberapa perangkat scripting untuk memanipulasi berkas";
		$matkul_sisprog->dosen()->attach($dosengladhi->nip);
		$matkul_sisprog->dosen()->attach($dosenari->nip);
		$matkul_sisprog->prasyarat()->attach($matkul_sda->nip);
		$matkul_sisprog->prasyarat()->attach($matkul_os->nip);
		$matkul_sisprog->save();
		
		$matkul_sc = new MataKuliah;
		$matkul_sc->kodemk = "IKO31300";
		$matkul_sc->nama = "Sistem Cerdas";
		$matkul_sc->singkatan_1 = "SC";
		$matkul_sc->singkatan_2 = "SisCer";
		$matkul_sc->sks = 4;
		$matkul_sc->semester = 5;
		$matkul_sc->jenis = MataKuliah::JURUSAN;
		$matkul_sc->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sc->deskripsi ="Mata kuliah ini memperkenalkan berbagai jenis teknik dan sub-bidang kecerdasan buatan (Artificial Intelligence). Peserta akan dibekali dengan pemahaman teoritis mengenai isu-isu yang dihadapi dalam pengembangan agen (dan sistem multi-agen) yang cerdas dan otonom, serta pengetahuan praktis dalam membangun dan memrogram agen-agen tersebut. Topik kuliah ini meliputi konsep state-space search (termasuk heuristic dan local search), pendekatan logika terhadap representasi pengetahuan serta penalaran, serta pendekatan probabilistik terhadap kecerdasan buatan, misalnya jaringan Bayesian dan pemelajaran mesin";
		$matkul_sc->dosen()->attach($dosenruli->nip);
		$matkul_sc->dosen()->attach($dosenhanif->nip);
		$matkul_sc->prasyarat()->attach($matkul_statprob->nip);
		$matkul_sc->prasyarat()->attach($matkul_sda->nip);
		$matkul_sc->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_sc->save();
		
		$matkul_pi = new MataKuliah;
		$matkul_pi->kodemk = "IKO31900";
		$matkul_pi->nama = "Penulisan Ilmiah";
		$matkul_pi->singkatan_1 = "PI";
		$matkul_pi->sks = 2;
		$matkul_pi->semester = 5;
		$matkul_pi->jenis = MataKuliah::JURUSAN;
		$matkul_pi->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pi->deskripsi ="Mata kuliah ini dirancang untuk memperkaya pemahaman peserta kuliah akan struktur dan penulisan paper ilmiah. Penulisan ilmiah mencakup pemahaman proses menulis, teknik-teknik yang digunakan dalam menulis, dan kegiatan menulis itu sendiri. Pengembangan penulisan seharusnya merupakan pendekatan yang terpadu antara manusia, data, informasi, pengetahuan, dan alat bantu yang menghasilkan tulisan ilmiah yang benar dan mudah dibaca";
		$matkul_pi->dosen()->attach($dosenarief->nip);
		$matkul_pi->dosen()->attach($dosenzain->nip);
		$matkul_pi->dosen()->attach($dosenyugo->nip);
		$matkul_pi->prasyarat()->attach($matkul_mpkta->nip);
		$matkul_pi->save();
		
		$matkul_jarkom = new MataKuliah;
		$matkul_jarkom->kodemk = "IKO31503";
		$matkul_jarkom->nama = "Jaringan Komputer";
		$matkul_jarkom->singkatan_1 = "Jarkom";
		$matkul_jarkom->sks = 4;
		$matkul_jarkom->semester = 5;
		$matkul_jarkom->jenis = MataKuliah::JURUSAN;
		$matkul_jarkom->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_jarkom->deskripsi ="Mata kuliah ini memperkenalkan jaringan komputer, dan membekali peserta dengan pemahaman terhadap aplikasi-aplikasi jaringan komputer serta bagaimana cara kerjanya pada lapisan-lapisan bawah";
		$matkul_jarkom->dosen()->attach($dosenheri->nip);
		$matkul_jarkom->dosen()->attach($dosenari->nip);
		$matkul_jarkom->prasyarat()->attach($matkul_os->nip);
		$matkul_jarkom->save();
		
		$matkul_anum = new MataKuliah;
		$matkul_anum->kodemk = "IKO32104";
		$matkul_anum->nama = "Analisis Numerik";
		$matkul_anum->singkatan_1 = "Anum";
		$matkul_anum->sks = 3;
		$matkul_anum->semester = 6;
		$matkul_anum->jenis = MataKuliah::JURUSAN;
		$matkul_anum->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_anum->deskripsi ="Mata kuliah ini membahas dasar-dasar penerapan komputasi ilmiah untuk ilmu komputer. Topik yang dibahas meliputi prinsip-prinsip matematika dasar serta algoritma analisa numerik sampai pada isu-isu praktis seperti reliabilitas perangkat lunak dan kinerja pada perangkat keras mutakhir. Peserta dilatih membuat program dengan bahasa C atau Matlab melalui tugas-tugas pemrograman";
		$matkul_anum->dosen()->attach($dosencan->nip);
		$matkul_anum->dosen()->attach($dosenherus->nip);
		$matkul_anum->dosen()->attach($dosenmega->nip);
		$matkul_anum->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_anum->prasyarat()->attach($matkul_matdas1->nip);
		$matkul_anum->save();
		
		
		$matkul_daa = new MataKuliah;
		$matkul_daa->kodemk = "IKO32402";
		$matkul_daa->nama = "Desain & Analisis Algoritma";
		$matkul_jarkom->singkatan_1 = "DAA";
		$matkul_daa->sks = 4;
		$matkul_daa->semester = 6;
		$matkul_daa->jenis = MataKuliah::JURUSAN;
		$matkul_daa->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_daa->deskripsi ="Kuliah ini mengajarkan bagaimana merancang dan menganalisa sebuah algoritma dalam menyelesaikan persoalan-persoalan yang membutuhkan pemrograman. Dua isu utama yang ditekankan dalam merancang dan menganalisa algoritma tersebut adalah aspek kebenaran (correctness) dan kompleksitas (complexity). Berbagai teknik dan pendekatan akan dibahas, antara lain dynamic programming, greedy algorithm, backtracking, graph algorithms, approximation algorithms, dan lain-lain";
		$matkul_daa->dosen()->attach($dosenyugo->nip);
		$matkul_daa->dosen()->attach($dosenarlisa->nip);
		$matkul_daa->dosen()->attach($dosenbilih->nip);
		$matkul_daa->prasyarat()->attach($matkul_sda->nip);
		$matkul_daa->save();
		
		$matkul_ppl = new MataKuliah;
		$matkul_ppl->kodemk = "IKO32205";
		$matkul_ppl->nama = "Proyek Perangkat Lunak";
		$matkul_ppl->singkatan_1 = "PPL";
		$matkul_ppl->sks = 6;
		$matkul_ppl->semester = 6;
		$matkul_ppl->jenis = MataKuliah::JURUSAN;
		$matkul_ppl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ppl->deskripsi ="Mata kuliah ini memberikan pengalaman kepada peserta kuliah untuk terlibat secara aktif dalam sebuah proyek IT selama satu semester. Peserta diharapkan dapat mensintesa dan mengimplementasikan ilmu yang sudah didapatkan dari mata kuliah-mata kuliah terkait untuk membangun sebuah proyek IT. Peserta akan bekerja dalam tim yang terdiri dari 4 sampai dengan 5 anggota. Setiap anggota harus berpartisipasi aktif dalam setiap peran proyek IT, yaitu manajemen proyek, analisa kebutuhan, rancangan, implementasi, serta pengujian. Setiap anggota juga harus berpartisipasi pada setiap tahap pengembangan perangkat lunak, yakni komunikasi, perencanaan, pemodelan, pembangunan, serta operasionalisasi. Sebuah proyek IT selama satu semester diberikan kepada satu atau lebih tim, tergantung dari ruang lingkup serta tingkat kompleksitas proyek tersebut. Masalah proyek yang diberikan akan berupa masalah nyata, dengan pengguna yang nyata juga. Selama pengembangan proyek, setiap tim akan bertemu beberapa kali dengan pengguna, selain pertemuan internal tim. Setiap pertemuan tercatat melalui Minutes of Meetings (MoMs), yang akan menjadi bahan pertimbangan untuk penilaian. Setiap tim harus mempresentasikan kemajuan secara mingguan kepada dosen dan/atau asisten dosen mata kuliah. Masalah yang dihadapi selama proses pengembangan akan dibahas pada pertemuan mingguan. Pada akhir semester, semua tim harus mendemokan proyeknya di hadapan pengguna, dosen, serta asisten dosen mata kuliah. Selain itu, akan ada juga sesi kuliah tamu dengan praktisi IT ternama yang akan membagikan ilmu dan pengalaman dalam manajemen dan pengembangan proyek IT";
		$matkul_ppl->dosen()->attach($dosenhadaiq->nip);
		$matkul_ppl->dosen()->attach($dosensby->nip);
		$matkul_ppl->dosen()->attach($dosenputu->nip);
		$matkul_ppl->dosen()->attach($doseneko->nip);
		$matkul_ppl->prasyarat()->attach($matkul_rpl->nip);
		$matkul_ppl->save();
		
		$matkul_pkp = new MataKuliah;
		$matkul_pkp->kodemk = "IKO31258";
		$matkul_pkp->nama = "Pemrograman Konkuren & Paralel";
		$matkul_pkp->singkatan_1 = "Jarkom";
		$matkul_pkp->sks = 4;
		$matkul_pkp->semester = 4;
		$matkul_pkp->jenis = MataKuliah::PEMINATAN;
		$matkul_pkp->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pkp->deskripsi ="";
		$matkul_pkp->dosen()->attach($dosendina->nip);
		$matkul_pkp->dosen()->attach($dosenstef->nip);
		$matkul_pkp->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pkp->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pkp->save();
		
		$matkul_osk = new MataKuliah;
		$matkul_osk->kodemk = "IKO31550";
		$matkul_osk->nama = "Organisasi Sistem Komputer";
		$matkul_osk->singkatan_1 = "Jarkom";
		$matkul_osk->sks = 3;
		$matkul_osk->semester = 4;
		$matkul_osk->jenis = MataKuliah::PEMINATAN;
		$matkul_osk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_osk->deskripsi ="";
		$matkul_osk->dosen()->attach($dosendina->nip);
		$matkul_osk->dosen()->attach($dosenstef->nip);
		$matkul_osk->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_osk->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_osk->save();
		
		$matkul_embed = new MataKuliah;
		$matkul_embed->kodemk = "IIKO31551";
		$matkul_embed->nama = "Embedded Systems";
		$matkul_embed->singkatan_1 = "Jarkom";
		$matkul_embed->sks = 3;  
		$matkul_embed->semester = 4;
		$matkul_embed->jenis = MataKuliah::PEMINATAN;
		$matkul_embed->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_embed->deskripsi ="";
		$matkul_embed->dosen()->attach($dosendina->nip);
		$matkul_embed->dosen()->attach($dosenstef->nip);
		$matkul_embed->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_embed->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_embed->save();
		
		$matkul_ti = new MataKuliah;
		$matkul_ti->kodemk = "IKO32150";
		$matkul_ti->nama = "Teori Informasi";
		$matkul_ti->singkatan_1 = "Jarkom";
		$matkul_ti->sks = 3;
		$matkul_ti->semester = 4;
		$matkul_ti->jenis = MataKuliah::PEMINATAN;
		$matkul_ti->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ti->deskripsi ="";
		$matkul_ti->dosen()->attach($dosendina->nip);
		$matkul_ti->dosen()->attach($dosenstef->nip);
		$matkul_ti->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_ti->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_ti->save();
		
		$matkul_tk = new MataKuliah;
		$matkul_tk->kodemk = "IKO32257";
		$matkul_tk->nama = "Teknik Kompilator";
		$matkul_tk->singkatan_1 = "Jarkom";
		$matkul_tk->sks = 4;
		$matkul_tk->semester = 4;
		$matkul_tk->jenis = MataKuliah::PEMINATAN;
		$matkul_tk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tk->deskripsi ="";
		$matkul_tk->dosen()->attach($dosendina->nip);
		$matkul_tk->dosen()->attach($dosenstef->nip);
		$matkul_tk->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tk->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tk->save();
		
		$matkul_cis = new MataKuliah;
		$matkul_cis->kodemk = "IKO32453";
		$matkul_cis->nama = "Kriptografi & Keamanan Informasi";
		$matkul_cis->singkatan_1 = "Jarkom";
		$matkul_cis->sks = 4;
		$matkul_cis->semester = 4;
		$matkul_cis->jenis = MataKuliah::PEMINATAN;
		$matkul_cis->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_cis->deskripsi ="";
		$matkul_cis->dosen()->attach($dosendina->nip);
		$matkul_cis->dosen()->attach($dosenstef->nip);
		$matkul_cis->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_cis->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_cis->save();
		
		$matkul_law = new MataKuliah;
		$matkul_law->kodemk = "IKO32751";
		$matkul_law->nama = "Layanan & Aplikasi Web";
		$matkul_law->singkatan_1 = "Jarkom";
		$matkul_law->sks = 3;
		$matkul_law->semester = 4;
		$matkul_law->jenis = MataKuliah::PEMINATAN;
		$matkul_law->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_law->deskripsi ="";
		$matkul_law->dosen()->attach($dosendina->nip);
		$matkul_law->dosen()->attach($dosenstef->nip);
		$matkul_law->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_law->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_law->save();
		
		$matkul_sp = new MataKuliah;
		$matkul_sp->kodemk = "IKO41151";
		$matkul_sp->nama = "Simulasi & Pemodelan";
		$matkul_sp->singkatan_1 = "Jarkom";
		$matkul_sp->sks = 3;
		$matkul_sp->semester = 4;
		$matkul_sp->jenis = MataKuliah::PEMINATAN;
		$matkul_sp->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sp->deskripsi ="";
		$matkul_sp->dosen()->attach($dosendina->nip);
		$matkul_sp->dosen()->attach($dosenstef->nip);
		$matkul_sp->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_sp->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_sp->save();
		
		$matkul_psd2 = new MataKuliah;
		$matkul_psd2->kodemk = "IKO41552";
		$matkul_psd2->nama = "Pengolahan Sinyal Dijital";
		$matkul_psd2->singkatan_1 = "Jarkom";
		$matkul_psd2->sks = 3;
		$matkul_psd2->semester = 4;
		$matkul_psd2->jenis = MataKuliah::PEMINATAN;
		$matkul_psd2->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_psd2->deskripsi ="";
		$matkul_psd2->dosen()->attach($dosendina->nip);
		$matkul_psd2->dosen()->attach($dosenstef->nip);
		$matkul_psd2->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_psd2->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_psd2->save();
		
		$matkul_st = new MataKuliah;
		$matkul_st->kodemk = "IKO41554";
		$matkul_st->nama = "Sistem Terdistribusi";
		$matkul_st->singkatan_1 = "Jarkom";
		$matkul_st->sks = 3;
		$matkul_st->semester = 4;
		$matkul_st->jenis = MataKuliah::PEMINATAN;
		$matkul_st->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_st->deskripsi ="";
		$matkul_st->dosen()->attach($dosendina->nip);
		$matkul_st->dosen()->attach($dosenstef->nip);
		$matkul_st->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_st->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_st->save();
		
		$matkul_ubi = new MataKuliah;
		$matkul_ubi->kodemk = "IKO41557";
		$matkul_ubi->nama = "Ubiquitous & Net-centric Computing";
		$matkul_jarkom->singkatan_1 = "Jarkom";
		$matkul_ubi->sks = 3;
		$matkul_ubi->semester = 4;
		$matkul_ubi->jenis = MataKuliah::PEMINATAN;
		$matkul_ubi->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ubi->deskripsi ="";
		$matkul_ubi->dosen()->attach($dosendina->nip);
		$matkul_ubi->dosen()->attach($dosenstef->nip);
		$matkul_ubi->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_ubi->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_ubi->save();
		
		$matkul_robotik = new MataKuliah;
		$matkul_robotik->kodemk = "IKO42360";
		$matkul_robotik->nama = "Robotika";
		$matkul_jarkom->singkatan_1 = "Jarkom";
		$matkul_robotik->sks = 3;
		$matkul_robotik->semester = 4;
		$matkul_robotik->jenis = MataKuliah::PEMINATAN;
		$matkul_robotik->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_robotik->deskripsi ="";
		$matkul_robotik->dosen()->attach($dosendina->nip);
		$matkul_robotik->dosen()->attach($dosenstef->nip);
		$matkul_robotik->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_robotik->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_robotik->save();
		
		$matkul_rsd = new MataKuliah;
		$matkul_rsd->kodemk = "IKO42553";
		$matkul_rsd->nama = "Rancangan Sistem Dijital";
		$matkul_jarkom->singkatan_1 = "RSD";
		$matkul_rsd->sks = 3;
		$matkul_rsd->semester = 4;
		$matkul_rsd->jenis = MataKuliah::PEMINATAN;
		$matkul_rsd->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_rsd->deskripsi ="";
		$matkul_rsd->dosen()->attach($dosendina->nip);
		$matkul_rsd->dosen()->attach($dosenstef->nip);
		$matkul_rsd->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_rsd->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_rsd->save();
		
		$matkul_tka = new MataKuliah;
		$matkul_tka->kodemk = "IKO42555";
		$matkul_tka->nama = "Topik Khusus Arsitektur & Infrastuktur";
		$matkul_tka->singkatan_1 = "tkai";
		$matkul_tka->sks = 3;
		$matkul_tka->semester = 4;
		$matkul_tka->jenis = MataKuliah::PEMINATAN;
		$matkul_tka->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tka->deskripsi ="";
		$matkul_tka->dosen()->attach($dosendina->nip);
		$matkul_tka->dosen()->attach($dosenstef->nip);
		$matkul_tka->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tka->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tka->save();
		
		$matkul_ta = new MataKuliah;
		$matkul_ta->kodemk = "IKI40999";
		$matkul_ta->nama = "Tugas Akhir";
		$matkul_ta->singkatan_1 = "TA";
		$matkul_ta->sks = 6;
		$matkul_ta->semester = 4;
		$matkul_ta->jenis = MataKuliah::PEMINATAN;
		$matkul_ta->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ta->deskripsi ="";
		$matkul_ta->dosen()->attach($dosendina->nip);
		$matkul_ta->dosen()->attach($dosenstef->nip);
		$matkul_ta->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_ta->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_ta->save();
		
		$matkul_sister = new MataKuliah;
		$matkul_sister->kodemk = "IKO31250";
		$matkul_sister->nama = "Sistem Interaksi";
		$matkul_sister->singkatan_1 = "Sister";
		$matkul_sister->sks = 4;
		$matkul_sister->semester = 4;
		$matkul_sister->jenis = MataKuliah::PEMINATAN;
		$matkul_sister->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sister->deskripsi ="";
		$matkul_sister->dosen()->attach($dosendina->nip);
		$matkul_sister->dosen()->attach($dosenstef->nip);
		$matkul_sister->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_sister->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_sister->save();
		
		$matkul_banjut = new MataKuliah;
		$matkul_banjut->kodemk = "IKO31754";
		$matkul_banjut->nama = "Basis Data Lanjut";
		$matkul_banjut->singkatan_1 = "Banjut";
		$matkul_banjut->sks = 3;
		$matkul_banjut->semester = 4;
		$matkul_banjut->jenis = MataKuliah::PEMINATAN;
		$matkul_banjut->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_banjut->deskripsi ="";
		$matkul_banjut->dosen()->attach($dosendina->nip);
		$matkul_banjut->dosen()->attach($dosenstef->nip);
		$matkul_banjut->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_banjut->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_banjut->save();
		
		
		$matkul_grafkom = new MataKuliah;
		$matkul_grafkom->kodemk = "IKO32450";
		$matkul_grafkom->nama = "Grafika Komputer";
		$matkul_grafkom->singkatan_1 = "Jarkom";
		$matkul_grafkom->sks = 3;
		$matkul_grafkom->semester = 4;
		$matkul_grafkom->jenis = MataKuliah::PEMINATAN;
		$matkul_grafkom->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_grafkom->deskripsi ="";
		$matkul_grafkom->dosen()->attach($dosendina->nip);
		$matkul_grafkom->dosen()->attach($dosenstef->nip);
		$matkul_grafkom->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_grafkom->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_grafkom->save();
		
		$matkul_gamedev = new MataKuliah;
		$matkul_gamedev->kodemk = "IKO41251";
		$matkul_gamedev->nama = "Game Development";
		$matkul_gamedev->singkatan_1 = "Jarkom";
		$matkul_gamedev->sks = 3;
		$matkul_gamedev->semester = 4;
		$matkul_gamedev->jenis = MataKuliah::PEMINATAN;
		$matkul_gamedev->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_gamedev->deskripsi ="";
		$matkul_gamedev->dosen()->attach($dosendina->nip);
		$matkul_gamedev->dosen()->attach($dosenstef->nip);
		$matkul_gamedev->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_gamedev->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_gamedev->save();
		
		$matkul_pemlog = new MataKuliah;
		$matkul_pemlog->kodemk = "IKO41253";
		$matkul_pemlog->nama = "Pemrograman Logika";
		$matkul_pemlog->singkatan_1 = "Jarkom";
		$matkul_pemlog->sks = 4;
		$matkul_pemlog->semester = 4;
		$matkul_pemlog->jenis = MataKuliah::PEMINATAN;
		$matkul_pemlog->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pemlog->deskripsi ="";
		$matkul_pemlog->dosen()->attach($dosendina->nip);
		$matkul_pemlog->dosen()->attach($dosenstef->nip);
		$matkul_pemlog->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pemlog->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pemlog->save();
		
		$matkul_pmpl = new MataKuliah;
		$matkul_pmpl->kodemk = "IKO41254";
		$matkul_pmpl->nama = "Penjaminan Mutu Perangkat Lunak";
		$matkul_pmpl->singkatan_1 = "Jarkom";
		$matkul_pmpl->sks = 4;
		$matkul_pmpl->semester = 4;
		$matkul_pmpl->jenis = MataKuliah::PEMINATAN;
		$matkul_pmpl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pmpl->deskripsi ="";
		$matkul_pmpl->dosen()->attach($dosendina->nip);
		$matkul_pmpl->dosen()->attach($dosenstef->nip);
		$matkul_pmpl->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pmpl->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pmpl->save();
		
		$matkul_sw = new MataKuliah;
		$matkul_sw->kodemk = "IKO41361";
		$matkul_sw->nama = "Semantic Web";
		$matkul_sw->singkatan_1 = "Jarkom";
		$matkul_sw->sks = 3;
		$matkul_sw->semester = 4;
		$matkul_sw->jenis = MataKuliah::PEMINATAN;
		$matkul_sw->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sw->deskripsi ="";
		$matkul_sw->dosen()->attach($dosendina->nip);
		$matkul_sw->dosen()->attach($dosenstef->nip);
		$matkul_sw->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_sw->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_sw->save();
		
		$matkul_pbk = new MataKuliah;
		$matkul_pbk->kodemk = "IKO41853";
		$matkul_pbk->nama = "Pengajaran Berbantuan Komputer";
		$matkul_pbk->singkatan_1 = "Jarkom";
		$matkul_pbk->sks = 3;
		$matkul_pbk->semester = 4;
		$matkul_pbk->jenis = MataKuliah::PEMINATAN;
		$matkul_pbk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pbk->deskripsi ="";
		$matkul_pbk->dosen()->attach($dosendina->nip);
		$matkul_pbk->dosen()->attach($dosenstef->nip);
		$matkul_pbk->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pbk->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pbk->save();
		
		$matkul_metfor = new MataKuliah;
		$matkul_metfor->kodemk = "IKO42252";
		$matkul_metfor->nama = "Metode Formal";
		$matkul_metfor->singkatan_1 = "Jarkom";
		$matkul_metfor->sks = 4;
		$matkul_metfor->semester = 4;
		$matkul_metfor->jenis = MataKuliah::PEMINATAN;
		$matkul_metfor->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_metfor->deskripsi ="";
		$matkul_metfor->dosen()->attach($dosendina->nip);
		$matkul_metfor->dosen()->attach($dosenstef->nip);
		$matkul_metfor->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_metfor->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_metfor->save();
		
		$matkul_tkt = new MataKuliah;
		$matkul_tkt->kodemk = "IKO42256";
		$matkul_tkt->nama = "Topik Khusus Teknologi Perangkat Lunak";
		$matkul_tkt->singkatan_1 = "Jarkom";
		$matkul_tkt->sks = 3;
		$matkul_tkt->semester = 4;
		$matkul_tkt->jenis = MataKuliah::PEMINATAN;
		$matkul_tkt->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkt->deskripsi ="";
		$matkul_tkt->dosen()->attach($dosendina->nip);
		$matkul_tkt->dosen()->attach($dosenstef->nip);
		$matkul_tkt->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tkt->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tkt->save();
		
		$matkul_dm = new MataKuliah;
		$matkul_dm->kodemk = "IKO42351";
		$matkul_dm->nama = "Data Mining";
		$matkul_dm->singkatan_1 = "Jarkom";
		$matkul_dm->sks = 3;
		$matkul_dm->semester = 4;
		$matkul_dm->jenis = MataKuliah::PEMINATAN;
		$matkul_dm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_dm->deskripsi ="";
		$matkul_dm->dosen()->attach($dosendina->nip);
		$matkul_dm->dosen()->attach($dosenstef->nip);
		$matkul_dm->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_dm->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_dm->save();
		
		$matkul_pengcit = new MataKuliah;
		$matkul_pengcit->kodemk = "IKO31355";
		$matkul_pengcit->nama = "Pengolahan Citra";
		$matkul_pengcit->singkatan_1 = "Jarkom";
		$matkul_pengcit->sks = 3;
		$matkul_pengcit->semester = 4;
		$matkul_pengcit->jenis = MataKuliah::PEMINATAN;
		$matkul_pengcit->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pengcit->deskripsi ="";
		$matkul_pengcit->dosen()->attach($dosendina->nip);
		$matkul_pengcit->dosen()->attach($dosenstef->nip);
		$matkul_pengcit->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pengcit->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pengcit->save();
		
		$matkul_pm = new MataKuliah;
		$matkul_pm->kodemk = "IKO32353";
		$matkul_pm->nama = "Pemelajaran Mesin";
		$matkul_pm->singkatan_1 = "Jarkom";
		$matkul_pm->sks = 3;
		$matkul_pm->semester = 4;
		$matkul_pm->jenis = MataKuliah::PEMINATAN;
		$matkul_pm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pm->deskripsi ="";
		$matkul_pm->dosen()->attach($dosendina->nip);
		$matkul_pm->dosen()->attach($dosenstef->nip);
		$matkul_pm->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pm->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pm->save();
		
		$matkul_pbm = new MataKuliah;
		$matkul_pbm->kodemk = "IKO32354";
		$matkul_pbm->nama = "Pengolahan Bahasa Manusia";
		$matkul_pbm->singkatan_1 = "Jarkom";
		$matkul_pbm->sks = 3;
		$matkul_pbm->semester = 4;
		$matkul_pbm->jenis = MataKuliah::PEMINATAN;
		$matkul_pbm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pbm->deskripsi ="";
		$matkul_pbm->dosen()->attach($dosendina->nip);
		$matkul_pbm->dosen()->attach($dosenstef->nip);
		$matkul_pbm->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pbm->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pbm->save();
		
		$matkul_pengmul = new MataKuliah;
		$matkul_pengmul->kodemk = "IKO41356";
		$matkul_pengmul->nama = "Pengolahan Multimedia";
		$matkul_pengmul->singkatan_1 = "Jarkom";
		$matkul_pengmul->sks = 3;
		$matkul_pengmul->semester = 4;
		$matkul_pengmul->jenis = MataKuliah::PEMINATAN;
		$matkul_pengmul->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pengmul->deskripsi ="";
		$matkul_pengmul->dosen()->attach($dosendina->nip);
		$matkul_pengmul->dosen()->attach($dosenstef->nip);
		$matkul_pengmul->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pengmul->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pengmul->save();
		
		$matkul_perin = new MataKuliah;
		$matkul_perin->kodemk = "IKO41357";
		$matkul_perin->nama = "Perolehan Informasi";
		$matkul_perin->singkatan_1 = "Jarkom";
		$matkul_perin->sks = 3;
		$matkul_perin->semester = 4;
		$matkul_perin->jenis = MataKuliah::PEMINATAN;
		$matkul_perin->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_perin->deskripsi ="";
		$matkul_perin->dosen()->attach($dosendina->nip);
		$matkul_perin->dosen()->attach($dosenstef->nip);
		$matkul_perin->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_perin->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_perin->save();
		
		$matkul_gm = new MataKuliah;
		$matkul_gm->kodemk = "IKO41452";
		$matkul_gm->nama = "Geometric Modelling";
		$matkul_gm->singkatan_1 = "Jarkom";
		$matkul_gm->sks = 4;
		$matkul_gm->semester = 4;
		$matkul_gm->jenis = MataKuliah::PEMINATAN;
		$matkul_gm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_gm->deskripsi ="";
		$matkul_gm->dosen()->attach($dosendina->nip);
		$matkul_gm->dosen()->attach($dosenstef->nip);
		$matkul_gm->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_gm->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_gm->save();
		
		$matkul_sig = new MataKuliah;
		$matkul_sig->kodemk = "IKO41854";
		$matkul_sig->nama = "Sistem Informasi Geografis";
		$matkul_sig->singkatan_1 = "Jarkom";
		$matkul_sig->sks = 3;
		$matkul_sig->semester = 4;
		$matkul_sig->jenis = MataKuliah::PEMINATAN;
		$matkul_sig->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sig->deskripsi ="";
		$matkul_sig->dosen()->attach($dosendina->nip);
		$matkul_sig->dosen()->attach($dosenstef->nip);
		$matkul_sig->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_sig->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_sig->save();
		
		$matkul_tkpim = new MataKuliah;
		$matkul_tkpim->kodemk = "IKO42359";
		$matkul_tkpim->nama = "Topik Khusus Pengolahan Informasi Multimedia";
		$matkul_tkpim->singkatan_1 = "Jarkom";
		$matkul_tkpim->sks = 3;
		$matkul_tkpim->semester = 4;
		$matkul_tkpim->jenis = MataKuliah::PEMINATAN;
		$matkul_tkpim->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkpim->deskripsi ="";
		$matkul_tkpim->dosen()->attach($dosendina->nip);
		$matkul_tkpim->dosen()->attach($dosenstef->nip);
		$matkul_tkpim->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tkpim->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tkpim->save();
		
		$matkul_cg = new MataKuliah;
		$matkul_cg->kodemk = "IKO42451";
		$matkul_cg->nama = "Computational Geometry";
		$matkul_cg->singkatan_1 = "Jarkom";
		$matkul_cg->sks = 4;
		$matkul_cg->semester = 4;
		$matkul_cg->jenis = MataKuliah::PEMINATAN;
		$matkul_cg->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_cg->deskripsi ="";
		$matkul_cg->dosen()->attach($dosendina->nip);
		$matkul_cg->dosen()->attach($dosenstef->nip);
		$matkul_cg->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_cg->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_cg->save();
		
		$matkul_bio = new MataKuliah;
		$matkul_bio->kodemk = "IKO31350";
		$matkul_bio->nama = "Bioinformatika";
		$matkul_bio->singkatan_1 = "Jarkom";
		$matkul_bio->sks = 3;
		$matkul_bio->semester = 4;
		$matkul_bio->jenis = MataKuliah::PEMINATAN;
		$matkul_bio->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_bio->deskripsi ="";
		$matkul_bio->dosen()->attach($dosendina->nip);
		$matkul_bio->dosen()->attach($dosenstef->nip);
		$matkul_bio->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_bio->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_bio->save();
		
		$matkul_pd = new MataKuliah;
		$matkul_pd->kodemk = "IKO32152";
		$matkul_pd->nama = "Persamaan Diferensial";
		$matkul_pd->singkatan_1 = "Jarkom";
		$matkul_pd->sks = 3;
		$matkul_pd->semester = 4;
		$matkul_pd->jenis = MataKuliah::PEMINATAN;
		$matkul_pd->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pd->deskripsi ="";
		$matkul_pd->dosen()->attach($dosendina->nip);
		$matkul_pd->dosen()->attach($dosenstef->nip);
		$matkul_pd->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pd->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_pd->save();
		
		$matkul_asn = new MataKuliah;
		$matkul_asn->kodemk = "IKO41153";
		$matkul_asn->nama = "Aproksimasi & Sistem Nonlinier";
		$matkul_asn->singkatan_1 = "Jarkom";
		$matkul_asn->sks = 3;
		$matkul_asn->semester = 4;
		$matkul_asn->jenis = MataKuliah::PEMINATAN;
		$matkul_asn->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_asn->deskripsi ="";
		$matkul_asn->dosen()->attach($dosendina->nip);
		$matkul_asn->dosen()->attach($dosenstef->nip);
		$matkul_asn->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_asn->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_asn->save();
		
		$matkul_alinn = new MataKuliah;
		$matkul_alinn->kodemk = "IKO41154";
		$matkulalinn->nama = "Aljabar Linier Numerik";
		$matkul_alinn->singkatan_1 = "Jarkom";
		$matkul_alinn->sks = 3;
		$matkul_alinn->semester = 4;
		$matkul_alinn->jenis = MataKuliah::PEMINATAN;
		$matkul_alinn->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_alinn->deskripsi ="";
		$matkul_alinn->dosen()->attach($dosendina->nip);
		$matkul_alinn->dosen()->attach($dosenstef->nip);
		$matkul_alinn->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_alinn->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_alinn->save();
			
		$matkul_komnak = new MataKuliah;
		$matkul_komnak->kodemk = "IKO41352";
		$matkul_komnak->nama = "Komputasi Lunak";
		$matkul_komnak->singkatan_1 = "Jarkom";
		$matkul_komnak->sks = 3;
		$matkul_komnak->semester = 4;
		$matkul_komnak->jenis = MataKuliah::PEMINATAN;
		$matkul_komnak->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_komnak->deskripsi ="";
		$matkul_komnak->dosen()->attach($dosendina->nip);
		$matkul_komnak->dosen()->attach($dosenstef->nip);
		$matkul_komnak->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_komnak->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_komnak->save();
		
		$matkul_lk = new MataKuliah;
		$matkul_lk->kodemk = "IKO41454";
		$matkul_lk->nama = "Logika Komputasional";
		$matkul_lk->singkatan_1 = "Jarkom";
		$matkul_lk->sks = 3;
		$matkul_lk->semester = 4;
		$matkul_lk->jenis = MataKuliah::PEMINATAN;
		$matkul_lk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_lk->deskripsi ="";
		$matkul_lk->dosen()->attach($dosendina->nip);
		$matkul_lk->dosen()->attach($dosenstef->nip);
		$matkul_lk->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_lk->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_lk->save();
		
		$matkul_tkkk = new MataKuliah;
		$matkul_tkkk->kodemk = "IKO42358";
		$matkul_tkkk->nama = "Topik Khusus Kecerdasan Komputasional";
		$matkul_tkkk->singkatan_1 = "Jarkom";
		$matkul_tkkk->sks = 3;
		$matkul_tkkk->semester = 4;
		$matkul_tkkk->jenis = MataKuliah::PEMINATAN;
		$matkul_tkkk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkkk->deskripsi ="";
		$matkul_tkkk->dosen()->attach($dosendina->nip);
		$matkul_tkkk->dosen()->attach($dosenstef->nip);
		$matkul_tkkk->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tkkk->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tkkk->save();
		
		$matkul_tkl = new MataKuliah;
		$matkul_tkl->kodemk = "IKO61480";
		$matkul_tkl->nama = "Teori Komputasi Lanjut";
		$matkul_tkl->sks = 4;
		$matkul_tkl->singkatan_1 = "Jarkom";
		$matkul_tkl->sks = 3;
		$matkul_tkl->semester = 4;
		$matkul_tkl->jenis = MataKuliah::PEMINATAN;
		$matkul_tkl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkl->deskripsi ="";
		$matkul_tkl->dosen()->attach($dosendina->nip);
		$matkul_tkl->dosen()->attach($dosenstef->nip);
		$matkul_tkl->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_tkl->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_tkl->save();
		///
		
		
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
		
		
		///////////////////////////////////
		
		$matkul_anum->prasyarat()->attach($matkul_matdas2->id);
			
		$matkul_ppl = new MataKuliah;
		$matkul_ppl->kodemk = "IK00001";
		$matkul_ppl->nama = "Proyek Perangkat Lunak";
		
		$matkul_ppl->singkatan_1 = "PPL";
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
