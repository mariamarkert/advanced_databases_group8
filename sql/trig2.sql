
CREATE OR REPLACE SEQUENCE cycle_id_seq
  START WITH 1283
  INCREMENT BY 1
  NOCACHE
  NOCYCLE;
/
CREATE OR REPLACE SEQUENCE user_cycle_id_seq;
/
CREATE OR REPLACE TRIGGER cycle_id_trigger
BEFORE INSERT ON cycle
FOR EACH ROW
BEGIN
    :new.cycle_id := cycle_id_seq.nextval;
    :new.user_cycle_id := user_cycle_id_seq.nextval;
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

CREATE OR REPLACE TRIGGER cycle_id_trigger
BEFORE INSERT ON cycle
FOR EACH ROW
DECLARE
    last_user_cycle_id NUMBER;
BEGIN
    -- Get the user_id of the current cycle
    DECLARE
      current_user_id NUMBER;
    BEGIN
      SELECT user_id INTO current_user_id FROM users WHERE user_name = :new.user_name;
    EXCEPTION
      WHEN NO_DATA_FOUND THEN
        RAISE_APPLICATION_ERROR(-20001, 'User not found');
    END;

    -- Get the user_cycle_id of the last cycle for this user
    SELECT user_cycle_id INTO last_user_cycle_id
    FROM cycle
    WHERE user_id = current_user_id
    ORDER BY period_end DESC
    FETCH FIRST 1 ROW ONLY;
  
    -- Increment the last user_cycle_id and assign it to the new cycle
    :new.user_cycle_id := COALESCE(last_user_cycle_id, 0) + 1;
END;
/


