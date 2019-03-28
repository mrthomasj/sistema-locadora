create database dbo_locadoracarro;

use dbo_locadoracarro;

create table tb_funcionario(
			
        nm_funcionario varchar(100) not null,
        nr_cpf char(11) not null primary key,
        login_func varchar(20) not null,
        pass_func varchar(12) not null,
        dtNasc_func date not null,
        end_logradouro varchar(150) not null,
        end_bairro varchar(50) not null,
        end_cidade varchar(60) not null,
        end_uf char(2) not null,
        end_cep char(8) not null,
		nr_tel1 varchar(11) not null,
        nr_tel2 varchar(11)

);

create table tb_cliente(
		
        nr_cpf char(11) not null primary key,
        nm_cliente varchar(100) not null,
        dtNasc_cli date not null,
        end_logradouro varchar(150) not null,
        end_bairro varchar(50) not null,
        end_cidade varchar(60) not null,
        end_uf char(2) not null,
        end_cep char(8) not null,
		nr_tel1 varchar(11) not null,
        nr_tel2 varchar(11)
		


);



create table tb_fabricante(

		id_fabricante int auto_increment primary key,
        nm_fabricante varchar(50) not null

);


create table tb_carro(

		nr_chassi char(17) not null primary key,
        id_fabricante int not null,
        nm_modelo varchar(50) not null,
        ano_modelo char(4) not null,
        nr_portas char(1) not null,
        tp_combustivel varchar(20) not null,
        nm_cor varchar(15) not null,
        car_locado varchar(20) not null,
        FOREIGN KEY fk_carro_fabricante(id_fabricante)
        REFERENCES tb_fabricante(id_fabricante)
        


);

drop table tb_carro;


alter table tb_carro
add column	
    val_locacao float(3,2) after car_locado;
    
alter table tb_carro
modify column val_locacao float(3,2) not null;