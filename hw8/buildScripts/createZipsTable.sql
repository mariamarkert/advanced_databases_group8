CREATE TABLE zips (
    zip number(5) PRIMARY KEY, 
    stcode varchar(2) NOT NULL, 
    city varchar(30),
    CONSTRAINT fk_stcode FOREIGN KEY (stcode) REFERENCES states(stcode)
);
