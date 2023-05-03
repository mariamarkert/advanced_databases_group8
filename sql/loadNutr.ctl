LOAD DATA
INFILE '../data/nutrition.csv'
APPEND INTO TABLE nutrition
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
(
	nut_id, 
	nut_name, 
	nut_desc, 
	ideal_stage_id TERMINATED BY '\r'
)
