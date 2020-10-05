# Cursos & Alunos - Gerador de certificados
Um teste simples para a entrevista feita pela @pando.com.vc
#### Requisitos:
- PHP >= 7.4.9;
- Composer;
- XAMPP/LAMP/WAMP/MySQL Workbench (para servir o banco de dados)
    - No meu caso utilizei o PHPMyAdmin junto ao XAMPP, mas também poderia ser feito combinando o PHPMyAdmin ou o MySQLWorkbench a qualquer outro programa AMP.
### Como rodar:
- Sirva o banco de dados ``` database/database.sql ``` em algum dos programas anteriores;
- Abra a pasta ``` \app ``` no terminal
- Rode o comando ``` composer install ``` e depois o comando ``` php artisan serve```
- E pronto! É só acessar o ``` http:://localhost:8000 ``` ou ``` http://127.0.0.1:8000/ ```.
    - Para evitar erros é sempre bom limpar o cache! (``` php artisan cache:clear ``` ou ``` php artisan config:cache ```)

##### `Atenção`: o arquivo ```.env ``` já se encontra no repositório.
