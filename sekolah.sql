-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. September 2016 jam 00:50
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `no` int(11) NOT NULL,
  `induk` varchar(10) NOT NULL,
  `nama` text NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `guru` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`no`, `induk`, `nama`, `kelas`, `tanggal`, `keterangan`, `guru`, `tahun`) VALUES
(1, '758/298.06', 'ZANNA COBHITA MAJESTY AYU INDHAMA', 'X TKJ 1', '2016-09-07', 'Sakit (s)', 'Sakin Fayadl, S.Pd', '2016/2017'),
(2, '467/184.07', 'AYASY ABBAS ALFARUQ', 'XII TKJ 2', '2016-09-07', 'Alpha (A)', 'Ummy Chairiyah, S.I.Kom', '2016/2017'),
(3, '621/240.07', 'AQIL HADISTANA', 'XI TKJ 2', '2016-09-08', 'Izin (I)', 'Taufiq Amri, S.Pd', '2016/2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_guru`
--

CREATE TABLE IF NOT EXISTS `data_guru` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `handphone` text NOT NULL,
  `email` text NOT NULL,
  `mata_pelajaran` varchar(30) DEFAULT NULL,
  `nbm` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_guru`
--

INSERT INTO `data_guru` (`no`, `nama`, `username`, `password`, `handphone`, `email`, `mata_pelajaran`, `nbm`) VALUES
(1, 'Hj. M. Mas''ulah, ST,MM', 'masulah', 'masulah123', '', '', 'MATEMATIKA', '1098396'),
(2, 'H. Akh. Muzaini Jaya, S.Pd', 'muzaini', 'muzaini123', '', '', 'MATEMATIKA', '1055058'),
(3, 'Sri jayati, S.Pd.', 'jayati', 'jayati123', '', '', 'BAHASA INGGRIS', '964980'),
(4, 'Sudarti, S.Ag', 'sudarti', 'sudarti123', '', '', 'AL ISLAM', '984297'),
(5, 'Agus Dwi Hartono, S.Si, M.Pd', 'hartono', 'hartono123', '', '', 'FISIKA', '1137483'),
(6, 'Fifi Mafaza, S.Pd.', 'mafaza', 'mafaza123', '', '', 'PkN', '1137492'),
(7, 'Badri, S.Pd', 'badri', 'badri123', '', '', 'PENJAS', '1137489'),
(8, 'Prijanti Ningsih, S. Kom', 'prijanti', 'prijanti123', '', '', 'PRODUKTIF', '1206950'),
(9, 'Kholifan, S.Ag', 'kholifan', 'kholifan123', '', '', 'AL ISLAM', '735865'),
(10, 'Jakfar, S.Pd', 'jakfar', 'jakfar123', '', '', 'SENI', '1206948'),
(11, 'Arvi Irchami, S.Pd', 'irchami', 'irchami123', '', '', 'KEWIRAUSAHAAN', '1068357'),
(12, 'Khoirul Anam, S.Pd.I', 'anam', 'anam123', '', '', 'BAHASA ARAB', '1136008'),
(13, 'Nurvien Affandi, ST', 'affandi', 'affandi123', '', '', 'KEMUHAMMADIYAHAN', '1136008'),
(14, 'Ahmad Ilyas, S.Hum', 'ilyas', 'ilyas123', '', '', 'BAHASA INGGRIS', '1193961'),
(15, 'Hendro Purnomosidi', 'hendro', 'hendro123', '', '', 'PRODUKTIF', '1206954'),
(16, 'Qonik Hanifa, S.Pd', 'hanifa', 'hanifa123', '', '', 'MATEMATIKA', '1206949'),
(17, 'Eko Cahyo Setiawan, A.Md', 'cahyo', 'cahyo123', '', '', 'PRODUKTIF', '1206942'),
(18, 'M. Sholeh R, S.Pd.Gr', 'sholeh', 'sholeh123', '', '', 'PENJAS', '1111357'),
(19, 'Melinda Nurmawanti, S.Pd. Gr', 'melinda', 'melinda123', '', '', 'IPS/SEJARAH INDONESIA', '1206953'),
(20, 'M. Chusaini, S.Kom.', 'chusaini', 'chusaini123', '', '', 'PRODUKTIF', '1206951'),
(21, 'Alfiansyah Widyanugroho, S.Pd', 'alfiansyah', 'alfiansyah123', '', '', 'BAHASA INDONESIA', '1207641'),
(22, 'Charis Fathul Hadi, S.Pd', 'charis', 'charis123', '', '', 'PRODUKTIF', '1206944'),
(23, 'Hijri Alaudin', 'hijri', 'hijri123', '', '', 'PRODUKTIF', '1206943'),
(24, 'Sakin Fayadl, S.Pd', 'fayadi', 'fayadi123', '', '', 'PRODUKTIF', '1206947'),
(25, 'Muhandis Landasi, S.Pd.', 'landasi', 'landasi123', '', '', 'PRODUKTIF', NULL),
(26, 'Taufiq Amri, S.Pd', 'taufiq', 'taufiq123', '', '', 'BAHASA INDONESIA', '1206937'),
(27, 'Tsani Sirojul Munir, A.md.', 'munir', 'munir123', '', '', 'PRODUKTIF', NULL),
(28, 'Nurul Farkhatun Ni''mah, S.Pd', 'nurul', 'nurul123', '', '', 'IPA', '1206945'),
(29, 'Enggar Sosotyaningsih, S.Pd', 'enggar', 'enggar123', '', '', 'BAHASA DAERAH', NULL),
(30, 'Yayuk Herawati, S.Pd.', 'yayuk', 'yayuk123', '', '', 'BAHASA DAERAH', NULL),
(31, 'Feni Hidayatul Fitriyah, S.Pd.', 'fitriyah', 'fitriyah123', '', '', 'KIMIA', NULL),
(32, 'M. Iqbal Munadhdhom, S.Pd.', 'iqbal', 'iqbal123', '', '', 'MATEMATIKA', NULL),
(33, 'Adhek Dharma Santosa', 'dharma', 'dharma123', '', '', 'PRODUKTIF', NULL),
(34, 'Ummy Chairiyah, S.I.Kom', 'ummy', 'ummy123', '', '', 'PRODUKTIF', NULL),
(35, 'Ayu Wulansari Utomo, S.Pd.', 'wulansari', 'wulansari123', '', '', 'PRODUKTIF', NULL),
(36, 'Maria Sugiyarti, S.Pd.Dip.Kmd', 'sugiyarti', 'sugiyarti123', '', '', 'BK', '1137488'),
(37, 'Luthfina Rahmatin, S.Pd', 'rahmatin', 'rahmatin123', '', '', 'BK', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `no` int(11) NOT NULL COMMENT 'nomor siswa',
  `induk` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` text NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` text,
  `pekerjaan_ibu` text,
  `no_telp` text,
  PRIMARY KEY (`induk`),
  UNIQUE KEY `induk` (`induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`no`, `induk`, `nama`, `asal`, `ttl`, `jenis_kelamin`, `alamat`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telp`) VALUES
(66, '160211', 'SORAYA AZZAHRA DWI NANDA', 'SMPN 51 Surabaya', 'Surabaya, 12 Juli 2001', 'P', 'Bogangin II A / 26 Surabaya', 'Suparto', 'Djumaiyah', 'Swasta', 'Jualan', '085607734368'),
(67, '160212', 'DYAH AYU PRATAMA', 'SMPN 24 Surabaya', 'Surabaya, 23 April 2001', 'P', 'Kemlaten IX / 51 A  Surabaya', 'Trias Budimantoro', 'Yuswati', 'Swasta', '', '081231606477'),
(68, '160216', 'ISA AHMAD MUSLIMAINI', 'SMPN 51 Surabaya', 'Surabaya, 13 Oktober 2001', 'L', 'Kemlaten Gg VI / 32 Surabaya', 'Wiyono', 'Djumaiyah', 'Wiraswasta', '', '08123533631 - 085103144469'),
(69, '160217', 'RAHMAT PRASTYO BUDI RAHARJO', 'SMP Kartika IV - 1 Surabaya', 'Surabaya, 11 Desember 1998', 'L', 'Kebraon V / 35 Surabaya', 'Sudarno', 'Indah Yati', 'Swasta', 'Swasta', '083856747561'),
(70, '160218', 'MUHAMMAD TRIO RIZQONI', 'SMP Muhammadiyah 7 Paciran', 'Lamongan, 5 Juli 2001', 'L', 'Jemur Gayungan 2 / 14 Surabaya', 'Abdul Kholik', 'Dewi Erita Fatmawati', 'Wiraswasta', '', '0318292650'),
(71, '160219', 'SILVIA NURAINI', 'SMP Alfatah', 'Nganjuk, 2 April 2001', 'P', 'Jl. Biduri Pandan I / 31 KBD Gresik', 'Sutaji', 'Sulastiningsih', 'Swasta', '', '081230271973'),
(72, '160220', 'MUCHAMMAD SOLEH MAULANA', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 24 Nopember 1999', 'L', 'Karangpilang Gg Merpati I / 8 Surabaya', 'Suprapto', 'Nur Hayati ( almh )', 'Wiraswasta', '', '087855070550'),
(73, '160221', 'ANDRIYAN YULIANTO', 'SMP Kartika IV - I Surabaya', 'Surabaya, 25 Juli 1998', 'L', 'Kebraon V / 21 Surabaya', 'Suwito', 'Sunarsih', '', '', '082234147071'),
(74, '160222', 'TERRY ORIZA ATHALLAH', 'SMP Muhammadiyah 17 Sby.', 'Surabaya, 27 April 2001', 'L', 'Zamrud D 13 - KBD Gresik', 'Erry Cahyono', 'Truly Kartika Emalia', 'Wiraswasta', 'Swasta', '082233049769'),
(75, '160224', 'FISA HIDAYAH RAMADHAN', 'SMP Alfatah', 'Gresik, 19 November 2001', 'P', 'Jl. Mukara 5.3 No : 8 KBD Gresik', 'Nur Syamsu', 'Nur Rachma', 'Wiraswasta', 'Wiraswasta', '082230016307'),
(76, '160226', 'ABD. MAJID', 'SMP Badrul Ulum Pamekasan', 'Pamekasan, 14 Juli 1999', 'L', 'Jambangan Kebon Agong 1 Surabaya', 'Moh. Basyar', 'Siti Maryam ( almh )', 'Petani', '', '031-8281880'),
(1, '16053', 'NADZIFAH BIANDA SALSABILAH', 'SMP Tri Buana 2 Menganti', 'Surabaya, 20 Juni 2000', 'P', 'Setro RT 07 / RW 04 Menganti  Gresik', 'Taufikurochman', 'Yeni Prastyowati', 'Swasta', '', '085106052429'),
(2, '16054', 'RAHMANDA ALFATH', 'SMP Muhammadiyah 17 Sby.', 'Gresik, 17 Januari 2001', 'L', 'Setro RT 01 / RW 01 Menganti Gresik', 'Aiyub', 'Dwi Irawati', 'Swasta', 'Swasta', '082330302556 - 083832116951'),
(3, '16055', 'SISKA FITRIANA', 'SMPN 24 Surabaya', 'Surabaya, 27 September 2001', 'P', 'Karangpilang Gg Merpati I / 21 Surabaya', 'M. Chayatul F ( alm )', 'Komsiati', '_', 'Wiraswasta', '089634030722 - 089508364299'),
(4, '16056', 'DEWI ANGGELIA', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 25 September 2001', 'P', 'Kedurus II / 2 Surabaya', 'Taukhid', 'Lilis Susanti', 'Wiraswasta', '', '081231489846'),
(5, '16058', 'NOVI KULUPIAH', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 16 Nopember 2000', 'P', 'Kedurus II / 48 B Surabaya', 'Sujcipto', 'Pinatun', 'Swasta', 'Swasta', '083849247341'),
(6, '16060', 'NAILA ALFIYATUR ROHMAH', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 7 Desember 2001', 'P', 'Karangpilang Gg Merpati 1  Surabaya', 'Bastian ( alm )', 'Muzayanah', '_', 'Swasta', '087877462701'),
(7, '16061', 'NABIL ERDYANSYAH', 'SMP Muhammadiyah 2 Taman.', 'Sidoarjo, 24 Mei 2001', 'L', 'Wonocolo 58 RT 10 / RW 04 Taman Sda.', 'Rudyawan', 'Erlina Ekowati', 'Swasta', 'Guru', '081330261660 - 08123170868'),
(8, '16062', 'MUHAMMAD FAISHAL MAHDY', 'SMP Khadijah Sby', 'Surabaya, 29 Juni 2000', 'L', 'Jetis Kulon Kuburan 17 F Surabaya', 'Sawali Puji Utomo', 'Endang Agus S.', 'Guru', 'Guru', '081332269629 - 8288291'),
(9, '16064', 'IQBAL TAWWAQAL', 'SMP Muhammadiyah 6 Sby.', 'Sampit, 22 Nopember 2000', 'L', 'Kebraon Manis Selatan I / 2 Surabaya', 'Sulhan', 'Sesmah', 'Swasta', '', '081233775119 - 7667702'),
(10, '16065', 'MUCHAMAD ADAM APRIANSYAH', 'SMP Muhammadiyah 2 Taman.', 'Sidoarjo, 10 April 2001', 'L', 'Wonocolo Selatan RT 16 / RW 06 Sepanjang', 'M. Sugeng ( alm )', 'Yuni Astutik', '_', 'Wiraswasta', '081553601309'),
(11, '16066', 'FARID MAULANA', 'SMPN II Sukodono Sda', 'Sidoarjo, 2 Nopember 2000', 'L', 'Peterongan RT 15/RW 05 Masangan Kulon Sda', 'Suwoto', 'Soeliswati', 'PNS', '', '083854503794 - 082217628437'),
(12, '16067', 'ABU ABDAN SYAKURO', 'SMP Muhammadiyah 6 Sby.', 'Sidoarjo, 23 Januari 2001', 'L', 'Sambisari RT 31 / RW 06 Taman Sda.', 'Choirul Ghofar', 'Siti Shoihah', 'Swasta', '', '0895342544914'),
(13, '16070', 'RAHMAH NOR WIJAYANTI', 'SMPN II Wonosalam - Jombang', 'Jombang, 28 Februari 2001', 'P', 'Kebraon IV / 52  Surabaya', 'Mondik', 'Suwati', 'Swasta', '', '081330719235'),
(14, '16071', 'SYAIFAN ALI MASYHURI', 'SMP Muhammadiyah 4 Sby.', 'Surabaya, 16 September 2000', 'L', 'Pulosari 3K / 18 RT 02 - RW 07  Surabaya', 'Machmud Hasan', 'Indah Suprobowati', 'Swasta', '', '085748894774'),
(15, '16073', 'MUHAMMAD RIFQI AMALUL''ARIFIN', 'SMP Muhammadiyah 2 Taman.', 'Surabaya, 22 Februari 2001', 'L', 'Taman Indah VI / 7  Taman  Sda.', 'Gim Wahyudi', 'Sri Mulyati ( almh )', 'Swasta', '', '081330424263'),
(16, '16074', 'NABILLA DINDA ALIFIANTI', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 10 Juni 2001', 'P', 'Kebraon Mitra Satwa I / 65 Surabaya', 'Ali Machmud', 'Lilik Minarsih', 'Swasta', '', '081803216030 - 087855931373'),
(17, '16075', 'FAIZAL RAFLI FAUZI', 'SMP Muhammadiyah 2 Taman.', 'Surabaya, 23 Nopember 2000', 'L', 'Sepanjang Tani RT 02 / RW 05 Taman Sda', 'Mohammad Fauzi', 'Sirep Minarti', 'Swasta', '', '085233285404'),
(18, '16084', 'MUHAMMAD FATTAH ARRASYIID', 'SMP Tunas Sawunggaling Sby', 'Surabaya, 16 September 2001', 'L', 'Perum Bukit Bambe CO : 15 Driyorejo Gresik', 'Ripto', 'Ririn Indrarini', 'Swasta', 'Swasta', '085828362264 - 08819534972'),
(19, '16089', 'WINA ANDRIANA', 'SMP Nurul Huda Surabaya', 'Surabaya, 12 Oktober 2001', 'P', 'Bangkingan RT 02 / RW 01 Surabaya', 'Sutrisno', 'Rokana', 'Sopir', '', '085645676223'),
(20, '16092', 'RAFI SETYA PRATAMA', 'SMP Ulul Albab, Sidoarjo', 'Sidoarjo, 9 Agustus 2001', 'L', 'G. Taman Asri HC: 17 Tawangsari Sda', 'Moch. Fatoni', 'Sulastri', 'Swasta', 'Swasta', '082244458874 - 082244458875'),
(21, '16097', 'YUSUF VIJANATA', 'SMP Muhammadiyah 2 Taman.', 'Sidoarjo, 8 Desember 2001', 'L', 'Bebekan Jagalan I / 14 Taman Sidoarjo', 'Eddy Susanto', 'Supiyati', '_', '', '083830277849'),
(22, '16098', 'ADINDA MAYA SARI', 'SMP Muhammadiyah 2 Taman.', 'Bojonegoro, 12 Mei 2001', 'P', 'Jl. Semeru RT 04 / RW 02 Bambe Driyorejo', 'Junaidi', 'Sariyanti', 'Swasta', '', '085731011732 - 081330647814'),
(23, '16099', 'ALVIN TAQWA WIJAYA', 'SMPN Terbuka 12 Surabaya', 'Surabaya, 5 Desember 1999', 'L', 'Darmo kali 106 B  Surabaya', 'Darmawan Wijaya', 'Dewi Susanti', 'Swasta', 'Wiraswasta', '081320978678'),
(24, '16101', 'WILDAN RANGGA WAHYU ARDANA', 'SMP Ulul Albab, Sidoarjo', 'Sidoarjo, 23 Mei 2001', 'L', 'Jl. Kartini  RT 11 / RW 04 Medaeng Sidoarjo', 'Suep', 'Sri Wahyuni', 'Swasta', '', '083831881066 - 083831688332'),
(25, '16102', 'ZULFA FEBRINA LUTHFIYAH', 'SMP Muhammadiyah 6 Sby.', 'Surabaya, 18 Februari 2001', 'P', 'Lidah Kulon RT 01 / RW 05 Surabaya', 'Aris Nur Cahyo', 'Siti Rofikoh', 'Swasta', 'Guru', '081357355600'),
(26, '16106', 'ANNISA KARTIKA PUTRI', 'SMP Hang Tuah II Surabaya', 'Surabaya, 2 Agustus 2001', 'P', 'Ds.Sumberan RT 01 / RW 04 No. 51 Surabaya', 'Sudadiyo', 'Febria Susanty Devi', '', 'Swasta', '085645439583 - 085850205629'),
(27, '16108', 'MUHAMMAD FARIS MAULANA', 'SMP Muhammadiyah 6 Sby.', 'Jombang, 5 Agustus 2001', 'L', 'Jambangan Kebon Agong 1 Surabaya', 'Sukiyat', 'Sholikatin', '_', 'Petani', '0318281880'),
(28, '16112', 'CICI LISTYA ROSANTI', 'M.TS N 51 Surabaya', 'Surabaya, 4 Mei 2001', 'P', 'Balas Klumprik RT 04 / RW 02 Surabaya', 'Suroso', 'Sulis Ningsih', 'Wiraswasta', 'Wiraswasta', '085335460386'),
(29, '16113', 'DINA DWI KASARI', 'SMPN 40 Surabaya', 'Surabaya, 31 Desember 2000', 'P', 'Bangkingan Timur III Surabaya', 'Parin', 'Siti Sopiyah', 'Swasta', '', '089529735404'),
(30, '16114', 'TARIZA RAHMAHDHANI', 'SMPN 51 Surabaya', 'Sidoarjo, 29 Nopember 2000', 'P', 'Bangkingan Timur Gg IV / 70 Surabaya', 'Sukamto', 'Sulami', 'Swasta', '', '085655019007 - 082232690606'),
(31, '16116', 'RAHMAT HABIBULLOH', 'SMPN 51 Surabaya', 'Bojonegoro, 8 September 2000', 'L', 'Graha Kebraon Mas C / 2A Surabaya', 'Mudjiono', 'Endang Pudjiastuti', 'Swasta', 'Wiraswasta', '7669716 - 082143828266'),
(32, '16121', 'SERLINDA DWI LESTARI', 'SMP Siti Aminah Surabaya', 'Malang, 25 September 2001', 'P', 'Kemlaten VIII / 8 B Surabaya', 'Sutrisno', 'Naning Sustiyawati', 'Tukang Bgnan', '', '082334520938'),
(33, '16127', 'DWI KARINA AVILIA WITONO', 'SMP Kartika IV - II Surabaya', 'Surabaya, 22 Desember 2000', 'P', 'Kedurus Dukuh III / 55 Surabaya', 'Heru Witono', 'Karni', 'Sopir', '', '085100854824'),
(34, '16137', 'AFIFA ARINI RACHMAWATI', 'SMP Hasanudin Surabaya', 'Purworejo, 7 Desember 2000', 'P', 'Pesapen RT 03 / RW 02 Sumurwelut Sby.', 'Sudibyo', 'Eko Mardi Astuti', 'Swasta', '', '081333176443 - 081230401491'),
(35, '16148', 'EKA SEPTI ANANDA PUTRI', 'SMP Siti Aminah Surabaya', 'Sidoarjo, 4 September 2000', 'P', 'Bogangin Baru K / 27 Surabaya', 'Eko Purwanto', 'Heni Kursrini ( almh )', 'Swasta', '', '082245660064'),
(36, '16150', 'IKHSAN DANAR ASRIANTO', 'SMP Darul Muta''allimin', 'Sidoarjo, 20 April 2001', 'L', 'Tawangsari RT 06 / RW 01 Taman Sidoarjo', 'Imam Asmari', 'Sri Katon', 'Wiraswasta', '', '081216572442'),
(37, '16151', 'DIMAS RAKASIWI PATTIRANE', 'SMPN 24 Surabaya', 'Surabaya, 6 Juni 2001', 'L', 'Kebraon V / 17 Surabaya', 'RM. Santos Pattirane', 'Suryani', 'Swasta', 'Swasta', '081216176039'),
(38, '16154', 'EGA EXANDI ERLANGGA', 'SMPN 24 Surabaya', 'Surabaya, 10 Desember 2001', 'L', 'Kedurus III Gg Masjid 17 Surabaya', 'Chang Ming Fak', 'Rinah', 'Wiraswasta', '', ''),
(39, '16156', 'MUHAMMAD FAHMI AZIZ', 'SMP Muhammadiyah 9 Sby.', 'Surabaya, 15 Mei 2000', 'L', 'Juwingan 90 D Surabaya', 'Sumarno', 'Euis Kurnia', 'Swasta', '', '085101496221'),
(40, '16158', 'WINDAH RATNA SARY', 'SMP Hasanudin Surabaya', 'Surabaya, 12 Agustus 2001', 'P', 'Kebraon Mitra Satwa I / 66 Surabaya', 'Yudho setiyono', 'Misnah', 'Swasta', 'Swasta', ''),
(41, '16159', 'SEPTIANA DWI NURKHOLILA', 'SMPN 16 Surabaya', 'Malang, 23 September 2000', 'P', 'Bogangin Gg Ginten 1 Surabaya', 'Mukhodin', 'Umul Farida', 'Swasta', 'Buruh pabrik', '083856612893 - 0815513445'),
(42, '16165', 'MUHAMMAD ICHWAN MAULANA', 'SMPN 43 Surabaya', 'Surabaya, 10 Juni 2001', 'L', 'Blauran Kidul I / 4 D', 'Khoirul Anwar', 'Erna Handayani', 'Swasta', '', '0818322008'),
(43, '16167', 'HENDRA DWI RAMADHAN', 'SMPN 16 Surabaya', 'Surabaya, 12 Desember 2000', 'L', 'Pondok Maritim Indah Blok BB : 26 Surabaya', 'Agus Sidik ( alm )', 'Tutuk Pujiati', '_', '', '7663474 - 085335031351'),
(44, '16170', 'PUPI TARFIYAH', 'SMPN 51 Surabaya', 'Surabaya, 15 September 2000', 'P', 'Kedurus Dukuh X / 1 Surabaya', 'Mistar', 'Sunarti ( almh )', 'Kuli Bangunan', '', '085321441562'),
(45, '16173', 'ERNESTITO ADINEGORO SOEMANDIONO', 'Budi Utama ( Paket B )', 'Depok, 13 Juli 2001', 'L', 'Perum Babatan Pilang IX / 24 Surabaya', 'Padmonogo P. ( alm )', 'Farida Ariani', '', '', '081333711590 - 081316702777'),
(46, '16174', 'MUCHAMMAD ADITYA PANGESTU', 'SMP Hang Tuah II Surabaya', 'Malang, 25 April 2001', 'L', 'Griya Kebraon Utama V / DB - 16 Surabaya', 'Agus Budiono', 'Lilik Mustika', 'Swasta', '', '081334533640 - 7667810'),
(47, '16179', 'LUKMAN UMAR', 'SMP Lab UNESA', 'Denpasar, 4 Maret 2001', 'L', 'Kebraon 3 Mundu 27 Surabaya', 'Imzar S. Umar', 'Dewi Tati I', 'Swasta', '', '082211953480 - 082234368545'),
(48, '16183', 'ALVIN FADIEL IHZAFATTAH', 'SMPN 24 Surabaya', 'Surabaya, 6 April 2001', 'L', 'Warugunung RT 04 / RW 02', 'Nanang Hadi Susanto', 'Rika Prihatiningsih', 'Swasta', '', '085733103325'),
(49, '16184', 'AKIYAH NUZUNUL RAMADHANI', 'SMP Bahaudin Sidoarjo', 'Sidoarjo, 12 Desember 2000', 'L', 'Jl. Nangka I D RT 15 / RW 03 Geluran Sda.', 'Andri Yantono', 'Azizah', 'Swasta', '', '082232516861 - 085102367362'),
(50, '16185', 'HERIS INDA MIRSA', 'M.Ts Negeri 1 Medan', 'Medan, 8 Oktober 2001', 'L', 'Jambangan Indah III / 20 Surabaya', 'Ishak ( alm )', 'Erna Suryani', '', '', '08563070430 - 8290594'),
(51, '16187', 'SOLICHAH EKA DWI OKTAVIANTI', 'SMPN 51 Surabaya', 'Surabaya, 2 Oktober 2001', 'P', 'Karangpilang Gg Mawar 28 Surabaya', 'Munir', 'Feri Dewi Kurniasih', 'TNI - AL', '', '082132399299'),
(52, '16188', 'ERLANDO MARIO ALPRILIANO', 'SMP Muhammadiyah 4 Sby.', 'Surabaya, 20 April 2001', 'L', 'Kencanasari Timur 17 / 3 Surabaya', 'Alfion, Amd Par', 'RR. Mariana Triwi Y', 'Wiraswasta', 'Swasta', '082131842378 - 5614047'),
(53, '16189', 'MOHAMAD RIZAL RAMADHANA', 'SMPN 3 Taman Sidoarjo', 'Kediri, 15 Desember 2000', 'L', 'Griya Taman Asri Blok HH : 26 Sda', 'Ahmad Rifai', 'Yuli Antini', 'Swasta', 'Swasta', '081939188815'),
(54, '16191', 'MOCH. FAJAR NURSYAHALAM', 'SMPN 16 Surabaya', 'Surabaya, 21 Juli 2000', 'L', 'Gunung Sari Indah Blok SS : 3 Surabaya', 'Herman P. Ansyari', 'S. Daryati', '', 'Jualan', '089513897265 - 082245049189'),
(55, '16193', 'RAMADHAN ASHARI', 'SMP Hang Tuah I Surabaya', 'Surabaya, 16 Desember 2000', 'L', 'Pulosari 3 J / 17 Surabaya', 'Zaenal Ashari', 'Yunaita', 'Swasta', '', '089647351326'),
(56, '16195', 'MASYILAH AULIA NURSIFAH', 'SMP Muhammadiyah 6 Sby.', 'Sidoarjo, 18 Maret 2001', 'P', 'Kemlaten Gg VIII / 89 Surabaya', 'Abdullah', 'Khamidah', 'Swasta', '', '085331037114'),
(57, '16197', 'ALDY BAGUS SATRYO BUDI', 'SMPN 24 Surabaya', 'Surabaya, 24 April 2001', 'L', 'Mastrip Wr.gunung Gg Rusun RT 5/ RW 3 Sby', 'Kasmat', 'Wiwik Handayani', 'Swasta', '', ''),
(58, '16199', 'ARDELIA NABILAH FIRA RAMDHANI', 'SMP Muhammadiyah 2 Taman.', 'Sidoarjo, 9 Desember 2000', 'P', 'Karangpilang Gg Merpati 33 Surabaya', 'Rano Kurniawan', 'Ida Fitriana', 'Swasta', '', '085100284017'),
(59, '16200', 'SHAUMA FIDYA INTAN SAFITRI', 'SMPN 36 Surabaya', 'Surabaya, 21 Desember 2000', 'P', 'Pagesangan Timur III / 1 Surabaya', 'Triono', 'Sriwahyuni', 'Wiraswasta', 'Swasta', ''),
(60, '16201', 'ALAMSYAH PRIMA SEPTYOGRAHA', 'PKBM Budi Utama', 'Surabaya, 7 September 2000', 'L', 'Perum Taman Aloha D1 - 19 Sidoarjo', 'Deki Susanto S', 'Ismayanti', 'Swasta', '', '081357612464'),
(61, '16202', 'RIDHO RAMADHANI DIKDAYANTO', 'SMPN 3 Taman Sidoarjo', 'Surabaya, 19 Desember 2000', 'L', 'Griya Taman Asri HC - 12 Taman Sda', 'Soekirman', 'Muryati Malindra', 'Swasta', '', '081553555329 - 085850098435'),
(62, '16203', 'MUHAMMAD RAFLY RIZALDY', 'SMPN 24 Surabaya', 'Surabaya, 4 Mei  2001', 'L', 'Kedurus Dukuh III A / 60 Surabaya', 'Tommy Sudraswara W', 'Rita Ratnasari', 'Swasta', '', '085852802809 - 085100687268'),
(63, '16206', 'HENNY SUSANTI', 'SMPN 28 Surabaya', 'Kebumen, 28 Januari 2001', 'P', 'Granit Nila 5.2 No. 41 KBD Gresik', 'Bambang Hermanto', 'Fitri Susiani', 'Swasta', 'Swasta', '08121731637 - 085231485908'),
(64, '16207', 'FERDINAN JUNO H', 'SMP Muhammadiyah 17 Sby.', 'Surabaya, 22 Juni 2000', 'L', 'Perum Pesona Indah Wiyung Sbaya', 'Hermandianto', 'Jeane Meiti', '', 'Wiraswasta', '0895326004760'),
(65, '16210', 'QHOLILAN RAGIL PRAKOSO', 'SMP Kartika IV - I0 Surabaya', 'Surabaya, 19 April 2001', 'L', 'Bibis Karah 26 Surabaya', 'Rochmad Edy Pranoto', 'Nanis Sri Sugiana', 'Bengkel', '', '081234081201 - 082230164080');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin`
--

CREATE TABLE IF NOT EXISTS `izin` (
  `no` int(11) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `guru` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `izin`
--

INSERT INTO `izin` (`no`, `induk`, `nama`, `kelas`, `tanggal`, `keterangan`, `guru`, `tahun`) VALUES
(1, '662/278.072', 'HILMAN RASYID A', 'XI MM 1', '2016-09-07', 'ijin', 'Sri jayati, S.Pd.', ''),
(2, '828/382.065', 'ALAMSYAH PRIMA SEPTYOGRAHA', 'X MM 2', '2016-09-08', 'jskajskaj', 'Taufiq Amri, S.Pd', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `salt`) VALUES
('admin', '776901a2be25c15368150c6f3ab3e41c879d52f3a9de20d179c92adcddb5b1ee', 'c3fdf958d6d2f826fd8b40e613ccee99ca708f71059bf8ec8a46c5444586482e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no` int(11) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`no`, `induk`, `nama`, `kelas`) VALUES
(1, '584/203.064', 'ALVI WIBI ARDIANSYAH', 'X TKJ 1'),
(2, '635/254.064', 'MOHAMMAD RAFI PRAKOSO', 'X TKJ 1'),
(3, '729/269.064', 'AIMMATUL KHOIRIYAH', 'X TKJ 1'),
(4, '730/270.064', 'ANDI WIRAYUDA', 'X TKJ 1'),
(5, '731/271.064', 'ANGGA JAYA PRATAMA', 'X TKJ 1'),
(6, '732/272.064', 'APRILLIA DEWI SUSANTI', 'X TKJ 1'),
(7, '733/273.064', 'ARDI SURYA DWI RAMADANI', 'X TKJ 1'),
(8, '734/274.064', 'BAYU SURYA KRISDIANTORO', 'X TKJ 1'),
(9, '735/275.064', 'ENDRIK KUSWANTO', 'X TKJ 1'),
(10, '736/276.064', 'FAIZAH HILDA YANA', 'X TKJ 1'),
(11, '737/277.064', 'FAJAR PURNAMA', 'X TKJ 1'),
(12, '738/278.064', 'IMELDA PUTRI KUSUMA DAMAIYANTI ', 'X TKJ 1'),
(13, '739/279.064', 'KARTIKA PUSPA MONALISA', 'X TKJ 1'),
(14, '740/280.064', 'KEVIN ACHMAD BUDIANTO', 'X TKJ 1'),
(15, '741/281.064', 'M. RIZKY AFANDI', 'X TKJ 1'),
(16, '742/282.064', 'MARCO DARMAWAN', 'X TKJ 1'),
(17, '743/283.064', 'MARIO EKO YULIANTO', 'X TKJ 1'),
(18, '744/284.064', 'MOCH. RIZKI FIRMANZAH', 'X TKJ 1'),
(19, '745/285.064', 'MOCHAMMAD ANGGA ARI MAULANA', 'X TKJ 1'),
(20, '746/286.064', 'MOH. RIZAL ISWAYUDI', 'X TKJ 1'),
(21, '747/287.064', 'MOHAMMAD ZULFI LATUE', 'X TKJ 1'),
(22, '748/288.064', 'MUHAMMAD ADI PRASETYO', 'X TKJ 1'),
(23, '749/289.064', 'MUHAMMAD ALIF SYAIFULLAH', 'X TKJ 1'),
(24, '750/290.064', 'OKI FEBRIANSA', 'X TKJ 1'),
(25, '751/291.064', 'REZA SYAHRUL IRAWAN', 'X TKJ 1'),
(26, '752/292.064', 'RICHAD RAHMAN EKANANDA', 'X TKJ 1'),
(27, '753/293.064', 'RISANG FIRSAWAN', 'X TKJ 1'),
(28, '754/294.064', 'RISKA WIDIA BELASARI', 'X TKJ 1'),
(29, '755/295.064', 'SHEILA YANUARI PRATIWI', 'X TKJ 1'),
(30, '756/296.064', 'SURYA DHIMAS PRATAMA', 'X TKJ 1'),
(31, '757/297.064', 'UMAR FARUK', 'X TKJ 1'),
(32, '758/298.064', 'ZANNA COBHITA MAJESTY AYU INDHAMA', 'X TKJ 1'),
(33, '759/299.064', 'ABDULLAH SAHAL MAKHFUD', 'X TKJ 2'),
(34, '760/300.064', 'ACHMAD ROJUL', 'X TKJ 2'),
(35, '761/301.064', 'ANTONI WAHYU DWI NORCAHYO', 'X TKJ 2'),
(36, '762/302.064', 'BAGUS TRI RAMADHANI', 'X TKJ 2'),
(37, '763/303.064', 'BULAN CAHYANI', 'X TKJ 2'),
(38, '764/304.064', 'CHOIRIL HAQI FIRMANSYAH', 'X TKJ 2'),
(39, '765/305.064', 'DANDI RIBUT SAPUTRA', 'X TKJ 2'),
(40, '766/306.064', 'DENI KURNIAWAN', 'X TKJ 2'),
(41, '767/307.064', 'DIKI AJI SAPUTRA', 'X TKJ 2'),
(42, '768/308.064', 'DWI NUR RAHMAN', 'X TKJ 2'),
(43, '769/309.064', 'FARIS ATSIR IZZUDIN ELWAHYU', 'X TKJ 2'),
(44, '770/310.064', 'FIKRI FADILLAH FAHMI', 'X TKJ 2'),
(45, '771/311.064', 'ILMI HANIF', 'X TKJ 2'),
(46, '772/312.064', 'LUKMAN ARIF', 'X TKJ 2'),
(47, '773/313.064', 'MELINDA APRILIAWATI', 'X TKJ 2'),
(48, '774/314.064', 'MIZARDHA ACHMAD ZOELVA', 'X TKJ 2'),
(49, '775/315.064', 'MOHAMAD HAFIDZ YULIANTO', 'X TKJ 2'),
(50, '776/316.064', 'MUCHAMMAD ROBI PRASETYO', 'X TKJ 2'),
(51, '777/317.064', 'MUHAMMAD DIMAS DWI PUTRA', 'X TKJ 2'),
(52, '778/318.064', 'MUHAMMAD IVAN', 'X TKJ 2'),
(53, '779/319.064', 'MUHAMMAD ROBI SETIAWAN', 'X TKJ 2'),
(54, '780/320.064', 'NOVAL ZHIDAN W. FADILLAH', 'X TKJ 2'),
(55, '781/321.064', 'RAFLI BAGUS NARENDRA', 'X TKJ 2'),
(56, '782/322.064', 'RIZKY LAZUARD IRKHAMY', 'X TKJ 2'),
(57, '783/323.064', 'SITI NUR AFIFAH', 'X TKJ 2'),
(58, '784/324.064', 'TRIO PANUJU BAGYO', 'X TKJ 2'),
(59, '785/325.064', 'VIKO MATSOFI', 'X TKJ 2'),
(60, '786/326.064', 'VIKA MEILINA', 'X TKJ 2'),
(61, '787/327.064', 'YUDA PRASETYO', 'X TKJ 2'),
(62, '788/328.064', 'ZIYAD ATHILLAH FEBRIANSYAH', 'X TKJ 2'),
(63, '865/329.064', 'JOHN KENNEDY', 'X TKJ 2'),
(64, '789/343.065', 'ABD. MAJID', 'X MM 1'),
(65, '790/344.065', 'ABDU ABDAN SYAKURO', 'X MM 1'),
(66, '791/345.065', 'ADINDA MAYA SARI', 'X MM 1'),
(67, '792/346.065', 'AFIFA ARINI RACHMAWATI', 'X MM 1'),
(68, '793/347.065', 'ALVIN TAQWA WIJAYA', 'X MM 1'),
(69, '794/348.065', 'ANNISA KARTIKA PUTRI', 'X MM 1'),
(70, '795/349.065', 'CICI LISTYA ROSANTI', 'X MM 1'),
(71, '796/350.065', 'DEWI ANGGELIA', 'X MM 1'),
(72, '797/351.065', 'DINA DWI KASARI', 'X MM 1'),
(73, '798/352.065', 'DWI KARINA AVILIA WITONO', 'X MM 1'),
(74, '799/353.065', 'EKA SEPTI ANANDA PUTRI', 'X MM 1'),
(75, '800/354.065', 'FAIZAL RAFLI FAUZI', 'X MM 1'),
(76, '801/355.072', 'FARID MAULANA', 'X MM 1'),
(77, '802/356.065', 'IKHSAN DANAR ASRIANTO', 'X MM 1'),
(78, '803/357.065', 'IQBAL TAWWAQAL', 'X MM 1'),
(79, '804/358.065', 'MUCHAMAD ADAM APRIANSYAH', 'X MM 1'),
(80, '805/359.065', 'MUHAMMAD FAISHAL MAHDY', 'X MM 1'),
(81, '806/360.065', 'MUHAMMAD FARIS MAULANA', 'X MM 1'),
(82, '807/361.065', 'MUHAMMAD FATTAH AR RASYIID', 'X MM 1'),
(83, '808/362.065', 'MUHAMMAD RAFLY RIZALDY', 'X MM 1'),
(84, '809/363.072', 'MUHAMMAD RIFQI AMALUL''ARIFIN', 'X MM 1'),
(85, '810/364.065', 'NABIL ERDYANSYAH', 'X MM 1'),
(86, '811/365.065', 'NABILLA DINDA ALIFIANTI', 'X MM 1'),
(87, '812/366.065', 'NADZIFAH BIANDA SALSABILAH', 'X MM 1'),
(88, '813/367.065', 'NAILA ALFIYATUR ROHMAH', 'X MM 1'),
(89, '814/368.065', 'NOVI KULUPIAH', 'X MM 1'),
(90, '815/369.065', 'RAFI SETYA PRATAMA', 'X MM 1'),
(91, '816/370.065', 'RAHMAH NOR WIJAYANTI', 'X MM 1'),
(92, '817/371.065', 'RAHMANDA ALFATH', 'X MM 1'),
(93, '818/372.065', 'RAHMAT HABIBULLOH', 'X MM 1'),
(94, '819/373.065', 'SERLINDA DWI LESTARI', 'X MM 1'),
(95, '820/374.065', 'SISKA FITRIANA', 'X MM 1'),
(96, '821/375.065', 'SYAIFAN ALI MASYHURI', 'X MM 1'),
(97, '822/376.065', 'TARIZA RAHMAHDHANI', 'X MM 1'),
(98, '823/377.065', 'WILDAN RANGGA WAHYU ARDANA', 'X MM 1'),
(99, '824/378.065', 'WINA ANDRIANA', 'X MM 1'),
(100, '825/379.065', 'YUSUF WIJANATA', 'X MM 1'),
(101, '826/380.065', 'ZULFA FEBRINA LUTHFIYAH', 'X MM 1'),
(103, '827/381.065', 'AKIYAH NUZUNUL RAMADHANI', 'X MM 2'),
(104, '828/382.065', 'ALAMSYAH PRIMA SEPTYOGRAHA', 'X MM 2'),
(105, '829/383.065', 'ALDI BAGUS SETYO BUDI', 'X MM 2'),
(106, '830/384.065', 'ALVIN FADIEL IHZAFATTAH', 'X MM 2'),
(107, '831/385.065', 'ANDRIYAN YULIANTO', 'X MM 2'),
(108, '832/386.065', 'ARDELIA NABILAH FIRA RAMDHANI', 'X MM 2'),
(109, '833/387.065', 'DIMAS RAKASIWI PATTIRANE', 'X MM 2'),
(110, '834/388.065', 'DYAH AYU PRATAMA', 'X MM 2'),
(111, '835/389.065', 'EGA EXANDI ERLANGGA', 'X MM 2'),
(112, '836/390.065', 'ERLANDO MARIO ALPRILIANO', 'X MM 2'),
(113, '837/391.065', 'ERNESTITO ADINEGORO SOEMANDIONO', 'X MM 2'),
(114, '838/392.065', 'FERDINAN JUNO H', 'X MM 2'),
(115, '839/393.065', 'FISA HIDAYAH RAMADHAN', 'X MM 2'),
(116, '840/394.065', 'HENDRA DWI RAMADHAN', 'X MM 2'),
(117, '841/395.065', 'HENNY SUSANTI', 'X MM 2'),
(118, '842/396.065', 'HERIS INDA MIRSA', 'X MM 2'),
(119, '843/397.065', 'ISA AHMAD MUSLIMAINI', 'X MM 2'),
(120, '844/398.065', 'LUKMAN UMAR', 'X MM 2'),
(121, '845/399.065', 'MASYILAH AULIA NURSIFAH', 'X MM 2'),
(122, '846/400.065', 'MOCH. FAJAR NURSYAHALAM', 'X MM 2'),
(123, '847/401.065', 'MOHAMAD RIZAL RAMADHANA', 'X MM 2'),
(124, '848/402.065', 'MUCHAMMAD ADITYA PANGESTU', 'X MM 2'),
(125, '849/403.065', 'MUCHAMMAD SOLEH MAULANA', 'X MM 2'),
(126, '850/404.065', 'MUHAMMAD FAHMI AZIZ', 'X MM 2'),
(127, '851/405.065', 'MUHAMMAD ICHWAN MAULANA', 'X MM 2'),
(128, '852/406.065', 'MUHAMMAD TRIO RIZQONI', 'X MM 2'),
(129, '853/407.065', 'PUPI TARFIYAH', 'X MM 2'),
(130, '854/408.065', 'QHOLILAN RAGIL PRAKOSO', 'X MM 2'),
(131, '855/409.065', 'RAHMAT PRASTYO BUDI RAHARJO', 'X MM 2'),
(132, '856/410.065', 'RAMADHAN ASHARI', 'X MM 2'),
(133, '857/411.065', 'RIDHO RAMADHANI DIKDAYANTO', 'X MM 2'),
(134, '858/412.065', 'SEPTIANA DWI NURKHOLILA', 'X MM 2'),
(135, '859/413.065', 'SHAUMA FIDYA INTAN SAFITRI', 'X MM 2'),
(136, '860/414.065', 'SILVIA NURAINI', 'X MM 2'),
(137, '861/415.065', 'SOLICHAH EKA DWI OKTAVIANTI', 'X MM 2'),
(138, '862/416.065', 'SORAYA AZZAHRA DWI NANDA', 'X MM 2'),
(139, '863/417.065', 'TERRY ORIZA ATHALLAH', 'X MM 2'),
(140, '864/418.065', 'WINDAH RATNA SARY', 'X MM 2'),
(141, '435/152.071', 'BAGUS MARDI HUDI PRATAMA', 'XI TKJ 1'),
(142, '438/155.071', 'GALIH YUDO SAPUTRO', 'XI TKJ 1'),
(143, '581/200.071', 'ADI PRADANA', 'XI TKJ 1'),
(144, '582/201.071', 'AISYAH SALSABILAH', 'XI TKJ 1'),
(145, '583/202.071', 'ALIEF DACHLAN NASHRULLOH', 'XI TKJ 1'),
(146, '585/204.071', 'ANDREAS WIDYA PUTRA', 'XI TKJ 1'),
(147, '586/205.071', 'ANGGI TRI OKTAVIANI', 'XI TKJ 1'),
(148, '587/206.071', 'ASKA BRAMANTYA PRAYOGA', 'XI TKJ 1'),
(149, '588/207.071', 'ASTRIHAYU SAMDYAWAN ', 'XI TKJ 1'),
(150, '589/208.071', 'DIKKY SEFTIAN', 'XI TKJ 1'),
(151, '590/209.071', 'DINAN ARSY ZAHRA', 'XI TKJ 1'),
(152, '591/210.071', 'FIRMAN FERNANDHIANSYAH A P', 'XI TKJ 1'),
(153, '592/211.071', 'FIRMAN PUTRA FERDIANSYAH', 'XI TKJ 1'),
(154, '593/212.071', 'GALANG WAHYU PRATAMA', 'XI TKJ 1'),
(155, '594/213.071', 'M IDRIS RIFA''I', 'XI TKJ 1'),
(156, '595/214.071', 'M IQBAL ZUHRI ', 'XI TKJ 1'),
(157, '596/215.071', 'MOHAMMAD AGUNG WIJAYA', 'XI TKJ 1'),
(158, '598/217.071', 'MUHAMMAD BAGAS ADITYA T', 'XI TKJ 1'),
(159, '599/218.071', 'MUHAMMAD DHIQFAN R P', 'XI TKJ 1'),
(160, '600/219.071', 'MUHAMMAD ISLAH', 'XI TKJ 1'),
(161, '601/220.071', 'NAUVAL IKBAR F', 'XI TKJ 1'),
(162, '602/221.071', 'NITA MAULIDYA ANGGRAENI', 'XI TKJ 1'),
(163, '603/222.071', 'PRAMUDYA RAHMAN DANI', 'XI TKJ 1'),
(164, '604/223.071', 'RAHMAD BINTANG AJI', 'XI TKJ 1'),
(165, '605/224.071', 'RAKAMADYA TARUNA ABABIL', 'XI TKJ 1'),
(166, '606/225.071', 'RIFQI ADAM', 'XI TKJ 1'),
(167, '607/226.071', 'RIFQI HAIDAR RAHMATULLAH', 'XI TKJ 1'),
(168, '608/227.071', 'RIFQI RIZQULLAH SETIAWAN', 'XI TKJ 1'),
(169, '609/228.071', 'RIZAL MARULI ', 'XI TKJ 1'),
(170, '610/229.071', 'RIZKY ARDIANSYAH ', 'XI TKJ 1'),
(171, '611/230.071', 'VIONARA ILHAM JALESTARA', 'XI TKJ 1'),
(172, '612/231.071', 'WIDIANTO SETYO NUGROHO', 'XI TKJ 1'),
(175, '613/232.071', 'WISNU NUR ISMAIL', 'XI TKJ 2'),
(176, '614/233.071', 'ADIL WANSANDI', 'XI TKJ 2'),
(177, '615/234.071', 'AHMAD ADE ANANTO', 'XI TKJ 2'),
(178, '616/235.071', 'AHMAD HAFIDHI HAMAM', 'XI TKJ 2'),
(179, '617/236.071', 'AHMAD SABIL', 'XI TKJ 2'),
(180, '618/237.071', 'AKBAR RAMADAN WIBOWO', 'XI TKJ 2'),
(181, '621/240.071', 'AQIL HADISTANA', 'XI TKJ 2'),
(182, '622/241.071', 'DANU DININGRAT', 'XI TKJ 2'),
(183, '623/242.071', 'DHANI RAMADHAN SETIAWAN', 'XI TKJ 2'),
(184, '624/243.071', 'DIVA MIFTACHUL RAHMA', 'XI TKJ 2'),
(185, '625/244.071', 'IVAN LIANSYAH', 'XI TKJ 2'),
(186, '626/245.071', 'JIHAN FARAH ADIBAH', 'XI TKJ 2'),
(187, '627/246.071', 'KHALIQU AZIZIL HAKIM AL BALADO', 'XI TKJ 2'),
(188, '628/247.071', 'LAZUARDI KIVLAN EGA AL KAUTSAR', 'XI TKJ 2'),
(189, '629/248.071', 'M. HAFID ALDIANSYAH', 'XI TKJ 2'),
(190, '630/249.071', 'M. ROBIUL NIZAR', 'XI TKJ 2'),
(191, '631/250.071', 'MOCH. SAHRIL IRFAN AHMAD', 'XI TKJ 2'),
(192, '632/251.071', 'MOCHAMMAD AJI BAGUS FIRMANSYAH', 'XI TKJ 2'),
(193, '633/252.071', 'MOH FAIS KORNIANTO', 'XI TKJ 2'),
(194, '636/255.071', 'MUHAMMAD MAHAMERU SYAILENDRA', 'XI TKJ 2'),
(195, '637/256.071', 'MUHAMMAD SYAHRADAN AFIFE', 'XI TKJ 2'),
(196, '638/257.071', 'MUHAMMAD ZAINUR RIFQI', 'XI TKJ 2'),
(197, '639/258.071', 'REGI WIDI AUDIANSYAH P', 'XI TKJ 2'),
(198, '640/259.071', 'RIZKY ARIF DARMAWAN', 'XI TKJ 2'),
(199, '641/260.071', 'SYAHRUL IBNU RAFI', 'XI TKJ 2'),
(200, '642/261.071', 'TITIN IRA SITI AMINAH', 'XI TKJ 2'),
(201, '643/262.071', 'TUNKY ARIWIBOWO AHMAD', 'XI TKJ 2'),
(202, '645/264.071', 'WAHYU ADI PRATAMA SOEWANDI', 'XI TKJ 2'),
(203, '727/267.071', 'M.GANDY WAHYU RAMADHAN', 'XI TKJ 2'),
(204, '644/263.071', 'VIKSA PRADATA PUTRI', 'XI TKJ 2'),
(207, '504/204.072', 'SAADILLAH FATTAH', 'XI MM 1'),
(208, '526/226.072', 'NUKIE LANANDA PRATAMA', 'XI MM 1'),
(209, '648/264.072', 'ACHMAD NUR ISTIGHOST', 'XI MM 1'),
(210, '649/265.072', 'ADE ICHA IRWANTI', 'XI MM 1'),
(211, '650/266.072', 'ADITYA WISNU ILHAM PRAMUDYA', 'XI MM 1'),
(212, '651/267.072', 'AINAN MUSTAWANUL IHSAN', 'XI MM 1'),
(213, '652/268.072', 'ALIFA RIZQI FAJRIANI', 'XI MM 1'),
(214, '653/269.072', 'CEVIN RAHADIANSAH', 'XI MM 1'),
(215, '654/270.072', 'DEA DWI ANITA', 'XI MM 1'),
(216, '655/271.072', 'DEWI TANJUNG SAFITRI', 'XI MM 1'),
(217, '656/272.072', 'DIAJENG MARETA L', 'XI MM 1'),
(218, '657/273.072', 'ELLY KHUMAIROH ', 'XI MM 1'),
(219, '658/274.072', 'FIRDA DWI FEBRIANTI', 'XI MM 1'),
(220, '659/275.072', 'GILANG ILHAM S', 'XI MM 1'),
(221, '660/276.072', 'GITA PUTRI AZAHRO', 'XI MM 1'),
(222, '661/277.072', 'HANIN DITA DIFANI PUTRI', 'XI MM 1'),
(223, '662/278.072', 'HILMAN RASYID A', 'XI MM 1'),
(224, '663/279.072', 'JASMINE REANDINI MAULIDA', 'XI MM 1'),
(225, '664/280.072', 'LUKMAN HAKIM', 'XI MM 1'),
(226, '665/281.072', 'MELINDA FEBY IZZATY', 'XI MM 1'),
(227, '666/282.072', 'MOCH AFDDLOLLUDIN ARIF ROSDAN', 'XI MM 1'),
(228, '667/283.072', 'MUHAMMAD ALFA RIZKY H', 'XI MM 1'),
(229, '668/284.072', 'MUHAMMAD HANIFAN ', 'XI MM 1'),
(230, '669/285.072', 'MUHAMMAD REZALDI PRASETYA', 'XI MM 1'),
(231, '670/286.072', 'MUHAMMAD SINDU YUWONO', 'XI MM 1'),
(232, '671/287.072', 'MUHAMMAD WISNU W', 'XI MM 1'),
(233, '672/288.072', 'NADYA PUTRI ALIFIA', 'XI MM 1'),
(234, '673/289.072', 'NANDA EKA AYU P', 'XI MM 1'),
(235, '674/290.072', 'NOURMA DESIKA RAHMADANI', 'XI MM 1'),
(236, '675/291.072', 'NUR MAGHFIROTUL HASANAH', 'XI MM 1'),
(237, '676/292.072', 'OKKY DWI KRISTANTO', 'XI MM 1'),
(238, '677/293.072', 'PINASTI VIONELIA', 'XI MM 1'),
(239, '678/294.072', 'RIKA AYU WULANDARI', 'XI MM 1'),
(240, '679/295.072', 'RIKI SETYANANDA RIFA''I', 'XI MM 1'),
(241, '680/296.072', 'SAFIRA ELSA QURANY', 'XI MM 1'),
(242, '681/297.072', 'SAYYID FARHAN ARSYAMS', 'XI MM 1'),
(243, '682/298.072', 'SHELLA SHOFIYANNAJAH', 'XI MM 1'),
(244, '683/299.072', 'TASYA MANIA', 'XI MM 1'),
(245, '684/300.072', 'YENNY SUKMAWATI', 'XI MM 1'),
(246, '685/301.072', 'YULI ARSITA D H', 'XI MM 1'),
(247, '686/302.072', 'ZENDI ASRIEL A. J', 'XI MM 2'),
(248, '687/303.072', 'ADE VIKE PUTRI SUSAN', 'XI MM 2'),
(249, '688/304.072', 'AJENG DWI SAFITRI ', 'XI MM 2'),
(250, '689/305.072', 'AJI NURUDIN ARANIRI', 'XI MM 2'),
(251, '691/307.072', 'ALIFIAN PUTRA PRATAMA', 'XI MM 2'),
(252, '692/308.072', 'ANUGRAH YOGA ADI PRATAMA', 'XI MM 2'),
(253, '693/309.072', 'ARIEL RAMADHAN', 'XI MM 2'),
(254, '694/310.072', 'AYU MURTI WIJAYANTI', 'XI MM 2'),
(255, '695/311.072', 'BASMAH MUTHIAN', 'XI MM 2'),
(256, '696/312.072', 'CHOIRUROHMAH NADIA', 'XI MM 2'),
(257, '697/313.072', 'DEA MARETHA YOLANDA', 'XI MM 2'),
(258, '698/314.072', 'DELFINA AGUSTIN NUR AZIZAH', 'XI MM 2'),
(259, '699/315.072', 'DEWI RAHMAWATI', 'XI MM 2'),
(260, '700/316.072', 'DINAR ADINDA SAFITRI', 'XI MM 2'),
(261, '701/317.072', 'GALANG SYGNORA SHIVA SUGANDA PUTRA', 'XI MM 2'),
(262, '702/318.072', 'GITA DWI APRILIA', 'XI MM 2'),
(263, '703/319.072', 'JAMALUDDIN RAHMAT', 'XI MM 2'),
(264, '704/320.072', 'KEMAS AZZAM JIBRIL', 'XI MM 2'),
(265, '705/321.072', 'M. REYHAN ANFASA', 'XI MM 2'),
(266, '706/322.072', 'MOHAMMAD FEBRIANTO', 'XI MM 2'),
(267, '707/323.072', 'MUHAMMAD ADAM SULTAN ALDINO', 'XI MM 2'),
(268, '708/324.072', 'MUHAMMAD ALFIAN B A', 'XI MM 2'),
(269, '709/325.072', 'MUHAMMAD KELVIN ALDIANSYAH', 'XI MM 2'),
(270, '710/326.072', 'NAZIRA AINA MARDIKARI', 'XI MM 2'),
(271, '711/327.072', 'NUR AINI KURNIA SARI', 'XI MM 2'),
(272, '712/328.072', 'NUR FAJRINA ISTISARAH', 'XI MM 2'),
(273, '713/329.072', 'PANDU DWI ARGA RAMADHAN', 'XI MM 2'),
(274, '714/330.072', 'PRATIWI PUTRI WAHYUDI', 'XI MM 2'),
(275, '715/331.072', 'RANI TRI UTAMI', 'XI MM 2'),
(276, '716/332.072', 'REXY REZALDY GHOZALI', 'XI MM 2'),
(277, '717/333.072', 'RHEZA WAHYU RAMADHAN', 'XI MM 2'),
(278, '718/334.072', 'RIFDA AMELIA ', 'XI MM 2'),
(279, '719/335.072', 'RIZQI YAHYA MAHENDRA', 'XI MM 2'),
(280, '720/336.072', 'SATRIA BUDI UTOMO', 'XI MM 2'),
(281, '721/337.072', 'SAVIRA BADE DWI LAUDRY', 'XI MM 2'),
(282, '722/338.072', 'SAYYIDAH NAFISAH NUKMAN', 'XI MM 2'),
(283, '723/339.072', 'SEPTIARA DWI YUDHA', 'XI MM 2'),
(284, '724/340.072', 'SHERIL BUNGAHASTI ALIMAH', 'XI MM 2'),
(285, '725/341.072', 'TARISA FITRIAH', 'XI MM 2'),
(286, '726/342.072', 'TIO VEDYANATA', 'XI MM 2'),
(311, '324 / 139 . 071', 'MOCHAMMAD ROMADANI', 'XII TKJ 1'),
(312, '433/150.071', 'ADE RIBUT DJIWANDONO', 'XII TKJ 1'),
(313, '434/151.071', 'AHMAD HUDZAIFAH ALGHIFARI', 'XII TKJ 1'),
(314, '436/153.071', 'DIAZ FERDINAND', 'XII TKJ 1'),
(315, '437/154.071', 'DIKY SETIAWAN', 'XII TKJ 1'),
(316, '439/156.071', 'GILANG BAGAS ANDRIANTO', 'XII TKJ 1'),
(317, '440/157.071', 'ILHAM ROMADHON AIRLANGGA', 'XII TKJ 1'),
(318, '441/158.071', 'INDRI PRATIWI', 'XII TKJ 1'),
(319, '442/159.071', 'JOHAN ANDRI LIONO', 'XII TKJ 1'),
(320, '443/160.071', 'KARTIKA PUTRI RAHAYUNING MAWARTI', 'XII TKJ 1'),
(321, '444/161.071', 'M. AFRIYANSYAH BAIHAQI', 'XII TKJ 1'),
(322, '445/162.071', 'M.YOGI CHANDRA FIRDAUS', 'XII TKJ 1'),
(323, '446/163.071', 'MUHAMMAD DIAS RAHMANSYAH PUTRA', 'XII TKJ 1'),
(324, '447/164.071', 'MOCH. RIZKY ALIF ANANDA', 'XII TKJ 1'),
(325, '448/165.071', 'MOCHAMMAD ZAKARIA SUNGKAR', 'XII TKJ 1'),
(326, '449/166.071', 'MUHAMMAD JASKHI RIFALDI', 'XII TKJ 1'),
(327, '450/167.071', 'OKY ARBIANTO', 'XII TKJ 1'),
(328, '451/168.071', 'R. NIDA KURNIA RAHIM', 'XII TKJ 1'),
(329, '452/169.071', 'TEGUH AHMAD ABDURRASYID', 'XII TKJ 1'),
(330, '453/170.071', 'WAHYU AINUR ROBBI', 'XII TKJ 1'),
(331, '455/172.071', 'WIDYA WARDANA', 'XII TKJ 1'),
(332, '456/173.071', 'YAHYA TALIB', 'XII TKJ 2'),
(333, '457/174.071', 'YAZID ARAFATUL NIZAM', 'XII TKJ 2'),
(334, '458/175.071', 'ZICO RISKY HARTAWAN ', 'XII TKJ 2'),
(335, '459/176.071', 'ABDUL AZIZ', 'XII TKJ 2'),
(336, '460/177.071', 'AHMAD TEGUH SANTOSO', 'XII TKJ 2'),
(337, '461/178.071', 'AJI PRASETYO PUTRA RACHMAN', 'XII TKJ 2'),
(338, '463/180.071', 'ALBETTO DWI RIKARDO', 'XII TKJ 2'),
(339, '464/181.071', 'ALFIAN SURYA ABDULLOH', 'XII TKJ 2'),
(340, '465/182.071', 'ANANDA TIRTA VITRIARIYANI', 'XII TKJ 2'),
(341, '466/183.071', 'ARI PUTRA UTAMA', 'XII TKJ 2'),
(342, '467/184.071', 'AYASY ABBAS ALFARUQ', 'XII TKJ 2'),
(343, '468/185.071', 'BRYAN RAHMAWAN PUTRA', 'XII TKJ 2'),
(344, '470/187.071', 'DODI YAYAK MEGA PRANATA', 'XII TKJ 2'),
(345, '471/188.071', 'FEBY PRASILIA ARAGANI', 'XII TKJ 2'),
(346, '472/189.071', 'FIQI RACHMADIANSYAH', 'XII TKJ 2'),
(347, '474/191.071', 'M. SAIFUL ARIF', 'XII TKJ 2'),
(348, '476/193.071', 'MUHAMMAD FAISAL DZULKIFLI R', 'XII TKJ 2'),
(349, '477/194.071', 'NICO HADIYANSYAH', 'XII TKJ 2'),
(350, '479/196.071', 'RIZKY NUR CHASANAH', 'XII TKJ 2'),
(351, '480/197.071', 'RIZKY NURROCHMAD ISMAIL', 'XII TKJ 2'),
(352, '481/198.071', 'WAHYU DWI NURCAHYO', 'XII TKJ 2'),
(353, '482/199.071', 'WAHYU SUSANTO', 'XII TKJ 2'),
(354, '371/154.072', 'ANGGER BAGUS SUKMO K.', 'XII MM 1'),
(355, '372/155.065', 'ANJAS AGIL PRAKOSO', 'XII MM 1'),
(356, '483/183.072', 'ADIKTA DEARMANDA', 'XII MM 1'),
(357, '484/184.072', 'ADITIA SAPUTRA', 'XII MM 1'),
(358, '485/185.072', 'AHMAD ANDI', 'XII MM 1'),
(359, '486/186.072', 'ALAN DIAN PUJA LESTARI', 'XII MM 1'),
(360, '487/187.072', 'ANDI REVIAN MALEMPU''ADA', 'XII MM 1'),
(361, '488/188.072', 'ANJAS WIDYA SARI', 'XII MM 1'),
(362, '489/189.072', 'ARGA ADI PRATAMA', 'XII MM 1'),
(363, '490/190.072', 'AULIA JIHAN RIFANI', 'XII MM 1'),
(364, '491/191.072', ' AULIA RETA YOLANDA', 'XII MM 1'),
(365, '492/192.072', 'BAGUS HIDAYATULLAH', 'XII MM 1'),
(366, '493/193.072', 'BUNGA IFFA ASIFA', 'XII MM 1'),
(367, '494/194.072', 'ELYNA DWIYANTI', 'XII MM 1'),
(368, '495/195.072', 'FANY ADI SETYAWAN', 'XII MM 1'),
(369, '496/196.072', 'HILWA ILLYYIN SABILLAH', 'XII MM 1'),
(370, '497/197.072', 'IKKE ELLYANA', 'XII MM 1'),
(371, '498/198.072', 'IRFAN ABDI FIRJATULLAH', 'XII MM 1'),
(372, '499/199.072', 'MIFTACHUS SYAHRIL HIDAYAT', 'XII MM 1'),
(373, '500/200.072', 'NUR AISYAH KHUMAIROH', 'XII MM 1'),
(374, '501/201.072', 'PAJAR IMAN DIAN SYAHPUTRO', 'XII MM 1'),
(375, '502/202.072', 'RENI SAPNAWATI', 'XII MM 1'),
(376, '503/203.072', 'RIZKI SETYO SAMUDERO', 'XII MM 1'),
(377, '505/205.072', 'SAIFUL ANWAR', 'XII MM 1'),
(378, '506/206.072', 'SEVIKA ANGGRAINI', 'XII MM 1'),
(379, '507/207.072', 'SHOFFIANA DWI MUSTIKASARI', 'XII MM 1'),
(380, '508/208.072', 'WIKA KUSUMANINGTYAS', 'XII MM 1'),
(381, '580/263.072', 'SITI NURIL AINI', 'XII MM 1'),
(382, '509/209.072', 'ALLICIAN CAHYA WENING', 'XII MM 1'),
(383, '510/210.072', 'DESIREE PENI CHINDY KHATRINE', 'XII MM 1'),
(384, '511/211.072', 'DIDIK SUGIONO', 'XII MM 1'),
(385, '512/212.072', 'DIMAS FERLI DWI SYAHPUTRA', 'XII MM 1'),
(386, '513/213.072', 'FAIZAL IMAMI UTOMO', 'XII MM 1'),
(387, '514/214.072', 'FLANDY DIAZ PRATAMA', 'XII MM 1'),
(388, '515/215.072', 'HALUDY SHOFIE', 'XII MM 1'),
(389, '516/216.072', 'INDRA PRATAMA', 'XII MM 1'),
(390, '517/217.072', 'IRA SOPI YANA', 'XII MM 1'),
(391, '518/218.072', 'IZZATUL FIRDA', 'XII MM 1'),
(392, '519/219.072', 'JOHANSYAH NICO SUWARNO', 'XII MM 1'),
(393, '520/220.072', 'LAILATUL FITRIYAH', 'XII MM 1'),
(394, '521/221.072', 'LINDAWATI', 'XII MM 2'),
(395, '522/222.072', 'M. REZA YUSUF MA''ARIF', 'XII MM 2'),
(396, '523/223.072', 'MARWAN SUSANTO', 'XII MM 2'),
(397, '524/224.072', 'MUHAMMAD REAN IHTIFAZHUDDIN', 'XII MM 2'),
(398, '525/225.072', 'MULTININGSIH', 'XII MM 2'),
(399, '527/227.072', 'NUR ABIDATUL KHOIROH', 'XII MM 2'),
(400, '529/229.072', 'POPY PUTRI MAHARANI', 'XII MM 2'),
(401, '530/230.072', 'RISMA QOINITA SUCI UTARI', 'XII MM 2'),
(402, '531/231.072', 'RIZKHI FAUZY', 'XII MM 2'),
(403, '532/232.072', 'SALIM ZAELANI', 'XII MM 2'),
(404, '533/233.072', 'SASTIYA', 'XII MM 2'),
(405, '534/234.072', 'SUSILO HADI PRANOTO', 'XII MM 2'),
(406, '535/235.072', 'SUSIYATI NINGSIH', 'XII MM 2'),
(407, '536/236.072', 'ACHMAD AGUSTI DICKY SAPUTRA', 'XII MM 2'),
(408, '537/237.072', 'ACHMAD FAUZI', 'XII MM 2'),
(409, '538/238.072', 'AGUNG SETIA BUDI', 'XII MM 2'),
(410, '539/239.072', 'AGUSTIA DWI KURNIASIH', 'XII MM 2'),
(411, '540/240.072', 'ANIS CHAIRUNISSA', 'XII MM 2'),
(412, '541/241.072', 'AYU TRI SETIANINGRUM', 'XII MM 2'),
(413, '542/242.072', 'DETRI IS AGUSTINA', 'XII MM 2'),
(414, '543/243.072', ' DWI CAHYON HAFIF PRASETYO', 'XII MM 2'),
(415, '544/244.072', 'FAISHAL PRAHATMA GANINDA', 'XII MM 2'),
(416, '545/245.072', 'HAIDAR ALI', 'XII MM 2'),
(417, '546/246.072', 'ILYASA WAHYU HANGGARA', 'XII MM 2'),
(418, '547/247.072', 'JELANG SATRIA DWIJAYA', 'XII MM 2'),
(419, '549/249.072', 'MEGA OKTAVIA', 'XII MM 2'),
(420, '550/250.072', 'MOH. ARIF BUDIWANSYAH', 'XII MM 2'),
(421, '551/251.072', 'MUHAMMAD INAN KAUTSAR', 'XII MM 2'),
(422, '552/252.072', 'MUHAMMAD JAFAR SHODIQ', 'XII MM 2'),
(423, '553/253.072', 'NOVIA AYU RIYANTO', 'XII MM 2'),
(424, '554/254.072', 'NURUL RIFATUL AINIYA', 'XII MM 2'),
(425, '555/255.072', 'RENI OKTAFIANA', 'XII MM 2'),
(426, '556/256.072', 'RINDA NURVITA SARI', 'XII MM 2'),
(427, '557/257.072', 'ROCHAINI SAFITRI', 'XII MM 2'),
(428, '558/258.072', 'SELVI AMELIA', 'XII MM 2'),
(429, '559/259.072', 'SURYANTO', 'XII MM 2'),
(430, '560/260.072', 'VIVIANY GHAIDA SARTIKA', 'XII MM 2'),
(431, '561/261.072', ' ZULFA ISHLAHUL MUJTAHIDAH', 'XII MM 2'),
(432, '425 /096.116', 'TEO TANJUNG BASRI JENIANTO', 'XII ANM'),
(433, '562/102.073', 'ACHMAD DICKY SETIAWAN', 'XII ANM'),
(434, '563/103.073', 'AGUS ARIEF PRASTYO', 'XII ANM'),
(435, '564/104.073', 'DIMAS PUTRA RAMADHAN', 'XII ANM'),
(436, '565/105.073', 'EVA DWI MAULANA', 'XII ANM'),
(437, '566/106.073', 'FABIN BIMA PRADANA PUTERA', 'XII ANM'),
(438, '567/107.073', 'FARANDY DWI PUTRA WINATA', 'XII ANM'),
(439, '568/108.073', 'HERI SUKAMTO', 'XII ANM'),
(440, '569/109.073', 'JAUHARUDDIAR AHMAD ', 'XII ANM'),
(441, '570/110.073', 'JOHANDI NAUFAL', 'XII ANM'),
(442, '572/112.073', 'MOCHAMMAD IQBAL MAULANA ZULMI', 'XII ANM'),
(443, '573/113.073', 'MUHAMMAD DZULHIJ', 'XII ANM'),
(444, '574/114.073', 'OKTA KURNIAWATI', 'XII ANM'),
(445, '575/115.073', 'OMAR MUKHTAR', 'XII ANM'),
(446, '576/116.073', 'TAQIYUDDIN NURSY', 'XII ANM'),
(447, '578/118.073', 'TRI ASTUTIK WAHYU NENGSE', 'XII ANM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_hafalan`
--

CREATE TABLE IF NOT EXISTS `siswa_hafalan` (
  `no` int(11) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `hafalan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa_hafalan`
--

INSERT INTO `siswa_hafalan` (`no`, `induk`, `nama`, `kelas`, `hafalan`) VALUES
(1, '455/172.071', 'WIDYA WARDANA', 'XII TKJ 1', 'An-Naba \nAbasa'),
(2, '451/168.071', 'R. NIDA KURNIA RAHIM', 'XII TKJ 1', 'Al-Inshiqaaq ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `no` int(11) NOT NULL,
  `surat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`no`, `surat`) VALUES
(1, 'An-Naba '),
(2, 'An-Naazi''aat'),
(3, 'Abasa'),
(4, 'At-Takwir'),
(5, 'Al-Infitaar'),
(6, 'Al-Mutaffifin'),
(7, 'Al-Inshiqaaq '),
(8, 'Al-Burooj'),
(9, 'At-Taariq'),
(10, 'Al-A''laa'),
(11, 'Al-Ghaashiya'),
(12, 'Al-Fajr'),
(13, 'Al-Balad '),
(14, 'Ash-Shams'),
(15, 'Al-Lail'),
(16, 'Ad-Dhuhaa'),
(17, 'Ash-Sharh'),
(18, 'At-Tin'),
(19, 'Al-Alaq '),
(20, 'Al-Qadr'),
(21, 'Al-Bayyina'),
(22, 'Az-Zalzala'),
(23, 'Al-Aadiyaat'),
(24, 'Al-Qaari''a'),
(25, 'At-Takaathur '),
(26, 'Al-Asr'),
(27, 'Al-Humaza'),
(28, 'Al-Fil'),
(29, 'Quraish'),
(30, 'Al-Maa''un'),
(31, 'Al-Kawthar '),
(32, 'Al-Kaafiroon'),
(33, 'An-Nasr'),
(34, 'Al-Masad'),
(35, 'Al-Ikhlaas'),
(36, 'Al-Falaq'),
(37, 'An-Naas ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun-ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun-ajaran` (
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun-ajaran`
--

INSERT INTO `tahun-ajaran` (`tahun`) VALUES
('2016/2017'),
('2017/2018'),
('2015/2016'),
('2018/2019'),
('2014/2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `terlambat`
--

CREATE TABLE IF NOT EXISTS `terlambat` (
  `no` int(11) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `hafalan` varchar(50) NOT NULL,
  `guru` varchar(100) NOT NULL,
  `tahun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `terlambat`
--

INSERT INTO `terlambat` (`no`, `induk`, `nama`, `kelas`, `tanggal`, `hafalan`, `guru`, `tahun`) VALUES
(1, '455/172.071', 'WIDYA WARDANA', 'XII TKJ 1', '2016-09-06', 'Abasa', 'Yayuk Herawati, S.Pd.', '2016/2017'),
(2, '455/172.071', 'WIDYA WARDANA', 'XII TKJ 1', '2016-09-06', 'An-Naba ', 'Sudarti, S.Ag', '2016/2017'),
(3, '451/168.071', 'R. NIDA KURNIA RAHIM', 'XII TKJ 1', '2016-09-06', 'Al-Inshiqaaq ', 'Sudarti, S.Ag', '2016/2017'),
(4, '654/270.072', 'DEA DWI ANITA', 'XI MM 1', '2016-09-08', 'Al-Burooj', 'Taufiq Amri, S.Pd', '2016/2017');
