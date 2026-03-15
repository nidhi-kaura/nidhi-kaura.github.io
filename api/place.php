<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$apiKey  = 'AIzaSyDKny8ajQfkJH_ZgKQGZoum1s2OZQsuLcQ'; // ← your key here
$placeId = 'ChIJsZnRQcfvDzkR0PyvfIHeOBU';  // ← place id here
$fields  = $_GET['fields']   ?? 'name,rating,user_ratings_total,reviews';
$sort    = $_GET['reviews_sort'] ?? 'most_relevant';


$url = "https://maps.googleapis.com/maps/api/place/details/json"
     . "?place_id=" . urlencode($placeId)
     . "&fields="   . urlencode($fields)
     . "&reviews_sort=" . urlencode($sort)
     . "&key=" . $apiKey;

echo file_get_contents($url);