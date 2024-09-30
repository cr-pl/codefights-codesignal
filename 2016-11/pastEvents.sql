#155 chars
CREATE PROCEDURE pastEvents()
select name,event_date from
(
	select *,event_date e, (select max(event_date) from Events) m
 		from Events 
	
	
	order by -e 
) s
where e > m - INTERVAL 8 DAY	&& e!=m


/*
Tests
-- Dumping structure for table codefights.Events
CREATE TABLE IF NOT EXISTS `Events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE latin1_german1_ci NOT NULL,
  `event_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;


INSERT INTO `Events` (`id`, `name`, `event_date`) VALUES
	(1, 'TGIF', '2016-11-18'),
	(2, 'TGIF', '2016-11-11'),
	(3, 'Weekly team meeting', '2016-11-07'),
	(4, 'Weekly team meeting', '2016-11-14');

*/
/*
expected output:
name	event_date
Weekly team meeting	2016-11-14
TGIF	2016-11-11
*/
