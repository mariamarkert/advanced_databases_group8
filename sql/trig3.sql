CREATE OR REPLACE TRIGGER update_cycle_length
AFTER INSERT ON cycle
FOR EACH ROW
DECLARE
    prev_cycle_user_id cycle.user_id%TYPE := :new.user_id;
    prev_cycle_user_cycle_id cycle.user_cycle_id%TYPE;
BEGIN
    SELECT MAX(user_cycle_id) INTO prev_cycle_user_cycle_id
    FROM cycle
    WHERE user_id = prev_cycle_user_id
      AND period_end < :new.period_start;

    IF prev_cycle_user_cycle_id IS NOT NULL THEN
        UPDATE cycle
        SET cycle_length = :new.period_start - period_end
        WHERE user_id = prev_cycle_user_id
          AND user_cycle_id = prev_cycle_user_cycle_id;
    END IF;
END;
/
