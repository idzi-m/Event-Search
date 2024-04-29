USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE event_read(
    IN p_id INT
)
BEGIN
    SELECT 
        id,
        name,
        event_date,
        event_city,
        type,
        location,
        cena,
        short_desc,
        long_desc
    FROM Events
    WHERE id = p_id;
END //

DELIMITER ;