USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE event_update(
    IN p_id INT,
    IN p_name VARCHAR(50), 
    IN p_event_date DATETIME, 
    IN p_event_city VARCHAR(50),
    IN p_type VARCHAR(50), 
    IN p_location VARCHAR(50), 
    IN p_cena REAL, 
    IN p_short_desc VARCHAR(300), 
    IN p_long_desc VARCHAR(1000)
)
BEGIN
    UPDATE Events
    SET 
        name = p_name,
        event_date = p_event_date,
        event_city = p_event_city,
        type = p_type,
        location = p_location,
        cena = p_cena,
        short_desc = p_short_desc,
        long_desc = p_long_desc,
        Operation_date = NOW()
    WHERE id = p_id;
END //

DELIMITER ;