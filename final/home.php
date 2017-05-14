<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Dunboyne Community Calendar</title>
  </head>
  <body>
    <h1><img src="banner.png" alt="banner"></h1>
    <div id="advert1">
      <p>To place your advert here, please email admin@dcc.com</p>
    </div>
    <div id="advert2">
      <p>To place your advert here, please email admin@dcc.com</p>
    </div>
    <div id="links">
      <a href="contact.html" target="_blank">Contact Us</a>
      <a href="about.html">About Dunboyne</a>
      <a href="blog.php" target="_blank">Community Blog</a>

    </div>
    <div class="month">
      <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
          May<br>
          <span style="font-size:18px">2017</span>
        </li>
      </ul>
    </div>

    <ul class="weekdays">
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
      <li>Su</li>
    </ul>

    <ul id="days">
      <?php

      for($i=1; $i<32; $i++){
        echo "<li id='day$i'>$i</li>";
      }

      ?>
    </ul>
      <script>

        window.onload = function(){
          var d = new Date();
          var day = d.getDate();
          var count =1;
          var l = document.getElementById("days").getElementsByTagName("li");
          for(count=1;count<=31;count++){
            var temp = l[count];
            if(parseInt(temp.innerHTML)==day){
              temp.style.backgroundColor="#1abc9c";
              break;
            }
          }

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

          $sql = "SELECT DAY(date) FROM events";
          $result = $conn->query($sql);

          echo "var ll = document.getElementById('days').getElementsByTagName('li');";


          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

                $day = $row['DAY(date)'];
                echo "  ll[$day-1].style.color='#FF0000';   ";


              }
          } else {
              echo "0 results";
          }
          $conn->close();



          ?>

        }

      </script>



      <!-- The Modal -->
      <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p id="modaltitle"></p>
        <img id="modalimg" src=""></img>
        <p id="modaldescribe"></p>
      </div>
    </div>

      <script>


        // Get the modal
        var modal = document.getElementById('myModal');
        var span = document.getElementsByClassName('close')[0];
        span.onclick = function(){
          modal.style.display = 'none';
        }
        window.onclick = function(event){
        if(event.target == modal){
          modal.style.display = 'none';
        }
      }

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

          $sql = "SELECT DAY(date), title, description, imageurl FROM events";
          $result = $conn->query($sql);

          if ($result->num_rows > 0){
              // output data of each row
              while($row = $result->fetch_assoc()) {

                $title = $row['title'];
                $description = addslashes($row['description']);
                $imageurl = $row['imageurl'];

                $day = $row['DAY(date)'];
                echo " var btn$day = document.getElementById('day$day'); ";
                echo " btn$day.addEventListener('click', function(){

                  modal.style.display = 'block';
                  document.getElementById('modaltitle').innerHTML = '$title';
                  document.getElementById('modalimg').src = '$imageurl';
                  document.getElementById('modaldescribe').innerHTML = '$description';


                });   ";

              }
          } else {
              echo "0 results";
          }
          $conn->close();

          ?>

        </script>

    </ul>
  </body>
</html>
