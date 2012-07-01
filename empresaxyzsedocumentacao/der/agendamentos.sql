CREATE TABLE agendamentos (
  numero BIGINT(10) NOT NULL,
  funcionarios_registro VARCHAR(6) NOT NULL,
  datasol DATE NULL,
  horasol TIME NULL,
  datacomp DATE NULL,
  horacomp TIME NULL,
  motivo VARCHAR(40) NULL,
  situacao VARCHAR(11) NULL,
  PRIMARY KEY(numero),
  INDEX agendamentos_FKIndex1(funcionarios_registro)
);


