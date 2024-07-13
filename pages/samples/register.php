<?php
   require_once "../../connection/connect.php";
   
   if (isset($_POST['register'])) {
       echo "đã vào được";
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $confirm_password = $_POST['comfirm_password']; // sửa tên trường này thành 'confirm_password'      
       $errors = [];

       // validate username
       if (empty($username)) {
           $errors['username']['empty'] = "Vui lòng nhập tên tài khoản";
       } else if (strlen($username) < 4) {
           $errors['username']['min_length'] = "Mật khẩu phải có ít nhất 4 kí tự";
       }

       // validate email
       if (empty($email)) {
           $errors['email']['empty'] = "Vui lòng nhập email";
       } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $errors['email']['logic'] = "Email không hợp lệ";
       }

       // validate password
       if (empty($password)) {
           $errors['password']['empty'] = "Nhập mật khẩu";
       } else if (strlen($password) < 4) {
           $errors['password']['min_length'] = "Mật khẩu phải có ít nhất 4 kí tự";
       }

       if ($password == $confirm_password) {
           // Thực hiện chỉ chèn các trường cần thiết vào bảng user
           $sql = "INSERT INTO user (username, password, email) VALUES (:username, :password, :email)";
           $statement = $conn->prepare($sql);
           $data = [
               "username" => $username,
               "password" => $password,
               "email" => $email
           ];
           $statement->execute($data);

           // Chuyển hướng sau khi đăng ký thành công
           header("Location: login.php");
           exit();
       } else {
           echo "Mật khẩu vừa nhập không khớp";
       }
   }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Đăng ký</h3>
                <form method="post" action="">
                  <div class="form-group">
                    <label>Tên người dùng</label>
                    <input type="text" name="username" class="form-control p_input">
                    <p><?php echo !empty($errol['username']) ? $errol['username']  : "";?></p>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Mât khẩu</label>
                    <input type="password" name="password" class="form-control p_input">
                    <p><?php echo !empty($errol['security']) ? $errol['security']  : "";?></p>
                  </div>
                  <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="comfirm_password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> nhớ tài khoản </label>
                    </div>
                    <a href="#" class="forgot-pass">Quên mật khẩu</a>
                  </div>
                  <div class="text-center">
                    <button type="submit"  name="register" class="btn btn-primary btn-block enter-btn">Đăng kí</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button type="submit" class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>