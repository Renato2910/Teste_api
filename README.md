<h1 align="center"> Api com Laravel  </h1>


##  Tecnologias

Esse projeto foi desenvolvido com as seguintes tecnologias:

-PHP >= 7.4
-Composer
-Laravel >= 8.0
-Banco de dados (MySQL)
-Postman
-Visual Studio Code

## Projeto

Este é um sistema de gerenciamento de tarefas desenvolvido usando o framework Laravel. Ele fornece uma API para realizar operações básicas de criação, leitura, atualização e exclusão (CRUD) de tarefas.


## Uso da API

A API fornece as seguintes rotas e operações:

GET /api/tasks: Lista todas as tarefas.
GET /api/tasks/{id}: Obtém os detalhes de uma tarefa específica.
POST /api/tasks: Cria uma nova tarefa.
PUT /api/tasks/{id} ou PATCH /api/tasks/{id}: Atualiza os dados de uma tarefa existente.
DELETE /api/tasks/{id}: Exclui uma tarefa.

Listar todas as tarefas
Rota: GET http://127.0.0.1:8000/api/task
Descrição: Esta rota permite listar todas as tarefas cadastradas no sistema.

Resposta:[
    {
        "id": 9,
        "titulo": "teste",
        "descricao": "fase teste",
        "status": "concluido",
        "created_at": "2023-07-04T12:28:02.000000Z",
        "updated_at": "2023-07-04T12:34:26.000000Z"
    },
    {
        "id": 10,
        "titulo": "teste",
        "descricao": "testando",
        "status": "nao concluido",
        "created_at": "2023-07-04T12:30:38.000000Z",
        "updated_at": "2023-07-04T12:30:38.000000Z"
    }
]

Obter detalhes de uma tarefa específica
Rota: GET http://127.0.0.1:8000/api/task/(id)

Descrição: Esta rota permite obter os detalhes de uma tarefa específica com base no seu ID.

Parâmetros:

{id}: O ID da tarefa que deseja consultar (integer).

Resposta:
 {
        "id": 9,
        "titulo": "teste",
        "descricao": "fase teste",
        "status": "concluido",
        "created_at": "2023-07-04T12:28:02.000000Z",
        "updated_at": "2023-07-04T12:34:26.000000Z"
    },


Criar uma nova tarefa
Rota: POST http://127.0.0.1:8000/api/task

Descrição: Esta rota permite criar uma nova tarefa no sistema.

Parâmetros:

"titulo": "  ",
"descricao": "  ",
"status": "  ",

Atualizar os dados de uma tarefa existente
Rota: PUT http://127.0.0.1:8000/api/task/(id)


Descrição: Esta rota permite atualizar os dados de uma tarefa existente com base no seu ID. Todos os campos da tarefa serão atualizados.

Parâmetros:

{id}: O ID da tarefa que deseja atualizar (interagir).

Parâmetros no corpo da requisição:
"titulo": O título atualizado da tarefa (string).
"descricao": A descrição atualizada da tarefa (string).
"status": O status atualizado da tarefa, indicando se está concluída ou não.

Excluir uma tarefa
Rota: DELETE http://127.0.0.1:8000/api/task/(id)

Descrição: Esta rota permite excluir uma tarefa do sistema com base no seu ID.

Parâmetros:

{id}: O ID da tarefa que deseja excluir (interagir).

Resposta: (Não Aparecera nada.)

## Licença

Este projeto está licenciado sob a MIT License.

---
## Contato

Em caso de dúvidas ou sugestões, entre em contato:

Nome: Renato Parra Silva
Email: renato.parrasilva@edu.unifil.br