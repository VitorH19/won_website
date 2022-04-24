<?php
    
    function consumirAPI(){
    $url = "http://etec199-2021-raqueloliveira.atwebpages.com/Won/equipe.json";
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
    $resultado = json_decode(curl_exec($ch));

    //var_dump($resultado);

    return $resultado;
    
}
?>