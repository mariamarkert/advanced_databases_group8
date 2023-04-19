LOAD DATA
INFILE '../data/cleaned_cycles4.csv'
APPEND INTO TABLE cycle
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
(
 	cycle_id, 
	user_cycle_id,
	user_id, 
	cycle_length, 
	headache, 
	cramps, 
	nausea, 
	fatigue, 
	acne, 
	bloatng,
	period_start "TO_DATE(:period_start, 'YYYY-MM-DD')", 
	period_end "TO_DATE(:period_end, 'YYYY-MM-DD')" 
)
