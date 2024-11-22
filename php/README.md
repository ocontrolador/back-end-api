
# API Alura Imersão Dev Back-end


## Pré-requisitos

* PHP 8.3
* Composer

## Criação

```sh
mkdir alura-api
cd alura-api
composer init --no-interaction --name="alura/back-end" -a"src/"
composer require mongodb/mongodb vlucas/phpdotenv
composer dump-autoload
mkdir -p src/config src/Controllers src/Models src/routes public vendor
touch .env composer.json README.md public/index.php src/config/dbConfig.php src/Controllers/PostsController.php src/Models/PostsModels.php src/routes/postsRoutes.php
```

## Instalação

```sh
git git@github.com:ocontrolador/back-end-api.git
cd back-end-api/php
composer install
cp env.exemple .env
```

## Como usar

1. `php -S 127.0.0.1:3001 server.php`
2. `curl -s 127.0.0.1:3001/posts/3|jq` # retorna registro 3 no formato JSON
3. `curl -I 127.0.0.1:3001/nada` # rota não encontrada
4. `curl -i 127.0.0.1:3001/posts/100` # registro não encontrado

## Licença

MIT Licence

