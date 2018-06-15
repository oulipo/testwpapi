<?php

function get($resource) {
    $apiUrl = "http://localhost:8888/wordpress/wp-json";
    $json = file_get_contents($apiUrl.$resource);
    $result = json_decode($json);
    return $result;
}