-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 03:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `Id` bigint(20) NOT NULL,
  `User_Id` bigint(20) NOT NULL,
  `RandomKey` varchar(32) NOT NULL,
  `Email` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `E_Id` bigint(20) NOT NULL,
  `E_Name` varchar(22) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `Department` varchar(22) NOT NULL,
  `Salary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`E_Id`, `E_Name`, `CNIC`, `Department`, `Salary`) VALUES
(3, 'Usman', '2323423', 'R&D', 21233123);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Image_Id` bigint(20) NOT NULL,
  `Image_Name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Image_Id`, `Image_Name`) VALUES
(1, 'IMG_7155.JPG'),
(2, 'DSC_03995.jpg'),
(3, 'img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` bigint(20) NOT NULL,
  `Post_Heading` varchar(100) NOT NULL,
  `Post_Description` varchar(4000) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_Id`, `Post_Heading`, `Post_Description`, `Date`) VALUES
(15, 'Condolences pour in following Dina Wadias demise', 'Soon after news broke about the death of Quaid-i-Azam Mohammad Ali Jinnah\'s only daughter Dina Wadia on Thursday, messages of condolences started to pour in through social media.\r\nPeople from all walks of life, including politicians and celebrities, took to Twitter to extend their condolences over the sad demise of Quaid\'s daughter.', '2017-11-03 20:41:59'),
(16, 'Smoggy relations', 'THE noxious smog engulfing large parts of upper Punjab is yet another reminder that Pakistan and India have much to talk about beyond geopolitics.\r\n\r\nAccording to many reports, the smog is coming from the burning of agricultural waste in Indian Punjab, and satellite imagery actually shows the widespread prevalence of the farm fires.\r\n\r\nThere is little to nothing that the provincial authorities here can do to reduce the intensity of the smog, although much can be done to mitigate its impact, such as issuing alerts and raising awareness about steps that citizens can take to protect themselves from its harmful effects.', '2017-11-03 20:55:05'),
(17, 'CPEC Long Term Plan', 'Planning minister Mr Ahsan Iqbal has finally confirmed that the CPEC Long Term Plan (LTP) is about to be finalised on Nov 21 at the seventh Joint Cooperation Committee to be held in Islamabad. Some might recall that details from the LTP in question were published by Dawn in a long detailed report in May, and the same minister had reacted sharply at the time, saying that the details are â€œfactually incorrectâ€ and the real plan will be made public once it has been finalised.\r\n\r\nIt looks like that moment is at last arriving, if the minister lives up to his promise of releasing the full document. If they do what they did earlier in the year, and produce a shortened, sanitised and general summary of the main LTP, and release that claiming that it is the original document, we will know that an effort is being made to conceal the real details of CPEC from the public.\r\n\r\nTo recap the conversations that took place around the time when the Dawn story revealed the details of the plan, there were four main areas of focus identified by the Chinese side and a few from the Pakistanis. The Chinese appeared primarily interested in agriculture, industrial zones and tourism, along with a digital strategy to expand fibre optic connectivity and build a submarine cable landing station in Gwadar to carry some of their digital traffic from the western provinces out via Pakistan rather than routing it through servers in Europe.', '2017-11-03 20:55:43'),
(18, '10 provocative exhibits at the Karachi Biennale that you must see right now', 'Is it possible to pick under a dozen works from a city-wide art exhibition featuring over 140 artists and call them the \'best\' of the crop?\r\n\r\nNo, which is why I haven\'t.\r\n\r\nInstead, this is a selection of work that\'s meant to whet the appetite if you\'re venturing out to explore the Karachi Biennale this weekend.\r\n\r\nSpread out over 12 venues across the city ranging from landmarks like Frere Hall to little-known spots like pre-partition bookstore Pioneer Book House, the biennale can appear daunting to tackle. If you\'re pressed for time I suggest you isolate the art you\'re especially interested in seeing, figure out where it\'s housed, and go there first.\r\n\r\nTo get you started on your journey the following selection mixes art that is critically acclaimed with art that uses its site intelligently, or has sparked debate... or is simply something I fell in love with.', '2017-11-03 20:59:24'),
(19, 'Social media damnation', 'Sharmeen Obaid-Chinoyâ€™s recent tweets have been viciously dissected and intensely debated in hundreds of conversations â€“ offline and online. For those who might still be clueless about what happened, her sister went to the ER, where she was seen to by a doctor, who later sent her a Facebook friend request. Chinoy took to social media, called it harassment and threatened to report him to the hospitalâ€™s management. Supposedly, he was fired from his job after this. Without fact checking or verifying any information, the public went into a frenzy condemning her, rallying for him, condemning him, rallying for her, all the while calling each other out. It was an all-out war zone, in digital terms.\r\n\r\nNot long ago, pictures of Mahira Khan, wearing a white summer dress that showed some skin, smoking a cigarette and hanging out with Ranbir Kapoor, were splashed across the internet. The public did not disappoint then either. The gloves came off and the claws came out. Tongues wagged in harmony, questioning her morals, her religion, calling her all sorts of names; some even went to the extent of labelling her an Indian agent.', '2017-11-03 20:59:57'),
(20, 'Donâ€™t destroy Thar', 'THAR, one of the prettiest and sweetest-smelling flowers in Pakistanâ€™s national bouquet, is dying. It is dying because those working under the banner of â€˜developmentâ€™ are not open to reason, because the people of this unique region have been abandoned by their compatriots.\r\n\r\nThe case for protecting Thar and the people who have been living there for thousands of years can be presented in a few lines.\r\n\r\nThar is the only Hindu-majority area in Pakistan and any change in its demographic character will mean the stateâ€™s failure to fulfil its constitutional and humanitarian obligations to protect a minority community. As descendants of the original settlers on this land, the people of Thar are entitled to enjoy all the rights enumerated in the UN Declaration on the Rights of Indigenous Peoples, especially their rights to ownership of land, to preservation of their culture, language, belief and historical monuments, and to have access to employment, health, education and social security.', '2017-11-03 21:00:23'),
(21, 'Sharif family\'s accountability hearing adjourned until Nov 7', 'An accountability hearing against ousted premier Nawaz Sharif, his daughter Maryam Nawaz and son-in-law retired Captain Safdar was adjourned on Friday after an order passed yesterday by the Islamabad High Court (IHC) regarding the clubbing of three references against the Sharif family could not be procured by the court in time.\r\n\r\nToday was the first time Sharif, Maryam and Safdar were present in court together. The disqualified PM arrived in Islamabad from London on Thursday amid VIP protocol. It was also the first trial hearing Sharif appeared for after the three were indicted by the accountability court on October 19.', '2017-11-03 21:01:09'),
(22, 'Pakistan climb to top spot in ICC T20 rankings', 'Pakistan\'s T20 team made history on Wednesday as it climbed to the number one spot in the International Cricket Council (ICC) T20 Rankings \"for the first time ever\", the cricket governing body announced.\r\n\r\nView image on Twitter\r\nView image on Twitter\r\n ICC âœ”@ICC\r\nIndia\'s win today means Pakistan top the @MRFWorldwide ICC T20I Team Rankings for the first time ever! Congratulations!\r\n9:54 PM - Nov 1, 2017\r\n 360 360 Replies   2,469 2,469 Retweets   7,878 7,878 likes\r\nTwitter Ads info and privacy\r\nPakistan reached the top slot after India beat New Zealand in their latest Twenty20 tournament.\r\n\r\nFormer top T20 team, New Zealand lost to India by 53 runs in their first 20-overs game. India, who scored 202 runs for a loss of three wickets in the first innings, restricted NZ to 148-8.\r\n\r\nNew Zealand slipped down to number two spot, while India had to settle for the fifth spot in the ICC T20 rankings.', '2017-11-03 21:02:18'),
(23, 'Careem driver shot dead in Karachi', 'Police are investigating the alleged murder of a Careem driver who was found dead in his car in Karachi\'s Korangi area earlier this week, police said on Friday.\n\nThe driver, Syed Abdullah Gillani, was found inside his car with a single bullet wound on his head on Wednesday, Station House Officer (SHO) Khalid Abbasi told Dawn. The investigators have recovered one spent bullet casing fired from a 30-bore pistol from the crime scene, the SHO added.\n\nThe police have ruled out the possibility of robbery in their initial probe as the assailants did not take Gillani\'s mobile phone, money and other valuables, SHO Abbasi said.\n\nHe said that \"initial investigations suggest that the murder might be linked with personal enmity,\" adding that the victim was involved in a land dispute with his relatives in Punjab.\n\nThe victim originally hailed from Bahawalpur according to the CNIC found in his pocket, he said.\n\nThe SHO further said that the investigations have revealed that someone had called the driver to meet at the site of the alleged murder. \"When he reached there, Gilani was gunned down apparently while inside his car.\"\n\nThe victim was associated with Careem but at time of the incident, his vehicle was \"offline\", Abbasi said.', '2017-11-03 21:03:11'),
(24, 'Shell, Total, PSO fuel harms engines: Honda', 'ISLAMABAD: The Oil and Gas Regulatory Authority (Ogra) said on Thursday it would investigate a complaint that fuel suppliers including local units of Shell and Total as well as Pakistan State Oil (PSO) had added manganese to their gasoline.\r\n\r\nHonda Motor Coâ€™s Pakistan subsidiary, Honda Atlas Cars (Pakistan) Ltd, filed the complaint, saying the additive appeared to be damaging engines in its vehicles.\r\n\r\nManganese can be added to fuel to make it appear to be of a higher quality but it can reduce fuel economy and potentially harm public health due to emissions.\r\n\r\nHondaâ€™s complaint states Pakistani suppliers used the additive to elevate the Research Octane Number (RON) used to grade petroleum and lower quality fuel up to the RON 92 grade required by regulatory standards.', '2017-11-03 21:14:35'),
(25, 'Comsats Unniversity', 'bdhfhd dnb bbnf ddfhdmns dfbnmsbvnnvbb', '2017-11-05 17:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` bigint(20) NOT NULL,
  `P_Name` varchar(60) NOT NULL,
  `P_Description` varchar(100) NOT NULL,
  `P_Image` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `P_Name`, `P_Description`, `P_Image`, `Price`) VALUES
(1, 'Android Phone', '', 'android-phone.jpg', 200),
(3, 'External Hard Drive', '', 'external-hard-disk.jpg', 150),
(4, 'LCD', '', 'lcd-tv.jpg', 210),
(5, 'Wrist Watch', '', 'wrist-watch.jpg', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` bigint(20) NOT NULL,
  `User_Name` varchar(22) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email` varchar(33) NOT NULL,
  `Active` binary(1) NOT NULL DEFAULT '\0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `User_Name`, `Password`, `Gender`, `Email`, `Active`) VALUES
(13, 'saadnasir95', 'd868e6d89da63bce9b0418c5e9e297bd', 'Male', 'saadnasir95@gmail.com', 0x31),
(14, 'saadnasir', '347602146a923872538f3803eb5f3cef', 'Male', 'saadnasir9595@gmail.com', 0x31),
(15, 'saadnasir9', '8f654ea707953f3b33817cd45512ed9d', 'Male', 'sp15-bse-037@ciitlahore.edu.pk', 0x31);

-- --------------------------------------------------------

--
-- Table structure for table `users_captcha`
--

CREATE TABLE `users_captcha` (
  `User_Id` bigint(20) NOT NULL,
  `User_Name` varchar(22) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(33) NOT NULL,
  `Gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_captcha`
--

INSERT INTO `users_captcha` (`User_Id`, `User_Name`, `Password`, `Email`, `Gender`) VALUES
(1, 'saadnasir95', '347602146a923872538f3803eb5f3cef', 'saadnasir95@gmail.com', 'Male'),
(2, 'sp15-bse-037', '347602146a923872538f3803eb5f3cef', 'saadnasir9595@gmail.com', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Video_ID` bigint(20) NOT NULL,
  `Video_Name` varchar(50) NOT NULL,
  `Video_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Video_ID`, `Video_Name`, `Video_Type`) VALUES
(1, '01_01-Welcome.mp4', 'video/mp4'),
(2, '154417_01_01_XR15_whatis.mp4', 'video/mp4'),
(3, '154417_03_01_XR15_postpage.mp4', 'video/mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`E_Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Image_Id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `users_captcha`
--
ALTER TABLE `users_captcha`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Video_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `E_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Image_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users_captcha`
--
ALTER TABLE `users_captcha`
  MODIFY `User_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `Video_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
