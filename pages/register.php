<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emp - Registered</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <section class="app-container">
        <div class="artwork-container">
            <div id="glassmorph-container">
                <div id="sub-sec">
                    <span id="h2">Welcome to</span>
                    <span id="h1">Stone Corp.</span>
                    <hr id="divider" />
                </div>
                <div id="sub-sec">
                    <span id="h2">We are</span>
                    <span id="h2">Glad to have you</span>
                    <span id="h3">On our Team.</span>
                </div>
                <div id="sub-sec">
                    <span id="h4">Get a look at all of our</span>
                    <a class="login-link" href="data.php">Employees</a>
                </div>
            </div>
        </div>
        <div class="reg-container">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="reg-form">
                <span id="h1" class="signup" for="">Sign Up</span>
                <label id="h4" for="email">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter First Name">
                <label id="h4" for="email">Last Name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter Last Name">
                <label id="h4" for="email">Email Adress</label>
                <input type="text" name="email" id="email" placeholder="Enter Email">
                <label id="h4" for="password">Set Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <label id="h4" for="confirm-password">Confirm Password</label>
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                <input type="submit" id="submit" value="Sign Up" name="register">
            </form>
        </div>
    </section>
</body>

</html>

<?php
include '../db/dbconn.php';

if (isset($_POST["register"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pass = $_POST['confirm-password'];

    if ($password == $confirm_pass) {
        $insert_query = "INSERT INTO emp(email, fname, lname, password) VALUES ('$email', '$fname', '$lname', '$password')";
        $query = mysqli_query($conn, $insert_query);

        if ($query) {
?>
            <script>
                alert("User Registered")
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Failed to Register")
            </script>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Passwords Do not Match")
        </script>
<?php
    }
}
?>