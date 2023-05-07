DROP TRIGGER user_id_trigger;

CREATE SEQUENCE user_id_seq
  START WITH 129
  INCREMENT BY 1
  NOCACHE
  NOCYCLE;


CREATE OR REPLACE TRIGGER user_id_trigger
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
    SELECT user_id_seq.nextval INTO :new.user_id FROM dual;
END;
/
