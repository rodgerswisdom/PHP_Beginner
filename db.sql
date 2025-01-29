--MySQL retrieves and displays DATETIME values in 'YYYY-MM-DD hh:mm:ss'--


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
VALUES(1, "maurice", "oyugi", "0712930121", '2025-01-30 00:52:00');

CREATE TABLE auth(
    id int NOT NULL AUTO_INCREMENT,
    user_id int,
    last_signin datetime NOT NULL,
    signin_attempt int not null,
    sign_up_date datetime not null,
    FOREIGN KEY (user_id) REFERENCES Persons (id)
);

insert into auth
VALUES(1,1,'2025-01-30 00:52:00',1, '2025-01-30 00:52:00');
