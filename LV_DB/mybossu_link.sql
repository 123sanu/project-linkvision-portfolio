-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2018 at 11:10 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybossu_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `email`, `password`, `status`) VALUES
(1, 'Md.Kamrul Hasan', 'sanucseduet@gmail.com', '6bda65e556e8a3b58a43c5b0a21362c6', 1),
(2, 'Mr. Hasan Mahafuz', 'm.hasan@linkvisionsoft.com', '6bda65e556e8a3b58a43c5b0a21362c6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `client_title` varchar(100) NOT NULL,
  `client_img` varchar(100) NOT NULL,
  `client_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `client_title`, `client_img`, `client_status`) VALUES
(1, 'ECC', 'client_image/aEDEbUnrd9.png', 1),
(2, 'Robi', 'client_image/xAonpzGNGr.png', 1),
(3, 'Airtel', 'client_image/iML3AgEEV5.png', 1),
(4, 'Nourish', 'client_image/dBRqXiS51G.png', 1),
(5, 'Nilorn', 'client_image/YJWliDYnmu.png', 1),
(6, 'Pavilion', 'client_image/tee3d8omJK.png', 1),
(7, 'Synergic', 'client_image/141.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_process`
--

CREATE TABLE `tbl_process` (
  `process_id` int(11) NOT NULL,
  `process_title` varchar(100) NOT NULL,
  `process_desc` text NOT NULL,
  `process_img` varchar(100) NOT NULL,
  `process_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_process`
--

INSERT INTO `tbl_process` (`process_id`, `process_title`, `process_desc`, `process_img`, `process_status`) VALUES
(1, 'UX / UI', 'We pride ourselves in creating stunning user interfaces that are focused not only on aesthetics, but on the experience the user has when using the product. This includes aspects such as: accessibility, user-friendliness and intuitiveness.', 'process_image/gfzLHGVtAA.png', 1),
(2, 'Architecture', 'The architecture is carefully engineered for optimum use of Memcache to balance the database read/write activity for the lowest possible overheads in terms of CPU usage on the server when scaling. Where applicable, multiple server instances are planned and mapped out.', 'process_image/ZbirPZZeyd.png', 1),
(3, 'API Layer', 'We create a REST based API that communicates with the back-end bringing back data in the form of JSON objects. This allows re-usability of code among other things and makes it simple for the product to open 3rd party access to their APIs in the future or deploy on other platforms.', 'process_image/LlqsFgCgiQ.png', 1),
(4, 'Back End', 'Our experience in back-end databases ranges from MySQL, Oracle, Teradata to the Google App Engine Datastore. Based on the project requirements we select the best possible technology for the project and create an optimized table structure which will provide the fastest results and the best scaling options.', 'process_image/OAVEAUFG6V.png', 1),
(5, 'External APIs', 'With so many different platforms available with APIs whether open or licensed, there are thousands of interactive features that you can integrate into your application product. We use the interfaces provided and implement them into the web application.', 'process_image/EQ2AooEtjX.png', 1),
(6, 'Unit Testing', 'Usually, web application development projects are fairly large in size and scope. Unit tests become increasingly important as the larger the project becomes as the risk of human error increases. By writing Unit Tests for all the functions, we allow automated tests to make sure that the results being received from functions are what were expected from them.', 'process_image/tdeXsgiNPd.png', 1),
(7, 'Deployment & Hosting', 'We are partners with Amazon, Rackspace and have extensive experience in deployment and managing production environments. Our 24x7 NOC team ensures that your Linux and windows servers are tuned for performance and ready for load-balancing, replication and scaling.', 'process_image/jrU74uR33N.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_img` varchar(100) NOT NULL,
  `project_href` varchar(100) NOT NULL,
  `project_url` varchar(100) NOT NULL,
  `project_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`project_id`, `project_title`, `project_img`, `project_href`, `project_url`, `project_status`) VALUES
(1, 'Pavilion', 'project_image/863.png', 'http://111.221.7.53/Pavilion/', 'www.pavilionbd.com', 1),
(2, 'Medical eLearning', 'project_image/589.png', 'http://111.221.7.53/eacademy/', 'www.eacademy.com', 1),
(3, 'School Management System', 'project_image/421.png', 'http://111.221.7.53/Pathshala/', 'www.pathshala.com', 1),
(4, 'OZ Clothing', 'project_image/312.png', 'http://111.221.7.53/oz-clothing/', 'www.ozclothing.com', 1),
(5, 'ERP Demo', 'project_image/903.png', 'http://111.221.7.53/erpdemo/', 'erp.linkvisionsoft.com', 1),
(6, 'Oztopone Website', 'project_image/829.png', 'http://www.oztopone.com.au/', 'www.oztopone.com.au', 1),
(7, 'Madina Carpet Website', 'project_image/560.png', 'http://111.221.7.53/carpet/', 'www.madinacarpet.com', 1),
(8, 'Dr. Shihab\'s Laser Dental Website', 'project_image/592.png', 'http://111.221.7.53:83/', 'www.laserdentalbd.com', 1),
(9, 'Qingzhou Yongli Dredging Machinery Co.Ltd Website', 'project_image/179.png', 'http://111.221.7.53:82/index.html', 'www.yonglidredging.com', 1),
(10, 'AMI Devcon Website', 'project_image/575.png', 'http://111.221.7.53:84/', 'www.amidevcon.com', 1),
(11, 'Environmental Concern Consultants Website', 'project_image/744.png', 'http://111.221.7.53/ecc', 'www.environconcern.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_img` varchar(100) NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_desc` text NOT NULL,
  `service_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_img`, `service_title`, `service_desc`, `service_status`) VALUES
(1, 'service_image/apps.png.png', 'Web Design & Development', 'We build rich, scalable and cost effective web-based applications using latest technologies.', 1),
(2, 'service_image/cross_browser.png.png', 'App Development', 'We create native applications. Starting with strategy, perfecting design, and implementing it all during development.', 1),
(3, 'service_image/desktop_content.png.png', 'Application Development', 'We build rich, scalable and cost effective web-based applications using latest technologies.', 1),
(4, 'service_image/blog.png.png', 'Digital Marketing', 'We help you stand out from your competition and gain visibility on major search engines.', 1),
(5, 'service_image/user.png.png', 'Consultancy', 'You simply need to bring in the IT experts to achieve your business goals. Like us :P', 1),
(6, 'service_image/appointment.png.png', 'Outsourcing', 'We are one of the country\'s leading outsourcing providers and we would like to share something with you - our promise of experience.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `team_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`team_id`, `full_name`, `designation`, `image`, `status`) VALUES
(1, 'Md. Kamrul Hasan', 'Managing Director', 'team_image/onHWNT0Cpn.png', 1),
(2, 'Md. Hasan', 'CEO & CTO', 'team_image/iLmMd0nvm0.png', 1),
(3, 'Shafiqur Rahman', 'PM, IT & Software', 'team_image/S4wos1zdEs.png', 1),
(4, 'Md.Mahamudul Hasan', 'Director, IT & Admin', 'team_image/PglHBPUCS6.png', 1),
(5, 'Md Rezwanur Rahman', 'Incharge System Analysis & Solutions', 'team_image/93KsBlFOUi.png', 1),
(6, 'Arifin', 'Sr. Apps Developer', 'team_image/ROpCQc6lDX.png', 1),
(7, 'Jafrul Sadek Nabil', 'Sr. Software Engineer', 'team_image/40MKgz5CWP.png', 1),
(8, 'Abdullah Al Mahmud', 'Software Engineer', 'team_image/PAzibtPHfo.png', 1),
(9, 'Md. Ramzan Ali', 'Software Engineer', 'team_image/AoialbC7kZ.png', 1),
(10, 'Kazi Ashraful Azam', 'Jr. Android Developer', 'team_image/Y8QVZoGLVO.png', 1),
(11, 'A.M. Rashed Mahamud', 'Jr. Software Engineer', 'team_image/gffm8qm0vn.png', 1),
(12, 'Md. Nazmul Hasan', 'Web & Software Engineer', 'team_image/HuROMA4Cxp.png', 1),
(13, 'Karim', 'IT Officer', 'team_image/868.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `technology_id` int(11) NOT NULL,
  `technology_title` varchar(100) NOT NULL,
  `technology_img` varchar(50) NOT NULL,
  `technology_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`technology_id`, `technology_title`, `technology_img`, `technology_status`) VALUES
(1, 'Microsoft .NET', 'tecnology_image/rXNx0YfEFT.png', 1),
(2, 'SQL Server', 'tecnology_image/BVxCWc5oGj.png', 1),
(3, 'Visual Studio', 'tecnology_image/CpNBBxUo8p.png', 1),
(4, 'PHP', 'tecnology_image/EGWwuaObXF.png', 1),
(5, 'Wordpress', 'tecnology_image/xHSoErCIZl.png', 1),
(6, 'HTML', 'tecnology_image/JLQmjm5PNz.png', 1),
(7, 'CSS3', 'tecnology_image/1SVBMmrGRj.png', 1),
(8, 'JavaScript', 'tecnology_image/iTB7YX0FnP.jpg', 1),
(9, 'jQuery', 'tecnology_image/iiiBRpWwkf.png', 1),
(10, 'Angular JS', 'tecnology_image/0TOjfE5ZhC.png', 1),
(11, 'React JS', 'tecnology_image/Ttss8pPp9i.png', 1),
(12, 'Brackets', 'tecnology_image/my1wVEuwHQ.png', 1),
(13, 'Git', 'tecnology_image/njYLwmNuyd.png', 1),
(14, 'Bitbucket', 'tecnology_image/6jmt58rqCs.png', 1),
(15, 'laravel', 'tecnology_image/507.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_process`
--
ALTER TABLE `tbl_process`
  ADD PRIMARY KEY (`process_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  ADD PRIMARY KEY (`technology_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_process`
--
ALTER TABLE `tbl_process`
  MODIFY `process_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_technology`
--
ALTER TABLE `tbl_technology`
  MODIFY `technology_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
