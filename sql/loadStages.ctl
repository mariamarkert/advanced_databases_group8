LOAD DATA
INFILE '../data/stages.csv'
APPEND INTO TABLE stage
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
(
 	stage_id, 
	stg_name
)
