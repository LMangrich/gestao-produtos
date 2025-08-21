# Gestão de Produtos

Projeto simples de CRUD de produtos feito em **Laravel**. Permite criar, listar, editar e deletar produtos através de uma interface web usando **Bootstrap**.

---

## Funcionalidades

-   Listar todos os produtos
-   Criar um novo produto
-   Editar produtos existentes
-   Deletar produtos
-   Validação básica dos campos

---

## Estrutura do Projeto

-   `app/` → Controllers, Models, Services, Repositories, Requests
-   `resources/views/` → Views (`index`, `create`, `edit`)
-   `routes/web.php` → Rotas do CRUD
-   `database/migrations/` → Tabela `products`
-   `.env.example` → Variáveis de ambiente (configure seu `.env` local)

---

## Requisitos

-   PHP 8 ou superior
-   Composer
-   MySQL

---

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/Lmangrich/gestao-produtos.git
cd gestao-produtos
```

2. Instale dependências PHP:

```bash
composer install
```

3. Configure o arquivo .env baseado no .env.example:

```bash
cp .env.example .env
php artisan key:generate
```

4. Configure o banco de dados e rode as migrations:

```bash
php artisan migrate
```

5. Rode o servidor local:

```bash
php artisan serve
```

Acesse http://127.0.0.1:8000/ para usar o CRUD.

## OBS

-   Nenhuma autenticação implementada, o acesso é aberto.

-   As views usam apenas Bootstrap para estilização.

## Licença

Projeto livre para estudo e uso pessoal.
