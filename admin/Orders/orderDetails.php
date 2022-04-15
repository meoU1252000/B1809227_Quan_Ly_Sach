<?php
if (!isset($_SESSION['username'])) {
    header('location: ./login.php');
}else{
    include_once './alert.php';
    if(in_array("2", $_SESSION['roleStaff'], true)){
        $id = $_REQUEST['id'];
        $result = mysqli_query($conn, "SELECT * from orderdetails inner join sellingprice on orderdetails.id_sell = sellingprice.id_sell inner join product on product.id_product = sellingprice.id_product where id_order = '$id' ");
        if(isset($_POST['id_delete'])){
            $location = $_GET['page_layout'];
            $id_delete = $_POST['id_delete'];
            $sql = "CALL xoaData('$location',$id_delete,'id_staff')";
           if(mysqli_query($conn,$sql)){
                $_SESSION['status'] = "Xóa Thành Công!";
                $_SESSION['status_code']= "success";
                if(isset($_POST['queryToBack'])){
                    $url = "index.php?page_layout=" .$_GET['page_layout'];
                    $url .="&id=" .$_POST['queryToBack'];
                }else{
                    $url = "index.php?page_layout=" .$_GET['page_layout'];
                }
                if(headers_sent()){
                   die('<script type ="text/javascript">window.location.href="'.$url.'" </script>');
                }else{
                    header ("location: $url");
                    die();
                }
            } else {
                $_SESSION['status'] = "Xóa Thất Bại!";
                $_SESSION['status_code']= "error";
                $conn -> rollback();
                if(isset($_POST['queryToBack'])){
                    $url = "index.php?page_layout=" .$_GET['page_layout'];
                    $url .="&id=" .$_POST['queryToBack'];
                }else{
                    $url = "index.php?page_layout=" .$_GET['page_layout'];
                }
                if(headers_sent()){
                   die('<script type ="text/javascript">window.location.href="'.$url.'" </script>');
                }else{
                    header ("location: $url");
                    die();
                }
               
               // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }else{
        echo '<script language="javascript">';
        echo 'alert("Bạn không có quyền truy cập vào trang này")';
        echo '</script>';
        $url = "index.php";
        if(headers_sent()){
            die('<script type ="text/javascript">window.location.href="'.$url.'" </script>');
        }else{
            header ("location: $url");
            die();
        }
    }
}
?>


            
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Quản Lý Thông Tin Đơn Hàng</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Thông Tin Đơn Hàng
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID Đơn Hàng</th>
                                            <th>ID Sell</th>
                                            <th>Sản Phẩm</th>
                                            <th>Số Lượng</th>
                                            <th>Đơn Giá</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID Đơn Hàng</th>
                                            <th>ID Sell</th>
                                            <th>Sản Phẩm</th>
                                            <th>Số Lượng</th>
                                            <th>Đơn Giá</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    
                                    <?php 
                                       while ($row = mysqli_fetch_array($result)) {
                                        
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id_order']; ?></td>
                                            <td> <?php echo $row['id_sell']; ?></td>
                                            <td> <?php echo $row['name_product']; ?></td>
                                            <td> <?php echo $row['number_order']; ?></td>
                                            <td> <?php echo number_format($row['selling_price']); ?></td>
                                           
                                        </tr>
                                    <?php } ?>
                                   
                                    </tbody>
                                    
                                </table>
                                <a href = "index.php" class="btn btn-primary " style="margin-top:12px"><i class="fas fa-arrow-left" style="margin-right:6px"></i>Về Trang Chủ</a>
                            </div>
                        
                        </div>
                        
                 </div>




  
