-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 09:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retrotown`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(6) NOT NULL,
  `full` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time(5) NOT NULL,
  `people` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `image` blob NOT NULL,
  `quantity` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `total` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `create_date`) VALUES
(7, 'Starter', 0x667573696f6e5f6268656c2e6a7067, '2023-08-03 17:42:49'),
(8, 'Soup', 0x62726561645f626f776c2e6a7067, '2023-08-03 19:47:22'),
(9, 'Appetizer', 0x74656d70655f6372697370792e6a7067, '2023-08-03 19:55:47'),
(10, 'Indo_delicacy', 0x6d69655f676f72656e675f73616e7472692e6a7067, '2023-08-03 20:00:17'),
(11, 'South_indian', 0x6275726a5f6b68616c6966612e6a7067, '2023-08-03 20:05:15'),
(12, 'Street_food ', 0x64656c68695f63686161742e6a7067, '2023-08-03 20:10:28'),
(13, 'Main_course', 0x70616e6565725f68616e64692e6a7067, '2023-08-03 20:14:54'),
(14, 'Rice_noodle', 0x7665675f62697279616e692e6a7067, '2023-08-03 20:19:18'),
(15, 'Tandoor_roti', 0x6275747465725f6761726c69635f6e61616e2e6a7067, '2023-08-03 20:23:12'),
(16, 'Dessert', 0x72617367756c6c612e6a7067, '2023-08-03 20:28:08'),
(17, 'Beverage', 0x6665727265726f5f726f636865722e6a7067, '2023-08-03 20:31:16'),
(18, 'Can_bottle', 0x626565725f7261646c65725f6c656d6f6e2e6a7067, '2023-08-03 20:35:14'),
(19, 'Cafe_licious', 0x63616666655f6c617474652e6a7067, '2023-08-03 20:39:26'),
(20, 'Tea_bar', 0x67656e6d61695f6368612e6a7067, '2023-08-03 20:42:52'),
(22, 'Fresh_juice', 0x62657272795f7570626565742e6a7067, '2023-08-13 06:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(6) NOT NULL,
  `name` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(6) NOT NULL,
  `first` char(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` char(255) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `first`, `phone`, `email`, `date`, `message`, `rate`) VALUES
(1, 'Riya', 2147483647, 'riya@gmail.com', '0000-00-00 00:00:00', 'One of the best places I’ve eaten on Cape Cod. Great cocktails, awesome.', 2),
(2, 'Mahir', 2147483647, 'mahir@gmail.com', '0000-00-00 00:00:00', 'Best breakfast on the east coast! Try the hash!', 5),
(6, 'Abhishek', 2147483647, 'abhishek@gmail.com', '0000-00-00 00:00:00', 'Best Pizza EVER! Not just on the lower Cape…. anywhere!', 3),
(7, 'Misha', 2147483647, 'misha@gmail.com', '0000-00-00 00:00:00', 'Pancakes were good. Will try the hash next time. Biscuits were great also.', 4),
(8, 'Khushi', 2147483647, 'khushi@gmail.com', '0000-00-00 00:00:00', 'Wonderful services + Delicious food + Beautiful place to visit', 4),
(9, 'Manasvi', 2147483647, 'manasvi@gmail.com', '0000-00-00 00:00:00', 'Wonderful !!!!!!!!!', 4),
(22, 'Rensi', 2147483647, 'rensi@gmail.com', '2023-09-20 15:00:38', 'excellent\r\n', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `g_name` varchar(500) NOT NULL,
  `g_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `g_name`, `g_img`) VALUES
(1, '1', 0x616e6e612d6272617469796368756b2d4a555879627664636b654d2d756e73706c6173682e6a7067),
(2, '2', 0x626631312e6a7067),
(3, '3', 0x626631332e6a7067),
(12, '4', 0x626631342e6a7067),
(13, '5', 0x626631302e6a7067),
(14, '6', 0x626631322e6a7067),
(15, '7', 0x63616b652e6a7067),
(16, '8', 0x63616b655f312e6a7067),
(17, '9', 0x62726561642e6a7067),
(18, '10', 0x6266312e6a7067),
(19, '11', 0x6266322e6a7067),
(20, '12', 0x6266332e6a7067),
(22, '13', 0x63686f635f6472696e6b2e6a7067),
(23, '14', 0x6266352e6a7067),
(25, '15', 0x6732322e6a7067),
(26, '16', 0x6732332e6a7067),
(27, '17', 0x6732342e6a7067),
(28, '18', 0x6732362e6a7067),
(29, 'a', 0x67392e6a7067),
(30, 'a1', 0x6732302e6a7067),
(31, 'a2', 0x6732352e6a7067),
(33, 'a3', 0x6266362e6a7067),
(34, 'a4', 0x6266372e6a7067),
(36, 'a5', 0x6266342e6a7067),
(39, 'a6', 0x6732312e6a7067),
(40, 'a7', 0x6733312e6a7067),
(41, 'a8', 0x6733342e6a7067),
(42, 'b1', 0x64322e6a7067),
(46, 'b2', 0x64372e6a7067),
(48, 'b3', 0x6433322e6a7067),
(50, 'b4', 0x64332e6a7067),
(51, 'b5', 0x64342e6a7067),
(52, 'b6', 0x64392e6a7067),
(53, 'b7', 0x64362e6a7067),
(54, 'b8', 0x64312e6a7067),
(55, 'b9', 0x64382e6a7067),
(56, 'c1', 0x6275726765722e6a7067),
(57, 'c2', 0x6368656573655f70697a2e6a7067),
(58, 'c3', 0x6431332e6a7067),
(59, 'c4', 0x6431322e6a7067),
(60, 'c5', 0x6431342e6a7067),
(61, 'c6', 0x6431352e6a7067),
(62, 'c7', 0x6432362e6a7067),
(63, 'c8', 0x6432382e6a7067),
(64, 'c9', 0x6434302e6a7067),
(65, 'd1', 0x64362e6a7067),
(66, 'd2', 0x6431312e6a7067),
(67, 'd3', 0x6431382e6a7067),
(68, 'd4', 0x6432312e6a7067),
(70, 'd5', 0x6432342e6a7067),
(71, 'd6', 0x6432322e6a7067),
(72, 'd7', 0x6432382e6a7067),
(73, 'd8', 0x6433332e6a7067),
(74, 'd9', 0x6432392e6a7067),
(75, 'e1', 0x6434312e6a7067),
(76, 'e2', 0x6433372e6a7067),
(77, 'e3', 0x6434342e6a7067),
(78, 'e4', 0x6432352e6a7067),
(79, 'e5', 0x64617269612d766f6c6b6f76612d5374754b6d6449766277452d756e73706c6173682e6a7067),
(82, 'e6', 0x6434332e6a7067),
(83, 'e7', 0x6434372e6a7067),
(84, 'e8', 0x6434362e6a7067),
(87, 'e9', 0x6c31202832292e6a7067),
(88, 'f1', 0x67352e6a7067),
(89, 'f2', 0x6731302e6a7067),
(90, 'f3', 0x6732392e6a7067),
(92, 'f4', 0x6732372e6a7067),
(93, 'f5', 0x67362e6a7067),
(94, 'f6', 0x6733352e6a7067),
(95, 'f7', 0x67332e6a7067),
(96, 'f8', 0x67616c6c6572795f312e6a7067),
(97, 'f9', 0x67342e6a7067),
(101, 'g1', 0x6731332e6a7067),
(102, 'g2', 0x6c31352e6a7067),
(105, 'g3', 0x70697a7a615f312e6a7067),
(106, 'g4', 0x6d6f6e74616e6f2e6a7067),
(109, 'g5', 0x73776565742e6a7067),
(110, 'g6', 0x706173746572792e6a7067),
(111, 'g7', 0x6c32352e6a7067),
(112, 'g8', 0x6c32312e6a7067),
(114, 'g9', 0x737461727465722e6a7067),
(115, 'h1', 0x6c33302e6a7067),
(116, 'h2', 0x6c32392e6a7067),
(117, 'h3', 0x6c79636865655f63727573685f6d6f636b7461696c2e6a7067),
(118, 'h4', 0x74696b6b692e6a7067),
(119, 'h5', 0x746f702d766965772d6d65616c732d74617374792d79756d6d792d646966666572656e742d70617374726965732d6469736865732d62726f776e2d737572666163652e6a7067),
(120, 'h6', 0x7365765f707572692e6a7067),
(122, 'h7', 0x6c32302e6a7067),
(123, 'h8', 0x6c31392e6a7067),
(124, 'h9', 0x7461726b6172695f6b65736172695f62697279616e692e6a7067),
(125, 'j1', 0x69646c695f766164612e6a7067),
(127, 'j2', 0x646168695f766164612e6a7067),
(128, 'j3', 0x6d6564755f766164612e6a7067),
(131, 'j5', 0x6c332e6a7067),
(132, 'j6', 0x73616c61642e6a7067),
(134, 'j7', 0x6d696c6b7368616b652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `product_id` int(6) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_price` int(30) NOT NULL,
  `product_image` blob NOT NULL,
  `product_cat_nm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`product_id`, `product_name`, `product_price`, `product_image`, `product_cat_nm`) VALUES
(42, 'Roasted Papad', 20, 0x726f61737465645f70617061642e6a7067, 'Starter'),
(43, 'Masala Papad', 50, 0x6d6173616c615f70617061642e6a7067, 'Starter'),
(44, 'Green Salad', 120, 0x677265656e5f73616c61642e6a7067, 'Starter'),
(45, 'Fusion Bhel', 150, 0x667573696f6e5f6268656c2e6a7067, 'Starter'),
(46, 'Veg. Manchurian', 170, 0x7665675f6d616e6368757269616e2e6a7067, 'Starter'),
(47, 'Gobi Manchurian', 190, 0x676f62695f6d616e6368757269616e2e6a7067, 'Starter'),
(48, 'Paneer Manchurian', 200, 0x70616e6565725f6d616e6368757269616e2e6a7067, 'Starter'),
(49, 'Veg. Manchow', 150, 0x7665675f6d616e63686f772e6a7067, 'Soup'),
(50, 'Hot & Sour Soup', 150, 0x686f745f736f75725f736f75702e6a7067, 'Soup'),
(51, 'Cream of Tomato Soup', 190, 0x637265616d5f746f6d61746f5f736f75702e6a7067, 'Soup'),
(52, 'Sweet Corn Soup', 150, 0x73776565745f636f726e2e6a7067, 'Soup'),
(53, 'Soup In Bread Bowl', 450, 0x62726561645f626f776c2e6a7067, 'Soup'),
(54, 'Lemon & Broccoli Soup', 300, 0x6c656d6f6e5f62726f63636f6c692e6a7067, 'Soup'),
(55, 'Mexican Chilli Bean Soup', 350, 0x6d65786963616e5f6368696c6c695f6265616e2e6a7067, 'Soup'),
(56, 'Thai Coconut Soup', 390, 0x746861695f636f636f6e75742e6a7067, 'Soup'),
(57, 'French Fries', 90, 0x6672656e63685f66726965732e6a7067, 'Appetizer'),
(58, 'Cajun Onion Rings', 150, 0x63616a756e5f6f6e696f6e5f72696e67732e6a7067, 'Appetizer'),
(59, 'Banana Fritter', 190, 0x62616e616e615f667269747465722e6a7067, 'Appetizer'),
(60, 'Nachos Pronto', 220, 0x6e6163686f735f70726f6e746f2e6a7067, 'Appetizer'),
(61, 'Nasi Putih', 150, 0x6e6173695f70757469682e6a7067, 'Indo_delicacy'),
(62, 'Nasi Goreng Santri', 450, 0x6e6173695f676f72656e675f73616e7472692e6a7067, 'Indo_delicacy'),
(63, 'Nasi Siram Lada Hitam (Santri)', 350, 0x6e6173695f736972616d5f6c6164615f686974616d2e6a7067, 'Indo_delicacy'),
(64, 'Mie Goreng Santri', 550, 0x6d69655f676f72656e675f73616e7472692e6a7067, 'Indo_delicacy'),
(65, 'Steamed Idli', 50, 0x737465616d65645f69646c692e6a7067, 'South_indian'),
(66, 'Medu Vada', 50, 0x6d6564755f766164612e6a7067, 'South_indian'),
(67, '2 Idlis & 1 Vada', 140, 0x69646c695f766164612e6a7067, 'South_indian'),
(68, 'Dahi Vada', 150, 0x646168695f766164612e6a7067, 'South_indian'),
(69, 'Potato Vada', 60, 0x706f7461746f5f766164612e6a7067, 'Street_food '),
(70, 'Veg. Pakoda', 70, 0x7665675f70616b6f64612e6a7067, 'Street_food '),
(71, 'Paneer Pakoda', 140, 0x70616e6565725f70616b6f64612e6a7067, 'Street_food '),
(72, 'Onion Bhajia', 90, 0x6f6e696f6e5f6268616a69612e6a7067, 'Street_food '),
(73, 'Dal Fry', 150, 0x64616c5f6672792e6a7067, 'Main_course'),
(74, 'Dal Thadka', 150, 0x64616c5f746861646b612e6a7067, 'Main_course'),
(75, 'Dal Palak', 160, 0x64616c5f70616c616b2e6a7067, 'Main_course'),
(76, 'Chilly Milly', 170, 0x6368696c6c795f6d696c6c792e6a7067, 'Main_course'),
(77, 'Plain Rice', 50, 0x706c61696e5f726963652e6a7067, 'Rice_noodle'),
(78, 'Green Peas Pulao', 120, 0x677265656e5f706561735f70756c616f2e6a7067, 'Rice_noodle'),
(79, 'Curd Rice', 90, 0x637572645f726963652e6a7067, 'Rice_noodle'),
(80, 'Jeera Rice', 50, 0x6a656572615f726963652e6a7067, 'Rice_noodle'),
(81, 'Dal Khichdi', 150, 0x64616c5f6b6869636864692e6a7067, 'Rice_noodle'),
(82, 'Tandoor Roti', 50, 0x74616e646f6f725f726f74692e6a7067, 'Tandoor_roti'),
(83, 'Butter Roti', 60, 0x6275747465725f726f74692e6a7067, 'Tandoor_roti'),
(84, 'Naan', 80, 0x6e61616e2e6a7067, 'Tandoor_roti'),
(85, 'Butter Naan', 90, 0x6275747465725f6e61616e2e6a7067, 'Tandoor_roti'),
(86, 'Gulab Jamun', 100, 0x67756c61625f6a616d756e2e6a7067, 'Dessert'),
(87, 'Rasmalai', 150, 0x7261736d616c61692e6a7067, 'Dessert'),
(88, 'Angoori Rabdi', 250, 0x616e676f6f72695f72616264692e6a7067, 'Dessert'),
(89, 'Rasgulla', 200, 0x72617367756c6c612e6a7067, 'Dessert'),
(90, 'Singapore Sling', 80, 0x73696e6761706f72655f736c696e672e6a7067, 'Beverage'),
(91, 'Fresh Lime Soda', 50, 0x6c696d655f736f64612e6a7067, 'Beverage'),
(92, 'Butter Milk', 60, 0x6275747465725f6d696c6b2e6a7067, 'Beverage'),
(93, 'Lassi(Mango)', 100, 0x6c617373692e6a7067, 'Beverage'),
(94, 'Soda (Bottle)', 20, 0x736f64615f626f74746c652e6a7067, 'Can_bottle'),
(95, 'Soda (Can)', 50, 0x736f64615f63616e2e6a7067, 'Can_bottle'),
(96, 'Sprite', 20, 0x7370726974652e6a7067, 'Can_bottle'),
(97, 'Coca Cola', 20, 0x636f63615f636f6c612e6a7067, 'Can_bottle'),
(98, 'Mineral Water (600ml.)', 20, 0x6d696e6572616c5f77617465722e6a7067, 'Can_bottle'),
(99, 'Indian Filter Coffee', 50, 0x696e6469616e5f66696c7465725f636f666665652e6a7067, 'Cafe_licious'),
(100, 'Macchiato', 80, 0x6d616363686961746f2e6a7067, 'Cafe_licious'),
(101, 'Cappuccino', 120, 0x63617070756363696e6f2e6a7067, 'Cafe_licious'),
(102, 'Caffe Latte', 150, 0x63616666655f6c617474652e6a7067, 'Cafe_licious'),
(103, 'Black Tea', 50, 0x626c61636b5f7465612e6a7067, 'Tea_bar'),
(104, 'Sweet Ice Tea', 80, 0x73776565745f6963655f7465612e6a7067, 'Tea_bar'),
(105, 'Sweet Ice Lemon Tea', 120, 0x73776565745f6963655f6c656d6f6e5f7465612e6a7067, 'Tea_bar'),
(106, 'Indian Tea', 40, 0x696e6469616e5f7465612e6a7067, 'Tea_bar'),
(107, 'Indian Masala Tea', 60, 0x696e6469616e5f6d6173616c615f7465612e6a7067, 'Tea_bar'),
(108, 'Orange Juice', 40, 0x6f72616e67655f6a756963652e6a7067, 'Fresh_juice'),
(109, 'Pineapple Juice', 40, 0x70696e656170706c655f6a756963652e6a7067, 'Fresh_juice'),
(110, 'Watermelon', 40, 0x77617465726d656c6f6e5f6a756963652e6a7067, 'Fresh_juice'),
(111, 'Honeydew Juice (Melon)', 50, 0x686f6e65796465775f6a756963652e6a7067, 'Fresh_juice'),
(112, 'Tropical Juice (Mixed)', 60, 0x74726f706963616c2e6a7067, 'Fresh_juice'),
(113, 'Veg. Schezwan Balls', 200, 0x7665675f736368657a77616e5f62616c6c732e6a7067, 'Starter'),
(114, 'Paneer Schezwan', 220, 0x70616e6565725f736368657a77616e2e6a7067, 'Starter'),
(115, 'Veg. 65', 250, 0x7665675f36352e6a7067, 'Starter'),
(116, 'Mushroom 65', 300, 0x6d757368726f6f6d5f36352e6a7067, 'Starter'),
(117, 'Paneer 65', 400, 0x70616e6565725f36352e6a7067, 'Starter'),
(118, 'Paneer Chilly', 350, 0x70616e6565725f6368696c6c792e6a7067, 'Starter'),
(119, 'Mushroom Chilly', 350, 0x6d757368726f6f6d5f6368696c6c792e6a7067, 'Starter'),
(120, 'Paneer Tikka', 300, 0x70616e6565725f74696b6b612e6a7067, 'Starter'),
(121, 'Paneer Hot Garlic', 350, 0x70616e6565725f686f745f6761726c69632e6a7067, 'Starter'),
(122, 'Tahu Cocol', 300, 0x746168755f636f636f6c2e6a7067, 'Appetizer'),
(123, 'Mac N Cheese', 350, 0x6d61635f6e5f6368656573652e6a7067, 'Appetizer'),
(124, 'Tahu Lada Garam', 400, 0x746168755f6c6164615f676172616d2e6a7067, 'Appetizer'),
(125, 'Tempe Crispy', 350, 0x74656d70655f6372697370792e6a7067, 'Appetizer'),
(126, 'Cheese Fondue', 450, 0x6368656573655f666f6e6475652e6a7067, 'Appetizer'),
(127, 'Korean Spring Rolls', 390, 0x6b6f7265616e5f737072696e675f726f6c6c2e6a7067, 'Appetizer'),
(128, 'Dragon Potato', 250, 0x647261676f6e5f706f7461746f2e6a7067, 'Appetizer'),
(129, 'Pesto Risotto', 410, 0x706573746f5f7269736f74746f2e6a7067, 'Appetizer'),
(130, 'Cap Cay Santri', 250, 0x6361705f6361795f73616e7472692e6a7067, 'Indo_delicacy'),
(131, 'Sambal Tomat', 100, 0x73616d62616c5f746f6d61742e6a7067, 'Indo_delicacy'),
(132, 'Sambal Hijau', 150, 0x73616d62616c5f68696a61752e6a7067, 'Indo_delicacy'),
(133, 'Sambal Kemangi', 200, 0x73616d62616c5f6b656d616e67692e6a7067, 'Indo_delicacy'),
(134, 'Veg. Pasta', 410, 0x7665675f70617374612e6a7067, 'Indo_delicacy'),
(135, 'Gado Gado', 350, 0x6761646f5f6761646f2e6a7067, 'Indo_delicacy'),
(136, 'Sayur Asem', 250, 0x73617975725f6173656d2e6a7067, 'Indo_delicacy'),
(137, 'Fruit Rojak', 400, 0x66727569745f726f6a616b2e6a7067, 'Indo_delicacy'),
(138, 'Plain Uttapam ', 190, 0x706c61696e5f7574746170616d2e6a7067, 'South_indian'),
(139, 'Onion Uttapam', 220, 0x6f6e696f6e5f7574746170616d2e6a7067, 'South_indian'),
(140, 'Tomato Onion Uttapam', 250, 0x746f6d61746f5f6f6e696f6e5f7574746170616d2e6a7067, 'South_indian'),
(141, 'Masala Uttapam ', 150, 0x6d6173616c615f7574746170616d2e6a7067, 'South_indian'),
(142, 'Cheese Uttapam', 250, 0x6368656573655f7574746170616d2e6a7067, 'South_indian'),
(143, 'Pizza Dosa', 100, 0x70697a7a615f646f73612e6a7067, 'South_indian'),
(144, 'Plain Dosa', 100, 0x706c61696e5f646f73612e6a7067, 'South_indian'),
(145, 'Masala Dosa', 140, 0x6d6173616c615f646f73612e6a7067, 'South_indian'),
(146, 'Ghee Plain Dosa', 140, 0x676865655f706c61696e5f646f73612e6a7067, 'South_indian'),
(147, 'Rava Plain Dosa', 120, 0x726176615f706c61696e5f646f73612e6a7067, 'South_indian'),
(148, 'Rava Masala Dosa', 150, 0x726176615f6d6173616c615f646f73612e6a7067, 'South_indian'),
(149, 'Onion Rava Plain Dosa', 170, 0x6f6e696f6e5f726176615f706c61696e5f646f73612e6a7067, 'South_indian'),
(150, 'Onion Rava Masala Dosa', 180, 0x6f6e696f6e5f726176615f6d6173616c615f646f73612e6a7067, 'South_indian'),
(151, 'Mysore Plain Dosa', 110, 0x6d79736f72655f706c61696e5f646f73612e6a7067, 'South_indian'),
(152, 'Mysore Masala Dosa', 140, 0x6d79736f72655f6d6173616c615f646f73612e6a7067, 'South_indian'),
(153, 'Paper Plain Dosa', 70, 0x70617065725f706c61696e5f646f73612e6a7067, 'South_indian'),
(154, 'Paper Masala Dosa', 120, 0x70617065725f6d6173616c615f646f73612e6a7067, 'South_indian'),
(155, 'Garlic Butter Paper', 130, 0x6761726c69635f6275747465722e6a7067, 'South_indian'),
(156, 'Dosa Fry', 180, 0x646f73615f6672792e6a7067, 'South_indian'),
(157, 'Burj Khalifa', 350, 0x6275726a5f6b68616c6966612e6a7067, 'South_indian'),
(158, 'Mysore Bonda', 100, 0x6d79736f72655f626f6e64612e6a7067, 'Street_food '),
(159, 'Puri Bhaji', 70, 0x707572695f6268616a692e6a7067, 'Street_food '),
(160, 'Chole Bhature', 120, 0x63686f6c655f626861747572652e6a7067, 'Street_food '),
(161, 'Kacchhi Dabeli ', 40, 0x646162656c692e6a7067, 'Street_food '),
(162, 'Aloo Tikki', 50, 0x616c6f6f5f74696b6b692e6a7067, 'Street_food '),
(163, 'Delhi Chaat ', 60, 0x64656c68695f63686161742e6a7067, 'Street_food '),
(164, 'Pani Puri', 30, 0x70616e695f707572692e6a7067, 'Street_food '),
(165, 'Ragda Chaat', 70, 0x72616764615f63686161742e6a7067, 'Street_food '),
(167, 'Mix Veg', 200, 0x6d69785f7665672e6a7067, 'Main_course'),
(168, 'Veg. Maratha', 250, 0x7665675f6d6172617468612e6a7067, 'Main_course'),
(169, 'Veg. Handi', 260, 0x7665675f68616e64692e6a7067, 'Main_course'),
(170, 'Veg. Kadai', 280, 0x7665675f6b616461692e6a7067, 'Main_course'),
(171, 'Veg. Kolhapuri', 300, 0x7665675f6b6f6c6861707572692e6a7067, 'Main_course'),
(172, 'Veg. Shabnami', 350, 0x7665675f736861626e616d692e6a7067, 'Main_course'),
(173, 'Veg. Jaipuri', 330, 0x7665675f6a6169707572692e6a7067, 'Main_course'),
(174, 'Veg. Mughlai', 380, 0x7665675f6d7567686c61692e6a7067, 'Main_course'),
(175, 'Aloo Mutter Masala', 250, 0x616c6f6f5f6d75747465725f6d6173616c612e6a7067, 'Main_course'),
(176, 'Aloo Gobi', 250, 0x616c6f6f5f676f62692e6a7067, 'Main_course'),
(177, 'Channa Masala', 280, 0x6368616e6e615f6d6173616c612e6a7067, 'Main_course'),
(178, 'Palak Paneer ', 310, 0x70616c616b5f70616e6565722e6a7067, 'Main_course'),
(179, 'Paneer Makhanvala', 390, 0x70616e6565725f6d616b68616e76616c612e6a7067, 'Main_course'),
(180, 'Paneer Butter Masala', 350, 0x70616e6565725f6275747465725f6d6173616c612e6a7067, 'Main_course'),
(181, 'Paneer Kadai', 320, 0x70616e6565725f6b616461692e6a7067, 'Main_course'),
(182, 'Paneer Handi', 380, 0x70616e6565725f68616e64692e6a7067, 'Main_course'),
(183, 'Paneer Mutter', 360, 0x70616e6565725f6d75747465722e6a7067, 'Main_course'),
(184, 'Paneer Bhurji', 320, 0x70616e6565725f626875726a692e6a7067, 'Main_course'),
(185, 'Paneer Tikka Masala', 360, 0x70616e6565725f74696b6b615f6d6173616c612e6a7067, 'Main_course'),
(186, 'Paneer Tawa Masala', 380, 0x70616e6565725f746177615f6d6173616c612e6a7067, 'Main_course'),
(187, 'Nizami Handi', 410, 0x6e697a616d695f68616e64692e6a7067, 'Main_course'),
(188, 'Cheese Kofta Masaledar', 450, 0x6368656573655f6b6f6674615f6d6173616c656461722e6a7067, 'Main_course'),
(189, 'Paneer Patiyala', 380, 0x70616e6565725f7061746979616c612e6a7067, 'Main_course'),
(190, 'Lassoni Palak', 450, 0x6c6173736f6e695f70616c616b2e6a7067, 'Main_course'),
(191, 'Veg. Pulao ', 180, 0x7665675f70756c616f2e6a7067, 'Rice_noodle'),
(192, 'Paneer Pulao', 200, 0x70616e6565725f70756c616f2e6a7067, 'Rice_noodle'),
(193, 'Veg. Biryani', 250, 0x7665675f62697279616e692e6a7067, 'Rice_noodle'),
(194, 'Paneer Biryani', 290, 0x70616e6565725f62697279616e692e6a7067, 'Rice_noodle'),
(195, 'Veg. Schezwan Noodles', 320, 0x7665675f736368657a77616e5f6e6f6f646c65732e6a7067, 'Rice_noodle'),
(196, 'Veg. Hakka Noodles', 350, 0x7665675f68616b6b615f6e6f6f646c65732e6a7067, 'Rice_noodle'),
(197, 'Singapore Noodles', 400, 0x73696e6761706f72655f6e6f6f646c65732e6a7067, 'Rice_noodle'),
(198, 'Veg. Fried Rice', 280, 0x7665675f66726965645f726963652e6a7067, 'Rice_noodle'),
(199, 'Schezwan Fried Rice', 310, 0x736368657a77616e5f66726965645f726963652e6a7067, 'Rice_noodle'),
(200, 'Hyderabadi Biryani', 430, 0x687964657261626164695f62697279616e692e6a7067, 'Rice_noodle'),
(201, 'Tarkari Kesari Biryani', 450, 0x7461726b6172695f6b65736172695f62697279616e692e6a7067, 'Rice_noodle'),
(202, 'Garlic Naan', 120, 0x6761726c69635f6e61616e2e6a7067, 'Tandoor_roti'),
(203, 'Butter Garlic Naan', 130, 0x6275747465725f6761726c69635f6e61616e2e6a7067, 'Tandoor_roti'),
(204, 'Cheese Naan', 150, 0x6368656573655f6e61616e2e6a7067, 'Tandoor_roti'),
(205, 'Chapati ', 60, 0x636861706174692e6a7067, 'Tandoor_roti'),
(206, 'Butter Chapati', 70, 0x6275747465725f636861706174692e6a7067, 'Tandoor_roti'),
(207, 'Kulcha', 90, 0x6b756c6368612e6a7067, 'Tandoor_roti'),
(208, 'Butter Kulcha', 110, 0x6275747465725f6b756c6368612e6a7067, 'Tandoor_roti'),
(209, 'Paneer Kulcha', 150, 0x70616e6565725f6b756c6368612e6a7067, 'Tandoor_roti'),
(210, 'Paratha', 40, 0x706172617468612e6a7067, 'Tandoor_roti'),
(211, 'Laccha Paratha', 80, 0x6c61636368615f706172617468612e6a7067, 'Tandoor_roti'),
(212, 'Butter Paratha', 80, 0x6275747465725f706172617468612e6a7067, 'Tandoor_roti'),
(213, 'Aloo Paratha', 70, 0x616c6f6f5f706172617468612e6a7067, 'Tandoor_roti'),
(214, 'The Dark of the Moon', 250, 0x6461726b5f6f665f6d6f6f6e2e6a7067, 'Dessert'),
(215, 'Tiramisu', 250, 0x746972616d6973752e6a7067, 'Dessert'),
(216, 'Cheese Cake', 300, 0x6368656573655f63616b652e6a7067, 'Dessert'),
(217, 'Twin Cannoli', 330, 0x7477696e5f63616e6e6f6c692e6a7067, 'Dessert'),
(218, 'Gadbad', 380, 0x6761646261642e6a7067, 'Dessert'),
(219, 'The Terrific Triple Sundae', 310, 0x74657272696669635f747269706c655f73756e6461652e6a7067, 'Dessert'),
(220, 'Thai Rolled Ice-Cream', 260, 0x746861695f726f6c6c65642e6a7067, 'Dessert'),
(221, 'Choco Carnival Ice-Cream', 420, 0x63686f636f5f6361726e6976616c2e6a7067, 'Dessert'),
(222, 'Belgian Waffle', 220, 0x62656c6769616e5f776166666c652e6a7067, 'Dessert'),
(223, 'Waffle Monster', 450, 0x776166666c655f6d6f6e737465722e6a7067, 'Dessert'),
(224, 'American Blue-Berry Waffle', 380, 0x616d65726963616e5f626c756562657272792e6a7067, 'Dessert'),
(225, 'Liege Waffles', 450, 0x6c696567655f776166666c652e6a7067, 'Dessert'),
(226, 'Chocolate Milkshake', 250, 0x6d696c6b7368616b652e6a7067, 'Beverage'),
(227, 'Nutella Brownie Crumble', 300, 0x6e7574656c6c615f62726f776e69655f6372756d626c652e6a7067, 'Beverage'),
(228, 'Oreo Coffee', 200, 0x6f72656f5f636f666665652e6a7067, 'Beverage'),
(229, 'Ferrero Rocher', 280, 0x6665727265726f5f726f636865722e6a7067, 'Beverage'),
(230, 'Mango & Passion Fruit Fusion', 260, 0x6d616e676f5f70617373696f6e5f667573696f6e2e6a7067, 'Beverage'),
(231, 'Passion Tropic', 190, 0x70617373696f6e5f74726f7069632e6a7067, 'Beverage'),
(232, 'Mai Tai', 150, 0x6d61695f7461692e6a7067, 'Beverage'),
(233, 'Margarita', 220, 0x6d61726761726974612e6a7067, 'Beverage'),
(234, 'Sex on the Beach(Non-Alcoholic', 250, 0x7365785f6f6e5f62656163682e6a7067, 'Beverage'),
(235, 'Cuba Libre', 150, 0x637562615f6c696272652e6a7067, 'Beverage'),
(236, 'White Lady', 140, 0x77686974655f6c6164792e6a7067, 'Beverage'),
(237, 'Cosmopolitan', 180, 0x636f736d6f706f6c6974616e2e6a7067, 'Beverage'),
(238, 'Beer Bintang', 200, 0x626565725f62696e74616e672e6a7067, 'Can_bottle'),
(239, 'Beer Radler Lemon', 250, 0x626565725f7261646c65725f6c656d6f6e2e6a7067, 'Can_bottle'),
(240, 'SingaRaja', 250, 0x73696e676172616a612e6a7067, 'Can_bottle'),
(241, 'Children Cordial', 310, 0x6368696c6472656e5f636f726469616c2e6a7067, 'Can_bottle'),
(242, 'Dandelion & BurDock', 350, 0x64616e64656c696f6e5f627572646f636b2e6a7067, 'Can_bottle'),
(243, 'Wild English ElderFlower ', 450, 0x77696c645f656e676c6973685f656c646572666c6f7765722e6a7067, 'Can_bottle'),
(244, 'Diet Coke', 70, 0x646965745f636f6b652e6a7067, 'Can_bottle'),
(245, 'Caffe Mocha', 180, 0x63616666655f6d6f6368612e6a7067, 'Cafe_licious'),
(246, 'Espresso Coffee(Single)', 150, 0x657370726573736f5f73696e676c652e6a7067, 'Cafe_licious'),
(247, 'Espresso Coffee(Double)', 200, 0x657370726573736f5f646f75626c652e6a7067, 'Cafe_licious'),
(248, 'Americano Black Coffee', 150, 0x616d65726963616e6f5f626c61636b5f636f666665652e6a7067, 'Cafe_licious'),
(249, 'Brewed Coffee', 180, 0x6272657765645f636f666665652e6a7067, 'Cafe_licious'),
(250, 'Caramel Hazelnut', 250, 0x636172616d656c5f68617a656c6e75742e6a7067, 'Cafe_licious'),
(251, 'Flat White', 190, 0x666c61745f77686974652e6a7067, 'Cafe_licious'),
(252, 'Cold Brew Black', 300, 0x636f6c645f627265775f626c61636b2e6a7067, 'Cafe_licious'),
(253, 'Genmai Cha', 80, 0x67656e6d61695f6368612e6a7067, 'Tea_bar'),
(254, 'Ras Chai', 120, 0x7261735f636861692e6a7067, 'Tea_bar'),
(255, 'Ginger Lemon Tea', 140, 0x67696e6765725f6c656d6f6e5f7465612e6a7067, 'Tea_bar'),
(256, 'Spicy Chai', 150, 0x73706963795f636861692e6a7067, 'Tea_bar'),
(257, 'Chamomile Flowers', 130, 0x6368616d6f6d696c655f666c6f7765722e6a7067, 'Tea_bar'),
(258, 'Red Zen', 90, 0x7265645f7a656e2e6a7067, 'Tea_bar'),
(259, 'Sevan Blend', 150, 0x736576616e5f626c656e642e6a7067, 'Tea_bar'),
(260, 'Ginger N Green', 50, 0x677265656e5f6e5f67696e6765722e6a7067, 'Fresh_juice'),
(261, 'Strawberry Whirl', 80, 0x737472617762657272795f776869726c2e6a7067, 'Fresh_juice'),
(262, 'Peach Perfection', 100, 0x70656163685f70657266656374696f6e2e6a7067, 'Fresh_juice'),
(263, 'Berry Upbeet', 120, 0x62657272795f7570626565742e6a7067, 'Fresh_juice'),
(264, 'Papaya Sunrise', 80, 0x7061706179615f73756e726973652e6a7067, 'Fresh_juice'),
(265, 'Groovy Guava', 80, 0x67726f6f76795f67756176612e6a7067, 'Fresh_juice'),
(266, 'Orange Carrot Karma', 120, 0x6f72616e67655f636172726f745f6b61726d612e6a7067, 'Fresh_juice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(255) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `upi_id` int(100) NOT NULL,
  `card_nm` varchar(100) NOT NULL,
  `card_no` bigint(100) NOT NULL,
  `cvv` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `product_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
