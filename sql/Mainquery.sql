use bd_filmes;

create table tbGeneroFilme (
	codGeneroFilme int(11) primary key auto_increment,
    generoFilme varchar(20)
);

create table tbAtor(
	codAtor int(11) primary key auto_increment,
    ator varchar(50)
);

create table tbDiretorFilme (
	codDiretorFilme int(11) primary key auto_increment,
    nomeDiretor varchar(50)
);

create table tbFilme (
	codFilme int(11) primarY key auto_increment,
    filme varchar(50),
    codGenero int(11) NOT NULL,
    codDiretor int(11) NOT NULL,
    foreign key (codGenero) references tbGeneroFilme (codGeneroFilme),
    foreign key (codDiretor) references tbDiretorFilme(codDiretorFilme)
);

create table tbAtorFilme (
	codAtorFilme int(11) primary key auto_increment,
    codAtor int(11) NOT NULL,
    codFilme int(11) NOT NULL,
    foreign key (codAtor) references tbAtor (codAtor),
    foreign key (codFilme) references tbFilme(codFilme)
);