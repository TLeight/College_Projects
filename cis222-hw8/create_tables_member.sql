DROP TABLE IF EXISTS member;
CREATE TABLE member
    (
        member_id int not null auto_increment Primary Key,
        email varchar(40) not null,
        password varchar(40) not null
    );
    Insert INTO member(member_id, email, password) VALUES(null, 'admin@hfc.edu', 'password');
    Insert INTO member(member_id, email, password) VALUES(null, 'joe@email.com', 'joepass');
    Insert INTO member(member_id, email, password) VALUES(null, 'steve@email.com', 'stevepass');

