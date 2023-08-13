<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employer Rankings</title>
    <meta name="description" content="View Aggregated Employer Review Ratings">
    <meta name="keywords" content="Employer Review, Employer, Review, I hate my job, I love my job, bad boss, good company, bad company">
    <meta name="author" content="Jake Wilson">
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
    <div class="review_main_box">
        <h1>Employer Ratings</h1>
        <?php
        include 'login.php';

        try {
            $res = $open_review_s_db->query("SELECT company_name, overall_rating, reviews_count 
                                                        FROM reviewedEmployer_S ORDER BY overall_rating desc");
            while($row = $res->fetch(PDO::FETCH_ASSOC)) {
                $tempname = $row['company_name'];
                $temprating = $row['overall_rating'];
                $tempcount = $row['reviews_count'];

                echo "<div class = 'submit_review_div'>";
                echo "<h2>$tempname</h2>";
                echo "<h3 class='rating_head'>Rating: $temprating</h3>";
                echo "<label>Out of $tempcount reviews</label>";
                echo "</div>";

            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        ?>
    <br>

    <a class="btn" href="index.html">Home</a>
        <br><br>
    </div>

    <div id="total-chart-container">
        <h2 id="chart-header">Top 5 Rated Companies</h2>
        <canvas id="myChart" width="200" height="200"></canvas>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/chart.min.js"></script>
    <script type="text/javascript" src="js/bargraph.js"></script>

</body>
</html>

