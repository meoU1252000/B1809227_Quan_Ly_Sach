//Add Cart
const btn = document.querySelectorAll(".add_cart");
let items = [];
let number = 0;
// console.log(btn);
btn.forEach(function (button, index) {
  button.addEventListener("click", function (event) {
    var btnItem = event.target;
    var product = btnItem.parentElement;
    // console.log(product);
    var productParent = product.parentElement;
    // console.log(productParent);
    var productImg = productParent.querySelector("img").src;
    var productName = product.querySelector("h6").innerText;
    var productPrice = product.querySelector(".box_hover--price").innerText;
    var productId = product.querySelector("span").innerText;
    // console.log(productImg);
    // console.log(productName);
    addCart(productName, productImg, productPrice,productId);
  
  });
});

function getParent(element, selector) {
  while (element.parentElement) {
    if (element.parentElement.matches(selector)) {
      return element.parentElement;
    }
    element = element.parentElement;
  }
}

function addCart(productName, productImg, productPrice,productId) {
  var addItem = document.createElement("li");
  var cartList = document.querySelector(".header_cart-list-item");
  var cartItem = document.querySelectorAll(".header_cart-item");
  var productQuantity = document.querySelector(".header_cart-item-quantity");
  var iconShopping = document.querySelector(".cart_notice");

  //Add Quantity on Product Added
  for (var i = 0; i < cartItem.length; i++) {
    var productT = document.querySelectorAll(".header_cart-item-name");
    // console.log(productT);
    if (productT[i].innerHTML == productName) {
      // Swal.fire({
      //     icon: 'error',
      //     title: 'Lỗi...',
      //     text: 'Sản Phẩm Của Bạn Đã Có Trong Giỏ Hàng!'
      //   });
      //   return;
      productNum = parseInt(productQuantity.innerText);
      productNum = productNum + 1;
      number++;
      iconShopping.innerHTML = number;
      productQuantity.innerText = productNum;
      Swal.fire({
        icon: "success",
        title: "Thành Công",
        text: "Đã Cập Nhất Số Lượng Sản Phẩm!",
        showConfirmButton: false,
        timer: 1500,
      });
      cartTotal();
      return;
    }
  }
  //Add Product on Cart 
  var cartContent =
    ' <li class="header_cart-item"><img src="' +
    productImg +
    '" alt="" class="header_cart-img"><div class="header_cart-list-item-info"><div class="header_cart-item-head"><h5 class="header_cart-item-name">' +
    productName +
    '</h5> <span class="header_cart-item-remove"><i class="fa-solid fa-trash"></i></span></div>';
  cartContent +=
    '<div class="header_cart-item-wrap"><span class="header_cart-item-price">' +
    productPrice +
    '</span><span class="home-detailproduct_heading_price--type">₫</span> <span class="header_cart-item-multiply">x</span>  <span class="header_cart-item-quantity">1</span></div></div></li>';
  addItem.innerHTML = cartContent;
  cartList.append(addItem);
  var noItem = document.querySelector(".header_cart--no_item");
  var footer = document.querySelector(".footer_cart");
  if (
    !noItem.classList.contains("hidden") &&
    footer.classList.contains("hidden")
  ) {
    noItem.classList.add("hidden");
    footer.classList.remove("hidden");
  }
  //Cart Number Icon
  number++;
  iconShopping.innerHTML = number;

  //Alert
  Swal.fire({
    icon: "success",
    title: "Thành Công",
    text: "Đã Thêm Sản Phẩm Vào Giỏ Hàng!",
    showConfirmButton: false,
    timer: 1500,
  });

  cartTotal();
  deleteCart();
}

function cartTotal() {
  var cartItem = document.querySelectorAll(".header_cart-item");
  var totalPriceAll = 0;
  var totalPrice = 0;
  for (var i = 0; i < cartItem.length; i++) {
    var InputValue = cartItem[i].querySelector(
      ".header_cart-item-quantity"
    ).innerHTML;
    var priceValue = cartItem[i].querySelector(
      ".header_cart-item-price"
    ).innerHTML;
    totalPrice = parseInt(InputValue) * parseInt(priceValue) * 1000;
    // totalB = totalPrice.toLocaleString('de-De');
    // totalPrice = totalPrice + totalA;
    totalPriceAll += totalPrice;
  }
  var cartTotalPrice = document.querySelector(".footer_cart--total");
  cartTotalPrice.innerHTML = totalPriceAll.toLocaleString("de-De");
}

function deleteCart() {
  var cartItem = document.querySelectorAll(".header_cart-item");
  for (var i = 0; i < cartItem.length; i++) {
    var productDelete = document.querySelectorAll(".header_cart-item-remove");
    productDelete[i].addEventListener("click", function (event) {
      var cartDelete = event.target;
      var cartItemR = cartDelete.parentElement.parentElement.parentElement.parentElement;
      cartItemR.remove();
      cartTotal();
      deleteCart();
      
    });
  }
  if(cartItem.length == 0) {
    var noItem = document.querySelector(".header_cart--no_item");
    var footer = document.querySelector(".footer_cart");
    if (!footer.classList.contains("hidden") && noItem.classList.contains("hidden")) {
      noItem.classList.remove("hidden");
      footer.classList.add("hidden");
    };
};
};

