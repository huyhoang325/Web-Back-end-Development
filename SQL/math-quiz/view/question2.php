<?php include "../model/database.php"; ?>
<?php session_start(); ?>
<?php
//Set question number
$number = (int)$_GET['n'];

//Get total number of questions
$query = "select * from questions";
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;

// Get Question
$query = "select * from `questions` where question_number = $number";

//Get result
$result = $mysqli->query($query) or die($mysqli->error . __LINE__);
$question = $result->fetch_assoc();


// Get Choices
$query = "select * from `choices` where question_number = $number";

//Get results
$choices = $mysqli->query($query) or die($mysqli->error . __LINE__);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Mathematic Quizzer!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="container">
        <header>
            <div class="container">
                <h1>Mathematic Quizzer!</h1>
            </div>
        </header>


        <main>
            <div class="container">
                <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo $question['question'] ?>
                </p>
                <form method="post" action="../controller/process2.php">
                    <ul class="choices">
                        <?php while ($row = $choices->fetch_assoc()) : ?>
                            <li><input name="choice2" type="radio" value="<?php echo $row['id']; ?>" />
                                <?php echo $row['choice']; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <input type="submit" class="btn btn-primary" value="Submit" />
                    <input type="hidden" name="number2" value="<?php echo $number; ?>" />
                </form>
            </div>
    </div>
    </main>


    <footer>

    </footer>
</body>

</html>