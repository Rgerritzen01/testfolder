CREATE TABLE gebruiker
	(
	gebruikernr	INTEGER NOT NULL,
	gebruikervn	VARCHAR(20) NOT NULL,
	gebruikeran	VARCHAR(50) NOT NULL,
	email		VARCHAR(100),
	leeftijd	INTEGER NOT NULL,
	geslacht	VARCHAR(38) NOT NULL,
	plaats		VARCHAR(30) NOT NULL,
	postcode	CHAR(6) NOT NULL
	);
CREATE TABLE incicdent
	(
	incidentnr		INTEGER NOT NULL,
	gebruikernr		INTEGER NOT NULL,
	incidentcategorie	VARCHAR(30) NOT NULL,
	uitbesteedetijd		INTEGER NOT NULL,
	medewerker		VARCHAR(30) NOT NULL,
	doorlooptijd		INTEGER NOT NULL,
	status			VARCHAR(18) NOT NULL,
	prioriteit		INTEGER NOT NULL,
	oplossing		VARCHAR(180) NOT NULL,
	datum			VARCHAR(30) NOT NULL,
	gebruiker_gebruikernr	INTEGER NOT NULL
	);
ALTER TABLE gebruiker ADD CONSTRAINT gebruiker_pk PRIMARY KEY ( gebruikernr );
ALTER TABLE incicdent ADD CONSTRAINT incicdent_pk PRIMARY KEY (incidentnr);
ALTER TABLE incicdent ADD CONSTRAINT incicdent_gebruiker_fk FOREIGN KEY (gebruiker_gebruikernr) REFERENCES gebruiker (gebruikernr);