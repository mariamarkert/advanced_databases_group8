CREATE TABLE states (
    stcode varchar(2) PRIMARY KEY, 
    regcode number(1) NOT NULL, 
    stname varchar(15),
    CONSTRAINT fk_regcode FOREIGN KEY (regcode) REFERENCES regions(regcode)
);
