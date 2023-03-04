<?php 
 include("Connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Display</title>
  <link rel="stylesheet" href="Image Display.css">
</head>
<body>
   
  <h1>Fetching data from MYSQL Database using PHP</h1>
    
    <div class="data">
        <table>
            <thead>
              <th>Serial No</th>
              <th>Name</th>
              <th>Profile</th>
            </thead> 
            <tbody>
                <?php
                   $query="SELECT * FROM user_data"; 
                   $result=mysqli_query($conn,$query);
                   while($row_fetch= mysqli_fetch_assoc($result))
                    {
                        echo"
                            <tr>
                              <td>$row_fetch[Serial_No]</td>
                              <td>$row_fetch[UserName]</td>
                              <td><img src='$row_fetch[Profile]' width='150px'></td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>