DROP PROCEDURE IF EXISTS InsertFoto;
DELIMITER
|
CREATE PROCEDURE getFoto(IN Emailt varchar(30))
BEGIN
    SELECT * FROM FOTO WHERE Emailt=FOTO.EMAIL_UTENTE;
END;
|
DELIMITER ;
