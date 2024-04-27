use eventsearch;
DELIMITER //
CREATE OR ALTER PROCEDURE add_event(
    IN p_name VARCHAR(50), 
    IN p_event_date TIMESTAMP, 
    IN p_event_city_id INT,
    IN p_type VARCHAR(50), 
    IN p_location VARCHAR(50), 
    IN p_cena REAL, 
    IN p_short_desc VARCHAR(300), 
    IN p_long_desc VARCHAR(1000)
)
BEGIN
    INSERT INTO Events (
        name, 
        is_deleted, 
        event_date, 
        event_city_id, 
        type, 
        location, 
        cena, 
        short_desc, 
        long_desc, 
        creator_id, 
        create_date, 
        Operation_date
    ) VALUES (
        p_name, 
        0, 
        p_event_date, 
        p_event_city_id, 
        p_type, 
        p_location, 
        p_cena, 
        p_short_desc, 
        p_long_desc, 
        0, 
        NOW(), 
        NOW()
    );
END //
DELIMITER ;
