-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2020 at 02:06 PM
-- Server version: 5.6.42
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webertel_blue`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `description_ge` text NOT NULL,
  `visible` enum('0','1') NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `title_ge`, `description`, `description_ge`, `visible`, `img`) VALUES
(1, 'About Us', 'ჩვენ შესახებ', '<p>Blue Valley was established in 2015, with support from the Agricultural and Rural Development Agency (ARDA), on 20ha sown with 3 varieties of blueberries ideally suited to the growing conditions in western Georgia - O\'Neal (early variety), Duke (early variety) and Legacy (mid-season variety).</p>\r\n<p>With an unwavering commitment to operational efficiency, quality, health, and safety, along with its desire to remain environmentally responsible, the company has secured GlobalG.A.P. certification. Coupled with its concerns for social responsibility, workers\' rights, and a productive and enjoyable work environment, with support from the USAID Agriculture Program, the company has also secured GRASP (GLOBALG.A.P. Risk Assessment on Social Practice) certification.</p>\r\n<p>In order to produce blueberries under optimal growing conditions and ensure reliable harvests, Blue Valley has embraced a variety of new agricultural technologies. With further support from the USAID Agriculture Program, the company has installed high tunnels over 2ha of its growing facilities that protect its blueberries from damage and loss due to unfavorable weather conditions. At the same time, productivity has been increased by 30%.</p>\r\n<p>The company is constantly conducting research and implementing new technologies and methodologies that will enhance production and increase sustainability. Of note are its digital traceability system that helps manage all aspects of production, a pre-cooling facility that prolongs shelf life and prepares blueberries for transport, and current investigations into the suitability of potted blueberry plants.</p>\r\n<p>With confirmed levels of productivity, Blue Valley is exporting the majority of its blueberries to wholesalers and high-end supermarkets in Russia. It is also developing new trading relationships with buyers in the EU and United Arab Emirates.</p>', '<p>კომპანია &bdquo;ლურჯი ველი&ldquo; შეიქმნა 2015 წელს. სოფლისა და სოფლის მეურნეობის განვითარების სააგენტოს მხარდაჭერით. კომპანიამ 2016 წელს გურიაში, ოზურგეთის რაიონის დაბა ლაითურში გააშენა 20 ჰექტრამდე ლურჯი მოცვის პლანტაცია ამერიკული სანერგე Fall Creek-საგან შეძენილი მაღალხარისხიანი სანერგე მასალით. პლანტაცია აღჭურვილია ყველა საჭირო თანამედროვე&nbsp; ინფრასტრუქტურით.</p>\r\n<p>კომპანია ორიენტირებულია მაღალ ხარისხის ლურჯი მოცვის წარმოებაზე. დიდი&nbsp;ყურადღება ეთმობა აგროტექნიკური ღონისძიებების სრულყოფასა და საუკეთესო პრაქტიკებთან შესაბამისობას. 2019 წელს კომპანიამ გაიარა Global Gap-ის და GRASP-ის სერთიფიცირების პროცესი.</p>\r\n<p>პლანტაციაში ძირითადად გაშენებულია ლურჯი მოცვის სამი ჯიში (ლეგასი, ონილი და დიუკი), რომლებიც კარგადაა შეგუებული ამ რეგიონის კლიმატურ პირობებს და საუკეთესო ხარისხის მოსავალს იძლევა. ამას გარდა, საცდელ ნაკვეთზე ხდება სხვა ჯიშების ტესტირება. კომპანიაში მიმდინარეობს ახალი ტექნოლოგიების შესწავლა და დანერგვა.</p>\r\n<p>ტესტირების პროცესშია მოცვის ქოთნებში მოყვანის მეთოდი. ასევე აღსანიშნავია, მაღალი გვირაბების ტექნოლოგიის დანერგვა: USAID სოფლის მეურნეობის პროექტის დახმარებით 2019 წელს მოეწყო მაღალი გვირაბი. ამ სისტემის გამოყენებით მნიშვნელოვნად გაიზრდება მოსავლის ხარისხი და პროდუქტიულობა და რაც მთავარია, მოხდება მცენარეების დაცვა ისეთი მაღალრისკიანი ბუნებრივი მოვლენებისაგან, როგორიცაა სეტყვა, ქარი, ყინვა და უხვი ნალექი.</p>', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `seen` enum('Yes','No') NOT NULL DEFAULT 'No',
  `visible` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `mobile`, `seen`, `visible`) VALUES
(1, '1', '1', '1', '1', '599320100', 'Yes', '1'),
(4, 'Test 2', 'iandguladze@gcfund.ge', 'Test 2', 'Test 2\r\n', '599320100', 'Yes', '1'),
(5, 'Test 3', 'iandguladze@gcfund.ge', 'Test 3', ' Test 3\r\n', '599320100', 'Yes', '1'),
(6, 'Irakli Andguladze', 'iandguladze@gcfund.ge', 'Server Test', 'asdasdasd', '599320100', 'Yes', '1'),
(7, 'Test 4', 'andguladze.iko@gmail.com', 'Test 4', ' Test 4', '123123123', 'Yes', '1'),
(8, 'Irakli Andguladze', 'iandguladze@gcfund.ge', 'Test Subject', 'Test Message', '599320111', 'Yes', '1'),
(9, 'Test 10', 'iandguladze@gcfund.ge', 'Test 1-', ' Test 10', '599320100', 'Yes', '1'),
(10, 'Ikooo', 'iandguladze@gcfund.ge', 'Color Test', 'Danger or success', '599320100', 'Yes', '1'),
(11, 'asdasd', 'adsas@asda.ge', 'asd', 'asd', '599320100', 'No', '1'),
(12, 'asda', 'adsas@asda.ge', 'asd', 'asd', '123123', 'No', '1'),
(13, 'Irakli Andguladze', 'iandguladze@gcfund.ge', 'Server Test', 'asdas', '599320100', 'No', '1'),
(14, 'asdasd', 'adsas@asda.ge', 'asd', 'asd', '123', 'No', '1'),
(15, 'Irakli Andguladze', 'iandguladze@gcfund.ge', 'Server Test', '123', '599320100', 'No', '1'),
(16, 'asdas', 'iandguladze@gcfund.ge', 'asd', 'asd', '599320100', 'No', '1');

-- --------------------------------------------------------

--
-- Table structure for table `galeryimg`
--

CREATE TABLE `galeryimg` (
  `id` int(11) NOT NULL,
  `imgPath` varchar(255) NOT NULL,
  `visible` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeryimg`
--

INSERT INTO `galeryimg` (`id`, `imgPath`, `visible`) VALUES
(1, 'img/gallery/1.jpg', '1'),
(2, 'img/gallery/2.jpg', '1'),
(3, 'img/gallery/3.jpg', '1'),
(4, 'img/gallery/4.jpg', '1'),
(5, 'img/gallery/5.jpg', '1'),
(6, 'img/gallery/6.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(11) DEFAULT NULL,
  `isMain` tinyint(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(30, 'Items/Items49/c28ba6.jpg', 49, 1, 'Items', 'c5abf1c5e2-1', ''),
(32, 'Partners/Partners5/6ce411.png', 5, 1, 'Partners', 'f6cda1700b-1', ''),
(33, 'Partners/Partners2/1aef93.jpg', 2, 1, 'Partners', 'db2bf5efe9-1', ''),
(34, 'Partners/Partners3/1d261b.png', 3, 1, 'Partners', '00dd9c2c64-1', ''),
(71, 'Items/Items43/2791d3.jpg', 43, 1, 'Items', 'bfa7b3afcb-1', ''),
(80, 'Directors/Director25/cdc74e.jpg', 25, 0, 'Director', '75901e997c-2', ''),
(81, 'Directors/Director25/ae49a3.jpg', 25, 0, 'Director', '76cf954fb9-3', ''),
(82, 'Directors/Director25/9e2b59.jpg', 25, 0, 'Director', 'd067f034c6-4', ''),
(83, 'Directors/Director25/d021eb.jpg', 25, 0, 'Director', '6914bfe468-5', ''),
(103, 'Directors/Director1/8f2262.jpg', 1, 1, 'Director', '7f80cc4da0-1', ''),
(106, 'Usfulinfos/Usfulinfo26/945052.jpg', 26, 1, 'Usfulinfo', '5ab7b95701-1', ''),
(108, 'Juries/Jury28/9d78d2.jpg', 28, 1, 'Jury', '211c191dfc-1', ''),
(109, 'Teams/Team1/22e08b.jpg', 1, 1, 'Team', '55e38c2795-1', ''),
(110, 'Teams/Team2/ea19f2.jpg', 2, 1, 'Team', '2a918257f9-1', ''),
(111, 'Teams/Team3/dac4bf.jpg', 3, 1, 'Team', 'bef7dc0e6d-1', ''),
(112, 'Teams/Team4/672b08.jpg', 4, 1, 'Team', 'f76fddb509-1', ''),
(114, 'Teams/Team5/b198d1.jpg', 5, 1, 'Team', 'baf06ac4ba-1', ''),
(115, 'Teams/Team7/6791fe.jpg', 7, 1, 'Team', '5468011c27-1', ''),
(116, 'Teams/Team8/1392e1.jpg', 8, 1, 'Team', '905e019448-1', ''),
(117, 'Teams/Team9/4e4c91.jpg', 9, 1, 'Team', 'b937e86bff-1', ''),
(118, 'Teams/Team10/112a1c.jpg', 10, 1, 'Team', 'de63e3c994-1', ''),
(119, 'Teams/Team11/35940a.jpg', 11, 1, 'Team', 'df1f9fcd0e-1', ''),
(120, 'Teams/Team12/f27e97.jpg', 12, 1, 'Team', '7d8b590d8a-1', ''),
(121, 'Teams/Team13/0fc065.jpg', 13, 1, 'Team', 'bf6d675cac-1', ''),
(122, 'Teams/Team14/fd2b2f.jpg', 14, 1, 'Team', 'bdc69f0063-1', ''),
(123, 'Teams/Team15/c999be.jpg', 15, 1, 'Team', '0c5eaa0405-1', ''),
(124, 'Teams/Team16/79f9ef.jpg', 16, 1, 'Team', '37efe12047-1', ''),
(125, 'Teams/Team17/30e08d.jpg', 17, 1, 'Team', 'b3232e53b7-1', ''),
(126, 'Teams/Team18/df0ec0.jpg', 18, 1, 'Team', 'd718878078-1', ''),
(127, 'Teams/Team19/ec906f.jpg', 19, 1, 'Team', 'd86db1ddfd-1', ''),
(128, 'Items/Items27/d9476a.jpg', 27, 1, 'Items', '8dc8379429-1', ''),
(129, 'Items/Items53/de6705.jpg', 53, 1, 'Items', 'bbf0ce98df-1', ''),
(130, 'Items/Items52/842be3.jpg', 52, 1, 'Items', 'e28f806641-1', ''),
(131, 'Directors/Director25/6ef0ec.jpg', 25, 1, 'Director', 'c8beeeb67d-1', ''),
(132, 'Abouts/About3/7e878c.webp', 3, 1, 'About', 'fa656e3cb3-1', ''),
(133, 'Abouts/About4/171b39.jpg', 4, 1, 'About', 'e0b25e5881-1', '');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `contact_ge` varchar(255) NOT NULL,
  `visible` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `lng`, `lat`, `title`, `title_ge`, `contact`, `contact_ge`, `visible`) VALUES
(1, '41.924420', '42.006820', 'Contact', 'კონტაქტი', '                    <p>\r\n                    <span> Village Laituri, Ozurgeti, Guria Region</span>\r\n                    <p>\r\n                    <span> 00995599493903 | info@bluevalley.ge</span>\r\n               ', '\r\n                    <p>\r\n                    <span> სოფელი ლაითური, ოზურგეთი, გურია</span>\r\n                    <p>\r\n                    <span> 00995599493903 | info@bluevalley.ge</span>\r\n                    <p/>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `translation` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `language`, `translation`) VALUES
(1, 'ka-GE', 'კონტაქტი'),
(2, 'ka-GE', 'გალერია'),
(3, 'ka-GE', 'პროდუქტები'),
(4, 'ka-GE', 'ჩვენ შესახებ');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571675500);

-- --------------------------------------------------------

--
-- Table structure for table `productblue`
--

CREATE TABLE `productblue` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `visible` enum('0','1') NOT NULL,
  `title_ge` varchar(255) NOT NULL,
  `description_ge` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productblue`
--

INSERT INTO `productblue` (`id`, `title`, `description`, `visible`, `title_ge`, `description_ge`) VALUES
(1, 'product', '  <p>\r\nBlue Valley grows its highly prized blueberries, embracing state-of-the-art agricultural technologies as well\r\nas cultivars perfectly suited to this region\'s environmentally pristine grow-ing conditions. With their unwavering focus on the highest quality output, production and fulfillment, blueberries from Blue Valley are always\r\nconsistent and reliable.Blue Valley blueberries are harvested at the peak of ripeness, transported by refrigerated vehicles to our pre-cooling facility, refrigerated at optimum temperatures and humidity to ensure ultimate\r\nquality, performance and shelf life.\r\n</p>', '1', 'პროდუქტი', '  <p>ქართული ტექსტი არის გასარკვევი რა ხდება Blue Valley grows its highly prized blueberries, embracing state-of-the-art agricultural technologies as well as cultivars perfectly suited to this region\'s environmentally pristine grow-ing conditions. With their unwavering focus on the highest quality output, production and fulfillment, blueberries from Blue Valley are always consistent and reliable.Blue Valley blueberries are harvested at the peak of ripeness, transported by refrigerated vehicles to our pre-cooling facility, refrigerated at optimum temperatures and humidity to ensure ultimate quality, performance and shelf life. </p>');

-- --------------------------------------------------------

--
-- Table structure for table `source_message`
--

CREATE TABLE `source_message` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `source_message`
--

INSERT INTO `source_message` (`id`, `category`, `message`) VALUES
(1, 'menu', 'Contact Us'),
(2, 'menu', 'Gallery'),
(3, 'menu', 'Products'),
(4, 'menu', 'About us');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'webertela', '$2y$13$XIdCRvAlWCSrfhXFtmNuG.13PAfNyfS8fD2/dVuPS20XZ4KGUIxu6', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeryimg`
--
ALTER TABLE `galeryimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `idx_message_language` (`language`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `productblue`
--
ALTER TABLE `productblue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source_message`
--
ALTER TABLE `source_message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_source_message_category` (`category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `galeryimg`
--
ALTER TABLE `galeryimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productblue`
--
ALTER TABLE `productblue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `source_message`
--
ALTER TABLE `source_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
