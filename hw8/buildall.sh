sqlplus ramzi/ramzi <<EOF
@buildScripts/buildTables
exit
EOF
sqlldr ramzi/ramzi control=loadData/loadRegions.ctl
sqlldr ramzi/ramzi control=loadData/loadStates.ctl
sqlldr ramzi/ramzi control=loadData/loadZips.ctl


sqlplus -S ramzi/ramzi @buildScripts/crtpositions
sqlldr ramzi/ramzi control=loadData/loadPositions.ctl

sqlplus -S ramzi/ramzi @buildScripts/crtroster
sqlplus -S ramzi/ramzi @buildScripts/rosterseq
sqlplus -S ramzi/ramzi @buildScripts/roster_id_trig
sqlldr ramzi/ramzi control=loadData/loadRoster.ctl 
