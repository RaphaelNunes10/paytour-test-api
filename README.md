## Introdução

Esse projeto se destina à Paytour como teste prático, bem como um repositório de facil acesso para aprender sobre Laravel e implementação de email.

O projeto foi criado utilizando Visual Studio como IDE com Laravel para a criação de uma API onde é possível efetuar um cadastro de Curricula no PostgreSQL.

## Requerimentos

* [VSCode IDE](https://code.visualstudio.com/Download)
* [GIT](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/download/)
* [PHP](https://www.php.net/downloads.php) OU [Wamp](https://www.wampserver.com/en/) e similares.

## Instalação

* Baixe e instale as ferramentas requeridas;

* Tenha certeza que estas *Dynamic Extensions* NÃO estão comentadas no arquivo de configuração php.ini (encontrado na pasta onde você instalou o PHP):

> * extension=curl
> * extension=fileinfo
> * extension=mbstring
> * extension=openssl
> * extension=pdo_pgsql
> * extension=pgsql

* No VSCode, abra uma nova pasta/crie um novo projeto;
* Abra o terminal (Terminal -> Novo Terminal);
* Inicialize a pasta como um novo repositório:

> git init

* Clone este repositório:

> git clone https://github.com/RaphaelNunes10/paytour-test-api.git

* Instale o Laravel:

> composer global require laravel/installer

* Gere a chave da aplicação:

> PHP artisan key:generate

* Configure o arquivo .env (renomeie o arquivo .env.example se não houver este arquivo) ou as variáveis de ambiente do serviço de armazenamento desta forma:

> APP_NAME=Laravel  
> APP_ENV=local  
> APP_KEY=-chave-da-aplicação-  
> APP_URL=http://localhost  
>  
> DB_CONNECTION=pgsql  
> DB_HOST=-host-do-db-  
> DB_PORT=-porta-do-db-  
> DB_DATABASE=-nome-do-db-  
> DB_USERNAME=-nome-de-usuário-do-db-  
> DB_PASSWORD=-senha-do-db-  
>  
> MAIL_MAILER=smtp  
> MAIL_HOST=-host-do-serviço-de-email-  
> MAIL_PORT=-porta-do-serviço-de-email-  
> MAIL_USERNAME=-nome-de-usuário-do-serviço-de-email-  
> MAIL_PASSWORD=-senha-do-serviço-de-email-  
> MAIL_ENCRYPTION=tls  
> MAIL_FROM_ADDRESS=-conta-de-email-do-remetente-  
> MAIL_FROM_NAME=-nome-do-remetente  

* Instale os pacotes do projeto:

> composer update

* Certifique-se de que a conexão ao banco de dados foi bem sucedida e rode as migrations para criar as tabelas:

> php artisan migrate

* (opcional) Cadastre alguns dados para teste:

> php artisan db:seed

* Rode o projeto:

> php artisan serve

* O projeto abrirá por padrão em http://127.0.0.1:8000, você pode digitar os *endpoints* na URL para metodos GET ou acessar http://127.0.0.1:8000/docs para testar-los, podendo também testar os demais métodos.

## *Overview*

O projeto envia por email os arquivos em anexo como Base64, recebendo um objeto contendo:

> {    
>&emsp;nome: '-nome-do-arquivo-',    
>&emsp;base64: '-dados-do-arquivo-em-base64-',    
>&emsp;mime: '-tipo-MIME-do-arquivo-'   
> }  

O projeto em Vue+Nuxt.js que disponibiliza a interface, incluindo formulário com upload de arquivos para base64 e utilização de API se encontra em: https://github.com/RaphaelNunes10/paytour-test