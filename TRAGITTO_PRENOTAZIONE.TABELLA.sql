/*TABELLA DI COLLEGAMENTOTRA TRAGITTO E PRENOTAZIONE **/   
CREATE TABLE TRAGITTO_PRENOTAZIONE(
	ID_TRAG SMALLINT,
    ID_PREN SMALLINT,
    
    PRIMARY KEY (ID_TRAG, ID_PREN),
    FOREIGN KEY (ID_TRAG) REFERENCES TRAGITTO (ID),
    FOREIGN KEY (ID_PREN) REFERENCES PRENOTAZIONE(ID)
 
 )ENGINE=INNODB;
