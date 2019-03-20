-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 04:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apoline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `coba`
--

CREATE TABLE `coba` (
  `id_image` int(11) NOT NULL,
  `nama_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coba`
--

INSERT INTO `coba` (`id_image`, `nama_image`) VALUES
(1, 'apotekk.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `nama`, `email`, `alamat`, `foto`) VALUES
('asu', 'asu', 'asu', 'asu@gmail.com', 'asuu', ''),
('asuuuuuuuu', 'asu', 'asu', 'asu@gmail.com', 'asuususususususu', ''),
('ipengramadhan', 'irvan123', 'Raden Muhamad Irvan R', 'ipengramadhan@gmail.com', 'Bandung, Telkom Univerisity', ''),
('septyanind', 'septyan', 'Septyan Indra Bayu', 'septyanindrab@gmail.com', 'Bandung, Telkom Univerisity', '');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(3) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(400) NOT NULL,
  `cara` varchar(200) NOT NULL,
  `efek` varchar(200) NOT NULL,
  `penyajian` varchar(200) NOT NULL,
  `indikasi` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `harga`, `keterangan`, `cara`, `efek`, `penyajian`, `indikasi`, `image`) VALUES
(1, 'Panadol Biru', 5000, 'Panadol Biru merupakan salah satu obat yang sering digunakan sebagai obat pereda sakit kepala. Tidak hanya itu saja, obat ini juga dapat digunakan sebagai obat pereda nyeri otot dan nyeri ringan lainnya serta sebagai obat penurun demam.', 'Dewasa : 3-4 x sehari 1 tablet, maksimal 8 tablet sehari. 7-12 th : 3-4 x sehari 1/2-1 tablet, maksimal 4 tablet sehari', 'dosis besar menyebapkan kerusakan hati', 'sesudah makan', 'untuk meringankan sakit kepala dan sakit gigi', 'biru.png'),
(3, 'Neozep', 2500, 'Neozep Forte digunakan sebagai obat pereda flu yang bekerja meredakan nyeri, menurunkan panas, menghilangkan hidung tersumbat, dan memiliki efek antihistamin untuk menghilangkan alergi.', 'dewasa : 3-4 kali sehari 1 tablet. anak-6-12 thn : 3-4 kali sehari 1/2 tablet', 'mengantuk, gangguan pencernaan , takikardia, aritmia, mulut kering , retensi urin, iritasi lambung, penggunaan dengan dosis besar dan jangka panjang menyebapkan kerusakan hati.', 'sesudah makan', 'meringankan gejala flu seperti demam,sakit kepala, hidung tersumbat dan bersin-bersin', 'neozep-forte-mandjur.png'),
(4, 'Sanmol Sirop', 20000, 'Sanmol sirop adalah obat yang digunakan sebagai penurun demam untuk segala usia dan pereda nyeri seperti  sakit kepala, sakit gigi dan nyeri ringan lainnya. Sanmol syrup mengandung paracetamol, obat yang memiliki aktivitas sebagai antipyretic sekaligus analgetic.', 'anak 9-12 tanun : 3-4 x sehari 15-20 mL, usia 6-9 tahun : 3-4 x sehari 10-15 mL, usia 2-6 tahun : 3-4 x sehari 5-10 mL, usia 1-2 tahun : 3-4 x sehari 5 mL', 'hematological, alergi kulit, reaksi alergi lain dan kerusakan hati untuk penggunaan jangka panjang.', 'sesudah makan', 'Meredakan nyeri termasuk sakit kepala, sakit gigi, demam yang menyertai flu dan setelah imunisasi', 'sanmol.jpg'),
(5, 'Diapet', 2500, 'Diapet adalah obat antidiare yang mengandung attapulgite dan merupakan obat yang digunakan untuk mengatasi diare. Obat ini bekerja dengan memperlambat aktivitas usus besar sehingga usus akan menyerap lebih banyak air dan tinja akan menjadi lebih padat. Sakit perut karena diare juga dapat dikurangi dengan obat ini.', 'Dewasa dan Anak : 2-3 x sehari 2 kapsul, untuk menyembuhkan diare yang akut : 2 x sehari 2 kapsul', '-', 'sesudah makan', 'Mengobati mencret dan memadatkan kembali faeces yang cair, mengatasi rasa mulas', 'DIAPET-600x600.jpg'),
(6, 'Komix (dus)', 35000, 'Komix Jeruk Nipis digunakan untuk membantu mengobati batuk, flu dan menghangatkan tenggorokan. Komix Jeruk Nipis mengandung Chlorpheniramine Maleate sehingga dapat menimbulkan kantuk. ', 'Dewasa: 3 x sehari 1-2 sachet; anak 6-12 thn: 3 x sehari 1 sachet', 'Mengantuk, gangguan pencernaan, mulut kering, retensi urin', 'sesudah makan', 'Untuk meredakan batuk', 'Komix Mabuk, Mabuk Komix, Komix Meningga-105.jpg'),
(7, 'Bodrex Tab', 7000, 'Bodrex mengandung parasetamol dan kofein yang dapat membantu meringankan sakit kepala, sakit gigi, dan menurunkan demam. ', '3-4 kali sehari 1-2 kaplet. Maksimal : 8 kaplet/24 jam. Tidak untuk anak <12 thn', 'Dosis besar dapat menyebabkan kerusakan hati', 'Sesudah makan', 'meringankan sakit kepala, migren, demam, pusing ', 'bodrex.jpg'),
(8, 'Inza', 2000, 'Obat flu untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin.', 'Anak 6-12 tahun : 3 x sehari 1/2 tablet, dewasa :3 x sehari 1 tablet', 'mengantuk', 'setelah makan', 'meringankan gejala flu,bersin-bersin,hidung tersumbat,sakit kepala', 'inza.JPG'),
(9, 'Decolgen', 3000, 'obat untuk mengobati gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.', '3 x 1 tablet', 'mengantuk, ganguan pencernaan, insomnia, gelisah, eksitasi,tremor, takikardi,aritmia, mulut kering, sulit berkemih, penggunaan dosis besar dan jangka panjang menyebabkan kerusakan hati.', 'sesudah makan', 'meredakan gejala flu : sakit kepala, demam, bersin-bersin dan hidung tersumbat', 'decolgen.JPG'),
(10, 'Sangobion', 14000, 'Sangobion adalah vitamin dan zat besi penambah darah untuk mengatasi anemia (kurang darah) karena kekurangan zat besi dan mineral lain.', '1 kapsul sehari pada waktu atau sesudah makan. Dapat dikonsumsi mulai dari 3 hari sebelum dan selama periode menstruasi', 'nyeri lambung, muntah, konstipasi, diare, kolik', 'Dapat dikonsumsi mulai dari 3 hari sebelum dan selama periode menstruasi', 'anemia karena kekurangan zat besi dan mineral lain yang membantu pembentukan darah', 'sangobion.jpg'),
(11, 'Neurobion', 35000, 'Neurobion merupakan tablet vitamin neurotropik yang berkhasiat untuk membantu mengobati penyakit akibat kekurangan vitamin B1, B6, dan B12 seperti beri-beri dan polineuritis.', '1 tablet sehari sesudah makan. Dalam keadaan tertentu dosis dapat ditingkatkan sesuai petunjuk dokter', '-', 'sesudah makan', 'pencegahan dan pengobatan penyakit karena kekurangan vitamin b1, b6, b12 seperti beri-beri, neuritis perifer, neuralgia', 'neurobion forte.jpg'),
(12, 'Actifed Hijau', 20000, 'obat yang di indikasikan untuk meringankan pilek dan batuk berdahak.', 'dws & anak > 12 thn 3 x sehari 2 sdt (10 ml). Anak 6-12 thn 3x sehari 1 sdt (5 ml). Anak 2-6 thn 3x sehari 1/2 sdt (2.5 ml)', 'mengantuk, gangguan tidur, ruam kulit, kekeringan pada mulut, hidung dan tenggorokan. Kadang retensi urin', 'Sesudah makan', 'meringankan gejala pilek dan bersin yang disertai batuk berdahak', 'actifed h.jpg'),
(13, 'Vermox', 22000, 'membasmi cacing dalam tubuh', '', '', '', '', 'vermox.jpg'),
(14, 'Fitkom Anggur', 17000, 'memenuhi kebutuhan vitamin dan mineral pada anak anak usia pertumbuhan dengan rasa anggur', '3x sehari 1 tablet hisap', '-', 'setelah makan', 'memenuhi kebutuhan vitamin dan mineral pada anak usia pertumbuhan, membantu memelihara kesehatan anak, membantu memulihkan kondisi tubuh sehabis sakit', 'fitkom.jpg'),
(15, 'Panadol Sirup', 26000, 'Sirup untuk nyeri, demam atau pusing dengan rasa strawberry yang manis dan disukai anak-anak', 'Dewasa : 3-4 x sehari 15-30ml, maksimal 120 mL sehari. 7-12 th : 3-4 kali sehari 10ml. 4-6 th : 3-4 kali sehari 5ml. 1-3 th : 3-4 kali 2.5-5ml. 6-12 bln :3-4 x sehari 2.5ml', 'dosis besar menyebapkan kerusakan hati', 'sesudah makan', 'untuk meringankan sakit kepala dan sakit gigi', 'panadol sirup.jpg'),
(16, 'Alloris Sirup', 71000, 'Alloris sirup merupakan antihistamin atau anti alergi yang dikemas dalam sediaan sirup, dapat diberikan untuk anak-anak maupun orang dewasa. Alloris syrup dapat dibeli dengan disertai resep dokter ', 'Dewasa dan Anak > 12 tahun : 10 ml perhari ( 2 sendok takar ); Anak 2-12 tahun dengan BB > 30 kg : 2 sendok takar per hari; Anak dengan BB < 30 kg : 1 sendok takar per hari', 'Rasa lelah, sakit kepala, mulut kering, gangguan lambung, mengantuk', 'sesudah makan', 'rinitis alergi, urtikaria kronik, alergi kulit', 'alloris.jpg'),
(17, 'OBH Kombi Apel', 13500, 'Obat batuk pilek dan demam untuk anak dengan rasa apel yang disukai anak-anak.', 'Umur 2-5 thn : 3 x sehari 1 sendok takar (@ 5 ml)', 'Mengantuk', 'sesudah makan', 'Meredakan batuk yang disertai gejala-gejala flu pada anak seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin', 'obh apel.jpg'),
(18, 'Protecal Solid', 4000, 'Suplemen yang bermanfaat bagi tumbuh kembang anak dan wanita pada masa kehamilan dan menyusui, memulihkan kondisi tubuh setelah sakit, membantu proses penyembuhan luka serta memenuhi kebutuhan vitamin C dan kalsium.', '1-2 tablet perhari', '-', 'Larutkan dalam 200ml air, diminum sampai habis', 'Bermanfaat bagi tumbuh kembang anak dan wanita pada masa kehamilan dan menyusui; mengembalikan dan menjaga kondisi tubuh setelah sakit, operasi, atau lansia;', 'protecal.jpg'),
(19, 'CTM', 2500, 'Antihistamin yang banyak digunakan untuk mengobati keadaan-keadaan alergi', 'Sesuai petunjuk dokter atau : Dewasa 3-4 kali/hari 1/2-1 tablet, Anak 3-4 kali/hari 1/4-1/2 tablet', 'Mengantuk', 'Dapat diberikan bersama atau tanpa makanan', 'pilek, urticaria (gatal-gatal atau biduran), seasonal hayfever, rhinitis, penyakit serum, pengaruh pemakaian obat-obatan seperti sulfa atau penicillin.', 'ctm.jpg'),
(20, 'Konidin Tablet', 2500, 'Dalam 1 tablet konidin mengandung guaifenesin, dextromethorphan Hbr, dan CTM. Cocok untuk batuk kering.', 'dewasa dan anak-anak > 12 tahun: 3 x sehari 1-2 tablet; anak-anak 6-12 tahun: 3 x sehari 1/2-1 tablet; anak-anak 3-6 tahun: 3 x sehari 1/4-1/2 tablet', 'setelah makan ', 'mengantuk, letih, gangguan pencernaan', 'Untuk mengatasi batuk karena alergi, flu, pilek, atau sisa-sisa bronkitis', 'konidin.jpg'),
(21, 'Paratusin', 12500, 'sebagai analgetik antipeiretik,antitusif, antihistamin, dan dekongestan hidung.', '> 12 th : 3 x sehari 1 tablet, 6-12 th : 3 x sehari 1/2 tablet', 'mengantuk, ganguan pencernaan, insomnia, gelisah, eksitasi,tremor, takikardi,aritmia, mulut kering, sulit berkemih, penggunaan dosis besar dan jangka panjang menyebabkan kerusakan hati.', 'sesudah makan', 'untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin bersin disertai batuk.', 'paratusin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `coba`
--
ALTER TABLE `coba`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coba`
--
ALTER TABLE `coba`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
