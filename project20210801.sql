-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2021 at 07:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project20210801`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(255) NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `category_short` varchar(255) NOT NULL,
  `category_lebel` varchar(255) NOT NULL,
  `category_created_date` varchar(255) NOT NULL,
  `category_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_title`, `category_short`, `category_lebel`, `category_created_date`, `category_created_time`) VALUES
(1, 'category1', 'category1', 'category1', '2021-06-20', '20:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `contact_created_date` varchar(255) NOT NULL,
  `contact_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `picci`
--

CREATE TABLE `picci` (
  `picci_id` int(255) NOT NULL,
  `picci_full_name` varchar(255) NOT NULL,
  `picci_username` varchar(255) NOT NULL,
  `picci_password` varchar(255) NOT NULL,
  `picci_phone` varchar(255) NOT NULL,
  `picci_email` varchar(255) NOT NULL,
  `picci_address` varchar(255) NOT NULL,
  `picci_profile_pic` varchar(255) NOT NULL,
  `picci_user_type` varchar(255) NOT NULL,
  `picci_supreme` varchar(255) NOT NULL,
  `picci_account_creation_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `picci`
--

INSERT INTO `picci` (`picci_id`, `picci_full_name`, `picci_username`, `picci_password`, `picci_phone`, `picci_email`, `picci_address`, `picci_profile_pic`, `picci_user_type`, `picci_supreme`, `picci_account_creation_date`) VALUES
(1, 'Admin', 'admin127', '8018a3ecdbdeb621236583c7ded01a08', '+990xxxxxxxxxxxxx', 'example@sitedomain.com', '', 'DVRLJCqWsAA7YNA.jpg', 'Admin', 'Admin', '2021-06-13 12:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `plugin_database`
--

CREATE TABLE `plugin_database` (
  `plugin_id` int(255) NOT NULL,
  `plugin_name` varchar(255) NOT NULL,
  `plugin_action` varchar(255) NOT NULL,
  `plugin_created_date` varchar(255) NOT NULL,
  `plugin_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plugin_database`
--

INSERT INTO `plugin_database` (`plugin_id`, `plugin_name`, `plugin_action`, `plugin_created_date`, `plugin_created_time`) VALUES
(1, 'slider', 'show', '2021-06-24', '21:51:27'),
(2, 'whatWeDo', 'show', '2021-06-24', '21:52:26'),
(3, 'products', 'show', '2021-06-24', '21:52:34'),
(4, 'counter', 'show', '2021-06-24', '21:52:43'),
(5, 'feature', 'show', '2021-06-24', '22:07:11'),
(6, 'contact', 'show', '2021-06-25', '20:03:58'),
(7, 'services', 'show', '2021-06-25', '23:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_discription` text NOT NULL,
  `product_created_date` varchar(255) NOT NULL,
  `product_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `site_setting_name` varchar(255) NOT NULL,
  `site_setting_title` varchar(255) NOT NULL,
  `site_setting_slogan` varchar(255) NOT NULL,
  `site_setting_adress` varchar(255) NOT NULL,
  `site_setting_phone` varchar(255) NOT NULL,
  `site_setting_email` varchar(255) NOT NULL,
  `site_setting_description` text NOT NULL,
  `site_setting_logo` varchar(255) NOT NULL,
  `site_setting_icon` varchar(255) NOT NULL,
  `site_setting_last_update_date` varchar(255) NOT NULL,
  `site_setting_last_update_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`site_setting_name`, `site_setting_title`, `site_setting_slogan`, `site_setting_adress`, `site_setting_phone`, `site_setting_email`, `site_setting_description`, `site_setting_logo`, `site_setting_icon`, `site_setting_last_update_date`, `site_setting_last_update_time`) VALUES
('me & my international', 'Me & My International LLC', 'Lorem ipsum is placeholder text commonly used in t...', 'Dubai', '+99 00000000', 'example@menmyinternational.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione ipsam tenetur rem commodi officia. Perspiciatis ipsum delectus, quod, consequatur expedita asperiores praesentium unde, minima nesciunt consequuntur temporibus facilis iure perferendis. Hic dignissimos eius odit molestiae, soluta dolorem totam tempore alias rerum at eligendi veritatis animi ullam magnam ut excepturi corrupti, delectus impedit cumque id expedita! Obcaecati vel veniam reprehenderit error? Asperiores maxime earum consectetur eaque qui aliquam sequi blanditiis vel voluptate incidunt consequuntur totam esse autem minima cupiditate suscipit nisi ratione sint odio, omnis nostrum! Officia nesciunt veniam est odio? Veritatis dolore excepturi asperiores ratione molestias numquam. Maiores, praesentium aspernatur molestias magnam tenetur corrupti ipsam incidunt obcaecati. Inventore fugiat consectetur ipsa sint fugit odio, reprehenderit eveniet illum mollitia cum enim! Nisi voluptatibus iure illum labore esse, vitae, earum saepe suscipit sapiente eaque voluptates quas quod tenetur omnis soluta eos a! Repellat inventore minus consectetur, perferendis iusto sequi facilis fuga est! Sequi impedit nobis consequatur rerum hic quas omnis possimus velit, accusamus neque illum provident, repudiandae est a ducimus, magni dicta iusto nesciunt. Doloribus eos, libero quam cupiditate voluptatibus aspernatur! Nam! Tempore distinctio asperiores est? Ullam facere vel voluptate nemo praesentium voluptatibus ducimus sequi, odio perspiciatis sunt, nisi voluptas reprehenderit repellat suscipit tenetur impedit unde necessitatibus? Iste ipsam eos vel optio? Sed sapiente exercitationem in, aperiam mollitia sint. Ipsum voluptate, iusto minus eos repellendus possimus officia animi corporis, adipisci sed assumenda iste suscipit earum ipsa eligendi eveniet mollitia aut eaque asperiores! Voluptatem officia et molestiae, quae incidunt iure, delectus enim molestias ipsum perspiciatis eos accusamus vero deleniti maiores quia nostrum dolores quaerat minus doloribus atque vel minima. Sit eius repellat beatae! Error quibusdam fugiat minima provident aut pariatur, nesciunt voluptate cupiditate beatae voluptatem ut dolorem sit nisi, repudiandae accusamus, quam iste sunt magnam excepturi natus enim! Eius consequuntur voluptatum quos perspiciatis!', 'bglogo.png', 'logo.png', '2021-06-30', '13:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(255) NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_discription` text NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_created_date` varchar(255) NOT NULL,
  `slider_created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_title`, `slider_discription`, `slider_link`, `slider_created_date`, `slider_created_time`) VALUES
(1, 'slider2.png', '', '', 'javascript:void(0);', '2021-06-20', '10:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo`
--

CREATE TABLE `whatwedo` (
  `whatwedo_id` int(255) NOT NULL,
  `whatwedo_icon` varchar(255) NOT NULL,
  `whatwedo_title` varchar(255) NOT NULL,
  `whatwedo_discription` text NOT NULL,
  `whatwedo_update_date` varchar(255) NOT NULL,
  `whatwedo_update_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `whatwedo`
--

INSERT INTO `whatwedo` (`whatwedo_id`, `whatwedo_icon`, `whatwedo_title`, `whatwedo_discription`, `whatwedo_update_date`, `whatwedo_update_time`) VALUES
(1, 'flaticon-020-solution', 'Business Consulting', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', '2021-06-19', '21:03:06'),
(2, 'flaticon-005-cost', 'Investment Plan', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', '2021-06-19', '21:03:44'),
(3, 'flaticon-001-advertising', 'World Marketing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', '2021-06-19', '21:04:06'),
(4, 'flaticon-003-business-plan', 'Business Plan', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit', '2021-06-19', '21:04:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `picci`
--
ALTER TABLE `picci`
  ADD PRIMARY KEY (`picci_id`);

--
-- Indexes for table `plugin_database`
--
ALTER TABLE `plugin_database`
  ADD PRIMARY KEY (`plugin_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`whatwedo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picci`
--
ALTER TABLE `picci`
  MODIFY `picci_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plugin_database`
--
ALTER TABLE `plugin_database`
  MODIFY `plugin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `whatwedo_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
