load data infile 'data/roster.csv'
insert into table roster
fields terminated by "," optionally enclosed by '"'
(jersnum,pname,posab,city,state)
