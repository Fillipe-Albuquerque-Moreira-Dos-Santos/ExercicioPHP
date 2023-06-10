# Nomes 

## Fillipe Albuquerque
## Guilherme Oliveira Peres
## Davi Emanuel
## Gabriel Cardoso

# ExercicioPHP

A atividade poderá ser feita em grupo.

A entrega deverá ser um link para o repositório no Github com o código atualizado.

1. Clone o repositório https://github.com/marcioaraya/ltpii-1.23.git

2. Execute os scripts que estão na pasta "cadastro_bd\scripts_banco" no Workbench ou no PHPMyAdmin. Execute os scripts na ordem abaixo

crie o schema "curso", dentro deste schema execute os scripts abaixo
tb_aluno.sql
tb_curso.sql
criar-usuario-da-aplicacao.sql
3. Faça as correções necessárias para que a atualização da tabela tb_curso funcione

Sugestão:

 - Passar o id da tabela tb_curso como parâmetro
 - Crie uma função recupera_curso($id) para recuperar os dados do curso (veja a função recupera_aluno($id) dentro do arquivo "\inc\funcoes.inc.php")
 - Use os dados recuperados para preencher o formulário de alteração. O campo que tem o type="hidden" serve para guardar o id da linha que deverá ser alterada.
