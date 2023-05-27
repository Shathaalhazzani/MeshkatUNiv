<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/Screenshot.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <title>الخرائط </title>
</head>
<body>
  <section class="desktop">
    <div class="img-barcode">
      <img src="img/Screenshot.png" alt="" width="200px">
    </div>
    <div id="output">
               <?php
                
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "teachers";

                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }
                
              


                sleep(2);
                $sql = "SELECT * FROM Teachers WHERE square='4-1'";

                $result = $conn->query($sql);
                if ($result->num_rows > 0) {

                echo 
                "<table>
                <tr>
                  <th>الأسم</th>
                  <th>رقم المكتب</th> 
                  <th>البريد الالكتروني</th>
                </tr>";
                
                  while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>".$row["name"].  " </td><td>" . $row["officeNum"]. "</td><td>". $row["email"]. "</td>";
                  echo "</tr>";
                }


              
              
                } 
                
                $conn->close();
            ?>
            </div>
    <div class="title-desktop">
      ادخل من الجوال ياجميل
    </div>
  </section>
  <section class="map"></section>
      </div>
    </body>
    </html>