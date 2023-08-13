<?php

include('login.php');

$wordLength = 3;    //How much letters you can type in before the autocomplete starts
$numberResults = 15; //How many autocomplete results display

$employerNames = array();
$searchTerm = $_GET['term'];
$query = "SELECT * FROM employer WHERE company_name LIKE '%".$searchTerm."%'";
$result = $open_review_s_db->query($query);

if (strlen($searchTerm) >= $wordLength) {
    $counter = 0;
    while ($row = $result->fetch() and $counter < $numberResults) {
        $name = htmlspecialchars($row["company_name"]);
        array_push($employerNames, $name);
        $counter += 1;
    }
}

echo json_encode($employerNames);
?>