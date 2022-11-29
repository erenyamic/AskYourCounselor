-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 May 2022, 20:44:25
-- Sunucu sürümü: 10.5.15-MariaDB-cll-lve
-- PHP Sürümü: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `u990586664_danisman`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`Id`, `username`, `password`) VALUES
(1, 'omudanismaninasor', 'danismanomu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `danismanlar`
--

CREATE TABLE `danismanlar` (
  `Id` int(11) NOT NULL,
  `isim` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bolum` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'https://cryptoymc.com/danismaninasor/images/default-profile.jpg',
  `danismanId` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sifre` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `danismanlar`
--

INSERT INTO `danismanlar` (`Id`, `isim`, `bolum`, `resim`, `danismanId`, `sifre`) VALUES
(1, 'Mustafa Öcal', 'Muhasebe Bölümü', 'https://cryptoymc.com/danismaninasor/images/hoca1.jpg', 'mustafaocal', '1234'),
(2, 'Ali Tekgüler', 'Tarım Makineleri / Tarımsal Mekanizasyon', 'https://cryptoymc.com/danismaninasor/images/hoca2.jpg', 'alitekguler', '54321'),
(3, 'Kemal Özcan', 'Rehberlik ve Psikolojik Danışmanlık', 'https://cryptoymc.com/danismaninasor/images/hoca3.jpg', 'kemalozcan', '12345'),
(4, 'Zehra Akgün Fafanoğlu', 'İstatistik', 'https://cryptoymc.com/danismaninasor/images/hoca4.jpg', 'zehraakgun', '5432'),
(5, 'Rıza Altunay', 'Bilgisayar Bilimleri ve Mühendisliği', 'https://cryptoymc.com/danismaninasor/images/hoca5.jpg', 'rizaaltunay', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `danismansohbet`
--

CREATE TABLE `danismansohbet` (
  `Id` int(11) NOT NULL,
  `ogrmail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `danisman` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesaj` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarih` datetime DEFAULT current_timestamp(),
  `resim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'https://cryptoymc.com/danismaninasor/images/default-profile.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `Id` int(11) NOT NULL,
  `baslik` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icerik` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

CREATE TABLE `message` (
  `Id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mesaj` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarih` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`Id`, `email`, `mesaj`, `tarih`) VALUES
(2, '20480057@stu.omu.edu.tr', 'aaa', '2022-05-23 09:24:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarih` datetime DEFAULT current_timestamp(),
  `resim` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'https://cryptoymc.com/danismaninasor/images/default-profile.jpg',
  `bio` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`Id`, `email`, `password`, `tarih`, `resim`, `bio`, `username`) VALUES
(4, 'qpifmqpsoiannyfqwx@kvhrw.com', 'dsquared1', '2022-05-23 09:19:46', 'https://cryptoymc.com/danismaninasor/images/2.jpg', 'Öğrenci', 'Emre Kahraman'),
(5, '20480057@stu.omu.edu.tr', '12345', '2022-05-23 09:19:46', 'https://cryptoymc.com/danismaninasor/images/insta.png', 'Ben Eren Yamiç', 'omüEren'),
(6, '20480069@stu.omu.edu.tr', '123456', '2022-05-23 09:19:46', 'https://cryptoymc.com/danismaninasor/images/Logo_Mockup_79.png', 'Pratik Tasarımcı ', 'Pratik Tasarımcı'),
(7, 'erenyamic@gmail.com', '54321', '2022-05-23 13:19:04', 'https://cryptoymc.com/danismaninasor/images/ben.png', 'Benim adım eren.', 'Eren');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `danismanlar`
--
ALTER TABLE `danismanlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `danismansohbet`
--
ALTER TABLE `danismansohbet`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `danismanlar`
--
ALTER TABLE `danismanlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `danismansohbet`
--
ALTER TABLE `danismansohbet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `message`
--
ALTER TABLE `message`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
