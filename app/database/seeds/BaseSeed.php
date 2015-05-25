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

		$dosenani->nip = "194805291975012001";
		$dosenani->nama = "Prof. Aniati Murni Arymurthy , Ir, M.Sc, Dr.";
		$dosenani->jeniskelamin = Dosen::PEREMPUAN;
		$dosenani->pendidikan = 'S3';
        $dosenani->save();
        
        $dosenherus = new Dosen;
		$dosenherus ->nip = "196104191992031001";
		$dosenherus ->nama = "Prof. Heru Suhartanto, Drs, M.Sc , Ph.D.";
		$dosenherus ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenherus ->pendidikan = 'S3';
        $dosenherus ->save();
		
		$dosencan = new Dosen;
		$dosencan ->nip = "196111251992031001";
		$dosencan ->nama = "Prof. T. Basaruddin,Drs, M.Sc, PhD";
		$dosencan ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosencan ->pendidikan = 'S3';
        $dosencan ->save();
        
        $dosentoem = new Dosen;
		$dosentoem ->nip = "196111251992031001";
		$dosentoem ->nama = "Prof. Toemin A. Masoem,M.Sc, Dr.";
		$dosentoem ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosentoem ->pendidikan = 'S3';
        $dosentoem ->save();
		
		$dosenzain = new Dosen;
		$dosenzain ->nip = "195912241995121001";
		$dosenzain ->nama = "Prof. Zainal Arifin Hasibuan, Ir.,MLS, PhD.";
		$dosenzain ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenzain ->pendidikan = 'S3';
		$dosenzain ->save();
            
		$dosennizar = new Dosen;
		$dosennizar ->nip = "197607242000121001";
		$dosennizar ->nama = "Achmad Nizar Hidayanto, S.Kom, M.Kom. Dr.";
		$dosennizar ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosennizar ->pendidikan = 'S3';
        $dosennizar ->save();
        
        $dosenade = new Dosen;
		$dosenade ->nip = "197612122010121001";
		$dosenade ->nama = "Ade Azurat, S.Kom., Dr.";
		$dosenade ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenade ->save();
		
		$dosenadhi = new Dosen;
		$dosenadhi ->nip = "195906231997021001";
		$dosenadhi ->nama = "Adhi Yuniarto L.Y., Ir, M.Kom.";
		$dosenadhi ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenadhi ->pendidikan = 'S2';
        $dosenadhi ->save();
		
		$dosenalfan = new Dosen;
		$dosenalfan ->nip = "121303009";
		$dosenalfan ->nama = "Alfan Farizki Wicaksono, ST., M.Sc.";
		$dosenalfan ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenalfan ->pendidikan = 'S2';
        $dosenalfan ->save();
		
		$dosenamril = new Dosen;
		$dosenamril ->nip = "120703001";
		$dosenamril ->nama = "Amril Syalim, S.Kom. M.Eng.";
		$dosenamril ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenamril ->pendidikan = 'S2';
        $dosenamril ->save();
		
		$dosenamril = new Dosen;
		$dosenamril ->nip = "130517315";
		$dosenamril ->nama = "Bagyo Y. Moeliodihardjo, Ir, M.Sc.";
		$dosenamril ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenamril ->pendidikan = 'S2';
        $dosenamril ->save();
		
		$dosenbayu = new Dosen;
		$dosenbayu ->nip = "198704262012121002";
		$dosenbayu ->nama = "Bayu Distiawan Trisedya, M.Kom";
		$dosenbayu ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenbayu ->pendidikan = 'S2';
        $dosenbayu ->save();
		
		$dosenbetty = new Dosen;
		$dosenbetty ->nip = "197006301997032001";
		$dosenbetty ->nama = "Betty Purwandari, S.Kom., M.Sc., PhD.";
		$dosenbetty ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenbetty ->pendidikan = 'S3';
        $dosenbetty ->save();
		
		$dosenbob = new Dosen;
		$dosenbob ->nip = "196604261997021001";
		$dosenbob ->nama = "Bob Hardian Syahbuddin, Ir, Ph.D.";
		$dosenbob ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenbob ->pendidikan = 'S3';
        $dosenbob ->save();
		
		$dosenbobby = new Dosen;
		$dosenbobby ->nip = "1207050178";
		$dosenbobby ->nama = "Bobby A. Nazief, Drs., M.Sc., Ph.D.";
		$dosenbobby ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenbobby ->pendidikan = 'S3';
        $dosenbobby ->save();
		
		$dosendadan = new Dosen;
		$dosendadan ->nip = "196901161997031003";
		$dosendadan ->nama = "Dadan Hardianto, S.Kom, M.Kom.";
		$dosendadan ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosendadan ->pendidikan = 'S2';
        $dosendadan ->save();
		
		$dosendana = new Dosen;
		$dosendana ->nip = "196110221995031001";
		$dosendana ->nama = "Dana Indra Sensuse, Ir, MLIS, PhD.";
		$dosendana ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosendana ->pendidikan = 'S3';
        $dosendana ->save();
		
		$dosendenny = new Dosen;
		$dosendenny ->nip = "197704182012121003";
		$dosendenny ->nama = "Denny, S.Kom, MIT, PhD.";
		$dosendenny ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosendenny ->pendidikan = 'S3';
        $dosendenny ->save();
		
		$dosendina = new Dosen;
		$dosendina ->nip = "197705022000122001";
		$dosendina ->nama = "Dina Chahyati, S.Kom., M.Kom.";
		$dosendina ->jeniskelamin = Dosen::PEREMPUAN;
		$dosendina ->pendidikan = 'S3';
        $dosendina ->save();
		
		$doseneko = new Dosen;
		$doseneko ->nip = "195911031992031002";
		$doseneko ->nama = "Eko Kuswardono Budiardjo, Ir, M.Sc.Dr.";
		$doseneko ->jeniskelamin = Dosen::LAKI_LAKI;
        $doseneko ->save();
		

		$dosenefi = new Dosen;
		$dosenefi ->nip = "	195906171985032000";
		$dosenefi ->nama = "Erdefi Rakun, Ir., M.Sc .";
		$dosenefi ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenefi ->pendidikan = 'S2';
        $dosenefi ->save();
		
		$dosengladhi = new Dosen;
		$dosengladhi ->nip = "1408150029";
		$dosengladhi ->nama = "Gladhi Guarddin, S.Kom., M.Kom.";
		$dosengladhi ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosengladhi ->pendidikan = 'S2';
        $dosengladhi ->save();
		
		$dosenharry = new Dosen;
		$dosenharry ->nip = "120803003";
		$dosenharry ->nama = "Harry Budi Santoso, S.Kom., M.Kom., Ph.D.";
		$dosenharry ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenharry ->pendidikan = 'S3';
        $dosenharry ->save();
		
		$dosenheri = new Dosen;
		$dosenheri ->nip = "198005192010121003";
		$dosenheri ->nama = "Heri Kurniawan, S.Kom, M.Kom.";
		$dosenheri ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenheri ->pendidikan = 'S2';
        $dosenheri ->save();
		
		$dosenruli = new Dosen;
		$dosenruli ->nip = "1208050380";
		$dosenruli ->nama = "Hisar Maruli Manurung, S.Kom., Ph.D.";
		$dosenruli ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenruli ->pendidikan = 'S3';
        $dosenruli ->save();
		
		$doseniik = new Dosen;
		$doseniik ->nip = "195304201989031002";
		$doseniik ->nama = "Iik Wilarso, dr, MTI";
		$doseniik ->jeniskelamin = Dosen::LAKI_LAKI;
		$doseniik ->pendidikan = 'S2';
        $doseniik ->save();
		
		$dosenika = new Dosen;
		$dosenika ->nip = "197512202009122003";
		$dosenika ->nama = "Ika Alfina, S.Kom., M.Kom.";
		$dosenika ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenika ->pendidikan = 'S2';
        $dosenika ->save();
		
		$dosenindra = new Dosen;
		$dosenindra ->nip = "197603012008121001";
		$dosenindra ->nama = "Indra Budi, S.Kom, M.Kom, Dr";
		$dosenindra ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenindra ->pendidikan = 'S3';
        $dosenindra ->save();
		
		$dosenito = new Dosen;
		$dosenito ->nip = "120903013";
		$dosenito ->nama = "Ito Wasito, Ph.D";
		$dosenito ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenito ->pendidikan = 'S3';
        $dosenito ->save();
		
		$dosenkas = new Dosen;
		$dosenkas ->nip = "196105101987032001";
		$dosenkas ->nama = "Kasiyah, Dra, M.Sc.";
		$dosenkas ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenkas ->pendidikan = 'S2';
        $dosenkas ->save();
        
        $dosenstef = new Dosen;
		$dosenstef ->nip = "195903251993111001";
		$dosenstef ->nama = "Lim Yohanes Stefanus, Drs, M.Math, Ph.D.";
		$dosenstef ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenstef ->pendidikan = 'S3';
        $dosenstef ->save();
		
		$dosenivan = new Dosen;
		$dosenivan  ->nip = "121003005";
		$dosenivan  ->nama = "M. Ivan Fanany, S.Si, M.Kom, Ph.D.	";
		$dosenivan  ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenivan  ->pendidikan = 'S3';
        $dosenivan  ->save();

		$dosenmirna = new Dosen;
		$dosenmirna ->nip = "1207050179";
		$dosenmirna ->nama = "Mirna Adriani, Dra, Ph.D.";
		$dosenmirna ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenmirna ->pendidikan = 'S3';
        $dosenmirna ->save();

		$dosenhilman- = new Dosen;
		$dosenhilman ->nip = "121203003";
		$dosenhilman ->nama = "Muhammad Hafizhuddin Hilman, S.Kom., M.Kom.";
		$dosenhilman ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenhilman ->pendidikan = 'S2';
        $dosenhilman ->save();
		
		$dosenrah = new Dosen;
		$dosenrah ->nip = "197511261999031001";
		$dosenrah ->nama = "Muhammad Rahmat Widyanto, SKom., M.Eng.Dr. Eng.";
		$dosenrah ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenrah ->pendidikan = 'S3';
        $dosenrah ->save();
		
		$dosenrifki= new Dosen;
		$dosenrifki ->nip = "120503001";
		$dosenrifki->nama = "Muhammad Rifki Shihab, B.B.A., M.Sc.";
		$dosenrifki ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenrifki ->pendidikan = 'S2';
        $dosenrifki ->save();
		
        $dosenpetrus = new Dosen;
		$dosenpetrus ->nip = "196706252000031002";
		$dosenpetrus->nama = "Petrus Mursanto, Ir, M.Sc.Dr";
		$dosenpetrus->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenpetrus ->pendidikan = 'S3';
        $dosenpetrus ->save();
		
		$dosenpuspa = new Dosen;
		$dosenpuspa ->nip = "121103004";
		$dosenpuspa ->nama = "Puspa Indahati Sandhyaduhita S.T., M.Sc";
		$dosenpuspa ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenpuspa ->pendidikan = 'S2';
        $dosenpuspa ->save();
		
		$dosenputu = new Dosen;
		$dosenputu ->nip = "120803007";
		$dosenputu ->nama = "Putu Wuri Handayani, S.Kom., MSc";
		$dosenputu ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenputu ->pendidikan = 'S2';
        $dosenputu ->save();
		
		$dosenyugo = new Dosen;
		$dosenyugo ->nip = "196201021992031003";
		$dosenyugo ->nama = "R. Yugo Kartono Isal, Drs, M.Sc., Dr.";
		$dosenyugo ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenyugo ->pendidikan = 'S3';
        $dosenyugo ->save();
		
		$dosenibam = new Dosen;
		$dosenibam->nip = "196012311992031010";
		$dosenibam ->nama = "Rahmat M. Samik-Ibrahim, M. Kom.";
		$dosenibam ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenibam ->pendidikan = 'S2';
        $dosenibam ->save();
		
		$dosenrizal = new Dosen;
		$dosenrizal ->nip = "198202242010121002";
		$dosenrizal ->nama = "Rizal Fathoni Aji, S.Kom., M.Kom";
		$dosenrizal ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenrizal ->pendidikan = 'S2';
        $dosenrizal ->save();
		
		$dosensby = new Dosen;
		$dosensby ->nip = "198305122010121004";
		$dosensby ->nama = "Satrio Baskoro Yudhoatmojo, S.Kom, MTI";
		$dosensby ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosensby ->pendidikan = 'S2';
        $dosensby ->save();
        
        $dosenyazid = new Dosen;
        $dosenyazid ->nip = "120703004";
		$dosenyazid ->nama = "Setiadi Yazid, Ph.D.";
		$dosenyazid ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenyazid ->pendidikan = 'S3';
        $dosenyazid ->save();
		
		$dosenaminah = new Dosen;
		$dosenaminah ->nip = "197801212008122001";
		$dosenaminah ->nama = "Siti Aminah, S.Kom., M.Kom.";
		$dosenaminah ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenaminah ->pendidikan = 'S2';
        $dosenaminah ->save();
		
		$dosensuryana = new Dosen;
		$dosensuryana ->nip = "196210311995031001";
		$dosensuryana ->nama = "Suryana Setiawan, Ir, M.Sc.";
		$dosensuryana ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosensuryana ->pendidikan = 'S2';
        $dosensuryana ->save();
		
		$dosenwcw = new Dosen;
		$dosenwcw ->nip = "196312061995031001";
		$dosenwcw ->nama = "Wahyu Catur Wibowo, Ir., M.Sc., Ph.D.";
		$dosenwcw ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenwcw ->pendidikan = 'S3';
        $dosenwcw ->save();
		
		$dosenwidi = new Dosen;
		$dosenwidi->nip = "1207050180";
		$dosenwidi ->nama = "Widijanto Satyo Nugroho, Drs., M.Math., Ph.D.";
		$dosenwidi ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenwidi ->pendidikan = 'S3';
        $dosenwidi ->save();
		
		$dosenwisnu = new Dosen;
		$dosenwisnu ->nip = "1208050382";
		$dosenwisnu ->nama = "Wisnu Jatmiko, Ir.,M.Kom, Dr.Eng.";
		$dosenwisnu ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenwisnu ->pendidikan = 'S3';
        $dosenwisnu ->save();
		
		$dosenyova = new Dosen;
		$dosenyova ->nip = "197209201998022001";
		$dosenyova ->nama = "Yova Ruldeviyani, S.Kom., M.Kom.";
		$dosenyova ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenyova ->pendidikan = 'S2';
        $dosenyova ->save();
		
		$dosenyudho = new Dosen;
		$dosenyudho ->nip = "197204271997031002";
		$dosenyudho ->nama = "Yudho Giri Sucahyo, S.Kom., M.Kom., PhD.";
		$dosenyudho->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenyudho ->pendidikan ='S3';
        $dosenyudho ->save();
		
		$dosenadila = new Dosen;
		$dosenadila->nip = "198009062008121003";
		$dosenadila->nama = "Adila Alfa Krisnadhi, S.Kom., M.Sc.";
		$dosenadila->jeniskelamin = Dosen::PEREMPUAN;
		$dosenadila->pendidikan = 'S2';
        $dosenadila ->save();
		
		$dosenagus = new Dosen;
		$dosenagus ->nip = "197708132010121001";
		$dosenagus ->nama = "Agus Kurniawan, ST. M.Si";
		$dosenagus ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenagus ->pendidikan = 'S2';
        $dosenagus ->save();
		
		$dosenaris = new Dosen;
		$dosenaris ->nip = "197609262010121001";
		$dosenaris ->nama = "Ari Saptawijaya, S.Kom., M.C.S.";
		$dosenaris ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenaris ->pendidikan = 'S2';
        $dosenaris ->save();
			
		$dosenclara = new Dosen;
		$dosenclara ->nip = "121103002";
		$dosenclara ->nama = "Clara Vania, M.Kom.";
		$dosenclara ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenclara ->pendidikan = 'S2';
        $dosenclara ->save();
		
		$dosendewi = new Dosen;
		$dosendewi ->nip = "1206050119";
		$dosendewi ->nama = "Dewi Mairiza, S.Kom.M.Kom.";
		$dosendewi	 ->jeniskelamin = Dosen::PEREMPUAN;
		$dosendewi ->pendidikan = 'S2';
        $dosendewi ->save();
		
		$dosenherry = new Dosen;
		$dosenherry ->nip = "120903005";
		$dosenherry ->nama = "Herry, S.Kom, M.Kom";
		$dosenherry ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenherry ->pendidikan = 'S2';
        $dosenherry ->save();
				
		$dosenpertami = new Dosen;
		$dosenpertami ->nip = "121103009";
		$dosenpertami ->nama = "Pertami Junia Hayuningtyas, M.Sc";
		$dosenpertami ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenpertami ->pendidikan = 'S2';
        $dosenpertami ->save();
		
		$dosentisha = new Dosen;
		$dosentisha ->nip = "121003004";
		$dosentisha ->nama = "Tisha Melia, B.Sc, M,Sc.";
		$dosentisha ->jeniskelamin = Dosen::PEREMPUAN;
		$dosentisha ->pendidikan = 'S2';
        $dosentisha ->save();
		
		$dosensam = new Dosen;
		$dosensam  ->nip = "121003006";
		$dosensam  ->nama = "Samuel Louvan, S.Kom, M.Sc";
		$dosensam  ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosensam ->pendidikan = 'S2';
        $dosensam ->save();
		
		$dosenaritonang = new Dosen;
		$dosenaritonang ->nip = "120903002";
		$dosenaritonang->nama = "Dr. Drs. Manusun Gala Sebulon Aritonang, S.E., MBA";
		$dosenaritonang ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenaritonang ->pendidikan = 'S3';
        $dosenaritonang ->save();
		
		$dosenkasfu = new Dosen;
		$dosenkasfu ->nip = "120513901";
		$dosenkasfu ->nama = "Muhammad Kasfu Hammi S.Kom., M.T.I.";
		$dosenkasfu ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenkasfu ->pendidikan = 'S2';
        $dosenkasfu ->save();
			
		$dosenimairi = new Dosen;
		$dosenimairi ->nip = "121203001";
		$dosenimairi ->nama = "Imairi Eitiveni M.Kom.";
		$dosenimairi ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenimairi ->pendidikan = 'S2';
        $dosenimairi ->save();
		
		$dosenbilih = new Dosen;
		$dosenbilih ->nama = "Bilih Priyogi S.Kom., M.Kom.";
		$dosenbilih->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenbilih ->pendidikan = 'S2';
        $dosenbilih ->save();
				
		$dosenqorib = new Dosen;
		$dosenqorib  ->nip = "xxxxxxxx";
		$dosenqorib  ->nama = "Qorib Munajat S.Kom.";
		$dosenqorib ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenqorib  ->pendidikan = 'S1';
        $dosenqorib ->save();
		
		$dosenherup = new Dosen;
		$dosenherup ->nip = "121303013";
		$dosenherup ->nama = "Nursidik Heru Praptono, S.Kom, M.Kom";
		$dosenherup ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenherup ->pendidikan = 'S2';
        $dosenherup ->save();
		
		$dosenave = new Dosen;
		$dosenave ->nama = "Ave Adriana Pinem S.Kom.";
		$dosenave ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenave ->pendidikan = 'S2';
        $dosenave ->save();
		
		$dosenhaya = new Dosen;
		$dosennhaya ->nama = "Haya Rizqi Fajrina S.Kom.";
		$dosennhaya ->jeniskelamin = Dosen::PEREMPUAN;
		$dosennhaya ->pendidikan = 'S1';
        $dosenhaya ->save();
			
		$dosenarlisa = new Dosen;
		$dosenarlisa ->nip = "121303010";
		$dosenarlisa ->nama = "Arlisa Yuliawati S.Kom, M.Kom.";
		$dosenarlisa ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenarlisa ->pendidikan = 'S2';
        $dosenarlisa ->save();
	
		$dosenikac = new Dosen;
		$dosenikac ->nama = "Ika Chandra Hapsari S.Kom.";
		$dosenikac ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenikac ->pendidikan = 'S1';
        $dosenikac ->save();
		
		$dosenarief = new Dosen;
		$dosenarief ->nip = "121303006";
		$dosenarief ->nama = "Dr. Arief Ramadhan S.Kom.";
		$dosenarief ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenarief ->pendidikan = 'S3';
        $dosenarief ->save();
		
		$doseniis = new Dosen;
		$doseniis ->nip = "121203008";
		$doseniis ->nama = "Iis Solichah S.Kom., M.Kom.";
		$doseniis ->jeniskelamin = Dosen::PEREMPUAN;
		$doseniis ->pendidikan = 'S2';
        $doseniis ->save();
		
		$dosenari = new Dosen;
		$dosenari ->nip = "121303007";
		$dosenari ->nama = "Ari Wibisono M.Kom.";
		$dosenari ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenari ->pendidikan = 'S2';
        $dosenari ->save();
		
		$dosenherdi = new Dosen;
		$dosenherdi ->nama = "Herdiansyah Rhamadan S.Kom.";
		$dosenherdi ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenherdi ->pendidikan = 'S1';
        $dosenherdi ->save();
		
		$dosenmega = new Dosen;
		$dosenmega ->nama = "Meganingrum Arista Jiwanggi S.Kom., M.Kom.";
		$dosenmega ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenmega ->pendidikan = 'S2';
        $dosenmega ->save();
		
		$dosenhadaiq = new Dosen;
		$dosenhadaiq  ->nip = "121203004";
		$dosenhadaiq  ->nama = "Hadaiq Rolis Sanabila S.Kom., M.Kom.";
		$dosenhadaiq  ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenhadaiq ->pendidikan = 'S2';
        $dosenhadaiq ->save();
		
		$dosennurul = new Dosen;
		$dosennurul ->nama = "Nurul Qomariyah S.Kom., M.Kom.";
		$dosennurul ->jeniskelamin = Dosen::PEREMPUAN;
		$dosennurul->pendidikan = 'S2';
        $dosennurul ->save();
		
		$dosenedy = new Dosen;
		$dosenedy ->nip = "121303004";
		$dosenedy ->nama = "I Putu Edy Suardiyana Putra S.Kom., M.Kom.";
		$dosenedy ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenedy ->pendidikan 'S2';
        $dosenedy ->save();

		$dosengilang = new Dosen;
		$dosengilang ->nip = "121303003";
		$dosengilang ->nama = "Gilang Kusuma Jati S.T., M.Kom.";
		$dosengilang ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosengilang ->pendidikan = 'S2';
        $dosengilang ->save();
		
		$dosenhanif = new Dosen;
		$dosenhanif ->nip = "121203009";
		$dosenhanif ->nama = "Hanif Rasyidi M.Kom.";
		$dosenhanif ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenhanif ->pendidikan = 'S2';
        $dosenhanif ->save();
		
		$dosenmaya = new Dosen;
		$dosenmaya ->nip = "121403002";
		$dosenmaya ->nama = "Maya Retno Ayu Setyautami S.Kom., M.Kom.";
		$dosenmaya ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenmaya ->pendidikan = 'S2';
        $dosenmaya ->save();
		
		$dosenrahmad = new Dosen;
		$dosenrahmad ->nip = "121403001";
		$dosenrahmad ->nama = "Rahmad Mahendra S.Kom., M.Sc.";
		$dosenrahmad ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenrahmad->pendidikan = 'S2';
        $dosenrahmad ->save();
		
		$dosenevi = new Dosen;
		$dosenevi ->nip = "121303008";
		$dosenevi ->nama = "Evi Yulianti S.Kom.";
		$dosenevi ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenevi ->pendidikan = 'S1';
        $dosenevi ->save();

		$dosenary = new Dosen;
		$dosenary ->nip = "121303002";
		$dosenary ->nama = "Ary Noviyanto S.Kom., M.Kom.";
		$dosenary ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenary ->pendidikan = 'S2';
        $dosenary ->save();
		
		$dosenangga = new Dosen;
		$dosenangga ->nip = "121203006";
		$dosenangga ->nama = "Anggha Satya Nugraha S.Si., M.Kom.	";
		$dosenangga ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenangga ->pendidikan = 'S2';
        $dosenangga ->save();
		
		$dosentieta = new Dosen;
		$dosentieta ->nip = "121303001";
		$dosentieta ->nama = "Tieta Antaresti Riska Putri S.Kom., M.Kom.";
		$dosentieta ->jeniskelamin = Dosen::PEREMPUAN;
		$dosentieta ->pendidikan = 'S2';
        $dosentieta ->save();
		
		$dosenlia = new Dosen;
		$dosenlia ->nip = "121403003";
		$dosenlia ->nama = "Lia Sadita S.Kom.";
		$dosenlia ->jeniskelamin = Dosen::PEREMPUAN;
		$dosenlia ->pendidikan = 'S1';
        $dosenlia ->save();
		
		$dosenyayan = new Dosen;
		$dosenyayan ->nip = "xxxxxxxxx";
		$dosenyayan ->nama = "Yulistiyan Wardhana S.Kom.";
		$dosenyayan ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenyayan ->pendidikan = 'S1';
        $dosenyayan ->save();
		
		$dosenhisyam = new Dosen;
		$dosenhisyam ->nip = "121303012";
		$dosenhisyam ->nama = "Hisyam Fahmi S.Kom, M.Kom.";
		$dosenhisyam ->jeniskelamin = Dosen::LAKI_LAKI;
		$dosenhisyam ->pendidikan = 'S2';
        $dosenhisyam ->save();
		
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
		$matkul_pkp->singkatan_1 = "PKP";
		$matkul_pkp->sks = 4;
		$matkul_pkp->semester = 5;
		$matkul_pkp->jenis = MataKuliah::PEMINATAN;
		$matkul_pkp->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pkp->deskripsi ="Mata kuliah ini mencakup teori konkurensi dan paralelisme, sejarah mesin berkinerja tinggi, dan cara pemanfaatan fasilitas komputasi kinerja tinggi seperti komputasi pada Cluster dan GPU. Mahasiswa akan diajarkan teori mengenai paradigma pemrograman paralel, konsep mesin SIMD dan MIMD, serta isu-isu seperti shared memory, mutual exclusion, dan semaphores, dan juga dibekali dengan pengetahuan praktis mengenai standar-standar terkini seperti Open MP, CUDA, dst";
		$matkul_pkp->dosen()->attach($dosenherus->nip);
		$matkul_pkp->prasyarat()->attach($matkul_os->nip);
		$matkul_pkp->prasyarat()->attach($matkul_alin->nip);
		$matkul_pkp->prasyarat()->attach($matkul_matdas2->nip);
		$matkul_pkp->save();
		
		$matkul_osk = new MataKuliah;
		$matkul_osk->kodemk = "IKO31550";
		$matkul_osk->nama = "Organisasi Sistem Komputer";
		$matkul_osk->singkatan_1 = "OSK";
		$matkul_osk->sks = 3;
		$matkul_osk->semester = 5;
		$matkul_osk->jenis = MataKuliah::PEMINATAN;
		$matkul_osk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_osk->deskripsi ="Mata kuliah ini berisi pembahasan rinci komponen utama sistem komputer : prosesor, memory dan masukan/keluaran. Penekanan ditujukan pada analisa dan teknik peningkatan kinerja (performance) dari sistem komputer. Topik-topik yang dibahas meliputi pengantar rancangan komputer, perspektif historis; komponen dari sistem komputer, organisasi dasar mesin komputer; kinerja dan biaya, pilihan dalam rancangan; realisasi organisasi sistem komputer; RISC; implementasi dan analisa perangkat instruksi pada contoh-contoh organisasi sistem komputer yang diberikan; rancangan prosesor: data path unit dan pengendali prosesor, micro programming dan hardwired control; rancangan memory : cache memory, pipelining; masukan dan keluaran (I/O)";
		$matkul_osk->dosen()->attach($dosen->nip);
		$matkul_osk->prasyarat()->attach($matkul_pok->nip);
		$matkul_osk->save();
		
		$matkul_embed = new MataKuliah;
		$matkul_embed->kodemk = "IIKO31551";
		$matkul_embed->nama = "Embedded Systems";
		$matkul_embed->singkatan_1 = "Embed";
		$matkul_embed->sks = 3;  
		$matkul_embed->semester = 5;
		$matkul_embed->jenis = MataKuliah::PEMINATAN;
		$matkul_embed->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_embed->deskripsi ="Sistem tertanam (Embedded System) merupakan sistem berbasis mikrokontroler dan merupakan perpaduan antara hardware dan software untuk suatu fungsi tertentu. Sejak ditemukan mikroprosesor awal tahun 70an, teknologi dan aplikasi sistem tertanam berkembang sangat pesat dan merambah ke berbagai aspek kehidupan manusia seperti mobile devices (handphones, MP3 players, dsb), medical systems, robotics, automations, dsb. Mata kuliah ini ditujukan untuk memberikan bekal untuk perancangan sistem tertanam, terutama dari aspek kemampuan menghasilkan software yang handal";
		$matkul_embed->dosen()->attach($dosenwisnu->nip);
		$matkul_embed->dosen()->attach($dosenstef->nip);
		$matkul_embed->prasyarat()->attach($matkul_pok->nip);
		$matkul_embed->save();
		
		$matkul_ti = new MataKuliah;
		$matkul_ti->kodemk = "IKO32150";
		$matkul_ti->nama = "Teori Informasi";
		$matkul_ti->singkatan_1 = "TI";
		$matkul_ti->sks = 3;
		$matkul_ti->semester = 5;
		$matkul_ti->jenis = MataKuliah::PEMINATAN;
		$matkul_ti->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ti->deskripsi ="Teori informasi mempelajari batas-batas mendasar dalam transmisi dan penyimpanan informasi. Mata kuliah ini memberikan pengenalan umum mengenai teori informasi serta aplikasinya: entropy dan informasi, kompresi data, komunikasi dengan munculnya derau, kapasitas, pengkodean pada kanal, pemisahan kanal sumber, probabilitas serta penalaran";
		$matkul_ti->dosen()->attach($dosencan->nip);
		$matkul_ti->prasyarat()->attach($matkul_statprob->nip);
		$matkul_ti->prasyarat()->attach($matkul_matdas2->nip);
		$matkul_ti->save();
		
		$matkul_tk = new MataKuliah;
		$matkul_tk->kodemk = "IKO32257";
		$matkul_tk->nama = "Teknik Kompilator";
		$matkul_tk->singkatan_1 = "TK";
		$matkul_tk->sks = 4;
		$matkul_tk->semester = 5;
		$matkul_tk->jenis = MataKuliah::PEMINATAN;
		$matkul_tk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tk->deskripsi ="Mata kuliah ini membahas beberapa teknik pembuatan kompilator untuk sebuah bahasa pemrograman yang didefinisikan oleh tata bahasa tertentu. Teknik-teknik ini akan dibahas sesuai dengan tahapan pemrosesan sebuah kompilator, yaitu pembacaan kode sumber, analisis tata bahasa, serta pembentukan kode. Topik-topik yang dibahas antara lain analisis leksikal, tabel simbol, parsing, syntax-directed translation, type checking, target code generation, optimasi kode, dst. Mahasiswa akan dilatih dengan tugas perancangan kompilator sederhana";
		$matkul_tk->dosen()->attach($dosenherus->nip);
		$matkul_tk->prasyarat()->attach($matkul_sda->nip);
		$matkul_tk->prasyarat()->attach($matkul_tba->nip);
		$matkul_tk->save();
		
		$matkul_cis = new MataKuliah;
		$matkul_cis->kodemk = "IKO32453";
		$matkul_cis->nama = "Kriptografi & Keamanan Informasi";
		$matkul_cis->singkatan_1 = "CIS";
		$matkul_cis->singkatan_2 = "Kripto";
		$matkul_cis->sks = 4;
		$matkul_cis->semester = 5;
		$matkul_cis->jenis = MataKuliah::PEMINATAN;
		$matkul_cis->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_cis->deskripsi ="Mata kuliah ini membahas kriptografi (dari pendekatan klasik sampai teknik modern) dan keamanan informasi yang meliputi berbagai aspek seperti penerapan teknik kriptografi dan sifat-sifat keamanan. Materi yang dibahas antara lain teknik enkripsi klasik, block cipher dan DES, finite fields,AES, enkripsi simetris, public key cryptography dan RSA, otentikasi pesan, tandatangan dijital serta protokol otentikasi";
		$matkul_cis->dosen()->attach($dosenstef->nip);
		$matkul_cis->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_cis->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_cis->prasyarat()->attach($matkul_jarkom->nip);
		$matkul_cis->prasyarat()->attach($matkul_statprob->nip);
		$matkul_cis->save();
		
		$matkul_law = new MataKuliah;
		$matkul_law->kodemk = "IKO32751";
		$matkul_law->nama = "Layanan & Aplikasi Web";
		$matkul_law->singkatan_1 = "LAW";
		$matkul_law->sks = 3;
		$matkul_law->semester = 5;
		$matkul_law->jenis = MataKuliah::PEMINATAN;
		$matkul_law->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_law->deskripsi ="Mata kuliah ini membahas pengembangan aplikasi dan layanan perangkat lunak yang menggunakan teknologi web terkini. Topik-topik yang dibahas meliputi: review singkat mengenai standar-standar HTML dan XML, teknologi web service berbasis Servlet, Tomcat, JSP, isu teknis seperti cookies & session, SQL, JDBC, DAOs, JavaBeans & BeanFactories, paradigma MVC (Model View Controller), JSP Standard Tag Library, Security (Including SSL), Web Service (SOAP/WSDL/UDDI), Frameworks, Internationalization, Scalability & Performance Issues";
		$matkul_law->dosen()->attach($dosenbayu->nip);
		$matkul_law->prasyarat()->attach($matkul_jarkom->nip);
		$matkul_law->prasyarat()->attach($matkul_ppw->nip);
		$matkul_law->save();
		
		$matkul_sp = new MataKuliah;
		$matkul_sp->kodemk = "IKO41151";
		$matkul_sp->nama = "Simulasi & Pemodelan";
		$matkul_sp->singkatan_1 = "SP";
		$matkul_sp->sks = 3;
		$matkul_sp->semester = 5;
		$matkul_sp->jenis = MataKuliah::PEMINATAN;
		$matkul_sp->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sp->deskripsi ="Mata kuliah ini memperkenalkan dasar-dasar pemodelan sistem menggunakan simulasi komputer dan teknik matematik. Beberapa studi kasus akan dijabarkan baik dalam perkuliahan maupun dalam tutorial. Aplikasi yang didiskusikan meliputi cakupan yang luas, namun penekanan akan diberikan pada analisa sistem komputer dan komunikasi menggunakan beberapa paradigma permodelan seperti, simulasi, teori antrian, stochastic process algebra dan stochastic petrinets";
		$matkul_sp->dosen()->attach($dosen->nip);
		$matkul_sp->prasyarat()->attach($matkul_statprob->nip);
		$matkul_sp->prasyarat()->attach($matkul_jarkom->nip);
		$matkul_sp->save();
		
		$matkul_psd2 = new MataKuliah;
		$matkul_psd2->kodemk = "IKO41552";
		$matkul_psd2->nama = "Pengolahan Sinyal Dijital";
		$matkul_psd2->singkatan_1 = "Pengsid";
		$matkul_psd2->sks = 3;
		$matkul_psd2->semester = 5;
		$matkul_psd2->jenis = MataKuliah::PEMINATAN;
		$matkul_psd2->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_psd2->deskripsi ="Mata kuliah ini akan memfokuskan pada konsep pemrosesan sinyal dijital (digital signal processing, atau DSP), baik yang berupa audio, video atau bentuk sinyal lain yang dihasilkan dari sensor/transducer, serta bagaimana pemrosesan tersebut dapat mengolah data sinyal menjadi lebih bermanfaat untuk mendukung berbagai aplikasi. Beberapa dasar teori akan diperkenalkan seperti konversi ADC/DAC, probabilitas dan derau, sistem linier, serta operasi konvolusi, lalu membahas pemrosesan seperti transformasi Fourier, berbagai jenis filter dijital, pemampatan data, serta aspek implementasi pada mikrokontroler";
		$matkul_psd2->dosen()->attach($dosenwisnu->nip);
		$matkul_psd2->prasyarat()->attach($matkul_statprob->nip);
		$matkul_psd2->prasyarat()->attach($matkul_pok->nip);
		$matkul_psd2->save();
		
		$matkul_st = new MataKuliah;
		$matkul_st->kodemk = "IKO41554";
		$matkul_st->nama = "Sistem Terdistribusi";
		$matkul_st->singkatan_1 = "Sisdis";
		$matkul_st->sks = 3;
		$matkul_st->semester = 5;
		$matkul_st->jenis = MataKuliah::PEMINATAN;
		$matkul_st->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_st->deskripsi ="Mata kuliah ini mengeksplorasi isu-isu yang terkait dengan perancangan dan implementasi dari sistem terdistribusi dengan penekanan pada bagaimana shared state antara beberapa proses dalam sebuah sistem";
		$matkul_st->dosen()->attach($dosengladhi->nip);
		$matkul_st->prasyarat()->attach($matkul_jarkom->nip);
		$matkul_st->save();
		
		$matkul_ubi = new MataKuliah;
		$matkul_ubi->kodemk = "IKO41557";
		$matkul_ubi->nama = "Ubiquitous & Net-centric Computing";
		$matkul_ubi->singkatan_1 = "Ubiquitous";
		$matkul_ubi->sks = 3;
		$matkul_ubi->semester = 5;
		$matkul_ubi->jenis = MataKuliah::PEMINATAN;
		$matkul_ubi->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ubi->deskripsi ="Komputasi ubiquitous, atau disebut juga sebagai komputasi pervasive, merupakan visi sistem komputer yang merasuk ke dalam dunia fisik dan lingkungan sosial manusia. Salah satu tujuannya adalah untuk membuat komputer yang dapat dioperasikan dalam lingkungan fisik yang beragam, dan membangun teknologi yang sadar tentang lingkungan sekitarnya dan dapat diakses dan digunakan oleh manusia dan lingkungan sosial secara harmonis. Pada komputasi ubiquitous, informasi dapat diolah oleh obyek dan kegiatan sehari-hari";
		$matkul_ubi->dosen()->attach($dosenbob->nip);
		$matkul_ubi->prasyarat()->attach($matkul_jarkom->nip);
		$matkul_ubi->save();
		
		$matkul_robotik = new MataKuliah;
		$matkul_robotik->kodemk = "IKO42360";
		$matkul_robotik->nama = "Robotika";
		$matkul_robotik->singkatan_1 = "Robotik";
		$matkul_robotik->sks = 3;
		$matkul_robotik->semester = 5;
		$matkul_robotik->jenis = MataKuliah::PEMINATAN;
		$matkul_robotik->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_robotik->deskripsi ="Mata kuliah ini memberikan pengantar tentang implementasi robot dari sudut pandang ilmu komputer. Topik yang dibahas meliputi gerakan dengan roda ataupun kaki (locomotion), penginderaan dan persepsi dengan sensor, penanganan ketidakpastian pada persepsi, representasi dan pemodelan lokasi secara probabilistik, Markov localization, Kalman filter. Pada mata kuliah ini mahasiswa akan menggunakan perangkat dan peralatan seperti software Open Dynamic Engine serta robot Lego MindStorm";
		$matkul_robotik->dosen()->attach($dosenwisnu->nip);
		$matkul_robotik->prasyarat()->attach($matkul_pok->nip);
		$matkul_robotik->prasyarat()->attach($matkul_sc->nip);
		$matkul_robotik->save();
		
		$matkul_rsd = new MataKuliah;
		$matkul_rsd->kodemk = "IKO42553";
		$matkul_rsd->nama = "Rancangan Sistem Dijital";
		$matkul_rsd->singkatan_1 = "RSD";
		$matkul_rsd->sks = 3;
		$matkul_rsd->semester = 5;
		$matkul_rsd->jenis = MataKuliah::PEMINATAN;
		$matkul_rsd->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_rsd->deskripsi ="Mata kuliah ini ditujukan untuk memahami teknik rancangan sistem dijital menggunakan bahasa pemrograman tingkat tinggi (High Level Language). Bahasa yang digunakan adalah VHDL (VHSIC Hardware Description Language). Materi kuliah yang diberikan mencakup pemahaman elemen-elemen VHDL, teknik pemodelan perilaku (behavior), pemodelan dataflow dan pemodelan secara struktural. Elemen-elemen pemrograman yang dibahas termasuk konsep konfigurasi, subprogram, overloading, package dan library, termasuk contoh-contoh pemodelan rangkaian dijital yang umum dijumpai pada sistem dijital. Sarana pendukung laboratorium adalah seperangkat board FPGA dan development tools dari Xilinx";
		$matkul_rsd->dosen()->attach($dosenpetrus->nip);
		$matkul_rsd->dosen()->attach($dosenwisnu->nip);
		$matkul_rsd->prasyarat()->attach($matkul_pok->nip);
		$matkul_rsd->save();
		
		$matkul_tka = new MataKuliah;
		$matkul_tka->kodemk = "IKO42555";
		$matkul_tka->nama = "Topik Khusus Arsitektur & Infrastuktur";
		$matkul_tka->singkatan_1 = "tkai";
		$matkul_tka->sks = 3;
		$matkul_tka->semester = 4;
		$matkul_tka->jenis = MataKuliah::PEMINATAN;
		$matkul_tka->prodi = MataKuliah::FAKULTAS;
		$matkul_tka->deskripsi =" Mata kuliah ini akan membahas perkembangan riset dan teknologi terkini pada bidang arsitektur dan infrastruktur komputer. Isi materinya akan disesuaikan dengan isu-isu terkini pada saat mata kuliah ditawarkan";
		$matkul_tka->dosen()->attach($dosen->nip);
		$matkul_tka->save();
		
		$matkul_ta = new MataKuliah;
		$matkul_ta->kodemk = "IKI40999";
		$matkul_ta->nama = "Tugas Akhir";
		$matkul_ta->singkatan_1 = "TA";
		$matkul_ta->sks = 6;
		$matkul_ta->semester = 8;
		$matkul_ta->jenis = MataKuliah::PEMINATAN;
		$matkul_ta->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_ta->deskripsi ="Mata kuliah ini melatih kemampuan mahasiswa untuk mengembangkan bidang ilmu/teknologi atau melanjutkan studinya. Pada mata kuliah ini, mahasiswa akan mengerjakan suatu topik penelitian secara mandiri di bawah bimbingan seorang dosen. Topik penelitian yang dikerjakan harus terkait dengan kegiatan salah satu lab riset di Fasilkom UI. Mahasiswa harus menuliskan laporan ilmiah mengenai pekerjaannya dan mempertahankannya pada Sidang Tugas Akhir";
		$matkul_ta->save();
		
		$matkul_sister = new MataKuliah;
		$matkul_sister->kodemk = "IKO31250";
		$matkul_sister->nama = "Sistem Interaksi";
		$matkul_sister->singkatan_1 = "Sister";
		$matkul_sister->sks = 4;
		$matkul_sister->semester = 5;
		$matkul_sister->jenis = MataKuliah::PEMINATAN;
		$matkul_sister->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sister->deskripsi ="Mata kuliah akan membekali mahasiswa dengan pengetahuan mengenai perancangan antarmuka untuk perangkat lunak. Materi yang dibahas meliputi rancangan, implementasi, dan evaluasi antarmuka dengan pengguna perangkat lunak. Topik-topik spesifiknya adalah sistem pengolahan informasi pada manusia, model interaksi manusia komputer, proses perancangan, menu interaksi, bahasa perintah, antarmuka grafis, gaya interaksi, manipulasi langsung, alat bantu, manual, bantuan, serta tutorial";
		$matkul_sister->dosen()->attach($dosenharry->nip);
		$matkul_sister->dosen()->attach($dosenhadaiq->nip);
		$matkul_sister->dosen()->attach($dosendadan->nip);
		$matkul_sister->prasyarat()->attach($matkul_ppw->nip);
		$matkul_sister->save();
		
		$matkul_banjut = new MataKuliah;
		$matkul_banjut->kodemk = "IKO31754";
		$matkul_banjut->nama = "Basis Data Lanjut";
		$matkul_banjut->singkatan_1 = "Banjut";
		$matkul_banjut->sks = 3;
		$matkul_banjut->semester = 5;
		$matkul_banjut->jenis = MataKuliah::PEMINATAN;
		$matkul_banjut->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_banjut->deskripsi ="Mata kuliah ini merupakan kelanjutan dari mata kuliah Basis Data. Mata kuliah ini akan mencakup topik-topik lanjutan terkait dengan implementasi atau pengembangan Sistem Manajemen Basis data (DBMS), antara lain pengorganisasian data secara fisik, monitoring dan tuning kinerja operasional, pemrosesan transaksi, kendali konkurensi, database recovery, pemrosesan dan optimisasi kueri";
		$matkul_banjut->dosen()->attach($dosennizar->nip);
		$matkul_banjut->dosen()->attach($dosenyova->nip);
		$matkul_banjut->prasyarat()->attach($matkul_basdat->nip);
		$matkul_banjut->save();
		
		
		$matkul_grafkom = new MataKuliah;
		$matkul_grafkom->kodemk = "IKO32450";
		$matkul_grafkom->nama = "Grafika Komputer";
		$matkul_grafkom->singkatan_1 = "Grafkom";
		$matkul_grafkom->sks = 3;
		$matkul_grafkom->semester = 5;
		$matkul_grafkom->jenis = MataKuliah::PEMINATAN;
		$matkul_grafkom->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_grafkom->deskripsi ="Mata kuliah ini meliputi penjelasan sistem grafika, algoritma penanganan elemen-elemen dasar grafika, sistem 2D dan 3D, model iluminasi, model obyek, kurva dan permukaan. Peserta kuliah melatih pemrograman melalui tugas menggunaka bahasa OpenGL, baik secara perorangan maupun secara kelompok";
		$matkul_grafkom->dosen()->attach($dosendadan->nip);
		$matkul_grafkom->prasyarat()->attach($matkul_alin->nip);
		$matkul_grafkom->prasyarat()->attach($matkul_sda->nip);
		$matkul_grafkom->save();
		
		$matkul_gamedev = new MataKuliah;
		$matkul_gamedev->kodemk = "IKO41251";
		$matkul_gamedev->nama = "Game Development";
		$matkul_gamedev->singkatan_1 = "Gamedev";
		$matkul_gamedev->sks = 3;
		$matkul_gamedev->semester = 5;
		$matkul_gamedev->jenis = MataKuliah::PEMINATAN;
		$matkul_gamedev->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_gamedev->deskripsi ="Mata kuliah ini membahas perancangan dan implementasi permainan komputer (computer games) dari berbagai konsep dan isu-isu terkini yang menantang. Perkuliahan akan diakhir dengan proyek kelompok yang difokuskan pada perancangan dan pengembangan sebuah game yang inovatif";
		$matkul_gamedev->dosen()->attach($dosenruli->nip);
		$matkul_grafkom->prasyarat()->attach($matkul_sda->nip);
		$matkul_gamedev->save();
		
		$matkul_pemlog = new MataKuliah;
		$matkul_pemlog->kodemk = "IKO41253";
		$matkul_pemlog->nama = "Pemrograman Logika";
		$matkul_pemlog->singkatan_1 = "Pemlog";
		$matkul_pemlog->sks = 4;
		$matkul_pemlog->semester = 5;
		$matkul_pemlog->jenis = MataKuliah::PEMINATAN;
		$matkul_pemlog->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pemlog->deskripsi ="Tujuan mata kuliah ini adalah untuk memperkenalkan prinsip-prinsip pemrograman berbasis logika menggunakan bahasa pemrograman Prolog. Konsep-konsep dasar seperti unification dan resolution juga akan dibahas. Aplikasi dan penerapan aspek-aspek ini akan didemonstrasikan melalui serangkaian studi kasus";
		$matkul_pemlog->dosen()->attach($dosenade->nip);
		$matkul_pemlog->dosen()->attach($dosenruli->nip);
		$matkul_pemlog->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_pemlog->prasyarat()->attach($matkul_ddp->nip);
		$matkul_pemlog->save();
		
		$matkul_pmpl = new MataKuliah;
		$matkul_pmpl->kodemk = "IKO41254";
		$matkul_pmpl->nama = "Penjaminan Mutu Perangkat Lunak";
		$matkul_pmpl->singkatan_1 = "PMPL";
		$matkul_pmpl->sks = 4;
		$matkul_pmpl->semester = 5;
		$matkul_pmpl->jenis = MataKuliah::PEMINATAN;
		$matkul_pmpl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pmpl->deskripsi ="Mata kuliah ini meliputi topik-topik yang terkait dengan penjaminan mutu perangkat lunak. Mata kuliah ini mempelajari penggabungan berbagai teknik dan komponen PMPL, seperti: kegiatan PMPL yang biasanya dilakukan pihak eksternal, penerapan aktivitas PMPL terhadap penjadwalan proyek dan kendali anggaran, isu-isu implementasi PMPL, pertimbangan manajemen risiko PMPL, dan biaya yang terkait dengan PMPL. Mata kuliah ini juga membahas isu mutu sepanjang proses pengembangan perangkat lunak, termasuk rancangan, implementasi, pengujian, dan pengoperasian. Isu-isu terkait dengan kegiatan pra-proyek dan pasca-proyek juga akan dibahas. Standar mutu yang relevan juga akan dibahas";
		$matkul_pmpl->dosen()->attach($dosenade->nip);
		$matkul_pmpl->prasyarat()->attach($matkul_rpl->nip);
		$matkul_pmpl->save();
		
		$matkul_sw = new MataKuliah;
		$matkul_sw->kodemk = "IKO41361";
		$matkul_sw->nama = "Semantic Web";
		$matkul_sw->singkatan_1 = "Semantic";
		$matkul_sw->singkatan_1 = "Jejaring Semantic";
		$matkul_sw->sks = 3;
		$matkul_sw->semester = 5;
		$matkul_sw->jenis = MataKuliah::PEMINATAN;
		$matkul_sw->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sw->deskripsi ="Mata kuliah ini memperkenalkan konsep dasar yang terkait dengan Semantic Web, yaitu jaringan yang dilengkapi dengan metode dan teknik untuk menambahkan makna atau arti terhadap data yang tersedia, sehingga dapat diolah secara otomatis oleh sistem yang cerdas";
		$matkul_sw->dosen()->attach($dosenwcw->nip);
		$matkul_sw->prasyarat()->attach($matkul_sc->nip);
		$matkul_sw->prasyarat()->attach($matkul_ppw->nip);
		$matkul_sw->save();
		
		$matkul_pbk = new MataKuliah;
		$matkul_pbk->kodemk = "IKO41853";
		$matkul_pbk->nama = "Pengajaran Berbantuan Komputer";
		$matkul_pbk->singkatan_1 = "PBK";
		$matkul_pbk->sks = 3;
		$matkul_pbk->semester = 5;
		$matkul_pbk->jenis = MataKuliah::PEMINATAN;
		$matkul_pbk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pbk->deskripsi ="Mata kuliah ini membahas dasar-dasar pengajaran dan pembelajaran menggunakan teknologi komputer. Topik yang dibahas meliputi prinsip pembelajaran dasar, proses pembelajaran dan ingatan pada manusia, teori pembelajaran (kognitif, behaviourism, constructivism), pembelajaran tatap muka vs. jarak jauh, konten multimedia, evaluasi berbagai sistem manajemen pembelajaran (learning management system, atau LMS). Peserta diharapkan memiliki ketrampilan pemrograman yang cukup, terutama untuk melakukan scripting dalam mengevaluasi berbagai LMS";
		$matkul_pbk->dosen()->attach($dosenharry->nip);
		$matkul_pbk->prasyarat()->attach($matkul_ppw->nip);
		$matkul_pbk->save();
		
		$matkul_metfor = new MataKuliah;
		$matkul_metfor->kodemk = "IKO42252";
		$matkul_metfor->nama = "Metode Formal";
		$matkul_metfor->singkatan_1 = "Metfor";
		$matkul_metfor->sks = 4;
		$matkul_metfor->semester = 5;
		$matkul_metfor->jenis = MataKuliah::PEMINATAN;
		$matkul_metfor->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_metfor->deskripsi ="Mata kuliah ini ditujukan untuk memenuhi kebutuhan terhadap kerangka pendekatan formal dalam rangka pembuatan perangkat lunak kritis yang bermutu tinggi. Kuliah ini memberikan landasan yang kokoh berbasis logika, perkenalan terhadap beberapa kerangka logika yang digunakan dalam pemodelan dan penalaran sistem komputer. Hal ini membutuhkan pelatihan formal yang memungkinkan peserta kuliah untuk memiliki ketrampilan dalam menggunakan kerangka yang ada";
		$matkul_metfor->dosen()->attach($dosenbela->nip);
		$matkul_metfor->dosen()->attach($dosenstef->nip);
		$matkul_metfor->prasyarat()->attach($matkul_matdis1->nip);
		$matkul_metfor->prasyarat()->attach($matkul_matdis2->nip);
		$matkul_metfor->prasyarat()->attach($matkul_sda->nip);
		$matkul_metfor->save();
		
		$matkul_tktpl = new MataKuliah;
		$matkul_tktpl->kodemk = "IKO42256";
		$matkul_tktpl->nama = "Topik Khusus Teknologi Perangkat Lunak";
		$matkul_tktpl->singkatan_1 = "TKTPL";
		$matkul_tktpl->sks = 3;
		$matkul_tktpl->semester = 5;
		$matkul_tktpl->jenis = MataKuliah::PEMINATAN;
		$matkul_tktpl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tktpl->deskripsi ="Mata kuliah ini akan membahas perkembangan riset dan teknologi terkini pada bidang teknologi perangkat lunak. Isi materinya akan disesuaikan dengan isu-isu terkini pada saat mata kuliah ditawarkan";
		$matkul_tktpl->dosen()->attach($dosendenny->nip);
		$matkul_tktpl->save();
		
		$matkul_dm = new MataKuliah;
		$matkul_dm->kodemk = "IKO42351";
		$matkul_dm->nama = "Data Mining";
		$matkul_dm->singkatan_1 = "DM";
		$matkul_dm->sks = 3;
		$matkul_dm->semester = 5;
		$matkul_dm->jenis = MataKuliah::PEMINATAN;
		$matkul_dm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_dm->deskripsi ="Mata kuliah ini memperkenalkan konsep-konsep dasar serta masalah, metode, serta teknik dalam penambangan data";
		$matkul_dm->dosen()->attach($dosenivan->nip);
		$matkul_dm->prasyarat()->attach($matkul_basdat->nip);
		$matkul_dm->prasyarat()->attach($matkul_sc->nip);
		$matkul_dm->save();
		
		$matkul_pengcit = new MataKuliah;
		$matkul_pengcit->kodemk = "IKO31355";
		$matkul_pengcit->nama = "Pengolahan Citra";
		$matkul_pengcit->singkatan_1 = "Pengcit";
		$matkul_pengcit->sks = 3;
		$matkul_pengcit->semester = 5;
		$matkul_pengcit->jenis = MataKuliah::PEMINATAN;
		$matkul_pengcit->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pengcit->deskripsi ="Mata kuliah ini membahas metodologi pengolahan data berupa citra atau image 2D, serta konsep dasar pengenalan pola (pattern recognition), yang dapat diaplikasikan pada berbagai bidang seperti penginderaan jauh, diagnosa medis, pengolahan dokumen, robotika, dll. Topik yang akan dibahas antara lain konsep dasar citra dijital, transformasi citra, peningkatan mutu dan restorasi, pemampatan, segmentasi, serta klasifikasi citra. Mahasiswa akan dilatih dengan tugas pemrograman menggunakan bahasa C++, Java, atau Matlab, baik secara individu maupun kelompok";
		$matkul_pengcit->dosen()->attach($dosenani->nip);
		$matkul_pengcit->prasyarat()->attach($matkul_alin->nip);
		$matkul_pengcit->prasyarat()->attach($matkul_sda->nip);
		$matkul_pengcit->prasyarat()->attach($matkul_matdas2->nip);
		$matkul_pengcit->save();
		
		$matkul_pm = new MataKuliah;
		$matkul_pm->kodemk = "IKO32353";
		$matkul_pm->nama = "Pemelajaran Mesin";
		$matkul_pm->singkatan_1 = "PM";
		$matkul_pm->sks = 3;
		$matkul_pm->semester = 5;
		$matkul_pm->jenis = MataKuliah::PEMINATAN;
		$matkul_pm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pm->deskripsi ="Kuliah ini membahas dasar-dasar pemelajaran mesin (machine learning), yaitu teknik pengembangan perangkat lunak yang dapat menghasilkan model untuk menjelaskan suatu fenomena kompleks dengan cara mengamati sejumlah data. Metode-metode yang diajarkan berbasis pendekatan statistik untuk pengenalan pola, antara lain perceptron, support vector machines, hidden Markov models, expectation maximization, dan lain-lain";
		$matkul_pm->dosen()->attach($dosenito->nip);
		$matkul_pm->prasyarat()->attach($matkul_sc->nip);
		$matkul_pm->save();
		
		$matkul_pbm = new MataKuliah;
		$matkul_pbm->kodemk = "IKO32354";
		$matkul_pbm->nama = "Pengolahan Bahasa Manusia";
		$matkul_pbm->singkatan_1 = "PBM";
		$matkul_pbm->sks = 3;
		$matkul_pbm->semester = 5;
		$matkul_pbm->jenis = MataKuliah::PEMINATAN;
		$matkul_pbm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pbm->deskripsi ="Mata kuliah ini mempelajari berbagai teknik untuk membangun perangkat lunak yang mengolah bahasa manusia. Secara umum, struktur materi kuliah ini diatur sesuai dengan tingkat representasi bahasa, mulai dari (i) morfologi: finite state, two-level morphology, part of speech tagging, (ii) sintaksis: context free grammars, feature structure unification, probabilistic parsing, dan (iii) semantik: rule-based semantic analysis. Kuliah ini juga membahas analisa wacana (discourse) secara singkat. Meskipun kuliah ini lebih banyak fokus pada pendekatan simbolik yang bersifat top-down, beberapa metode statistik yang mutakhir (corpus linguistics) juga dibahas. Akan ada beberapa tugas yang melatih peserta kuliah untuk memahami pemodelan bahasa, di mana peserta akan membangun sebuah sistem perangkat lunak yang mampu mengolah masukan berupa bahasa manusia";
		$matkul_pbm->dosen()->attach($dosenruli->nip);
		$matkul_pbm->prasyarat()->attach($matkul_sc->nip);
		$matkul_pbm->prasyarat()->attach($matkul_tba->nip);
		$matkul_pbm->save();
		
		$matkul_pengmul = new MataKuliah;
		$matkul_pengmul->kodemk = "IKO41356";
		$matkul_pengmul->nama = "Pengolahan Multimedia";
		$matkul_pengmul->singkatan_1 = "Pengmul";
		$matkul_pengmul->sks = 3;
		$matkul_pengmul->semester = 5;
		$matkul_pengmul->jenis = MataKuliah::PEMINATAN;
		$matkul_pengmul->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pengmul->deskripsi ="Mata kuliah ini mengajarkan prinsip-prinsip representasi, transmisi, serta authoring dan anotasi terhadap data multimedia, baik teks, audio, citra, maupun video. Mata kuliah ini juga memberikan pemahaman teoritis maupun praktis mengenai standar-standar terkini seperti XML, PDF, MP3, MIDI, JPEG, SVG, AVI, OGM, dan seterusnya";
		$matkul_pengmul->prasyarat()->attach($matkul_sda->nip);
		$matkul_pengmul->save();
		
		$matkul_perin = new MataKuliah;
		$matkul_perin->kodemk = "IKO41357";
		$matkul_perin->nama = "Perolehan Informasi";
		$matkul_perin->singkatan_1 = "Perin";
		$matkul_perin->sks = 3;
		$matkul_perin->semester = 5;
		$matkul_perin->jenis = MataKuliah::PEMINATAN;
		$matkul_perin->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_perin->deskripsi ="Mata kuliah ini membahas konsep-konsep dasar perolehan informasi dalam mengorganisir dan memperoleh kembali data teks dan multimedia";
		$matkul_perin->dosen()->attach($dosenmirna->nip);
		$matkul_perin->prasyarat()->attach($matkul_sda->nip);
		$matkul_perin->save();
		
		$matkul_gm = new MataKuliah;
		$matkul_gm->kodemk = "IKO41452";
		$matkul_gm->nama = "Geometric Modelling";
		$matkul_gm->singkatan_1 = "Pemodelan Geometris";
		$matkul_gm->singkatan_1 = "GeoModel";
		$matkul_gm->sks = 4;
		$matkul_gm->semester = 5;
		$matkul_gm->jenis = MataKuliah::PEMINATAN;
		$matkul_gm->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_gm->deskripsi ="Mata kuliah ini mengajarkan konsep-konsep geometris serta alat bantu yang dibutuhkan untuk mengatasi masalah yang muncul dalam perancangan geometris berbasis komputer (Computer-Aided Geometric Design, atau CAGD), grafika komputer, computer vision, dan motion planning. Mata kuliah ini menangani obyek-obyek seperti kurva dan permukaan dari sudut pandang algoritmis";
		$matkul_gm->prasyarat()->attach($matkul_grafkom->nip);
		$matkul_gm->save();
		
		$matkul_sig = new MataKuliah;
		$matkul_sig->kodemk = "IKO41854";
		$matkul_sig->nama = "Sistem Informasi Geografis";
		$matkul_sig->singkatan_1 = "SIG";
		$matkul_sig->sks = 3;
		$matkul_sig->semester = 5;
		$matkul_sig->jenis = MataKuliah::PEMINATAN;
		$matkul_sig->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_sig->deskripsi ="Mata kuliah ini membahas konsep, teori, serta teknik-teknik untuk mengakuisisi, merepresentasikan, mengolah, dan memanfaatkan data geospasial seperti peta (map). Topik yang dibahas meliputi data vektor vs. raster, representasi dan pengorganisasian data geospasial serta peta, kualitas dan standar data geospasial, integrasi GIS dan remote sensing, implementasi GIS";
		$matkul_sig->dosen()->attach($dosendadan->nip);
		$matkul_sig->prasyarat()->attach($matkul_basdat->nip);
		$matkul_sig->prasyarat()->attach($matkul_rpl->nip);
		$matkul_sig->save();
		
		$matkul_tkpim = new MataKuliah;
		$matkul_tkpim->kodemk = "IKO42359";
		$matkul_tkpim->nama = "Topik Khusus Pengolahan Informasi Multimedia";
		$matkul_tkpim->singkatan_1 = "TKPI";
		$matkul_tkpim->sks = 3;
		$matkul_tkpim->semester = 5;
		$matkul_tkpim->jenis = MataKuliah::PEMINATAN;
		$matkul_tkpim->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkpim->deskripsi ="Mata kuliah ini akan membahas perkembangan riset dan teknologi terkini pada bidang pengolahan informasi multimedia. Isi materinya akan disesuaikan dengan isu-isu terkini pada saat mata kuliah ditawarkan";
		$matkul_tkpim->save();
		
		$matkul_cg = new MataKuliah;
		$matkul_cg->kodemk = "IKO42451";
		$matkul_cg->nama = "Computational Geometry";
		$matkul_cg->singkatan_1 = "Computational Geometry";
		$matkul_cg->singkatan_1 = "CG";
		$matkul_cg->sks = 4;
		$matkul_cg->semester = 5
		$matkul_cg->jenis = MataKuliah::PEMINATAN;
		$matkul_cg->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_cg->deskripsi ="Mata kuliah ini mengajarkan solusi-solusi algoritma modern terhadap berbagai persoalan geometri yang muncul pada aplikasi-aplikasi grafika komputer, sistem informasi geografis, dan robotika. Beberapa permasalahan, teknik, serta algoritma yang dibahas antara lain convex hull, intersection, triangulation, diagram Voronoi, Painter's algorithm, serta robot motion planning";
		$matkul_cg->prasyarat()->attach($matkul_sda->nip);
		$matkul_cg->save();
		
		$matkul_bio = new MataKuliah;
		$matkul_bio->kodemk = "IKO31350";
		$matkul_bio->nama = "Bioinformatika";
		$matkul_bio->singkatan_1 = "BioInfor";
		$matkul_bio->sks = 3;
		$matkul_bio->semester = 5;
		$matkul_bio->jenis = MataKuliah::PEMINATAN;
		$matkul_bio->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_bio->deskripsi ="Mata kuliah ini memperkenalkan peserta kuliah terhadap sumber daya yang dibutuhkan untuk menerapkan berbagai pendekatan kecerdasan buatan untuk menghasilkan informasi pada aplikasi biologi seperti: fungsi gen, struktur protein dan evolusi molekular. Peserta akan diajarkan metode untuk penambangan serta analisa data untuk melakukan pencocokan sekuen, pencarian kemiripan, analisa filogenetik, pencarian gen serta prediksi struktur protein";
		$matkul_bio->dosen()->attach($dosenito->nip);
		$matkul_bio->prasyarat()->attach($matkul_sda->nip);
		$matkul_bio->prasyarat()->attach($matkul_statprob->nip);
		$matkul_bio->save();
		
		$matkul_pd = new MataKuliah;
		$matkul_pd->kodemk = "IKO32152";
		$matkul_pd->nama = "Persamaan Diferensial";
		$matkul_pd->singkatan_1 = "PD";
		$matkul_pd->sks = 3;
		$matkul_pd->semester = 5;
		$matkul_pd->jenis = MataKuliah::PEMINATAN;
		$matkul_pd->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_pd->deskripsi ="Mata kuliah ini dirancang untuk memberikan pemahaman dan pengetahuan mengenai berbagai jenis persamaan diferensial yang ada, metode penyelesaiannya, serta penerapannya dalam berbagai bidang. Mata kuliah ini menitikberatkan pemodelan matematis berbagai jenis sistem fisika dengan menggunakan beragam persamaan diferensial";
		$matkul_pd->prasyarat()->attach($matkul_alin->nip);
		$matkul_pd->prasyarat()->attach($matkul_matdas2->nip);
		$matkul_pd->save();
		
		$matkul_asn = new MataKuliah;
		$matkul_asn->kodemk = "IKO41153";
		$matkul_asn->nama = "Aproksimasi & Sistem Nonlinier";
		$matkul_asn->singkatan_1 = "Jarkom";
		$matkul_asn->sks = 3;
		$matkul_asn->semester = 5;
		$matkul_asn->jenis = MataKuliah::PEMINATAN;
		$matkul_asn->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_asn->deskripsi ="Mata kuliah ini memperkenalkan analisis sebuah rancangan sistem nonliniar. Topik yang dipelajari meliputi: linearization, equilibrium points, limit cycles, chaotic attractors, stability, Liapunov’s methods, describing functions, Popov and circle criteria, contraction mappings, exact linearization, variable structure, simulation";
		$matkul_asn->prasyarat()->attach($matkul_anum->nip);
		$matkul_asn->save();
		
		$matkul_alinn = new MataKuliah;
		$matkul_alinn->kodemk = "IKO41154";
		$matkulalinn->nama = "Aljabar Linier Numerik";
		$matkul_alinn->singkatan_1 = "Alinum";
		$matkul_alinn->sks = 3;
		$matkul_alinn->semester = 5;
		$matkul_alinn->jenis = MataKuliah::PEMINATAN;
		$matkul_alinn->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_alinn->deskripsi ="Mata kuliah ini memberikan pemelajaran terkait komputasi pada aljabar linear. Fokus perkuliah pada komputasi matriks, terutama pada aspek sensitivity dan numerical stability, square system, least squares problems, eigen problems, SVD serta pengaplikasiannya pada berbagai isu komputasional";
		$matkul_alinn->dosen()->attach($dosendina->nip);
		$matkul_alinn->dosen()->attach($dosenstef->nip);
		$matkul_alinn->prasyarat()->attach($matkul_anum->nip);
		$matkul_alinn->save();
			
		$matkul_komnak = new MataKuliah;
		$matkul_komnak->kodemk = "IKO41352";
		$matkul_komnak->nama = "Komputasi Lunak";
		$matkul_komnak->singkatan_1 = "Komnak";
		$matkul_komnak->singkatan_1 = "KL";
		$matkul_komnak->sks = 3;
		$matkul_komnak->semester = 5;
		$matkul_komnak->jenis = MataKuliah::PEMINATAN;
		$matkul_komnak->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_komnak->deskripsi ="Kuliah ini membahas bagaimana menangani masalah impresisi dan ketidakpastian dengan pendekatan fuzzy. Topik yang dibahas meliputi konsep ketidakpastian, logika fuzzy vs. klasik, bilangan dan himpunan fuzzy serta operasinya, graf dan relasi fuzzy, fungsi dan inferensi fuzzy, defuzzifikasi, dan lain-lain";
		$matkul_komnak->dosen()->attach($dosenrahmad->nip);
		$matkul_komnak->prasyarat()->attach($matkul_sc->nip);
		$matkul_komnak->save();
		
		$matkul_lk = new MataKuliah;
		$matkul_lk->kodemk = "IKO41454";
		$matkul_lk->nama = "Logika Komputasional";
		$matkul_lk->singkatan_1 = "Logika Komputasional";
		$matkul_lk->sks = 3;
		$matkul_lk->semester = 4;
		$matkul_lk->jenis = MataKuliah::PEMINATAN;
		$matkul_lk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_lk->deskripsi ="Mata kuliah ini membahas dengan detil logika klasik (logika proposisi serta logika predikat orde pertama) dengan menitikberatkan aspek-aspek sintaks, semantik serta komputasional. Mata kuliah ini juga membahas topik-topik lanjut seperti logika non-klasik dan beberapa aplikasinya, seperti equational logics, modal logics, type theory, higher order logics, dan nonmonotonic logics";
		$matkul_lk->dosen()->attach($dosenstef->nip);
		$matkul_lk->prasyarat()->attach($matkul_sc->nip);
		$matkul_lk->save();
		
		$matkul_tkkk = new MataKuliah;
		$matkul_tkkk->kodemk = "IKO42358";
		$matkul_tkkk->nama = "Topik Khusus Kecerdasan Komputasional";
		$matkul_tkkk->singkatan_1 = "TKKK";
		$matkul_tkkk->sks = 3;
		$matkul_tkkk->semester = 5;
		$matkul_tkkk->jenis = MataKuliah::PEMINATAN;
		$matkul_tkkk->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkkk->deskripsi ="Mata kuliah ini akan membahas perkembangan riset dan teknologi terkini pada bidang kecerdasan komputasional. Isi materinya akan disesuaikan dengan isu-isu terkini pada saat mata kuliah ditawarkan";
		$matkul_tkkk->save();
		
		$matkul_tkl = new MataKuliah;
		$matkul_tkl->kodemk = "IKO61480";
		$matkul_tkl->nama = "Teori Komputasi Lanjut";
		$matkul_tkl->singkatan_1 = "TKL";
		$matkul_tkl->sks = 4;
		$matkul_tkl->semester = 5;
		$matkul_tkl->jenis = MataKuliah::PEMINATAN;
		$matkul_tkl->prodi = MataKuliah::ILMU_KOMPUTER;
		$matkul_tkl->deskripsi ="Mata kuliah ini memberikan pemelajaran terkait komputasi pada aljabar linear. Fokus perkuliah pada komputasi matriks, terutama pada aspek sensitivity dan numerical stability, square system, least squares problems, eigen problems, SVD serta pengaplikasiannya pada berbagai isu komputasional";
		$matkul_tkl->dosen()->attach($dosenstef->nip);
		$matkul_tkl->prasyarat()->attach($matkul_anum->nip);
		$matkul_tkl->save();
			
		//SI
		
		$matkul_ppsi = new MataKuliah;
		$matkul_ppsi->kodemk = "IKS12800";
		$matkul_ppsi->nama = "Prinsip-Prinsip Sistem Informasi";
		$matkul_ppsi->singkatan_1 = "PPSI";
		$matkul_ppsi->sks = 3;
		$matkul_ppsi->semester = 2;
		$matkul_ppsi->jenis = MataKuliah::JURUSAN;
		$matkul_ppsi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ppsi->deskripsi ="Mata kuliah ini membahas mengenai konsep sistem, komponen-komponen sistem dan keterkaitannya; pemodelan proses bisnis: cross functional flow, diagram aktivitas; biaya/nilai dan kualitas informasi; keunggulan kompetitif dan informasi; spesifikasi, desain dan rekayasa sistem Informasi; aplikasi versus perangkat lunak sistem; analisis arus informasi; paket solusi perangkat lunak, kualitas, TQM dan rekayasa ulang; tingkat sistem: strategis, taktis dan operasional, jenis aplikasi komputer, komponen sistem dan keterkaitannya; strategi-strategi sistem informasi; peran informasi dan teknologi informasi, kebutuhan informasi, peran pengguna SI";
		$matkul_ppsi->dosen()->attach($doseniik->nip);
		$matkul_ppsi->dosen()->attach($dosenpuspa->nip);
		$matkul_ppsi->save();
		
		$matkul_adbis = new MataKuliah;
		$matkul_adbis->kodemk = "IKS12600";
		$matkul_adbis->nama = "Administrasi Bisnis";
		$matkul_adbis->singkatan_1 = "Adbis";
		$matkul_adbis->sks = 3;
		$matkul_adbis->semester = 2;
		$matkul_adbis->jenis = MataKuliah::JURUSAN;
		$matkul_adbis->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_adbis->deskripsi ="Mata kuliah ini memperkenalkan kepada mahasiswa dasar pengetahuan bisnis yang memungkinkan siswa untuk mengembangkan kemampuan mereka dalam dunia bisnis";
		$matkul_adbis->dosen()->attach($dosenhaya->nip);
		$matkul_adbis->dosen()->attach($dosenave->nip);
		$matkul_adbis->dosen()->attach($dosenmega->nip);
		$matkul_adbis->save();
		
		$matkul_ddak = new MataKuliah;
		$matkul_ddak->kodemk = "IKS21501";
		$matkul_ddak->nama = "Dasar-Dasar Arsitektur Komputer";
		$matkul_ddak->singkatan_1 = "DDAK";
		$matkul_ddak->sks = 4;
		$matkul_ddak->semester = 3;
		$matkul_ddak->jenis = MataKuliah::JURUSAN;
		$matkul_ddak->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ddak->deskripsi ="Mata kuliah ini memperkenalkan konsep dasar arsitektur komputer yang mencakup pemahaman dasar system digital dan komponen-komponen utama yang membangun komputer digital. Mata kuliah ini merupakan gabungan materi PSD, POK dan OSK yang memberi landasan pengetahuan bagi mahasiswa stream Sistem Informasi";
		$matkul_ddak->dosen()->attach($dosenadhi->nip);
		$matkul_ddak->dosen()->attach($dosenhisyam->nip);
		$matkul_ddak->dosen()->attach($dosenefi->nip);
		$matkul_ddak->prasyarat()->attach($matkul_ddp->nip);
		$matkul_ddak->save();
		
		$matkul_ppm = new MataKuliah;
		$matkul_ppm->kodemk = "IKS21601";
		$matkul_ppm->nama = "Prinsip-Prinsip Manajemen";
		$matkul_ppm->singkatan_1 = "PPM";
		$matkul_ppm->sks = 3;
		$matkul_ppm->semester = 3;
		$matkul_ppm->jenis = MataKuliah::JURUSAN;
		$matkul_ppm->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ppm->deskripsi ="Mata kuliah ini mempelajari konsep dasar fungsi-fungsi manajemen dalam lingkungan bisnis. Penekanan dari mata kuliah ini adalah pendekatan fungsional termasuk perencanaan, pengorganisasian, staffing, koordinasi, kepemimpinan, dan pengontrolan";
		$matkul_ppm->save();
		
		$matkul_erp = new MataKuliah;
		$matkul_erp->kodemk = "IKS22602";
		$matkul_erp->nama = "Enterprise Resource Planning";
		$matkul_erp->singkatan_1 = "ERP";
		$matkul_erp->sks = 3;
		$matkul_erp->semester = 4;
		$matkul_erp->jenis = MataKuliah::JURUSAN;
		$matkul_erp->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_erp->deskripsi ="Mata kuliah ini berfokus pada metodologi dan praktik ERP sebagai solusi bisnis perusahaan yang lengkap. mata kuliah ini sesuai untuk mahasiswa yang berencana menjadi konsultan ERP atau menjadi pengguna ERP di perusahaan. mata kuliah ini akan mengajarkan siswa modul penjualan dan distribusi, manajemen material, dan perencanaan produksi";
		$matkul_erp->dosen()->attach($dosenyova->nip);
		$matkul_erp->dosen()->attach($dosenindra->nip);
		$matkul_erp->prasyarat()->attach($matkul_adbis->nip);
		$matkul_erp->save();
		
		$matkul_ro = new MataKuliah;
		$matkul_ro->kodemk = "IKS22403";
		$matkul_ro->nama = "Riset Operasi";
		$matkul_ro->singkatan_1 = "RO";
		$matkul_ro->sks = 3;
		$matkul_ro->semester = 4;
		$matkul_ro->jenis = MataKuliah::JURUSAN;
		$matkul_ro->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ro->deskripsi ="Mata kuliah ini mengajarkan pemodelan Linear Programming (LP), pemahaman metodologi/algoritma terkait dan penggunaan dalam persoalan-persoalan pemrograman linier serta varian-variannya";
		$matkul_ro->dosen()->attach($dosenarlisa->nip);
		$matkul_ro->dosen()->attach($dosenaminah->nip);
		$matkul_ro->dosen()->attach($dosenika->nip);
		$matkul_ro->prasyarat()->attach($matkul_anum->nip);
		$matkul_ro->save();
		
		$matkul_crm = new MataKuliah;
		$matkul_crm->kodemk = "IKS31603";
		$matkul_crm->nama = "Customer Relationship Management";
		$matkul_crm->singkatan_1 = "CRM";
		$matkul_crm->sks = 3;
		$matkul_crm->semester = 5;
		$matkul_crm->jenis = MataKuliah::JURUSAN;
		$matkul_crm->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_crm->deskripsi ="Mata kuliah ini mengajarkan pemahaman dan aplikasi dari konsep dan prinsip-prinsip CRM. Materi yang diajarkan meliputi customer driven, praktik-praktik berbasiskan pasar yang memungkinkan sebuah bisnis menjadi menarik, serta teknik-teknik dalam memuaskan dan mempertahankan profitabilitas pelanggan";
		$matkul_crm->dosen()->attach($dosenikac->nip);
		$matkul_crm->dosen()->attach($doseneko->nip);
		$matkul_crm->dosen()->attach($dosenputu->nip);
		$matkul_crm->prasyarat()->attach($matkul_erp->nip);
		$matkul_crm->save();
		
		$matkul_msdm = new MataKuliah;
		$matkul_msdm->kodemk = "IKS31604";
		$matkul_msdm->nama = "Manajemen Sumber Daya Manusia";
		$matkul_msdm->singkatan_1 = "MSDM";
		$matkul_msdm->sks = 3;
		$matkul_msdm->semester = 5;
		$matkul_msdm->jenis = MataKuliah::JURUSAN;
		$matkul_msdm->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_msdm->deskripsi ="Mata kuliah ini berfokus pada pemahaman dasar konsep dan teknik manajemen SDM. mata kuliah ini akan menyoroti aplikasi praktis yang dapat digunakan untuk menangani kegiatan rutin terkait pengelolaan SDM, serta perencanaan personil dan kontribusinya. Isu yang dibahas meliputi rekrutmen, penempatan, pelatihan dan pengembangan, kompensasi serta relationship dengan pegawai dan keamanan karyawan";
		$matkul_msdm->prasyarat()->attach($matkul_erp->nip);
		$matkul_msdm->save();
		
		$matkul_scm = new MataKuliah;
		$matkul_scm->kodemk = "IKS31605";
		$matkul_scm->nama = "Supply Chain Management";
		$matkul_scm->singkatan_1 = "SCM";
		$matkul_scm->sks = 3;
		$matkul_scm->semester = 5;
		$matkul_scm->jenis = MataKuliah::JURUSAN;
		$matkul_scm->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_scm->deskripsi ="Mata kuliah ini berfokus pada metodologi dan praktek SCM sebagai solusi bisnis pada skala enterprise. mata kuliah ini sesuai untuk mahasiswa yang berencana menjadi seorang konsultan TI atau perusahaan manufaktur. mata kuliah ini akan mengajarkan mahasiswa konsep dasar dan implementasi SCM dengan mengilustrasikan kompleksitas dari perencanaan kolaboratif dalam sebuah rantai pasokan (supply chain)";
		$matkul_scm->dosen()->attach($dosenikac->nip);
		$matkul_scm->dosen()->attach($dosenpuspa->nip);
		$matkul_scm->prasyarat()->attach($matkul_erp->nip);
		$matkul_scm->save();
		
		$matkul_jarkomdat = new MataKuliah;
		$matkul_jarkomdat->kodemk = "IKS31504";
		$matkul_jarkomdat->nama = "Jaringan Komunikasi Data";
		$matkul_jarkomdat->singkatan_1 = "Jarkomdat";
		$matkul_jarkomdat->sks = 3;
		$matkul_jarkomdat->semester = 5;
		$matkul_jarkomdat->jenis = MataKuliah::JURUSAN;
		$matkul_jarkomdat->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_jarkomdat->deskripsi ="Mata kuliah ini memperkenalkan model referensi ISO-OSI untuk merancang jaringan komunikasi data. Topik-topik yang akan dibahas meliputi: Arsitektur jaringan, ISO-OSI, Application layer, Transport layer, Network layer, LAN, dan wireless networking";
		$matkul_jarkomdat->dosen()->attach($dosenarief->nip);
		$matkul_jarkomdat->dosen()->attach($dosenbetty->nip);
		$matkul_jarkomdat->dosen()->attach($dosenrizal->nip);
		$matkul_jarkomdat->prasyarat()->attach($matkul_os->nip);
		$matkul_jarkomdat->save();
		
		$matkul_siak = new MataKuliah;
		$matkul_siak->kodemk = "IKS32606";
		$matkul_siak->nama = "Sistem Informasi Akuntansi dan Keuangan";
		$matkul_siak->singkatan_1 = "SIAK";
		$matkul_siak->sks = 3;
		$matkul_siak->semester = 6;
		$matkul_siak->jenis = MataKuliah::JURUSAN;
		$matkul_siak->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_siak->deskripsi ="Mata kuliah ini mengembangkan pemahaman konsep dan prinsip-prinsip Akuntansi, serta pemahaman konsep dan prinsip-prinsip Sistem Informasi Akuntansi sebagai bagian dari Sistem Informasi organisasi";
		$matkul_siak->dosen()->attach($dosenikac->nip);
		$matkul_siak->prasyarat()->attach($matkul_erp->nip);
		$matkul_siak->save();
		
		$matkul_mppi = new MataKuliah;
		$matkul_mppi->kodemk = "IKS32901";
		$matkul_mppi->nama = "Metodologi Penelitian & Penulisan Ilmiah";
		$matkul_mppi->singkatan_1 = "MPPI";
		$matkul_mppi->sks = 3;
		$matkul_mppi->semester = 6;
		$matkul_mppi->jenis = MataKuliah::JURUSAN;
		$matkul_mppi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_mppi->deskripsi ="Mata kuliah ini berfokus pada metodologi penelitian untuk Sistem Informasi (SI) dan teknologi informasi (TI). mata kuliah ini memberikan landasan sikap mahasiswa agar bisa berfikir secara ilmiah. mata kuliah ini menekankan mahasiswa agar mampu berpikir kritis dalam proses ilmiah. mata kuliah ini akan berkaitan dengan bagaimana melakukan penelitian di bidang SI/TI, sehingga mahasiswa bisa mengelola sumber daya penelitian secara optimal. Selain itu, mata kuliah ini juga akan mengeksplorasi peran penelitian sebagai fungsi utama dalam mendorong pemahaman dan pembentukan pengetahuan baru dalam bidang SI/TI. mata kuliah ini akan mencakup topik-topik seperti: penalaran untuk melakukan penelitian, memahami proses penelitian, mengeksplorasi berbagai pendekatan untuk melakukan penelitian termasuk penggunaan berbagai metode penelitian, menafsirkan hasil penelitian, dan penulisan laporan penelitian. Beberapa paradigma penelitian dan metode terkini akan disesuaikan dengan bidang SI/TI. Pendekatan dasar mata kuliah ini adalah agar mahasiswa mengerjakan tugas-tugas yang diberikan dan berlatih melakukan penelitian";
		$matkul_mppi->dosen()->attach($dosenzain->nip);
		$matkul_mppi->dosen()->attach($dosenarief->nip);
		$matkul_mppi->save();
		
		$matkul_propensi = new MataKuliah;
		$matkul_propensi->kodemk = "IKS32206";
		$matkul_propensi->nama = "Proyek Pengembangan Sistem Informasi";
		$matkul_propensi->singkatan_1 = "Propensi";
		$matkul_propensi->sks = 6;
		$matkul_propensi->semester = 6;
		$matkul_propensi->jenis = MataKuliah::JURUSAN;
		$matkul_propensi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_propensi->deskripsi ="Melalui mata kuliah ini mahasiswa diharapkan mampu mengembangkan aplikasi dalam skala besar dengan tetap memperhatikan kaidah-kaidah di dalam rekayasa perangkat lunak";
		$matkul_propensi->dosen()->attach($dosenherup->nip);
		$matkul_propensi->dosen()->attach($doseniis->nip);
		$matkul_propensi->dosen()->attach($dosenbetty->nip);
		$matkul_propensi->dosen()->attach($dosenpuspa->nip);
		$matkul_propensi->dosen()->attach($doseniik->nip);
		$matkul_propensi->prasyarat()->attach($matkul_rpl->nip);
		$matkul_propensi->prasyarat()->attach($matkul_basdat->nip);
		$matkul_propensi->save();
		
		$matkul_mpti = new MataKuliah;
		$matkul_mpti->kodemk = "IKS31259";
		$matkul_mpti->nama = "Manajemen Proyek TI";
		$matkul_mpti->singkatan_1 = "MPTI";
		$matkul_mpti->sks = 3;
		$matkul_mpti->semester = 5;
		$matkul_mpti->jenis = MataKuliah::PEMINATAN;
		$matkul_mpti->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_mpti->deskripsi ="Tujuan dari mata kuliah ini adalah untuk mengembangkan pemahaman konsep dan prinsip-prinsip Manajemen Proyek Teknologi Informasi, berdasarkan PMBOK Guide Third Edition";
		$matkul_mpti->dosen()->attach($dosenave->nip);
		$matkul_mpti->dosen()->attach($dosenindra->nip);
		$matkul_mpti->prasyarat()->attach($matkul_ppm->nip);
		$matkul_mpti->save();
		
		$matkul_kombistek = new MataKuliah;
		$matkul_kombistek->kodemk = "IKS31951";
		$matkul_kombistek->nama = "Komunikasi Bisnis dan Teknis";
		$matkul_kombistek->singkatan_1 = "Kombistek";
		$matkul_kombistek->sks = 3;
		$matkul_kombistek->semester = 5;
		$matkul_kombistek->jenis = MataKuliah::PEMINATAN;
		$matkul_kombistek->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_kombistek->deskripsi ="Mata kuliah ini berfokus pada strategi dan keterampilan untuk menulis dan berbicara yang efektif dalam organisasi bisnis. mata kuliah ini akan mengajarkan siswa teknik-teknik dasar komunikasi yang berguna dalam konteks sehari-hari organisasi/bisnis";
		$matkul_kombistek->dosen()->attach($dosenherdi->nip);
		$matkul_kombistek->dosen()->attach($dosenrifki->nip);
		//$matkul_kombistek->dosen()->attach($dosenlaras->nip);
		$matkul_kombistek->prasyarat()->attach($matkul_anum->nip);
		$matkul_kombistek->save();
		
		$matkul_adsis = new MataKuliah;
		$matkul_adsis->kodemk = "IKS32753";
		$matkul_adsis->nama = "Administrasi Sistem";
		$matkul_adsis->singkatan_1 = "Adsis";
		$matkul_adsis->sks = 3;
		$matkul_adsis->semester = 5;
		$matkul_adsis->jenis = MataKuliah::PEMINATAN;
		$matkul_adsis->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_adsis->deskripsi ="Kuliah ini memperkenalkan konsep dasar administrasi sistem dan jaringan. Mahasiswa akandikenalkan dengan pembahasan awal tentang jaringan client/server modern dan mahasiswa juga akan dilatih melakukan instalasi, konfigurasi, dan maintenance terhadap client, server serta beragam services";
		$matkul_adsis->dosen()->attach($dosenherik->nip);
		$matkul_adsis->prasyarat()->attach($matkul_os->nip);
		$matkul_adsis->save();
		
		$matkul_itim = new MataKuliah;
		$matkul_itim->kodemk = "IKS32756";
		$matkul_itim->nama = "Infrastruktur TI Modern";
		$matkul_itim->singkatan_1 = "ITIM";
		$matkul_itim->sks = 3;
		$matkul_itim->semester = 5;
		$matkul_itim->jenis = MataKuliah::PEMINATAN;
		$matkul_itim->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_itim->deskripsi ="Mata kuliah ini memperkenalkan infrastruktur Teknologi Informasi (TI) modern dan aktivitas-aktivitas yang diperlukan untuk pengelolaan operasional infrastruktur tersebut";
		$matkul_itim->dosen()->attach($dosenari->nip);
		$matkul_itim->dosen()->attach($dosengladhi->nip);
		$matkul_itim->prasyarat()->attach($matkul_basdat->nip);
		$matkul_itim->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_itim->save();
		
		$matkul_mlti = new MataKuliah;
		$matkul_mlti->kodemk = "IKS32758";
		$matkul_mlti->nama = "Manajemen Layanan TI";
		$matkul_mlti->singkatan_1 = "MLTI";
		$matkul_mlti->sks = 3;
		$matkul_mlti->semester = 5;
		$matkul_mlti->jenis = MataKuliah::PEMINATAN;
		$matkul_mlti->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_mlti->deskripsi ="Mata kuliah ini berfokus pada penyampaian dan dukungan layanan TI yang sesuai dengan kebutuhan bisnis organisasi";
		$matkul_mlti->dosen()->attach($dosenkasfu->nip);
		$matkul_mlti->prasyarat()->attach($matkul_ppsi->nip);
		$matkul_mlti->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_mlti->save();
		
		$matkul_mki = new MataKuliah;
		$matkul_mki->kodemk = "IKS41759";
		$matkul_mki->nama = "Manajemen Keamanan Informasi";
		$matkul_mki->singkatan_1 = "MKI";
		$matkul_mki->sks = 3;
		$matkul_mki->semester = 5;
		$matkul_mki->jenis = MataKuliah::PEMINATAN;
		$matkul_mki->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_mki->deskripsi ="Mata kuliah ini membahas mengenai keamanan komputer. Topik yang dibahas mencakup antara lain: Management keamanan (informasi, kebijakan, prosedur), Management resiko, Model dan tingkat keamanan pada jaringan, peralatan, aplikasi, serta kontol akses dan keamanan fisik. Kuliah ini juga mencakup topik topik yang terkait dengan BCP dan DRP, serta investigasi kejahatan komputer (forensics)";
		$matkul_mki->dosen()->attach($dosenamril->nip);
		$matkul_mki->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_mki->save();
		
		$matkul_tm = new MataKuliah;
		$matkul_tm->kodemk = "IKS41759";
		$matkul_tm>nama = "Teknologi Mobile";
		$matkul_tm->singkatan_1 = "TM";
		$matkul_tm->sks = 3;
		$matkul_tm->semester = 5;
		$matkul_tm->jenis = MataKuliah::PEMINATAN;
		$matkul_tm->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_tm->deskripsi ="Mata kuliah ini merupakan pengantar bidang komunikasi mobile yang ditujukan untuk memberikan gambaran umum tentang teknologi mobile dari sudut pandang ilmu komputer. Pada awal perkuliahan, diberikan beberapa dasar tentang teknologi transmisi nirkabel. Topik yang dibahas meliputi: frekuensi yang digunakan untuk komunikasi, sinyal, skema dasar multiplexing dan modulasi, protokol akses, serta persyaratan aplikasi. Berbagai teknologi akses juga diajarkan dalam mata kuliah ini untuk jaringan tetap, jaringan nirkabel, jaringan nirkabel telepon bergerak dll. Setelah pengenalan konsep-konsep dasar, mata kuliah ini akan memperkenalkan sistem selular secara lebih mendalam. Berbagai teknologi mobile masa depan sistem digital seperti CDMA, GSM, DECT, W-CDMA, CDMA2000, UMTS dll juga akan diperkenalkan sebagai bagian dari sistem komunikasi mobile. Selain itu teknologi terbaru seperti WiMAX dan MBWA juga akan dibahas termasuk gambaran skenario integrasi 3G dan WLAN. Beberapa permasalahan lain seperti mobile IP dan cognitive radio juga akan diajarkan dalam mata kuliah ini untuk memberikan gambaran konseptual dari topik-topik terbaru";
		$matkul_tm->dosen()->attach($dosenbob->nip);
		$matkul_tm->dosen()->attach($dosenhilman->nip);
		$matkul_tm->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_tm->save();
		
		$matkul_ddasi = new MataKuliah;
		$matkul_ddasi->kodemk = "IKS41851";
		$matkul_ddasi->nama = "Dasar-Dasar Audit SI";
		$matkul_ddasi->singkatan_1 = "DDASI";
		$matkul_ddasi->sks = 3;
		$matkul_ddasi->semester = 5;
		$matkul_ddasi->jenis = MataKuliah::PEMINATAN;
		$matkul_ddasi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ddasi->deskripsi ="Audit Sistem Informasi/Teknologi Informasi (SI/TI) merupakan pemeriksaan kontrol dalam SI/TI sebuah organisasi. Audit SI/TI merupakan proses pengumpulan dan penilaian bukti-bukti dari sistem informasi, praktik, dan operasi dari organisasi. Evaluasi terhadap bukti yang diperoleh dipergunakan untuk menentukan apakah sistem informasi sudah menjaga aset, memelihara integritas data, dan beroperasi secara efektif untuk mencapai tujuan organisasi. Evaluasi ini dapat dilakukan bersamaan dengan audit laporan keuangan, audit internal, atau bentuk audit lainnya. mata kuliah ini memberikan dasar bagi mahasiswa untuk melakukan audit SI/TI. mata kuliah ini akan mencakup konsep audit SI/TI dan bagaimana melakukan audit SI/TI dalam suatu organisasi. Selain itu, mata kuliah ini akan ";
		$matkul_ddasi->dosen()->attach($dosenkasfu->nip);
		$matkul_ddasi->dosen()->attach($dosenherik-->nip);
		$matkul_ddasi->prasyarat()->attach($matkul_ppsi->nip);
		$matkul_ddasi->prasyarat()->attach($matkul_basdat->nip);
		$matkul_ddasi->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_ddasi->save();
		
		$matkul_msi = new MataKuliah;
		$matkul_msi->kodemk = "IKS41852";
		$matkul_msi->nama = "Manajemen Sistem Informasi";
		$matkul_msi->singkatan_1 = "MSI";
		$matkul_msi->sks = 3;
		$matkul_msi->semester = 5;
		$matkul_msi->jenis = MataKuliah::PEMINATAN;
		$matkul_msi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_msi->deskripsi ="Mata kuliah ini mempelajari bagaimana mengelola divisi sistem informasi / teknologi informasi di sebuah organisasi. Topik mencakup: perencanaan sistem informasi, manajemen pengembangan sistem, manajemen pemeliharaan, manajemen simplementasi, help desk, user support service, operasi data centre, manajemen infrastruktur, manajemen inventori, kontrol dan evaluasi sistem informasi, akuisisi dan procurement sumber daya sistem informasi, manajemen personalia sistem informasi, end-user computing";
		$matkul_msi->dosen()->attach($dosenpuspa->nip);
		$matkul_msi->dosen()->attach($doseniik->nip);
		$matkul_msi->prasyarat()->attach($matkul_ppsi->nip);
		$matkul_msi->prasyarat()->attach($matkul_basdat->nip);
		$matkul_msi->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_msi->save();
		
		$matkul_pplos = new MataKuliah;
		$matkul_pplos->kodemk = "IKS42260";
		$matkul_pplos->nama = "Pengembangan Perangkat Lunak Open Source";
		$matkul_pplos->singkatan_1 = "PPLOS";
		$matkul_pplos->sks = 3;
		$matkul_pplos->semester = 5;
		$matkul_pplos->jenis = MataKuliah::PEMINATAN;
		$matkul_pplos->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_pplos->deskripsi ="Mata kuliah ini memberikan pengetahuan kepada mahasiswa sehingga mereka mampu mengimplementasikan dan mengembangkan software berbasis open source";
		$matkul_pplos->dosen()->attach($dosenhilman->nip);
		$matkul_pplos->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_pplos->save();
		
		$matkul_bi= new MataKuliah;
		$matkul_bi->kodemk = "IKS42651";
		$matkul_bi->nama = "Business Intelligence";
		$matkul_bi->singkatan_1 = "BI";
		$matkul_bi->sks = 3;
		$matkul_bi->semester = 5;
		$matkul_bi->jenis = MataKuliah::PEMINATAN;
		$matkul_bi->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_bi->deskripsi ="Mata kuliah ini bertujuan membekali mahasiswa kemampuan bekerja dengan data dalam skala besar dan menguasai berbagai teknik untuk menilai informasi bisnis yang terkandung dalam data tersebut";
		$matkul_bi->dosen()->attach($dosenimairi->nip);
		$matkul_bi->dosen()->attach($dosenivan->nip);
		$matkul_bi->dosen()->attach($dosenindra->nip);
		$matkul_bi->dosen()->attach($dosenaminah->nip);
		$matkul_bi->prasyarat()->attach($matkul_basdat->nip);
		$matkul_bi->save();
		
		$matkul_tkbmti = new MataKuliah;
		$matkul_tkbmti->kodemk = "IKS42760";
		$matkul_tkbmti->nama = "Topik Khusus Bidang Minat Teknologi Informasi";
		$matkul_tkbmti->singkatan_1 = "TKBMTI";
		$matkul_tkbmti->sks = 3;
		$matkul_tkbmti->semester = 5;
		$matkul_tkbmti->jenis = MataKuliah::PEMINATAN;
		$matkul_tkbmti->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_tkbmti->deskripsi = "Mempunyai kemampuan untuk mengembangkan bidang ilmu/teknologi atau melanjutkan studinya";
		$matkul_tkbmti->save();
		
		$matkul_techno = new MataKuliah;
		$matkul_techno->kodemk = "IKS42950";
		$matkul_techno->nama = "Technopreneurship";
		$matkul_techno->singkatan_1 = "Techno";
		$matkul_techno->sks = 3;
		$matkul_techno->semester = 5;
		$matkul_techno->jenis = MataKuliah::PEMINATAN;
		$matkul_techno->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_techno->deskripsi ="Mata kuliah ini memberikan wawasan tentang kewirausahaan di bidang SI/TI";
		$matkul_techno->dosen()->attach($dosenbob->nip);
		$matkul_techno->dosen()->attach($doseneko->nip);
		$matkul_techno->save();
		
		$matkul_ppp = new MataKuliah;
		$matkul_ppp->kodemk = "IKS40652";
		$matkul_ppp->nama = "Pengembangan dan Pemasaran Produk";
		$matkul_ppp->singkatan_1 = "PPP";
		$matkul_ppp->sks = 3;
		$matkul_ppp->semester = 5;
		$matkul_ppp->jenis = MataKuliah::PEMINATAN;
		$matkul_ppp->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ppp->deskripsi ="Mata kuliah ini memperkenalkan mahasiswa tentang konsep pengembangan produk dan pemasaran. Selain itu mahasiswa juga akan dibekali kemampuan untuk menganalisa kebutuhan pasar, merancang dan mengembangkan produk baru seperti perangkat lunak atau layanan konsultasi SI/TI, pengujian pasar, dan sebagainya";
		$matkul_ppp->prasyarat()->attach($matkul_adbis->nip);
		$matkul_ppp->save();
		
		$matkul_ecom = new MataKuliah;
		$matkul_ecom->kodemk = "IKS31650";
		$matkul_ecom->nama = "E-Commerce";
		$matkul_ecom->singkatan_1 = "E-Commerce";
		$matkul_ecom->sks = 3;
		$matkul_ecom->semester = 5;
		$matkul_ecom->jenis = MataKuliah::PEMINATAN;
		$matkul_ecom->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_ecom->deskripsi ="Mata kuliah ini akan memperkenalkan pada mahasiswa prinsip-prinsip dasar e-commerce, dari perspektif bisnis. mata kuliah ini memberikan materi tentang bisnis dan teknologi, seperti ritel Internet dan berbagai model e-commerce. Selain itu, mata kuliah ini juga membahas beberapa isu utama yang terkait dengan e-commerce seperti keamanan, privasi, hak kekayaan intelektual, otentikasi, enkripsi, kebijakan penggunaan, dan tanggung jawab hukum";
		$matkul_ecom->dosen()->attach($dosenimairi->nip);
		$matkul_ecom->dosen()->attach($dosenbilih->nip);
		$matkul_ecom->prasyarat()->attach($matkul_ppsi->nip);
		$matkul_ecom->save();
		
		$matkul_konfig = new MataKuliah;
		$matkul_konfig->kodemk = "IKS32656";
		$matkul_konfig->nama = "Konfigurasi ERP";
		$matkul_konfig->singkatan_1 = "Konfig ERP";
		$matkul_konfig->sks = 3;
		$matkul_konfig->semester = 5;
		$matkul_konfig->jenis = MataKuliah::PEMINATAN;
		$matkul_konfig->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_konfig->deskripsi ="Mata kuliah ini berfokus pada teori dan praktek dalam mengkonfigurasi sistem ERP sebagai solusi bisnis yang berskala enterprise. mata kuliah ini sesuai bagi mahasiswa yang ingin bekerja sebagai konsultan TI maupun ERP. mata kuliah ini akan mengajarkan mahasiswa bagaimana mengkonfigurasi SAP, yang merupakan salah satu";
		$matkul_konfig->dosen()->attach($dosenindra->nip);
		$matkul_konfig->prasyarat()->attach($matkul_erp->nip);
		$matkul_konfig->prasyarat()->attach($matkul_ddp->nip);
		$matkul_konfig->save();
		
		$matkul_sik = new MataKuliah;
		$matkul_sik->kodemk = "IKS32855";
		$matkul_sik->nama = "Sistem Informasi Kesehatan";
		$matkul_sik->singkatan_1 = "SIK";
		$matkul_sik->singkatan_1 = "SiKes";
		$matkul_sik->sks = 3;
		$matkul_sik->semester = 5;
		$matkul_sik->jenis = MataKuliah::PEMINATAN;
		$matkul_sik->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_sik->deskripsi ="Mata kuliah ini mempelajari berbagai proses bisnis yang berlaku dalam bidang kesehatan. Hal-hal yang dibahas meliputi pemahaman proses bisnis dan pengembangan sistem informasi di bidang kesehatan, baik itu di bidang penyedia layanan kesehatan, asuransi, maupun layanan medis darurat";
		$matkul_sik->dosen()->attach($dosenstef->nip);
		$matkul_sik->prasyarat()->attach($matkul_ppsi->nip);
		$matkul_sik->prasyarat()->attach($matkul_basdat->nip);
		$matkul_sik->save();
		
		$matkul_po = new MataKuliah;
		$matkul_po->kodemk = "IKS41653";
		$matkul_po->nama = "Perilaku Organisasi";
		$matkul_po->singkatan_1 = "PO";
		$matkul_po->sks = 3;
		$matkul_po->semester = 5;
		$matkul_po->jenis = MataKuliah::PEMINATAN;
		$matkul_po->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_po->deskripsi ="Mata kuliah ini bertujuan memberi pemahaman kepada mahasiswa secara konseptual dan aplikasi mengenai pengaruh perilaku (behavioral) terhadap kinerja (performance) dan produktivitas kerja pada tingkat individual, kelompok dan organisasi";
		$matkul_po->save();
		
		$matkul_mp = new MataKuliah;
		$matkul_mp->kodemk = "IKS41850";
		$matkul_mp->nama = "Manajemen Pengetahuan";
		$matkul_mp->singkatan_1 = "MP";
		$matkul_mp->sks = 3;
		$matkul_mp->semester = 5;
		$matkul_mp->jenis = MataKuliah::PEMINATAN;
		$matkul_mp->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_mp->deskripsi ="Mata kuliah ini berisi teori dan aplikasi Knowledge Management, yang juga mencakup teknologi dan tools yang digunakan dalam mengelola pengetahuan, diintegrasikan dengan kebutuhan manajemen dalam menyediakan pengetahuan dalam suatu organisasi secara efektif. Dalam mata kuliah ini juga dibahas ciri-ciri, computer representation, akses, dan pemanfaatan pengetahuan versus informasi dalam konteks sumberdaya manusia. mata kuliah ini juga memberikan persiapan pada pekerja-pekerja sistem, teknis, dan manajerial dalam menghadapi ekonomi berbasis pengetahuan";
		$matkul_mp->dosen()->attach($dosenputu->nip);
		$matkul_mp->prasyarat()->attach($matkul_anum->nip);
		$matkul_mp->save();
		
		$matkul_tkbmes = new MataKuliah;
		$matkul_tkbmes->kodemk = "IKS42655";
		$matkul_tkbmes->nama = "Topik Khusus Bidang Minat Enterprise System";
		$matkul_tkbmes->singkatan_1 = "TKBMES";
		$matkul_tkbmes>sks = 3;
		$matkul_tkbmes->semester = 5;
		$matkul_tkbmes->jenis = MataKuliah::PEMINATAN;
		$matkul_tkbmes->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_tkbmes->deskripsi ="Mempunyai kemampuan untuk mengembangkan bidang ilmu/teknologi atau melanjutkan studinya";
		$matkul_tkbmes->save();
		
		
		$matkul_eai = new MataKuliah;
		$matkul_eai->kodemk = "IKS42755";
		$matkul_eai->nama = "Enterprise Application Integration";
		$matkul_eai->singkatan_1 = "EAI";
		$matkul_eai>sks = 3;
		$matkul_eai->semester = 5;
		$matkul_eai->jenis = MataKuliah::PEMINATAN;
		$matkul_eai->prodi = MataKuliah::SISTEM_INFORMASI;
		$matkul_eai->deskripsi ="Mata kuliah ini berfokus pada integrasi sistem informasi dalam organisasi, proses dimana sistem komputer dan aplikasi perangkat lunak yang berbeda dihubungkan bersama secara fisik atau fungsional. Integrasi tersebut menggunakan strategi dan metode untuk menyatukan sekumpulan sistem yang saling bergantung menjadi suatu kesatuan fungsi, sehingga memungkinkan dua atau lebih aplikasi untuk berinteraksi dan bertukar data dengan lancar. mata kuliah ini akan mengeksplorasi cara dan teknik untuk melakukan integrasi sistem serta praktek manajemen yang telah terbukti dalam proyek-proyek integrasi";
		$matkul_eai->dosen()->attach($dosenputu->nip);
		$matkul_eai->dosen()->attach($dosenqorib->nip);
		$matkul_eai->dosen()->attach($dosenrizal->nip);
		$matkul_eai->prasyarat()->attach($matkul_jarkomdat->nip);
		$matkul_eai->prasyarat()->attach($matkul_basdat->nip);
		$matkul_eai->save();
		
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
