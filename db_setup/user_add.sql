use
DELIMITER //
CREATE OR REPLACE PROCEDURE user_add(
    IN  p_first_name VARCHAR(50),
    IN  p_second_name VARCHAR(50),
    IN  p_last_name VARCHAR(50),
    IN  p_login VARCHAR(50),
    IN  p_pass VARCHAR(50),
    IN p_city VARCHAR(50),
    IN p_phone VARCHAR(50),
    IN p_email VARCHAR(50),
    IN p_birth_date DATE,
    IN p_gender VARCHAR(50)
    )
    BEGIN
    INSERT INTO Users (
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
     ) VALUES (
        p_first_name,
        p_second_name,
        p_last_name,
        0,
        p_login,
        p_pass,
        p_city,
        p_phone,
        p_email,
        p_birth,
        p_gender      
    );
END //