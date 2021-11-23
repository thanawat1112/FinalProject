<?php 

    include_once('functions.php');//Fx เชื่อมฐานข้อมูล

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $address = $_POST['address'];
        
        $sql = $insertdata->insert($fname, $lname, $email, $phonenumber, $address);
        
        if ($sql) {
            echo "<script>alert('ข้อมูลบันทึกสำเร็จ!');</script>";
            echo "<script>window.location.href='index.php'</script>";
        } else {
            echo "<script>alert('มีบางอย่างผิดพลาด กรุณาลองใหม่');</script>";
            echo "<script>window.location.href='insert.php'</script>";
        }
    }

?>

<!--หน้าฟอร์มกรอกข้อมูล-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <a href="index.php" class="text-primary">ย้อนกลับ</a>
        <hr>
        <h1 class="mt-5">เพิ่มเพื่อน</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <div class="mb-3">
                <label for="address">Address</label>
                <textarea name="address"cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" name="insert" class="text-primary">เพื่มรายชื่อ</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
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