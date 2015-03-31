<?php

class BaseSeed {

    function run()
    {
		$dosen1 = new Dosen;
        $dosen1->nip = "000002";
        $dosen1->nama = "Hadaiq";
		$dosen1->ttl = date("1999-09-23");
		$dosen1->jeniskelamin = "Cewe";
        $dosen1->save();
    }
}