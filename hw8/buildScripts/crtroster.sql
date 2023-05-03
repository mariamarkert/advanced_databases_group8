drop table roster cascade constraints;

create table roster
	(roster_id number(3) PRIMARY KEY,
	 jersnum number(2),
	 pname varchar2(30),
	 posab varchar2(2),
	 city varchar2(30),
	 state varchar(2),
	 FOREIGN KEY (posab) references positions(posab),
	 FOREIGN KEY (state) references states(stcode));
exit;
/
