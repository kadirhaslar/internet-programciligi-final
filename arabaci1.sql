-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2023, 14:49:25
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `arabaci1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE `arac` (
  `arac_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arac_yil` date NOT NULL,
  `arac_yas` int(20) NOT NULL,
  `arac_km` bigint(8) NOT NULL,
  `arac_tür` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arac_tip` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arac_model` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `arac_id` int(11) NOT NULL,
  `resim_ad` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `arac`
--

INSERT INTO `arac` (`arac_adi`, `arac_yil`, `arac_yas`, `arac_km`, `arac_tür`, `arac_tip`, `arac_model`, `arac_id`, `resim_ad`) VALUES
('Mercedes EQ / EQE', '2022-01-01', 1, 13212, 'elektrikli', 'sedan', 'EQ', 1, ''),
('dsa', '2022-12-16', 54, 564, 'hf', 'jfj', 'jhfj', 2, ''),
('Mercedes CLA180', '0000-00-00', 0, 45, 'benzinli', 'sedan', 'CLA', 3, ''),
('Mercedes CLA200', '0000-00-00', 0, 30, 'benzinli', 'sedan', 'CLA', 4, ''),
('Mercedes E200', '0000-00-00', 0, 1000000, 'Benzin/Gaz', 'Sedan', 'E', 5, ''),
('Mercedes - Benz G AMG', '0000-00-00', 0, 10700, 'benzinli', 'SUV', 'G Serisi / AMG', 6, ''),
('Mercedes g62', '0000-00-00', 0, 12000, 'benzinli', 'sedan', 'g', 7, ''),
('das', '0000-00-00', 0, 123, 'dsa', 'dsa', 'dsa', 8, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aracresim`
--

CREATE TABLE `aracresim` (
  `resim_id` int(11) NOT NULL,
  `resim_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keyword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mesai` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_maps` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analistik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_zopim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_bakım` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keyword`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_ilce`, `ayar_il`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analistik`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_google`, `ayar_youtube`, `ayar_instagram`, `ayar_smtphost`, `user`, `password`, `ayar_smtpport`, `ayar_bakım`) VALUES
(0, '', 'DPU arabaci.ccom', 'DPU arabaci.com', 'sahibinden, kiralık, ikinci el', 'arabaci', '0534 700 84 29', '0534 700 84 28', '0850 534 8428', 'kadir.haslar@hotmail.com', 'merkez', 'meydan', 'Vazo', '7 x 24 açık arabacim.com', 'Meydan Mh. Malazgirt Sk. No:10 Merkez/Kütahya', '2224', '1', 'www.facebook.com', 'www.twitter.com', 'www.google.com', 'www.youtube.com', 'www.instagram.com', 'mail.arabacim.com', 'kadir12', 'Kadir1212.', '587', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkımızda`
--

CREATE TABLE `hakkımızda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_video` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkımızda`
--

INSERT INTO `hakkımızda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(0, 'arabaci.com', 'arabaci.com  ile ilgili içerik', 'video kodu', 'arabaci.com bişşiler', 'arabaci.com ile bişiler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_isim`, `kullanici_soyad`, `kullanici_mail`, `username`, `password`) VALUES
(8, '', '', '', 'root', '12345678'),
(13, 'kadir', 'mehmet', 'crayzboy_ceza-feat@hotlumail.com', 'root', '12345678'),
(14, '', '', '', '', ''),
(15, '', '', '', 'root', '12345678'),
(16, '', '', '', '', '12345678'),
(17, 'sabir', 'terzi', 'sabir.terzi_ceza-feat-sago_31@gmail.com', 'sabirterzi', 'sabir3131'),
(18, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `arac`
--
ALTER TABLE `arac`
  ADD PRIMARY KEY (`arac_id`);

--
-- Tablo için indeksler `aracresim`
--
ALTER TABLE `aracresim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkımızda`
--
ALTER TABLE `hakkımızda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `arac`
--
ALTER TABLE `arac`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `aracresim`
--
ALTER TABLE `aracresim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
