USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE user_read(
    IN p_id INT
)
BEGIN
    SELECT 
    id,
    first_name,
    second_name,
    last_name,
    is_deleted,
    login,
    pass,
    city,
    phone,
    email,
    birth_date,
    gender
    FROM Events
    WHERE id = p_id;
END //

DELIMITER ;