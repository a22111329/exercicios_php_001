<?php
	$colecao = array(array("idade" => 88, "nome" => "Professor Raimundo", "salario" => 599.0, "reforma" => false ,"status" => true),
                     array("idade" => 42, "nome" => "Golfinho", "salario" => 600.0, "reforma" => true ,"status" => true),
                     array("idade" => 17, "nome" => "Ferris Bueler", "salario" => 0.0, "reforma" => false ,"status" => true));
    

    print_r($colecao);


    for($i = 0; $i < count($colecao); $i++) {
        foreach ($colecao[$i] as $item) {
            echo "$item <br>";
        }
    }
?>      