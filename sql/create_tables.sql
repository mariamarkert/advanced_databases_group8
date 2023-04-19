
create table stage(
	stage_id number(1) primary key, 
	stg_name varchar(15)
);

create table users(
	user_id int primary key,
	username varchar(20), 
	upassword varchar(20), 
	first_name varchar(15), 
	last_name varchar(15), 
	birthday date, 
	uheight NUMBER(4), 
	uweight NUMBER(4), 
	bmi float, 	
	num_preg int
);

create table cycle(
	cycle_id int primary key, 
	user_cycle_id int,
	user_id int not null, 
	cycle_length NUMBER(3), 
	headache NUMBER(1), 
	cramps NUMBER(1), 
	nausea  NUMBER(1), 
	fatigue NUMBER(1), 
	acne NUMBER(1), 
	bloatng NUMBER(1),
	period_start date, 
	period_end date,
    constraint fk_user_id foreign key (user_id) references users(user_id)
);

create table exercise(
	ex_id number(4) primary key, 
	ex_name varchar(20), 
	ex_type varchar(20), 
	ex_desc varchar(40), 
	ideal_stage_id number(1) not null,
	constraint fk_ex_ideal_stage_id foreign key (ideal_stage_id) references stage(stage_id)
);

create table nutrition(
	nut_id number(4) primary key, 
	nut_name varchar(20), 
	nutrient varchar(20), 
	macro varchar(12), 
	ideal_stage_id number(1) not null,
    constraint fk_nut_ideal_stage_id foreign key (ideal_stage_id) references stage(stage_id)
);
