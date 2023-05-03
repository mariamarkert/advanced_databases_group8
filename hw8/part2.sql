select * from
(select p.unit as u, r.regname as region
from roster y, positions p, states s, regions r
where s.regcode = r.regcode and
	y.state = s.stcode and
	y.posab = p.posab
)
pivot
(
	count(u)
	for u in ('O' as "Offense",'D' as "Defense",'S' as "Special Teams")
)
ORDER BY region;



