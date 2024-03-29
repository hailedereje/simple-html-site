<?php
   
    header("Access-Control-Allow-Origin: *");
   $curl = curl_init();
   $url = sprintf("%s?%s", "https://jsonplaceholder.typicode.com/comments", http_build_query(["postId=3"]));
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

   $result = curl_exec($curl);
   echo $result;
   if(!$result){die("Connection Failure");}
   curl_close($curl);
    
   return $result;

?>