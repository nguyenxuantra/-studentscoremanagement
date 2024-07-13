<?php 
    
?>

<!DOCTYPE html>4r5
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo text-primary" href="index.php">Đại học Điện Lực</a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="../../../assets/images/user.webp" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Nguyên Xuân trà</h5>
                  <span>sinh viên</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Thông tin sinh viên</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../../index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Thông báo</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Quản lý</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../classes/classes.php">Quản lý lop</a></li>
                <li class="nav-item"> <a class="nav-link" href="../students/students.php">Quản lý sinh viên</a></li>
                <li class="nav-item"> <a class="nav-link" href="../departments/departments.php">Quản lý khoa</a></li>
                <li class="nav-item"> <a class="nav-link" href="../teachers/teachers.php">Quản lý giáo viên</a></li>
                <li class="nav-item"> <a class="nav-link" href="../subjects/subjects.php">Quản lý môn học</a></li>
                <li class="nav-item"> <a class="nav-link" href="../points/points.php">Quản lý điểm</a></li>
                <li class="nav-item"> <a class="nav-link" href="../major/major.php">Quản lý chuyên ngành</a></li>
                <li class="nav-item"> <a class="nav-link" href="../accounts/accounts.php">Quản lý tài khoản</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Trang người dùng</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../samples/login.php"> Đăng nhập </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../samples/register.html"> Đăng ký </a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                      <p class="text-muted mb-0"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                      <p class="text-muted mb-0"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                      <p class="text-muted mb-0"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">4 new messages</p>
                </div>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../../assets/images/user.webp" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Nguyên Xuân Trà</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Hồ sơ</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Cài đặt</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                  <form action="" method="post">
                    <div class="preview-item-content">
                      <button name="logout" class='bg-dark' type="submit">Đăng xuất</button>
                    </div>
                  </form>
                  </a>
                  <div class="dropdown-divider"></div>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        <!-- partial -->
        <div class="main-panel">
<form action="" method="post">
    <div class="row d-flex justify-content-center">
        <input class="form-control col-sm-6" type="text" name="search" placeholder="Nhập thông tin cần tìm kiếm">
        <button type="submit" class="btn btn-primary" name="btn_search">Tìm kiếm</button>
    </div>
<div class="row">

    <?php
      require_once '../../../connection/connect.php';
        $sql = "select id_mh from monhoc"; 
        $statement = $conn->query($sql);
      ?>
      <select class="form-control col-sm-2 mt-4 ml-4" name="selected_id_mh" aria-label="Default select example">
        <option selected>Mã môn học</option>
        <?php $value=1; foreach($statement as $row) {?>
        <option value="<?php echo $value ?>"><?php echo $row['id_mh'] ?></option>
        <?php $value++; } ?>
      </select>


      <?php 
       require_once '../../../connection/connect.php';
        $sql = "select ten_cn from chuyennganh"; 
        $statement = $conn->query($sql);
      ?>
      <select class="form-control col-sm-2 mt-4 ml-4" name="selected_ten_cn" aria-label="Default select example">
        <option selected>Chuyên ngành</option>
        <?php  foreach($statement as $row) {?>
        <option value="<?php echo $row['ten_cn'] ?>"><?php echo $row['ten_cn'] ?></option>
        <?php  } ?>
      </select>
</div> 
</form>
<?php
require_once "../../../connection/connect.php";

// Xử lý khi nút tìm kiếm được nhấn
if (isset($_POST['btn_search'])) {
    $search = $_POST['search'];
    $id_mh = $_POST['selected_id_mh'];
    $ten_cn = $_POST['selected_ten_cn'];

    // Lấy giá trị điểm từ form
    $diem_tp = isset($_POST['diem_tp']) ? floatval($_POST['diem_tp']) : null;
    $diem_thi = isset($_POST['diem_thi']) ? floatval($_POST['diem_thi']) : null;

    // Kiểm tra xem có điểm thành phần và điểm thi không
    if (!is_null($diem_tp) && !is_null($diem_thi)) {
        // Tính điểm trung bình
        $diem_tb = ($diem_tp + $diem_thi) / 2;
    }

    // Kiểm tra xem thông tin tìm kiếm có rỗng không
    if ($search == "") {
        $sql_search = "SELECT diem.id_sv, diem.id_mh, diem.diem_tp, diem.diem_thi, diem.diem_tb, diem.xep_loai 
                       FROM diem 
                       INNER JOIN sinhvien ON diem.id_sv = sinhvien.id_sv 
                       INNER JOIN chuyennganh ON sinhvien.id_cn = chuyennganh.id_cn 
                       WHERE 1=1";

        if ($id_mh != "Mã môn học") {
            $sql_search .= " AND id_mh = $id_mh";
        }
        if ($ten_cn != "Chuyên ngành") {
            $sql_search .= " AND chuyennganh.ten_cn = '$ten_cn'";
        }

        if (!is_null($diem_tp) && !is_null($diem_thi)) {
            $sql_search .= " AND diem.diem_tp = $diem_tp AND diem.diem_thi = $diem_thi AND diem.diem_tb = $diem_tb";
        }

        $statement_search = $conn->query($sql_search);

        // Kiểm tra xem có kết quả tìm kiếm hay không
        $row_count_search = $statement_search->rowCount();
        if ($row_count_search > 0) {
            echo "Tìm thấy kết quả:";
            // Hiển thị kết quả tìm kiếm
            echo "<table class='table table-dark tabel-hover'>";
            echo "<thead><tr><th>Id sinh viên</th><th>Id môn học</th><th>điểm thành phần</th><th>Điểm thi</th><th>Điểm tổng kết</th><th>Xếp loại</th><th><a class='btn btn-primary' href='insert.php'>Thêm</a></th></tr></thead><tbody>";
            foreach ($statement_search as $row) {
                echo "<tr>";
                echo "<th>{$row['id_sv']}</th>";
                echo "<th>{$row['id_mh']}</th>";
                echo "<th>{$row['diem_tp']}</th>";
                echo "<th>{$row['diem_thi']}</th>";
                echo "<th>{$row['diem_tb']}</th>";
                echo "<th>{$row['xep_loai']}</th>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Không tìm thấy kết quả nào.";
        }
    } else {
        // Thực hiện truy vấn SQL tìm kiếm
        $sql_search = "SELECT * FROM diem WHERE id_sv LIKE '%$search%' OR id_mh LIKE '%$search%' OR lan_thi LIKE '%$search%'";
        $statement_search = $conn->query($sql_search);

        // Kiểm tra xem có kết quả tìm kiếm hay không
        $row_count_search = $statement_search->rowCount();
        if ($row_count_search > 0) {
            echo "Tìm thấy kết quả:";
            // Hiển thị kết quả tìm kiếm
            echo "<table class='table table-dark tabel-hover'>";
            echo "<thead><tr><th>Id sinh viên</th><th>Id môn học</th><th>điểm thành phần</th><th>Điểm thi</th><th>Điểm tổng kết</th><th>Xếp loại</th><th><a class='btn btn-primary' href='insert.php'>Thêm</a></th></tr></thead><tbody>";
            foreach ($statement_search as $row) {
                echo "<tr>";
                echo "<th>{$row['id_sv']}</th>";
                echo "<th>{$row['id_mh']}</th>";
                echo "<th>{$row['diem_tp']}</th>";
                echo "<th>{$row['diem_thi']}</th>";
                echo "<th>{$row['diem_tb']}</th>";
                echo "<th>{$row['xep_loai']}</th>";
                echo "<th><a class='btn btn-warning' href='delete.php?id={$row['id']}'>Xóa</a> &nbsp;<a class='btn btn-warning' href='update.php?id={$row['id']}'>Sửa</a></th>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "Không tìm thấy kết quả nào.";
        }
    }
} else {
    // Hiển thị bảng sinh viên khi không có chức năng tìm kiếm được sử dụng
    $sql_all = "SELECT * FROM diem";
    $statement_search = $conn->query($sql_all);
    echo "Danh sách điểm:";
    echo "<table class='table table-dark tabel-hover'>";
    echo "<thead><tr><th>Id sinh viên</th><th>Id môn học</th><th>điểm thành phần</th><th>Điểm thi</th><th>Điểm tổng kết</th><th>Xếp loại</th><th><a class='btn btn-primary' href='insert.php'>Thêm</a></th></tr></thead><tbody>";
    foreach ($statement_search as $row) {
        echo "<tr>";
        echo "<th>{$row['id_sv']}</th>";
        echo "<th>{$row['id_mh']}</th>";
        echo "<th>{$row['diem_tp']}</th>";
        echo "<th>{$row['diem_thi']}</th>";
        echo "<th>{$row['diem_tb']}</th>";
        echo "<th>{$row['xep_loai']}</th>";
        echo "<th><a class='btn btn-warning' href='delete.php?id={$row['id']}'>Xóa</a> &nbsp;<a class='btn btn-warning' href='update.php?id={$row['id']}'>Sửa</a></th>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../assets/js/off-canvas.js"></script>
    <script src="../../../assets/js/hoverable-collapse.js"></script>
    <script src="../../../assets/js/misc.js"></script>
    <script src="../../../assets/js/settings.js"></script>
    <script src="../../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>