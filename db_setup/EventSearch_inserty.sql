
INSERT INTO Users (first_name, second_name, last_name, login, pass) VALUES 
('Adam', 'Borys', 'Kowalski', 'adam123', 'qwer!@#$','Poznań','3433345123','test@dsdasd','1990-01-01','Mężczyzna'),
('Katarzyna', 'Anna', 'Nowak', 'kasia123', 'qwer!@#$','Warszawa','3433345123','test@dsdasd','1990-01-01','Kobieta'),
('Jan', 'Paweł', 'Kowalczyk', 'jan123', 'qwer!@#$','Kraków','3433345123','test@dsdasd','1990-01-01','Mężczyzna'),
('Ewa', 'Magda', 'Wiśniewska', 'ewa456', 'qwer!@#$','Wrocław','3433345123','test@dsdasd','1990-01-01','Kobieta'),
('Piotr', null, 'Nowak', 'piotr678', 'qwer!@#$','Gdańsk','3433345123','test@dsdasd','1990-01-01','Mężczyzna'),
('Joachim', null, 'Tester', 'qwer', 'qwer!@#$','Poznań','3433345123','test@dsdasd','1990-01-01','No-binary');


INSERT INTO Events (name, is_deleted, event_date, event_city, type, location, cena, short_desc, long_desc, creator_id, create_date, Operation_date) VALUES 
('Koncert rockowy', false, '2024-05-10 20:00:00', 'Warszawa', 'koncert', 'Stadion Narodowy', 120.50, 'Najlepszy koncert roku!', 'Opis długi o wydarzeniu...', 1, NOW(), NOW()),
('Turniej piłki nożnej', false, '2024-06-15 14:00:00', 'Kraków', 'sport', 'Stadion Cracovii', 50.00, 'Turniej dla amatorów i profesjonalistów', 'Opis długi o wydarzeniu...', 2, NOW(), NOW()),
('Wystawa sztuki', false, '2024-07-20 10:00:00', 'Gdańsk', 'kultura', 'Galeria Sztuki Współczesnej', 0.00, 'Przegląd najnowszych dzieł sztuki', 'Opis długi o wydarzeniu...', 3, NOW(), NOW()),
('Sesja fotograficzna', false, '2024-05-25 14:00:00', 'Poznań', 'sztuka', 'Studio Fotograficzne', 200.00, 'Profesjonalna sesja dla każdego', 'Opis długi o wydarzeniu...', 4, NOW(), NOW()),
('Warsztaty gotowania', false, '2024-06-05 18:00:00', 'Wrocław', 'kulinaria', 'Centrum Kulinarny', 80.00, 'Naucz się gotować jak szef kuchni', 'Opis długi o wydarzeniu...', 1, NOW(), NOW()),
('Konferencja IT', false, '2024-07-10 09:00:00', 'Łódź', 'technologia', 'Centrum Konferencyjne', 150.00, 'Najnowsze trend w technologii', 'Opis długi o wydarzeniu...', 1, NOW(), NOW()),
('Festiwal filmowy', false, '2024-08-15 17:00:00', 'Szczecin', 'film', 'Kino Nowe Horyzonty', 70.00, 'Przegląd najnowszych produkcji filmowych', 'Opis długi o wydarzeniu...', 2, NOW(), NOW()),
('Targi książki', false, '2024-09-20 10:00:00', 'Bydgoszcz', 'literatura', 'Hala Expo', 0.00, 'Spotkaj ulubionych autorów', 'Opis długi o wydarzeniu...', 4, NOW(), NOW()),
('Koncert jazzowy', false, '2024-10-05 19:30:00', 'Katowice', 'muzyka', 'Teatr Muzyczny', 100.00, 'Wieczór pełen rytmów jazzowych', 'Opis długi o wydarzeniu...', 2, NOW(), NOW()),
('Maraton biegowy', false, '2024-11-10 08:00:00', 'Gdynia', 'sport', 'Miasto Park', 20.00, 'Przebiegnij 42 km dla zdrowia', 'Opis długi o wydarzeniu...', 2, NOW(), NOW()),
('Wystawa fotografii', false, '2024-12-05 12:00:00', 'Częstochowa', 'sztuka', 'Muzeum Fotografii', 0.00, 'Przegląd najlepszych prac fotograficznych', 'Opis długi o wydarzeniu...', 1, NOW(), NOW()),
('Festiwal teatralny', false, '2025-01-15 15:00:00', 'Sopot', 'teatr', 'Teatr Narodowy', 90.00, 'Spektakle dla miłośników teatru', 'Opis długi o wydarzeniu...', 3, NOW(), NOW()),
('Pokaz mody', false, '2025-02-20 16:00:00', 'Olsztyn', 'moda', 'Centrum Modowe', 50.00, 'Najnowsze trendy w modzie', 'Opis długi o wydarzeniu...', 3, NOW(), NOW());   
