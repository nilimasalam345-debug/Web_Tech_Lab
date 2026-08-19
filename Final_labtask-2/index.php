<?php

session_start();

if (isset($_COOKIE["student_id"])) {
    $remembered_id = $_COOKIE["student_id"];
} else {
    $remembered_id = "";
}

if (isset($_POST["next"])) {

    $_SESSION["student_id"] = $_POST["student_id"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["department"] = $_POST["department"];

    if (isset($_POST["remember"])) {

        setcookie(
            "student_id",
            $_POST["student_id"],
            time() + (86400 * 30),
            "/"
        );
    }

    header("Location: academic.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>University Portal Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>University Portal</h1>
    <h2>Student Registration</h2>

    <form method="POST">

        <label>Student ID</label>
        <input
            type="text"
            name="student_id"
            value="<?php echo htmlspecialchars($remembered_id); ?>"
            required
        >

        <label>Student Name</label>
        <input
            type="text"
            name="name"
            required
        >

        <label>Email</label>
        <input
            type="email"
            name="email"
            required
        >

        <label>Department</label>

        <select name="department" required>
            <option value="">Select Department</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Business Administration">Business Administration</option>
            <option value="Architecture">Architecture</option>
        </select>

        <label class="checkbox">
            <input type="checkbox" name="remember">
            Remember Student ID
        </label>

        <button type="submit" name="next">
            Next
        </button>

    </form>

</div>

</body>
</html>