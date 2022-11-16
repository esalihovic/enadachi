CREATE TABLE User(
       uid INT NOT NULL UNIQUE AUTO_INCREMENT,
       role_ VARCHAR(10) NOT NULL,
       username VARCHAR(20) NOT NULL UNIQUE,
       password(30) NOT NULL,
       
       PRIMARY KEY(uid)
);

CREATE TABLE Student(
    uid INT NOT NULL UNIQUE,
    sid INT NOT NULL UNIQUE AUTO_INCREMENT,
       
    f_name VARCHAR(20) NOT NULL,
    l_name VARCHAR(20) NOT NULL,
       
    PRIMARY KEY(sid),
    FOREIGN KEY(uid) REFERENCES User(uid)
);

CREATE TABLE Book(
    bid INT NOT NULL UNIQUE AUTO_INCREMENT,
    title VARCHAR(100),
    author VARCHAR(100),
    isbm INT(20),
    available BOOLEAN DEFAULT TRUE,

    PRIMARY KEY(bid)
);
CREATE TABLE Checks_availability_of(
    id INT NOT NULL AUTO_INCREMENT,
    sid INT NOT NULL,
    bid INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(sid) REFERENCES Student(sid),
    FOREIGN KEY(bid) REFERENCES Book(bid)
);