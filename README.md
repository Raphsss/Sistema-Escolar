Sistema para gestão escolar (WIP).

## Requisitos

- [Node.js](https://nodejs.org/) (versão recomendada: 18+)
- [npm](https://www.npmjs.com/) ou [yarn](https://yarnpkg.com/)
- [PHP](https://www.php.net/) (versão recomendada: 8.1+)
- [Laravel](https://laravel.com/) (versão recomendada: 10+)
- [Composer](https://getcomposer.org/) (gerenciador de dependências PHP)
- Banco de dados (ex: [MySQL](https://www.mysql.com/) ou [MariaDB](https://mariadb.org/))

## Como executar o projeto em outra máquina

1. Clone o repositório:
    ```bash
    git clone https://github.com/Raphsss/Biblioteca-Laravel-.git
    ```

2. Copie o arquivo de exemplo de ambiente e renomeie para `.env`:
    ```bash
    cp .env.example .env
    ```

3. Instale as dependências do PHP com o Composer:
    ```bash
    composer install
    ```

4. Instale as dependências do Node.js:
    ```bash
    npm install
    # ou
    yarn install
    ```

5. Configure o arquivo `.env` com as informações do banco de dados.

6. Gere a chave da aplicação Laravel:
    ```bash
    php artisan key:generate
    ```

7. Execute as migrations para criar as tabelas no banco de dados:
    ```bash
    php artisan migrate
    ```

8. Inicie o servidor de desenvolvimento Laravel:
    ```bash
    php artisan serve
    ```

9. (Opcional) Inicie o servidor frontend:
    ```bash
    npm run dev
    # ou
    yarn dev
    ```

