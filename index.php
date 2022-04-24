<link rel="stylesheet" href="estilo/style.css"/>

<?php
    require "api.php";
    $resultado = consumirAPI();

    
    require "index.html";
    

    require "principal/inicioGrid.html";
    foreach ($resultado as $results => $equipe ) {
        require "principal/itemGridInicio.html";
        $nomeMembro = $equipe->name;
        $descricaoMembro =  $equipe->description;
        $imgMembro = $equipe->image;
        
        require "principal/card.html";
        require "principal/itemGridFim.html";

    }

    require "principal/fimGrid.html";
    require "principal/fim.html";
    
    
?>