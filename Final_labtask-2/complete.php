<?php

session_start();

if (isset($_POST["complete"])) {

    session_unset();

    session_destroy();

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Complete</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Registration Completed</h1>

    <p class="success">
        Your university registration has been completed successfully.
    </p>

    <p>
        Your session data has been removed.
    </p>

    <form method="POST">

        <button type="submit" name="complete">
            Finish and Logout
        </button>

    </form>

</div>

</body>
</html>