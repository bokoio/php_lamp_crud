
Create table centuria.cent_usuarios(
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(200),
senha Varchar(200),
nmUsuario Varchar(200),
CONSTRAINT pk_Ususarios primary key(ID,login)) ENGINE = innodb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Create table centuria.cent_cursos(
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
nmInstrutorResponsavel Varchar(200),
nmInstrutorAuxiliares Varchar(4000),
nmCidade Varchar(200),
UF Varchar(2),
nmPresidenteTemplo Varchar(200),
nmDemaisPresidentes Varchar(4000),
nmMinistroPresidenteTemplo Varchar(200),
nmMinistrosDemaisPresidentes Varchar(4000),
dtInicioCurso date,
dtFimCurso date,
qtdMestreSolPrimAula int,
qtdMestreLuaPrimAula int,
qtdNinfaSolPrimAula int,
qtdNinfaLuaPrimAula int,
qtdMestreSolAutorizado int,
qtdMestreLuaAutorizado int,
qtdNinfaSolAutorizado int,
qtdNinfaLuaAutorizado int,
flCursoFinalizado Varchar(1),
Primary Key (ID)) ENGINE = innodb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

Create table centuria.cent_instrutores(
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
nmInstrutor Varchar(200),
mnMinistro Varchar(200),
deEmail varchar(400),
flAtivo Varchar(1),
UF Varchar(2),
CONSTRAINT pk_Instrutor primary key(ID,nmInstrutor)) ENGINE = innodb DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

