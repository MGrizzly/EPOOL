CREATE TABLE PUBBLICA (
	
    NOME VARCHAR(30) PRIMARY KEY REFERENCES SOCIETA(NOME)
    
    ) ENGINE=INNODB;