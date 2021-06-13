#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        iduser          Int  Auto_increment  NOT NULL ,
        pseudouser      Varchar (10) NOT NULL ,
        nomuser         Varchar (50) NOT NULL ,
        prenomuser      Varchar (50) NOT NULL ,
        passworduser    Varchar (255) NOT NULL ,
        emailuser       Varchar (50) NOT NULL ,
        teluser         Int NOT NULL ,
        photouser       Varchar (255) NOT NULL ,
        roleuser        Varchar (256) NOT NULL ,
        nomvilleuser    Varchar (50) NOT NULL ,
        numrueuser      Varchar (20) NOT NULL ,
        nomrueuser      Varchar (50) NOT NULL ,
        codepostaleuser Int NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (iduser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: agence
#------------------------------------------------------------

CREATE TABLE agence(
        idagence          Int  Auto_increment  NOT NULL ,
        nomagence         Varchar (50) NOT NULL ,
        codeagence        Varchar (50) NOT NULL ,
        telagence         Int NOT NULL ,
        logoagence        Varchar (255) NOT NULL ,
        nomrueagence      Varchar (50) NOT NULL ,
        numrueagence      Varchar (50) NOT NULL ,
        codepostaleagence Int NOT NULL ,
        nomvilleagence    Varchar (256) NOT NULL ,
        iduser            Int NOT NULL
	,CONSTRAINT agence_PK PRIMARY KEY (idagence)

	,CONSTRAINT agence_users_FK FOREIGN KEY (iduser) REFERENCES users(iduser)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: biens
#------------------------------------------------------------

CREATE TABLE biens(
        idbien             Int  Auto_increment  NOT NULL ,
        titrebien          Varchar (50) NOT NULL ,
        descriptionbien    Varchar (256) NOT NULL ,
        surfacebien        Float NOT NULL ,
        nbrepieces         Int NOT NULL ,
        nbrechambres       Int NOT NULL ,
        imgbien            Varchar (256) NOT NULL ,
        prixbien           Float NOT NULL ,
        statusbien         Bool NOT NULL ,
        date_creation_bien Date NOT NULL ,
        date_modif_bien    Date NOT NULL ,
        nomvillebien       Varchar (50) NOT NULL ,
        nomruebien         Varchar (50) NOT NULL ,
        numruebien         Varchar (50) NOT NULL ,
        codepostale        Int NOT NULL
	,CONSTRAINT biens_PK PRIMARY KEY (idbien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: typebiens
#------------------------------------------------------------

CREATE TABLE typebiens(
        idtypebien Int  Auto_increment  NOT NULL ,
        typebien   Varchar (50) NOT NULL ,
        lesoptions Varchar (50) NOT NULL
	,CONSTRAINT typebiens_PK PRIMARY KEY (idtypebien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: enregistre
#------------------------------------------------------------

CREATE TABLE enregistre(
        idagence Int NOT NULL ,
        idbien   Int NOT NULL
	,CONSTRAINT enregistre_PK PRIMARY KEY (idagence,idbien)

	,CONSTRAINT enregistre_agence_FK FOREIGN KEY (idagence) REFERENCES agence(idagence)
	,CONSTRAINT enregistre_biens0_FK FOREIGN KEY (idbien) REFERENCES biens(idbien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: correspond
#------------------------------------------------------------

CREATE TABLE correspond(
        idtypebien Int NOT NULL ,
        idbien     Int NOT NULL
	,CONSTRAINT correspond_PK PRIMARY KEY (idtypebien,idbien)

	,CONSTRAINT correspond_typebiens_FK FOREIGN KEY (idtypebien) REFERENCES typebiens(idtypebien)
	,CONSTRAINT correspond_biens0_FK FOREIGN KEY (idbien) REFERENCES biens(idbien)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recherche
#------------------------------------------------------------

CREATE TABLE recherche(
        idbien Int NOT NULL ,
        iduser Int NOT NULL
	,CONSTRAINT recherche_PK PRIMARY KEY (idbien,iduser)

	,CONSTRAINT recherche_biens_FK FOREIGN KEY (idbien) REFERENCES biens(idbien)
	,CONSTRAINT recherche_users0_FK FOREIGN KEY (iduser) REFERENCES users(iduser)
)ENGINE=InnoDB;

