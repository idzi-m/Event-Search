USE eventsearch;
DELIMITER //

CREATE OR REPLACE PROCEDURE user_update(
    IN p_id INT,
    IN p_first_name VARCHAR(50),
    IN p_second_name VARCHAR(50),
    IN p_last_name VARCHAR(50),
    IN p_is_deleted BOOLEAN,
    IN p_login VARCHAR(50),
    IN p_pass VARCHAR(50),
    IN p_city VARCHAR(50),
    IN p_phone VARCHAR(50),
    IN p_email VARCHAR(50),
    IN p_birth_date DATE,
    IN p_gender VARCHAR(50)
)
BEGIN
    UPDATE Users
    SET 
        name = p_first_name,
        second_name = p_second_name,
        last_name = p_last_name,
        is_deleted = p_is_deleted,
        login = p_login,
        pass = p_pass,
        city = p_city,
        phone = p_phone,
        email = p_email,
        birth_date = p_birth_date,
        gender = p_gender
    WHERE id = p_id;
END //

DELIMITER ;