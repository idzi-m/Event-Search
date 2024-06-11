use eventsearch;
DELIMITER //
CREATE OR REPLACE PROCEDURE user_add(
    IN  p_first_name VARCHAR(50),
    IN  p_second_name VARCHAR(50),
    IN  p_last_name VARCHAR(50),
    IN  p_login VARCHAR(50),
    IN  p_pass VARCHAR(50)
    )
    INSERT INTO Users (
        first_name VARCHAR(50),
        second_name VARCHAR(50),
        last_name VARCHAR(50),
        is_deleted BOOLEAN,
        login VARCHAR(50),
        pass VARCHAR(50)
    ) VALUES (
        p_first_name,
        p_second_name,
        p_last_name,
        0,
        p_login,
        p_pass        
    );
END //
DELIMITER ;
