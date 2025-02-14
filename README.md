# Project Notes

<p align="center">
  <img src="https://github.com/RodrigoGomesS/project-notes/blob/develop/public/assets/images/logo.png" alt="Project Logo" />
</p>

## 📌 Sobre o Projeto
O **Project Notes** é uma aplicação desenvolvida com Laravel para gerenciar notas e anotações de forma simples e eficiente.

## 🚀 Tecnologias Utilizadas
- PHP 8+
- Laravel 10+
- PostgreSQL
- Tailwind CSS
- Vite.js

## 🛠️ Como Configurar o Projeto

### 1️⃣ Pré-requisitos
Antes de começar, você precisa ter instalado:
- [PHP 8+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [PostgreSQL](https://www.postgresql.org/)
- [Node.js + npm](https://nodejs.org/)

### 2️⃣ Passos para instalação

### Clone o repositório
```bash
git clone https://github.com/RodrigoGomesS/project-notes.git
```

### Acesse a pasta do projeto
```bash
cd project-notes
```

### Instale as dependências do PHP
```bash
composer install
```

### Instale as dependências do Node.js
```bash
npm install
```

### Copie o arquivo de configuração
```bash
cp .env.example .env
```

### Gere a chave da aplicação
```bash
php artisan key:generate
```

### Configure o banco de dados no .env

### Execute as migrations
```bash
php artisan migrate
```

### Rode o servidor
```bash
php artisan serve
```

## 📜 Licença
Este projeto está sob a licença MIT. Para mais detalhes, consulte o arquivo `LICENSE`.
