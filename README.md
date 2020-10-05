# Cursos & Alunos - Gerador de certificados
Um teste simples para a entrevista feita pela @pando.com.vc
### Especificações do sistema
- Laravel 8.8
- PHP 7.4.9
- Bootstrap 4.5
#### Requisitos para rodar:
- PHP >= 7.4.9;
- Composer;
- XAMPP/LAMP/WAMP/MySQL Workbench (para servir o banco de dados)
    - No meu caso utilizei o PHPMyAdmin junto ao XAMPP, mas também poderia ser feito combinando o PHPMyAdmin ou o MySQLWorkbench a qualquer outro programa AMP.
### Como rodar:
1. Sirva o banco de dados ``` database\database.sql ``` em algum dos programas anteriores;
2. Importe o povoamento ``` database\population.sql ```;
3. Abra a pasta ``` \app ``` no terminal;
4. Rode o comando ``` composer install ``` e depois o comando ``` php artisan serve```;
5. E pronto! É só acessar o ``` http:://localhost:8000 ``` ou ``` http://127.0.0.1:8000/ ```.
    - Para evitar erros é sempre bom limpar o cache! 
        - ``` php artisan cache:clear ``` ou ``` php artisan config:cache ``` fazem isso.

##### `Atenção`: o arquivo ```.env ``` já se encontra no repositório.
