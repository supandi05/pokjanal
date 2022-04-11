-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2019 pada 08.40
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokjanal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bidan`
--

CREATE TABLE `data_bidan` (
  `id_bidan` int(11) NOT NULL,
  `nama_bidan` text NOT NULL,
  `nik_bidan` int(20) NOT NULL,
  `tmpt_lahir_bidan` text NOT NULL,
  `tgl_lahir_bidan` date NOT NULL,
  `jk_bidan` varchar(2) NOT NULL,
  `goldar_bidan` varchar(2) NOT NULL,
  `agama_bidan` text NOT NULL,
  `pend_bidan` text NOT NULL,
  `kerja_bidan` text NOT NULL,
  `alamat_bidan` text NOT NULL,
  `sk_no_bidan` text NOT NULL,
  `hp_bidan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_bidan`
--

INSERT INTO `data_bidan` (`id_bidan`, `nama_bidan`, `nik_bidan`, `tmpt_lahir_bidan`, `tgl_lahir_bidan`, `jk_bidan`, `goldar_bidan`, `agama_bidan`, `pend_bidan`, `kerja_bidan`, `alamat_bidan`, `sk_no_bidan`, `hp_bidan`) VALUES
(1, 'Amal', 2147483647, 'Bandung', '2019-09-01', 'p', 'AB', 'islam', 'magister', 'pns', 'fjdklfjsljdflksjldfj', '3048230984290', '0909808080'),
(2, '', 0, '', '0000-00-00', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kader`
--

CREATE TABLE `data_kader` (
  `id_kader` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_kader` varchar(50) NOT NULL,
  `nik_kader` int(16) NOT NULL,
  `tmp_lahirkd` text NOT NULL,
  `tgl_lahirkd` date NOT NULL,
  `jk_kader` varchar(2) NOT NULL,
  `goldar_kader` varchar(2) NOT NULL,
  `agama_kader` text NOT NULL,
  `pendidikan_kader` text NOT NULL,
  `pekerjaan_kader` text NOT NULL,
  `alamat_kader` text NOT NULL,
  `sk_nokd` varchar(30) NOT NULL,
  `jabatan_kader` varchar(50) NOT NULL,
  `hp_kader` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kader`
--

INSERT INTO `data_kader` (`id_kader`, `id_posyandu`, `nama_kader`, `nik_kader`, `tmp_lahirkd`, `tgl_lahirkd`, `jk_kader`, `goldar_kader`, `agama_kader`, `pendidikan_kader`, `pekerjaan_kader`, `alamat_kader`, `sk_nokd`, `jabatan_kader`, `hp_kader`) VALUES
(2, 0, 'Rudiana Rochimat Yulian', 0, '0', '2019-09-01', 'l', '', 'islam', 'sma', '', '0', '445.8/01a-SK/2002/I/2018', 'Wakil Ketua', '085352528214'),
(3, 0, 'Dede Mulyadi', 2147483647, 'Sumedang', '1984-10-12', 'l', 'O', 'islam', 'sma', 'lainnya', 'Perum Bumi Kenangan Asri Blok B1.01 RT 03/04 Desa Citimun', '60 tahun 2018', 'Ketua Pokja Desa', '082316163747'),
(4, 0, 'Nina Yuningsih, S.T.Keb.', 0, '0', '2019-09-01', 'p', '', 'islam', 'sarjana', 'lainnya', 'nn', '6 tahun 2018', 'Sekretaris', '085323444879');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_posyandu`
--

CREATE TABLE `data_posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `nama_posyandu` text NOT NULL,
  `lokasi_posyandu` text NOT NULL,
  `waktu_layanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_posyandu`
--

INSERT INTO `data_posyandu` (`id_posyandu`, `nama_posyandu`, `lokasi_posyandu`, `waktu_layanan`) VALUES
(1, 'Permata Hati 3', 'citimun', 'hari rabu minggu ke 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dok` int(11) NOT NULL,
  `nama_dok` text NOT NULL,
  `keterangan_dok` text NOT NULL,
  `tgl_dok` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dok`, `nama_dok`, `keterangan_dok`, `tgl_dok`) VALUES
(1, 'SUSUNAN PENGURUS POKJA POSYANDU.doc', 'Susunan pengurus pokja posyandu', '2019-09-15'),
(2, 'SUSUNAN KEPENGURUSAN KADER POSYANDU.doc', 'Susunan kepengurusan kader posyandu', '2019-09-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_foto` text NOT NULL,
  `keterangan_foto` text NOT NULL,
  `tgl_foto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_foto`, `keterangan_foto`, `tgl_foto`) VALUES
(7, 'WhatsApp Image 2019-09-12 at 08.38.39.jpeg', 'Pemberian vitamin', '2019-09-02'),
(8, 'WhatsApp Image 2019-09-12 at 08.39.11.jpeg', 'Kegiatan penimbangan anak', '2019-09-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `lainya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `isi`, `lainya`) VALUES
(6, 'Sejarah', 'Posyandu Permata Hati III berdiri pada tanggal 13 Juli 2009. Berdasarkan surat keputusan Kepala Desa Nomor 445.8/KEP/2011/VII/2009 Tentang Pembentukan Dan Pengukuhan Susunan Pengurus Posyandu Permata Hati III Desa Citimun Kecamatan Cimalaka yang kemudian mengalami beberapa kali perubahan pengurus.', ''),
(7, 'Program', '<ul><li>Program layanan dasar utama kesehatan khususnya posyandu terdiri dari kesehatan ibu dan anak (KIA), Keluarga Berencana (KB), Imunisasi, Gizi dan Penanggulangan Diare</li><li>Program layanan sosial dasar pengembangan dapat dikembangkan sesuai dengan kebutuhan, permasalahan dan potensi di wilayah kerja posyandu berdasarkan musyawarah mufakat, sehingga menjadi posyandu mandiri yang multifungsi.</li></ul>', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `data_bidan`
--
ALTER TABLE `data_bidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indeks untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indeks untuk tabel `data_posyandu`
--
ALTER TABLE `data_posyandu`
  ADD PRIMARY KEY (`id_posyandu`);

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dok`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_bidan`
--
ALTER TABLE `data_bidan`
  MODIFY `id_bidan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_kader`
--
ALTER TABLE `data_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_posyandu`
--
ALTER TABLE `data_posyandu`
  MODIFY `id_posyandu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
