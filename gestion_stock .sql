-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 04:55 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `catégorie`
--

CREATE TABLE `catégorie` (
  `nom_catégorie` text NOT NULL,
  `id_catégorie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catégorie`
--

INSERT INTO `catégorie` (`nom_catégorie`, `id_catégorie`) VALUES
('t-shorts u', 4);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(40) NOT NULL,
  `nom_prenom` varchar(60) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `N_télé` int(40) NOT NULL,
  `N_fix` int(40) NOT NULL,
  `nom_de_magazine` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom_prenom`, `cin`, `N_télé`, `N_fix`, `nom_de_magazine`) VALUES
(2, '  khalid fife  ', '  PA248450  ', 649459004, 56526543, ' vialonds');

-- --------------------------------------------------------

--
-- Table structure for table `dépenses`
--

CREATE TABLE `dépenses` (
  `année` int(10) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `id_produit` int(40) NOT NULL,
  `quantité` int(40) NOT NULL,
  `id_dépenses` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dépenses`
--

INSERT INTO `dépenses` (`année`, `mois`, `id_produit`, `quantité`, `id_dépenses`) VALUES
(2020, '    12  ', 33, 4441, 1);

-- --------------------------------------------------------

--
-- Table structure for table `entrer`
--

CREATE TABLE `entrer` (
  `id_de_preduit` int(40) NOT NULL,
  `id_de_categourie` varchar(40) NOT NULL,
  `nom_de_preduit` varchar(40) NOT NULL,
  `date_d_entrer` date NOT NULL,
  `date_d_experation` date NOT NULL,
  `quantité` int(40) NOT NULL,
  `prix` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrer`
--

INSERT INTO `entrer` (`id_de_preduit`, `id_de_categourie`, `nom_de_preduit`, `date_d_entrer`, `date_d_experation`, `quantité`, `prix`) VALUES
(2, '   76  ', '   khalidd   ', '2021-05-10', '2021-05-17', 20, 12);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_content` longtext NOT NULL,
  `post_category` int(20) NOT NULL,
  `post_author` int(20) NOT NULL,
  `post_date` varchar(256) NOT NULL,
  `post_keywords` varchar(256) NOT NULL,
  `post_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_content`, `post_category`, `post_author`, `post_date`, `post_keywords`, `post_image`) VALUES
(1, 'Viator is releasing a new laptop very soon', 'Yes! this is true. Donec lobortis viverra massa eu porttitor. Mauris vel sapien urna. Mauris at nisi ut sapien accumsan elementum. Cras vitae felis ac elit pretium gravida. Morbi ante libero, sollicitudin sit amet ex nec, aliquet commodo orci. Etiam sed rutrum tellus, nec facilisis lorem. Donec pulvinar ante nibh, at sagittis ipsum accumsan nec. Vestibulum nec viverra elit, faucibus malesuada neque. In sed magna vitae lorem hendrerit luctus. Vivamus iaculis nibh ac luctus sagittis. Fusce dignissim convallis elit id pulvinar. Aenean nec lectus tristique nisl sodales blandit. Sed vehicula sapien nec leo faucibus, eu hendrerit nulla suscipit. Nam ullamcorper nisl tristique scelerisque tincidunt.', 0, 1, '05/09/18', 'Viator is releasing a new laptop very soon', 'images/post1.jpg'),
(2, 'Upto 50% off of laptops this holiday', 'Amazing Offer. Dont miss it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut dolor laoreet, sodales dui sed, sollicitudin eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla pretium mi in malesuada pretium. Vivamus eget nisi eu justo ornare porttitor. Phasellus aliquam tincidunt turpis eget porta. Quisque sit amet feugiat augue, sit amet aliquet tortor. Donec imperdiet pellentesque sapien. Sed ligula turpis, malesuada consectetur ipsum quis, tincidunt pharetra ipsum. Praesent non tellus lacus. Sed accumsan tincidunt tortor a molestie. Duis egestas lobortis semper. Duis id lacus augue. Donec ut tortor sit amet purus fringilla feugiat ac quis justo. Curabitur imperdiet, mi a dapibus sollicitudin, justo quam pretium sapien, et tempus quam mauris fermentum urna. Etiam tempor sapien lacus, nec fermentum turpis blandit at. Sed in augue magna.\r\n\r\nDonec lobortis viverra massa eu porttitor. Mauris vel sapien urna. Mauris at nisi ut sapien accumsan elementum. Cras vitae felis ac elit pretium gravida. Morbi ante libero, sollicitudin sit amet ex nec, aliquet commodo orci. Etiam sed rutrum tellus, nec facilisis lorem. Donec pulvinar ante nibh, at sagittis ipsum accumsan nec. Vestibulum nec viverra elit, faucibus malesuada neque. In sed magna vitae lorem hendrerit luctus. Vivamus iaculis nibh ac luctus sagittis. Fusce dignissim convallis elit id pulvinar. Aenean nec lectus tristique nisl sodales blandit. Sed vehicula sapien nec leo faucibus, eu hendrerit nulla suscipit. Nam ullamcorper nisl tristique scelerisque tincidunt.\r\n\r\nPhasellus libero ex, pretium ac maximus sit amet, aliquam nec odio. Etiam vitae nulla odio. Quisque fermentum faucibus magna quis mollis. Vestibulum suscipit, nisl vitae porta aliquet, mi arcu aliquet quam, sit amet blandit sem turpis et nibh. Proin ultricies ex a sapien rhoncus, eget lacinia mauris vestibulum. Nullam in justo convallis, condimentum nulla in, dapibus enim. In pharetra enim non gravida gravida. Aliquam sed convallis felis, vel molestie libero. Vivamus dapibus nunc ut enim molestie auctor. Ut sagittis gravida augue sed fermentum.\r\n\r\nEtiam id orci imperdiet, efficitur purus ut, luctus purus. Vivamus vitae dui eu dui laoreet pellentesque. Praesent vulputate sed odio vitae ultricies. Aliquam aliquet justo mi, finibus euismod arcu venenatis in. Sed aliquet purus sit amet consequat volutpat. Etiam ultricies nulla placerat, efficitur erat sed, mollis sem. Nam risus turpis, tincidunt sed sagittis id, pellentesque sit amet lectus. Fusce ac leo id odio ornare rutrum nec vitae ex.', 0, 0, '01/12/2018', 'Upto 50% off of laptops this holiday', 'images/post2.jpeg'),
(3, 'Company suffer a huge loss', 'Phasellus libero ex, pretium ac maximus sit amet, aliquam nec odio. Etiam vitae nulla odio. Quisque fermentum faucibus magna quis mollis. Vestibulum suscipit, nisl vitae porta aliquet, mi arcu aliquet quam, sit amet blandit sem turpis et nibh. Proin ultricies ex a sapien rhoncus, eget lacinia mauris vestibulum. Nullam in justo convallis, condimentum nulla in, dapibus enim. In pharetra enim non gravida gravida. Aliquam sed convallis felis, vel molestie libero. Vivamus dapibus nunc ut enim molestie auctor. Ut sagittis gravida augue sed fermentum.\r\n\r\nEtiam id orci imperdiet, efficitur purus ut, luctus purus. Vivamus vitae dui eu dui laoreet pellentesque. Praesent vulputate sed odio vitae ultricies. Aliquam aliquet justo mi, finibus euismod arcu venenatis in. Sed aliquet purus sit amet consequat volutpat. Etiam ultricies nulla placerat, efficitur erat sed, mollis sem. Nam risus turpis, tincidunt sed sagittis id, pellentesque sit amet lectus. Fusce ac leo id odio ornare rutrum nec vitae ex.\r\n\r\nInteger eget tellus placerat, vestibulum metus id, accumsan quam. Donec id gravida nisl, eu viverra massa. Duis et dui lectus. Nam sed placerat nulla. Aenean fermentum non dui sit amet lobortis. Nunc faucibus mollis ipsum, vel tincidunt purus rhoncus non. Nam porta massa id ipsum congue, a tristique enim commodo. In quis malesuada augue, sed tristique risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eleifend felis non blandit porta. Morbi gravida nunc non turpis luctus consequat. Cras ornare, ex in cursus tincidunt, enim justo malesuada nisl, in pharetra orci mauris interdum sem. In augue lorem, sollicitudin sit amet diam vitae, euismod molestie odio.\r\n\r\nGenerated 5 paragraphs, 490 w', 0, 0, '23/05/2019', 'Company suffer a huge loss', 'images/post3.jpeg'),
(4, 'Viator Laptops are good', 'Etiam vehicula porttitor ex quis volutpat. Maecenas in tempus enim, id porta metus. Sed non dictum odio. Nam ultrices, odio vitae ullamcorper aliquam, ligula orci ullamcorper lorem, vitae mattis leo elit sed velit. Pellentesque egestas erat vitae ultrices convallis. Integer erat est, eleifend in magna sit amet, euismod accumsan eros. Sed maximus lacus sagittis, pharetra velit eu, vestibulum mauris. Ut efficitur sagittis metus, ac commodo urna suscipit volutpat. Vestibulum pharetra ut diam at pretium. Morbi ut orci dolor. Vestibulum at libero lobortis, mollis nibh et, fringilla neque. Nullam placerat augue vitae feugiat faucibus. Donec vitae eros ex. Aliquam sodales, lacus eget condimentum tempus, quam mauris tempus mi, nec varius augue eros non ex.\r\n\r\nCras consectetur imperdiet nulla a sodales. Nulla vitae maximus elit. Vivamus egestas ligula in ornare rutrum. Sed quam dolor, posuere vitae mollis in, malesuada non leo. Ut et justo aliquet, tempor nunc id, hendrerit felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam commodo elit accumsan mollis aliquam. Sed ullamcorper malesuada libero at dapibus. Curabitur urna metus, imperdiet sollicitudin sapien in, tempor cursus tellus. Vivamus dignissim diam arcu, id viverra erat hendrerit vitae. Donec vitae consectetur dui. Morbi aliquet condimentum sem sed molestie.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Sed consectetur magna eu semper pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vel fermentum sem, nec scelerisque mauris. Proin luctus felis quam, in aliquet enim convallis eu. In semper risus sit amet felis dignissim scelerisque eu nec enim. Ut porttitor pretium augue. Nulla tincidunt nisi odio, eget vulputate dolor vestibulum sit amet. Morbi elementum ligula vel odio posuere dignissim. Curabitur id sem vestibulum, rhoncus magna id, tincidunt nunc. Phasellus pretium mi vel lobortis semper.', 0, 0, '01/06/2019', 'Viator Laptops are good', 'images/post4.jpg'),
(5, 'Meeting about the technical issues', 'Etiam vehicula porttitor ex quis volutpat. Maecenas in tempus enim, id porta metus. Sed non dictum odio. Nam ultrices, odio vitae ullamcorper aliquam, ligula orci ullamcorper lorem, vitae mattis leo elit sed velit. Pellentesque egestas erat vitae ultrices convallis. Integer erat est, eleifend in magna sit amet, euismod accumsan eros. Sed maximus lacus sagittis, pharetra velit eu, vestibulum mauris. Ut efficitur sagittis metus, ac commodo urna suscipit volutpat. Vestibulum pharetra ut diam at pretium. Morbi ut orci dolor. Vestibulum at libero lobortis, mollis nibh et, fringilla neque. Nullam placerat augue vitae feugiat faucibus. Donec vitae eros ex. Aliquam sodales, lacus eget condimentum tempus, quam mauris tempus mi, nec varius augue eros non ex.\r\n\r\nCras consectetur imperdiet nulla a sodales. Nulla vitae maximus elit. Vivamus egestas ligula in ornare rutrum. Sed quam dolor, posuere vitae mollis in, malesuada non leo. Ut et justo aliquet, tempor nunc id, hendrerit felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam commodo elit accumsan mollis aliquam. Sed ullamcorper malesuada libero at dapibus. Curabitur urna metus, imperdiet sollicitudin sapien in, tempor cursus tellus. Vivamus dignissim diam arcu, id viverra erat hendrerit vitae. Donec vitae consectetur dui. Morbi aliquet condimentum sem sed molestie.\r\n\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Sed consectetur magna eu semper pharetra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vel fermentum sem, nec scelerisque mauris. Proin luctus felis quam, in aliquet enim convallis eu. In semper risus sit amet felis dignissim scelerisque eu nec enim. Ut porttitor pretium augue. Nulla tincidunt nisi odio, eget vulputate dolor vestibulum sit amet. Morbi elementum ligula vel odio posuere dignissim. Curabitur id sem vestibulum, rhoncus magna id, tincidunt nunc. Phasellus pretium mi vel lobortis semper.', 0, 0, '05/03/2019', 'Meeting about the technical issues', 'images/post5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_price` float NOT NULL,
  `product_details` longtext NOT NULL,
  `product_summary` longtext NOT NULL,
  `product_ratings` float NOT NULL,
  `product_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_details`, `product_summary`, `product_ratings`, `product_image`) VALUES
(1, 'G3 15 Gaming Laptop', 799.99, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Welcome to your initiation\r\n15-inch gaming laptop engineered with dynamic Game Shift technology, NVIDIA® GeForce® discrete graphics, and up to 9th Gen Intel® i7 processors.', 3.9, 'images/product1.jpeg'),
(2, 'G5 15 SE Gaming Laptop', 994.99, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Built to bring out your battle cry\r\n15-inch gaming laptop with an 9th Gen Intel® Core™ processor, powerful NVIDIA® graphics, narrow bezel display and optimal cooling in a sharp design.', 4, 'images/product2.jpeg'),
(3, 'G7 17 Gaming Laptop', 1199, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Slim, but savage.\r\n17-inch gaming laptop with a thin, sleek design, 9th Gen Intel® Core™ processor, powerful NVIDIA® graphics and narrow bezel display.', 4.1, 'images/product3.jpeg'),
(4, 'Inspiron 11 3000 2-in-1', 599, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Take the fun with you\r\n11\" 2-in-1 with a compact design for enjoying trending videos anywhere. Features an HD touchscreen and four flexible modes.', 3.7, 'images/product4.jpg'),
(5, 'Inspiron 15 5000 2-in-1 Laptop', 519.99, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Versatile by design\r\n15.6\" 2-in-1 with four flexible modes supporting an Active Pen, versatile USB Type-C port and a narrow-border screen for Dell Cinema experience.', 3.9, 'images/product5.jpeg'),
(6, 'Inspiron 15 7000 2-in-1 Black Edition', 1099.99, 'Processor:\r\n9th Generation Intel® Core™ i5-9300H (8MB Cache, up to 4.1 GHz, 4 cores)\r\n\r\nOperating System:\r\nWindows 10 Home 64-bit English\r\n\r\nVideo Card:\r\nNVIDIA® GeForce® GTX 1050 3GB GDDR5\r\n\r\nDisplay:\r\n15.6-inch FHD (1920 x 1080) Anti-glare LED Backlit Non-touch Narrow Border WVA Display\r\n\r\nMemory:\r\n8GB 2x4GB DDR4 2666MHz\r\n\r\nHard Drive:\r\n1TB 5400 rpm Hybrid Hard Drive with 8GB Cache\r\n\r\nColor:\r\nEclipse Black with blue accents\r\n\r\nMicrosoft Office:\r\nMicrosoft Office 30 Day Trial\r\n\r\nSecurity Software:\r\nMcAfee LiveSafe 12 Month Subscription\r\n\r\nSupport:\r\n1 Year Mail In Service\r\n\r\nAccidental Damage Service:\r\nNone\r\n\r\nKeyboard:\r\nUS Backlit Keyboard\r\n\r\nPorts:\r\n1 HDMI 2.0\r\n1 SuperSpeed USB 3.1\r\n2 USB 2.0\r\n1 USB-C DisplayPort Alt-Mode for 1650 and above\r\n1 RJ45\r\n1 Standard SD Card slot\r\n1 Wedge Lock slot\r\n1 Headphone/Mic\r\n1 Power-in\r\n\r\nDimensions & Weight:\r\nHeight: 0.85\" (21.6mm) x Width: 14.4\" (365.5mm) x Depth: 10\" (254mm)\r\n\r\nAudio and Speakers:\r\n2 tuned speakers with nahimic 3D Audio for Gamers\r\n1 combo headphone / microphone jack\r\n\r\nChassis:\r\nColor Options\r\nEclipse Black or Alpine White\r\n\r\nKeyboard\r\nStandard full-size, spill-resistant keyboard with numeric keypad\r\nBacklit full-size, spill-resistant WASD keyboard with numeric keypad\r\n4-zone RGB backlit full-size, spill-resistant WASD keyboard with numeric keypad (US English only)\r\n\r\nWireless:\r\n802.11ac 1x1 WiFi and Bluetooth\r\n\r\nPrimary Battery:\r\n3-Cell Battery, 51 Whr (Integrated', 'Beautiful from every angle\r\n15.6-inch 2-in-1 elegantly designed with Dell Cinema, a narrow border and endless features so you’re ready for anything.', 4.3, 'images/product6.jpeg'),
(7, 'TUF Gaming Laptop', 1299.99, 'Viator TUF Gaming TUF705 is a powerful Windows 10 gaming laptop that combines gaming performance with up to a narrow bezel IPS-type panel and an extended lifespan, thanks to its patented Anti-Dust Cooling (ADC) system. Equipped with GeForce GTX graphics, and a quad-core AMD Ryzen processor, FX705 is able to play the latest games and multitask with ease. FX705 features one of the fastest Wi-Fi standards available — the latest Intel Wave 2 Wi-Fi 5 (802.11ac) boasts data transfer rates of up to an incredible 1.7Gbps. To top it all off, it’s RGB-backlit gaming keyboard is rated at 20-million keystroke durability.\r\nNVIDIA GeForce GTX 1660 Ti 6GB graphics (Base: 1455MHz, Boost: 1590MHz, TDP: 80W)\r\nQuad-core AMD Ryzen 7 3750H\r\n17.3” FHD (1920x1080) IPS-Type display\r\n7.2mm narrow bezel for up to 79% screen-to-body ratio\r\n16GB DDR4 2666MHz RAM | 512GB PCIe NVMe SSD\r\nGigabit Wave 2 Wi-Fi 5 (802.11ac) | Windows 10 Home\r\nPortable design with 1.05” thin profile\r\nDurable MIL-STD-810 military standard construction\r\nDual fans with anti-dust technology\r\nRGB backlit keyboard rated for 20-million keystroke durability.\r\nASUS TUF Gaming Laptop, 17.3” Full HD IPS-Type, AMD Ryzen 7 3750H, GeForce GTX 1660 Ti, 16GB DDR4, 512GB PCIe SSD, Gigabit Wi-Fi 5, Windows 10 Home, TUF705DU-PB74\r\n\r\n\r\n\r\nOperating System\r\nWindows 10 (64bit)\r\n\r\nDisplay\r\n17.3\" FHD (1920x1080, Matte)\r\n\r\nProcessor\r\nAMD Ryzen 7-3750H 2.3GHz (Turbo up to 4.0GHz)\r\n\r\nGraphics\r\nNVIDIA GeForce GTX 1660Ti GDDR6 6GB\r\n\r\nMemory\r\n16GB DDR4\r\n\r\nStorage\r\n512GB PCIE SSD\r\n\r\nWireless Data Network\r\nWi-Fi 5(802.11ac) 2*2\r\nBluetooth 5.0\r\n\r\nWebcam\r\n720P HD\r\n\r\nPorts\r\n1x Headphone-out & Audio-in Combo Jack\r\n1x RJ45 LAN Jack for LAN insert\r\n1x HDMI\r\n1x USB Type A 2.0\r\n2x USB Type A 3.1 (Gen.1)\r\n\r\nBattery\r\n64WHrs, 4S1P, 4-cell Li-ion\r\n\r\nDimensions\r\n15.7\" x 11.0\" x 1.0\"\r\n\r\nWeight\r\n6 lbs\r\n\r\n*All specifications are subject to change without notice. Please check with ASUS support for more detail.', '17.3” Full HD IPS-Type, AMD Ryzen 7 3750H, GeForce GTX 1660 Ti, 16GB DDR4, 512GB PCIe SSD, Gigabit Wi-Fi 5, Windows 10 Home, TUF705DU-PB74', 4.5, 'images/product7.jpg'),
(8, 'ROG Strix Scar III Gaming Laptop', 1999, 'With a streamlined, focused design, the ROG Strix SCAR III melds the latest 9th Gen Intel Core processors and GeForce RTX™ graphics into an impactful core gaming experience, with ample additional power to slice through serious content creation and everyday multi-tasking. Boasting up to a 240Hz refresh rate display with ultra-narrow bezel and PCIe SSD, the ROG STRIX SCAR III has all the power needed to conquer the latest game titles without breaking a sweat.\r\nNVIDIA GeForce RTX 2070 8GB GDDR6 (Base: 1215 MHz, Boost: 1440 MHz; TDP: 115W)\r\n9th Gen Intel Core i7-9750H Processor\r\n240hz 15.6” 1920x1080 IPS Type Display\r\n16GB DDR4 2666MHz RAM and 1TB PCIe SSD\r\nWindows 10 Home | Gigabit Wave 2 Wifi 5 (802.11ac)\r\nROG Intelligent Cooling thermal system\r\nDual 12V fans, triple radiators, anti-dust technology, and adjustable fan modes\r\nROG Aura Sync System with per-key RGB Keyboard, Logo, and Light Bar\r\nROG Strix Scar III Gaming Laptop, 15.6” 240Hz IPS Type Full HD, NVIDIA GeForce RTX 2070, Intel Core i7-9750H, 16GB DDR4, 1TB PCIe NVMe SSD, Per-Key RGB KB, Windows 10, G531GW-DB76\r\n\r\n\r\n\r\nOperating System\r\nWindows 10 (64bit)\r\n\r\nDisplay\r\n15.6\" FHD (1920x1080), matte\r\n\r\nProcessor\r\nIntel® Core™ i7-9750H 2.6GHz (Turbo up to 4.5GHz)\r\n\r\nChipset\r\nMobile Intel® HM370 Express Chipsets\r\n\r\nGraphics\r\nNVIDIA GeForce RTX 2070 GDDR6 8GB\r\n\r\nMemory\r\n16GB DDR4\r\n\r\nStorage\r\n1TB PCIE SSD\r\n\r\nWireless Data Network\r\nWi-Fi 5(802.11ac) 2*2\r\nBluetooth 5.0\r\n\r\nPorts\r\n1x Headphone-out & Audio-in Combo Jack\r\n1x RJ45 LAN Jack for LAN insert\r\n1x HDMI\r\n1x USB Type C 3.1 (Gen.2)\r\n3x USB Type A 3.1 (Gen.1)\r\n\r\nBattery\r\n66WHrs, 4S1P, 4-cell Li-ion\r\n\r\nDimensions\r\n14.2\" x 10.8\" x 1.0\"\r\n\r\nWeight\r\n5.7 lbs\r\n\r\n*All specifications are subject to change without notice. Please check with ASUS support for more detail.', '15.6” 240Hz IPS Type Full HD, NVIDIA GeForce RTX 2070, Intel Core i7-9750H, 16GB DDR4, 1TB PCIe NVMe SSD, Per-Key RGB KB, Windows 10, G531GW-DB76', 4.4, 'images/product8.jpg'),
(9, 'ROG Zephyrus S GX701 Gaming Laptop', 2500, 'ROG Zephyrus S set the standard for ultra-slim Windows 10 Pro gaming laptops featuring up to NVIDIA GeForce RTX 2080 graphics. Boasting a 144Hz refresh rate Pantone® Validated display with ultra-narrow bezel, PCIe NVMe SSD, and an 9th Gen Intel Core i7 processor, the new GX701 has all the power and portability needed to conquer the latest and greatest game titles, anywhere. Use the ROG-exclusive GPU switch to change between G-SYNC™ for gaming and Optimus for battery life while the ROG Active Aerodynamic System (AAS) expands to help Zephyrus S sustain top performance for gaming and other heavy loads.\r\nNVIDIA GeForce RTX 2080 8GB GDDR6 (Base: 990 MHz, Boost: 1230 MHz; TDP: 90W)\r\nIntel Core i7-9750H Hexa-Core Processor\r\n17.3” 144Hz 3ms Pantone Validated FHD (1920x1080) Display\r\n32GB DDR4 2666MHz RAM | 1TB NVMe PCIe SSD (Hyper Drive) | Windows 10 Professional\r\nGigabit Wave 2 Wi-Fi 5 (802.11ac) | Per-key Aura Sync RGB Keyboard\r\nDetachable/external 1080p 60hz Webcam\r\nCompact and portable form factor only 0.74” (18.7mm) thin\r\nUpgraded Intelligent Cooling System with ROG-exclusive Active Aerodynamic System\r\n12V fans and increased longevity with anti-dust tunnels\r\nGPU Switch Mode: switch between integrated and discrete graphics.\r\nROG Zephyrus S GX701 Gaming Laptop, 17.3” 144Hz Pantone Validated Full HD IPS, GeForce RTX 2080, Intel Core i7-9750H Processor, 32GB DDR4, 1TB PCIe NVMe SSD Hyper Drive, Windows 10 Pro, GX701GX-XB78\r\n\r\n\r\n\r\nOperating System\r\nWindows 10 Professional (64bit)\r\n\r\nDisplay\r\n17.3\" FHD (1920x1080), matte\r\n\r\nProcessor\r\nIntel® Core™ i7-9750H 2.6GHz (Turbo up to 4.5GHz)\r\n\r\nChipset\r\nMobile Intel® HM370 Express Chipsets\r\n\r\nGraphics\r\nNVIDIA GeForce RTX 2080 GDDR6 8GB with Max-Q Design\r\n\r\nMemory\r\n32GB DDR4\r\n\r\nStorage\r\n1TB PCIE G3X4 SSD\r\n\r\nWireless Data Network\r\nWi-Fi 5(802.11ac)2*2\r\nBluetooth 5.0\r\n\r\nWebcam\r\nROG Fearless Eye - GC21 External 60fps Webcam\r\n\r\nPorts\r\n1x Headphone-out & Audio-in Combo Jack\r\n1x HDMI\r\n1x USB Type A 3.1 (Gen.2)\r\n1x USB Type C 3.1 (Gen.1)\r\n1x USB Type C 3.1 (Gen.2)\r\n2x USB Type A 3.1 (Gen.1)\r\n\r\nBattery\r\n76WHrs, 4S1P, 4-cell Li-ion\r\n\r\nDimensions\r\n15.7\" x 10.7\" x 0.7\"\r\n\r\nWeight\r\n5.7 lbs\r\n\r\n*All specifications are subject to change without notice. Please check with ASUS support for more detail.', '17.3” 144Hz Pantone Validated Full HD IPS, GeForce RTX 2080, Intel Core i7-9750H Processor, 32GB DDR4, 1TB PCIe NVMe SSD Hyper Drive, Windows 10 Pro, GX701GX-XB78', 4, 'images/product9.jpg'),
(10, 'ROG G703GX (2019) Gaming Laptop', 2000, 'The ROG G703GX is equipped with an Intel 9th generation processor and full-powered NVIDIA GeForce RTX graphics for amazing desktop-level experiences. The G703GX packs a 17.3-inch 144Hz high refresh-rate display, patented ADC (Anti-Dust Cooling) technology, and a Hyper Drive high-speed SSD. The ROG G703GX is built with the gamer in mind. It is, from the inside out, the ultimate armored fighter. \r\nNVIDIA GeForce RTX 2080 8GB GDDR6 with ROG Boost OC (Base: 1575 MHz, Boost: 1755 MHz)\r\nLatest 9th Gen Intel Core i7-9750H Hexa-Core Processor\r\n17.3” 144Hz 3ms FHD (1920x1080) IPS Type display with NVIDIA G-Sync\r\n32GB DDR4 2666MHz RAM | 512GB PCIe SSD + 1TB FireCuda HDD | Windows 10 Pro\r\nGigabit Wave 2 Wi-Fi 5 (802.11ac) | Thunderbolt 3 | Mini DisplayPort 1.4 | HDMI 2.0\r\nUpgraded Intelligent Cooling System\r\nDual 12V fans, anti-dust tunnels, and ROG Overboost fan control\r\nASUS AURA SYNC RGB keyboard with individual per-key customization & 2.5mm key travel\r\nWindows 10 Pro.\r\nASUS ROG G703GX (2019) Gaming Laptop, 17.3” FHD 144Hz G-Sync, Overclocked GeForce RTX 2080, 9th Gen Intel Core i7-9750H, 32GB RAM, 512GB PCIe SSD + 1TB SSHD, Windows 10 Pro, G703GX-XB76\r\n\r\n\r\n\r\nOperating System\r\nWindows 10 Professional (64bit)\r\n\r\nDisplay\r\n17.3\" FHD (1920*1080 matte)\r\n\r\nProcessor\r\nIntel® Core™ i9-9980HK 2.4GHz (Turbo up to 5.0GHz)\r\n\r\nChipset\r\nMobile Intel® HM370 Express Chipsets\r\n\r\nGraphics\r\nNVIDIA GeForce RTX 2080 GDDR6 8GB\r\n\r\nMemory\r\n32GB DDR4\r\n\r\nStorage\r\n2x 512GB PCIE SSD RAID 0 (1TB Total)\r\n\r\nWireless Data Network\r\nWi-Fi 5(802.11ac) 2*2\r\nBluetooth 5.0\r\n\r\nWebcam\r\n720P HD\r\n\r\nPorts\r\n1x Microphone-in jack\r\n1x Headphone-out Jack\r\n1x RJ45 LAN Jack for LAN insert\r\n1x HDMI\r\n1x mini Display Port\r\n1x Thunderbolt\r\n3x USB Type-A 3.1 (Gen.2)\r\n1x USB Type-C 3.1 (Gen 2)\r\n1x SD Card Reader\r\n\r\nBattery\r\n96WHrs, 4S2P, 8-cell Li-ion\r\n\r\nDimensions\r\n16.7\" x 12.6\" x 2.0\"\r\n\r\nWeight\r\n10.4 lbs\r\n\r\n*All specifications are subject to change without notice. Please check with ASUS support for more detail.', '17.3” FHD 144Hz G-Sync, Overclocked GeForce RTX 2080, 9th Gen Intel Core i7-9750H, 32GB RAM, 512GB PCIe SSD + 1TB SSHD, Windows 10 Pro, G703GX-XB76', 4.5, 'images/product10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reteur`
--

CREATE TABLE `reteur` (
  `date_reteur` date NOT NULL,
  `id_client` int(40) NOT NULL,
  `id_produit` int(40) NOT NULL,
  `quantité` int(40) NOT NULL,
  `id_reteur` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sortie`
--

CREATE TABLE `sortie` (
  `id_de_sortie` int(40) NOT NULL,
  `id_de_preduit` int(40) NOT NULL,
  `id_de_user` int(40) NOT NULL,
  `id_de_client` int(40) NOT NULL,
  `Prix_de_sortie` double NOT NULL,
  `quantité` int(40) NOT NULL,
  `date_de_sortie` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sortie`
--

INSERT INTO `sortie` (`id_de_sortie`, `id_de_preduit`, `id_de_user`, `id_de_client`, `Prix_de_sortie`, `quantité`, `date_de_sortie`) VALUES
(1769239901, 22, 33, 55, 9999, 44, '2021-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(5, 'Wajeeha', 'wajeeha.parker@gmail.com', '$2y$10$PJoniz8erUgUIapAz4t8P.evCfIIzI3lQ2xwWNkL0ESpVnOY/dMka');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(40) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `cin` varchar(40) NOT NULL,
  `N_télé` int(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passwd` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catégorie`
--
ALTER TABLE `catégorie`
  ADD PRIMARY KEY (`id_catégorie`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `dépenses`
--
ALTER TABLE `dépenses`
  ADD PRIMARY KEY (`id_dépenses`);

--
-- Indexes for table `entrer`
--
ALTER TABLE `entrer`
  ADD PRIMARY KEY (`id_de_preduit`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `reteur`
--
ALTER TABLE `reteur`
  ADD PRIMARY KEY (`id_reteur`);

--
-- Indexes for table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`id_de_sortie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catégorie`
--
ALTER TABLE `catégorie`
  MODIFY `id_catégorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dépenses`
--
ALTER TABLE `dépenses`
  MODIFY `id_dépenses` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `entrer`
--
ALTER TABLE `entrer`
  MODIFY `id_de_preduit` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reteur`
--
ALTER TABLE `reteur`
  MODIFY `id_reteur` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `id_de_sortie` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1769239902;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
