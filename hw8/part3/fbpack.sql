create or replace package unitpack
is
	function getUnit (id roster.roster_id%type)
		return positions.unit%type;

	function getName (id roster.roster_id%type)
		return roster.pname%type;

	function getCountByPosition (posab roster.posab%type)
		return int;


	procedure unit_players (u positions.unit%type);

end unitpack;
/
