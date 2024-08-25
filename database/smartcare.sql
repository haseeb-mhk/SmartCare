-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2024 at 07:24 PM
-- Server version: 8.0.27
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `asanorder`
--

DROP TABLE IF EXISTS `asanorder`;
CREATE TABLE IF NOT EXISTS `asanorder` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `message` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `asanorder`
--

INSERT INTO `asanorder` (`order_id`, `fname`, `lname`, `email`, `contact`, `message`, `image`) VALUES
(1, 'izhar', 'ali', 'info@asdsd.com', '12345678912', '', 'WhatsApp Image 2024-08-25 at 2.39.21 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`, `description`) VALUES
(4, 'Medicines', 'general medicines'),
(7, 'Skin Care', 'medicines for skins health and cares'),
(8, 'Nutritions', 'Food necessary for growth, maintenance and energy.'),
(9, 'Cosmetics ', 'all cosmetics like shampoo, body spray, soap etc.'),
(10, 'Drops & Ointments', 'all kinds of eye drops and onitments');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `fname`, `lname`, `email`, `subject`, `message`) VALUES
(1, 'Izhar', 'Ali', 'info@a.com', 'information ', 'i need help');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `prescription_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`prescription_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `formula` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `formula`, `category_id`, `description`, `price`, `quantity`, `image`) VALUES
(19, 'Artifen', 'Diclofenace sodium', 4, 'This medicine is used in stomach pain, cramps.and the managment of muscular and skeltal disorder pain, rehumatoid\r\narthritis and osteoarthsis.', '70.00', 20, 'WhatsApp Image 2024-08-25 at 2.39.21 AM.jpeg'),
(21, 'Ansaid', 'Flurbiprofen', 4, 'Pain and inflamation.this medicine is used top treat rheumatic(joints ,bones,cartilage) and muscluar pain,sprains(stretchin or tearing of ligaments) and strains.', '100.00', 17, 'WhatsApp Image 2024-08-25 at 2.39.22 AM (1).jpeg'),
(22, 'Bromalex', 'Bromazepam', 4, 'this medicine is used in patients with anxiety, seizure (sudden, uncontrolled electrical disturbance in the brain control) and insomnia(inability to sleep).', '60.00', 10, 'WhatsApp Image 2024-08-25 at 2.39.15 AM.jpeg'),
(23, 'Nebivol', 'Nebivolo HCL', 4, 'Hypertension this medication is uesd in treating or managing angina( chest pain) and hypertension ( high blood pressure)', '215.00', 18, 'WhatsApp Image 2024-08-25 at 2.39.22 AM.jpeg'),
(24, 'Nuberol Forte', 'orephenadrine', 4, 'used for muscle injruy,pain head, tooth provides quick relief muscle spams in musculoskeletal disorders.and effective for most mild painful condition ', '50.00', 10, 'WhatsApp Image 2024-08-25 at 2.39.14 AM.jpeg'),
(25, 'Risek', 'Omeprazole', 4, ' omperazole is portion of pump inhibitor used to treat .GRED and related conditions such as heartburn and gastric acid hypersecretionit and it also heals tiissue damage and ulcers caused by gastric acid and H. pylori infection', '160.00', 10, 'WhatsApp Image 2024-08-25 at 2.39.16 AM.jpeg'),
(26, 'Ganaton', 'Itropride', 4, 'prokinetic and stomach disorders.This medicine is used to treat functional dyspepsia (indigestion), non-ulcer dyspepsia (chronic gastritis), sensation of bloating, fullness, upper abdominal pain or discomfort, loss of appetite, heartburn, nausea,and vomiting', '290.00', 19, 'WhatsApp Image 2024-08-25 at 2.39.13 AM.jpeg'),
(27, 'Omega', 'Omeprazole', 4, 'Stomach ulcers.Uses include the management of esophageal reflux disease (reflux of stomach contents back into the\r\nesophagus is seen), and stomach and duodenal (small intestine) ulcers.', '200.00', 10, 'WhatsApp Image 2024-07-27 at 1.45.33 PM.jpeg'),
(28, 'Morinaga Bf-1 Infant', 'Formula Milk Powder', 8, 'Morinaga BF-1 Infant Formula Milk Powder is made to fulfil the nutritional needs of the newly born baby, keep him full and promote his healthy overall growth.The formula is a source of various minerals, vitamins and other nutrients and beneficial factors such as lactoferrin nucleotides, DHA, GOS and bifidus factor. ', '2550.00', 10, '1036324-1.jpg'),
(29, 'Cerelac 3', 'Fruits & Wheat', 8, 'Cerelac 3 Fruits & Wheat 350\r\nEach stage of your baby’s growth is unique and so are the changing nutritional requirements. NESTLÉ CERELAC infant cereals (6 months onwards) are easy to digest and grouped in stages according to the changing nutritional needs of the right nutrition at with NESTLÉ CERELAC providing the right nutrition at each stage.', '740.00', 23, 'WhatsApp Image 2024-08-25 at 2.39.18 AM (1).jpeg'),
(30, 'Lactogen 1', 'Nestle Powder', 8, 'Breast feeding is the ideal source of food for a newborn. But what if you are unavailable or busy let Nestle Lactogen 1, assist you in these times. Formulated with vitamin and minerals enriched ingredients, it strengthens bones and increases immunity. It also keeps the digestive system healthy and reduces risk of stomach discomfort. Free of sucrose, it contains 100% lactogen, DHA, ARA and L. comfortis. This combination not only provides a healthy dose of nutrition but also helps in the development of vision and brain. Nestle Powder ', '590.00', 15, 'WhatsApp Image 2024-07-27 at 1.44.37 PM.jpeg'),
(31, 'Johnsons Blossoms', 'Baby soap', 7, 'johnsons Baby Blossoms soap gently cleanses for skin that feels baby soft.', '251.00', 10, 'WhatsApp Image 2024-07-27 at 1.44.33 PM.jpeg'),
(32, 'johnsons Baby Gold', 'Shampoo ', 7, 'JOHNSONS Baby Shampoo is as gentle to the eyes as pure water and is specially designed to gently cleanse babys delicate hair and scalp. It quickly lathers and rinses easily, leaving your baby’s hair soft, shiny, and  tested formulation - pediatrician, dermatologist, ophthalmologist. No parabens, phthalates, sulfates, dyes, or soap. ', '460.00', 10, 'WhatsApp Image 2024-07-27 at 1.44.53 PM.jpeg'),
(33, 'Nexton Baby Jelly', 'jelly', 7, ' Nexton baby jelly having mild and light fragrance helps to keep your baby feeling fresh and active. The soft texture of Nextons Jelly gives easy absorption which makes a protective barrier and locks in moisture which gives deep nourishment. This barrier protects baby skin from harmful irritants and keeps baby healthy and active. Use after bath and after each nappy change to avoid nappy rash.', '470.00', 17, 'WhatsApp Image 2024-07-27 at 1.44.41 PM.jpeg'),
(34, 'Nexton White Baby', 'Powder', 7, 'Nexton baby powder helps to protect your baby delicate soft skin and eliminate friction while keeping skin cool and comfortable. It protects your dearest one skin from excess moisture and leave it soft and smooth. It provides protection against wetness and itsclassic fragrance makes your baby feel fresh and smells good. Keeps the baby skin cool & comfortable.  ', '430.00', 10, 'WhatsApp Image 2024-07-27 at 1.44.58 PM.jpeg'),
(35, 'Bioderma', 'dermatol lotion', 4, 'dermatol lotion DeLesh berry balm is the product that really heals the chappe. Your dry skin become smooth shortly after its application.\r\n', '350.00', 4, 'product_01.png'),
(36, 'CLA Core', 'Multi Vitamins ', 8, 'Each stage of your body growth is unique and so are the changing nutritional requirements.NESTL CERELAC infant cereals (6 months onwards) are easy to digest and grouped in stages.', '800.00', 19, 'product_05.png'),
(37, 'Cetyl Pure', 'Multi Vitamins ', 8, 'Cetyl Pure Multi Vitamins is formulated to keep your delicate skin healthy as it locks in up to 10 times\r\nmore moisture and protect it from dryness. Fragrant mineral oil blends effortlessly into the skin, creating the ultimate soothing and comforting massage experience for your baby. Uses', '950.00', 10, 'product_04.png'),
(38, 'Head & Shoulder', 'Hair Shampoo', 9, 'head and shoulder shampoo is good for hair with dandriffs. ', '480.00', 10, 'download (5).jpeg'),
(39, 'Sunsilk', 'Hair Shampoo', 9, 'sunsilk shampo is good for dry hairs and short hairs, it smoth the hairs and make it long and strong.', '470.00', 10, 'download (6).jpeg'),
(40, 'TRESemme ', 'Shampo', 9, 'Smoother, shinier, stronger-looking hair starts in the shower – with a great shampoo', '1230.00', 5, 'download (4).jpeg'),
(41, 'Scalp Comfort', 'Shampoo', 9, 'Smoother, shinier, stronger-looking hair starts in the shower – with a great shampoo.', '1400.00', 3, 'download (7).jpeg'),
(42, 'Dove', 'Shampoo', 9, 'Smoother, shinier, stronger-looking hair starts in the shower – with a great shampoo.', '480.00', 5, 'download (8).jpeg'),
(43, 'Palmolive', 'Shampoo', 9, 'Smoother, shinier, stronger-looking hair starts in the shower – with a great shampoo.', '500.00', 5, 'download (9).jpeg'),
(44, 'Ophtha Care', 'optochin', 10, 'Realive eye strains, redness and dryness', '350.00', 20, 'images (3).jpeg'),
(45, 'FML-Neo', 'ophthalmic suspension', 10, 'reliabe eye strains and redness.', '150.00', 5, 'images (2).jpeg'),
(46, 'Systane Ultra', 'lincomycin drops ', 10, 'Eye starins, redness and dry eyes ', '230.00', 5, 'images (1).jpeg'),
(47, 'Optrex', 'refreshing eyes', 10, 'Refresh eyes and realives strains', '310.00', 17, 'images.jpeg'),
(48, 'Ciplox', 'ciprofloxacin ', 10, 'ciplox is made od ciprofloxincin used in eye injuries.', '415.00', 5, 'download (3).jpeg'),
(49, 'AXE', 'Body Spray', 9, 'refreshing smell and long lasting body spray', '980.00', 18, 'download (10).jpeg'),
(50, 'FOGG', 'Body Spray', 9, 'refreshing smell and long lasting body spray', '970.00', 10, 'download (11).jpeg'),
(51, 'Secret', 'Body Spray', 9, 'refreshing smell and long lasting body spray', '1050.00', 5, 'download (12).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `strengths`
--

DROP TABLE IF EXISTS `strengths`;
CREATE TABLE IF NOT EXISTS `strengths` (
  `strength_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `strength` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`strength_id`),
  KEY `strengths_ibfk_1` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strengths`
--

INSERT INTO `strengths` (`strength_id`, `product_id`, `strength`) VALUES
(20, 19, '50 mg'),
(21, 19, '100 mg'),
(22, 19, ''),
(23, 21, '100 mg'),
(24, 22, '3 mg'),
(25, 23, '5 mg'),
(26, 24, '50 mg'),
(27, 25, '20 mg'),
(28, 25, '40 mg'),
(29, 26, '50 mg'),
(30, 26, '100 mg'),
(31, 27, '40 mg'),
(32, 27, '20 mg'),
(33, 28, '400 g'),
(34, 29, '350 g'),
(35, 30, '200 g'),
(36, 30, '400 g'),
(37, 30, '800 g'),
(38, 31, '100 g'),
(39, 32, '100 ml'),
(40, 33, '100 ml'),
(41, 34, '200 g'),
(42, 35, '150 ml'),
(43, 36, '100 mg'),
(44, 37, '200 mg'),
(45, 38, '200 ml'),
(46, 39, '200 ml'),
(47, 40, '500 ml'),
(48, 41, '500 ml'),
(49, 42, '500 ml'),
(50, 43, '400 ml'),
(51, 44, '10 ml'),
(52, 45, '5 ml'),
(53, 46, '12 ml'),
(54, 47, '12 ml'),
(55, 48, '10 ml'),
(56, 49, '100 ml'),
(57, 50, '150 ml'),
(58, 51, '200 ml');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_type` enum('patient','admin') COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `user_type`) VALUES
(2, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(3, 'izhar', 'izhar@gmail.com', 'izhar123', 'admin'),
(4, 'haseeb', 'haseeb@gmail.com', 'haseeb259', 'patient'),
(5, 'sahil', 'info@a.com', 'sahil123', 'patient'),
(7, 'izhar', 'info@asdsd.com', 'izhar', 'patient');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `strengths`
--
ALTER TABLE `strengths`
  ADD CONSTRAINT `strengths_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
