<html>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<title>Event Creation</title>
<body>

<?php

$title = addslashes($_GET['title']);
$date = $_GET['date'];
$imageurl = addslashes($_GET['image']);
$description = addslashes($_GET['description']);


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dunboyne";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO events (date, title, imageurl, description) VALUES ('$date', '$title', '$imageurl', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>
</html>
