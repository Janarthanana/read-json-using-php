<?php

$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata,true);

//echo $json['movies'][0]['title'];

$output = "<ul>";
foreach ($json['movies'] as $movie) {
	$output .= "<h4>".$movie['title']."</h4>";
	$output .= "<li>Year: ".$movie['year']."</li>";
	$output .= "<li>Genre: ".$movie['genre']."</li>";
	$output .= "<li>Director: ".$movie['director']."</li>";
	}
	$output .= "</ul>";
	echo $output;

?>