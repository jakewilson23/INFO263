<?php

include 'login.php';

$result = $open_review_s_db->query("SELECT overall_rating, company_name FROM reviewedEmployer_S 
                                    ORDER BY overall_rating desc LIMIT 5");

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

print json_encode($data);