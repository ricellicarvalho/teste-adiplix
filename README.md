# Adiplix - API Teste Técnico

Esta é uma API desenvolvida para o teste técnico da empresa **Adiplix**, utilizando o framework **Laravel**. O sistema realiza o gerenciamento de **Pessoas**, **Tarefas** e o relacionamento entre ambos.

---

## 🚀 Tecnologias Utilizadas

- PHP 8+
- Laravel 11
- MySQL
- TablePlus (Ferramenta moderna e nativa para gerenciamento de banco de dados)
- Postman / Insomnia para testes de API

---

## 📁 Estrutura do Projeto

- `People` - CRUD de pessoas (nome, email, created_at e updated_at)
- `Task` - CRUD de tarefas (título, descrição, status, created_at e updated_at)
- `Relacionamento` - Pessoas ↔ Tarefas (muitos para muitos)

---

## 💡 Como executar o projeto localmente

```bash
# 1. Clone o repositório
git clone https://github.com/ricellicarvalho/teste-adiplix.git
cd teste-adiplix

# 2. Instale as dependências
composer install

# 3. Copie e configure o arquivo .env
cp .env.example .env
php artisan key:generate

# 4. Configure seu banco de dados no .env

# 5. Rode as migrations e os seeders
php artisan migrate:fresh --seed

# 6. Rode o servidor local
php artisan serve
```

---

## 🔗 Importar Collection no Postman / Insomnia

> Para facilitar os testes, disponibilizei uma **Collection do Postman** com todas as requisições organizadas em:

📁 `docs/postman/Adiplix_API_Teste_Tecnico_Postman_Collection.json`

### No Postman
1. Acesse **File > Import**
2. Selecione o arquivo `.json` exportado

### No Insomnia
1. Clique em `+` > **Import**
2. Escolha o arquivo `.json` exportado do Postman

---

## 📃 Endpoints da API

### 👥 Pessoas

| Ação                | Método | Endpoint                            |
|----------------------|--------|-------------------------------------|
| Criar Pessoa         | POST   | /api/V1/peoples                     |
| Listar Pessoas       | GET    | /api/V1/peoples                     |
| Listar Pessoa por ID| GET    | /api/V1/peoples/{id}               |
| Editar Pessoa     | PUT    | /api/V1/peoples/{id}               |
| Excluir Pessoa       | DELETE | /api/V1/peoples/{id}               |

### 📋 Tarefas

| Ação                 | Método | Endpoint                            |
|-----------------------|--------|-------------------------------------|
| Criar Tarefa          | POST   | /api/V1/tasks                       |
| Listar Tarefas        | GET    | /api/V1/tasks                       |
| Listar Tarefa por ID  | GET    | /api/V1/tasks/{id}                 |
| Editar Tarefa      | PUT    | /api/V1/tasks/{id}                 |
| Excluir Tarefa        | DELETE | /api/V1/tasks/{id}                 |

### 👥‍💼 Relacionamento Pessoas ↔ Tarefas

| Ação                                | Método | Endpoint                                        |
|--------------------------------------|--------|-------------------------------------------------|
| Atribuir tarefas a uma pessoa        | POST   | /api/V1/peoples/{person}/tasks                 |
| Remover tarefas de uma pessoa        | DELETE | /api/V1/peoples/{person}/tasks                 |
| Listar tarefas atribuídas a uma pessoa | GET    | /api/V1/peoples/{person}/tasks                 |
| Listar pessoas atribuídas a uma tarefa| GET    | /api/V1/tasks/{task}/peoples                   |

---

## 📈 Exemplo de Requisição - Atribuir tarefas a uma pessoa

**POST** `/api/V1/peoples/10/tasks`

**Headers:**
```json
{
  "Accept": "application/json",
  "Content-Type": "application/json"
}
```

**Body:**
```json
{
  "task_ids": [12, 15, 17]
}
```

---

## 🌟 Diferenciais

- Estrutura RESTful clara e padronizada
- Uso de Eloquent ORM com validação via Form Requests
- Tabela pivot com `created_at` e `updated_at`
- Collection pronta para testes no Postman e Insomnia
- Total de **14 requisições** cobrindo CRUD completo e relacionamento

---

## 👋 Contato

Caso queira entrar em contato:

**Ricelli Carvalho**  
Email: [ricelli.martinsdecarvalho@gmail.com](mailto:ricelli.martinsdecarvalho@gmail.com)  
WhatsApp: [Fale comigo no WhatsApp](https://wa.me/5563992822887?text=Olá%20Ricelli%2C%20vi%20seu%20perfil%20no%20GitHub%20e%20gostaria%20de%20conversar!)


---

Feito com ❤️ por Ricelli Carvalho para o desafio da **Adiplix**.

