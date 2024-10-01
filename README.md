# Monolito

## Descrição

Monolito é um projeto Laravel que usa XAMPP, PHP, Composer, Node.js e NPM para fornecer um ambiente de desenvolvimento web robusto. Este projeto foi desenvolvido com foco em simplicidade e flexibilidade, aproveitando o poder do framework Laravel e ferramentas adicionais.

## Pré-requisitos

Antes de começar, você precisará das seguintes ferramentas instaladas no seu sistema:
- *[VisualCode](https://code.visualstudio.com))*: Visual Code é usado para abrir o projeto, e rodar ele em conjunto do XAMPP.
- *[XAMPP](https://www.apachefriends.org/index.html)*: Um pacote que inclui Apache, MySQL, PHP e Perl. Utilize o XAMPP para rodar o servidor Apache e o banco de dados MySQL.
- *[PHP >= 8.0](https://www.php.net/downloads.php)*: Certifique-se de que o PHP esteja corretamente configurado no XAMPP.
- *[Composer](https://getcomposer.org/)*: Um gerenciador de dependências para PHP.
- *[Node.js >= 16.x](https://nodejs.org/)*: Inclui o NPM, que será necessário para instalar e gerenciar dependências de frontend.
- *[NPM](https://www.npmjs.com/)*: Normalmente, vem com o Node.js e é usado para gerenciar pacotes JavaScript.

## Instalação

Siga os passos abaixo para configurar o projeto localmente.

1. Clonando o repositório

Primeiro, clone o repositório do projeto para a sua máquina local: Vá em code, e baixe o arquivo Zip. Extraia, e use o Visual Code, para abrir o projeto. Pode usar o Docker, 
se você conseguir.

2. Configurando o XAMPP
Inicie o XAMPP e ligue os módulos Apache e MySQL.
Crie um banco de dados MySQL para a aplicação usando o phpMyAdmin (ou qualquer cliente MySQL de sua escolha).
3. Instalando dependências do PHP
Navegue até o diretório do projeto e execute o comando abaixo para instalar as dependências do Laravel via Composer:

```bash
Copiar código
cd monolito
composer install
```
4. Instalando dependências do Node.js
Em seguida, instale as dependências de frontend com NPM:

```bash
Copiar código
npm install
```
5. Configurando o ambiente
Renomeie o arquivo .env.example para .env:
```bash
Copiar código
cp .env.example .env
Edite o arquivo .env para configurar o banco de dados que você criou:
dotenv
```
```bash
Copiar código
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```
Gere a chave da aplicação Laravel:
```bash
Copiar código
php artisan key:generate
```
6. Executando migrações e seeds
Execute as migrações para criar as tabelas no banco de dados:

```bash
Copiar código
php artisan migrate
```
Se você tiver seeds para popular o banco de dados com dados iniciais, execute:

```bash
Copiar código
php artisan db:seed
```
7. Compilando assets
Use o Laravel Mix para compilar os assets (CSS, JS, etc.):

```bash
Copiar código
npm run dev
```
8. Rodando o servidor local
Agora, você pode rodar o servidor de desenvolvimento do Laravel:

```bash
Copiar código
php artisan serve
Por padrão, o servidor estará disponível em http://127.0.0.1:8000.
```

## Dicas
Certifique-se de que o XAMPP esteja rodando o Apache e MySQL antes de iniciar o servidor Laravel.
Para um ambiente de produção, considere usar npm run prod em vez de npm run dev para otimizar os assets.
Caso haja problemas com permissões de pastas, execute o seguinte comando:
```bash
Copiar código
sudo chmod -R 775 storage
sudo chmod -R 775 bootstrap/cache
```

Licença
Este projeto é open-source e está licenciado sob os termos da MIT License.
