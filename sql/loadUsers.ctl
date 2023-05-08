LOAD DATA
INFILE '../data/users6.csv'
APPEND INTO TABLE users
FIELDS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
(
 	user_id,
	username, 
	upassword, 
	first_name, 
	last_name, 
	birthday "TO_DATE(:birthday, 'YYYY-MM-DD')",
	uheight, 
	uweight, 
	bmi, 	
	num_preg TERMINATED BY '\r'
)
