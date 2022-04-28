<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style/custom.css">
<link rel="stylesheet" href="style/bootstrap1.min.css">
</head>
<body>
<?php
error_reporting(0);									//MENGHANDLE PESAN ERROR DARI LINE 18 KARNA TIDAK TERDEFENISIKAN ARRAY
include 'koneksi.php';								//INCLUDE/KAITKAN FILE KONEKSI.PHP
if(isset($_POST['submit'])){						//JIKA POST SUBMIT TRUE MAKA LAKUKAN PROSES DIBAWAH
	$qry='select id from rules where ';				//MENGAMBIL DATA TABLE RULES BERDASARKAN ID 
	array_pop($_POST);								//MENGHAPUS DATA POST PERTAMA(SUBMIT) AGAR DATA POST SELANJUTNYA DISIMPAN(G1 G2 GN..DST)
	$rule_input=array();							//MENDEFENISIKA VARIABLE RULE_INPUT DENGAN TIPE DATA ARRAY
	foreach ($_POST as $where) {					//MELAKUKAN PERULANGAN DARI POST(G1,G2 GN...DST)
		$qry.=$where."=1 and ";						//QUERY BERDASARKAN ID
		array_push($rule_input,$where);				//MEMASUKAN DATA POST(G1,G2 GN...DST) KE VARIABLE RULE_INPUT
	}
	   $rules1 =  implode(" ",$rule_input);						//MEMISAHKAN DATA RULE_INPUT DARI SPASI
	   $sql = ("SELECT * FROM rules WHERE rules='$rules1'");	//QUERY MENGAMBIL DATA RULES(BERDASARKAN RULE_INPUT[G1..GN]) DARI TABLE RULES
       $query = mysqli_query($kon, $sql);						//KONEKSI QUERY DATABASE
       $data = mysqli_fetch_assoc($query);						//MENDEFENISIKAN QUERY YANG SUDAH DIDEFENISIKAN KE FIELD/ASSOC  
	   $rules2 = $data['rules1'];   							//MENGAMBIL DATA RULES2(S1..SN) DARI DATA TABLE RULES1(TABLE RULES)

	if ($rules2 == null){						     			//JIKA DATA SOLUSI(S1..SN) TIDAK DITEMUKAN MAKA HASIL DIBAWAH
		include 'hasil-gagal.php';								//HASIL INI AKAN MENAMPILKAN HASIL GAGAL/DATA TIDAK DITEMUKAN
	}
	else{                                                    //JIKA DATA SOLUSI(S1..SN) DITEMUKAN MAKA HASIL DIBAWAH	   
	   $sql = ("SELECT * FROM tb_solusi WHERE kode='$rules2'");	//QUERY MENGAMBIL DATA(KODE(G1..GN)) DARI TABEL SOLUSI
       $query = mysqli_query($kon, $sql);						//QUERY KONEKSI
       $data = mysqli_fetch_assoc($query);						//MENDEFENISIKAN QUERY YANG SUDAH DIDEFENISIKAN KE FIELD/ASSOC
	   $penyakit =  $data['penyakit'];							//MENGAMBIL DATA PENYAKIT BERDASARKAN KODE GEJALA(G1..GN)
	   $solusi =  $data['solusi'];								//MENGAMBIL DATA SOLUSI BERDASARKAN KODE GEJALA(G1..GN)									
		include 'hasil-sukses.php';								//HASIL INI AKAN MENAMPILKAN HASIL BERHASIL/DATA DITEMUKAN
	}
}
?><center><a href="index.php"><input type="submit" class="btn btn-primary btn-lg" value="Diagnosa Ulang"></div></a>