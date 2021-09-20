<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\ntabela filmes apagada\n"; 

$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(3,1)
    )
";

if ($bd->exec($sql)) 
    echo "\ntabela filmes criada\n"; 
else
    echo "\nerro ao criar tabela filmes\n";


$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        
        'Vingadores',
        'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
        'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências',
        9.9
    )";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Viuva Negra',
        'https://www.themoviedb.org/t/p/w300/rKq1Vlw0Bqe2EEvdmIkkkgPQAGf.jpg',
        'Natasha Romanoff, também conhecida como Viúva Negra, confronta o lado mais sombrio de sua história quando surge uma perigosa conspiração ligada ao seu passado. Perseguida por uma força implacável disposta a tudo para destruí-la, Natasha precisa agora lidar com seu passado como espiã e com as relações que deixou para trás muito antes de se tornar uma Vingadora.',
        10.0
    )";

if ($bd->exec($sql)) 
    echo "\nfilmes inseridos com sucesso\n"; 
else
    echo "\nerro ao inserir filmes\n";

?>
