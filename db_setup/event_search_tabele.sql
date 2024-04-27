USE eventsearch;
CREATE TABLE Participants(
    id SERIAL PRIMARY KEY,
    NAME VARCHAR(50),
    TYPE VARCHAR(50)
); 
CREATE TABLE Tags(
    id SERIAL PRIMARY KEY,
    NAME VARCHAR(30)
);
CREATE TABLE Users(
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(50),
    second_name VARCHAR(50),
    last_name VARCHAR(50),
    login VARCHAR(50),
    pass VARCHAR(50)
);
CREATE TABLE EVENTS(
    id SERIAL PRIMARY KEY,
    NAME VARCHAR(100),
    is_deleted BOOLEAN,
    event_date DATETIME,
    event_city VARCHAR(50),
    TYPE VARCHAR(50),
    location VARCHAR(50),
    cena REAL,
    short_desc VARCHAR(150),
    long_desc VARCHAR(2000),
    creator_id INT,
    create_date DATETIME,
    operation_date DATETIME,
    FOREIGN KEY(creator_id) REFERENCES Users(id)
); 
CREATE TABLE EventsParticipants(
    id SERIAL PRIMARY KEY,
    event_id INT,
    participant_id INT,
    FOREIGN KEY(event_id) REFERENCES EVENTS(id),
    FOREIGN KEY(participant_id) REFERENCES Participants(id)
); 
CREATE TABLE EventsTags(
    id SERIAL PRIMARY KEY,
    event_id INT,
    tag_id INT,
    FOREIGN KEY(event_id) REFERENCES EVENTS(id),
    FOREIGN KEY(tag_id) REFERENCES Tags(id)
); 
CREATE TABLE UsersEvents(
    id SERIAL PRIMARY KEY,
    user_id INT,
    event_id INT,
    FOREIGN KEY(user_id) REFERENCES Users(id),
    FOREIGN KEY(event_id) REFERENCES EVENTS(id)
);
