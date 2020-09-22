

drop database if exists toutenun;
create database if not exists toutenun;
	use toutenun;


	CREATE TABLE REQUEST(
		ID int(6)AUTO_INCREMENT PRIMARY KEY,
		ID_USER int(6),
		ID_FREELANCER int(6),
		IFOS VARCHAR(500));
		

		



CREATE TABLE UTILISATEUR (
	ID int(4) AUTO_INCREMENT PRIMARY KEY,
	LOGIN VARCHAR(100) NOT NULL,
	PWD VARCHAR(255) NOT NULL,
	ROLE VARCHAR(50),
	EMAIL VARCHAR(255),
	ETAT INT(1),
	VILLE VARCHAR(100),
	NOM VARCHAR(50),
	PRENOM VARCHAR(50));
-- 	ETAT = 0 désactivé
-- 	ETAT = 1 activé
		
CREATE TABLE FREELANCER (
	ID int(4) AUTO_INCREMENT PRIMARY KEY,
	NOM VARCHAR(50) NOT NULL,
	PRENOM VARCHAR(50) NOT NULL,
	ID_CATEGORIE int(4),
	CIVILITE VARCHAR(1),
	PROFESSION VARCHAR(50),
	FRAIS_MOIS int(50),
	FRAIS_SERVICE int(50),
	DISPONIBILITE INT(1));
	


CREATE TABLE CATEGORIE (                    
	ID int(4) PRIMARY KEY, 
	NOM_CATEGORIE VARCHAR(100) NOT NULL); 
	
ALTER TABLE FREELANCER ADD constraint fk10 foreign key(ID_CATEGORIE) references CATEGORIE(ID);
ALTER TABLE REQUEST ADD constraint Rk10 foreign key(ID_USER) references UTILISATEUR(ID);
ALTER TABLE  REQUEST ADD constraint Pk10 foreign key(ID_FREELANCER) references FREELANCER(ID);

INSERT INTO REQUEST(ID_USER ,ID_FREELANCER ,IFOS) VALUES
(1,1,"repairation"),
(2,1,"reparation");








INSERT INTO CATEGORIE(ID,NOM_CATEGORIE) VALUES
	(1,'Les petits jobs'),
	(2,'lifestyle et fitness'),
	(3,'livraison'),
	(4,'Web designe'),
	(5,'Réparation'),
	(6,'Aise bénévole'),
	(7,'Santé'),
	(8,'déménagement'),
	(9,'esthétique'),
	(10,'éducation');	
	
	
INSERT INTO UTILISATEUR VALUES 
	(1,'admin',md5('123'),'ADMIN','rihab.araamouch@gmail.com',1,'CASABLANCA','RIHAB','ARAAMOUCH'),
	(2,'user1',md5('123'),'VISITEUR','user1@gmail.com',1,'MEKNES','AHLAM','QERN'),
	(3,'user2',md5('123'),'VISITEUR','user2@gmail.com',1,'RABAT','ZAKARIA','HAJOUI');	

INSERT INTO FREELANCER(NOM,PRENOM,ID_CATEGORIE,CIVILITE,PROFESSION,FRAIS_MOIS,FRAIS_SERVICE,DISPONIBILITE) VALUES
    ('SAADAOUI','MOHAMMED',1,'M','Livreur',500,500,1 ),
	('CHKIRI','OMAR',2,'M','Docteur',500,500,0 ),
	('SLIMANI','RACHIDA',3,'F','Plombier',500,450,1 ),
	('FAOUZI','NABILA',4,'F','Electricien',500,500,0 ),
    ('ARAAMOUCH','RIHAB',1,'F','Livreur',500,500,1 ),
	('KHEDRAOUI','IKRAM',2,'M','Docteur',500,500,0 ),
	('HAJJOUY','ZAKARIA',3,'F','Plombier',500,450,1 ),
	('AMIMI','ZAKIA',4,'F','Electricien',500,500,0 ),
    ('AHLAM','QERN',1,'M','Livreur',500,500,1 ),
	('FARAH','IMANE',2,'F','Docteur',500,500,0 ),
	('IMMEGRI','ABDESSAMAD',3,'M','Plombier',500,450,1 ),
	('KACIMI','SOUHAIL',4,'F','Electricien',500,500,0 ),
    ('ALARAOUI','YASSINE',1,'M','Livreur',500,500,1 ),
	('NOUR','ABDELQADER',2,'M','Docteur',500,500,0 ),
	('JAOUI','RACHID',3,'F','Plombier',500,450,1 ),
	('BOUALAOUI','CHAIMAE',4,'F','Electricien',500,500,0 ),
    ('TAMER','NIZAR',1,'M','Livreur',500,500,1 ),
	('HILOUL','YASSER',2,'M','Docteur',500,500,0 ),
	('SKINI','SOUKAINA',3,'F','Plombier',500,450,1 ),
	('SAIDI','SAIDA',4,'F','Electricien',500,500,0 ),
    ('YSSEF','KHALID',1,'M','Livreur',500,500,1 ),
	('QADIRI','WALID',2,'M','Docteur',500,500,0 ),
	('TAZZI','WAFAE',3,'F','Plombier',500,450,1 ),
	('LAHLOU','WIJDANE',4,'F','Electricien',500,500,0 );
	
	

SELECT * FROM CATEGORIE;
SELECT * FROM FREELANCER;
SELECT * FROM UTILISATEUR;
				

				
 