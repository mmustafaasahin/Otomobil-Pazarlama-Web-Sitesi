<?php
  session_start();
try{
		        $db = new PDO('mysql:host=localhost;dbname=satis;charset=utf8','root','');
			}catch(PDOException $e){
				echo 'Hata: '.$e->getMessage();
			}

      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
		 
			$kullaniciid =$_SESSION["kullanici_adi"];
			$baslik = $_POST['baslik'];
			$marka = $_POST['marka'];
			$model = $_POST['model'];
			$modelyili = $_POST['modelyili1'];
			$km = $_POST['km1'];
			$silindirhacmi = $_POST['silindirhacmi1'];
			$motorgucu = $_POST['motorgucu1'];
			$fiyat = $_POST['fiyat1'];
			$turu = $_POST['kullanim'];
			$yakit = $_POST['yakit'];
			$kasatipi = $_POST['kasa_tipi'];
			$vites = $_POST['vites'];
			$hasardurumu = $_POST['hasar_durumu'];
			$renk = $_POST['renk'];
			$kapisayisi = $_POST['kapi_sayisi'];
			$aciklama = $_POST['aciklama'];
			$vergi = $_POST['vergi'];
			$maxhiz = $_POST['mhiz'];
			$ortalamayakit = $_POST['oyakit'];
			$tork = $_POST['tork'];
			$hizlanma = $_POST['hizlanma'];
			$tipi ="otomobil";
			$resim =$file_name;
			
 
			$sql = $db->prepare('INSERT INTO ilan (kullanicieposta,baslik,marka,model,modelyili,km,silindirhacmi,motorgucu,fiyat,turu,yakit,kasatipi,vites,hasardurumu,renk,kapisayisi,aciklama,vergi,maxhiz,ortalamayakit,tork,hizlanma,tipi,resim) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
			$ekle = $sql->execute(array(
 
				$kullaniciid,
				$baslik,
				$marka,
				$model,
				$modelyili,
				$km,
				$silindirhacmi,
				$motorgucu,
				$fiyat,
				$turu,
				$yakit,
				$kasatipi,
				$vites,
				$hasardurumu,
				$renk,
				$kapisayisi,
				$aciklama,
				$vergi,
				$maxhiz,
				$ortalamayakit,
				$tork,
				$hizlanma,
				$tipi,
				$resim
				
 
				));
			
	 		$hata = $sql->errorInfo();
			echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." .header("refresh:1;url=ilanlarim.php")  : $hata[2];
      }else{
         print_r($errors);
      }
   

	        
?>


