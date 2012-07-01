CREATE TABLE usuariosfunc (
  id_usuario INT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(20) NOT NULL,
  senha VARCHAR(45) NOT NULL,
  permissao INT(1) NOT NULL,
  PRIMARY KEY(id_usuario)
);


