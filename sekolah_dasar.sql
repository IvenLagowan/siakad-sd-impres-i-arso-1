-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 08:42 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_dasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_kelas`
--

CREATE TABLE `absensi_kelas` (
  `ID_ABSENSI` varchar(15) NOT NULL,
  `ID_SISWA` int(11) DEFAULT NULL,
  `TGL` date DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_hari`
--

CREATE TABLE `data_hari` (
  `ID_HARI` int(11) NOT NULL,
  `NAMA_HARI` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_hari`
--

INSERT INTO `data_hari` (`ID_HARI`, `NAMA_HARI`) VALUES
(1, 'SENIN'),
(2, 'SELASA'),
(3, 'RABU'),
(4, 'KAMIS'),
(5, 'JUM\'AT'),
(6, 'SABTU');

-- --------------------------------------------------------

--
-- Table structure for table `data_kota`
--

CREATE TABLE `data_kota` (
  `ID_KOTA` int(11) NOT NULL,
  `NAMA_KOTA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kota`
--

INSERT INTO `data_kota` (`ID_KOTA`, `NAMA_KOTA`) VALUES
(514, 'Aceh Barat'),
(515, 'Aceh Barat Daya'),
(516, 'Aceh Besar'),
(517, 'Aceh Jaya'),
(518, 'Aceh Selatan'),
(519, 'Aceh Singkil'),
(520, 'Aceh Tamiang'),
(521, 'Aceh Tengah'),
(522, 'Aceh Tenggara'),
(523, 'Aceh Timur'),
(524, 'Aceh Utara'),
(525, 'Agam'),
(526, 'Alor'),
(527, 'Ambon'),
(528, 'Asahan'),
(529, 'Asmat'),
(530, 'Badung'),
(531, 'Balangan'),
(532, 'Balikpapan'),
(533, 'Banda Aceh'),
(534, 'Bandar Lampung'),
(535, 'Bandung'),
(536, 'Bandung'),
(537, 'Bandung Barat'),
(538, 'Banggai'),
(539, 'Banggai Kepulauan'),
(540, 'Banggai Laut'),
(541, 'Bangka'),
(542, 'Bangka Barat'),
(543, 'Bangka Selatan'),
(544, 'Bangka Tengah'),
(545, 'Bangkalan'),
(546, 'Bangli'),
(547, 'Banjar'),
(548, 'Banjar'),
(549, 'Banjarbaru'),
(550, 'Banjarmasin'),
(551, 'Banjarnegara'),
(552, 'Bantaeng'),
(553, 'Bantul'),
(554, 'Banyuasin'),
(555, 'Banyumas'),
(556, 'Banyuwangi'),
(557, 'Barito Kuala'),
(558, 'Barito Selatan'),
(559, 'Barito Timur'),
(560, 'Barito Utara'),
(561, 'Barru'),
(562, 'Batam'),
(563, 'Batang'),
(564, 'Batang Hari'),
(565, 'Batu'),
(566, 'Batu Bara'),
(567, 'Bau-Bau'),
(568, 'Bekasi'),
(569, 'Bekasi'),
(570, 'Belitung'),
(571, 'Belitung Timur'),
(572, 'Belu'),
(573, 'Bener Meriah'),
(574, 'Bengkalis'),
(575, 'Bengkayang'),
(576, 'Bengkulu'),
(577, 'Bengkulu Selatan'),
(578, 'Bengkulu Tengah'),
(579, 'Bengkulu Utara'),
(580, 'Berau'),
(581, 'Biak Numfor'),
(582, 'Bima'),
(583, 'Bima'),
(584, 'Binjai'),
(585, 'Bintan'),
(586, 'Bireuen'),
(587, 'Bitung'),
(588, 'Blitar'),
(589, 'Blitar'),
(590, 'Blora'),
(591, 'Boalemo'),
(592, 'Bogor'),
(593, 'Bogor'),
(594, 'Bojonegoro'),
(595, 'Bolaang Mongondow'),
(596, 'Bolaang Mongondow Selatan'),
(597, 'Bolaang Mongondow Timur'),
(598, 'Bolaang Mongondow Utara'),
(599, 'Bombana'),
(600, 'Bondowoso'),
(601, 'Bone'),
(602, 'Bone Bolango'),
(603, 'Bontang'),
(604, 'Boven Digoel'),
(605, 'Boyolali'),
(606, 'Brebes'),
(607, 'Bukittinggi'),
(608, 'Buleleng'),
(609, 'Bulukumba'),
(610, 'Bulungan'),
(611, 'Bungo'),
(612, 'Buol'),
(613, 'Buru'),
(614, 'Buru Selatan'),
(615, 'Buton'),
(616, 'Buton Selatan'),
(617, 'Buton Tengah'),
(618, 'Buton Utara'),
(619, 'Ciamis'),
(620, 'Cianjur'),
(621, 'Cilacap'),
(622, 'Cilegon'),
(623, 'Cimahi'),
(624, 'Cirebon'),
(625, 'Cirebon'),
(626, 'Dairi'),
(627, 'Deiyai'),
(628, 'Deli Serdang'),
(629, 'Demak'),
(630, 'Denpasar'),
(631, 'Depok'),
(632, 'Dharmasraya'),
(633, 'Dogiyai'),
(634, 'Dompu'),
(635, 'Donggala'),
(636, 'Dumai'),
(637, 'Empat Lawang'),
(638, 'Ende'),
(639, 'Enrekang'),
(640, 'Fakfak'),
(641, 'Flores Timur'),
(642, 'Garut'),
(643, 'Gayo Lues'),
(644, 'Gianyar'),
(645, 'Gorontalo'),
(646, 'Gorontalo'),
(647, 'Gorontalo Utara'),
(648, 'Gowa'),
(649, 'Gresik'),
(650, 'Grobogan'),
(651, 'Gunung Kidul'),
(652, 'Gunung Mas'),
(653, 'Gunungsitoli'),
(654, 'Halmahera Barat'),
(655, 'Halmahera Selatan'),
(656, 'Halmahera Tengah'),
(657, 'Halmahera Timur'),
(658, 'Halmahera Utara'),
(659, 'Hulu Sungai Selatan'),
(660, 'Hulu Sungai Tengah'),
(661, 'Hulu Sungai Utara'),
(662, 'Humbang Hasundutan'),
(663, 'Indragiri Hilir'),
(664, 'Indragiri Hulu'),
(665, 'Indramayu'),
(666, 'Intan Jaya'),
(667, 'Jakarta Barat'),
(668, 'Jakarta Pusat'),
(669, 'Jakarta Selatan'),
(670, 'Jakarta Timur'),
(671, 'Jakarta Utara'),
(672, 'Jambi'),
(673, 'Jayapura'),
(674, 'Jayapura'),
(675, 'Jayawijaya'),
(676, 'Jember'),
(677, 'Jembrana'),
(678, 'Jeneponto'),
(679, 'Jepara'),
(680, 'Jombang'),
(681, 'Kaimana'),
(682, 'Kampar'),
(683, 'Kapuas'),
(684, 'Kapuas Hulu'),
(685, 'Karanganyar'),
(686, 'Karangasem'),
(687, 'Karawang'),
(688, 'Karimun'),
(689, 'Karo'),
(690, 'Katingan'),
(691, 'Kaur'),
(692, 'Kayong Utara'),
(693, 'Kebumen'),
(694, 'Kediri'),
(695, 'Kediri'),
(696, 'Keerom'),
(697, 'Kendal'),
(698, 'Kendari'),
(699, 'Kepahiang'),
(700, 'Kepulauan Anambas'),
(701, 'Kepulauan Aru'),
(702, 'Kepulauan Mentawai'),
(703, 'Kepulauan Meranti'),
(704, 'Kepulauan Sangihe'),
(705, 'Kepulauan Selayar'),
(706, 'Kepulauan Seribu'),
(707, 'Kepulauan Siau Tagulandang Biaro (Sitaro)'),
(708, 'Kepulauan Sula'),
(709, 'Kepulauan Talaud'),
(710, 'Kepulauan Yapen'),
(711, 'Kerinci'),
(712, 'Ketapang'),
(713, 'Klaten'),
(714, 'Klungkung'),
(715, 'Kolaka'),
(716, 'Kolaka Timur'),
(717, 'Kolaka Utara'),
(718, 'Konawe'),
(719, 'Konawe Kepulauan'),
(720, 'Konawe Selatan'),
(721, 'Konawe Utara'),
(722, 'Kotabaru'),
(723, 'Kotamobagu'),
(724, 'Kotawaringin Barat'),
(725, 'Kotawaringin Timur'),
(726, 'Kuantan Singingi'),
(727, 'Kubu Raya'),
(728, 'Kudus'),
(729, 'Kulon Progo'),
(730, 'Kuningan'),
(731, 'Kupang'),
(732, 'Kupang'),
(733, 'Kutai Barat'),
(734, 'Kutai Kartanegara'),
(735, 'Kutai Timur'),
(736, 'Labuhanbatu'),
(737, 'Labuhanbatu Selatan'),
(738, 'Labuhanbatu Utara'),
(739, 'Lahat'),
(740, 'Lamandau'),
(741, 'Lamongan'),
(742, 'Lampung Barat'),
(743, 'Lampung Selatan'),
(744, 'Lampung Tengah'),
(745, 'Lampung Timur'),
(746, 'Lampung Utara'),
(747, 'Landak'),
(748, 'Langkat'),
(749, 'Langsa'),
(750, 'Lanny Jaya'),
(751, 'Lebak'),
(752, 'Lebong'),
(753, 'Lembata'),
(754, 'Lhokseumawe'),
(755, 'Lima Puluh Kota'),
(756, 'Lingga'),
(757, 'Lombok Barat'),
(758, 'Lombok Tengah'),
(759, 'Lombok Timur'),
(760, 'Lombok Utara'),
(761, 'Lubuk Linggau'),
(762, 'Lumajang'),
(763, 'Luwu'),
(764, 'Luwu Timur'),
(765, 'Luwu Utara'),
(766, 'Madiun'),
(767, 'Madiun'),
(768, 'Magelang'),
(769, 'Magelang'),
(770, 'Magetan'),
(771, 'Mahakam Ulu'),
(772, 'Majalengka'),
(773, 'Majene'),
(774, 'Makassar'),
(775, 'Malaka'),
(776, 'Malang'),
(777, 'Malang'),
(778, 'Malinau'),
(779, 'Maluku Barat Daya'),
(780, 'Maluku Tengah'),
(781, 'Maluku Tenggara'),
(782, 'Maluku Tenggara Barat'),
(783, 'Mamasa'),
(784, 'Mamberamo Raya'),
(785, 'Mamberamo Tengah'),
(786, 'Mamuju'),
(787, 'Mamuju Tengah'),
(788, 'Mamuju Utara'),
(789, 'Manado'),
(790, 'Mandailing Natal'),
(791, 'Manggarai'),
(792, 'Manggarai Barat'),
(793, 'Manggarai Timur'),
(794, 'Manokwari'),
(795, 'Manokwari Selatan'),
(796, 'Mappi'),
(797, 'Maros'),
(798, 'Mataram'),
(799, 'Maybrat'),
(800, 'Medan'),
(801, 'Melawi'),
(802, 'Mempawah'),
(803, 'Merangin'),
(804, 'Merauke'),
(805, 'Mesuji'),
(806, 'Metro'),
(807, 'Mimika'),
(808, 'Minahasa'),
(809, 'Minahasa Selatan'),
(810, 'Minahasa Tenggara'),
(811, 'Minahasa Utara'),
(812, 'Mojokerto'),
(813, 'Mojokerto'),
(814, 'Morowali'),
(815, 'Morowali Utara'),
(816, 'Muara Enim'),
(817, 'Muaro Jambi'),
(818, 'Muko Muko'),
(819, 'Muna'),
(820, 'Muna Barat'),
(821, 'Murung Raya'),
(822, 'Musi Banyuasin'),
(823, 'Musi Rawas'),
(824, 'Musi Rawas Utara'),
(825, 'Nabire'),
(826, 'Nagan Raya'),
(827, 'Nagekeo'),
(828, 'Natuna'),
(829, 'Nduga'),
(830, 'Ngada'),
(831, 'Nganjuk'),
(832, 'Ngawi'),
(833, 'Nias'),
(834, 'Nias Barat'),
(835, 'Nias Selatan'),
(836, 'Nias Utara'),
(837, 'Nunukan'),
(838, 'Ogan Ilir'),
(839, 'Ogan Komering Ilir'),
(840, 'Ogan Komering Ulu'),
(841, 'Ogan Komering Ulu Selatan'),
(842, 'Ogan Komering Ulu Timur'),
(843, 'Pacitan'),
(844, 'Padang'),
(845, 'Padang Lawas'),
(846, 'Padang Lawas Utara'),
(847, 'Padang Panjang'),
(848, 'Padang Pariaman'),
(849, 'Padang Sidempuan'),
(850, 'Pagar Alam'),
(851, 'Pakpak Bharat'),
(852, 'Palangka Raya'),
(853, 'Palembang'),
(854, 'Palopo'),
(855, 'Palu'),
(856, 'Pamekasan'),
(857, 'Pandeglang'),
(858, 'Pangandaran'),
(859, 'Pangkajene Kepulauan'),
(860, 'Pangkal Pinang'),
(861, 'Paniai'),
(862, 'Parepare'),
(863, 'Pariaman'),
(864, 'Parigi Moutong'),
(865, 'Pasaman'),
(866, 'Pasaman Barat'),
(867, 'Paser'),
(868, 'Pasuruan'),
(869, 'Pasuruan'),
(870, 'Pati'),
(871, 'Payakumbuh'),
(872, 'Pegunungan Arfak'),
(873, 'Pegunungan Bintang'),
(874, 'Pekalongan'),
(875, 'Pekalongan'),
(876, 'Pekanbaru'),
(877, 'Pelalawan'),
(878, 'Pemalang'),
(879, 'Pematang Siantar'),
(880, 'Penajam Paser Utara'),
(881, 'Penukal Abab Lematang Ilir'),
(882, 'Pesawaran'),
(883, 'Pesisir Barat'),
(884, 'Pesisir Selatan'),
(885, 'Pidie'),
(886, 'Pidie Jaya'),
(887, 'Pinrang'),
(888, 'Pohuwato'),
(889, 'Polewali Mandar'),
(890, 'Ponorogo'),
(891, 'Pontianak'),
(892, 'Poso'),
(893, 'Prabumulih'),
(894, 'Pringsewu'),
(895, 'Probolinggo'),
(896, 'Probolinggo'),
(897, 'Pulang Pisau'),
(898, 'Pulau Morotai'),
(899, 'Pulau Taliabu'),
(900, 'Puncak'),
(901, 'Puncak Jaya'),
(902, 'Purbalingga'),
(903, 'Purwakarta'),
(904, 'Purworejo'),
(905, 'Raja Ampat'),
(906, 'Rejang Lebong'),
(907, 'Rembang'),
(908, 'Rokan Hilir'),
(909, 'Rokan Hulu'),
(910, 'Rote Ndao'),
(911, 'Sabang'),
(912, 'Sabu Raijua'),
(913, 'Salatiga'),
(914, 'Samarinda'),
(915, 'Sambas'),
(916, 'Samosir'),
(917, 'Sampang'),
(918, 'Sanggau'),
(919, 'Sarmi'),
(920, 'Sarolangun'),
(921, 'Sawah Lunto'),
(922, 'Sekadau'),
(923, 'Seluma'),
(924, 'Semarang'),
(925, 'Semarang'),
(926, 'Seram Bagian Barat'),
(927, 'Seram Bagian Timur'),
(928, 'Serang'),
(929, 'Serang'),
(930, 'Serdang Bedagai'),
(931, 'Seruyan'),
(932, 'Siak'),
(933, 'Sibolga'),
(934, 'Sidenreng Rappang'),
(935, 'Sidoarjo'),
(936, 'Sigi'),
(937, 'Sijunjung'),
(938, 'Sikka'),
(939, 'Simalungun'),
(940, 'Simeulue'),
(941, 'Singkawang'),
(942, 'Sinjai'),
(943, 'Sintang'),
(944, 'Situbondo'),
(945, 'Sleman'),
(946, 'Solok'),
(947, 'Solok'),
(948, 'Solok Selatan'),
(949, 'Soppeng'),
(950, 'Sorong'),
(951, 'Sorong'),
(952, 'Sorong Selatan'),
(953, 'Sragen'),
(954, 'Subang'),
(955, 'Subulussalam'),
(956, 'Sukabumi'),
(957, 'Sukabumi'),
(958, 'Sukamara'),
(959, 'Sukoharjo'),
(960, 'Sumba Barat'),
(961, 'Sumba Barat Daya'),
(962, 'Sumba Tengah'),
(963, 'Sumba Timur'),
(964, 'Sumbawa'),
(965, 'Sumbawa Barat'),
(966, 'Sumedang'),
(967, 'Sumenep'),
(968, 'Sungaipenuh'),
(969, 'Supiori'),
(970, 'Surabaya'),
(971, 'Surakarta'),
(972, 'Tabalong'),
(973, 'Tabanan'),
(974, 'Takalar'),
(975, 'Tambrauw'),
(976, 'Tana Tidung'),
(977, 'Tana Toraja'),
(978, 'Tanah Bumbu'),
(979, 'Tanah Datar'),
(980, 'Tanah Laut'),
(981, 'Tangerang'),
(982, 'Tangerang'),
(983, 'Tangerang Selatan'),
(984, 'Tanggamus'),
(985, 'Tanjung Balai'),
(986, 'Tanjung Jabung Barat'),
(987, 'Tanjung Jabung Timur'),
(988, 'Tanjung Pinang'),
(989, 'Tapanuli Selatan'),
(990, 'Tapanuli Tengah'),
(991, 'Tapanuli Utara'),
(992, 'Tapin'),
(993, 'Tarakan'),
(994, 'Tasikmalaya'),
(995, 'Tasikmalaya'),
(996, 'Tebing Tinggi'),
(997, 'Tebo'),
(998, 'Tegal'),
(999, 'Tegal'),
(1000, 'Teluk Bintuni'),
(1001, 'Teluk Wondama'),
(1002, 'Temanggung'),
(1003, 'Ternate'),
(1004, 'Tidore Kepulauan'),
(1005, 'Timor Tengah Selatan'),
(1006, 'Timor Tengah Utara'),
(1007, 'Toba Samosir'),
(1008, 'Tojo Una-Una'),
(1009, 'Toli-Toli'),
(1010, 'Tolikara'),
(1011, 'Tomohon'),
(1012, 'Toraja Utara'),
(1013, 'Trenggalek'),
(1014, 'Tual'),
(1015, 'Tuban'),
(1016, 'Tulang Bawang'),
(1017, 'Tulang Bawang Barat'),
(1018, 'Tulungagung'),
(1019, 'Wajo'),
(1020, 'Wakatobi'),
(1021, 'Waropen'),
(1022, 'Way Kanan'),
(1023, 'Wonogiri'),
(1024, 'Wonosobo'),
(1025, 'Yahukimo'),
(1026, 'Yalimo'),
(1027, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengajar`
--

CREATE TABLE `data_pengajar` (
  `ID_PENGAJAR` varchar(15) NOT NULL,
  `NIP` int(11) DEFAULT NULL,
  `NAMA_PENGAJAR` varchar(100) DEFAULT NULL,
  `ALAMAT_PENGAJAR` varchar(100) DEFAULT NULL,
  `JK` char(2) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengajar`
--

INSERT INTO `data_pengajar` (`ID_PENGAJAR`, `NIP`, `NAMA_PENGAJAR`, `ALAMAT_PENGAJAR`, `JK`, `FOTO`) VALUES
('5e27558d59357', 9090, 'po', 'yu', 'L', 'default.jpg'),
('5e344ad004f19', 1098, 'aan', 'benowo', 'L', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_ruang`
--

CREATE TABLE `data_ruang` (
  `ID_RUANG` int(11) NOT NULL,
  `NAMA_RUANG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_ruang`
--

INSERT INTO `data_ruang` (`ID_RUANG`, `NAMA_RUANG`) VALUES
(4, 'Ruang kelas satu A'),
(5, 'Ruang kelas satu B'),
(6, 'Ruang kelas dua A'),
(7, 'Ruang kelas dua B'),
(8, 'Ruang kelas tiga A'),
(9, 'Ruang kelas tiga B'),
(10, 'Ruang kelas empat A'),
(11, 'Ruang kelas empat B'),
(12, 'Ruang kelas Lima A'),
(13, 'Ruang kelas Lima B'),
(14, 'Ruang kelas Enam A'),
(15, 'Ruang kelas Enam B'),
(16, 'Ruang kelas satu c');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `NIS` varchar(15) DEFAULT NULL,
  `NAMA_SISWA` varchar(100) DEFAULT NULL,
  `ID_KELAS` int(11) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `ID_KOTA` int(11) DEFAULT NULL,
  `JENIS_KELAMIN` char(2) DEFAULT NULL,
  `WALI_MURID` varchar(100) DEFAULT NULL,
  `ALAMAT_SISWA` varchar(100) DEFAULT NULL,
  `FOTO_SISWA` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`ID_SISWA`, `NIS`, `NAMA_SISWA`, `ID_KELAS`, `ID_RUANG`, `ID_KOTA`, `JENIS_KELAMIN`, `WALI_MURID`, `ALAMAT_SISWA`, `FOTO_SISWA`) VALUES
(9, '09090909', 'p', 1, 5, 532, 'L', 'aan', 'popopopopo\"', 'default.jpg'),
(10, '8765', 'o', 2, 7, 531, 'P', 'aan', 'denpasar', 'default.jpg'),
(11, '12345', 'q', 3, 8, 531, 'P', 'qwe', 'qwe', 'default.jpg'),
(12, '2345', 't', 4, 11, 523, 'P', 'asek', 'kertajaya', 'default.jpg'),
(13, '5678', 'h', 5, 13, 548, 'L', 'asek', 'klkl', 'default.jpg'),
(14, '4567890', 'jk', 6, 16, 533, 'L', 'opoppopo', 'mkljljkjl', 'default.jpg'),
(15, '0909090909', 'dora', 5, 15, 914, 'L', 'aan', 'surabaya', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `ID_JADWAL` varchar(10) NOT NULL DEFAULT '',
  `ID_HARI` int(11) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL,
  `KODE_PELAJARAN` varchar(10) DEFAULT NULL,
  `ID_SEMESTER` varchar(10) DEFAULT NULL,
  `ID_PENGAJAR` varchar(15) DEFAULT NULL,
  `ID_JAM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`ID_JADWAL`, `ID_HARI`, `ID_RUANG`, `KODE_PELAJARAN`, `ID_SEMESTER`, `ID_PENGAJAR`, `ID_JAM`) VALUES
('5e275d7765', 5, 6, '5df8f72a10', '2', '5e27558d59357', 5),
('5e27b91f33', 2, 6, '5df8f6fa40', '2', '5e27558d59357', 4),
('5e394d79c1', 2, 5, '5df8f6fa40', '2', '5e344ad004f19', 1),
('5e3a2146bf', 4, 6, '5df8f70b44', '1', '5e344ad004f19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_piket`
--

CREATE TABLE `jadwal_piket` (
  `ID_PIKET` varchar(10) NOT NULL,
  `ID_HARI` int(11) DEFAULT NULL,
  `ID_SISWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `ID_JAM` int(11) NOT NULL,
  `WAKTU` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`ID_JAM`, `WAKTU`) VALUES
(1, '07.15 - 08.00'),
(2, '08.00 - 08.45'),
(3, '08.45 - 09.30'),
(4, '09.30 - 10.00'),
(5, '10.00 - 10.45'),
(6, '10.45 - 11.30'),
(7, '11.30 - 12.15');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `ID_KELAS` int(11) NOT NULL,
  `TINGKAT_KELAS` varchar(5) DEFAULT NULL,
  `KETERANGAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_KELAS`, `TINGKAT_KELAS`, `KETERANGAN`) VALUES
(1, 'I', 'Kelas satu'),
(2, 'II', 'Kelas dua'),
(3, 'III', 'Kelas tiga'),
(4, 'IV', 'Kelas empat'),
(5, 'V', 'Kelas lima'),
(6, 'VI', 'Kelas enam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID_LOGIN` varchar(15) NOT NULL,
  `ID_PENGAJAR` varchar(15) DEFAULT NULL,
  `STATUS` varchar(10) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID_LOGIN`, `ID_PENGAJAR`, `STATUS`, `USERNAME`, `PASSWORD`) VALUES
('5e344813b6af7', '5e27558d59357', 'GURU', 'popo', 'naruto'),
('5e344ae235def', '5e344ad004f19', 'ADMIN', 'aan', 'aan'),
('5e3453664f48e', '5e344ad004f19', 'GURU', 'danu', 'danu'),
('lklkl', NULL, 'ADMIN', 'qwe', 'qwe');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `KODE_PELAJARAN` varchar(10) NOT NULL,
  `NAMA_PELAJARAN` varchar(100) DEFAULT NULL,
  `KURIKULUM` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`KODE_PELAJARAN`, `NAMA_PELAJARAN`, `KURIKULUM`) VALUES
('5df8f6e7a5', 'Agama', '2013'),
('5df8f6fa40', 'Kewarganegaraan', '2013'),
('5df8f70b44', 'Tematik', '2013'),
('5df8f71ac7', 'Bahasa Indonesia', '2013'),
('5df8f72a10', 'Bahasa Inggris', '2013'),
('5df8f73874', 'Penjaskes', '2013'),
('5df8f744cd', 'Matematika', '2013'),
('5df8f75569', 'Bahasa Daerah', '2013'),
('5df8f7600f', 'IPA', '2013'),
('5df8f769b8', 'IPS', '2013'),
('5df8f784e5', 'SBK', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `ID_PENGUMUMAN` int(11) NOT NULL,
  `ID_TAHUN` int(11) DEFAULT NULL,
  `ID_SEMESTER` varchar(10) DEFAULT NULL,
  `ISI` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`ID_PENGUMUMAN`, `ID_TAHUN`, `ID_SEMESTER`, `ISI`) VALUES
(2, 1, '2', 'hari perbucinan');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prosuct_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `NSS` varchar(15) NOT NULL,
  `ID_PENGAJAR` varchar(15) DEFAULT NULL,
  `NAMA_SEKOLAH` varchar(100) DEFAULT NULL,
  `TGL_PENDIRIAN` varchar(100) DEFAULT NULL,
  `STATUS_SEKOLAH` varchar(10) DEFAULT NULL,
  `AKREDITASI` char(2) DEFAULT NULL,
  `ALAMAT_SEKOLAH` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`NSS`, `ID_PENGAJAR`, `NAMA_SEKOLAH`, `TGL_PENDIRIAN`, `STATUS_SEKOLAH`, `AKREDITASI`, `ALAMAT_SEKOLAH`, `EMAIL`) VALUES
('101056031001', '5e344ad004f19', 'SD NEGERI MADE I / 475', '31 Desember 1976', 'Negeri', 'A', 'JL. RAYA MADE NO. 31-33 SURABAYA, Kecamatan : Sambikerep, Desa/kel : Made, Surabaya\"\"\"\"\"\"\"', 'sd.negerimade1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `ID_SEMESTER` varchar(10) NOT NULL,
  `NAMA_SEMESTER` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`ID_SEMESTER`, `NAMA_SEMESTER`) VALUES
('1', 'GANJIL'),
('2', 'GENAP');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `ID_TAHUN` int(11) NOT NULL,
  `TAHUN_AJARAN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`ID_TAHUN`, `TAHUN_AJARAN`) VALUES
(1, '2020/2021'),
(2, '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(2, '', '', '2020-06-02 11:03:22'),
(3, 'danu', 'danu', '2020-06-02 11:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `ID_WALIKELAS` varchar(15) NOT NULL DEFAULT '',
  `ID_PENGAJAR` varchar(15) DEFAULT NULL,
  `ID_RUANG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`ID_WALIKELAS`, `ID_PENGAJAR`, `ID_RUANG`) VALUES
('5e27b8235e055', '5e27558d59357', 8),
('5e3a212a69818', '5e344ad004f19', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD PRIMARY KEY (`ID_ABSENSI`),
  ADD KEY `ID_SISWA` (`ID_SISWA`);

--
-- Indexes for table `data_hari`
--
ALTER TABLE `data_hari`
  ADD PRIMARY KEY (`ID_HARI`);

--
-- Indexes for table `data_kota`
--
ALTER TABLE `data_kota`
  ADD PRIMARY KEY (`ID_KOTA`);

--
-- Indexes for table `data_pengajar`
--
ALTER TABLE `data_pengajar`
  ADD PRIMARY KEY (`ID_PENGAJAR`);

--
-- Indexes for table `data_ruang`
--
ALTER TABLE `data_ruang`
  ADD PRIMARY KEY (`ID_RUANG`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `FK_RELATIONSHIP_17` (`ID_KOTA`),
  ADD KEY `ID_KELAS` (`ID_KELAS`),
  ADD KEY `ID_RUANG` (`ID_RUANG`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`ID_JADWAL`),
  ADD KEY `FK_RELATIONSHIP_12` (`ID_PENGAJAR`),
  ADD KEY `FK_RELATIONSHIP_15` (`ID_JAM`),
  ADD KEY `FK_RELATIONSHIP_16` (`ID_HARI`),
  ADD KEY `FK_RELATIONSHIP_3` (`KODE_PELAJARAN`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_SEMESTER`),
  ADD KEY `FK_jadwal_pelajaran_kelas` (`ID_RUANG`);

--
-- Indexes for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  ADD PRIMARY KEY (`ID_PIKET`),
  ADD KEY `FK_RELATIONSHIP_21` (`ID_HARI`),
  ADD KEY `FK_jadwal_piket_data_siswa` (`ID_SISWA`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`ID_JAM`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`ID_KELAS`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_LOGIN`),
  ADD KEY `FK_RELATIONSHIP_14` (`ID_PENGAJAR`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`KODE_PELAJARAN`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`ID_PENGUMUMAN`),
  ADD KEY `ID_TAHUN` (`ID_TAHUN`),
  ADD KEY `ID_SEMESTER` (`ID_SEMESTER`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prosuct_id`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`NSS`),
  ADD KEY `FK_RELATIONSHIP_13` (`ID_PENGAJAR`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`ID_SEMESTER`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`ID_TAHUN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`ID_WALIKELAS`),
  ADD KEY `FK_RELATIONSHIP_19` (`ID_PENGAJAR`),
  ADD KEY `ID_KELAS` (`ID_RUANG`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_ruang`
--
ALTER TABLE `data_ruang`
  MODIFY `ID_RUANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `ID_KELAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `ID_PENGUMUMAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `ID_TAHUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi_kelas`
--
ALTER TABLE `absensi_kelas`
  ADD CONSTRAINT `FK_absensi_siswa_data_siswa` FOREIGN KEY (`ID_SISWA`) REFERENCES `data_siswa` (`ID_SISWA`);

--
-- Constraints for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ID_KOTA`) REFERENCES `data_kota` (`ID_KOTA`),
  ADD CONSTRAINT `FK_data_siswa_data_ruang` FOREIGN KEY (`ID_RUANG`) REFERENCES `data_ruang` (`ID_RUANG`),
  ADD CONSTRAINT `FK_data_siswa_kelas` FOREIGN KEY (`ID_KELAS`) REFERENCES `kelas` (`ID_KELAS`);

--
-- Constraints for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_PENGAJAR`) REFERENCES `data_pengajar` (`ID_PENGAJAR`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_JAM`) REFERENCES `jam` (`ID_JAM`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_HARI`) REFERENCES `data_hari` (`ID_HARI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`KODE_PELAJARAN`) REFERENCES `mata_pelajaran` (`KODE_PELAJARAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_SEMESTER`) REFERENCES `semester` (`ID_SEMESTER`),
  ADD CONSTRAINT `FK_jadwal_pelajaran_kelas` FOREIGN KEY (`ID_RUANG`) REFERENCES `data_ruang` (`ID_RUANG`);

--
-- Constraints for table `jadwal_piket`
--
ALTER TABLE `jadwal_piket`
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_HARI`) REFERENCES `data_hari` (`ID_HARI`),
  ADD CONSTRAINT `FK_jadwal_piket_data_siswa` FOREIGN KEY (`ID_SISWA`) REFERENCES `data_siswa` (`ID_SISWA`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_PENGAJAR`) REFERENCES `data_pengajar` (`ID_PENGAJAR`);

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `FK_pengumuman_semester` FOREIGN KEY (`ID_SEMESTER`) REFERENCES `semester` (`ID_SEMESTER`),
  ADD CONSTRAINT `FK_pengumuman_tahun_ajaran` FOREIGN KEY (`ID_TAHUN`) REFERENCES `tahun_ajaran` (`ID_TAHUN`);

--
-- Constraints for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_PENGAJAR`) REFERENCES `data_pengajar` (`ID_PENGAJAR`);

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_PENGAJAR`) REFERENCES `data_pengajar` (`ID_PENGAJAR`),
  ADD CONSTRAINT `FK_wali_kelas_data_ruang` FOREIGN KEY (`ID_RUANG`) REFERENCES `data_ruang` (`ID_RUANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
