<?php

// People Array @TODO - Get from DB

$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Johan";
$people[] = "Ernie";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Amanda";
$people[] = "Katie";
$people[] = "Jose";
$people[] = "Malcom";



// Get Query String

$q = $_REQUEST['q'];

$suggestion = "" ;

// Get Suggestions
if($q !== "") {

    $q = strtolower($q);
    $len = strlen($q);

    foreach ($people as $person) {
        if(stristr($q, substr($person, 0, $len))) {
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }

} 

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>