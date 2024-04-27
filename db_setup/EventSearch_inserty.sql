INSERT INTO Cities (name, province, size) VALUES 
('Warszawa', 'Mazowieckie', 517_000),
('Kraków', 'Małopolskie', 308_000),
('Wrocław', 'Dolnośląskie', 292_000);

INSERT INTO Participants (name, type) VALUES 
('Jan Kowalski', 'osoba fizyczna'),
('Firma XYZ', 'firma'),
('Anna Nowak', 'osoba fizyczna');

INSERT INTO Tags (name) VALUES 
('koncert'),
('sport'),
('kultura');

INSERT INTO Users (first_name, second_name, last_name, login) VALUES 
('Adam', 'Nowak', 'Kowalski', 'adam123'),
('Ewa', 'Kowalska', 'Wiśniewska', 'ewa456'),
('Piotr', 'Lewandowski', 'Nowak', 'piotr789');

INSERT INTO Events (name, is_deleted, event_date, event_city_id, type, location, cena, short_desc, long_desc, creator_id, create_date, Operation_date) VALUES 
('Koncert rockowy', false, '2024-05-10 20:00:00', 1, 'koncert', 'Stadion Narodowy', 120.50, 'Najlepszy koncert roku!', 'Opis długi o wydarzeniu...', 1, NOW(), NOW()),
('Turniej piłki nożnej', false, '2024-06-15 14:00:00', 2, 'sport', 'Stadion Cracovii', 50.00, 'Turniej dla amatorów i profesjonalistów', 'Opis długi o wydarzeniu...', 2, NOW(), NOW()),
('Wystawa sztuki', false, '2024-07-20 10:00:00', 3, 'kultura', 'Galeria Sztuki Współczesnej', 0.00, 'Przegląd najnowszych dzieł sztuki', 'Opis długi o wydarzeniu...', 3, NOW(), NOW());

INSERT INTO EventsParticipants (event_id, participant_id) VALUES 
(1, 1),
(2, 2),
(3, 3);

INSERT INTO EventsTags (event_id, tag_id) VALUES 
(1, 1),
(2, 2),
(3, 3);

INSERT INTO UsersEvents (user_id, event_id) VALUES 
(1, 1),
(2, 2),
(3, 3);
