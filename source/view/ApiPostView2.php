<?php

try {
    $postid = $_GET['id'];

    $getPostApi = file_get_contents("https://jsonplaceholder.typicode.com/posts/" . $postid);

    $postSelect = json_decode($getPostApi);

    $apiRequest = file_get_contents("https://jsonplaceholder.typicode.com/posts");
    $getPosts = json_decode($apiRequest);

    $readyMore = array_slice($getPosts, 0, 4);

} catch (Exception $error) {
    echo $error->getMessage();
}
