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
CREATE TABLE incident
	(
	incidentnr			INTEGER NOT NULL,
	gebruikernr			INTEGER NOT NULL,
	incidentcategorie		VARCHAR(30) NOT NULL,
	uitbesteedetijd			INTEGER NOT NULL,
	medewerker			VARCHAR(30) NOT NULL,
	doorlooptijd			INTEGER NOT NULL,
	status				VARCHAR(18) NOT NULL,
	prioriteit			INTEGER NOT NULL,
	oplossing			VARCHAR(180) NOT NULL,
	datum				VARCHAR(30) NOT NULL,
	gebruiker_gebruikernr		INTEGER NOT NULL, 
	titel 				VARCHAR(30) NOT NULL,
	omschrijving			VARCHAR(280) NOT NULL, 
	betrekkingaantalgebruikers	INT NOT NULL, 
	oorzaak				VARCHAR(280) NOT NULL,
	terugkoppeling			VARCHAR(280) NOT NULL, 
	medewerkernr			INT NOT NULL
	);
CREATE TABLE medewerker
	(
	medewerkernr		INT PRIMARY KEY,
	medewerkergeslacht	VARCHAR(30) NOT NULL,
	medewerkervoorletter	VARCHAR(1) NOT NULL,
	medewerkerachternaam	VARCHAR(80) NOT NULL,
	medewerkerafdeling	VARCHAR(30) NOT NULL,
	medewerkerinterntlfnr	INT NOT NULL
	);
ALTER TABLE gebruiker ADD CONSTRAINT gebruiker_pk PRIMARY KEY (gebruikernr);
ALTER TABLE incident ADD CONSTRAINT incident_pk PRIMARY KEY (incidentnr);
ALTER TABLE incident ADD CONSTRAINT incident_gebruiker_fk FOREIGN KEY (gebruiker_gebruikernr) REFERENCES gebruiker (gebruikernr);
ALTER TABLE medewerker ADD CONSTRAINT medewerker_incident_fk FOREIGN KEY (medewerkernr) REFERENCES incident (incidentnr);
