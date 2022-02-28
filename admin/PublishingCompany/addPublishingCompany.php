
<?php
include_once './config.php';

if (!isset($_SESSION['username'])) {
    header('location: ./login.php');
}else{
    if(isset($_POST['name_publishingcompany'])){
         $name = $_POST['name_publishingcompany'];
         $sql = "INSERT into publishingcompany(name_publishingcompany) values ('$name')";
         if(mysqli_query($conn,$sql)){
             $_SESSION['status'] = "Thêm Thành Công!";
             $_SESSION['status_code']= "success";
            $url = "index.php?page_layout=publishingCompany";
            if(headers_sent()){
                die('<script type ="text/javascript">window.location.href="'.$url.'" </script>');
            }else{
                 header ("location: $url");
                 die();
            }
         }else {
            $_SESSION['status'] = "Thêm Thất Bại!";
            $_SESSION['status_code']= "error";
            $conn -> rollback();
            $url = "index.php?page_layout=publishingCompany";
            if(headers_sent()){
                die('<script type ="text/javascript">window.location.href="'.$url.'" </script>');
            }else{
                 header ("location: $url");
                 die();
            }
        }
    }
    mysqli_close($conn);
}

?>

         <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Quản Lý Thông Tin Nhà Xuất Bản</li>
                </ol>
            <div class="body-page--function-form">
                <form action="#" method="POST" enctype="multipart/form-data" id = "validator" >
                    <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Thêm Thông Tin Nhà Xuất Bản Mới
                                </div>
                                <div class="card-body">
                                         <div class="form-group">
                                           <label for="inputName" style="margin-bottom:20px">Tên Nhà Xuất Bản</label>
                                           <input type="text" class="form-control" id="name_publishingcompany" name="name_publishingcompany"  placeholder="Enter Name">
                                           <span class="form-group__message"></span>
                                         </div>
                                         <a href = "index.php?page_layout=brand" class="btn btn-primary " style="margin-top:12px"><i class="fas fa-arrow-left" style="margin-right:6px"></i>Back</a>
                                         <button type="submit" class="btn btn-primary" style="background-color: #212529;margin-top:12px;">Submit</button>
                                </div>
                    </div>
                </form>
            </div>
        </div>
      
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../assets/script/validator.js"></script>
  
    <script>
        Validator({
            form: '#validator',
            formGroupSelector: '.form-group',
            errorSelector: '.form-group__message',
            rules: [
               Validator.isRequired('#name_publishingcompany')
            ]
        });
    </script>