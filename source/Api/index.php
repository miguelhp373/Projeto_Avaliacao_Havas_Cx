<?php
    try{
        $apiRequest = file_get_contents("https://jsonplaceholder.typicode.com/posts");
        $getPosts = json_decode($apiRequest);
    }catch(Exception $error){
        echo $error->getMessage();
    }
