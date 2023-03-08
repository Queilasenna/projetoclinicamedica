CREATE TABLE medicos (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  nascimento date NOT NULL,
  cpf varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  telefone varchar(100) NOT NULL,
  crm varchar(100) NOT NULL,
  situacao varchar(100) NOT NULL,
  especialidade varchar(100) NOT NULL,
  rua varchar(100) NOT NULL,
  bairro varchar(100) NOT NULL,
  cidade varchar(100) NOT NULL,
  estado varchar(100) NOT NULL,
  cep varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;