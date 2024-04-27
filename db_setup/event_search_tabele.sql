USE eventsearch;
begin;
CREATE TABLE Users(
     id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    second_name VARCHAR(50),
    last_name VARCHAR(50),
    login VARCHAR(50),
    pass VARCHAR(50)
);
CREATE TABLE EVENTS(
     id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    is_deleted BOOLEAN,
    event_date DATETIME,
    event_city VARCHAR(50),
    type VARCHAR(50),
    location VARCHAR(50),
    cena REAL,
    short_desc VARCHAR(150),
    long_desc VARCHAR(2000),
    creator_id INT,
    create_date DATETIME,
    operation_date DATETIME,
    FOREIGN KEY(creator_id) REFERENCES Users(id)
);  
CREATE TABLE UsersEvents(
     id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    event_id INT,
    FOREIGN KEY(user_id) REFERENCES Users(id),
    FOREIGN KEY(event_id) REFERENCES EVENTS(id)
);
commit;