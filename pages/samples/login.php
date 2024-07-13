<?php
  session_start();
  ob_start();
  require_once "../../connection/connect.php";
  if(isset($_POST["login"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $errol = [];
        // validate username
        if(empty($username))
        {
            $errol['username']="vui lòng nhập tài khoản";
            
        }
        if(empty($password))
        {
            $errol['password']="vui lòng nhập mật khẩu";

        }
        $sql = "select * from user where username=:username and password=:password";
        $statement = $conn->prepare($sql);
        $data =[
            'username'=>$username,
            'password'=>$password
        ];
        $statement->execute($data);
        if($statement->rowCount()>0)
        {
          $_SESSION['password']=$password;
          header("Location: ../../index.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EPU</title>
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
                <h3 class="card-title text-left mb-3">Đăng nhập</h3>
                <form method="post" action="">
                  <div class="form-group">
                    <label>Tên tài khoản *</label>
                    <input type="text" name="username" class="form-control p_input"><br>
                    <p><?php echo !empty($errol['username']) ? $errol['username'] : "";?></p>
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu *</label>
                    <input type="password" name="password" class="form-control p_input"><br>
                    <p><?php echo !empty($errol['password']) ? $errol['password']  : "";?></p>
                    <p><?php echo !empty($errol['security']) ? $errol['security']  : "";?></p>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Lưu tài khoản </label>
                    </div>
                    <a href="#" class="forgot-pass">Quên mật khẩu</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">Đăng nhập</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Không có tài khoản ?<a href="register.php"> Đăng kí</a></p>
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