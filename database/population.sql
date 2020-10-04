use `database`

INSERT INTO `aluno` (idaluno, nome, sobrenome) VALUES 
(1, 'Kevin', 'Cerqueira'),
(2, 'Dominique', 'Cerqueira'),
(3, 'Esdras', 'Abreu'),
(4, 'Yasmin', 'Campos'),
(5, 'Lucas', 'Carneiro'),
(6, 'Daniele', 'Lima'),
(7, 'Lucas', 'Bastos'),
(8, 'Felipe', 'Pinheiro'),
(9, 'Thais', 'Sampaio'),
(10, 'Pollyana', 'Cruz');

INSERT INTO `curso` (idcurso, nome, descricao,cargahoraria) VALUES	
(1, 'Laravel 8.x - Do básico ao avançado', 'Aprenda a desenvolver sites e aplicações modernas com o mais poderoso Framework PHP.', 20),
(2, 'Web Design: Construa Sites com PHP, HTML, CSS e JavaScript', 'Curso completo para aprender a construir sites usando as linguagens web mais conceituadas do mercado', 24),
(3, 'WebScraping usando API, Beautiful Soup e Pandas', 'Scrape sua primeira página da web usando Python API, Beautiful Soup e Python e estruture os dados usando Pandas', 2),
(4, 'Bootstrap 4 - Completo, Prático e Responsivo', 'Crie Design Responsivos para dashboards, marketing de produtos e para aplicações com o curso mais completo e prático', 8),

INSERT INTO `cursoaluno` (idcurso, idaluno) VALUES 
(1, 1),
(1, 3),
(1, 5),
(1, 7),
(1, 9),
(2, 2),
(2, 4),
(2, 6),
(2, 8),
(2, 10),
(3, 1),
(3, 2),
(3, 5),
(3, 6),
(3, 9),
(3, 10),
(4, 3),
(4, 4),
(4, 7),
(4, 10),
