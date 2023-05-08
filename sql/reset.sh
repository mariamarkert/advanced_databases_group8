#!/bin/bash

sqlplus timmy/timmy <<EOF
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
sqlldr timmy/timmy control=loadStages.ctl
sqlldr timmy/timmy control=loadUsers.ctl
sqlldr timmy/timmy control=loadCycles.ctl
sqlldr timmy/timmy control=loadNutr.ctl
sqlldr timmy/timmy control=loadExc.ctl

sqlplus timmy/timmy <<EOF
@trig
@trig2
@trig3
exit
EOF
