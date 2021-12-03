<?php
$server = "localhost";
$user = "root";     // user name - by default root
$password = "";     // password - by default none
$db = "project";    //DB Name

$conn = mysqli_connect($server, $user, $password, $db);

if ($conn) {
?>
    <script>
        console.log("Connection Successful");
    </script>
<?php
} else {
?>
    <script>
        console.log("Connection Successful");
    </script>
<?php
}
?>