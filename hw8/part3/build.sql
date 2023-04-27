set serveroutput on

prompt ** Part 3 **


prompt ** Calling the package
@fbpack


prompt ** Calling the package body
@fbpackbody

prompt ** Testing the package
prompt Your options for unit are S, O, D
prompt These stand for special teams, offense, and defense
prompt
@unitpack_test

prompt ** Testing the functions
prompt Please enter a roster id to get the unit for the player
@unipack_func_test

prompt Please enter a position to get the num of players for that position
@pos_fuc_test
