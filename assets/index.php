<?php 
include_once '../admin/config.php';
session_start();
$query_book = mysqli_query($conn,"SELECT * from product order by id_product");
$query_category = mysqli_query($conn,"SELECT * from typegroup order by id_typegroup");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bookstore</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.0.0-web/css/all.min.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href = "../assets/css/ion.rangeSlider.min.css" rel="stylesheet" />
     <!-- Custom styles for this template -->
     <link href="../assets/css/style.css" rel="stylesheet" />
     <!-- responsive style -->
     <link href="../assets/css/responsive.css" rel="stylesheet" />
     <link href="../assets/css/style.scss" rel="stylesheet" />
     <link href="../assets/css/style.css.map" rel="stylesheet" />
    <!-- Animation css-->
    <link href="../assets/css/base.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                      
                    </span>
                  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link pl-lg-0" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="categories.html">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.html"> Blog </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  
                </ul>
                <from class="search_form">
                  <input type="text" class="form-control" placeholder="Search here...">
                  <button class="" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </from>
               <ul class="navbar-nav" style="margin-left:1%">
                   <li class="nav-item">
                    <div class="header_user-wrap">
                          <a href="" data-toggle="modal" data-target="#exampleModal">Đăng Nhập</a>
                          <span></span>
                          <a href="">Đăng Ký</a>
                    </div>
                   </li>
                   
               </ul>
              </div>
            </nav>
          </div>
        </header>
        <section class="slider_section ">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h5>
                          Bostorek Bookstore
                        </h5>
                        <h1>
                          For All Your <br>
                          Reading Needs
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                        </p>
                        <a href="">
                          Read More
                        </a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h5>
                          Bostorek Bookstore
                        </h5>
                        <h1>
                          For All Your <br>
                          Reading Needs
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                        </p>
                        <a href="">
                          Read More
                        </a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h5>
                          Bostorek Bookstore
                        </h5>
                        <h1>
                          For All Your <br>
                          Reading Needs
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                        </p>
                        <a href="">
                          Read More
                        </a>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel_btn_box">
              <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
           
          </div>
        </section>
        
   </div>
   <?php
                         //master page
                         if(isset($_GET["page_layout"])){
                            switch($_GET["page_layout"]){
                                case 'product':include_once './chitietsanpham.php';
                                   break;
                              }
                         }else {
                        ?>

  <!-- catagory section -->

  <section class="category_section  layout_padding">
    <div class="category_container">
      <div class="container ">
         <div class="heading_container heading_center">
           <h2>
             Các Thể Loại Sách
           </h2>
           <p>
             Hiện cửa hiệu Bookstore chúng tôi đã và đang cung cấp đa dạng các thể loại sách cho các bạn đọc.
           </p>
         </div>
         <div class="row">
           <?php 
              $i = 0;
              while($row_category = mysqli_fetch_array($query_category)){

           ?>
           <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="
                 <?php 
                     echo "img/cat" .$i+1. .".png";
                 ?>" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   <a href=""><?php echo $row_category['name_typegroup'];?></a>
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div>
           <?php 
            $i++;
          }?>
           <!-- <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="img/cat2.png" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   Science
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div>
           <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="img/cat3.png" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   History
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div>
           <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="img/cat4.png" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   Biography
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div>
           <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="img/cat5.png" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   Adventure
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div>
           <div class="col-sm-6 col-md-4 ">
             <div class="box ">
               <div class="img-box">
                 <img src="img/cat6.png" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   Fantasy
                 </h5>
                 <p>
                   fact that a reader will be distracted by the readable content of a page when looking at its layout.
                   The
                   point of using
                 </p>
               </div>
             </div>
           </div> -->
         </div>
       </div>
     </div>
     
    </div>
  </section>

  <section class= "category_section_book  layout_padding">
    <div class="category_container">
     
      <div class="container container_book">
        <div class="heading_container heading_center">
          <h2>
            Sách Bán Chạy
          </h2>
          <p>
            
          </p>
        </div>
        <div class="row">
         <?php 
         while ($row_book = mysqli_fetch_array($query_book)){
           $id_product = $row_book['id_product'];
           $id_type = $row_book['id_type'];
           $id_publishingcompany = $row_book['id_publishingcompany'];
           $query_img = mysqli_query($conn,"SELECT * from productimage where id_product = '$id_product'");
           $row_img = mysqli_fetch_array($query_img);
           $query_type = mysqli_query($conn,"SELECT * from producttype where id_type = '$id_type'");
           $row_type = mysqli_fetch_array($query_type);
           $query_publishingcompany = mysqli_query($conn,"SELECT * from publishingcompany where id_publishingcompany = '$id_publishingcompany'");
           $row_publishingcompany = mysqli_fetch_array($query_publishingcompany);
           $id_typegroup = $row_type['id_typegroup'];
           $query_typegroup = mysqli_query($conn,"SELECT * from typegroup where id_typegroup = '$id_typegroup'");
           $row_typegroup = mysqli_fetch_array($query_typegroup);
           $query_sellingprice = mysqli_query($conn,"SELECT * from sellingprice where id_product = '$id_product'");
           $row_sellingprice = mysqli_fetch_array($query_sellingprice);
         ?> 
          <div class="col-sm-6 col-md-4 ">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo $row_img['link_img'];?>" alt="" class="img_book">
                <div class="box_hover">
                   <div class="box_hover--heading">
                       <span class="product_id" hidden><?php echo $row_book['id_product'];?></span>
                       <h6  class="product_name"><?php echo $row_book['name_product'];?></h6>
                   </div>
                   <ul class="box_hover--listcontent">
                       <li><span><?php echo $row_typegroup['name_typegroup'];?></span></li>
                       <li><span>Thể Loại: <?php echo $row_type['name_type'];?></span></li>
                       <li>Giá Bán: <span class="product_price"><?php 
                                   if( $row_sellingprice !== NULL){
                                    echo number_format($row_sellingprice['selling_price']);
                                   }else{
                                     echo 0;
                                   }
                                 ?> </span>
                                 <span>VNĐ</span>
                        </li>
                        <li hidden><input type="number" min="1" max="100" step="1" value="1" id="my-input" readonly></li>
                   </ul>
                 <button class="add_cart">Thêm Vào Giỏ Hàng</button>
               </div>
              </div>
              <div class="detail-box">
                <a href="index.php?page_layout=product&id=<?php echo $row_book['id_product'];?>">
                  <h5>
                  <?php echo $row_book['name_product']; ?>
                </h5>
              </a>
              </div>
              
            </div>
           
          </div>
          <?php }?>
          
         
        </div>
      </div>

     
    </div>
  </section>

  <section class= "category_section_book layout_padding">
    <div class="category_container">
     
      <div class="container container_book">
           <div class="heading_container heading_center">
             <h2>
               Sách Hiện Có
             </h2>
             <p>
               
             </p>
           </div>
           <div class="row">
         <?php 
         $query_book = mysqli_query($conn,"SELECT * from product order by id_product");
         while ($row_book = mysqli_fetch_array($query_book)){
           $id_product = $row_book['id_product'];
           $id_type = $row_book['id_type'];
           $id_publishingcompany = $row_book['id_publishingcompany'];
           $query_img = mysqli_query($conn,"SELECT * from productimage where id_product = '$id_product'");
           $row_img = mysqli_fetch_array($query_img);
           $query_type = mysqli_query($conn,"SELECT * from producttype where id_type = '$id_type'");
           $row_type = mysqli_fetch_array($query_type);
           $query_publishingcompany = mysqli_query($conn,"SELECT * from publishingcompany where id_publishingcompany = '$id_publishingcompany'");
           $row_publishingcompany = mysqli_fetch_array($query_publishingcompany);
           $id_typegroup = $row_type['id_typegroup'];
           $query_typegroup = mysqli_query($conn,"SELECT * from typegroup where id_typegroup = '$id_typegroup'");
           $row_typegroup = mysqli_fetch_array($query_typegroup);
           $query_sellingprice = mysqli_query($conn,"SELECT * from sellingprice where id_product = '$id_product'");
           $row_sellingprice = mysqli_fetch_array($query_sellingprice);
         ?> 
          <div class="col-sm-6 col-md-4 ">
            <div class="box">
              <div class="img-box">
                <img src="<?php echo $row_img['link_img'];?>" alt="" class="img_book">
                <div class="box_hover">
                   <div class="box_hover--heading">
                       <span class="product_id" hidden><?php echo $row_book['id_product'];?></span>
                       <h6  class="product_name"><?php echo $row_book['name_product'];?></h6>
                   </div>
                   <ul class="box_hover--listcontent">
                       <li><span><?php echo $row_typegroup['name_typegroup'];?></span></li>
                       <li><span>Thể Loại: <?php echo $row_type['name_type'];?></span></li>
                       <li>Giá Bán: <span class="product_price"><?php 
                                   if( $row_sellingprice !== NULL){
                                    echo number_format($row_sellingprice['selling_price']);
                                   }else{
                                     echo 0;
                                   }
                                 ?> </span>
                                 <span>VNĐ</span>
                        </li>
                        <li hidden><input type="number" min="1" max="100" step="1" value="1" id="my-input" readonly></li>
                   </ul>
                 <button class="add_cart">Thêm Vào Giỏ Hàng</button>
               </div>
              </div>
              <div class="detail-box">
                <a href="index.php?page_layout=product&id=<?php echo $row_book['id_product'];?>">
                  <h5>
                  <?php echo $row_book['name_product']; ?>
                </h5>
              </a>
              </div>
              
            </div>
           
          </div>
          <?php }?>
          
         
        </div>
        
      </div>
    </div>
  </section>


  <!-- end catagory section -->

<!-- blog section -->

<section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          From Our Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpg" alt="">
              <h4 class="blog_date">
                <span>
                  19 January 2021
                </span>
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Eius, dolor? Vel velit sed doloremque
              </h5>
              <p>
                Incidunt magni explicabo ullam ipsa quo consequuntur eveniet illo? Aspernatur nam dolorem a neque? Esse eaque dolores hic debitis cupiditate, ad beatae voluptatem numquam dignissimos ab porro
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/b2.jpg" alt="">
              <h4 class="blog_date">
                <span>
                  19 January 2021
                </span>
              </h4>
            </div>
            <div class="detail-box">
              <h5>
                Minus aliquid alias porro iure fuga
              </h5>
              <p>
                Officiis veritatis id illo eligendi repellat facilis animi adipisci praesentium. Tempore ab provident porro illo ex obcaecati deleniti enim sequi voluptas at. Harum veniam eos nisi distinctio! Porro, reiciendis eius.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Contact Us
            </h2>
          </div>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="btn-box">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="../img/Book/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
</section>

  <!-- end contact section -->
  <?php }?>
  

  <!-- info section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p>
              Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
            </p>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

 <!-- footer section -->
 <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
 </footer>
  <!-- footer section -->
  <div class="cart">
        <div class="cart_wrap"  onclick="return showCart();">
            <i class="fa-solid fa-basket-shopping"></i>
            <span class ="cart_notice">
                0
            </span>
           
        </div>
        <div class="cart_wrap--list hidden" >
           
            <div class="header_cart--heading">
                <i class="fa-solid fa-bag-shopping"></i>
                <h4>Giỏ Hàng</h4>
                <span class="close_cart">&times;</span>
                
            </div> 
            <div class="header_cart--no_item">
               <img src="./img/no-cart.png" alt="Chưa có hình ảnh"
              class="header_cart-list--no-cart-img">
              <span class="header_cart-list--no-cart-msg">Chưa có sản phẩm trong giỏ hàng</span> 

            </div>
            <div class="header_cart-list-item_limit">
                <ul class="header_cart-list-item">
                    <!-- <li class="header_cart-item">
                        <img src="./img/truyen-ngan-chi-pheo-nam-cao.jpg" alt="" class="header_cart-img">
                        <div class="header_cart-list-item-info">
                            <div class="header_cart-item-head">
                                <h5 class="header_cart-item-name">Chí Phèo - Nam Cao</h5>
                                <a href="" class="header_cart-item-remove"><i class="fa-solid fa-trash"></i></a>
                            </div>
    
                            <div class="header_cart-item-wrap">
                                <span class="header_cart-item-price"></span><span class="home-detailproduct_heading_price--type">50.000₫</span>
                                <span class="header_cart-item-multiply">x</span>
                                <span class="header_cart-item-quantity">1</span>
                            </div>
    
                         
                        </div>
                    </li>
                    <li class="header_cart-item">
                        <img src="./img/truyen-ngan-chi-pheo-nam-cao.jpg" alt="" class="header_cart-img">
                        <div class="header_cart-list-item-info">
                            <div class="header_cart-item-head">
                                <h5 class="header_cart-item-name">Chí Phèo - Nam Cao</h5>
                                <a href="" class="header_cart-item-remove"><i class="fa-solid fa-trash"></i></a>
                            </div>
    
                            <div class="header_cart-item-wrap">
                                <span class="header_cart-item-price"></span><span class="home-detailproduct_heading_price--type">50.000₫</span>
                                <span class="header_cart-item-multiply">x</span>
                                <span class="header_cart-item-quantity">1</span>
                            </div>
    
                        </div>
                    </li>
                    <li class="header_cart-item">
                        <img src="./img/truyen-ngan-chi-pheo-nam-cao.jpg" alt="" class="header_cart-img">
                        <div class="header_cart-list-item-info">
                            <div class="header_cart-item-head">
                                <h5 class="header_cart-item-name">Chí Phèo - Nam Cao</h5>
                                <a href="" class="header_cart-item-remove"><i class="fa-solid fa-trash"></i></a>
                            </div>
    
                            <div class="header_cart-item-wrap">
                                <span class="header_cart-item-price"></span><span class="home-detailproduct_heading_price--type">50.000₫</span>
                                <span class="header_cart-item-multiply">x</span>
                                <span class="header_cart-item-quantity">1</span>
                            </div>
    
                           
                        </div>
                    </li>
                    -->
                </ul>
              
            </div>
            <div class="footer_cart hidden">
                <span class="footer_cart--price">Tổng Cộng: <span class ="footer_cart--total"></span><span class="footer_cart--pricetype">₫</span> 
                </span> 
                <a href="">Tiếp Tục Xem Sản Phẩm</a>
                <a href="">Xem Giỏ Hàng</a>
                <a href="">Thanh Toán</a>
            </div>
                
          
       
        </div>
  </div>
  <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content modal_position">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Đăng Nhập</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  placeholder="Enter email"
                />
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                  placeholder="Password"
                />
              </div>
              <div class="login-form__forget">
                <a href="#" class="forget_link"> Forget password ? </a>
                <span class="login-form__forget-separate"></span>
                <a href="#" class="signin_link"> Đăng Ký</a>
              </div>
            </form>
           <div class="modal_button">
               <button type="button" class="btn btn-secondary" style="width:120px" data-dismiss="modal">Trở Lại</button>
               <button type="button" class="btn btn-primary" style="width:150px">Đăng Nhập</button>
           </div>
          </div>
         
        </div>
      </div>
    </div>
  <!-- jQery -->
  <script src="../assets/script/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../assets/script/bootstrap.js"></script>
  <!-- custom js -->
  <script src="../assets/script/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- Input Custom -->
   <script src="../assets/script/inputcustom.js"></script>
   <script src="../assets/script/cart.js"></script>
   <script src="../assets/script/localStorageCart.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script>
  <!-- End Google Map -->


</body>
</html>