-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 11:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_name`, `user_password`, `user_confirm_password`) VALUES
(1, 'admin', '63a9f0ea7bb98050796b649e85481845', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `spost_title` varchar(255) NOT NULL,
  `post_overview` longtext NOT NULL,
  `spost_overview` varchar(70) NOT NULL,
  `system_requirement` varchar(255) NOT NULL,
  `system_requirement1` varchar(255) NOT NULL,
  `system_requirement2` varchar(255) NOT NULL,
  `system_requirement3` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `downlink` varchar(500) NOT NULL,
  `upload_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `spost_title`, `post_overview`, `spost_overview`, `system_requirement`, `system_requirement1`, `system_requirement2`, `system_requirement3`, `category`, `downlink`, `upload_image`) VALUES
(8, '321 Media Player', '321 Media Player', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', '', 'http://localhost:8080/project/softwares/drfone.exe', '321 Media Player-321player.png'),
(9, 'Adobe Photoshop', 'Adobe Photoshop', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'Adobe Photoshop-adobephotoshop.png'),
(10, 'Apple Final Cut Pro X', 'Apple Final Cut', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'Apple Final Cut Pro X-applefinalcutprox.png'),
(11, 'Avast', 'Avast', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Security', 'http://localhost:8080/project/softwares/drfone.exe', 'Avast-avast.png'),
(12, 'Corel Video Ultimate X10', 'Corel Video', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'Corel Video Ultimate X10-corelvideostudioultimatex10.png'),
(13, 'DEV C++', 'DEV C++', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'DEV C++-dev c++.png'),
(14, 'Driver Pack Solution', 'Driver Pack Solution', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Driver Pack Solution-driverpacksolution.png'),
(15, 'Kali Linux', 'Kali Linux', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Operating System', 'http://localhost:8080/project/softwares/kali-linux-2017.1-amd64.iso', 'Kali Linux-kali.png'),
(17, 'Mcafee', 'Mcafee', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Security', 'http://localhost:8080/project/softwares/drfone.exe', 'Mcafee-mcafee.png'),
(18, 'Eset Nod32', 'Eset Nod32', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Security', 'http://localhost:8080/project/softwares/drfone.exe', 'Eset Nod32-nod32.png'),
(19, 'Microsoft Office ', 'Microsoft Office ', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Microsoft Office -office.png'),
(20, 'Parrot OS', 'Parrot OS', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Operating System', 'http://localhost:8080/project/softwares/kali-linux-2017.1-amd64.iso', 'Parrot OS-parrotos.png'),
(21, 'Pinnacle Studio 21 Ultimate', 'Pinnacle Studio', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'Pinnacle Studio 21 Ultimate-pinnaclestudio21ultimate.png'),
(23, 'Share It', 'Share It', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Share It-shaeit.png'),
(24, 'Sony Vegas Pro', 'Sony Vegas Pro', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'Sony Vegas Pro-sonyvegaspro.png'),
(25, 'Tunnel Bear', 'Tunnel Bear', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Tunnel Bear-tunnelbear.png'),
(26, 'Visual Studio', 'Visual Studio', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Visual Studio-Untitled-1.png'),
(27, 'Vlc Media Player', 'Vlc Media Player', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Multimedia', 'http://localhost:8080/project/softwares/drfone.exe', 'Vlc Media Player-vlc.png'),
(28, 'WINDOW 10', 'WINDOW 10', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Operating System', 'http://localhost:8080/project/softwares/kali-linux-2017.1-amd64.iso', 'WINDOW 10-window.png'),
(29, 'WINDOW 8.1', 'WINDOW 8.1', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Operating System', 'http://localhost:8080/project/softwares/drfone.exe', 'WINDOW 8.1-window8.1.png'),
(30, 'WINDOW XP', 'WINDOW XP', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Operating System', 'http://localhost:8080/project/softwares/drfone.exe', 'WINDOW XP-windowxp.png'),
(31, 'WonderShare Filmora', 'WonderShare Filmora', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Graphics', 'http://localhost:8080/project/softwares/drfone.exe', 'WonderShare Filmora-wondersharefilmora.png'),
(32, 'Xampp', 'Xampp', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'Xampp-xammp.png'),
(33, 'OFFICE', 'OFFICE', 'Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.Fabric Software Fabric Engine is a handy application which can be used for developing high performance tools for visual effects, VR/AR work and for games. This software application is integrated with lots of common applications which means you can work in a familiar environment. You can also download Unity Pro 2017.', 'Fabric Software Fabric Engine is a handy application which can be used', 'WINDOW 7,8,9,10', 'Pentium 4,or above', 'Ram 1gb,2gb', 'Processor i5,i7', 'Utilities', 'http://localhost:8080/project/softwares/drfone.exe', 'OFFICE-office.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
