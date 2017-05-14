<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="blog.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script type="text/javascript" src="functions.js"></script>
    <title>DCC Blog</title>
  </head>
  <body onLoad="scrollDiv_init()">
    <div id="advert1">
      <p>To place your advert here, please email admin@dcc.com</p>
    </div>
    <div id="advert2">
      <p>To place your advert here, please email admin@dcc.com</p>
    </div>
    
    <div id="box" onMouseOver="pauseDiv()" onMouseOut="resumeDiv()">
    <?php
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

    $sql = "SELECT name, post FROM blogs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='blogger'><p class='poster'> Name:</p><p class='blogpost'>  " . $row["name"]. "</p> <br> <p class='poster'> Post:</p> <p class='blogpost'>" . $row["post"]. "</p></div><br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>

  </div>


    <div id="formholder">
        <form id="myform" action="welcome.php" method="get">
        <input type="text" name="FirstName" class="box1" value="" placeholder="Your Name"><br>
        <textarea name="Post" value="" class="box2" placeholder="What's on your mind?"></textarea><br>
        <input type="submit" class="submitbtn" value="Submit" >
        </form>
    </div>
    <br>
    <a href="home.php">Home</a>
  </body>
</html>
