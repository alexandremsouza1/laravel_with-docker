

## Intruções

Projeto está rodando em docker

 - docker-compose up --build

## Especificações

 - Laravel v8
 - php v8
 - mysql v8


## Rotas

|
+--------+-----------+-----------------------------------+------------------+------------------------------------------------------------+------------+
|        | GET|HEAD  | /                                 |                  | Closure                                                    | web        |
|        | GET|HEAD  | api/clientes                      | clientes.index   | App\Http\Controllers\ClientsController@index               | api        |
|        | POST      | api/clientes                      | clientes.store   | App\Http\Controllers\ClientsController@store               | api        |
|        | GET|HEAD  | api/clientes/{cliente}            | clientes.show    | App\Http\Controllers\ClientsController@show                | api        |
|        | PUT|PATCH | api/clientes/{cliente}            | clientes.update  | App\Http\Controllers\ClientsController@update              | api        |
|        | DELETE    | api/clientes/{cliente}            | clientes.destroy | App\Http\Controllers\ClientsController@destroy             | api        |
|        | GET|HEAD  | api/consulta/final-placa/{numero} |                  | App\Http\Controllers\ClientsController@consultaFinalPlaca  | api        |
|        | GET|HEAD  | api/run-migration                 |                  | Closure                                                    | api        |
|        | GET|HEAD  | api/run-seeder/{class}            |                  | Closure                                                    | api        |       
|        | GET|HEAD  | sanctum/csrf-cookie               |                  | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show | web        |       
+--------+-----------+-----------------------------------+------------------+------------------------------------------------------------+------------+

As rotas migration cria a estrutura e a rota seeder alimenta o banco de dados



 - existe ainda um arquivo do postman que pode ser baixado afim de facilitar a utilização da API

 [postman_collection.json](https://github.com/alexandremsouza1/laravel_with-docker/blob/master/database/postman/JN2.postman_collection.json)
