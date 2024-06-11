use eventsearch;
DELIMITER //
CREATE OR REPLACE PROCEDURE user_add(
    IN  p_first_name VARCHAR(50),
    IN  p_second_name VARCHAR(50),
    IN  p_last_name VARCHAR(50),
    IN  p_login VARCHAR(50),
    IN  p_pass VARCHAR(50)
    )
    BEGIN
    INSERT INTO Users (
        first_name,
        second_name,
        last_name,
        is_deleted,
        login,
        pass
    ) VALUES (
        p_first_name,
        p_second_name,
        p_last_name,
        0,
        p_login,
        p_pass        
    );
END //