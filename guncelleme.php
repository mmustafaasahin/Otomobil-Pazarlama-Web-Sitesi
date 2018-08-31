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
		 
			$query = $db->prepare("UPDATE ilan SET
			baslik=:yenibaslik,
			marka=:yenimarka,
			model=:yenimodel,
			modelyili=:yenimodelyili,
			km=:yenikm,
			silindirhacmi=:yenisilindirhacmi,
			motorgucu=:yenimotorgucu,
			fiyat=:yenifiyat,
			turu=:yenituru,
			yakit=:yeniyakit,
			kasatipi=:yenikasatipi,
			vites=:yenivites,
			hasardurumu=:yenihasardurumu,
			renk=:yenirenk,
			kapisayisi=:yenikapisayisi,
			aciklama=:yeniaciklama,
			vergi=:yenivergi,
			maxhiz=:yenimaxhiz,
			ortalamayakit=:yeniortalamayakit,
			tork=:yenitork,
			hizlanma=:yenihizlanma,
			resim=:yeniresim
		    WHERE id = :sart";);
			$update = $query->execute(array(
			"yenibaslik" => $_POST['baslik'],
			"yenimarka" => $_POST['marka'],
			"yenimodel" => $_POST['model'],
			"yenimodelyili" => $_POST['modelyili1'],
			"yenikm" => $_POST['km1'],
			"yenisilindirhacmi" => $_POST['silindirhacmi1'],
			"yenimotorgucu" => $_POST['motorgucu1'],
			"yenifiyat" => $_POST['fiyat1'],
			"yenituru" => $_POST['kullanim'],
			"yeniyakit" => $_POST['yakit'],
			"yenikasatipi" => $_POST['kasa_tipi'],
			"yenivites" => $_POST['vites'],
			"yenihasardurumu" => $_POST['hasar_durumu'],
			"yenirenk" => $_POST['renk'],
			"yenikapisayisi" => $_POST['kapi_sayisi'],
			"yeniaciklama" => $_POST['aciklama'],
			"yenivergi" => $_POST['vergi'],
			"yenimaxhiz" => $_POST['mhiz'],
			"yeniortalamayakit" => $_POST['oyakit'],
			"yenitork" => $_POST['tork'],
			"yenihizlanma" => $_POST['hizlanma'],
			"yeniresim"=>$file_name,
			"sart" => $_SESSION["id"]
			));
			
			if ($update ){
			echo empty($hata[2]) ?  "Başarılı Bir Şekilde Çalıştı." .header("refresh:1;url=ilanlarim.php")  : $hata[2];
}
      }else{
         print_r($errors);
      }
   
			
			
			/*
*/		
?>


