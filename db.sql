CREATE TABLE users(  
    id int NOT NULL AUTO_INCREMENT,  
    f_name varchar(45) NOT NULL,
    l_name varchar(45) NOT NULL,
    email varchar(45) NOT NULL,
    phone varchar(45) NOT NULL,
    last_signin datetime NOT NULL,    
    PRIMARY KEY (id)  
);

INSERT INTO users
(id, f_name, l_name, email, phone, last_signin)
VALUES(1, "maurice", "oyugi", "0712930121", 2025-01-30-00-47-00);

CREATE TABLE auth(
    id int NOT NULL AUTO_INCREMENT,
    last_signin datetime NOT NULL,
    signin_attempt datetime not null,
    sign_up_date datetime not null
);
