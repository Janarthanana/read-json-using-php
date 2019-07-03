<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
header('Content-Type: text/html; charset=UTF-8');
$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata,true);

//echo $json["movies"];
//echo $json['movies'][0]['title'];

/*$output = "<ul>";
foreach ($json['movies'] as $movie) {
	$output .= "<h4>".$movie['title']."</h4>";
	$output .= "<li>Year: ".$movie['year']."</li>";
	$output .= "<li>Genre: ".$movie['genre']."</li>";
	$output .= "<li>Director: ".$movie['director']."</li>";
	}
	$output .= "</ul>";*/

/*$favcolor = "red";

switch ($favcolor) {
	case "red":
		echo "Your favorite color is red!";
		break;
	case "blue":
		echo "Your favorite color is blue!";
		break;
	case "green":
		echo "Your favorite color is green!";
		break;
	default:
		echo "Your favorite color is neither red, blue, nor green!";

}
		*/


	 //   echo $json['movies'][0]['title'];

/*$myObj->name = "John";
$myObj->age = 30;
$myObj->city_one = "New York";

$myJSON = json_encode($myObj);
$json = json_decode($myJSON,true);
echo $json["name"];
echo $json["age"];
echo $json["city_one"];*/

	//echo $output;
$start = microtime(true);
$message = null;
$messag = "employee"; // Processed in 0.0040 seconds throws error in 0.0006 seconds else 0.0058 seconds
function checkmsg($message) {
	//echo "function";
	//echo $message;

	//echo "before line";
	//$jd = file_get_contents("dictionary.json");
	$jd = file_get_contents("kl.json");
//echo $jd;
// echo $message;
	$j = json_decode($jd,true);
	//echo $j["$message"];
	if (array_key_exists("$message", $j))
	{
	$tp = $j["$message"];
//echo $j["employee"];

$reply = $tp;

echo $reply;
}
else
	{
	throw new Exception("Index Error");
	 }
  return true;
 }


if(isset($messag) && $messag != null) {
try {
/*if(isset($message))
{*/
//echo "try above value";
//echo $messag;
checkmsg("$messag");
//echo "try after value";

//echo "try last";
/*}
else
{
	echo "No Messsage";
}*/
}
catch(Exception $e) {
	//echo "went to catch";
  //echo 'Message: ' .$e->getMessage();
	$reply = "Sorry, Not yet learned";
	echo $reply; // needed to remove this line 

}


}

else
{
	echo "NO Message";
}
$end = microtime(true);
$time = number_format(($end - $start), 4);
echo '<br><br>','Processed time is ', $time, ' seconds';
?>
</html>