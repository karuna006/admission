-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `add_student`;
CREATE TABLE `add_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visited_date` varchar(255) DEFAULT NULL,
  `admitted_date` varchar(255) DEFAULT NULL,
  `admission_id` varchar(255) DEFAULT NULL,
  `candidate_name` varchar(255) DEFAULT NULL,
  `quota` varchar(255) DEFAULT NULL,
  `community` varchar(255) DEFAULT NULL,
  `12th` varchar(255) DEFAULT NULL,
  `course_prefered` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `fathers_mobile` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `mothers_mobile` varchar(255) DEFAULT NULL,
  `candidate_email` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `parent_occupation` varchar(255) DEFAULT NULL,
  `mark_details` varchar(255) DEFAULT NULL,
  `name_of_school` varchar(255) DEFAULT NULL,
  `medium_of_instruction` varchar(255) DEFAULT NULL,
  `maths` varchar(255) DEFAULT NULL,
  `physics` varchar(255) DEFAULT NULL,
  `chemistry` varchar(255) DEFAULT NULL,
  `perc_of_pcm` varchar(255) DEFAULT NULL,
  `cutoff` varchar(255) DEFAULT NULL,
  `twelth_total` varchar(255) DEFAULT NULL,
  `tenth_total` varchar(255) DEFAULT NULL,
  `bus_hostel` varchar(255) DEFAULT NULL,
  `bus_stop` varchar(255) DEFAULT NULL,
  `tution_fees` varchar(255) DEFAULT NULL,
  `accessory_fees` varchar(255) DEFAULT NULL,
  `hostel_fees` varchar(255) DEFAULT NULL,
  `bus_fees` varchar(255) DEFAULT NULL,
  `total_fees` varchar(255) DEFAULT NULL,
  `firstgraduate_amount` varchar(255) DEFAULT NULL,
  `special_relaxation` varchar(255) DEFAULT NULL,
  `advance_paid` varchar(255) DEFAULT NULL,
  `bal_to_pay` varchar(255) DEFAULT NULL,
  `counselling_consortium` varchar(255) DEFAULT NULL,
  `consortium` varchar(255) DEFAULT NULL,
  `counselling_date` varchar(255) DEFAULT NULL,
  `counselling_time` varchar(255) DEFAULT NULL,
  `counselling_batch` varchar(255) DEFAULT NULL,
  `documents_submitted` varchar(255) DEFAULT NULL,
  `refered_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `add_student` (`id`, `visited_date`, `admitted_date`, `admission_id`, `candidate_name`, `quota`, `community`, `12th`, `course_prefered`, `dob`, `fathers_name`, `fathers_mobile`, `mothers_name`, `mothers_mobile`, `candidate_email`, `permanent_address`, `parent_occupation`, `mark_details`, `name_of_school`, `medium_of_instruction`, `maths`, `physics`, `chemistry`, `perc_of_pcm`, `cutoff`, `twelth_total`, `tenth_total`, `bus_hostel`, `bus_stop`, `tution_fees`, `accessory_fees`, `hostel_fees`, `bus_fees`, `total_fees`, `firstgraduate_amount`, `special_relaxation`, `advance_paid`, `bal_to_pay`, `counselling_consortium`, `consortium`, `counselling_date`, `counselling_time`, `counselling_batch`, `documents_submitted`, `refered_by`) VALUES
(3,	'2017-03-14',	'2017-03-16',	'17AG-1',	'M santhosh Kumar',	'govt_with_fg',	'MBC',	'Biology',	'AGRI',	'1999-12-22',	'p.murugesan',	'9578583304',	'M poongodi',	'8012918120',	'shanthoshvel@gmail.com',	'3/162,MGR Nager, Karuveppampatti(p.o),tiruchengodu,namakkal -637302',	'tea master',	'TN-stateboard',	'Goverment Boys Hr Sec school,tiruchengodu',	'English',	'',	'',	'',	'',	'',	'',	'423',	'Bus',	'',	'70000',	'8500',	'0',	'3000',	'81500',	'20000',	'0',	'5000',	'56500',	NULL,	'',	'',	'',	'',	'',	'5'),
(6,	'2017-04-03',	'2017-04-03',	'17EC-1',	'S. Lingaraju',	'govt_with_fg',	'BC',	'Biology',	'ECE',	'2000-04-05',	'Subbappa',	'9626143483',	'Ratnnamma',	'9487041692',	'',	'Madahalli, Chimatahalli (PO), Thalavadi',	'Kooli',	'TN-stateboard',	'Government Hr Sec School, Thalavadi',	'others',	'',	'',	'',	'',	'',	'',	'257',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'0',	'78500',	'Bus',	'',	'',	'',	'',	'cc,',	'6'),
(8,	'2017-04-03',	'2017-04-03',	'17EC-2',	'M. Shivaraju',	'govt_with_fg',	'BC',	'Biology',	'ECE',	'2000-02-12',	'Mallappa',	'9445158677',	'Neelamma',	'',	'',	'Tamilpuram, Chimatahally, Thalavadi',	'Kooli',	'TN-stateboard',	'',	'English',	'',	'',	'',	'',	'',	'',	'262',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'0',	'78500',	'Bus',	'',	'',	'',	'',	'cc,',	'6'),
(9,	'2017-04-03',	'2017-04-03',	'17CS-1',	'B. Subhash',	'govt_with_fg',	'BC',	'Biology',	'CSE',	'2000-04-29',	'H. Bangaru',	'9488204905',	'G. Rajamma',	'',	'',	'11/ 261 Doddagajanur, Thalavadi (TK), Erode',	'Kooli',	'TN-stateboard',	'Government Hr. Sec School, Thalavadi',	'others',	'',	'',	'',	'',	'',	'',	'413',	'Hostel',	'',	'44000',	'8500',	'40000',	'0',	'92500',	'20000',	'0',	'0',	'72500',	'Bus',	'',	'',	'',	'',	'cc,',	'6'),
(10,	'2017-04-03',	'2017-04-03',	'17CS-2',	'R. Siddaraj',	'govt_with_fg',	'BC',	'Biology',	'CSE',	'1998-06-13',	'Ramachandran',	'8098068086',	'Nagamma',	'',	'',	'1/50 Thalamalai, Erode',	'Kooli',	'TN-stateboard',	'Government Hr Sec School, Thalamalai',	'English',	'',	'',	'',	'',	'',	'',	'394',	'Hostel',	'',	'44000',	'8500',	'40000',	'0',	'92500',	'20000',	'0',	'0',	'72500',	'Bus',	'',	'',	'',	'',	'cc,',	'6'),
(11,	'2017-04-05',	'2017-04-05',	'17CS-3',	'R. Ajithkumar',	'management',	'SC',	'Biology',	'CSE',	'2000-06-22',	'Radhakrishnan',	'8778297364',	'',	'',	'',	'13/136 Koonaniyar St, Konnayar (PO), Tiruchengode (TK), Nammakal - 637 202',	'SERVICE WORKER',	'TN-stateboard',	'GOVERNMENT HR SEC SCHOOL, ELACHIPALAYAM',	'Tamil',	'',	'',	'',	'',	'',	'',	'414',	'Bus',	'',	'44500',	'8500',	'0',	'0',	'0',	'0',	'0',	'0',	'0',	'Hostel',	'',	'',	'',	'',	'ic,cc,',	'5'),
(12,	'2017-04-05',	'2017-04-05',	'17CS-4',	'A. VARUTHARAJ',	'management',	'SC',	'Biology',	'CSE',	'2000-04-04',	'ANNADURAI',	'9092319485',	'',	'',	'',	'13/110 SANTHAIPETTAI, KONNAIYUR, AYRTHAKUTTAI KUDITHERU, KONNAIYUR (po) TIRUCHENGODE, NAMMAKKAL',	'KOOLI',	'TN-stateboard',	'GOVT. HR SEC SCHOOL, ELACHIPALAYAM',	'Tamil',	'',	'',	'',	'',	'',	'',	'420',	'Bus',	'ELACHIPALAYAM',	'44000',	'8500',	'0',	'0',	'0',	'0',	'0',	'0',	'0',	'Hostel',	'',	'',	'',	'',	'ic,cc,',	'5'),
(13,	'2017-04-06',	'2017-04-06',	'17CS-5',	'I. ARJUN',	'management',	'SC',	'Computer_Science',	'CSE',	'2000-08-13',	'IYAPPAN',	'7639542040',	'VALLIAMMAL',	'8760797191',	'',	'3/239 AD COLONY, KILLKOTHAGIRI, SOLLURMATTAM - 643216',	'LABOUR',	'TN-stateboard',	'GOVT. HR. SEC. SCHOOL, KILLKOTHAGIRI',	'Tamil',	'',	'',	'',	'',	'',	'',	'438',	'Hostel',	'',	'44000',	'8500',	'40000',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(14,	'2017-04-08',	'2017-04-08',	'17CS-6',	'P. SATHISHKUMAR',	'govt_with_fg',	'BC',	'Biology',	'CSE',	'1999-07-30',	'V. PALANIVEL',	'9942627241',	'P. SUBAASANGEETHA',	'',	'',	'6/46 CSI COLONY, DEVANANKURICHI, TIRUCHENGODE.',	'LABOUR',	'TN-stateboard',	'GOVERNMENT HR. SEC. SCHOOL, DEVANNANKURICHI',	'Tamil',	'',	'',	'',	'',	'',	'',	'412',	'Bus',	'',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'1000',	'31500',	'Bus',	'',	'',	'',	'',	'',	'5'),
(15,	'2017-04-08',	'2017-04-08',	'17CS-7',	'R. RAMAN',	'management',	'SC',	'Computer_Science',	'CSE',	'2000-07-30',	'S. RAJAN',	'9500454181',	'R. MANJULA',	'',	'',	'9313 PUDHU COLONY, SHOLURMATTAM, KILLKOTHAGIRI.',	'KOOLI',	'TN-stateboard',	'GHSSCHOOL, KILLKOTHAGIRI',	'Tamil',	'',	'',	'',	'',	'',	'',	'419',	'Hostel',	'',	'44000',	'8500',	'40000',	'0',	'15000',	'0',	'0',	'1000',	'14000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(16,	'2017-04-08',	'2017-04-08',	'17ME-1',	'P. PRASANTH',	'govt_with_fg',	'MBC',	'Biology',	'MECH',	'2000-10-31',	'P. PRAKASH',	'',	'P. SANTHI',	'9843955289',	'',	'1/87 KILKOTHAGIRI BAZAR , KILKOTHAGIRI',	'KOOLI',	'TN-stateboard',	'GHS SCHOOL, KIL KOTHAGIRI',	'Tamil',	'',	'',	'',	'',	'',	'',	'459',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'1000',	'77500',	'Bus',	'',	'',	'',	'',	'',	'6'),
(17,	'2017-04-08',	'2017-04-08',	'17ME-2',	'S. SUNILKUMAR',	'govt_with_fg',	'OC',	'Computer_Science',	'MECH',	'1999-11-07',	'S. SELVAKUMAR',	'9487833080',	'S. RATHNA',	'8148894687',	'',	'2 / 702 KAMARAJAR  NAGAR, ARAVENU, KOTHAGIRI',	'',	'TN-stateboard',	'GHS SCHOOL KOTAGIRI',	'Tamil',	'',	'',	'',	'',	'',	'',	'410',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'1000',	'77500',	NULL,	'',	'',	'',	'',	'',	'6'),
(18,	'2017-04-08',	'2017-04-08',	'17ME-3',	'P. MURALITHARAN',	'management',	'SC',	'Biology',	'MECH',	'2000-07-05',	'A. PERIYASAMY',	'9786588082',	'P. ITHAYAMALAR',	'7867022960',	'',	'2/201 KIL KOTHAGIRI BAZAR, KIL KOTHAGIRI',	'COOLI',	'TN-stateboard',	'GHS SCHOOL ',	'Tamil',	'',	'',	'',	'',	'',	'',	'374',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'15000',	'0',	'0',	'1000',	'14000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(19,	'2017-04-10',	'2017-04-10',	'17ME-4',	'N. NIRANJAN',	'management',	'SC',	'Biology',	'MECH',	'2000-06-20',	'N. NAGARAJ',	'9940422973',	'N. GOMATHI',	'9940082937',	'',	'A4 HOUSING UNIT, POOLAMPATTI ROAD, EDAPADY',	'CIVIL SUPPLY DRIVER',	'TN-stateboard',	'MODEL SCHOOL,, CHETTIMANKURICHI',	'English',	'',	'',	'',	'',	'',	'',	'393',	'Bus',	'EDAPADY',	'50000',	'8500',	'0',	'0',	'0',	'0',	'0',	'0',	'0',	'Hostel',	'',	'',	'',	'',	'',	'5'),
(20,	'2017-04-14',	'2017-04-14',	'17EC-3',	'C. RENUGADEVI',	'management',	'SCA',	'Computer_Science',	'ECE',	'2000-09-29',	'CHINNUSAMY',	'9942625803',	'PAPPAL',	'',	'',	'143 mANJAKALPATTI, SANKAR (TK)',	'AGRI',	'TN-stateboard',	'GHS SCHOOL - SANKARI',	'Tamil',	'',	'',	'',	'',	'',	'',	'385',	'Bus',	'MANJAKALPATTI',	'50000',	'8500',	'0',	'0',	'58500',	'0',	'0',	'0',	'0',	'Hostel',	'',	'',	'',	'',	'',	'8'),
(21,	'2017-04-13',	'2017-04-14',	'17CS-8',	'R. SABITHA',	'management',	'SC',	'Computer_Science',	'CSE',	'2000-05-17',	'K. RATHINAM',	'9788871013',	'R. CHANDRA',	'',	'',	'NEW BUS STAND, KALUGUMEDU, SANKARI, SALEM.',	'LABOUR',	'TN-stateboard',	'GGHS SCHOOL, SANKARI',	'Tamil',	'',	'',	'',	'',	'',	'',	'381',	'Bus',	'',	'44000',	'8500',	'0',	'0',	'0',	'0',	'0',	'0',	'0',	'Hostel',	'',	'',	'',	'',	'',	'8'),
(22,	'2017-04-14',	'2017-04-14',	'17ME-5',	'S. PHRANESH',	'govt_without_fg',	'BC',	'Computer_Science',	'MECH',	'1999-09-11',	'R.P. SABAPATHY',	'9865256090',	'S. SAVITHIRY',	'',	'',	'PERYAMPALAYAM, PADAIVEEDU (PO), SANKARI WEST',	'BUSINESS',	'TN-stateboard',	'S.S.M. MATRICULATION HR SEC SCHOOL, KPM',	'English',	'',	'',	'',	'',	'',	'',	'9',	'Bus',	'KRP SCHOOL',	'50000',	'8500',	'0',	'0',	'58500',	'0',	'0',	'5000',	'53500',	'Bus',	'',	'',	'',	'',	'',	'Direct'),
(23,	'2017-04-12',	'2017-04-14',	'17CS-9',	'S. GOPINATH',	'govt_with_fg',	'MBC',	'Biology',	'CSE',	'2000-01-13',	'A. SOMASUNDHARAM',	'9659227081',	'S. SUMATHI',	'9659004041',	'',	'8/36 RASIPURAM MAIN ROAD, ELACHIPALAYAM, TIRUCHENGODE',	'LABOUR',	'TN-stateboard',	'GBHS SCHOOL - TIRUCHENGODE',	'Tamil',	'',	'',	'',	'',	'',	'',	'406',	'Bus',	'ELACHIPALAYAM',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'2000',	'30500',	'Bus',	'',	'',	'',	'',	'',	'5'),
(24,	'2017-04-15',	'2017-04-16',	'17AG-3',	'M. S. TEJASSVINI',	'management',	'BC',	'Biology',	'AGRI',	'2000-01-02',	'R. SARAVANAN',	'9444580175',	'M. SHAILAKSHMI',	'9489312370',	'',	'140/A2 KENNADY NAGAR IVTH ST, SALEM - 636 005',	'GOVT EMPLOYEE',	'TN-stateboard',	'VEDHA VIKAS HIGHER SECONDARY SCHOOL - SANTHIYUR ',	'English',	'',	'',	'',	'',	'',	'',	'478',	'Bus',	'SALEM',	'80000',	'8500',	'0',	'0',	'88500',	'0',	'0',	'10000',	'78500',	'Hostel',	'',	'',	'',	'',	'',	'8'),
(25,	'2017-04-16',	'2017-04-16',	'17EC-4',	'S. ARUNKUMAR',	'management',	'SC',	'Biology',	'ECE',	'2000-04-08',	'SURESH',	'7639205866',	'DEIVANAI',	'9786070677',	'',	'2/249 BHARATHI NAGAR, ELADA, KODANADU',	'KOOLI',	'TN-stateboard',	'GHS SCHOOL - ELADA',	'Tamil',	'',	'',	'',	'',	'',	'',	'374',	'Hostel',	'',	'0',	'0',	'0',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(26,	'2017-04-16',	'2017-04-16',	'17EC-5',	'K. SURYA',	'management',	'SC',	'Biology',	'ECE',	'2000-05-16',	'KANAGARAJ',	'9843775090',	'MAHESHWERI',	'9655270955',	'',	'210 SIDCO, COIMBATORE THANNEER THOTAM, ECHANARY',	'KOOLI',	'TN-stateboard',	'GHS SCHOOL - ELADA',	'Tamil',	'',	'',	'',	'',	'',	'',	'356',	'Hostel',	'',	'0',	'0',	'0',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(27,	'2017-04-05',	'2017-04-17',	'17AG-4',	'S. RANJITH',	'govt_with_fg',	'BC',	'Biology',	'AGRI',	'1999-10-10',	'S. SHANDRASEKAR',	'9865660918',	'S. KAMALA',	'',	'',	'158/C RAJAVINAYAGAR KOVIL ST, UDAIYARPETTAI, B. KOMARAPALAYAM',	'AUTO DRIVER',	'TN-stateboard',	'HOLY CROSS MATRIC HR. SEC SCHOOL, KOMARAPALAYAM',	'English',	'',	'',	'',	'',	'',	'',	'434',	'Bus',	'KOMARAPALAYAM',	'70000',	'8500',	'0',	'0',	'78500',	'20000',	'0',	'5000',	'53500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(28,	'2017-04-05',	'2017-04-15',	'17AG-5',	'K. RAVI CHANDRAN',	'management',	'SC',	'Biology',	'AGRI',	'1999-12-31',	'S. KUPPAN',	'9942180197',	'K. PREMA',	'9942119981',	'',	'PULIYAMPATTI METTU VALAU, PULLAKAUNTAMPATTI, SALEM',	'DRIVER',	'TN-stateboard',	'NEW IDEAL HR SEC SCHOOL',	'Tamil',	'',	'',	'',	'',	'',	'',	'413',	'Bus',	'KUMARAPALAYAM',	'80000',	'8500',	'0',	'0',	'0',	'0',	'0',	'5000',	'-5000',	'Hostel',	'',	'',	'',	'',	'',	'9'),
(29,	'2017-04-19',	'2017-04-19',	'17CS-10',	'S.KEERTHIKA',	'management',	'SCA',	'Computer_Science',	'CSE',	'2000-12-03',	'P.SAKTHIVEL',	'9865951355',	'S.SUSEELA',	'8300314355',	'',	'VELLAMAVALASU, MOLAPARAI KADU, DEVANNA KAVANDANOOR (P.O), SANKARI (T.K), SALEM (D.T)',	'BUSINESS',	'TN-stateboard',	'GOVERNMENT GIRLS HIGHER SECONDARY SCHOOL, SANKARI',	'Tamil',	'',	'',	'',	'',	'',	'',	'371',	'Bus',	'VELAMAVALASU',	'44000',	'8500',	'0',	'0',	'0',	'0',	'0',	'2000',	'-2000',	'Hostel',	'',	'',	'',	'',	'',	'Direct'),
(30,	'2017-04-18',	'2017-04-18',	'17CS-11',	'V. NISHA',	'management',	'SCA',	'Biology',	'CSE',	'2000-03-24',	'VENKATASALAM',	'9659445728',	'SIVAKAMI',	'',	'',	'VELLAMMAVALASU, MOLAPARAIKADU, DEVANNAKAVUDANUR (PO), SANKARI (TK), SALEM DT',	'SECURITY',	'TN-stateboard',	'G.G.H.S. SCHOOL, SANKARI',	'Tamil',	'',	'',	'',	'',	'',	'',	'436',	'Bus',	'VELLAMMAVALASU',	'44000',	'8500',	'0',	'0',	'52500',	'0',	'0',	'1000',	'51500',	'Hostel',	'',	'',	'',	'',	'',	'10'),
(31,	'2017-04-16',	'2017-04-16',	'17EC-6',	'M. CHANDRU',	'management',	'SC',	'EM',	'ECE',	'1999-11-26',	'L. MARIMUTHU',	'8110062137',	'M. SAROJA',	'9445832658',	'',	'K.K NAGAR, KAIRBETTA ESTATE, DONINGTAN, KOTAGIRI',	'COOLI',	'TN-stateboard',	'GOVT. HR. SEC. SCHOOL - KOTAGIRI',	'Tamil',	'',	'',	'',	'',	'',	'',	'291',	'Hostel',	'',	'0',	'0',	'0',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(32,	'2017-04-03',	'2017-04-19',	'17CS-12',	'S. LINARAJU',	'management',	'SC',	'Computer_Science',	'CSE',	'2000-01-01',	'S. SIDDARAJU',	'9585647757',	'NEELAMMA. M',	'',	'',	'1/254 IGGALORE',	'COOLI',	'TN-stateboard',	'GOVT HR SEC SCHOOL - THALAVADI',	'Tamil',	'',	'',	'',	'',	'',	'',	'',	'Hostel',	'',	'44000',	'8500',	'0',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(33,	'2017-04-16',	'2017-04-19',	'17EC-7',	'N. SHIVAMURTHY',	'govt_with_fg',	'BC',	'Computer_Science',	'ECE',	'2000-06-01',	'NAGESHA. C',	'7639558100',	'SAROJA',	'',	'',	'22/11A NAYAKAR ST, PANAKAHALLY (PO), THALAVADY (TK)',	'COOLI',	'TN-stateboard',	'',	'Tamil',	'',	'',	'',	'',	'',	'',	'',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'0',	'78500',	'Bus',	'',	'',	'',	'',	'',	'6'),
(34,	'2017-04-20',	'2017-04-20',	'17CS-13',	'S. JEEVITHA',	'govt_with_fg',	'SCA',	'Biology',	'CSE',	'2000-10-07',	'M. SELLADURAI',	'9500658737',	'S. VASANTHAMANI',	'8754392808',	'',	'6/83 ARUNTHATHIYAR STREET, CHETTITHOTTAM, IRUKALUR (PO), SANGAKIRI, SALEM.',	'COOLI',	'TN-stateboard',	'GGHS SCHOOL - MALLASAMUDRAM',	'Tamil',	'',	'',	'',	'',	'',	'',	'393',	'Hostel',	'CHETTITHOTTAM',	'44000',	'8500',	'40000',	'0',	'92500',	'0',	'0',	'2000',	'90500',	NULL,	'',	'',	'',	'',	'',	'9'),
(35,	'2017-04-19',	'2017-04-19',	'17AG-6',	'M. MADHANKUMAR',	'govt_with_fg',	'BC',	'Biology',	'AGRI',	'2000-08-26',	'A. MANI',	'9500942210',	'M. THANGATHAL',	'9655188710',	'',	'4/2H WEST PERUMAL KOVIL ST, BALASAMUDRAM (PO), PALANI',	'FARMER',	'TN-stateboard',	'BHAARATH VIDHYA BHAVAN MATRIC HR. SEC. SCHOOL, PALANI.',	'English',	'',	'',	'',	'',	'',	'',	'467',	'Hostel',	'',	'70000',	'8500',	'40000',	'0',	'118500',	'20000',	'0',	'1000',	'97500',	'Bus',	'',	'',	'',	'',	'',	'12'),
(36,	'2017-04-20',	'2017-04-20',	'17AG-7',	'G. LALITHA',	'govt_with_fg',	'BC',	'Biology',	'AGRI',	'2000-05-04',	'R. GNANASEKAR',	'9894185082',	'G. JEYANTHI',	'9150363207',	'',	'5 - 68/2, FOURTH STREET, GANDHI NAGAR, KOMARAPALAYAM.',	'PRIVATE EMPLOYEE',	'TN-stateboard',	'S.S.M. LAKSHMI AMMAL MATRIC HR SEC SCHOOL - KOMARAPALAYAM',	'English',	'',	'',	'',	'',	'',	'',	'452',	'Bus',	'GANDI NAGAR',	'70000',	'8500',	'0',	'0',	'78500',	'20000',	'0',	'5000',	'53500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(37,	'2017-04-20',	'2017-04-20',	'17AG-8',	'T. NAVAMANIE SHRI DEVI',	'govt_with_fg',	'BC',	'Biology',	'AGRI',	'2000-01-07',	'R. THANGARAJU',	'-19842379853',	'T. SASIKAL',	'9150363201',	'',	'5 - 68/3 FOURTH ST, GANDHI NAGAR, KOMARAPALAYAM',	'PRIVATE EMPLOYEE',	'TN-stateboard',	'S.S.M LAXMI AMMAL MATRIC HR SEC SCHOOL.',	'English',	'',	'',	'',	'',	'',	'',	'486',	'Bus',	'GANDHI NAGAR',	'70000',	'8500',	'0',	'0',	'78500',	'20000',	'0',	'5000',	'53500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(38,	'2017-04-20',	'2017-04-20',	'17CS-14',	'S. S ARUNESWAR',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-01-16',	'S. SUNDARAMOORTHI',	'9677335711',	'S. NANDHINI',	'9629310125',	'',	'SELVAM STORES, K P & CO OPPOSITE, B. KOMARAPALAYAM',	'GENERAL STORES',	'TN-stateboard',	'J.K.K NATARAJA MAT. HR. SEC. SCHOOL',	'English',	'',	'',	'',	'',	'',	'',	'370',	'Bus',	'KOMARAPALAYAM NEW BRIDGE',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'2500',	'30000',	'Bus',	'',	'',	'',	'',	'',	'9'),
(39,	'2017-04-20',	'2017-04-20',	'17CS-15',	'P. PRIYADHARSHINI',	'govt_with_fg',	'MBC',	'Computer_Science',	'CSE',	'2000-11-08',	'K. PALANISAMY',	'8526926809',	'P. LATHA',	'7373581883',	'',	'V. VIJAYARAGAVAN VEEDU, 190 A - J K K NADARAJA NAGAR, KOMARAPALAYAM.',	'POWER LOOM',	'TN-stateboard',	'JKK RANGAMMAL GIRLS HR SEC SCHOOL.',	'Tamil',	'',	'',	'',	'',	'',	'',	'389',	'Bus',	'SARAVANA THEATER',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'3000',	'29500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(40,	'2017-04-12',	'2017-04-20',	'17CS-16',	'S. SANGEETHAVANI',	'govt_without_fg',	'BC',	'Computer_Science',	'CSE',	'2000-06-26',	'SUBRAMANIYAN',	'9942761810',	'UMAMAHESWARI',	'8973410870',	'',	'3B PATTABI SANDHU, KOMARAPALAYAM',	'LABOUR',	'TN-stateboard',	'JKKRG HR SEC SCHOOL - KOMARAPALAYAM',	'Tamil',	'',	'',	'',	'',	'',	'',	'445',	'Bus',	'KOMARAPALYAM',	'44000',	'8500',	'0',	'0',	'52500',	'0',	'0',	'3000',	'49500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(41,	'2017-04-12',	'2017-04-20',	'17CS-17',	'S. SARANYAHEMAMALINI',	'govt_without_fg',	'BC',	'Computer_Science',	'CSE',	'2000-06-26',	'SUBRAMANIYAN. G',	'9942761810',	'S. UMAMAHESWARI',	'8973410870',	'',	'3B PATTABI SANDHU, KOMARAPALAYAM, ',	'LABOUR',	'TN-stateboard',	'',	'English',	'',	'',	'',	'',	'',	'',	'419',	'Bus',	'KOMARAPALAYAM',	'44000',	'8500',	'0',	'0',	'52500',	'0',	'0',	'3000',	'49500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(42,	'2017-04-17',	'2017-04-20',	'17CS-18',	'GOKUL RAJ. C',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-08-26',	'CHITRA SEKAR. V',	'9688779685',	'TAMIL SELVI. C',	'8973691985',	'',	'MUDALIYAR MARIAMMAN KOVIL OPP, ABIRAMI MALIKAI, KOMARAPALAYAM',	'MALIGAI SHOP',	'TN-stateboard',	'HOLY CROSS MATRIC HR SEC SCHOOL',	'English',	'',	'',	'',	'',	'',	'',	'343',	'Bus',	'KOMARAPALAYAM BUS STAND',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(43,	'2017-04-12',	'2017-04-21',	'17CS-19',	'M. REVATHI',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-05-24',	'MANICKAM',	'9042056515',	'NIRMALA',	'8760595290',	'',	'19F KATTUR VITTALAPURI - VEETHI, KOMARAPALAYAM',	'LABOUR',	'TN-stateboard',	'J K K R G HR. SEC. SCHOOL',	'Tamil',	'',	'',	'',	'',	'',	'',	'419',	'Bus',	'PALLIPALAYAM CORNER - KOMARAPALAYAM',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(44,	'2017-04-21',	'2017-04-21',	'17ME-6',	'P. GOKUL',	'govt_with_fg',	'MBC',	'Computer_Science',	'MECH',	'2000-03-05',	'K. PALANISAMY',	'9894600601',	'MAHESHWARI',	'9842003265',	'',	'263/5 TNEB QT, NEHRU NAGAR, METTUR DAM.',	'FOREMAN IN TNEB',	'TN-stateboard',	'GV HIGHER SECONDARY SCHOOL ',	'English',	'',	'',	'',	'',	'',	'',	'326',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'98500',	'20000',	'0',	'2000',	'76500',	'Bus',	'',	'',	'',	'',	'',	'13'),
(45,	'2017-04-20',	'2017-04-22',	'17CS-20',	'E. KAVIN KISHORE',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-04-09',	'EDVIN JOSH',	'9942590179',	'SHARMILA',	'8675438150',	'',	'THIRUNAGAR COLONY, TIRUCHENGODE',	'ELECTRICIAN',	'TN-stateboard',	'GBHS SCHOOL - TIRUCHENGODE',	'Tamil',	'',	'',	'',	'',	'',	'',	'422',	'Bus',	'TIRUCHENGODE',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'14'),
(46,	'2017-04-18',	'2017-04-22',	'17CS-21',	'S. SAKTHIVEL',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-07-28',	'D. SELVAM',	'9750498445',	'S.SANTHI',	'9942214093',	'',	'1/49 NATCHIMUTHUVEEDU, POLAKKATTUR, VEDIYARASAMPALAYAM, PALLIPALAYAM.',	'COOLI',	'TN-stateboard',	'GBHS SCHOOL, PALLIPALAYAM',	'Tamil',	'',	'',	'',	'',	'',	'',	'442',	'Bus',	'PALLIPALAYAM',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'9'),
(47,	'2017-04-24',	'2017-04-24',	'17ME-7',	'A. SAKTHIVEL',	'management',	'ST',	'Computer_Science',	'MECH',	'2000-05-01',	'ALAGAPAN',	'9524831934',	'LAKSHMI',	'9715016999',	'',	'3/104 MULAPANAGADU, KANAMOOCHI, SALEM',	'COOLI',	'TN-stateboard',	'G.H.S.SCHOOL -SENAMPATTI',	'Tamil',	'',	'',	'',	'',	'',	'',	'363',	'Hostel',	'',	'50000',	'8500',	'40000',	'0',	'15000',	'0',	'0',	'0',	'15000',	'Hostel',	'',	'',	'',	'',	'',	'6'),
(48,	'2017-04-07',	'2017-04-24',	'17CS-22',	'R. KOKILA',	'govt_without_fg',	'BC',	'Computer_Science',	'CSE',	'1999-11-26',	'K. RAGANATHAN',	'9842164626',	'R. THILAKA',	'9976261054',	'',	'M/189 WATER TANK, KOOTTAPPALLI, TIRUCHENGODE',	'DRIVER',	'TN-stateboard',	'GGHS SCHOOL - TIRUCHENGODE',	'Tamil',	'',	'',	'',	'',	'',	'',	'394',	'Bus',	'KOOTTAPALLI',	'44000',	'8500',	'0',	'0',	'52500',	'0',	'0',	'0',	'52500',	'Bus',	'',	'',	'',	'',	'',	'Direct'),
(49,	'2017-04-21',	'2017-04-24',	'17CS-23',	'G. KEERTHANA',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'2000-11-05',	'T.K. GNANAVEL',	'9976466527',	'G. CHITTRA',	'9942367527',	'',	'20/12B KUMARESAPURAM, TIRUCHENGODE',	'MACHANIC',	'TN-stateboard',	'MAHENDRA MATRIC HR. SEC. SCHOOL, KUMARAMANGALAM',	'English',	'',	'',	'',	'',	'',	'',	'402',	'Bus',	'KUMARESAPAURAM - T. GODE',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'5'),
(50,	'2017-04-21',	'2017-04-24',	'17CS-24',	'N. JEEVAPRIYA',	'govt_with_fg',	'BC',	'Computer_Science',	'CSE',	'1999-09-20',	'A. NATARAJAN',	'8526152303',	'N. GOMATHI',	'8508256797',	'',	'24/9 KUMARESHAPURAM, KOLIKALLNATHAMROAD, TIRUCHENGODE',	'BUSINESS',	'TN-stateboard',	'SENGUNTHAR MATRIC HR. SEC. SCHOOL - KUMARAMANGALAM',	'English',	'',	'',	'',	'',	'',	'',	'414',	'Bus',	'TIRUCHENGODE',	'44000',	'8500',	'0',	'0',	'52500',	'20000',	'0',	'5000',	'27500',	'Bus',	'',	'',	'',	'',	'',	'5');

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `userid`, `password`, `user_type`) VALUES
(1,	'sscet',	'sscet@123',	'user'),
(2,	'admin',	'admin@123',	'admin');

DROP TABLE IF EXISTS `refered`;
CREATE TABLE `refered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `refered` (`id`, `name`, `company_name`) VALUES
(5,	'K. Sivasubramaniyam',	'Elachipalayam'),
(6,	'Anbu / Gowtham',	'AG Educational Service'),
(8,	'S. Shankar',	'S2VR'),
(9,	'SASIKUMAR. V ',	'RUKKU EDUCATIONAL TRUST'),
(10,	'Sivashankar',	'Konganapuram'),
(12,	'KARUPPUSAMY - THENI',	''),
(13,	'THANGAVEL',	'SRI SAKTHI EDUCATIONAL SERVICE'),
(14,	'MURUGARAJA',	'MR - AP/CSE');

-- 2017-04-25 13:50:41
