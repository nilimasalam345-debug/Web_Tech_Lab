<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Summary</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Summary</h1>

    <div class="summary">

        <h3>Student Information</h3>

        <p>
            <strong>Student ID:</strong>
            <?php echo htmlspecialchars($_SESSION["student_id"]); ?>
        </p>

        <p>
            <strong>Name:</strong>
            <?php echo htmlspecialchars($_SESSION["name"]); ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo htmlspecialchars($_SESSION["email"]); ?>
        </p>

        <p>
            <strong>Department:</strong>
            <?php echo htmlspecialchars($_SESSION["department"]); ?>
        </p>

        <h3>Academic Information</h3>

        <p>
            <strong>Semester:</strong>
            <?php echo htmlspecialchars($_SESSION["semester"]); ?>
        </p>

        <p>
            <strong>Course:</strong>
            <?php echo htmlspecialchars($_SESSION["course"]); ?>
        </p>

        <p>
            <strong>Credits:</strong>
            <?php echo htmlspecialchars($_SESSION["credits"]); ?>
        </p>

        <h3>Cookie Information</h3>

        <?php

        if (isset($_COOKIE["student_id"])) {

            echo "<p><strong>Remembered Student ID:</strong> "
                . htmlspecialchars($_COOKIE["student_id"])
                . "</p>";

        } else {

            echo "<p>Student ID cookie is not set.</p>";

        }

        ?>

    </div>

    <a href="complete.php" class="button">
        Complete Registration
    </a>

</div>

</body>
</html>s