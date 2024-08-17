

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `donor` (
  `donor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(25) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `profile_img` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `donor` (`donor_id`, `name`, `address`, `city`, `pin_code`, `email_id`, `password`, `contact_no`, `profile_img`, `status`) VALUES
(1, 'Swathi', 'Balmatta Junction, Near Collector\'s Gate', 'Manipal', '464566', 'swathi@gmail.com', '123456', '9745673178', 'Sandip_pic.png', 'Active'),
(3, 'Durga prasad', 'Shiva kripa, Vidya nagar, Post Nehru Nagar', 'Balmatta', '435342', 'durgaprasad@gmail.com', '522222', '9440073178', 'Sandeep-Gangolli-Passport-Size-Photo.jpg', 'Adopted'),
(4, 'Raj kiran', 'Apartment no. 02, 1st Cross Rd, Shastri Nagar', 'Puttur', '575003', 'rajkiran@technopulse.in', 'q1w2e3r4', '08217727968', 'Pooja-Subedi.jpg', 'Active'),
(5, 'prakash', 'Adi-udupi, Karnataka 576102', 'Mangalore', '575003', 'prakash@technopulse.in', '111111', '9740173178', 'UK sperm donor.jpg', 'Active'),
(7, 'sharath kumar', 'Near Syndicate Circle, opp. Domino\'s Pizza, Manipal', 'Bengaluru', '589745', 'sharathkumar@gmail.com', '123456789', '9954545662', 'Pooja-Subedi.jpg', 'Active'),
(8, 'Santhosh Kumar', 'No.52, Jyoti Nivas College, 5th Block, Koramangala', 'Mangalroe', '589674', 'santhoshkumar@yahoo.com', '123456789', '9954545662', 'saiful-bi.jpg', 'Active'),
(9, 'Bhuvish jain', 'Shiva kripa, Vidya nagar, Post Nehru Nagar', 'Balmatta', '435342', 'bhuvishjain@gmail.com', '522222', '9440073178', 'rah.jpg', 'Adopted'),
(10, 'Sharun Dsouza', 'Adi-udupi, Karnataka 576102', 'Mangalore', '575003', 'sharundsouza@technopulse.in', '111111', '9740173178', 'phani_pic11.jpg', 'Active'),
(11, 'Raj kishore', 'Apartment no. 02, 1st Cross Rd, Shastri Nagar', 'Puttur', '575003', 'rajkishore@technopulse.in', 'q1w2e3r4', '08217727968', 'Passport-Size-Pic.jpg', 'Active'),
(12, 'Soumya salian', 'No.52, Jyoti Nivas College, 5th Block, Koramangala', 'Mangalroe', '589674', 'soumyasalian@gmail.com', '123456789', '9954545662', 'Passport_Size_Image_of_Nouman.jpg', 'Active'),
(13, 'Sudhir kumar', 'Near Syndicate Circle, opp. Domino\'s Pizza, Manipal', 'Bengaluru', '589745', 'sudhirkumar@gmail.com', '123456789', '9954545662', 'c53aa684465bc61455fd0d21537752fb.jpg', 'Active'),
(14, 'Bala subramanya', 'Balmatta Junction, Near Collector\'s Gate', 'Manipal', '464566', 'balasubramanya@gmail.com', '123456', '9745673178', '29780cook.jpg', 'Active'),
(15, 'Gaurav Sisode', '', '', '', 'gaurav@722', 'Gaurav722', '7410140811', '', 'Active'),
(16, 'pratik mahajan', '', '', '', 'pratik20030@gmail.com', 'Pratik30', '9022379376', '', 'Active');



CREATE TABLE `fund_collection` (
  `fund_collection_id` int(10) NOT NULL,
  `fund_raiser_id` int(10) NOT NULL,
  `donor_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `paid_amt` float(10,2) NOT NULL,
  `paid_date` date NOT NULL,
  `payment_type` varchar(25) NOT NULL,
  `payment_detail` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `fund_collection` (`fund_collection_id`, `fund_raiser_id`, `donor_id`, `name`, `paid_amt`, `paid_date`, `payment_type`, `payment_detail`, `status`) VALUES
(20, 8, 3, 'Akshatha', 35000.00, '2020-03-05', 'VISA', 'a:4:{i:0;s:9:\"Raj kiran\";i:1;s:16:\"1234567890123456\";i:2;s:7:\"2021-01\";i:3;s:3:\"598\";}', 'Active'),
(21, 8, 3, 'sharath kumar', 2500.00, '2020-03-16', 'VISA', 'a:4:{i:0;s:17:\"Sharath A N Kumar\";i:1;s:16:\"9934567890123456\";i:2;s:7:\"2021-01\";i:3;s:3:\"589\";}', 'Active'),
(22, 10, 11, 'Swathi', 250.00, '2020-08-26', 'VISA', 'a:4:{i:0;s:3:\"Raj\";i:1;s:16:\"1234567890123456\";i:2;s:7:\"2021-02\";i:3;s:3:\"158\";}', 'Active'),
(24, 16, 1, 'Swathi', 0.00, '2022-02-17', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}', 'Active'),
(25, 16, 1, 'Swathi', 0.00, '2022-02-17', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}', 'Active'),
(26, 16, 1, 'Swathi', 5000.00, '2022-02-17', 'VISA', 'a:4:{i:0;s:3:\"Raj\";i:1;s:16:\"1234567890123456\";i:2;s:7:\"2023-01\";i:3;s:3:\"158\";}', 'Active'),
(27, 16, 1, 'Swathi', 0.00, '2022-02-17', '', 'a:4:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";}', 'Active'),
(28, 16, 1, 'Swathi', 100.00, '2022-02-17', 'AMERICAN EXPRESS', 'a:4:{i:0;s:3:\"raj\";i:1;s:16:\"2341234567890148\";i:2;s:7:\"2022-12\";i:3;s:3:\"158\";}', 'Active');


CREATE TABLE `fund_raiser` (
  `fund_raiser_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `banner_img` varchar(100) NOT NULL,
  `fund_raiser_description` text NOT NULL,
  `fund_raiser_contact` float(10,2) NOT NULL,
  `fund_amount` float(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  'hospital_name' varchar(100) NOT NULL,
  `hospital_contact` float(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `fund_raiser` (`fund_raiser_id`, `title`, `banner_img`, `fund_raiser_description`, `fund_amount`, `start_date`, `end_date`, `status`) VALUES
(11, '1 year old Udhaynidhi Needs Your Help Fight Apert Syndrome', 'syndrome.jpg', 'My name is Shanjeev M and I am here to raise funds for my son Udhaynidhi SH who is 1 year old. I am working as a private employee. I\'m working at a Consulting Service Company.\r\n\r\nUdhaynidhi SH lives in Hosur, Tamil Nadu with us. He is suffering from Apert syndrome for more than a year.\r\n\r\nHe is receiving medication and physiotherapy in Sparsh Children Hospital but not yet admitted. Until now, we\'ve spent about Rs. 250000.\r\n\r\nWe\'ve arranged the amount from savings & selling assets. In the next 30 days, we need Rs.600,000.00 more for operation and treatment.\r\n\r\nPlease come forward to support my cause.\r\n\r\nAny contribution will be of immense help. Do contribute and share this campaign link with your friends and family.\'', 100000.00, '2020-02-19', '2021-02-28', 'Active'),
(14, 'Fundraising to help physically disabled children', 'mktg_1456740369.jpg', 'There are nearly 109 districts in India which are backward and underdeveloped. We have started our journey from Bundelkhand region as this region tops among the list. Project Srishtipath aims to develop all these areas by providing them with a self-sustaining model. One campaign is for a single area as we will be covering all the 109 districts in 109 Phases. This is phase 1 of Project Srishtipath. Paraplegic brave heart, Arjuna awarded and padmashree Malathi K.Holla, afflicted by polio at infancy, stands tall in the world of paraplegic sports in india by sheer grit and determination and has won medals around the world.This 45 year old Bank Manager has launched the \"Mathru Fountation\" to serve the physically challenged with motherly care. Lending her a helping hand are the former International sprinter Ashwini Nachappa, International Cricketer Venkatesh Prasad, Krishna Reddy H.T. and Dr.Sridhar M.K. both physically challenged and Anantha Bhat M., a leading advocate. ', 680000.00, '2020-03-04', '2020-11-19', 'Active'),
(33, 'Heart surgery fund', '1727894190patient-with-cancer.jpg', '<p>Namaste, i am priya facing heart surgery. expenses are daunting. your donation rpovodes vital support. please give, share widely. togather we can mend broken hearts and restore health. thank you for your kindness and compassion during this challenging time</p>', 100000.00, '2024-02-11', '2024-02-29', 'Active'),
(34, 'Fighting Liver cancer', '899118874liver_cancer_patient.jpeg', '<p>i am aman, battling liver cancer. treatment costs are overwhelming. your donation provides crusial support. please give and share my story. togather we can fight the disease and offer hope to those in need. your kindness makes a diffrence. thank you for standing with me on this journey towards healing</p>', 150000.00, '2024-02-22', '2024-03-13', 'Active'),
(35, 'Kidney stone Treatment Fund', '279799324blood_cancer_patient.jpeg', '<p>i am arav, struggling with kidney stones. treatement expenses are burdensome your donation provieds essential relief. please contribute and spread awareness. togather we can alleviate suffering and pave the way for recovery your support means the world to me during challenging time. thank you for your kindness and compassion.</p>', 130000.00, '2024-02-20', '2024-06-28', 'Active');



CREATE TABLE `photo` (
  `photo_id` int(10) NOT NULL,
  `album_id` int(10) NOT NULL,
  `photo_title` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photo_description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `photo` (`photo_id`, `album_id`, `photo_title`, `photo`, `photo_description`, `status`) VALUES
(3, 5, 'Guest Visit', '1994Tulips.jpg', 'Guest Visit', 'Active'),
(4, 2, 'Charity Outdoor Campus', '2259Chrysanthemum.jpg', 'Charity Outdoor Campus', 'Active'),
(15, 1, 'Guest Visit', '27749Tulips.jpg', 'Guest Visit', 'Active'),
(16, 3, 'Leaders Meet', '7482Jellyfish.jpg', 'Leaders Meet', 'Active'),
(17, 8, 'Children at Classroom', '28830Chrysanthemum.jpg', 'Children at Classroom', 'Active'),
(18, 1, 'Dinning Table Room', '1003812693010_DinningHall.jpg', 'Dinning Table Room', 'Active'),
(19, 1, 'Kitchen Room', '1752408235012_Kitchen.jpg', 'Kitchen Room', 'Active'),
(20, 1, 'Event Hall', '497138507020_ConferenceHall.jpg', 'Event Hall', 'Active'),
(21, 2, 'Ourdoor Walking Area', '1011139216aa3.jpg', 'Ourdoor Walking Area', 'Active'),
(22, 2, 'Building Side view', '12735952AA-BuildingSideView.jpg', 'Building Side view', 'Active'),
(23, 8, 'Children Prayer Activities', '1298357379AA-ChildrenPrayer.jpg', 'Children Prayer Activities', 'Active'),
(24, 8, 'Children with School uniform', '643567775AA-ChildrenToSchoolMarch.jpg', 'Children with School uniform', 'Active'),
(25, 7, 'Gents Block', '951957504AA-Gentsblock.jpg', 'Gents Block', 'Active'),
(26, 6, 'Ladies Living Room Area', '1139901574AA-WomensBlock.jpg', 'Ladies Living Room Area', 'Active'),
(27, 3, 'Tushara Gowri presented her 132nd Programme', '2121325912Tushara Gowri presented her 132nd Programm.jpg', 'Tushara Gowri presented her 132nd Programme', 'Active');



CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `staff_type` varchar(20) NOT NULL,
  `staff_name` varchar(56) NOT NULL,
  `login_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `staff` (`staff_id`, `staff_type`, `staff_name`, `login_id`, `password`, `status`) VALUES
(2, 'Admin', 'admin', 'admin', 'adminadminadmin', 'Active'),
(3, 'Admin', 'Pratik mahajan', 'admin', 'admin', 'Active'),
(4, 'Employee ', 'arun ', 'karan', 'kkkk', 'Active'),
(5, 'Volunteer', 'Yogesh Patil ', 'Yogesh@722', 'Yogesh@722', 'Active');


ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);


ALTER TABLE `fund_collection`
  ADD PRIMARY KEY (`fund_collection_id`);


ALTER TABLE `fund_raiser`
  ADD PRIMARY KEY (`fund_raiser_id`);


ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);


ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

ALTER TABLE `donor`
  MODIFY `donor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;


ALTER TABLE `fund_collection`
  MODIFY `fund_collection_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;


ALTER TABLE `fund_raiser`
  MODIFY `fund_raiser_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;


ALTER TABLE `photo`
  MODIFY `photo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;


--
ALTER TABLE `staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

