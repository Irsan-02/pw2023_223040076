-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw23`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `ringkas_destinasi` text NOT NULL,
  `detail_destinasi` text NOT NULL,
  `gambar_destinasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `nama_destinasi`, `ringkas_destinasi`, `detail_destinasi`, `gambar_destinasi`) VALUES
(2, 'TOKYO', 'Tokyo Merupakan Ibu Kota Jepang dan Menjadi Pusat Wisata Turis.', '  Tokyo merupakan ibu kota dari Jepang dan memiliki banyak tempat wisata yang menarik. Kami akan memberikan beberapa rekomendasi tempat wisata yang harus di datangi oleh anda di Tokyo:\r\n\r\n 1. Kuil Senso-ji\r\n  Kuil Senso-ji adalah kuil Buddha tertua di Tokyo dan sekitar 30 juta orang pengunjung datang ke kuil ini sepanjang tahunnya. Kuil ini juga salah satu tempat wisata di Tokyo yang tidak boleh dilewatkan.\r\n\r\n 2. Tokyo Skytree\r\n  Tokyo Skytree merupakan menara siaran yang didirikan pada tahun 2012 dan sekarang menjadi tempat wisata yang sering di kunjungi oleh wisatawan. apabila cuaca sedang bagus, anda dapat melihat gunung tertinggi di Jepang yaitu Gunung Fuji.\r\n\r\n 3. Teater Kabukiza\r\n  Kabukiza merupakan tempat di mana anda bisa menyaksikan \"KABUKI\", yaitu salah satu hiburan tradisional Jepang dan juga terdapat jajaran toko oleh-oleh yang bisa Anda kunjungi.\r\n\r\n 4. Oedo Onsen Monogatari\r\n  Oedaiba adalah spot wisata pantai dengan angin laut yang menyejukkan. Selain itu, di sini juga terdapat beberapa taman hiburan, seperti \"Tokyo Joypolis\", \"LEGOLAND DISCOVERY CENTER Tokyo\", dan lain-lain yang bisa Anda dan keluarga nikmati seharian.\r\n\r\n 5.Roppongi Hills\r\n  Roppongi Hills terdapat sangat banyak toko, kafe, dan restoran trend. Selain itu, Anda bisa melihat pemandangan seluruh Kota Tokyo dari dek observasi \"Tokyo City View And Sky Deck, Roppongi Hills\" yang ada di lantai 52. Dari dek observasi gedung ini Anda juga bisa melihat 2 menara yang menjadi simbol Tokyo, yaitu \"Tokyo Skytree\" dan \"Tokyo Tower\". Pemandangan malam yang dilihat dari sini pun sangat menakjubkan.', 'tokyo.png'),
(4, 'KYOTO', 'Kyoto Dikenal Menjadi Pusat Kebudayaan dan Seni Jepang.', 'Kyoto memiliki beberapa situs bersejarah yang masuk ke dalam Situs Warisan Dunia. Sebelum kami memberikan rekomendasi tempat wisata di Kyoto Anda harus mengetahui iklimnya terlebih dahulu karena Kyoto dikelilingi oleh 3 pegunungan. Saat musim panas akan terasa panas dan lembab, rata-rata temperatur saat musim panas adalah 27 derajat celsius dan terkadang menjadi sangat panas dan bisa mencapai 38 derajat celcius. Sedangkan saat musim dingin biasanya memiliki temperatur 5 deajat celcius 5 derajat celcius. pada Bulan Januari cuacanya sangat dingin dan bisa mendekati suhu minus 2 derajat celcius. Nah, sekarang Anda sudah tau mengenai iklim di Kyoto. Sekarang kami akan memberikan beberapa rekomendasi tempat wisata yang harus di datangi oleh anda di Kyoto:\r\n\r\n1. Kuil Kinkakuji\r\n  Nama resmi dari kuil ini adalah Rokuonji. Kinkakuji dibangun pada tahun 1397 dan digunakan sebagai tempat tinggal shogun (jenderal perang) generasi ketiga, yaitu Ashikaga Yoshimitsu. Bagian interior dan eksterior aula pemujaan Buddha (Sansorokaku) pada kuil ini dilapisi dengan emas. Wisatawan akan dibuat terpukau dengan pantulan warna emas kuil yang terlihat dari danau di sekitarnya.\r\n\r\n2. Kuil Kiyomizudera\r\n  Kiyomizudera terkenal akan panggung kayu bernama “Jigokudome”, di mana wisatawan bisa menikmati pemandangan Kota Kyoto yang indah dari sini. Tidak hanya itu, di sekitar kuil ini juga terdapat mata air Otowa no Taki yang dipercaya dapat memberikan keberkahan dalam pendidikan, percintaan, dan umur panjang.\r\n\r\n3. Arashiyama\r\n  Arashiyama merupakan tempat wisata unggulan Kyoto yang memiliki banyak objek wisata, seperti pemandangan sakura dan momiji yang begitu indah. Di sekitar Jembatan Togetsukyo, terdapat banyak objek wisata, seperti Kuil Tenrinji dan Kuil Nonomiya yang dipercaya membawa keberkahan dalam rumah tangga.\r\n\r\n      4. Kuil Tenryuji\r\n      Kuil Tenryuji merupakan kuil Zen yang berada di Arashiyama. Taman di sekitar kuil yang dibuat oleh biksu zen Muso Soseki ditetapkan sebagai situs bersejarah pertama dengan pemandangan spesial di Jepang. Objek wisata lainnya yang tak boleh terlewatkan adalah lukisan naga awan di langit-langit aula kuil.\r\n\r\n5.Kuil Fushimi Inari Taisha\r\n  Kuil Fushimi Inari merupakan pusat dari sekitar 30.000 kuil Inari (Oinari-san) yang ada di seluruh Jepang. Sejak tahun 711 sampai hari ini, kuil ini dipercaya dapat memberi keberkahan dalam bidang pertanian maupun bisnis. Bagian kuil yang paling populer di kalangan wisatawan adalah Senbon Torii (ribuan gerbang torii berwarna merah vermilion).', 'kyoto.png'),
(5, 'OSAKA', 'Osaka Dikenal Karena Wisata Air, Taman Bertema, dan Kulinernya.', 'Osaka adalah pusat bisnis Jepang. Osaka juga salah satu kota tujuan wisata yang terkenal di Jepang. Selain untuk belanja dan liburan, berwisata ke kota yang dikenal ramah ini juga bisa menambah pengetahuan.\r\n\r\n  1. Dotonbori\r\nDotonbori adalah salah satu tujuan wisata Osaka yang paling terkenal. Apa yang terkenal dari tempat ini adalah deretan billboard-billboard raksasanya. Misalnya pelari yang mengangkat kedua tangan lambang dari Glico sang pembuat camilan, lalu patung kepiting bergerak dan billboard-billboard lainnya yang fotogenic.\r\n\r\n  2. Universal Studio Japan (USJ)\r\nUniversal Studio Japan adalah taman hiburan di mana Anda bisa menikmati wahana-wahana yang kontennya fokus ke film-film Hollywood. Atraksi-atraksi yang mewujudkan film-film seperti Jaws, Jurassic Park The Ride, serta yang belakangan ini dibuka, yaitu Wizarding World Of Harry Potter dan Minion Park ke dunia nyata ini sangat populer. Jangan lewatkan juga event-event yang bisa Anda ikuti.\r\n\r\n  3. Kaiyukan\r\nTempat ini adalah akuarium terbesar di dunia dengan kapasitas 5400 ton yang menjadi sorotan. Keistimewaannya adalah Anda bisa melihat sosok hiu paus raksasa yang berenang santai di antara jenis-jenis hiu lainnya. Dikombinasikan dengan bianglala Tempozan, tempat ini juga menjadi lokasi kencan favorit warga lokal.\r\n\r\n  4. Bianglala Tempozan\r\nTerletak di sebelah Kaiyukan, terdapat wisata Osaka lain yang terkenal, yaitu Bianglala Tempozan yang ada di dalam Desa Pelabuhan Tempozan. Ini adalah bianglala terbesar di Jepang yang tingginya kurang lebih 112,5 meter. Waktu yang diperlukan bianglala ini untuk 1 kali putaran adalah 15 menit jadi Anda bisa menikmati langit dengan santai.\r\n\r\n  5. Air Terjun Mino\r\nAir Terjun Raksasa Mino terpilih sebagai salah satu air terjun terbaik untuk menikmati musim gugur di antara 100 air terjun di Jepang. Saat musim gugur, warna khas momiji akan menambah keindahan waktu Anda sedang berjalan-jalan di sana.', 'osaka.jpg'),
(13, 'HOKKAIDO', 'Hokkaido Merupakan Daerah Terdingin di Jepang', 'Hokkaido merupakan daerah asal Suku Ainu dan juga daerah terdingin di Jepang. Oleh karena itu, bunga sakura mekar satu bulan lebih lambat dibandingkan dengan Tokyo. Di Hokkaido, Anda bisa menyaksikan pohon-pohon sakura di berbagai tempat terbuka yang luas.\r\n\r\n  1. Taman Moerenuma\r\nTaman Moerenuma adalah taman terbesar di Hokkaido yang terletak di Kota Sapporodengan luas sekitar 188 hektar. Bentuk gunung dan air mancur yang geometris serta adanya fasilitas bermain menjadi ciri khas dari Taman Moerenuma.\r\n\r\n  2. Menara Goryokaku\r\nMenara Gortyokaku adalah observatorium terkenal di Hokkaido. Dari tempat ini Anda bisa melihat Taman Goryokaku yang berbentuk seperti bintang. Di observatorium terdapat ruang pameran untuk mempelajari sejarah Goryokaku dan juga lantai tembus pandang yang bisa Anda gunakan untuk melihat ke lantai bawah. Restoran, kafe, dan kedai gelato (es krim Italia) pun tersedia disini sehingga Anda bisa menikmati pemandangan dengan nyaman.\r\n\r\n  3. Taman Matsume\r\nDi dalam Taman Matsumae berdiri Kastil Matsumae yang dikenal sebagai simbol Kota Matsumae dan merupakan tempat populer yang ditumbuhi pohon sakura. Kastil Matsumae juga disebut sebagai “Desa Bunga Sakura”. Alasannya, di sana terdapat bunga sakura yang beraneka ragam jenisnya. Pada saat musim semi, terdapat 10.000 pohon yang terdiri dari 250 jenis pohon bunga sakura mekar.\r\n\r\n  4. Gunung Tengu\r\nDi Gunung Tengu yang terkenal sebagai tiga pemandangan malam terindah Hokkaido, Anda dapat melihat \"Pohon Bunga Sakura Tengu\" yang berusia lebih dari 100 tahun di musim semi. Jika Anda melihatnya dari sudut yang tepat, bentuknya mungkin akan terlihat seperti hati. Dibalik pohon Sakura, terdapat pemandangan Kota Otaru yang tidak kalah indah.\r\n\r\n  5. Taman Asahiyama\r\nTaman Asahiyama adalah tempat yang cocok untuk menikmati berbagai macam musim, termasuk musim semi. Di taman ini terdapat lampu yang ditata secara khusus (light up) sehingga Anda akan dapat melihat daya tarik Sakura yang berbeda dari biasanya di malam hari. Karena lokasi Taman Asahiyama berdekatan dengan Kebun Binatang Asahiyama, inilah kesempatan bagus untuk berwisata ke dua tempat sekaligus dalam sekali jalan.', 'hokkaido.jpg'),
(15, 'HIROSHIMA', 'Hiroshima Merupakan Prefektur yang Ada Dalam Sejarah Dunia.', 'Hiroshima tidak hanya memiliki tempat wisata, tetapi pengunjung juga dapat mencoba pengalaman berbudaya yang hanya bisa dilakukan di sini. Hiroshima tidak hanya memiliki tempat wisata, tetapi pengunjung juga dapat mencoba pengalaman berbudaya yang hanya bisa dilakukan di sini.\r\n\r\n  1. Kuil Itsukushima\r\nKuil Itsukushima adalah kuil yang sangat populer dan merupakan kuil yang terdaftar sebagai salah saru warisan budaya dunia. Sejarah Kuil Itsukushima sudah ada sejak zaman dahulu, tetapi tatanannya menjadi seperti ini sejak abad ke-12. Kecantikan strukturnya yang misterius seperti mengapung di atas pantai menjadikan Kuil Itsukushima yang terletak di tengah Miyajima ini sebagai salah satu dari “3 pemandangan terindah di Jepang” sejak dulu.\r\n\r\n  2. Senjokaku\r\nNama formal dari Senjokaku adalah “Kuil Hokoku\". Kuil ini menjadi kuil Shinto karena adanya pemisahan kepercayaan Buddha dan Shinto pada zaman Meiji. Sejak saat itu, kuil ini dikenal sebagi Kuil Hokoku. Terdapat kuil kecil di dalam bangunan utama. Bagian langit-langitnya dihiasi dengan lukisan yang disenangi orang-orang pada zaman dulu.\r\n\r\n  3. Kuil Daishoin\r\nKuil Daishoin yang terletak di gunung yang terpisah dari Pantai Miyajima adalah kuil Buddha aliran Shingon (aliran yang eksis sejak zaman Heian). Kuil ini memiliki hubungan yang dalam dengan Kuil Itsukushima. Diatas Anda dapat melihat pemandangan pantai dan Kota Hiroshima yang terlihat dari area dalam Kuil Daishoin juga menjadi salah satu daya tarik kuil ini.\r\n\r\n  4. Monumen Perdamaian Hiroshima\r\nBangunan yang dikenal sebagai Monumen Perdamaian Hiroshima ini digunakan sebagai tempat pameran pada masa sebelum perang. bangunan ini ditetapkan sebagai salah satu warisan dunia yang dibuat untuk mengingatkan pada pentingnya perdamaian manusia. Sembari berjalan mengelilingi Taman Monumen Perdamaian Hiroshima yang luas di sekitar Monumen Perdamaian Hiroshima, pengunjung dapat melihat monumen yang dibuat dengan harapan untuk perdamaian.\r\n\r\n  5. Hiroshima Peace Memorial Museum\r\nDi Hiroshima Peace Memorial Museum pengunjung dapat melihat keadaan Hiroshima sebelum dan setelah dijatuhi bom atom, kronologi jatuhnya bom atom, dan dokumen-dokumen mengenai bagaimana efek yang ditimbulkan oleh bom atom terhadap kehidupan masyarakat Hiroshima. Siapapun pasti dapat merasakan harapan agar perdamaian dunia dapat tercapai dan tidak terjadi lagi ledakan bom atom untuk kedua kalinya.', 'hiroshima.jpg'),
(17, 'NAGOYA', 'Nagoya Merupakan Kota Terbesar Ke-3 di Jepang', '', 'nagoya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama_lengkap`, `username`, `email`, `no_telp`, `password`, `level`) VALUES
(2, 'Irsan Moch. Taufik Febrian', 'admin', 'irsan@gmail.com', '080706050403', '1234', 'admin'),
(3, 'Irsan Moch. Taufik Febrian', 'irsan', 'irsan1@gmail.com', '080706050402', '123', 'user'),
(11, 'Arya Saputra', 'arya', 'arya@gmail.com', '08007855646', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
