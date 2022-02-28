<?php
session_start();
include_once './config.php';
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
    header('location: ./login.php');
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang Quản Trị</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
       
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Chính</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Trang Chủ
                            </a>
                            
                            <!--<div class="sb-sidenav-menu-heading"></div>-->
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-th-large"></i></div>
                                Quản Lý Thông Tin
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page_layout=staff">Nhân Viên</a>
                                    <a class="nav-link" href="index.php?page_layout=typeGroup">Danh Mục</a>
                                    <a class="nav-link" href="index.php?page_layout=publishingCompany">Nhà Xuất Bản</a>
                                    <a class="nav-link" href="index.php?page_layout=producttype">Thể Loại Sản Phẩm</a>
                                    <a class="nav-link" href="index.php?page_layout=product">Sản Phẩm</a>
                                    <a class="nav-link" href="index.php?page_layout=doanhthu">Doanh Thu</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Đơn Hàng</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePageOthers" aria-expanded="false" aria-controls="collapsePageOthers">
                                <div class="sb-nav-link-icon"><i class="fas fa-shipping-fast"></i></div>
                                Quản Lý Nhập Hàng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePageOthers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page_layout=supplier">Nhà Cung Cấp</a>
                                    <a class="nav-link" href="index.php?page_layout=importproduct">Chi Tiết Nhập Hàng</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePageEvents" aria-expanded="false" aria-controls="collapsePageEvents">
                                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                Quản Lý Sự Kiện
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePageEvents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page_layout=supplier">Nhà Cung Cấp</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Chi Tiết Nhập Hàng</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-tools"></i></div>
                                Chức Năng
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                           <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Tài Khoản Nhân Viên
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="index.php?page_layout=addStaffAccount">Tạo tài khoản mới</a>
                                            <a class="nav-link" href="index.php?page_layout=staffRole">Phân Quyền</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                           <div class="sb-sidenav-menu-heading">Phân Tích</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Biểu Đồ
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Bảng
                            </a>
                        </div> 
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION['nameStaff']; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <?php
                         //master page
                         if(isset($_GET["page_layout"])){
                            switch($_GET["page_layout"]){
                                case 'staff':include_once './Staff/staff.php';
                                   break;
                                case 'staffRole':include_once './Staff/staffRole.php';
                                   break;
                                case 'product':include_once './Product/product.php';
                                   break;
                                case 'addProduct':include_once './Product/addproduct.php';
                                   break;
                                case 'editProduct':include_once './Product/editproduct.php';
                                   break;
                                case 'productimage':include_once './Product/imgproduct.php';
                                   break;
                                case 'addImg':include_once './Product/addimg.php';
                                   break;
                                case 'editImg':include_once './Product/editImg.php';
                                   break;
                                case 'addStaffAccount':include_once './Staff/addstaffaccount.php';
                                   break;
                                case 'addStaff':include_once './Staff/addstaff.php';
                                   break;
                                case 'editStaff':include_once './Staff/editstaff.php';
                                   break;
                                case 'typeGroup':include_once './TypeGroup/typegroup.php';
                                   break;
                                case 'addTypeGroup':include_once './TypeGroup/addtypegroup.php';
                                   break;
                                case 'editTypeGroup':include_once './TypeGroup/edittypegroup.php';
                                   break;
                                case 'producttype':include_once './Type/type.php';
                                   break;
                                case 'addType':include_once './Type/addtype.php';
                                   break;
                                case 'editType':include_once './Type/edittype.php';
                                   break;
                                case 'publishingCompany':include_once './PublishingCompany/publishingCompany.php';
                                   break;
                                case 'addPublishingCompany':include_once './PublishingCompany/addPublishingCompany.php';
                                   break;
                                case 'editPublishingCompany':include_once './PublishingCompany/editPublishingCompany.php';
                                   break;
                                case 'supplier':include_once './Supplier/supplier.php';
                                   break;
                                case 'addSupplier':include_once './Supplier/addSupplier.php';
                                   break;
                                case 'editSupplier':include_once './Supplier/editSupplier.php';
                                   break;
                                case 'importproduct':include_once './Import/import.php';
                                   break;
                                case 'addImport':include_once './Import/addImport.php';
                                   break;
                                case 'editImport':include_once './Import/editImport.php';
                                   break;
                                case 'importDetails':include_once './Import/importDetails.php';
                                   break;
                                case 'addImportDetails':include_once './Import/addImportDetails.php';
                                   break;
                                case 'editImportDetails':include_once './Import/editImportDetails.php';
                                   break;
                                case 'sellingprice':include_once './Import/sellingPrice.php';
                                   break;
                                case 'addSellingPrice':include_once './Import/addSellingPrice.php';
                                   break;
                                case 'editSellingPrice':include_once './Import/editSellingPrice.php';
                                   break;
                                case 'doanhthu' :include_once './doanhthu.php';break;
                                case 'doanhthuthang' :include_once './doanhthuthang.php';break;
                                case 'addStaffRole' :include_once './Staff/addStaffRole.php'; break;
                                case 'deleteStaffRole' :include_once './Staff/deleteStaffRole.php'; break;
                              }
                         }else {
                        ?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                              
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Lê Thành Đạt</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../assets/script/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
      <!--  <script src="../assets/demo/chart-area-demo.js"></script>
        <script src="../assets/demo/chart-bar-demo.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../assets/script/datatables-simple-demo.js"></script>
        
        
    </body>
</html>
