<?php
session_start();
try{
		        $db = new PDO('mysql:host=localhost;dbname=satis;charset=utf8','root','');
			}catch(PDOException $e){
				echo 'Hata: '.$e->getMessage();
			}
     if ($_POST) {
       $kadi = $_POST["eposta"];

	   $sifre = $_POST["sifre"];
//Boşluk kontrolü de yapalım ki boş gelmesin.

	if(!$kadi || !$sifre){
	echo "Boş alan bırakmayın";
	}else{
	$cek = $db->query("select * from kullanicilar where email = '$kadi' && sifre = '$sifre' ",PDO::FETCH_ASSOC);
//uyeler adında bir tablomuz vardı... içinde de kullanici_adi ve sifre adında alanlar.
//Şimdi etkilenen satır sayısı olup olmadığını rowCount() ile bulacağız.
	if($cek->rowCount()){
		    $_SESSION["kullanici_adi"] =$kadi ;
			$_SESSION["giris"] ="ok";
			
//etkilenen satır var ise doğru giriş yapılmış demektir. Mesajı verebiliriz.
	//echo "Panele Hoşgeldiniz..." . $kadi;
//yada ;
	header("refresh:0.1;url=panel.php"); //şeklinde panelimize yönlendirebiliriz
	}
	else{
		echo "Kullancici Adi veye Şifre Yanlış Tekrar Deneyiniz...";
//yada ;
		header("refresh:2;url=giris.html");  //şeklinde panelimize yönlendirebiliriz
	}
     }
	 
	 }
?>