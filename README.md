# controle-de-caixa
Sistema de Gerenciamento Caixa

#Integração módulo fornecedor

1º) Passo
-- Criei minha coluna que será utilizada para referenciar o cnpj do fornecedor deste produto--
alter table tb_produto add column fk_fornecedor_id int not null;

2º)
-- Relacionando a coluna de Produtos id a id de Fornecedores
alter table tb_produto add constraint fk_ProdForn foreign key(fk_fornecedor_id) references tb_fornecedor(id);

3)
-- Inner join -> seleciona os dados das tabelas relacionadas
-- p.* -> todos os dados de tb_produtos && f.nome, f.cpnj de fornecedor
select p.*,f.nfantasia,f.cnpj from tb_produto as p inner join tb_fornecedor as f on p.fk_fornecedor_id = f.id
