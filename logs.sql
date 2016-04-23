CREATE TABLE `logs` (
  `ID` int(11) NOT NULL,
  `psn` text NOT NULL,
  `message` text NOT NULL,
  `ipaddress` text NOT NULL,
  `dateline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60303;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;