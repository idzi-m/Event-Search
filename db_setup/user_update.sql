USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE user_update(
    p_first_name VARCHAR(50),
    p_second_name VARCHAR(50),
    p_last_name VARCHAR(50),
    p_is_deleted BOOLEAN,
    p_login VARCHAR(50)
)
BEGIN
    UPDATE Users
    SET 
        name = p_first_name,
        second_name = p_second_name,
        last_name = p_last_name,
        is_deleted = p_is_deleted,
        login = p_login
    WHERE id = p_id;
END //

DELIMITER ;