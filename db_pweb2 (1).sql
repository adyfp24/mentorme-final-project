-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Des 2023 pada 12.51
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pweb2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(50) NOT NULL,
  `username_admin` varchar(150) NOT NULL,
  `password_admin` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(3, 'admin', 'testing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(50) NOT NULL,
  `request_topik` varchar(255) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_mentor` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(50) NOT NULL,
  `id_booking` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(11) NOT NULL,
  `nama_mentor` varchar(150) NOT NULL,
  `hasil_penelitian` varchar(150) NOT NULL,
  `minat_penelitian` varchar(150) NOT NULL,
  `fee` varchar(150) NOT NULL,
  `jadwal` varchar(150) NOT NULL,
  `pendidikan` varchar(150) NOT NULL,
  `sertifikasi` varchar(150) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `tempat` varchar(150) NOT NULL,
  `spesialisasi` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `hasil_penelitian`, `minat_penelitian`, `fee`, `jadwal`, `pendidikan`, `sertifikasi`, `deskripsi`, `tempat`, `spesialisasi`, `judul`) VALUES
(78, 'Dr. Irfan Harsono S.E., M.Ec.', '1. Economic Policy Analysis\r\n2. Financial Economics', 'Ekonomi, Ekonomi Keuangan', 'Rp. 100.000', '15 September 2024, 14.00-15.30', 'S1-Ekonomi, Universitas Indonesia, Master of Economics, London School of Economics', 'Certified Financial Analyst (CFA)', 'Analyzing economic policies and financial trends is my expertise. Let me guide you through the intricate world of economics.', 'https://meet.google.com/wwm-eghj-mbt', 'Ekonomi, Ekonomi Keuangan', 'Navigating Economic Landscapes: From Policies to Markets'),
(79, 'Prof. Dian Novita S.Si., M.Sc., Ph.D.', '1. Environmental Science Research\r\n2. Climate Change Studies', 'Ilmu Lingkungan, Studi Perubahan Iklim', 'Rp. 110.000', '20 September 2024, 09.30-11.00', 'S1-Ilmu Lingkungan, Universitas Gadjah Mada, Master of Science in Environmental Science, Stanford University', 'Ph.D. in Climate Science, Massachusetts Institute of Technology', 'Diving deep into environmental science and climate change. Join me in exploring the impact of human activities on our planet.', 'https://meet.google.com/wwm-eghj-mbt', 'Ilmu Lingkungan, Studi Perubahan Iklim', 'Understanding Earth: From Ecosystems to Climate Dynamics'),
(80, 'Dr. Susilo Wibowo S.Psi., M.Si.', '1. Psychology of Learning\r\n2. Educational Psychology', 'Psikologi, Psikologi Pendidikan', 'Rp. 90.000', '25 September 2024, 13.00-14.30', 'S1-Psikologi, Universitas Indonesia, Master of Science in Psychology, University of California, Berkeley', 'Licensed Psychologist', 'Specializing in the psychology of learning and educational psychology. Let me assist you in understanding the intricacies of human cognition.', 'https://meet.google.com/wwm-eghj-mbt', 'Psikologi, Psikologi Pendidikan', 'Unraveling Minds: Learning and Education Perspectives'),
(81, 'Prof. Agus Setiawan S.Sos., M.A.', '1. Political Science Research\r\n2. International Relations', 'Ilmu Politik, Hubungan Internasional', 'Rp. 95.000', '5 Oktober 2024, 15.30-17.00', 'S1-Ilmu Politik, Universitas Indonesia, Master of Arts in International Relations, Johns Hopkins University', 'Certified International Relations Analyst', 'Engaging in political science research and international relations. Join me in exploring the dynamics of global politics.', 'https://meet.google.com/wwm-eghj-mbt', 'Ilmu Politik, Hubungan Internasional', 'Global Perspectives: Political Dynamics and International Relations'),
(82, 'Dr. Retno Astuti S.Si., M.T.', '1. Material Science Innovations\r\n2. Nanotechnology Applications', 'Ilmu Material, Aplikasi Nanoteknologi', 'Rp. 85.000', '10 Oktober 2024, 10.00-11.30', 'S1-Ilmu Material, Institut Teknologi Bandung, Master of Technology in Materials Science, National University of Singapore', 'Ph.D. in Nanotechnology, Stanford University', 'Pioneering advancements in material science and exploring applications of nanotechnology. Let me guide you through the world of innovative materials.', 'https://meet.google.com/wwm-eghj-mbt', 'Ilmu Material, Aplikasi Nanoteknologi', 'Revolutionizing Materials: From Macro to Nano'),
(83, 'Prof. Ika Pratiwi S.Sos., M.I.P.', '1. Urban Planning and Design\r\n2. Sustainable Development', 'Perencanaan Kota dan Desain, Pembangunan Berkelanjutan', 'Rp. 105.000', '15 Oktober 2024, 14.30-16.00', 'S1-Perencanaan Wilayah dan Kota, Universitas Gadjah Mada, Master of International Planning, University of Southern California', 'Certified Urban Planner', 'Expert in urban planning and sustainable development. Join me in creating future-ready urban spaces.', 'https://meet.google.com/wwm-eghj-mbt', 'Perencanaan Kota dan Desain, Pembangunan Berkelanjutan', 'Shaping Cities for Tomorrow'),
(84, 'Dr. Putra Aditya S.T., M.S', '1. Mechanical Engineering Innovations2. Robotics and Automation', '0', 'Rp. 95.000', '20 Oktober 2024, 09.00-10.30', 'S1-Teknik Mesin, Institut Teknologi Sepuluh Nopember, Master of Science in Mechanical Engineering, Massachusetts Institute of Technology', 'Certified Robotics Engineer', 'Driving innovation in mechanical engineering and specializing in robotics and automation. Join me in the world of cutting-edge technology.', 'https://meet.google.com/wwm-eghj-mbt', 'Teknik Mesin, Inovasi Teknik Mesin', 'Innovations in Mechanical Engineering: A Robotics Perspective'),
(86, 'Dr. Dewi Cahyani S.Fil., M.A.', '1. Linguistics Research\r\n2. Language Teaching Methodologies', 'Linguistik, Riset Linguistik', 'Rp. 90.000', '30 Oktober 2024, 16.30-18.00', 'S1-Sastra Indonesia, Universitas Indonesia, Master of Arts in Linguistics, University of California, Berkeley', 'Certified Language Educator', 'Passionate about linguistics research and language teaching methodologies. Join me in exploring the beauty and diversity of languages.', 'https://meet.google.com/wwm-eghj-mbt', 'Linguistik, Riset Linguistik', 'Exploring Languages: From Structure to Pedagogy'),
(87, 'Prof. Ahmad Yani S.T., M.U.D.', '1. Architecture and Urban Design\r\n2. Cultural Heritage Preservation', 'Arsitektur dan Desain Kota, Pelestarian Warisan Budaya', 'Rp. 100.000', '5 November 2024, 11.00-12.30', 'S1-Arsitektur, Institut Teknologi Bandung, Master of Urban Design, Harvard University', 'Certified Heritage Conservationist', 'Expertise in architecture and urban design with a focus on preserving cultural heritage. Explore the intersection of art and history with me.', 'https://meet.google.com/wwm-eghj-mbt', 'Arsitektur dan Desain Kota, Pelestarian Warisan Budaya', 'Architectural Narratives: Bridging Past and Present'),
(88, 'Dr. Ani Kartika S.E., M.M.', '1. Analisis Kebijakan Ekonomi\r\n2. Keuangan Perusahaan', 'Ekonomi, Keuangan', 'Rp. 85.000', '10 November 2024, 13.00-14.30', 'S1-Ekonomi, Universitas Indonesia, Magister Manajemen, INSEAD', 'Sastrawan tersertifikasi', 'Analisis kebijakan ekonomi dan keuangan perusahaan adalah keahlian saya. Mari bersama-sama memahami dinamika ekonomi global.', 'https://meet.google.com/wwm-eghj-mbt', 'Ekonomi, Keuangan', 'Perspektif Ekonomi: Dari Kebijakan hingga Perusahaan'),
(89, 'Prof. Lila Permadi S.Psi., M.A.', '1. Psikologi Kesehatan\r\n2. Konseling Pendidikan', 'Psikologi, Konseling Pendidikan', 'Rp. 95.000', '15 November 2024, 15.30-17.00', 'S1-Psikologi, Universitas Gadjah Mada, Master of Arts in Psychology, University of California, Berkeley', 'Psikolog Bersertifikasi', 'Spesialisasi dalam psikologi kesehatan dan konseling pendidikan. Mari bersama-sama menjelajahi kompleksitas kesehatan mental dan pendidikan.', 'https://meet.google.com/wwm-eghj-mbt', 'Psikologi, Konseling Pendidikan', 'Menembus Batas: Kesehatan Mental dan Pendidikan'),
(90, 'Dr. Indra Wijaya S.S., M.Hum.', '1. Linguistik Terapan\r\n2. Metode Pengajaran Bahasa', 'Linguistik, Metode Pengajaran Bahasa', 'Rp. 80.000', '20 November 2024, 09.00-10.30', 'S1-Bahasa dan Sastra Indonesia, Universitas Indonesia, Magister Humaniora, Universitas Gadjah Mada', 'Pengajar Bahasa Bersertifikasi', 'Minat penelitian saya melibatkan linguistik terapan dan metode pengajaran bahasa. Mari bersama-sama menjelajahi keindahan dan keragaman bahasa.', 'https://meet.google.com/wwm-eghj-mbt', 'Linguistik, Metode Pengajaran Bahasa', 'Eksplorasi Bahasa: Dari Struktur ke Pedagogi'),
(91, 'Dr. Fitri Rahmawati S.Farm., M.Sc.', '1. Inovasi Farmasi\r\n2. Pengembangan Obat', 'Farmasi, Pengembangan Obat', 'Rp. 100.000', '30 November 2024, 10.00-11.30', 'S1-Farmasi, Universitas Indonesia, Magister Sains Farmasi, University College London', 'Farmasis Bersertifikasi', 'Berpengalaman dalam inovasi farmasi dan pengembangan obat. Bergabunglah dengan saya untuk menjelajahi dunia obat-obatan yang inovatif.', 'https://meet.google.com/wwm-eghj-mbt', 'Farmasi, Pengembangan Obat', 'Menggagas Inovasi: Farmasi dan Pengembangan Obat'),
(92, 'Prof. Iwan Nugroho S.Kom., M.Cs., Ph.D.', '1. Sistem Informasi\r\n2. Pengembangan Perangkat Lunak', 'Sistem Informasi, Pengembangan Perangkat Lunak', 'Rp. 110.000', '5 Desember 2024, 13.00-14.30', 'S1-Informatika, Universitas Indonesia, Magister Ilmu Komputer, Universitas Gadjah Mada', 'Doktor di Sistem Informasi, Stanford University', 'Pakar dalam sistem informasi dan pengembangan perangkat lunak. Mari bersama-sama membangun solusi teknologi informasi yang inovatif.', 'https://meet.google.com/wwm-eghj-mbt', 'Sistem Informasi, Pengembangan Perangkat Lunak', 'Inovasi Digital: Sistem Informasi dan Perangkat Lunak'),
(93, 'Dr. Lina Novita S.Psi., M.Psi.', '1. Psikologi Klinis\r\n2. Kesehatan Mental', 'Psikologi, Kesehatan Mental', 'Rp. 95.000', '10 Desember 2024, 15.30-17.00', 'S1-Psikologi, Universitas Indonesia, Magister Psikologi Klinis, Universitas Gadjah Mada', 'Psikolog Klinis Bersertifikasi', 'Mengkaji psikologi klinis dan kesehatan mental. Temukan bersama saya pemahaman mendalam tentang kesehatan jiwa.', 'https://meet.google.com/wwm-eghj-mbt', 'Psikologi, Kesehatan Mental', 'Melihat Dalam: Psikologi Klinis dan Kesehatan Mental'),
(94, 'Prof. Andi Setiawan S.Si., M.Sc.', '1. Kimia Lingkungan\r\n2. Analisis Kimia', 'Kimia, Analisis Kimia', 'Rp. 85.000', '15 Desember 2024, 09.00-10.30', 'S1-Kimia, Universitas Gadjah Mada, Magister Sains Kimia, University of Sydney', 'Pakar Analisis Kimia', 'Meneliti kimia lingkungan dan analisis kimia. Bergabunglah dalam eksplorasi keindahan kimia di sekitar kita.', 'https://meet.google.com/wwm-eghj-mbt', 'Kimia, Analisis Kimia', 'Mengurai Molekul: Kimia Lingkungan dan Analisis Kimia'),
(95, 'Dr. Yudi Pranoto S.H., M.H.', '1. Hukum Bisnis\r\n2. Penelitian Hukum', 'Ilmu Hukum, Penelitian Hukum', 'Rp. 100.000', '20 Desember 2024, 14.30-16.00', 'S1-Hukum, Universitas Indonesia, Magister Hukum, Harvard Law School', 'Hakim Bersertifikat', 'Fokus pada hukum bisnis dan penelitian hukum. Mari kita eksplorasi dunia hukum bersama.', 'https://meet.google.com/wwm-eghj-mbt', 'Ilmu Hukum, Penelitian Hukum', 'Meretas Norma: Hukum Bisnis dan Penelitian Hukum'),
(96, 'Prof. Ari Wibowo S.Ag., M.A.', '1. Studi Agama\r\n2. Kajian Budaya', 'Studi Agama, Kajian Budaya', 'Rp. 90.000', '25 Desember 2024, 16.00-17.30', 'S1-Ilmu Agama, Universitas Gadjah Mada, Magister Kajian Budaya, University of Oxford', 'Ahli Studi Agama dan Budaya', 'Penelitian dalam studi agama dan kajian budaya. Mari bersama-sama mendalami warisan budaya dan spiritualitas.', 'https://meet.google.com/wwm-eghj-mbt', 'Studi Agama, Kajian Budaya', 'Melintasi Keyakinan: Studi Agama dan Kajian Budaya'),
(97, 'Prof. Andi Wijaya S.Si., M.Sc., Ph.D.', '1. Kimia Organik\r\n2. Biokimia', 'Kimia, Biokimia', 'Rp. 95.000', '5 Januari 2025, 15.30-17.00', 'S1-Kimia, Institut Teknologi Bandung, Magister Sains Kimia, University of Sydney', 'Doktor di Kimia Organik, University of Cambridge', 'Pakar dalam kimia organik dan biokimia. Mari bersama-sama menjelajahi struktur molekuler yang kompleks.', 'https://meet.google.com/wwm-eghj-mbt', 'Kimia, Biokimia', 'Melihat Lebih Dalam: Kimia Organik dan Biokimia'),
(98, 'zein', 'v', 'zein', 'zein', 'zein', 'zein', 'zein', 'zein', 'zein', 'zein', 'zein'),
(99, 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ', 'lorem ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor` varchar(150) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `nomor`, `gambar`) VALUES
(2, 'coba', '123', 'coba@gmail.com', '089999999', '11.png'),
(21, 'userbaru', '123', 'a@aa', '111111', NULL),
(22, 'ady', 'testing', 'a@a', '111', '14.png'),
(23, 'ave', '123', 'a@aa', '22', '18.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_mentor` (`id_mentor`),
  ADD KEY `id_mentor_2` (`id_mentor`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_ibfk_1` (`id_booking`);

--
-- Indeks untuk tabel `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
