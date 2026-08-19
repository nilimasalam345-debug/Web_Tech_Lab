<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["next"])) {

    $_SESSION["semester"] = $_POST["semester"];
    $_SESSION["course"] = $_POST["course"];
    $_SESSION["credits"] = $_POST["credits"];

    header("Location: summary.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Academic Information</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Academic Information</h1>

    <div class="student-info">

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

    </div>

    <form method="POST">

        <label>Semester</label>

        <select name="semester" required>
            <option value="">Select Semester</option>
            <option value="Spring 2026">Spring 2026</option>
            <option value="Summer 2026">Summer 2026</option>
            <option value="Fall 2026">Fall 2026</option>
        </select>

        <label>Course Selection</label>

        <select name="course" required>
            <option value="">Select Course</option>
            <option value="Web Technologies">Web Technologies</option>
            <option value="Database Systems">Database Systems</option>
            <option value="Algorithms">Algorithms</option>
            <option value="Computer Networks">Computer Networks</option>
        </select>

        <label>Credit Information</label>

        <input
            type="number"
            name="credits"
            min="1"
            max="6"
            placeholder="Enter credit"
            required
        >

        <button type="submit" name="next">
            Continue
        </button>

    </form>

</div>

</body>
</html>