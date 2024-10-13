# Minicurso de Framework MVC Laravel 

Laravel é o framework PHP open-source mais popular para o desenvolvimento
de sistemas web seguindo o padrão MVC (model, view, controller). Possui uma estrutura
organizada e simples, segundo um padrão modularizado com gerenciamento de
dependências. Possui suporte para uma série de utilitários de produtividade, tais como
recursos para bancos de dados relacionais e ferramentas de testes. Nesta oficina,
apresentaremos as principais facilidades do framework através de uma abordagem prática
orientada a projeto.

## Para rodar o projeto siga os passos abaixo:

1. **Clonar o Repositório**
   - Abra o terminal e execute o comando abaixo para clonar o projeto:
     ```bash
     git clone https://github.com/wegia/catalogo-plantas.git
     ```
   - Entre no diretório do projeto:
     ```bash
     cd catalogo-plantas
     ```

2. **Instalar Dependências PHP**
   - Instale as dependências PHP com o Composer:
     ```bash
     composer install
     ```

3. **Instalar Dependências JavaScript**
   - Instale as dependências front-end com o npm:
     ```bash
     npm install
     ```

4. **Configurar o Arquivo `.env`**
   - Copie o arquivo de exemplo `.env.example` para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Edite o arquivo `.env` para ajustar as configurações do banco de dados, especialmente as variáveis:
     - `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`.

5. **Gerar a Chave da Aplicação**
   - Gere a chave do Laravel:
     ```bash
     php artisan key:generate
     ```

6. **Configurar o Banco de Dados**
   - Certifique-se de que o MySQL esteja rodando e crie o banco de dados que será utilizado pelo projeto.
   - Rode as migrações para criar as tabelas:
     ```bash
     php artisan migrate
     ```

   - Depois rode o seguinte comando para popular as tabelas
     ```bash
     php artisan db:seed
     ```

7. **Rodar o Servidor de Desenvolvimento**
   - Inicie o servidor local do Laravel:
     ```bash
     php artisan serve
     ```
   - O servidor estará acessível em http://localhost:8000
