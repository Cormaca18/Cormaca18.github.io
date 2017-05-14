
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, gender FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. "   -   Name: " . $row["name"]. "   -  Gender: " . $row["gender"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
