#!/bin/bash

sqlplus ramzi/ramzi <<EOF
@create_tables
exit
EOF
sqlldr ramzi/ramzi control=loadStages.ctl
sqlldr ramzi/ramzi control=loadUsers.ctl
sqlldr ramzi/ramzi control=loadCycles.ctl
sqlldr ramzi/ramzi control=loadNutr.ctl
sqlldr ramzi/ramzi control=loadExc.ctl
