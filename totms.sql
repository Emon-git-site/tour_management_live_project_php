-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 01:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `totms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updatedate`) VALUES
(1, 'admin', 'admin', '2023-10-19 03:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `packageid` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `fromdate` varchar(255) NOT NULL,
  `enddate` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `cancellby` varchar(255) NOT NULL,
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `packageid`, `useremail`, `fromdate`, `enddate`, `regdate`, `status`, `cancellby`, `updatedate`) VALUES
(4, '2', 'bdmotaleb33@gmail.com', '2023-11-03', '2023-11-08', '2023-10-27 06:35:43', 'cancel', 'user', '2023-10-28 05:04:16'),
(5, '2', 'bdmotaleb33@gmail.com', '2023-11-15', '2023-11-20', '2023-10-27 06:51:38', 'cancel', 'admin', '2023-10-27 13:33:30'),
(6, '2', 'bdmotaleb33@gmail.com', '2023-10-30', '2023-11-04', '2023-10-27 08:36:07', 'cancel', 'user', '2023-10-28 05:00:32'),
(18, '1', 'bdmotaleb33@gmail.com', '2023-10-28', '2023-10-30', '2023-10-27 08:36:29', 'pending', '', '2023-10-27 13:37:10'),
(19, '2', 'alauddin@gmail.com', '2023-10-31', '2023-11-05', '2023-10-27 08:36:35', 'confirm', '', '2023-10-27 13:34:58'),
(20, '2', 'alauddin@gmail.com', '2023-10-31', '2023-11-05', '2023-10-27 08:36:45', 'cancel', 'admin', '2023-10-27 13:33:57'),
(27, '7', 'alauddin@gmail.com', '2023-10-31', '2023-11-09', '2023-10-27 09:12:27', 'pending', '', '2023-10-27 13:34:23'),
(28, '7', 'alauddin@gmail.com', '2023-10-27', '2023-11-05', '2023-10-27 09:12:31', 'confirm', '', '2023-10-27 16:46:58'),
(29, '7', 'alauddin@gmail.com', '2023-10-31', '2023-11-09', '2023-10-27 09:12:55', 'confirm', '', '2023-10-27 13:35:16'),
(30, '7', 'alauddin@gmail.com', '2024-01-11', '2024-01-20', '2023-10-27 09:13:11', 'cancel', 'user', '2023-10-27 13:35:06'),
(35, '2', 'alauddin@gmail.com', '2023-10-30', '2023-11-04', '2023-10-27 04:22:57', 'confirm', '', '2023-10-27 09:48:48'),
(42, '9', 'alauddin@gmail.com', '2023-10-27', '2023-11-03', '2023-10-27 16:50:54', 'pending', '', '2023-10-27 16:50:54'),
(43, '7', 'alauddin@gmail.com', '2023-10-31', '2023-11-09', '2023-10-28 04:37:11', 'pending', '', '2023-10-28 04:37:11'),
(44, '7', 'alauddin@gmail.com', '2023-10-31', '2023-11-09', '2023-10-28 04:41:15', 'pending', '', '2023-10-28 04:41:15'),
(45, '7', 'alauddin@gmail.com', '2023-10-31', '2023-11-09', '2023-10-28 04:41:25', 'pending', '', '2023-10-28 04:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `postindate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `fullname`, `email`, `mobile`, `subject`, `description`, `postindate`, `status`) VALUES
(1, 'Md Emon', 'a@gmail.com', 45634534, 'descirbe', 'this is description', '2023-10-23 16:17:46', 0),
(2, 'Md Emonfffff', 'a@gmail.com', 45645787, 'dfgfd', 'dfsgdsg', '2023-10-23 16:19:05', 0),
(3, 'MD Alauddin', 'a45645fdgf@gmail.com', 4565464, 'descirbe', 'retgrvdf', '2023-10-23 16:21:41', 1),
(4, 'Rylee', 'o@mailinator.com', 61, 'Po', 'Cupidatat ', '2023-10-23 16:24:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `adminremark` text NOT NULL,
  `remarkdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `useremail`, `issue`, `description`, `postingdate`, `adminremark`, `remarkdate`) VALUES
(1, 'bdmotaleb33@gmail.com', 'Cancellation', 'tttt', '2023-10-24 17:01:55', 'admi', '2023-10-28 03:37:32'),
(2, 'bdmotaleb33@gmail.com', 'Cancellation', 'tttt', '2023-10-24 17:02:11', 'admin bb', '2023-10-28 03:37:46'),
(3, 'bdmotaleb33@gmail.com', 'Cancellation', 'ttttcxzvzx', '2023-10-24 17:02:21', 'admin bbb', '2023-10-28 03:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `details`) VALUES
(1, 'terms', '<div id=\"ec004cb5-3561-4036-8abc-95390cbcb5d2\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The Bangladesh Bank (BB) has decided to include outside experts to formulate a new monetary policy to make the economy vibrant and tame the growing inflation.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam, executive director of the Monetary Policy Department, told UNB on Monday that earlier only central bank officials were members of this committee, but a decision has been taken to include three more people from outside.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">This decision was taken at a meeting of the Bangladesh Bank\'s board of directors on Sunday.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The country is going through an economic crisis now. Inflation is close to 10 per cent. The rate of food inflation is over 12 per cent. Amid this crisis, the monetary policy committee of the central bank was reconstituted to deal with the situation. </p></div></div></div></div><div id=\"f6b02d9b-1109-42f3-b4e4-0347f9dbabb8\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam said that the monetary policy formulation committee will have the deputy governor, chief economist, and executive director of the monetary policy department along with the governor of the central bank.<br>From outside of the BB, the chairman of the economics department of the Dhaka University and the director general of the Bangladesh Institute of</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Development Studies (BIDS) will be included in the committee.<br>In addition to them, the board of directors of the BB has agreed to keep Sadiq Ahmed, the vice chairman of the research institute Policy Research Institute (PRI), or Zahid Hussain, an economist of the Asian Development Bank (ADB), in the committee.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The BB sources said that whoever is found available among these two will be invited to the monetary policy formulation committee meeting.<br>Economist Ahsan H Mansur told UNB that the central bank\'s main task is to solve the economic crisis and the main tool of the central bank to control inflation is the effective use of monetary policy.</p></div></div></div></div><div id=\"d07115f8-fe0b-4816-8b3f-a20c873d7eaf\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Inflation is usually managed by controlling the money supply in the market by raising or lowering interest rates.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">“This work is done by the monetary policy department of the Bangladesh Bank. It is one of the most important departments of the central bank of every country. Monetary policy is less used as a tool to control inflation in Bangladesh,” he said.</p></div></div></div></div>'),
(2, 'privacy', '<div id=\"ec004cb5-3561-4036-8abc-95390cbcb5d2\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The Bangladesh Bank (BB) has decided to include outside experts to formulate a new monetary policy to make the economy vibrant and tame the growing inflation.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam, executive director of the Monetary Policy Department, told UNB on Monday that earlier only central bank officials were members of this committee, but a decision has been taken to include three more people from outside.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">This decision was taken at a meeting of the Bangladesh Bank\'s board of directors on Sunday.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The country is going through an economic crisis now. Inflation is close to 10 per cent. The rate of food inflation is over 12 per cent. Amid this crisis, the monetary policy committee of the central bank was reconstituted to deal with the situation. </p></div></div></div></div><div id=\"f6b02d9b-1109-42f3-b4e4-0347f9dbabb8\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam said that the monetary policy formulation committee will have the deputy governor, chief economist, and executive director of the monetary policy department along with the governor of the central bank.<br>From outside of the BB, the chairman of the economics department of the Dhaka University and the director general of the Bangladesh Institute of</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Development Studies (BIDS) will be included in the committee.<br>In addition to them, the board of directors of the BB has agreed to keep Sadiq Ahmed, the vice chairman of the research institute Policy Research Institute (PRI), or Zahid Hussain, an economist of the Asian Development Bank (ADB), in the committee.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The BB sources said that whoever is found available among these two will be invited to the monetary policy formulation committee meeting.<br>Economist Ahsan H Mansur told UNB that the cen tral bank\'s main task is to solve the economic crisis and the main tool of the central bank to control inflation is the effective use of monetary policy.</p></div></div></div></div><div id=\"d07115f8-fe0b-4816-8b3f-a20c873d7eaf\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Inflation is usually managed by controlling the money supply in the market by raising or lowering interest rates.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">“This work is done by the monetary policy department of the Bangladesh Bank. It is one of the most important departments of the central bank of every country. Monetary policy is less used as a tool to control inflation in Bangladesh,” he said.</p></div></div></div></div>'),
(3, 'contact', '<div id=\"ec004cb5-3561-4036-8abc-95390cbcb5d2\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The Bangladesh Bank (BB) has decided to include outside experts to formulate a new monetary policy to make the economy vibrant and tame the growing inflation.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam, executive director of the Monetary Policy Department, told UNB on Monday that earlier only central bank officials were members of this committee, but a decision has been taken to include three more people from outside.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">This decision was taken at a meeting of the Bangladesh Bank\'s board of directors on Sunday.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The country is going through an economic crisis now. Inflation is close to 10 per cent. The rate of food inflation is over 12 per cent. Amid this crisis, the monetary policy committee of the central bank was reconstituted to deal with the situation. </p></div></div></div></div><div id=\"f6b02d9b-1109-42f3-b4e4-0347f9dbabb8\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam said that the monetary policy formulation committee will have the deputy governor, chief economist, and executive director of the monetary policy department along with the governor of the central bank.<br>From outside of the BB, the chairman of the economics department of the Dhaka University and the director general of the Bangladesh Institute of</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Development Studies (BIDS) will be included in the committee.<br>In addition to them, the board of directors of the BB has agreed to keep Sadiq Ahmed, the vice chairman of the research institute Policy Research Institute (PRI), or Zahid Hussain, an economist of the Asian Development Bank (ADB), in the committee.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The BB sources said that whoever is found available among these two will be invited to the monetary policy formulation committee meeting.<br>Economist Ahsan H Mansur told UNB that the central bank\'s main task is to solve the economic crisis and the main tool of the central bank to control inflation is the effective use of monetary policy.</p></div></div></div></div><div id=\"d07115f8-fe0b-4816-8b3f-a20c873d7eaf\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Inflation is usually managed by controlling the money supply in the market by raising or lowering interest rates.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">“This work is done by the monetary policy department of the Bangladesh Bank. It is one of the most important departments of the central bank of every country. Monetary policy is less used as a tool to control inflation in Bangladesh,” he said.</p></div></div></div></div>'),
(4, 'about', '<div id=\"ec004cb5-3561-4036-8abc-95390cbcb5d2\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The Bangladesh Bank (BB) has decided to include outside experts to formulate a new monetary policy to make the economy vibrant and tame the growing inflation.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam, executive director of the Monetary Policy Department, told UNB on Monday that earlier only central bank officials were members of this committee, but a decision has been taken to include three more people from outside.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">This decision was taken at a meeting of the Bangladesh Bank\'s board of directors on Sunday.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The country is going through an economic crisis now. Inflation is close to 10 per cent. The rate of food inflation is over 12 per cent. Amid this crisis, the monetary policy committee of the central bank was reconstituted to deal with the situation. </p></div></div></div></div><div id=\"f6b02d9b-1109-42f3-b4e4-0347f9dbabb8\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Ezazul Islam said that the monetary policy formulation committee will have the deputy governor, chief economist, and executive director of the monetary policy department along with the governor of the central bank.<br>From outside of the BB, the chairman of the economics department of the Dhaka University and the director general of the Bangladesh Institute of</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Development Studies (BIDS) will be included in the committee.<br>In addition to them, the board of directors of the BB has agreed to keep Sadiq Ahmed, the vice chairman of the research institute Policy Research Institute (PRI), or Zahid Hussain, an economist of the Asian Development Bank (ADB), in the committee.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">The BB sources said that whoever is found available among these two will be invited to the monetary policy formulation committee meeting.<br>Economist Ahsan H Mansur told UNB that the central bank\'s main task is to solve the economic crisis and the main tool of the central bank to control inflation is the effective use of monetary policy.</p></div></div></div></div><div id=\"d07115f8-fe0b-4816-8b3f-a20c873d7eaf\" style=\"color: rgb(0, 0, 0); font-family: Merriweather, Roboto, Arial, Helvetica, monospace; font-size: 15.584px;\"><div class=\"storyCard eyOoS qwBlA\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">Inflation is usually managed by controlling the money supply in the market by raising or lowering interest rates.</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; white-space-collapse: break-spaces;\">“This work is done by the monetary policy department of the Bangladesh Bank. It is one of the most important departments of the central bank of every country. Monetary policy is less used as a tool to control inflation in Bangladesh,” he said.</p></div></div></div></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tourpackages`
--

CREATE TABLE `tourpackages` (
  `id` int(11) NOT NULL,
  `packagename` varchar(255) NOT NULL,
  `packagetype` varchar(255) NOT NULL,
  `packagelocation` varchar(255) NOT NULL,
  `packageduration` int(11) NOT NULL,
  `packageprice` int(11) NOT NULL,
  `packagefeature` varchar(255) NOT NULL,
  `packagedetails` varchar(255) NOT NULL,
  `packkageimage` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`id`, `packagename`, `packagetype`, `packagelocation`, `packageduration`, `packageprice`, `packagefeature`, `packagedetails`, `packkageimage`, `createdate`, `updatedate`) VALUES
(2, 'Bernard ', 'Quos ddd', 'Natus ', 5, 945, 'Magnam ', 'Bangladesh prime minister Sheikh Hasina along with the EC president Ursula\r\n von der Leyen and EIB president Werner Hoyer witnessed the signing of agreements at the European Commission Headquarters in Brussels, the capital of Belgium', 'doctor1.jpg', '2023-10-21 12:41:45', '2023-10-26 04:47:18'),
(7, 'Genevieve ', 'Sunt ', 'Molestiae ', 9, 758, 'Facere ', 'Bangladesh prime minister Sheikh Hasina along with the EC president Ursula\r\n von der Leyen and EIB president Werner Hoyer witnessed the signing of agreements at the European Commission Headquarters in Brussels, the capital of Belgium', 'stu1.jpg', '2023-10-22 02:01:16', '2023-10-26 04:47:28'),
(9, 'honeymoon tour', 'couple', 'Banhorban', 7, 290, 'only Pickup', 'Luxiriou trip', 'couple.jpg', '2023-10-22 10:18:45', '2023-10-22 10:18:45'),
(10, 'bachelor trip', 'fly with friends', 'Coxs Bazar', 10, 300, 'drop facility', 'Bangladesh prime minister Sheikh Hasina along with the EC president Ursula\r\n von der Leyen and EIB president Werner Hoyer witnessed the signing of agreements at the European Commission Headquarters in Brussels, the capital of Belgium', 'friends.jpg', '2023-10-22 10:22:26', '2023-10-26 04:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `mobile`, `email`, `password`, `regdate`, `updatedate`) VALUES
(1, 'MD Alauddin', 1754126948, 'a@gmail.com', '12345', '2023-10-22 13:59:00', '2023-10-22 13:59:00'),
(2, 'Md Emon', 175125698, 'bdmotaleb33@gmail.com', '123', '2023-10-22 15:46:13', '2023-10-23 11:38:32'),
(4, 'emo', 1745841265, 'alauddin@gmail.com', '12345', '2023-10-26 14:36:23', '2023-10-28 04:23:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourpackages`
--
ALTER TABLE `tourpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tourpackages`
--
ALTER TABLE `tourpackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
