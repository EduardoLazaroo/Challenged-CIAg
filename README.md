Desafio Ciag - TaskManager.

Sistema de Tarefas Diárias com PHP

Conteúdo do Sistema
- Cadastro do Usuário Padrão
- Sistema de Login
- Cadastro de tarefa
- Listagem de tarefas
- Edição de Tarefa
- Exclusão de tarefa


Usuários Cadastrados na Base:
- user@hotmail.com
- 123

- teste@teste.com
- teste

-------- // -------- // --------

Como funciona o TaskManager?

Tela de Login 

- Para acessar o Home da página é necessário estar cadastrado no banco de dados.
- É necessário login(e-mail) e senha.

- Se não possuir conta deverá criar uma conta (cadastro).

----

Cadastro

- No cadastro de usuário você deve inserir:

Nome
E-mail (Login)
Senha

- Você deve repetir a senha, se elas se coincidirem acendera uma confirmação de senha em verde, se não ficara vermelho.
- Toda senha é criptografada (md5).

- Volte para Tela de Login caso já possua acesso ao sistema.

----

Home
- A Navbar é composta pelo logo 'TaskManager.' e a opção de 'Sair' (que executa um session_destroy).

- No canto superior esquerdo temos em verde o botão de "cadastrar Tarefa".
- No cadastro de tarefa podemos inserir: 'Título', 'Data/Hora', 'Descrição'. No canto superior é possível 'Voltar' para a Home.

- A listagem acessa ao banco de dados e retornar todas as tarefas e seus valores inseridos na hora de 'Cadastrar Tarefa'.
- Toda tarefa possuí um btn 'Editar' e btn 'Deletar'.

----

Deletar Tarefa

- O btn Deletar através da listagem acessa ao Banco de Dados e executa 'Delete' (através do idTask).
- A task é excluida da Listagem e da Base.

Editar Tarefa

- O btn Editar acessa a uma page idêntica a de 'Cadastrar Tarefa'.
- Quando acessada é possível que realizemos a edição de um campo que já possui um valor predefinido, basta agora 'Editar' que o Update acontece.
- Você é redirecionado para tela Home.
