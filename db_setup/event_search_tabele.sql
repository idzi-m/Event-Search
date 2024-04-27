create table Cities(
	id serial primary key,
	name varchar(50),
	province varchar(50),
	size int
	
);

create table Participants(
	id serial primary key,
	name varchar(50),
	type varchar(50)
	
);

create table Tags(
	id serial primary key,
	name varchar(30)
	
);

create table Users(
	id serial primary key,
	first_name varchar(50),
	second_name varchar(50),
	last_name varchar(50),
	login varchar(50),
	password varchar(50)
);


create table Events(
	id serial primary key,
	name varchar(100),
	is_deleted bool,
	event_date timestamp,
	event_city_id int,
	type varchar(50),
	location varchar(50),
	cena real,
	short_desc varchar(150),
	long_desc varchar(2000),
	creator_id int,
	create_date timestamp,
	Operation_date timestamp,
	foreign key (event_city_id) references Cities(id),
	foreign key (creator_id) references Users(id)
);

create table EventsParticipants(
	id serial primary key,
	event_id int,
	participant_id int,
	foreign key (event_id) references Events(id),
	foreign key (participant_id) references Participants(id)
	
);

create table EventsTags(
	id serial primary key,
	event_id int,
	tag_id int,
	foreign key (event_id) references Events(id),
	foreign key (tag_id) references Tags(id)
	
);

create table UsersEvents(
	id serial primary key,
	user_id int,
	event_id int,
	foreign key (user_id) references Users(id),
	foreign key (event_id) references Events(id)
	
);
