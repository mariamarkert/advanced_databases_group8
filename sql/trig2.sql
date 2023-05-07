drop TRIGGER update_cycle_length;
drop TRIGGER cycle_id_trigger;
drop SEQUENCE cycle_id_seq;
drop SEQUENCE user_cycle_id_seq;
/
CREATE SEQUENCE cycle_id_seq
  START WITH 1283
  INCREMENT BY 1
  NOCACHE
  NOCYCLE;
/


CREATE OR REPLACE TRIGGER cycle_id_trigger
BEFORE INSERT ON cycle
FOR EACH ROW
DECLARE
   last_user_cycle_id NUMBER;
BEGIN
   SELECT NVL(MAX(user_cycle_id), 0) INTO last_user_cycle_id
   FROM cycle
   WHERE user_id = :new.user_id;
   :new.user_cycle_id := last_user_cycle_id + 1;
   :new.cycle_id := cycle_id_seq.nextval;
   :new.cycle_length := NULL;
END;
/
CREATE OR REPLACE TRIGGER update_cycle_length
BEFORE INSERT ON cycle
FOR EACH ROW
DECLARE
    prev_cycle_period_end DATE;
BEGIN
    SELECT MAX(period_end) INTO prev_cycle_period_end
    FROM cycle
    WHERE user_id = :new.user_id
      AND period_end < :new.period_start;

    IF prev_cycle_period_end IS NOT NULL THEN
        UPDATE cycle
        SET cycle_length = :new.period_start - prev_cycle_period_end
        WHERE user_id = :new.user_id
          AND period_end = prev_cycle_period_end;
    END IF;
END;


/






