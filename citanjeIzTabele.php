<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Čitanje podataka iz tabele</title>
</head>
<body>
<?php
    include 'konekcija.php';

    $sql = "SELECT * FROM rezrvacija";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Ime: " . $row["ime"]. ", email " . $row["mail"]. ", film: ".$row["film"].", termin: ".$row["film"]."<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
?>
</body>
</html>