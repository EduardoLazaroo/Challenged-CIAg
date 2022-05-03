Desafio Ciag - TaskManager.

Sistema de Tarefas Diárias com PHP

Conteúdo do Sistema
- Cadastro do Usuário Padrão
- Sistema de Login
- Cadastro de tarefa
- Listagem de tarefas
- Edição de Tarefa
- Exclusão de tarefa


Usuário Cadastrado na Base:

- teste@teste.com
- teste

-------- // -------- // --------

Como funciona o TaskManager?

Tela de Login 

![Screenshot_1](https://user-images.githubusercontent.com/78938620/166270005-951ca27b-4729-45a1-b436-7a6e58307172.png)

- Para acessar o Home da página é necessário estar cadastrado no banco de dados.
- É necessário login(e-mail) e senha.

- Se não possuir conta deverá criar uma conta (cadastro).
----

Cadastro

![Screenshot_2](https://user-images.githubusercontent.com/78938620/166270031-9eeb4cf0-100e-4f84-ae10-dcd7f83439fb.png)

- No cadastro de usuário você deve inserir:

Nome
E-mail (Login)
Senha

- Você deve repetir a senha, se elas se coincidirem acendera uma confirmação de senha em verde, se não ficara vermelho.
- Toda senha é criptografada (md5).

![Screenshot_3](https://user-images.githubusercontent.com/78938620/166269940-6d331069-c0dd-4939-9055-ee14bdbc621b.png)
![Screenshot_4](https://user-images.githubusercontent.com/78938620/166269943-fe616881-913c-495c-b025-72042fbf7e2e.png)

- Volte para Tela de Login caso já possua acesso ao sistema.
----

Home

![Screenshot_5](https://user-images.githubusercontent.com/78938620/166270154-b577b690-0090-4cf4-a137-c67a168605d3.png)

- A Navbar é composta pelo logo 'TaskManager.' e a opção de 'Sair' (que executa um session_destroy).

- No canto superior esquerdo temos em verde o botão de "cadastrar Tarefa".
- No cadastro de tarefa podemos inserir: 'Título', 'Data/Hora', 'Descrição'. No canto superior é possível 'Voltar' para a Home.

![Screenshot_6](https://user-images.githubusercontent.com/78938620/166270222-996d0e60-0154-4530-bb30-8dba3bcd26e5.png)

- A listagem acessa ao banco de dados e retornar todas as tarefas e seus valores inseridos na hora de 'Cadastrar Tarefa'.
- Toda tarefa possuí um btn 'Editar' e btn 'Deletar'.

![Screenshot_7](https://user-images.githubusercontent.com/78938620/166270310-c2270155-9a12-4d0b-89f6-cd84a2a56fea.png)

----

Deletar Tarefa

- O btn Deletar através da listagem acessa ao Banco de Dados e executa 'Delete' (através do idTask).
- A task é excluida da Listagem e da Base.

Editar Tarefa

![Screenshot_8](https://user-images.githubusercontent.com/78938620/166270339-766df8ac-3951-4001-a7c2-dec4fb41cc72.png)

- O btn Editar acessa a uma page idêntica a de 'Cadastrar Tarefa'.
- Quando acessada é possível que realizemos a edição de um campo que já possui um valor predefinido, basta agora 'Editar' que o Update acontece.
- Você é redirecionado para tela Home.

![Screenshot_9](https://user-images.githubusercontent.com/78938620/166273249-8929f42c-2722-4bec-8140-bb9dc77cad59.png)
