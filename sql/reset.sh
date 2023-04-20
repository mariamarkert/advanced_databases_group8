#!/bin/bash

sqlplus timmy/timmy <<EOF
@drop_tables
@create_tables
exit
EOF
sqlldr timmy/timmy control=loadStages.ctl
sqlldr timmy/timmy control=loadUsers.ctl
sqlldr timmy/timmy control=loadCycles.ctl
sqlldr timmy/timmy control=loadNutr.ctl
sqlldr timmy/timmy control=loadExc.ctl
