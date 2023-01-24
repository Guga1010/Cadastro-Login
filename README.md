# Sistema de Cadastro e Login no PHP
- Ao cadastrar, os dados são armazenados em uma tabela em um banco de dados MySQL, gerenciado pelo phpMyAdmin.
- Em seguida terá que fazer login, verificando se os dados inseridos existem na tabela.<br/><br/>
  Obs: O XAMPP foi utilizado para realizar o servidor.
  
  Requisitos:
 1. É necessário ter um banco de dados "gugals", explicado no arquivo inc "conexao.inc" ou crie um com o nome desejado, porém o código deve ser alterado de acordo para funcionar.
 2. Crie uma tabela "tb_login" ou com o nome desejado, tendo 3 colunas: código do tipo int sendo chave primária e auto incremento, login do tipo varchar(15), senha do tipo varchar(15). Caso tenha criado uma tabela com nome diferente, modifique o código nos arquivos .php para que não ocorra erros. 
