declare 
	count_by_pos int;
	posab roster.posab%type := '&Position';

begin
		count_by_pos := unitpack.getCountByPosition(posab);
	if count_by_pos is null then
		dbms_output.put_line('Error');
	else
		dbms_output.put_line(''); 
    	dbms_output.put_line('Number of players in ' || posab || ' position: ' || count_by_pos);
	end if;
  
end;
/
