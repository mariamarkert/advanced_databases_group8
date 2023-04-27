LOAD DATA
INFILE 'data/statesinfo.csv'
APPEND INTO TABLE states
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
TRAILING NULLCOLS
(
  stcode,
  regcode,
  stname
)
