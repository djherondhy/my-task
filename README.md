# My Task: Taskboard para Scrum
Gerenciador de Tarefas com PHP e JQuery
Este é um projeto desenvolvido utilizando PHP e AJAX como projeto final da disciplina de Desenvolvimento Web, do Curso de Engenharia de Software
<img src="![image](https://github.com/djherondhy/my-task/assets/35778998/895584b2-0429-42f5-a2d1-1d28c3462971)" width="300">

![image](https://github.com/djherondhy/my-task/assets/35778998/895584b2-0429-42f5-a2d1-1d28c3462971) ![image](https://github.com/djherondhy/my-task/assets/35778998/16130d56-a152-4bf9-adfc-c5428531e3ea)

https://resetreturn.000webhostapp.com/workspace.php

## :rocket: Funcionalidades

As Funcionalidades deste projeto incluem:
- Criar Quadros de Tarefas (Sprints)
- Gerenciar Tarefas
- Alterar progresso das tarefas com drag-n-drop
- Excluir e alterar tarefas
- Autenticação de Usuário e Registro

## 🛠️ Tecnologias

- PHP
- JQuery/ Ajax
- HTML
- CSS
- Javascript
- MySQL

## 🔧 Configuração do Banco de Dados

Para rodar em máquina local é necessário a instalação de um servidor para rodar o MySQL.
Para configurar a conexão:
1. Crie o banco de dados para o projeto.
2. Importe a tabela do arquivo my-task.sql
3. Altere o nome do banco de dados no arquivo de conexão.

```php
<?php
// connection.php
 $conn = new PDO('mysql:host=localhost:3306;dbname=nome_do_banco;','root','');
```

## ⚙️Executanto
Siga as etapas abaixo para executar o projeto em seu ambiente local:

1. Clone este repositório para o seu diretório de projetos.
2. Certifique-se de ter o PHP e um servidor web instalados em seu ambiente.
3. Configure as informações de conexão com o banco de dados, conforme explicado anteriormente.
4. Inicie o servidor web e acesse o projeto no navegador.

