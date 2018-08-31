<?php
  session_start();
try{
		        $db = new PDO('mysql:host=localhost;dbname=satis;charset=utf8','root','');
			}catch(PDOException $e){
				echo 'Hata: '.$e->getMessage();
			}
			
	        $posta = $_POST['eposta'];
			$sifre = $_POST['sifre'];
			$ad = $_POST['ad'];
			$soyad = $_POST['soyad'];
			$cep_telefonu = $_POST['cep_telefonu'];
			$adres = $_POST['adres'];
			$ilce = $_POST['ilce'];
			$sehir = $_POST['sehir'];
		
			$sql = $db->prepare('INSERT INTO kullanicilar (sifre,email,adi,soyadi,tel,adres,ilce,il) VALUES (?,?,?,?,?,?,?,?)');
			$ekle = $sql->execute(array(
				
				$sifre,
				$posta,		
				$ad,
				$soyad,
				$cep_telefonu,
				$adres,
				$ilce,
				$sehir				
 
				));
			
	 		$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." .header("refresh:1;url=giris.html")  : $hata[2];
?>


