<?php 
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $query_book = mysqli_query($conn,"SELECT * from viewproduct where product_id = '$id'");
    $row_book = mysqli_fetch_array($query_book);
    $img = mysqli_query($conn,"SELECT * from productimage where id_product = '$id'");
    $row_img = mysqli_fetch_array($img);
    $query_import = mysqli_query($conn,"SELECT * from importdetails where id_product = '$id'");
    $row_import = mysqli_fetch_array($query_import);
    $id_supplier = $row_import['id_supplier'];
    $query_supplier = mysqli_query($conn,"SELECT * from supplier where id_supplier = '$id_supplier'");
    $row_supplier = mysqli_fetch_array($query_supplier);
    $query_sellingprice = mysqli_query($conn,"SELECT * from sellingprice where id_product = '$id'");
    $row_sellingprice = mysqli_fetch_array($query_sellingprice);
}
?>



<style>
    .slider_section {
        display:none;
    }
</style>


  <section class="detailproduct_section layout_padding" style="margin-top:36px">
    <div class="container ">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="<?php echo $row_img['link_img'];?>" alt="" class="img_book">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <span class="product_id" hidden><?php echo $row_book['product_id'];?></span></span>
              <h2 class="product_name">
                <?php echo $row_book['product_name'];?>
              </h2>
            </div>
            <div class="detail_product">
              <div class="detail_product--content">
                <p>
                 Nhà Cung Cấp : <strong><?php echo $row_supplier['name_supplier'];?></strong>
                </p>
                <p>
                  Nhà Xuất Bản : <strong ><?php echo /*substr($row_book['place_publishing'],17);*/ $row_book['place_publishing'];?></strong>
                </p>
                
              </div>
              <div class="detail_product--content">
                <p>
                Thể Loại: <strong><?php echo $row_book['product_type'];?></strong>
                </p>
              </div>
            </div>
            <p>
                Giá: <strong> <span class="product_price"><?php 
                                   if( $row_sellingprice !== NULL){
                                    echo number_format($row_sellingprice['selling_price']);
                                   }else{
                                     echo 0;
                                   }
                                 ?> </span>
                                 <span>VNĐ</span>
                      </strong>
                </p>
            <div class="detail-box_wrap">
              <div class="input-box">
                <button id="decrement" onclick="stepper(this)"> - </button>
                <input type="number" min="1" max="100" step="1" value="1" id="my-input" readonly>
                <button id="increment" onclick="stepper(this)"> + </button>
              </div>
             
            </div>
          
          </div>
          <button class="add_cart">Thêm Vào Giỏ Hàng</button>
          
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
            <div class="row_detailproduct--content">
              <div class="row_detailproduct_label--seperate">
                <span>Thông Tin Sản Phẩm</span>
            </div>
          </div>
       </div>
      </div>

    </div>
  </section>


