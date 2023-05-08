LOAD DATA
INFILE '../data/exercises.csv'
APPEND INTO TABLE exercise
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
(
 	ex_id, 
	ex_name, 
	ex_type, 
	ex_desc, 
	ideal_stage_id TERMINATED BY '\r')
