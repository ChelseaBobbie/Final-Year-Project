-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 05:18 PM
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
-- Database: `survey_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `service` text NOT NULL,
  `branch` text NOT NULL,
  `question` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

Ghana Educational Services
    Ghana Health Services
       DVLA Services
        Passport Offices
        Ghana Immigration Services



        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              <h1>View Data Graphs</h1>
              <form id="criteriaForm">
                  <label for="service">Select Service:</label>
                  <select id="service" name="service">
                      <option value="Ghana Educational Services">Ghana Educational Services</option>
                      <option value="Ghana Health Services">Ghana Health Services</option>
                      <option value="DVLA Services">DVLA Services</option>
                      <option value="Passport Offices">Passport Offices</option>
                      <option value="Ghana Immigration Services">Ghana Immigration Services</option>
                     
                  </select>
          
                  <label for="branch">Select Branch:</label>
                  <select id="branch" name="branch">
                    <option value="GES Headquarters, Accra">Ghana Educational Services</option>
                    <option value="GES Regional Office, Accra">GES Regional Office, Accra</option>
                    <option value="GES Korle Klottey Office, Accra">GES Korle Klottey Office, Accra</option>
                    <option value="Komfo Anokye Teaching Hospital, Kumasi">Komfo Anokye Teaching Hospital, Kumasi</option>
                    <option value="Korle-Bu Teaching Hospital, Accra">Korle-Bu Teaching Hospital, Accra</option>
                    <option value="Tamale Teaching Hospital, Tamale">Tamale Teaching Hospital, Tamale</option>
                    <option value="DVLA 37 Branch, Accra">DVLA 37 Branch, Accra</option>
                    <option value="DVLA, Kuntunse">DVLA, Kuntunse</option>
                    <option value="Passport Office Headquarters, Accra">Passport Office Headquarters, Accra</option>
                    <option value="Passport Office Premium Services, Accra">Passport Office Premium Services, Accra</option>
                    <option value="Ghana Immigration Services Headquarters, Accra">Ghana Immigration Services Headquarters, Accra</option>
                    <option value="Ghana Immigration Services Airport Branch, Accra">Ghana Immigration Services Airport Branch, Accra</option>
                   

                  </select>
          
                  <label for="question">Select Question:</label>
                  <select id="question" name="question">
                    <option value="What is your age?">What is your age?</option>
                    <option value="What is your income per month?">What is your age?</option>
                    <option value="What is your gender?">What is your age?</option>
                    <option value="What is your education level?">What is your age?</option>
                    <option value="What is your location?">What is your age?</option>
                    <option value="What is your ethnicity?">What is your age?</option>
                    <option value="Do you believe the public service institution is easily accessible from your home?">What is your age?</option>
                    <option value="Does the institution provide all the services it advertises?">Does the institution provide all the services it advertises?</option>
                    <option value="How easy is it to get an appointment at the institution when needed?">How easy is it to get an appointment at the institution when needed?</option>
                    <option value="Are the staff at the institution knowledgeable and able to assist you efficiently?">Are the staff at the institution knowledgeable and able to assist you efficiently?</option>
                    <option value="Do you feel that the waiting times at this institution are reasonable?">Do you feel that the waiting times at this institution are reasonable?</option>
                    <option value="Are the facilities at the institution modern and functional?">Are the facilities at the institution modern and functional?</option>
                    <option value="In your view, how frequently does corruption take place within this public service institution?">In your view, how frequently does corruption take place within this public service institution?</option>
                    <option value="In your experience, how transparent are the procedures at this institution?">In your experience, how transparent are the procedures at this institution?</option>
                    <option value="Have you or someone you know ever been asked for a bribe or favor in exchange for services from this institution?">Have you or someone you know ever been asked for a bribe or favor in exchange for services from this institution?</option>
                    <option value="How would you rate the fairness of service delivery at this institution?">How would you rate the fairness of service delivery at this institution?</option>
                    <option value="How much time did it take to get attended to at this institution?">How much time did it take to get attended to at this institution?</option>
                    <option value="Do you believe that there is a bias towards certain groups of people in terms of the treatment they receive within this organization?">Do you believe that there is a bias towards certain groups of people in terms of the treatment they receive within this organization?</option>
                    <option value="How often do you think the leadership of this institution engages in corrupt practices?">How often do you think the leadership of this institution engages in corrupt practices?</option>
                  </select>
          
                  <button type="button" onclick="fetchData()">View Graph</button>
              </form>
          
              <canvas id="myChart" width="10px" height="10px"></canvas>
   