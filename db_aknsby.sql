-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2022 pada 08.48
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aknsby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nama_agenda` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `nama_agenda`, `deskripsi`, `mulai`, `selesai`, `tempat`, `waktu`, `keterangan`, `gambar`, `author`) VALUES
(1, 'Pelatihan management PDDIKTI', 'kjsabdkjahdakjiudiahd', '2022-06-01', '2022-06-03', 'Solo', '15:00:00', 'bjhbasjhbjhabxbxsbjab xhasbxajxhbj xxasbxahxbax xbxax ', 'b.jpeg', 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_konten` varchar(3000) NOT NULL,
  `tipe_tulisan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `meta_keyword` varchar(100) NOT NULL,
  `meta_deskripsi` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `status_tulisan` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `upadate_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `id_kategori`, `isi_konten`, `tipe_tulisan`, `gambar`, `judul`, `meta_keyword`, `meta_deskripsi`, `author`, `status_tulisan`, `date_created`, `upadate_created`) VALUES
(1, 1, '<p>Aulia Saputri, Informatika Universitas Teknologi Yogyakarta. Lulusan SMK Glibal Insan Tangerang. Alamat jogja ada di ds.sendangadi Jombor. untuk no.telp 0895343844277</p>\n', 'Artikel', 'Untitled_design_(11).png', 'Halo', '1', '1', '', 'Publish', 1654654278, 0),
(2, 2, '<p>Aulia Saputri, Informatika Universitas Teknologi Yogyakarta. Lulusan SMK Glibal Insan Tangerang. Alamat jogja ada di ds.sendangadi Jombor. untuk no.telp 0895343844277</p>\n', 'Artikel', 'Untitled_design_(9).png', 'Artikel 2', '1', '1', '', 'Pending', 1654654585, 0),
(4, 3, '<p>Harini ini ... adalah hari senin, hari yang sangat ramai dan macet, sangat membosankan untuk berangkat kesekolah, heheheh</p>\n', 'Artikel', 'WhatsApp_Image_2020-03-23_at_18_41_21.jpeg', 'Artikel ', '1', '1', '', 'Publish', 1655689648, 0),
(5, 2, '<p>Hari ini adalah hari senin, hari dimana sekolah untuk pertama kali sampai hai minggu dan melakukan libur>/p>', 'Artikel', 'GAJE.png', 'Artikel 4', '1', '1', 'Administrator', 'Publish', 1656297437, 0),
(6, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', 'cats_PNG1.jpg', 'Artikel lIA', '1', '1', 'Administrator', 'Publish', 1656297437, 1657511511),
(7, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', 'jhj.png', ' Menghalau Narkoba', '1', '1', 'Administrator', 'Publish', 1656921759, 1657529321),
(8, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', '2d22f9fd24c5de552a9e7c20ba8532c0.png', 'Apa lagi', '1', '1', 'Administrator', 'Publish', 1657511620, 1657511663),
(9, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', 'cats_PNG1.jpg', 'Artikel lIA', '1', '1', 'Administrator', 'Publish', 1656297437, 1657609034),
(10, 3, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', 'WhatsApp_Image_2020-03-23_at_18_41_21.jpeg', 'Artikel ', '1', '1', '', 'Publish', 1655689648, 1657609025),
(11, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', 'Artikel', 'pmb1.jpeg', 'Halo Ges', '1', '1', '', 'Publish', 1654654278, 1657609210),
(14, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', 'Artikel', 'pmb1.jpeg', 'Artikel', '1', '1', 'Administrator', 'Publish', 1657606804, 1657609245),
(15, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', 'Artikel', 'pmb1.jpeg', 'Lorem Ipsum ', '1', '1', 'Administrator', 'Publish', 1657607190, 1657609255);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `isi_konten` varchar(3000) NOT NULL,
  `tipe_tulisan` varchar(60) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `meta_keyword` varchar(128) NOT NULL,
  `meta_deskripsi` varchar(128) NOT NULL,
  `author` varchar(60) NOT NULL,
  `status_tulisan` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `update_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `isi_konten`, `tipe_tulisan`, `gambar`, `judul`, `meta_keyword`, `meta_deskripsi`, `author`, `status_tulisan`, `date_created`, `update_create`) VALUES
(5, 1, '<p>Yogyakarta, AKNSB- Perguruan Tinggi Akademi Komunitas Negeri Seni dan Budaya Yogyakarta , melalui Program studi Tari mengirimkan mahasiswanya untuk tampil dalam pagelaran tari Topeng sekar taji kembar, Tari golek ayun ayun dan wayang golek. Di Pendopo timur, musium kesenian Sonobudoyo Yogyakarta, jum&#39;at malam, 25/2. Dalam pagelaran seni tari yang di mulai pada pukul 20.00 wib tersebut menampilkan beberapa babak tarian dan wayang golek dan berakhir pada pukul 21.00 wib. Any, Salah satu peserta tari yang ikut tampil dalam pagelaran tersebut menuturkan bahwa, &quot;Saya seneng bisa ikut terlibat, sampai saat pentas saking semangat nya karena sudah lama tdk pentas tari klasik sampe over , baru lihat divideo itu berlebihan masih butuh koreksi diri lagi. &quot; Ujar salah satu mahasiswa prodi Tari tersebut.. Akn 4</p>\r\n', '', 'kai_2.png', 'Gini deh', '1', '1', '', 'Publish', 1654590365, 1657610675),
(6, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '17LVD.png', 'Aul Disini', '1', '1', '', 'Publish', 1654590602, 1657610519),
(7, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '2015-02-24_1934.png', 'Halo', '1', '1', '', 'Pending', 1654651605, 1657610633),
(8, 1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '', '2015-02-24_1932.png', 'Coba kuy', '1', '1', '', 'Publish', 1654653298, 1657610607),
(9, 2, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt</p>', 'Berita', 'F3.png', 'Mari kuy', '1', '1', '', 'Publish', 1655689613, 0),
(10, 3, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt', '', 'jh.png', 'Melacak Laptop Kamu yang Hilang ditelan bumi dan planet planet dunia', '1', '1', 'Administrator', 'Publish', 1656920274, 1657511301);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id` int(11) NOT NULL,
  `nama_fakultas` varchar(60) NOT NULL,
  `kode_fakultas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id`, `nama_fakultas`, `kode_fakultas`) VALUES
(1, 'Seni Rupa', '001'),
(2, 'Seni Pertunjukan', '002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Olahraga'),
(2, 'Pendidikan'),
(3, 'Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `konten_pengumuman` varchar(3000) NOT NULL,
  `gambar_thumbnail` varchar(128) NOT NULL,
  `file_lampiran` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `konten_pengumuman`, `gambar_thumbnail`, `file_lampiran`, `date_created`) VALUES
(1, 'Auls Was Here', '<p>Aulia Saputri, Informatika Universitas Teknologi Yogyakarta. Lulusan SMK Glibal Insan Tangerang. Alamat jogja ada di ds.sendangadi Jombor. untuk no.telp 0895343844277</p>', 'GAJE.png', 'Untitled_design_(11)2.png', 1654583109),
(5, 'Hahah', '<p>Aulia Saputri, Informatika Universitas Teknologi Yogyakarta. Lulusan SMK Glibal Insan Tangerang. Alamat jogja ada di ds.sendangadi Jombor. untuk no.telp 0895343844277</p>', 'GAJE.png', 'Untitled_design_(11)2.png', 1654583109),
(6, 'Halo', '<p>Aulia Saputri, Informatika Universitas Teknologi Yogyakarta. Lulusan SMK Glibal Insan Tangerang. Alamat jogja ada di ds.sendangadi Jombor. untuk no.telp 0895343844277</p>\n', 'GAJE.png', 'Untitled_design_(13)1.png', 1654670548),
(7, 'Gini nih', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with deskt</p>', '0b41d417c15b1a7a21fa2d453c27cd32_large.jpeg', '0b41d417c15b1a7a21fa2d453c27cd32_large.jpeg', 1655689681),
(8, 'Ada Pengumuman Hasil PPDB Jateng 2022 Diumumkan Hari Ini, Begini Cara Ceknya   Artikel ini telah tayang di Tribunnews.com', '<p>Pengumuman hasil seleksi Penerimaan Peserta Didik Baru (PPDB) SMA/SMK di Jawa Tengah 2022 diumumkan hari ini, Senin (4/7/2022).</p>\r\n\r\n<p>Dalam pemberitahuan yang disampaikan di website resmi&nbsp;<a href=\"https://www.tribunnews.com/tag/ppdb-jateng-2022\">PPDB Jateng 2022</a>, pengumuman hasil PPDB SMA/SMK Jateng disampaikan maksimal pukul 23.55 WIB.</p>\r\n\r\n<p>&quot;<em>Terima kasih kepada semua Calon Peserta Didik yang telah mendaftar. PPSB SMA/SMK Negeri Jawa Tengah 2022 telah ditutup.</em></p>\r\n\r\n<p><em>Pengumuman hasil akan dilaksanakan Senin, 4 Juli 22 selambat-lambatnya pukul 23.55 WIB</em>,&quot; tulis pengumuman di laman itu, sebagaimana dikutip Tribunnews.com.</p>\r\n\r\n<p><br />\r\n<br />\r\nArtikel ini telah tayang di&nbsp;<a href=\"https://www.tribunnews.com/\">Tribunnews.com</a>&nbsp;dengan judul Pengumuman Hasil PPDB Jateng 2022 Diumumkan Hari Ini, Begini Cara Ceknya,&nbsp;</p>\r\n', 'blur.jpg', 'blur.jpg', 1656922286);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `nama_prodi` varchar(60) NOT NULL,
  `kode_prodi` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `id_fakultas`, `nama_prodi`, `kode_prodi`) VALUES
(1, 1, 'Kriya Kulit', '001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `is_active`, `date_created`, `role_id`) VALUES
(3, 'Administrator', 'administrator', '$2y$10$I.UJ01uPFrN8HQfCNCWRQumPeIsE2HgRX.izjk0Tgxt4zoC2ma.T.', 'aderohmatmaulana77@gmail.com', 1, 1652954337, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fakultas` (`id_fakultas`) USING BTREE;

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);

--
-- Ketidakleluasaan untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
