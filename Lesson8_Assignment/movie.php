<?php
header("Content-Type: application/json; charset=UTF-8");

//Retrieve Movie Title from User and remove spaces in the Movie Title
$title = rawurlencode($_REQUEST['t=']);

// Send Request to OMDb API Server and receive HTTP Response from server
// Load the JSON movie data from the server
$json = file_get_contents("https://www.omdbapi.com/?t=" . $title);

// HTTP Response (the movie information) is returned to the client
echo $json;

?> 