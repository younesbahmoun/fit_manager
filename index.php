<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>List Of Clients</h2>
        <a class="btn btn-primary" href="create.php" >New Clients</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>ADRESSE</th>
                    <th>CREATED AT</th>
                    <th>ACTION<th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $server_name = "localhost";
                    $user_name = "root";
                    $password = "";
                    $data_base = "documentation";

                    // create connection
                    $connection = new mysqli($server_name, $user_name, $password, $data_base);

                    // check connection
                    if ($connection -> connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }

                    // read all row from database table
                    $sql = "SELECT * FROM clients";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("Invalide query: " . $connection->error);
                    }

                    // read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <th>$row[id]</th>
                                <th>$row[name]</th>
                                <th>$row[email]</th>
                                <th>$row[phone]</th>
                                <th>$row[address]</th>
                                <th>$row[created_at]</th>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                                    <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>