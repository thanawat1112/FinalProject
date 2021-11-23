<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
     
    
    <div class="container">
    <h1 class="mt-5">เพื่อนผู้ทรงเกียรติ</h1>
    <a href="insert.php" class=class="text-primary">เพิ่มเพื่อน</a>
    <hr>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>Email</th>
            <th>เบอร์โทร</th>
            <th>ที่อยู่</th>
            <th>Posting Date</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </thead>


        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phonenumber']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['postingdate']; ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>" class="text-primary">แก้ไข</a></td>
                    <td><a href="delete.php?del=<?php echo $row['id']; ?>" class="text-primary">ลบ</a></td>
                </tr>

            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>
    <script src="script.js"></script>

   <!-- jQuery first, then Tether, then Bootstrap JS. -->
   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>
<style> 

body
{background:url(https://wallpaperaccess.com/full/3047223.jpg);
background-size:1920px 1080px;
-moz-background-size:1920px 1080px; /* Old Firefox */
background-repeat:no-repeat;

</style>
</head>
</html>