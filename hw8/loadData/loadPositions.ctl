load data infile 'data/positions.csv'
insert into table positions
fields terminated by "," optionally enclosed by '"'
(posab,pos,unit)
