<?php
session_start();

@$db_host = "localhost";  
@$db_adi = "tablo_deneme";   
@$db_kullanici = "root";      		
@$db_sifre = "";       			
$baglanti = mysql_connect($db_host,$db_kullanici,@$db_sifre);
mysql_query("SET NAMES 'utf8'"); 
	mysql_query('SET CHARACTER SET utf8'); 
	mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
if ($baglanti or die('Mysql Bağlantisi Başarisiz !' . " - " .mysql_error() ) )
{

$dbsec = mysql_select_db($db_adi,$baglanti);
if ($dbsec or die('VeriTabanina Baglanilamadi!'. " - " .mysql_error() ) ){}
}


?>