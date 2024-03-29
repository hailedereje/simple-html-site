<?php
   
    header("Access-Control-Allow-Origin: *");
    $url = "https://jsonplaceholder.typicode.com/comments";
    
    $curl = curl_init();
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

    $result = curl_exec($curl);
    
    echo $result;
    echo curl_error($curl);
   
    curl_close($curl);
        
    return $result;

?>