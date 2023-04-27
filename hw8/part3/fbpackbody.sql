create or replace package body unitpack
is
        function getUnit(id roster.roster_id%type)
                return positions.unit%type
        is
                unit positions.unit%type;
        begin
                select unit
                into unit
                from positions natural join roster
                where roster.roster_id = id;
                return unit;
        exception
                when no_data_found then
                dbms_output.put_line('Error getting unit: ' || id || ' not found');
                return null;
        end;

		function getName(id roster.roster_id%type)
			return roster.pname%type
		is 
			pname roster.pname%type;
		begin
			select pname 
			into pname 
			from roster
			where roster.roster_id = id;
			return pname;
        exception
                when no_data_found then
                dbms_output.put_line('Error getting name: ' || id || ' not found');
                return null;
        end;

		function getCountByPosition(posab roster.posab%type)
			return int
		is 
			cnt int;
		begin
			select count(*) 
			into cnt
			from roster
			where roster.posab = posab;
			return cnt;
        exception
                when no_data_found then
                dbms_output.put_line('Error getting position: ' || posab || ' not found');
                return null;
        end;

        procedure unit_players (u positions.unit%type)
        is
                cursor player_c (uu positions.unit%type)
                is
                select roster.roster_id, roster.pname, positions.unit
                from roster natural join  positions
                where positions.unit = u
                order by roster.pname;

                rid roster.roster_id%type;
                pname roster.pname%type;
                punit positions.unit%type;

                counter binary_integer := 0;

                nothing exception;

                begin
						dbms_output.put_line(u);
                        dbms_output.put_line('Unit Players on ' || u || ': ');
                        open player_c(u);

                        loop
                                fetch player_c into rid, pname, punit;
                                exit when player_c%notfound;
                                counter := counter+1;
                                dbms_output.put_line('  (id: ' || rid || ')    ' || pname);
                        end loop;
                        close player_c;
                        if counter = 0 then
                                raise nothing;
                        end if;

                exception
                        when nothing then
                                dbms_output.put_line('Invalid Unit - The options are S, D, O');
                        when no_data_found then
                                dbms_output.put_line('no players with that ID');
                end;

end unitpack;
/


