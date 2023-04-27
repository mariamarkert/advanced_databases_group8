declare 
	rid roster.roster_id%type := '&Roster_ID';
	unit positions.unit%type;
	pname roster.pname %type;

begin
	pname := unitpack.getName(rid);
	unit := unitpack.getUnit(rid);

	if unit is null then 
		dbms_output.put_line('There is no player with this roster_id');
	else
		dbms_output.put_line(''); 
		dbms_output.put_line('Roster ID ' || rid || ' is associated with: ');
		dbms_output.put_line(pname || ' in the ' || unit || ' unit');
	end if;
	
	  
end;
/
