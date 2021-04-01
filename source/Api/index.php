<?php
$apiRequest = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$getPosts = json_decode($apiRequest);

if ($getPosts == null) {
    $msg = "Não Existem Posts No Momento Volte Mais Tarde, Erro Ao Tentar se Comunicar com a Api.";
}
