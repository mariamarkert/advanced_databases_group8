LOAD DATA
INFILE 'data/newzips.csv'
APPEND INTO TABLE zips
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
TRAILING NULLCOLS
(
  zip,
  stcode,
  city
)