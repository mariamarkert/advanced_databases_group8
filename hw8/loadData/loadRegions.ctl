LOAD DATA
INFILE 'data/regions.csv'
APPEND INTO TABLE regions
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
TRAILING NULLCOLS
(
  regcode,
  regname
)
