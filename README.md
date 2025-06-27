# Gestão Acadêmica 📚

Sistema web desenvolvido em Laravel com MySQL, com objetivo educacional de estudar boas práticas em desenvolvimento fullstack PHP.

---

## 🚀 Tecnologias utilizadas

- Laravel 10
- PHP 8.2
- MySQL
- HTML, CSS e JavaScript
- Git e GitHub
- Laragon (ambiente local)
- DBeaver (gerenciador de banco)

---

## 💻 Como executar o projeto

### 1. Clone o repositório
```bash
git clone https://github.com/SamuelRodSabino01/gestaoacademica.git
```

### 2. Acesse a pasta do projeto
```bash
cd gestaoacademica
```

### 3. Instale as dependências
```bash
composer install
```

### 4. Copie o arquivo `.env` e configure
```bash
cp .env.example .env
```

Edite com os dados do seu MySQL (nome do banco: `gestaoacademica`)

### 5. Gere a chave do app
```bash
php artisan key:generate
```

### 6. Rode as migrations
```bash
php artisan migrate
```

### 7. Inicie o servidor
```bash
php artisan serve
```

Acesse em: `http://localhost:8000` ou `http://gestaoacademica.test` se estiver usando o Laragon.

---

## ✅ Funcionalidades previstas

- [ ] Cadastro e login de usuários
- [ ] Cadastro de cursos e disciplinas
- [ ] Lançamento e consulta de notas
- [ ] Painel do coordenador
- [ ] Exportação de relatórios

---


---

## 📁 Estrutura de Views

O projeto utiliza o seguinte padrão organizacional:

- `resources/views/layouts/app.blade.php` – layout principal
- `resources/views/pages/home.blade.php` – página inicial
- `resources/views/components/` – componentes reutilizáveis (em breve)
- `public/assets/` – arquivos estáticos como CSS, JS, imagens, etc.


## 🧠 Objetivo do projeto

Esse projeto faz parte de um **ciclo de estudos pessoal**, com 1h diária de dedicação focada em:

- Aprimorar conhecimento em Laravel
- Praticar MySQL e relacionamento de dados
- Aplicar conceitos de organização, versionamento e segurança
- Construir um sistema web completo com backend e frontend

---

## 👨‍💻 Autor

Desenvolvido por Samuel Sabino  
📬 [linkedin.com/in/samuelsabino](https://www.linkedin.com/in/samuelrodsabino/)
