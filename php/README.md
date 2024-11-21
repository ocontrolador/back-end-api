
# API Alura Imersão Dev Back-end


## Pré-requisitos

* PHP 8.3
* Composer

## Instalação

1. `git git@github.com:ocontrolador/back-end-api.git`
2. `cd back-end-api/php`
3. `composer install`

## Como usar

1. `php -S 127.0.0.1:3001 server.php`
2. `curl -s 127.0.0.1:3001/posts/3|jq` # retorna registro 3 no formato JSON
3. `curl -I 127.0.0.1:3001/nada` # rota não encontrada
4. `curl -i 127.0.0.1:3001/posts/100` # registro não encontrado

## Licença

MIT Licence

