<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link rel="stylesheet" href="../css/data.css">
</head>

<body>
    <section class="data-container">
        <span id="h1">All our Employee Details</span>
        <div class="glassmorph-container">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                </thead>
                <tbody>
                    <?php
                    include "../db/dbconn.php";
                    $select_query = "SELECT * FROM emp";
                    $query = mysqli_query($conn, $select_query);

                    while ($result = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $result['id']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['fname']; ?></td>
                            <td><?php echo $result['lname']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>