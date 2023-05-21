create database db_engefoto;
use db_engefoto;

create table tb_fichas(
	id bigint not null auto_increment,
	codigo_passivo varchar(25) not null,
    rodovia varchar(25) not null,
    municipio varchar(255) not null,
    estado varchar(2) not null,
    km_inicial varchar(25) default null,
    km_final varchar(25) default null,
    coord_inicialL varchar(7) not null,
    coord_inicialN varchar(7) not null,
    coord_finalL varchar(7) default null,
    coord_finalN varchar(7) default null,
    sentido varchar(100) default null,
    direcao varchar(25) default null,
    causa_geradora varchar(25) default null,
    local_passivo varchar(100) default null,
    ambientalsocial varchar(25) default null,
    centro_de_custo varchar(25) default null,
    tipo_passivos varchar(100) default null,
    tipo_of varchar(25) default null,
    dinamica varchar(25) default null,
    gravidade_rodovia varchar(25) default null,
    gravidade_ambiental varchar(25) default null,
    comprimento int default null,
    largura int default null,
    profundidade int default null,
    grupo_passivos varchar(100) default null,
    obs varchar(300) default null,
    diretrizes varchar(50) default null,
    outros varchar(50) default null,
    
    primary key(id)
);
