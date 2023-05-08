#!/bin/bash

sqlplus ramzi/ramzi <<EOF
DROP TRIGGER user_id_trigger;
drop TRIGGER update_cycle_length;
drop TRIGGER cycle_id_trigger;
drop SEQUENCE cycle_id_seq;
drop SEQUENCE user_cycle_id_seq;
drop TRIGGER update_cycle_length;

@drop_tables
@create_tables
exit
EOF
sqlldr ramzi/ramzi control=loadStages.ctl
sqlldr ramzi/ramzi control=loadUsers.ctl
sqlldr ramzi/ramzi control=loadCycles.ctl
sqlldr ramzi/ramzi control=loadNutr.ctl
sqlldr ramzi/ramzi control=loadExc.ctl

sqlplus ramzi/ramzi <<EOF
@trig
@trig2
@trig3
exit
EOF
