<?php

  session_start();
try{
		        $db = new PDO('mysql:host=localhost;dbname=satis;charset=utf8','root','');
			}catch(PDOException $e){
				echo 'Hata: '.$e->getMessage();
			}
if($_POST)
{	
	if("Sil"==$_POST['islem'])
	{
			$query = $db->prepare("DELETE FROM ilan WHERE id = :id");
			$delete = $query->execute(array(
			'id' => $_POST['secilen']
		));
		if($delete){
			echo "Silme İşlemi Başarılı. Panele Yönlendiriliyorusnuz";
			header("refresh:1;url=panel.php"); 		
		}			
		else{
			echo"Silme İşlemi Tamamlanamadı";
			header("refresh:1;url=ilanlarim.php");
		} 			
	}
	else if(("Düzenle"==$_POST['islem']))
	{   $_SESSION["id"]=$_POST['secilen'];
		header("refresh:1;url=duzenle.php"); 
		echo"Düzenleme İşlemi Başlıyor";
	}
	else
	{
		echo"Herhangi Bir İşlem Seçmediniz ";
	}
}
else{
	echo"Post Başarısız";
}

?>