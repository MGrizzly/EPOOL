CREATE TABLE UTENTE_AZIENDALE (

	EMAILA VARCHAR(30) PRIMARY KEY,
    NOMEAZIENDA VARCHAR(30) REFERENCES AZIENDA(NOME),
    
    FOREIGN KEY (EMAILA) REFERENCES UTENTE(EMAIL)
    
    ) ENGINE=INNODB;