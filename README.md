# Projeto Toolzz - README

Este é um projeto Laravel criado para toolzz.

## Pré-requisitos

Antes de começar, verifique se o seu ambiente de desenvolvimento atende aos seguintes requisitos:

- PHP >= 8.2
- Composer - [Instalação do Composer](https://getcomposer.org/doc/00-intro.md)
- Banco de Dados (MySQL, PostgreSQL, SQLite, etc.)
- Node.js (opcional, dependendo do seu front-end)

## Instalação e Configuração

### Clone o repositório

git clone https://github.com/AlexandreOsovski/toolzz

## Entre no projeto
cd toolzz

## Instale as dependências do Composer
composer install

## Configure o ambiente
Copie o arquivo de configuração do ambiente: cp .env.example .env <br>
(Configure o arquivo .env com suas variáveis de ambiente, como conexão com o banco de dados, etc.)

## Gere a chave de aplicação
php artisan key:generate

## Execute as migrações do banco de dados
php artisan migrate --seed

## Executando o Projeto
Para iniciar o servidor de desenvolvimento do Laravel, execute o seguinte comando: php artisan serve <br>
(Isso iniciará um servidor de desenvolvimento local em http://localhost:8000.)

## Outros Comandos Úteis
Limpar cache de configuração: php artisan config:clear <br>
Limpar cache de rotas: php artisan route:clear <br>
Limpar cache da aplicação: php artisan cache:clear <br>


