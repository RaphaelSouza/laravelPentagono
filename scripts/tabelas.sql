CREATE TABLE passageiros(
    id int(10) not null PRIMARY KEY AUTO_INCREMENT,
    nome varchar(60),
    sobrenome varchar(60),
    cpf varchar(12),
    passaporte varchar(20)
);