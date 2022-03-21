

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


<div class="modal fade " id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header " style="background-color:#502064; color: white;">
        <h5 class="modal-title" id="signupModalLabel">Sign up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">

           
      <div class="mb-4">
                <div class="col-sm-12">
                <input type="text" name="name" class="form-control" required minlength="3" placeholder="ชื่อ">
              </div>
              </div>
              <div class="mb-4">
                <div class="col-sm-12">
                  <input type="text" name="surname" class="form-control" required minlength="3" placeholder="นามสกุล">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="text" name="username" class="form-control" required minlength="3" placeholder="username">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="email" name="email" class="form-control" required minlength="3" placeholder="email">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="password" name="password" class="form-control" required minlength="3" placeholder="password">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="date" name="bday" class="form-control" required minlength="3" placeholder="bday">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="int" name="numphone" class="form-control" required minlength="3" placeholder="numphone">
                </div>
                </div>
                <div class="mb-4">
                <div class="col-sm-12">
                  <input type="text" name="address" class="form-control" required minlength="3" placeholder="address">
                </div>
                </div>
                <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn" style="background-color:#502064; color: white;">Login</button>
            </div>
              </form>
            </div>

            </div>
        </div>
        </div>
</body>
</html>

<?php

  //print_r($_POST); //ตรวจสอบมี input อะไรบ้าง และส่งอะไรมาบ้าง 
 //ถ้ามีค่าส่งมาจากฟอร์ม
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])&& isset($_POST['bday']) && isset($_POST['numphone']) && isset($_POST['address']) ){
    // sweet alert 
    echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

    //ไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'config/db.php';
    //ประกาศตัวแปรรับค่าจากฟอร์ม
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); //เก็บรหัสผ่านในรูปแบบ sha1 
    
    $bday = $_POST['bday'];
    $numphone = $_POST['numphone'];
    $address = $_POST['address'];
    $urole = 'user';

    //check duplicat
      $stmt = $conn->prepare("SELECT id FROM test WHERE username = :username");
      //$stmt->bindParam(':username', $username , PDO::PARAM_STR);
      $stmt->execute(array(':username' => $username));
      //ถ้า username ซ้ำ ให้เด้งกลับไปหน้าสมัครสมาชิก ปล.ข้อความใน sweetalert ปรับแต่งได้ตามความเหมาะสม
      if($stmt->rowCount() > 0){
          echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "Username ซ้ำ !! ",  
                            text: "กรุณาสมัครใหม่อีกครั้ง",
                            type: "warning"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                </script>';
      }
      else{ //ถ้า username ไม่ซ้ำ เก็บข้อมูลลงตาราง
              //sql insert
              $stmt = $conn->prepare("INSERT INTO test (name, surname, username,email, password, bday, numphone, address, urole)
              VALUES (:name, :surname, :username,:email, :password, :bday, :numphone, :address, :urole)");
              $stmt->bindParam(':name', $name, PDO::PARAM_STR);
              $stmt->bindParam(':surname', $surname , PDO::PARAM_STR);
              $stmt->bindParam(':username', $username , PDO::PARAM_STR);
              $stmt->bindParam(':email', $email , PDO::PARAM_STR);
              $stmt->bindParam(':password', $password , PDO::PARAM_STR);
              
              $stmt->bindParam(':bday', $bday , PDO::PARAM_STR);
              $stmt->bindParam(':numphone', $numphone , PDO::PARAM_STR);
              $stmt->bindParam(':address', $address , PDO::PARAM_STR);
              $stmt->bindParam(":urole", $urole);
              $result = $stmt->execute();
              if($result){
                  echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "สมัครสมาชิกสำเร็จ",
                            text: "กรุณาทำการ Login เพื่อเข้าสู่ระบบ",
                            type: "success"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }else{
                 echo '<script>
                       setTimeout(function() {
                        swal({
                            title: "เกิดข้อผิดพลาด",
                            type: "error"
                        }, function() {
                            window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                        });
                      }, 1000);
                  </script>';
              }
              $conn = null; //close connect db
        } //else chk dup
    } //isset 
    //devbanban.com
    ?>