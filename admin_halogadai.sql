-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 31, 2020 at 03:42 AM
-- Server version: 5.7.32-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_halogadai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `judul`, `body`) VALUES
(2, 'Disclaimer : ', '<ul>\r\n	<li>Halogadai adalah mitra leasing dan tidak memiliki otoritas apapun dalam persetujuan kredit. HaloGadai juga tidak menyalurkan pinjaman atau menghimpun dana dari masyarakat.&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>Simulasi pinjaman pada dasarnya ditentukan oleh Merek, Tipe, Tahun kendaraaan, Rate Bunga, Asuransi, Kepemilikan BPKB dan Kota/Kab Domisili . Untuk mendapatkan simulasi yang fix dan detail , maka silahkan hubungi tim kami via WA/Telp/SMS.</li>\r\n	<li>&nbsp;</li>\r\n	<li>Halogadai tidak bertanggung jawab terhadap penggunaan data nasabah oleh pihak leasing/perusahaan multifinance terkait. Seluruh leasing/perusahaan multifinance yang menjadi mitra HaloGadai, terdaftar dan diawasi Otoritas Jasa Keuangan (OJK). Sehingga data, proses dan aset Anda dijamin aman.&nbsp;</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id_article` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_kategori_article` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `images` text,
  `body` text,
  `body_sumary` text,
  `alias_url` varchar(200) DEFAULT NULL,
  `status_published` enum('1','0') DEFAULT NULL COMMENT '1=published,0=not published',
  `status_promoted` enum('1','0') DEFAULT NULL COMMENT '1=promoted,0=not promoted',
  `tgl_article` datetime DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_image` text NOT NULL,
  `hasilA` text NOT NULL,
  `hasilB` text NOT NULL,
  `trending` enum('0','1') NOT NULL,
  `sort_trending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id_article`, `id_menu`, `id_kategori_article`, `id_user`, `title`, `images`, `body`, `body_sumary`, `alias_url`, `status_published`, `status_promoted`, `tgl_article`, `tags`, `meta_keyword`, `meta_description`, `meta_title`, `meta_image`, `hasilA`, `hasilB`, `trending`, `sort_trending`) VALUES
(1, 20, NULL, 68402, 'Tips Bisnis Pemula; Memulai Bisnis Di Tengah Pandemi', '2ba1c78705b653f2ab79blo3.jpg', '<p>Adanya pandemi virus COVID19 telah berimbas kepada semua pihak. Baik itu pihak pekerja maupun pengusaha. Namun, bagi Anda yang baru saja hendak memulai bisnis, hal tersebut tidaklah mustahil, lho. Ada sejumlah&nbsp;<a href="https://produk.bfi.co.id/blog/a/tips-bisnis-sukses-yang-bisa-dijalankan-saat-new-normal/"><strong>tips bisnis pemula</strong></a>&nbsp;agar usaha kecil bisa tetap bertahan di tengah pandemi.&nbsp;</p>\r\n\r\n<p>Walaupun pandemi ini membawa banyak kerugian bagi kita semua, ternyata masih ada sisi positif yang bisa diambil bagi para pelaku bisnis. Yaitu, situasi ini ternyata bisa menjadi peluang untuk menjalankan usaha.&nbsp;</p>\r\n\r\n<p>Bryant Christanto selaku CEO Paxel Indonesia menuturkan bahwa saat ini, bisa dilihat secara umum bahwa perilaku konsumsi masyarakat berubah karena adanya pandemi. Yaitu, mereka semakin mengarah ke ranah online untuk memenuhi kebutuhan mereka. Sejak Februari 2020, aktivitas berbelanja online meningkat hingga 32%. Hal ini bisa menjadi peluang bagi para pengusaha untuk merintis usaha di ranah online. Selain itu, memulai bisnis dengan skala kecil hingga menengah merupakan hal paling tepat yang bisa dilakukan. Contohnya, menjalankan bisnis frozen food yang permintaannya meningkat hingga saat ini.&nbsp;</p>\r\n\r\n<p>Bisnis dengan skala kecil hingga menengah tetap memiliki kesempatan untuk meraih keuntungan di tengah pandemi ini. Dikutip dari Suara.com, Paxel Indonesia merangkum 3 tips bisnis pemula dari berbagai mitra yang bisa dilakukan agar para pelaku bisnis bisa meraih keuntungan.&nbsp;</p>\r\n', NULL, 'tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi', '1', NULL, '2020-01-19 20:00:37', 'tips-bisnis-pemula-memulai-bisnis-di-tengah-pandem', 'tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi/', 'tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi/', 'tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi/', '779f1fc6f3635e9e2bfbblo3.jpg', '', '', '0', 0),
(2, 20, NULL, 68402, 'Tips Bisnis Pemula: 4 Kendala Saat Merintis Bisnis Pertama', '8c813b8f3736e86ea01fblo2.jpg', '<p>Memulai bisnis memang bukanlah hal yang sepele. Dibutuhkan banyak persiapan dan perencanaan yang matang agar bisnis yang dirintis bisa berjalan dengan lancar. Apa saja kendala bisnis yang dihadapi pertama kali, serta&nbsp;<a href="https://produk.bfi.co.id/blog/a/tips-bisnis-sukses-yang-bisa-dijalankan-saat-new-normal/"><strong>tips bisnis pemula</strong></a>&nbsp;untuk mengatasinya?</p>\r\n\r\n<p>Di era pandemi ini, memiliki bisnis sampingan sangat dianjurkan. Bidang pekerjaan yang bisa dijalani pun variatif. Bagi Anda yang belum pernah memulai bisnis sendiri, tentunya bingung hendak memulai darimana. Banyak persiapan yang dibutuhkan, dan ada beberapa hal yang berjalan tidak sesuai dengan rencana.&nbsp;</p>\r\n\r\n<p>Bagi Anda yang hendak memulai bisnis, berikut 4 kendala yang sering dialami ketika memulai bisnis sendiri. Jatuh bangun memang hal yang lumrah ketika Anda merintis bisnis sendiri. Namun, diharapkan dengan mengetahui kendala-kendala berikut, Anda bisa mengantisipasi dengan membuat rencana bisnis dan persiapan yang lebih matang.&nbsp;</p>\r\n\r\n<p>Apa saja kendala-kendala yang umum dihadapi, serta tips bisnis pemula yang bisa Anda jalankan?</p>\r\n\r\n<p><img alt="tips bisnis online" src="https://lh4.googleusercontent.com/5zjNpv4q0TwIyemK-syij1Cn459lMFjwcn2pVOrSsaU1c3hwobe7qjLEAgxAMXMu8MHgA6BdFXhhKpu5x2fCpKI7dX5s4I5bj1zewwk4" style="height:341px; width:512px" /></p>\r\n\r\n<h2>Bingung Memulai Jenis Bisnis yang Tepat</h2>\r\n\r\n<p>Kendala pertama yang umum dihadapi oleh calon pengusaha pemula adalah kebingungan dalam memilih jenis bisnis yang akan dijalankan. Hal ini tentunya wajar, karena jenis bisnis yang bisa dijalankan beragam jenisnya.&nbsp;</p>\r\n\r\n<p>Solusinya adalah, carilah jenis bisnis yang sesuai dengan keahlian dan kemampuan Anda. Dengan demikian, persiapan yang diperlukan akan lebih mudah dan matang. Jangan menjalankan bisnis hanya karena ikut-ikutan tren yang sedang umum, namun tidak sesuai dengan kemampuan finansial maupun keahlian Anda. Pastikanlah untuk membuat gambaran dan perencanaan yang matang.&nbsp;</p>\r\n\r\n<h2>Takut Untuk Memulai</h2>\r\n\r\n<p>Kendala lain yang dihadapi oleh para calon pengusaha adalah takut untuk memulai. Ketakutan yang membayangi bisa bermacam-macam. Bisa jadi takut gagal, takut kehilangan waktu, dan lain sebagainya.&nbsp;</p>\r\n\r\n<p>Seperti yang telah disebutkan, jatuh bangun adalah hal yang lumrah dalam berbisnis. Apabila Anda telah membuat perencanaan yang matang, tetaplah bersikap positif. Anda bisa menambah ilmu bisnis Anda agar lebih percaya diri dalam memulai bisnis Anda. Seperti mengikuti seminar, belajar dari para pengusaha yang telah berpengalaman, dan masih banyak lagi.&nbsp;</p>\r\n\r\n<p>Karena jika Anda terus menunda, bisnis tersebut tidak akan bisa terealisasikan.&nbsp;</p>\r\n\r\n<h2>Masih Nyaman dengan Pekerjaan Utama</h2>\r\n\r\n<p>Beberapa calon pengusaha masih terlalu nyaman dengan pekerjaan utama mereka. Akhirnya, niat untuk menjalankan usaha sendiri sulit untuk diwujudkan. Terlebih lagi, jika Anda telah menekuni pekerjaan kantoran dalam waktu yang cukup lama.&nbsp;</p>\r\n\r\n<p>Padahal, baik pekerjaan kantoran maupun pribadi bisa dijalankan secara bersamaan. Asalkan, Anda mampu disiplin dan membagi waktu agar kedua bisnis tersebut bisa berjalan secara bersamaan. Cobalah menerapkan manajemen waktu yang baik dengan mencoba membuat jadwal harian Anda sendiri, agar pekerjaan Anda bisa berjalan dengan lancar.&nbsp;</p>\r\n\r\n<h2>Modal Usaha Kurang</h2>\r\n\r\n<p>Kendala lain yang umum dihadapi oleh para calon pengusaha adalah modal usaha yang tidak cukup untuk merintis bisnis pertama mereka. Banyak dari mereka yang takut untuk memulai karena tidak memiliki modal untuk menjalankan bisnis.</p>\r\n\r\n<p>Solusinya adalah, jalankan bisnis dalam skala kecil terlebih dahulu. Sekarang ini, banyak bisnis berbasis rumahan yang bisa dijalankan dengan modal minim. Sehingga, Anda tidak kesulitan dalam menjalankannya. Secara bertahap, Anda bisa mengembangkannya ke skala yang lebih besar.&nbsp;</p>\r\n\r\n<p>Jika Anda membutuhkan tambahan modal, ada berbagai cara untuk mendapat dana tambahan. Salah satunya adalah mengajukan pinjaman kepada lembaga keuangan yang terpercaya. Seperti BFI Finance yang menyediakan layanan pinjaman modal usaha hanya dengan modal BPKB kendaraan bermotor Anda.&nbsp;</p>\r\n\r\n<p>Semoga tips bisnis pemula tersebut dapat bermanfaat bagi Anda, ya!</p>\r\n\r\n<p>Tags:&nbsp;<a href="https://produk.bfi.co.id/blog/a/tag/bisnis/" rel="tag">Bisnis</a>,&nbsp;<a href="https://produk.bfi.co.id/blog/a/tag/tips-bisnis-pemula/" rel="tag">Tips Bisnis Pemula</a></p>\r\n\r\n<h2>Post navigation</h2>\r\n\r\n<p><a href="https://produk.bfi.co.id/blog/a/tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi/" rel="prev">PREVIOUSPrevious post:</a></p>\r\n\r\n<p><a href="https://produk.bfi.co.id/blog/a/tips-mencari-ide-bisnis-bagi-pengusaha-ala-bfi-finance/" rel="next">NEXTNext post:</a></p>\r\n\r\n<h3>Artikel terbaru</h3>\r\n\r\n<ul>\r\n	<li><a href="https://produk.bfi.co.id/blog/a/tips-mencari-ide-bisnis-bagi-pengusaha-ala-bfi-finance/">Tips Mencari Ide Bisnis Bagi Pengusaha Ala BFI Finance</a></li>\r\n	<li><a href="https://produk.bfi.co.id/blog/a/tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-pertama/">Tips Bisnis Pemula: 4 Kendala Saat Merintis Bisnis Pertama</a></li>\r\n	<li><a href="https://produk.bfi.co.id/blog/a/tips-bisnis-pemula-memulai-bisnis-di-tengah-pandemi/">Tips Bisnis Pemula; Memulai Bisnis Di Tengah Pandemi</a></li>\r\n</ul>\r\n\r\n<h3>Ajukan Pinjaman</h3>\r\n\r\n<p><a href="https://produk.bfi.co.id/jaminan-bpkb-mobil">Pinjaman Berjaminan BPKB Mobil</a></p>\r\n\r\n<p><a href="https://produk.bfi.co.id/jaminan-bpkb-motor">Pinjaman Berjaminan BPKB Motor</a></p>\r\n\r\n<p><a href="https://produk.bfi.co.id/jaminan-sertifikat-rumah">P</a></p>\r\n', NULL, 'tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-pertama', '1', NULL, '2020-01-20 16:17:20', 'tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-', 'tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-pertama/', 'tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-pertama/', 'tips-bisnis-pemula-4-kendala-saat-merintis-bisnis-pertama/', '', '', '', '0', 0),
(3, 20, NULL, 68402, 'Tips Mencari Ide Bisnis Bagi Pengusaha Ala BFI Finance', '3f6a557d75b6bfd1452eSEMRUSH.png', '<p>test</p>\r\n', NULL, 'test', '1', NULL, '2020-01-20 16:23:47', 'mencari-ide-bisnis', 'mencari-ide-bisnis', 'mencari-ide-bisnis', 'mencari-ide-bisnis', '4609d43a7c4c39e9e208blog1.png', '', '', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_comment` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `body` text NOT NULL,
  `parent` int(11) NOT NULL,
  `tgl_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_comment`, `id_article`, `id_user`, `body`, `parent`, `tgl_create`) VALUES
(1, 81, 12, 'www', 0, '2019-06-11 07:19:29'),
(2, 80, 12, 'test', 0, '2019-06-11 07:37:43'),
(3, 80, 39, 'test2', 2, '2019-06-11 08:42:24'),
(4, 205, 68520, 'oke', 0, '2019-06-25 10:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ecommerce`
--

CREATE TABLE `tbl_ecommerce` (
  `id_ecommerce` int(11) NOT NULL,
  `nama_ecommerce` varchar(50) NOT NULL,
  `link_ecommerce` varchar(200) NOT NULL,
  `gambar_ecommerce` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ecommerce`
--

INSERT INTO `tbl_ecommerce` (`id_ecommerce`, `nama_ecommerce`, `link_ecommerce`, `gambar_ecommerce`) VALUES
(1, 'Jdid', 'https://m.jd.id/camp/sis-laurier9249.html', 'Jdid.png'),
(2, 'Blibli', 'https://www.blibli.com/brand/laurier?page=1&start=0&intent=true&brandName=laurier&sort=0&brand=Laurier&bp=true&shipment=blibli', 'blibli.png'),
(3, 'Shopee', 'https://shopee.co.id/shop/36092728/search?shopCollection=6807822', 'shopee.png'),
(4, 'Tokopedia', 'https://www.tokopedia.com/kao/etalase/laurier', 'tokped.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `judul`, `body`) VALUES
(1, 'FAQ', '<p><strong>Tentang Halogadai</strong></p>\r\n\r\n<p style="text-align:justify">Halogadai merupakan platform pinjaman gadai Bpkb Mobil/Motor yang membantu Anda menemukan produk pinjaman online terbaik dari leasing/perusahan multifinance pilihan yang tentunya terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK). Kami akan menghubungkan Anda dengan mitra pilihan yang paling sesuai dengan kebutuhan dan terdekat dengan Anda. Cukup Hitung, Bandingkan dan Pilih. Kami siap membantu Anda hingga Dana Cair. Tanpa dipungut biaya</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Produk apa yang ditawarkan</strong></p>\r\n\r\n<p style="text-align:justify">Halogadai menawarkan pinjaman jaminan bpkb mobil, bpkb truk/pick up dan pinjaman jaminan bpkb motor. &nbsp;Nilai pinjaman mulai 1 juta sd 5 Milyar (sesuai harga kendaraan) dengan bunga ringan dan proses cepat langsung cair. &nbsp;Saat ini kami belum melayani Pinjaman tanpa Agunan (KTA) atau Pinjaman dengan Jaminan Sertifikat Rumah.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Persyaratan Pinjaman Dana yang harus disiapkan?</strong></p>\r\n\r\n<p style="text-align:justify">Syarat gadai bpkb motor /mobil yang harus disiapkan adalah KTP, KK, STNK dan BPKB. Jika BPKB masih di leasing (take over), maka cukup siapkan bukti bayar angsuran Anda di leasing saat ini. Hubungi Kami untuk konsultasi gratis terkait Pinjaman Uang Gadai BPKB mobil/motor Anda.&nbsp;</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Bagaimana Cara &amp; Proses Pengajuan Pinjaman ?</strong></p>\r\n\r\n<p style="text-align:justify">Kami akan memberikan simulasi gadai bpkb fix berdasarkan kebutuhan pinjaman uang jaminan BPKB Anda. Setelah itu kami akan menghubungkan Anda dengan cabang terdekat. Anda bisa segera siapkan dokumen persyaratan yang dibutuhkan, lalu bisa mengirimkannya via Whatsapp (difoto) atau tim cabang akan menjemput data (fotocopynya) ke rumah/kantor Anda. Setelah proses analisa selesai, maka dana akan ditransfer ke rekening Anda. Beberapa leasing juga menawarkan pinjaman jaminan bpkb tanpa survey.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Apakah ada potongan atau biaya lain?</strong></p>\r\n\r\n<p style="text-align:justify">Pencairan dana utuh ke rekening Anda tanpa Potongan. Tidak ada biaya survey atau deposit.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n\r\n<p style="text-align:justify"><strong>Apakah Data &amp; BPKB saya Aman?</strong></p>\r\n\r\n<p style="text-align:justify">Seluruh leasing yang akan memproses pengajuan anda terdaftar dan diawasi OJK. Perlindungan data konsumen adalah hal mutlak, kami tidak akan menggunakan atau menyebarkan data nasabah untuk kepentingan apapun selain untuk memproses pengajuan pinjaman. BPKB akan disimpan di kantor leasing bersangkutan, dan dijamin keamanannya.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_home`
--

CREATE TABLE `tbl_faq_home` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq_home`
--

INSERT INTO `tbl_faq_home` (`id`, `judul`, `deskripsi`) VALUES
(1, 'Tentang Halogadai.com ?', '<p>Halo gadai adalah</p>\r\n'),
(2, 'Produk apa yang ditawarkan?', '<p>testttt</p>\r\n'),
(3, 'Persyaratan Pinjaman Dana yang harus disiapkan?', '<p>asdf</p>\r\n'),
(4, 'Bagaimana Cara & Proses Pengajuan Pinjaman ?', '<p>asdfasdf</p>\r\n'),
(5, 'Apakah ada potongan atau biaya lain?', '<p>asdf</p>\r\n'),
(6, 'Apakah Data & BPKB saya Aman?', '<p>asdf</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_campaign`
--

CREATE TABLE `tbl_image_campaign` (
  `id_image_campaign` int(11) NOT NULL,
  `id_campaign` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_article`
--

CREATE TABLE `tbl_kategori_article` (
  `id_kategori_article` int(11) NOT NULL,
  `nama_kategori_article` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_article`
--

INSERT INTO `tbl_kategori_article` (`id_kategori_article`, `nama_kategori_article`) VALUES
(1, 'Adult-Latest Research'),
(2, 'Adult-Reproductive Health'),
(3, 'Teens-Sex'),
(4, 'Teens-Sociolife'),
(5, 'sex');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori_product`
--

CREATE TABLE `tbl_kategori_product` (
  `id_kategori_product` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `gambar_kategori` varchar(100) NOT NULL,
  `url_kategori` varchar(100) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori_product`
--

INSERT INTO `tbl_kategori_product` (`id_kategori_product`, `nama_kategori`, `gambar_kategori`, `url_kategori`, `body`) VALUES
(3, 'MNC Finance', 'mnc-finance.jpg', 'mnc-financial', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT. MNC Finance<br />\r\n			Berdiri sejak 1989</td>\r\n			<td>MNC Financial Center Building 12th Floor<br />\r\n			Jl Kebon Sirih No. 21 &ndash; 27<br />\r\n			Jakarta Pusat 10340<br />\r\n			Telp : 021-2970 1111<br />\r\n			Call Center : 021-29701100</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(11, 'Kredit Plus', 'KreditPlus.png', 'kredit-plus', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT. Finansia Multi Finance<br />\r\n			Berdiri sejak 1994</td>\r\n			<td>Office 8, lantai 15, SCBD Lot 28 Jl. Jendral Sudirman Kav. 52-53&nbsp;<br />\r\n			Jakarta 12190 Telp. 1500605<br />\r\n			Fax. 021-2933 3648<br />\r\n			Email. cs@kreditplus.com</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(12, 'BAF', 'baf.jpg', 'baf', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT Bussan Auto Finance&nbsp;<br />\r\n			(&ldquo;Perseroan&rdquo;)<br />\r\n			Berdiri sejak 1995</td>\r\n			<td>BAF Plaza<br />\r\n			Jalan Raya Tanjung Barat No 121 RT 14/RW 4.<br />\r\n			Kel Tanjung Barat. Kec Jagakarsa, Kota Jakarta Selatan<br />\r\n			Jakarta 12530<br />\r\n			Phone: 1500 750<br />\r\n			Email: bafcs@baf.id</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(13, 'SMART Finance', 'SMARTFinance.png', 'smart-finance', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT SMART MULTI FINANCE<br />\r\n			Berdiri sejak 2008</td>\r\n			<td>Taman Perkantoran Foresta Business Loft 2<br />\r\n			No. 21, BSD City, Tangerang Selatan Banten 15339<br />\r\n			Telepon (021) 3003 2968 , 3003 2969<br />\r\n			Email: cs@smartfinance.co.id</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(14, 'BFI Finance', 'bdf.jpg', 'bdf', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT BFI Finance Indonesia Tbk<br />\r\n			Berdiri sejak 1982</td>\r\n			<td>BFI Tower<br />\r\n			Sunburst CBD Lot. 1.2<br />\r\n			Jl. Kapt. Soebijanto Djojohadikusumo<br />\r\n			BSD City - Tangerang Selatan 15322<br />\r\n			Phone +62 21 2965 0300, 2965 0500</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
(15, 'ADIRA Finance', 'adira.jpg', 'adira-finance', '<table border="0" cellpadding="0" cellspacing="0" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>PT Adira Dinamika Multi Finance Tbk<br />\r\n			Berdiri sejak 1990</td>\r\n			<td>The Landmark I, Lantai 26-31, Jl. Jenderal Sudirman No. 1, Jakarta 12910</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontributor`
--

CREATE TABLE `tbl_kontributor` (
  `id_kontributor` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `foto` text,
  `alamat` text NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '1=menikah,0=lajang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontributor`
--

INSERT INTO `tbl_kontributor` (`id_kontributor`, `username`, `nama`, `email`, `tanggal_lahir`, `foto`, `alamat`, `kota`, `telephone`, `pekerjaan`, `status`) VALUES
(1, 'nisa', 'nissa', 'nisa@gmail.com', '2019-05-01', 'nissa.jpg', 'jakarta', 'bekasi', '08956775533', 'designer', '0'),
(23, 'nurulhidayati', 'Nurul Hidayati', 'nurulhidayatid79@gmail.com', '1996-11-07', '@nurulhidayati.jpeg', 'Puri Nirwana 1 Blok M No.21 Cibinong', 'Bogor', ' 08119990794', 'Freelancer', '1'),
(24, 'Puspa Rindra', 'Puspa Rindra Ramadanti', 'pusparnd@gmail.com', '1998-01-23', '@pusparindra.jpeg', 'Taman Yasmin Sektor VI Jalan Pinang 2 No.29', 'Bogor', '087872324611', 'Karyawan', '1'),
(25, '@radindaputri', 'Radinda Putri', 'radindaputri18@gmail.com', '1998-01-23', '@radinda.jpeg', 'Kp. Padurenan RT 01/RW 07 Kel. pabuaran kec. Cibinong ', 'Bogor', '087885826196', 'Karyawan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_comment`
--

CREATE TABLE `tbl_like_comment` (
  `id_like_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=clear,1=like,2=dislike',
  `tgl_like` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_like_comment`
--

INSERT INTO `tbl_like_comment` (`id_like_comment`, `id_user`, `id_comment`, `status`, `tgl_like`) VALUES
(1, 12, 1, '0', '2019-06-11 07:19:39'),
(2, 39, 2, '0', '2019-06-11 08:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_like_comment_period_story`
--

CREATE TABLE `tbl_like_comment_period_story` (
  `id_like_comment` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `status` enum('0','1','2') NOT NULL COMMENT '0=clear,1=like,2=dislike',
  `tgl_like` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_like_comment_period_story`
--

INSERT INTO `tbl_like_comment_period_story` (`id_like_comment`, `id_user`, `id_comment`, `status`, `tgl_like`) VALUES
(1, 12, 1, '0', '2019-06-11 08:45:19'),
(2, 45, 1, '1', '2019-06-11 10:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(200) NOT NULL,
  `parent` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `quiz_in` enum('1','0') DEFAULT NULL COMMENT '1=published,0=not published',
  `status_published` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `nama_menu`, `parent`, `url`, `sort`, `icon`, `quiz_in`, `status_published`) VALUES
(1, 'Home', 0, 'home', 1, 'genric-btn home', NULL, '1'),
(2, 'About Us', 0, 'home/about_us', 2, 'genric-btn allThingsPeriod', NULL, '1'),
(3, 'Our Expoerience', 0, 'home/our_experience', 3, 'genric-btn bodyMind', NULL, '1'),
(4, 'Tour Packages', 0, 'home/package_list', 4, 'genric-btn drLaurier', NULL, '1'),
(5, 'Gallery', 0, 'home/gallery', 5, 'genric-btn product', NULL, '1'),
(6, 'Contact Us', 0, 'home/contact_us', 6, 'genric-btn campaign', NULL, '1'),
(20, 'Kategori A', 0, 'kat_a', 1, '', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merk`
--

CREATE TABLE `tbl_merk` (
  `id_merk` int(11) NOT NULL,
  `merk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_merk`
--

INSERT INTO `tbl_merk` (`id_merk`, `merk`) VALUES
(1, 'Suzuki'),
(2, 'Toyota');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `id_merk` varchar(50) NOT NULL,
  `id_tipe` varchar(100) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `nilai_pinjaman` varchar(50) NOT NULL,
  `tenor` varchar(50) NOT NULL,
  `bpkb` varchar(250) NOT NULL,
  `id_leasing` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `nama`, `hp`, `email`, `alamat`, `id_merk`, `id_tipe`, `tahun`, `nilai_pinjaman`, `tenor`, `bpkb`, `id_leasing`, `tanggal`) VALUES
(7, 'ADHYTYA LAELNUR RAHMAN', '098231231', 'test@gmail.com', 'jl kahurpian no 20', '1', '1', '2010', '15000000', '45', 'Sendiri/Pasangan', 14, '2020-10-03 13:56:51'),
(8, 'Sjsj', '0812737333', 'febrinanda23@gmail.com', 'Sjjssjssnssnsdbd sjsnssnsns snsnsnns', '1', '1', '2015', '100000000', '1', 'Sendiri/Pasangan', 15, '2020-10-05 08:55:29'),
(9, 'asdfasdf', 'asdf222222222', 'admin@haajar.ida', 'sdfasdfa', 'sfasdfasdf', 'asdas', '2020', '123123123', '1', 'Sendiri/Pasangan', 14, '2020-10-05 09:46:57'),
(10, 'ASDFADS', 'ADSFA', 'SDFA', 'ASDFSDFASDF', 'ASDF', 'ASDF', '123', 'sdADF', '1', 'Sendiri/Pasangan', 12, '2020-10-05 09:49:25'),
(12, 'WERTWERT', 'WERT', 'WERTWERT', 'WRETWE', 'RTWERT', 'WERT', '234', 'ASDFASDF', '1', 'Orang lain (belum balik nama)', 12, '2020-10-05 09:52:10'),
(13, 'WERTWERT', 'WERT', 'WERTWERT', 'WRETWE', 'RTWERT', 'WERT', '234', 'ASDFASDF', '1', 'Orang lain (belum balik nama)', 12, '2020-10-05 09:52:44'),
(14, 'WERTWERT', 'WERT', 'WERTWERT', 'WRETWE', 'RTWERT', 'WERT', '234', 'ASDFASDF', '1', 'Orang lain (belum balik nama)', 12, '2020-10-05 09:53:08'),
(15, 'WERTWERT', 'WERT', 'WERTWERT', 'WRETWE', 'RTWERT', 'WERT', '234', 'ASDFASDF', '1', 'Orang lain (belum balik nama)', 12, '2020-10-05 09:56:07'),
(16, 'sdfas', 'dfasdfasd', 'fasdfasdfasd', 'fasdfa', 'sdfasdf', 'asdf', '1231', 'Rp 123,123.00', '2', 'Sendiri/Pasangan', 12, '2020-10-05 10:13:08'),
(17, 'Sjsjjsjs', '0827272727288', 'Eusiwsi', 'Sussissisisjjsjssjsjjjjjjdjjjdjdjjd', 'Shshsh', 'Suss7s', '43436464', 'Rp 5,000,000.00', '3', 'Sendiri/Pasangan', 15, '2020-10-05 11:57:57'),
(18, 'Wisjjwwj', '388373483', 'Sjwjsjs', 'Susussisis', 'Sjssksks', 'Jssjjsj', '2011', 'Rp 50,202,100.00', '1', 'Sendiri/Pasangan', 15, '2020-10-05 12:01:36'),
(19, 'mdeden', '123123123123', 'dedenkertawijaya@gmail.com', '1231231231', '312312', '3123', '123123', 'Rp 123,232.00', '1', 'Orang lain (belum balik nama)', 11, '2020-10-05 13:25:37'),
(20, 'mdeden', '123123123123', 'dedenkertawijaya@gmail.com', '1231231231', '312312', '3123', '123123', 'Rp 123,232.00', '1', 'Orang lain (belum balik nama)', 11, '2020-10-05 13:25:50'),
(21, 'mdeden', '123123123123', 'dedenkertawijaya@gmail.com', '1231231231', '312312', '3123', '123123', 'Rp 123,232.00', '1', 'Orang lain (belum balik nama)', 11, '2020-10-05 13:26:27'),
(22, 'mdeden', '123123123123', 'dedenkertawijaya@gmail.com', '1231231231', '312312', '3123', '123123', 'Rp 123,232.00', '1', 'Orang lain (belum balik nama)', 11, '2020-10-05 13:32:41'),
(23, 'Sjsjsj', '0192828282828', 'Jssjsjssssjsksj', 'Suussi', 'Uauaa', 'Ajaia', '2010', '', '1', 'Sendiri/Pasangan', 999, '2020-10-05 13:51:37'),
(24, 'mdeden', '123123123123', 'dedenkertawijaya@gmail.com', '1231231231', '312312', '3123', '123123', 'Rp 123,232.00', '1', 'Orang lain (belum balik nama)', 11, '2020-10-05 14:01:22'),
(25, 'testet', '1231231', 'dedenkertawijaya@gmail.com', '123123', '1231', '23123', '12312', 'Rp 123,123,123.00', '1', 'Orang lain (belum balik nama)', 13, '2020-10-05 14:03:07'),
(26, '12312', '312312312', '312', '3123', '123123', '123', '1231', 'Rp 232,323.00', '2', 'Sendiri/Pasangan', 15, '2020-10-05 14:06:38'),
(27, '12312', '3123', '1231', '23123', '123123', '123123', '10000', 'Rp 2,323,123.00', '1', 'Orang lain (belum balik nama)', 12, '2020-10-05 14:07:48'),
(28, '12312', '3123', '1231', '23123', '1231', '231', '23123', 'Rp 123,123.00', '2', 'Orang lain (belum balik nama)', 12, '2020-10-05 14:08:19'),
(29, 'ADHYTYA LAELNUR RAHMAN', 'asdfa', 'sdfa', 'sdfas', 'dfas', 'dfas', '1231', 'Rp 12,312,312.00', '2', 'Sendiri/Pasangan', 13, '2020-10-05 14:09:04'),
(30, 'Sjsjsjsjsjaa', '028282882829', 'sksksskkskskkksksk@gmail.com', 'Ssjjsjsjjsksks', 'Avanza', 'G manual', '434346666', '', '3', 'Sendiri/Pasangan', 999, '2020-10-05 18:21:54'),
(31, 'Wjwiw', '0812828282828', 'ssnjaajaak@gmail.com', 'Susisis', 'Ertiga', 'GL matic', '2147483647', 'Rp 282,882,282.00', '12 Bulan', 'Sendiri/Pasangan', 999, '2020-10-05 19:39:00'),
(32, 'test test aja', 'asdfa', 'dedenkertawijaya@gmail.coma', 'sdfasdf', '123123123', '1231231231', '2312', 'Rp 123,123.00', '6 Bulan', 'Sendiri/Pasangan', 14, '2020-10-05 19:41:47'),
(33, '1231', '123123', 'admin@gmail.com', '123123', '12311', '231', '123', 'Rp .00', '6 Bulan', 'Sendiri/Pasangan', 3, '2020-10-05 19:42:53'),
(34, 'Sus', '08282282', 'kakakak@gmail.com', 'Susj', 'Avanza', 'Ksskkss', '2018', 'Rp 10,000,000.00', '12 Bulan', 'Sendiri/Pasangan', 3, '2020-10-05 20:00:44'),
(35, 'Jssjs', '022929299292', 'makamak@gmail.com', 'Sia', 'Kakaa', 'Pop', '2019', '', '12 Bulan', 'Sendiri/Pasangan', 11, '2020-10-05 20:01:45'),
(37, 'Iaaia', '08282828w8w', 'aajj@gmail.com', 'Jaajjajajakaia', 'Vanaza', 'G manual', '2010', 'Rp 50,000,000.00', '18 Bulan', 'Sendiri/Pasangan', 3, '2020-10-05 20:29:19'),
(38, 'Isiaiai', '0828282282828', 'kakakak@gmail.com', 'Iaaia', 'Avamza', '', '2015', 'Rp 10,000,000.00', '12 Bulan', 'Sendiri/Pasangan', 11, '2020-10-05 20:36:01'),
(39, 'Wiwiw', '0845494844949', 'febrinanda23@gmail.com', 'Aywsyuaa', 'Wauus', 'Sjasja', '2018', 'Rp 12,899,999.00', '12 Bulan', 'Sendiri/Pasangan', 11, '2020-10-21 08:52:20'),
(40, 'Sjsjs', 'Sjs', 'sususs@gmail.com', 'Sjs', 'Susiis', 'Sis', '2012', '49494949', '', 'Sendiri/Pasangan', 11, '2020-10-30 18:21:37'),
(41, 'Ed', '3344443ee44', 'eeesee@gmail.com', 'Sjsjss', 'Susus', 'Aua', '2014', '50000000', '', 'Sendiri/Pasangan', 13, '2020-10-30 18:23:07'),
(42, 'Ed', '3344443ee44', 'eeesee@gmail.com', 'Sjsjss', 'Susus', 'Aua', '2014', '50000000', '', 'Sendiri/Pasangan', 13, '2020-10-30 18:23:22'),
(43, 'Ed', '3344443ee44', 'eeesee@gmail.com', 'Sjsjss', 'Susus', 'Aua', '2014', '50000000', '', 'Sendiri/Pasangan', 13, '2020-10-30 18:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_persyaratan`
--

CREATE TABLE `tbl_persyaratan` (
  `id_persyaratan` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_persyaratan`
--

INSERT INTO `tbl_persyaratan` (`id_persyaratan`, `judul`, `body`) VALUES
(1, 'Persyaratan Pinjaman Dana Gadai BPKB Mobil/Motor', '<p>Berikut ini beberapa ketentuan umum:</p>\r\n\r\n<ol>\r\n	<li>WNI atau WNA dengan KITAS</li>\r\n	<li>Usia minimal 17 tahun</li>\r\n	<li>Pemohon merupakan pemilik unit kendaraan yang BPKB nya dijaminkan.</li>\r\n	<li>Tidak tinggal di rumah kos bulanan (Kos/kontrakan tahunan diperbolehkan)</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapun dokumen syarat pinjaman dana yang disiapkan :</p>\r\n\r\n<ol>\r\n	<li>KTP suami istri (kecuali yang belum menikah, duda atau janda)</li>\r\n	<li>KK (bisa diganti buku nikah)</li>\r\n	<li>Bukti penghasilan</li>\r\n	<li>STNK</li>\r\n	<li>BPKB (kecuali jika BPKB masih ada di leasing lain/take over)</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Marketing leasing terkait akan mengecek dan foto data tersebut, untuk kemudian dianalisa oleh pihak Credit Officer.&nbsp;</p>\r\n\r\n<p>Approval akan selesai dalam waktu 24-48 jam, untuk selanjutnya dilakukan proses pencairan dana.&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(11) NOT NULL,
  `id_kategori_product` int(11) DEFAULT NULL,
  `id_type_product` int(11) NOT NULL,
  `nama_product` varchar(50) DEFAULT NULL,
  `body` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `id_promotion` int(11) NOT NULL,
  `id_campaign` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `images` varchar(50) DEFAULT NULL,
  `body` text,
  `alias_url` varchar(50) DEFAULT NULL,
  `status_published` enum('1=published','0=belum published') DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(30) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `nama_role`, `deskripsi`) VALUES
(1, 'admin', 'bisa crud'),
(2, 'user', 'cuma read saja'),
(3, 'dr_laurier', 'bisa jawab pertanyaan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sampling`
--

CREATE TABLE `tbl_sampling` (
  `id_sampling` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_create` datetime NOT NULL,
  `id_produk` int(11) NOT NULL,
  `produk_dipakai` varchar(200) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sampling`
--

INSERT INTO `tbl_sampling` (`id_sampling`, `id_user`, `tgl_create`, `id_produk`, `produk_dipakai`, `alamat`) VALUES
(1, 12, '2019-04-30 09:34:30', 1, '', ''),
(7, 17, '2019-05-14 03:38:47', 0, '', ''),
(9, 16, '2019-05-14 06:40:10', 0, '', ''),
(15, 18, '2019-05-21 07:21:21', 0, '', ''),
(16, 12, '2019-05-22 04:12:05', 4, 'malam', ''),
(17, 17, '2019-05-23 08:34:50', 3, 'Liliok', ''),
(18, 12, '2019-06-10 02:36:18', 1, 'slim', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id_setting` int(11) NOT NULL,
  `modul` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `sts` enum('1','0','') NOT NULL COMMENT '1=''aktif'',0=''tidak aktif'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id_setting`, `modul`, `value`, `sts`) VALUES
(1, 'forward_email', 'Nahdiah@kao.co.id,Dessy@kao.co.id,Darmawan@kao.co.id,Ambar@kao.co.id,nisa@growmint.com,mega@growmint.com', '1'),
(2, 'artikel apps', ',1,5', '1'),
(3, 'promo apps', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_campaign`
--

CREATE TABLE `tbl_slider_campaign` (
  `id_slider_product` int(11) NOT NULL,
  `id_campaign` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_fact`
--

CREATE TABLE `tbl_slider_fact` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_fact`
--

INSERT INTO `tbl_slider_fact` (`id_slider`, `gambar`, `judul`, `deskripsi`, `sort`) VALUES
(5, 'ff94d8566631368c9d66sl1.jpg', 'Lihatlah penawaran terbaik kami', '<p>Lihatlah penawaran terbaik kami</p>\r\n', 1),
(11, 'ed23f47049b30f2c16c3sl2.jpg', 'Pengajuan cepat mudah dan gampang', '<p>Pengajuan cepat mudah dan gampang</p>\r\n', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_product`
--

CREATE TABLE `tbl_slider_product` (
  `id_slider` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_product`
--

INSERT INTO `tbl_slider_product` (`id_slider`, `id_product`, `gambar`, `deskripsi`) VALUES
(1, 1, 'RNSW-30.png', 'Cegah bocor apapun posisi tidurmu'),
(2, 1, 'RNSW-35.png', 'Cegah bocor apapun posisi tidurmu'),
(3, 2, 'RN35WITH.png', 'Cegah bocor apapun posisi tidurmu'),
(4, 2, 'RN30WITH.png', 'Cegah bocor apapun posisi tidurmu'),
(5, 3, '01LSSG-D25.png', ''),
(6, 3, '01LSSG-D225.png', ''),
(7, 3, '01LSSG-D225G.png', ''),
(8, 4, '02LSSG-N30.png', ''),
(9, 4, '02LSSG-N35.png', ''),
(10, 5, 'LHS-D22-18.png', 'Pembalut Pertama!Menjaga Kesehatan Kulit Area Kewanitaan Cegah Lembab Cegah Iritasi.'),
(11, 5, 'LHS-D25-14.png', 'Pembalut Pertama!Menjaga Kesehatan Kulit Area Kewanitaan Cegah Lembab Cegah Iritasi.'),
(12, 6, 'LHS-N30-08.png', 'Pembalut Pertama!Menjaga Kesehatan Kulit Area Kewanitaan Panjang 30cm.'),
(13, 6, 'LHS-N35-06.png', 'Pembalut Pertama!Menjaga Kesehatan Kulit Area Kewanitaan Panjang 35cm.'),
(15, 7, '01LSMW.png', 'Pembalut siang yang bikin nyaman untuk kamu yang aktif seharian.'),
(16, 7, '01LSMLW.png', 'Pembalut siang yang bikin nyaman untuk kamu yang aktif seharian.'),
(17, 8, '02LDCW.png', 'Pembalut siang yang bikin nyaman untuk kamu yang aktif seharian.'),
(18, 8, '02LDC.png', 'Pembalut siang yang bikin nyaman untuk kamu yang aktif seharian.'),
(19, 8, '02LDCLW.png', 'Pembalut siang yang bikin nyaman untuk kamu yang aktif seharian.'),
(20, 9, '02PL-cleanfresh-blue.png', 'Laurier Cleanfresh'),
(21, 9, '02PL-cleanfresh-pink.png', 'Laurier Cleanfresh'),
(22, 10, '01PL-long-absorb-non-p.png', 'Laurier Cleanfresh'),
(23, 10, '01PL-long-absorb-p.png', 'Laurier Cleanfresh'),
(24, 11, '03PL-silverydeo.png', 'Laurier Cleanfresh');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider_product_detail`
--

CREATE TABLE `tbl_slider_product_detail` (
  `id_slider_product_detail` int(11) NOT NULL,
  `id_slider` int(11) NOT NULL,
  `deskripsi_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider_product_detail`
--

INSERT INTO `tbl_slider_product_detail` (`id_slider_product_detail`, `id_slider`, `deskripsi_detail`) VALUES
(1, 1, '<p dir="ltr"><span style="font-size:14px"><strong>Pembalut malam 30 cm tanpa Pelindung Samping</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Lapisan super kering dan lembut, m</span><big><span style="font-size:12px">emberi kenyamanan ekstra</span></big></p>\r\n\r\n<p dir="ltr">&nbsp;</p>\r\n'),
(5, 1, '<p dir="ltr"><span style="font-size:14px"><strong>Inti Penyerap Ultra</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Serap cairan dan gumpalan 1.5x lebih banyak* dengan seketika</span></p>\r\n\r\n<p><span style="font-size:12px">&nbsp;*dari pembalut sebelumnya</span></p>\r\n'),
(6, 1, '<p><span style="font-size:14px"><strong>Pelindung Belakang Lebar</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Pembalut yang lebih panjang dan lebar. Mampu mencegah bocor sampai belakang</span></p>\r\n'),
(7, 1, '<p dir="ltr"><span style="font-size:14px"><strong>Teknologi Flexi Fit</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Lentur mengikuti bentuk &amp; gerak tubuh. Tidak ada celah antara kulit dan pembalut yang menyebabkan kebocoran</span></p>\r\n'),
(8, 2, '<p dir="ltr"><span style="font-size:14px"><strong>Pembalut malam 35 cm tanpa Pelindung Samping</strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Lapisan super kering dan lembut, memberi kenyamanan ekstra</span></p>\r\n'),
(9, 2, '<p dir="ltr"><span style="font-size:14px"><strong>Inti Penyerap Ultra</strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Serap cairan dan gumpalan 1.5x lebih banyak* dengan seketika. *dari pembalut sebelumnya</span></p>\r\n'),
(10, 2, '<p><span style="font-size:14px"><strong>Pelindung Belakang Lebar</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Pembalut lebih panjang dan lebar, cegah bocor sampai belakang</span></p>\r\n'),
(11, 2, '<p><span style="font-size:14px"><strong>Teknologi Flexi Fit</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Lentur mengikuti bentuk &amp; gerak tubuh, tidak ada celah antara kulit dan pembalut yang menyebabkan kebocoran</span></p>\r\n'),
(16, 3, '<p><strong><span style="font-size:14px">Pembalut malam 35 cm dengan pelindung samping (Gathers)</span></strong></p>\r\n\r\n<p dir="ltr">&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(17, 3, '<p><span style="font-size:14px"><strong>Inti Penyerap Ultra</strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Pembalut malam dengan inti penyerap ultra, menyerap cairan &amp; gumpalan 5x lebih cepat*</span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">* Dibandingkan dengan produk sebelumnya</span><br />\r\n&nbsp;</p>\r\n'),
(18, 3, '<p><span style="font-size:14px"><strong>Teknologi Flexi Fit</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Lentur mengikuti bentuk dan gerak tubuh, sehingga tidak ada celah penyebab bocor. Menyerap dengan&nbsp;cepat, cegah bocor apapun posisi tidurmu, aman di saat banyak sekalipun</span></p>\r\n\r\n<p dir="ltr">&nbsp;</p>\r\n'),
(19, 3, '<p><span style="font-size:14px"><strong>Pelindung Samping 3D </strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Melindungi bocor samping dan pas menempel di tubuh, dilengkapi dengan pelindung belakang lebar yang mencegah bocor ke belakang</span></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(20, 4, '<p dir="ltr"><span style="font-size:14px">Pembalut malam 40 cm dengan pelindung samping (Gathers)</span></p>\r\n'),
(21, 4, '<p><span style="font-size:14px"><strong>Inti Penyerap Ultra</strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Pembalut malam dengan Inti Penyerap Ultra menyerap cairan &amp; gumpalan 5x lebih cepat*.&nbsp;* Dibandingkan dengan produk sebelumnya</span></p>\r\n'),
(22, 4, '<p><span style="font-size:14px"><strong>Teknologi Flexi Fit</strong></span></p>\r\n\r\n<p dir="ltr"><span style="font-size:12px">Lentur mengikuti bentuk dan gerak tubuh, sehingga tidak ada celah penyebab bocor. Menyerap dengan cepat, cegah bocor apapun posisi tidurmu, aman di saat banyak sekalipun&nbsp;</span></p>\r\n'),
(23, 4, '<p><span style="font-size:14px"><strong>Pelindung Samping 3D</strong></span></p>\r\n\r\n<p><span style="font-size:12px">Melindungi bocor samping dan pas menempel di tubuh, dilengkapi pelindung belakang lebar yang mencegah bocor ke belakang</span></p>\r\n'),
(24, 20, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>\r\n'),
(25, 20, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>\r\n'),
(26, 20, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut bocor.</p>'),
(27, 21, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>\r\n'),
(28, 21, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(29, 21, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut bocor.</p>'),
(30, 22, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>\r\n'),
(31, 22, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(32, 22, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut bocor.</p>\r\n'),
(33, 23, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>\r\n'),
(34, 23, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(35, 23, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut bocor.</p>'),
(36, 24, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>\r\n'),
(37, 24, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(38, 24, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut bocor.</p>'),
(39, 17, '<p><strong><span style="font-size:14px">Pembalut siang 25 cm dengan wing, daya serap extra maxi</span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:12px">Pembalut siang dengan tebal ideal, menyerap 2.5x lebih maksimal*&nbsp;</span></li>\r\n	<li><span style="font-size:12px">Dilengkapi dengan <strong>Flexislim Tech.&nbsp;</strong>Tidak mengganjal dan mengikuti gerak tubuhmu sehingga bebas bocor, bebas gerak seharian.</span></li>\r\n	<li><span style="font-size:12px">Dengan&nbsp;<strong>QuickLock System, </strong>mengikat cairan&nbsp;sehingga tidak bocor</span></li>\r\n	<li><span style="font-size:12px">Mudah di cuci setelah pemakaian</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:10px"><em>*dibandingkan dengan produk sebelumnya</em></span></p>\r\n\r\n<p dir="ltr">&nbsp;</p>\r\n'),
(40, 18, '<p><span style="font-size:14px"><strong>Pembalut siang 22&nbsp;cm tanpa&nbsp;wing, daya serap extra maxi</strong></span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:12px">Pembalut siang dengan tebal ideal, menyerap 2.5x lebih maksimal*&nbsp;</span></li>\r\n	<li><span style="font-size:12px">Dilengkapi dengan&nbsp;<strong>Flexislim Tech.&nbsp;</strong>Tidak mengganjal dan mengikuti gerak tubuhmu sehingga bebas bocor, bebas gerak seharian.</span></li>\r\n	<li><span style="font-size:12px">Dengan&nbsp;<strong>QuickLock System,&nbsp;</strong>mengikat cairan&nbsp;sehingga tidak bocor</span></li>\r\n	<li><span style="font-size:12px">Mudah di cuci setelah pemakaian</span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:10px"><em>*dibandingkan dengan produk sebelumnya</em></span></p>\r\n'),
(41, 19, '<ul>\n	<li>\n	<p><b>-</b>Pembalut siang 22cm dengan wing,daya serap extra maxi</p>\n\n	<p><b>-</b> QuickLock System Mengikat cairan&nbsp;sehingga tidak bocor</p>\n\n	<p><b>-</b>Kulit tetap kering</p>\n\n	<p><b>-</b>Tipis dan nyaman</p>\n\n	<p><b>-</b>Mudah di Cuci</p>\n	</li>\n</ul>\n'),
(42, 16, '<ul>\r\n	<li>\r\n	<p><b>Super Maxi Long</b></p>\r\n\r\n	<p><b>-</b> Pembalut siang lebih panjang 25 cm dengan wing (Long Wing)</p>\r\n\r\n	<p><b>-</b>Sayap pelindung yang lembut dan lingkaran Proteksi ganda mencegah pembalut berkerut ketengah sehingga tidak bocor samping.</p>\r\n\r\n	<p><b>-</b>Memberikan Kenyamanan ekstra</p>\r\n\r\n	<p><b>-</b> QuickLock System Mengikat cairan di dalam, tak kembali ke permukaan&nbsp;<b>Tak basah, tak tembus</b><b>&nbsp;</b></p>\r\n\r\n	<p><b>-</b>Tanpa gel,mudah di cuci</p>\r\n	</li>\r\n</ul>'),
(44, 15, '<ul>\r\n	<li>\r\n	<p><b>Super Maxi Wing</b></p>\r\n\r\n	<p><b>-</b> Pembalut siang lebih panjang 22.5cm dengan wing</p>\r\n\r\n	<p><b>-</b>Sayap pelindung yang lembut dan lingkaran Proteksi ganda mencegah pembalut berkerut ketengah sehingga tidak bocor samping.</p>\r\n\r\n	<p><b>-</b>Memberikan Kenyamanan ekstra</p>\r\n\r\n	<p><b>-</b> QuickLock System Mengikat cairan di dalam, tak kembali ke permukaan&nbsp;<b>Tak basah, tak tembus</b><b>&nbsp;</b></p>\r\n	</li>\r\n</ul>\r\n'),
(45, 10, '<p>Inovasi baru 3D Pori Bergelombang menyerap cairan seketika. Meningkatkan 8%* sirkulasi udara sehingga pembalut tetap kering. Permukaan ekstrak lembut nyaman di kulit.</p>\r\n\r\n<p>*dibandingkan dengan pembalut biasa</p>'),
(46, 11, '<p>Inovasi baru 3D Pori Bergelombang menyerap cairan seketika. Meningkatkan 8%* sirkulasi udara sehingga pembalut tetap kering. Permukaan ekstrak lembut nyaman di kulit.</p>\r\n\r\n<p>*dibandingkan dengan pembalut biasa</p>'),
(47, 12, '<p>Inovasi baru 3D Pori Bergelombang menyerap cairan seketika dan meningkatkan 8% sirkulasi udara sehingga pembalut tetap kering. Cegah Lembab Cegah Iritasi.</p>\r\n\r\n<p>Dilengkapi juga dengan pelindung belakang lebar,mencegah tembus belakang,memberi perlindungan lebih sepanjang malam.</p>\r\n\r\n<p>*dibandingkan dengan pembalut biasa</p>'),
(48, 13, '<p>Inovasi baru 3D Pori Bergelombang menyerap cairan seketika dan meningkatkan 8% sirkulasi udara sehingga pembalut tetap kering. Cegah Lembab Cegah Iritasi.</p>\r\n\r\n<p>Dilengkapi juga dengan pelindung belakang lebar,mencegah tembus belakang,memberi perlindungan lebih sepanjang malam.</p>\r\n\r\n<p>*dibandingkan dengan pembalut biasa</p>'),
(53, 5, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>'),
(54, 5, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(55, 5, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut</p>'),
(56, 6, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>'),
(57, 6, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(58, 6, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut</p>'),
(59, 7, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>'),
(60, 7, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(61, 7, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut</p>'),
(62, 8, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>'),
(63, 8, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(64, 8, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut</p>'),
(65, 9, '<ul>\r\n	<li><b>Lapisan Tipis Ultra Serap 1 mm</b></li>\r\n</ul>\r\n<p>Memiliki daya serap 200x* dan menyerap lebih cepat.*200x berat bahan penyerap</p>'),
(66, 9, '<ul>\r\n	<li><b>Lebih Fleksibel</b></li>\r\n</ul>\r\n<p>Laurier Super Slimguard baru lebih fleksible bebas bergerak mengikuti gerakan tubuh.</p>'),
(67, 9, '<ul>\r\n	<li><b>Quick Lock System dengan Dry Surface</b></li>\r\n</ul>\r\n<p>Menyerap dan mengunci cairan seketika,sehingga permukaan tetap kering,tanpa takut</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id_sosmed` int(11) NOT NULL,
  `nama_sosmed` varchar(50) NOT NULL,
  `link_sosmed` varchar(50) NOT NULL,
  `gambar_sosmed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id_sosmed`, `nama_sosmed`, `link_sosmed`, `gambar_sosmed`) VALUES
(1, 'facebook', 'https://www.facebook.com/halogadai', 'fb.png'),
(2, 'twitter', 'https://mobile.twitter.com/halogadai', 'tweeter.png'),
(3, 'instagram', 'https://www.instagram.com/halogadai/', 'instagram.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe`
--

CREATE TABLE `tbl_tipe` (
  `id_tipe` int(11) NOT NULL,
  `id_merk` int(11) NOT NULL,
  `tipe` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipe`
--

INSERT INTO `tbl_tipe` (`id_tipe`, `id_merk`, `tipe`) VALUES
(1, 1, 'Ertiga X');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type_product`
--

CREATE TABLE `tbl_type_product` (
  `id_type_product` int(11) NOT NULL,
  `nama_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_type_product`
--

INSERT INTO `tbl_type_product` (`id_type_product`, `nama_type`) VALUES
(1, 'Tipe 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `status` enum('1','0') NOT NULL COMMENT '1=menikah,0=lajang',
  `login_form` enum('1','2','3','4') DEFAULT NULL COMMENT '1=web,2=facebook,3=twitter,4=apps',
  `id_role` int(11) DEFAULT NULL,
  `token` text,
  `fotothumb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`, `email`, `foto`, `status`, `login_form`, `id_role`, `token`, `fotothumb`) VALUES
(68402, 'admin@halogadai.com', 'admin', 'Admin Gadai', 'admin@halogadai.com', 'admin.png', '1', '1', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `alias_url` (`alias_url`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `tbl_ecommerce`
--
ALTER TABLE `tbl_ecommerce`
  ADD PRIMARY KEY (`id_ecommerce`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_faq_home`
--
ALTER TABLE `tbl_faq_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image_campaign`
--
ALTER TABLE `tbl_image_campaign`
  ADD PRIMARY KEY (`id_image_campaign`);

--
-- Indexes for table `tbl_kategori_article`
--
ALTER TABLE `tbl_kategori_article`
  ADD PRIMARY KEY (`id_kategori_article`);

--
-- Indexes for table `tbl_kategori_product`
--
ALTER TABLE `tbl_kategori_product`
  ADD PRIMARY KEY (`id_kategori_product`);

--
-- Indexes for table `tbl_kontributor`
--
ALTER TABLE `tbl_kontributor`
  ADD PRIMARY KEY (`id_kontributor`);

--
-- Indexes for table `tbl_like_comment`
--
ALTER TABLE `tbl_like_comment`
  ADD PRIMARY KEY (`id_like_comment`);

--
-- Indexes for table `tbl_like_comment_period_story`
--
ALTER TABLE `tbl_like_comment_period_story`
  ADD PRIMARY KEY (`id_like_comment`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_persyaratan`
--
ALTER TABLE `tbl_persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`id_promotion`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_sampling`
--
ALTER TABLE `tbl_sampling`
  ADD PRIMARY KEY (`id_sampling`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tbl_slider_campaign`
--
ALTER TABLE `tbl_slider_campaign`
  ADD PRIMARY KEY (`id_slider_product`);

--
-- Indexes for table `tbl_slider_fact`
--
ALTER TABLE `tbl_slider_fact`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tbl_slider_product`
--
ALTER TABLE `tbl_slider_product`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `tbl_slider_product_detail`
--
ALTER TABLE `tbl_slider_product_detail`
  ADD PRIMARY KEY (`id_slider_product_detail`);

--
-- Indexes for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  ADD PRIMARY KEY (`id_type_product`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ecommerce`
--
ALTER TABLE `tbl_ecommerce`
  MODIFY `id_ecommerce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_faq_home`
--
ALTER TABLE `tbl_faq_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_image_campaign`
--
ALTER TABLE `tbl_image_campaign`
  MODIFY `id_image_campaign` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kategori_article`
--
ALTER TABLE `tbl_kategori_article`
  MODIFY `id_kategori_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_kategori_product`
--
ALTER TABLE `tbl_kategori_product`
  MODIFY `id_kategori_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_kontributor`
--
ALTER TABLE `tbl_kontributor`
  MODIFY `id_kontributor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_like_comment`
--
ALTER TABLE `tbl_like_comment`
  MODIFY `id_like_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_like_comment_period_story`
--
ALTER TABLE `tbl_like_comment_period_story`
  MODIFY `id_like_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_merk`
--
ALTER TABLE `tbl_merk`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_persyaratan`
--
ALTER TABLE `tbl_persyaratan`
  MODIFY `id_persyaratan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_sampling`
--
ALTER TABLE `tbl_sampling`
  MODIFY `id_sampling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_slider_campaign`
--
ALTER TABLE `tbl_slider_campaign`
  MODIFY `id_slider_product` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_slider_fact`
--
ALTER TABLE `tbl_slider_fact`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_slider_product`
--
ALTER TABLE `tbl_slider_product`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_slider_product_detail`
--
ALTER TABLE `tbl_slider_product_detail`
  MODIFY `id_slider_product_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id_sosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_tipe`
--
ALTER TABLE `tbl_tipe`
  MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_type_product`
--
ALTER TABLE `tbl_type_product`
  MODIFY `id_type_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68403;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
