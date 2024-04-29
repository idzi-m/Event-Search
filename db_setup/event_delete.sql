USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE event_delete(
    IN p_id INT
)
BEGIN
    UPDATE Events
    SET 
        is_deleted = 1,
        Operation_date = NOW()
    WHERE id = p_id;
END //

DELIMITER ;