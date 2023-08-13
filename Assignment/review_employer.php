<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit an Employer Review</title>
    <meta name="description" content="Submit an Anonymous Employer Review">
    <meta name="keywords" content="Employer Review, Employer, Review, I hate my job, I love my job, bad boss, good company, bad company">
    <meta name="author" content="Jake Wilson">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/styles.css" >
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="js/frontend_script.js"></script>
</head>
<body>
    <div class="main_box">
    <h1>Submit an Employer Review</h1>
    <br>
    <form method="post">


        <div class="autocomplete-container" style="width:300px;">
            <h3>Enter an Employer</h3>
            <input  type="text" id="autocomplete_name" name="employer_name" >
        </div>

        <div class="submit_review_div">
            <h3>Pros for the Employer</h3>
            <input class="input_text_box" type="text" id="review_pros" name="review_pros">
            <h3>Cons of the Employer</h3>
            <input class="input_text_box" type="text" id="review_cons" name="review_cons">
            <h3>Advice for the Employer</h3>
            <input class="input_text_box" type="text" id="review_advice" name="review_advice">
            <br>
        </div>

        <div class="submit_review_div">
            <h3>Do you still work for Employer?</h3>
            <p>
                <input type="radio" name="yes_no" value=1 checked>Yes</input>
            </p>
            <p>
                <input type="radio" name="yes_no" value=0 >No</input>
                <br><br>
                <label>If No, What year did you leave?</label>
                <input type="number" min="1900" max="2099" step="1" value="2016" name="jobEndingYear"/>
            </p>

            <h3>What is Your Job Title?</h3>
            <input class="input_text_box" type="text" id="review_jobTitle" name="review_jobTitle">

            <h3>How Many Years did you work for Employer?</h3>
            <input type="number" min="0" max="70" step="1" value="0" name="numYears"/>

        </div>

        <div class="submit_review_div">

            <h3>How do you rate the Employers Business Outlook?</h3>
            <p>
                <input type="radio" name="business_outlook" value="POSITIVE" >Positive</input>
            </p>
            <p>
                <input type="radio" name="business_outlook" value="NEUTRAL" checked>Neutral</input>
            </p>
            <p>
                <input type="radio" name="business_outlook" value="NEGATIVE" >Negative</input>
            </p>

            <h3>How do you rate the Career Opportunities of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="careerOpportunities"/>

            <h3>How do you rate the Employers CEO?</h3>
            <p>
               <input type="radio" name="rate_ceo" value="APPROVE" >Approve</input>
            </p>
            <p>
                <input type="radio" name="rate_ceo" value="NO_OPINION" checked>No Opinion</input>
            </p>
            <p>
                <input type="radio" name="rate_ceo" value="DISAPPROVE" >Disapprove</input>
            </p>

            <h3>How do you rate the Compensation and Benefits of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="CompAndBenefits"/>

            <h3>How do you rate the Culture and Values of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="CultureAndValues"/>

            <h3>How do you rate the Diversity and Inclusion of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="DiverseAndIncl"/>

            <h3>How do you rate the Senior Leadership of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="SeniorLeadership"/>

            <h3>How do you rate the Work/Life Balance of the Employer?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="WorkLifeBalance"/>
        </div>

        <div class="submit_review_div">

            <h3>Would you recommend the Employer to a friend?</h3>
            <p>
                <input type="radio" name="recommend_friend" value="POSITIVE" checked>Yes</input>
            </p>
            <p>
                <input type="radio" name="recommend_friend" value="NEGATIVE">No</input>
            </p>

            <h3>How do you rate the Employer Overall?</h3>
            <label>Rated 1 (Very Bad) to 5 (Very Good)</label>
            <br>
            <input type="number" min="1" max="5" step="1" value="3" name="OverallRate"/>

            <h3>Summary of the Employer</h3>
            <input class="input_text_box" type="text" id="review_summary" name="review_summary">
        </div>
        <br>
    <br>

        <input class="submit_btn" type="submit" name="submit_review" value="Submit Employer Review">
    </form>
    <br>

    <a class="btn" href="index.html">Home</a>
    </div>

    <?php

        $reviewDateTime = strftime('%Y-%m-%d %H:%M:%S');
        $review_advice = '';
        $review_cons = '';
        $employmentStatus = null;
        $yes_no = 1;
        $jobEndingYear = null;
        $review_jobTitle = null;
        $numYears = 1;
        $review_pros = '';
        $business_outlook = 'NEUTRAL';
        $careerOpportunities = 3;
        $rate_ceo = "NO_OPINION";
        $CompAndBenefits = 3;
        $CultureAndValues = 3;
        $DiverseAndIncl = 3;
        $OverallRate = 3;
        $recommend_friend = 'NEGATIVE';
        $SeniorLeadership = 3;
        $WorkLifeBalance = 3;
        $review_summary = '';

        $button_pushed = false;
        if (isset($_POST['submit_review'])) {
            $button_pushed = true;
        }

        if($button_pushed) {
            include 'login.php';
            $reviewIdQuery = "SELECT MAX(reviewId) AS max from employerreview_s";
            $result = $open_review_s_db->query($reviewIdQuery);
            $id_max = $result->fetch();
            $reviewId = $id_max['max'] + 1; //take the highest review in the table and add 1 to get a unique number

            if(!(empty($_POST['employer_name']))){

                $tempName = $_POST['employer_name'];
                $employerIdQuery = "SELECT employer_id AS id from employer where company_name = '$tempName'";
                $tempResult = $open_review_s_db->query($employerIdQuery);
                $emp_id = $tempResult->fetchAll();

                if (sizeof($emp_id) > 0) { //input company name is in the database
                    $employerId = $emp_id[0]['id'];

                    if(!(empty($_POST['review_advice']))){
                        $review_advice = $_POST['review_advice'];
                    }

                    if(!(empty($_POST['review_cons']))){
                        $review_cons = $_POST['review_cons'];
                        }

                    $yes_no = $_POST['yes_no'];
                    if ($yes_no == 0) {
                        $jobEndingYear = $_POST['jobEndingYear'];
                    }

                    if(!(empty($_POST['review_jobTitle']))){
                        $review_jobTitle = $_POST['review_jobTitle'];
                    }

                    $numYears = $_POST['numYears'];

                    if(!(empty($_POST['review_pros']))){
                        $review_pros = $_POST['review_pros'];
                    }

                    $business_outlook = $_POST['business_outlook'];

                    $careerOpportunities = $_POST['careerOpportunities'];

                    $rate_ceo = $_POST['rate_ceo'];

                    $CompAndBenefits = $_POST['CompAndBenefits'];

                    $CultureAndValues = $_POST['CultureAndValues'];

                    $DiverseAndIncl = $_POST['DiverseAndIncl'];

                    $OverallRate = $_POST['OverallRate'];

                    $recommend_friend = $_POST['recommend_friend'];

                    $SeniorLeadership = $_POST['SeniorLeadership'];

                    $WorkLifeBalance = $_POST['WorkLifeBalance'];

                    if(!(empty($_POST['review_summary']))){
                        $review_summary = $_POST['review_summary'];
                    }

                    try {
                        include 'login.php';

                        $query = "INSERT INTO employerreview_s (reviewId, employerId, reviewDateTime, advice, cons, 
                              employmentStatus, isCurrentJob, jobEndingYear, jobTitle, lengthOfEmployment,
                              pros, ratingBusinessOutlook, ratingCareerOpportunities, ratingCeo,
                              ratingCompensationAndBenefits, ratingCultureAndValues, ratingDiversityAndInclusion,
                              ratingOverall, ratingRecommendToFriend, ratingSeniorLeadership,
                              ratingWorkLifeBalance, summary) VALUES" .
                            "(:reviewId, :employerId, :reviewDateTime, :review_advice, :review_cons, :employmentStatus, :yes_no, 
                            :jobEndingYear, :review_jobTitle, :numYears, :review_pros, :business_outlook, :careerOpportunities,
                            :rate_ceo, :CompAndBenefits, :CultureAndValues, :DiverseAndIncl, :OverallRate, :recommend_friend,
                            :SeniorLeadership, :WorkLifeBalance, :review_summary)";

                        $stmt = $open_review_s_db->prepare($query);

                        $stmt->bindParam(':reviewId', $reviewId);
                        $stmt->bindParam(':employerId', $employerId);
                        $stmt->bindParam(':reviewDateTime', $reviewDateTime);
                        $stmt->bindParam(':review_advice', $review_advice);
                        $stmt->bindParam(':review_cons', $review_cons);
                        $stmt->bindParam(':employmentStatus', $employmentStatus);
                        $stmt->bindParam(':yes_no', $yes_no);
                        $stmt->bindParam(':jobEndingYear', $jobEndingYear);
                        $stmt->bindParam(':review_jobTitle', $review_jobTitle);
                        $stmt->bindParam(':numYears', $numYears);
                        $stmt->bindParam(':review_pros', $review_pros);
                        $stmt->bindParam(':business_outlook', $business_outlook);
                        $stmt->bindParam(':careerOpportunities', $careerOpportunities);
                        $stmt->bindParam(':rate_ceo', $rate_ceo);
                        $stmt->bindParam(':CompAndBenefits', $CompAndBenefits);
                        $stmt->bindParam(':CultureAndValues', $CultureAndValues);
                        $stmt->bindParam(':DiverseAndIncl', $DiverseAndIncl);
                        $stmt->bindParam(':OverallRate', $OverallRate);
                        $stmt->bindParam(':recommend_friend', $recommend_friend);
                        $stmt->bindParam(':SeniorLeadership', $SeniorLeadership);
                        $stmt->bindParam(':WorkLifeBalance', $WorkLifeBalance);
                        $stmt->bindParam(':review_summary', $review_summary);

                        $stmt->execute();

                        echo'<script> window.location="successful_review_submit.php"; </script> ';

                    }
                    catch (PDOException $e) {
                        fatalError($e->getMessage());
                    }
                }
            }
        }

    function fatalError($errorMessage)
    {
        echo "<p><strong>Something went wrong: $errorMessage</strong></p>";
    }
    ?>
    </body>
</html>

