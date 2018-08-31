-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2017, 19:51:22
-- Sunucu sürümü: 10.1.22-MariaDB
-- PHP Sürümü: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `satis`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilan`
--

CREATE TABLE `ilan` (
  `id` int(11) NOT NULL,
  `kullanicieposta` varchar(50) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `marka` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `modelyili` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `silindirhacmi` varchar(15) NOT NULL,
  `motorgucu` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `turu` varchar(50) NOT NULL,
  `yakit` varchar(50) NOT NULL,
  `kasatipi` varchar(50) NOT NULL,
  `vites` varchar(20) NOT NULL,
  `hasardurumu` varchar(50) NOT NULL,
  `renk` varchar(50) NOT NULL,
  `kapisayisi` varchar(50) NOT NULL,
  `aciklama` varchar(255) NOT NULL,
  `vergi` varchar(50) NOT NULL,
  `maxhiz` varchar(50) NOT NULL,
  `ortalamayakit` varchar(50) NOT NULL,
  `tork` varchar(50) NOT NULL,
  `hizlanma` varchar(50) NOT NULL,
  `tipi` varchar(50) NOT NULL,
  `resim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ilan`
--

INSERT INTO `ilan` (`id`, `kullanicieposta`, `baslik`, `marka`, `model`, `modelyili`, `km`, `silindirhacmi`, `motorgucu`, `fiyat`, `turu`, `yakit`, `kasatipi`, `vites`, `hasardurumu`, `renk`, `kapisayisi`, `aciklama`, `vergi`, `maxhiz`, `ortalamayakit`, `tork`, `hizlanma`, `tipi`, `resim`) VALUES
(4, 'akocc@gmail.com', 'Satilik Renaul Megane Sedan 2017', 'Renault', 'megane', 2016, 1500, '1500', 110, 123000, 'İkinci El', 'Dizel', 'Sedan', 'Düz', 'Hasarsız', 'Siyah', '5 Kapı(4 Kapılı Araç)', 'temiz araz   ', '260', '196', '7,6', '260', '8,9', 'otomobil', 'megane22.jpg'),
(10, 'akocc41@gmail.com', 'Temiz Audi A5', 'Audi', 'A5', 2015, 5600, '2000', 184, 165800, 'İkinci El', 'Benzin', 'Suv', 'Düz', 'Hasarsız', 'Kırmızı', '3 Kapı(2 Kapılı Araç)', 'Sahibinden TEmiz Kullanılmış ', '1600', '260', '12,0', '320', '6,5', 'otomobil', '2015.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `sifre` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `adi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `soyadi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `tel` varchar(50) CHARACTER SET utf8 NOT NULL,
  `adres` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ilce` varchar(50) CHARACTER SET utf8 NOT NULL,
  `il` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `sifre`, `email`, `adi`, `soyadi`, `tel`, `adres`, `ilce`, `il`) VALUES
(1, 'ahmetkoc', 'akocc@gmail.com', 'ahmet', 'Koç', '5466829674', 'mevlana mah', 'gebze', 'Kocaeli'),
(3, 'AHMETKOC', 'akocc41@gmail.com', 'AHMET', 'KOÇ', '05466829674', 'MEVLAN', 'Tuzla', 'İstanbul'),
(4, '', '', '', '', '', '', '', 'Seçiniz');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilan`
--
ALTER TABLE `ilan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ilan`
--
ALTER TABLE `ilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
