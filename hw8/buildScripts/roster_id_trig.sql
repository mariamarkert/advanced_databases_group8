create or replace trigger roster_id_trig
	before insert
	on roster
	for each row
begin
	select (rosterseq.nextval) into :new.roster_id
	from dual;
end;
/
exit;
