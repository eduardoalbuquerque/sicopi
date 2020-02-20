/*insert into master.company (bussinename, trademark,update_at,database) values(
	'webdevbrasil','luiz eduardo - me',current_timestamp,'pmls'
)
insert into pmls.filho (idcompany) values (4)
select bussinename from master.company left join pmls.filho on master.company.id = pmls.filho.idcompany
*/

select master.user.name, master.company.database from master.access left join master.user 
on master.access.cpf=master.user.cpf left join master.company on master.access.idcompany=master.company.id
where master.access.cpf = '91401160425' and master.access.pdw = md5('123')

/*exclue constraint para mudar tipo de dados da chave primaria*/
ALTER TABLE master.access drop constraint access_cpf_fkey
/*altera dados das entidades envolvidas*/
ALTER TABLE master.user ALTER COLUMN CPF TYPE VARCHAR(11)
ALTER TABLE master.access ALTER COLUMN CPF TYPE VARCHAR(11)
/*cria novas constraint para entidades envovidas*/
ALTER TABLE master.access add constraint access_cpf_fkey foreign key (cpf) references master.user(cpf)

insert into master.user (cpf,name,username,update_at)
values('91401160425','eduardo albuquerque', 'dudu', current_timestamp)

select * from master.user
select * from master.company

INSERT INTO master.access(id,cpf,idcompany,pdw) values(1,'91401160425',4,md5('123'))