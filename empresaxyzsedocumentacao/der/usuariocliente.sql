CREATE TABLE usuarioscliente (
  id_usucliente INT(4) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(35) NOT NULL,
  empresa VARCHAR(20) NOT NULL,
  fone INT(10) NOT NULL,
  email VARCHAR(50) NOT NULL,
  usuario VARCHAR(16) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  PRIMARY KEY(id_usucliente)
);


