"use strict";
const btn = document.querySelectorAll(".add_cart");
btn.forEach(function (button) {
  button.addEventListener("click", function (event) {
    var btnItem = event.target;
    var product = btnItem.parentElement;
    // console.log(product);
    var productParent = product.parentElement;
    // console.log(productParent);
    var productImg = productParent.querySelector(".img_book").src;
    var productName = product.querySelector(".product_name").innerText;
    var productPrice = product.querySelector(".product_price").innerText;
    var productId = product.querySelector(".product_id").innerText;
    var productNumber = product.querySelector("#my-input").value;
    if(productNumber === "undefined"){
       productNumber = 1;
    }
    addCart(productName, productImg, productPrice, productId,productNumber);
  });
});

//Get Parent Element which matches selector from element
function getParent(element, selector) {
  while (element.parentElement) {
    if (element.parentElement.matches(selector)) {
      return element.parentElement;
    }
    element = element.parentElement;
  }
}

//Add Cart to Local Storage
function addCart(productName, productImg, productPrice, productId, productNumber) {
  let items = [];
  if (typeof Storage !== "undefined") {
    let item = {
      id: productId,
      name: productName,
      price: productPrice,
      number: productNumber,
      img: productImg,
    };
    if (JSON.parse(localStorage.getItem("items")) === null) {
      items.push(item);
      localStorage.setItem("items", JSON.stringify(items));
      // setTimeout(() => {
      //   window.location.reload();
      // }, 1500);
      render();
    } else {
      const localItems = JSON.parse(localStorage.getItem("items"));
      localItems.map((data) => {
        if (item.id == data.id) {
          item.number = parseInt(data.number) + parseInt(item.number);
        } else {
          items.push(data);
        }
      });
      items.push(item);
      localStorage.setItem("items", JSON.stringify(items));
      // setTimeout(() => {
      //   window.location.reload();
      // }, 1500);
      render();
    }
  } else {
    Swal.fire({
      icon: "error",
      title: "Lỗi...",
      text: "Local Storage hiện không hoạt động trên trình duyệt của bạn!",
    });
    return;
  }

  Swal.fire({
    icon: "success",
    title: "Thành Công",
    text: "Đã Thêm Sản Phẩm Vào Giỏ Hàng!",
    showConfirmButton: false,
    timer: 1500,
  });
}

//Number Icon Cart
function numberOnCartIcon() {
  // Number on Icon Cart
  const iconShopping = document.querySelector(".cart_notice");
  let number = 0;
  JSON.parse(localStorage.getItem("items")).map((data) => {
    number = parseInt(number) + parseInt(data.number);
  });
  iconShopping.innerHTML = number;
}

//Render
render();
function render() {
  //Add Cart
  // var addItem = document.createElement("li");
  var cartList = document.querySelector(".header_cart-list-item");
  var cartContent = "";
  cartList.innerHTML = "";
  if (JSON.parse(localStorage.getItem("items"))[0] === null) {
    var noItem = document.querySelector(".header_cart--no_item");
    var footer = document.querySelector(".footer_cart");
    if (
      noItem.classList.contains("hidden") &&
      !footer.classList.contains("hidden")
    ) {
      noItem.classList.remove("hidden");
      footer.classList.add("hidden");
    }
  } else {
    var noItem = document.querySelector(".header_cart--no_item");
    var footer = document.querySelector(".footer_cart");
    if (
      !noItem.classList.contains("hidden") &&
      footer.classList.contains("hidden")
    ) {
      noItem.classList.add("hidden");
      footer.classList.remove("hidden");
    }
    JSON.parse(localStorage.getItem("items")).map((data) => {
      cartContent +=
        ' <li class="header_cart-item"><h4 class="header_cart-item-id hidden">' +
        data.id +
        '</h4><img src="' +
        data.img +
        '" alt="" class="header_cart-img"><div class="header_cart-list-item-info"><div class="header_cart-item-head"><h5 class="header_cart-item-name">' +
        data.name +
        '</h5> <span class="header_cart-item-remove"><i class="fa-solid fa-trash"></i></span></div>';
      cartContent +=
        '<div class="header_cart-item-wrap"><span class="header_cart-item-price">' +
        data.price +
        '</span><span class="home-detailproduct_heading_price--type">₫</span> <span class="header_cart-item-multiply">x</span><span class="header_cart-item-quantity">' +
        data.number +
        "</span></div></div></li>";
    });
    cartList.innerHTML = cartContent;
  }
  // cartList.append(addItem);
  cartTotal();
  numberOnCartIcon();
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
      // Get Id Product
      var cartDelete = event.target;
      var cartItemR =
        cartDelete.parentElement.parentElement.parentElement.parentElement;

      var id = cartItemR.querySelector(".header_cart-item-id").innerText;
      // console.log(id);

      // Find id equals item.id in localStorage
      const localItems = JSON.parse(localStorage.getItem("items"));
      localItems.map((data) => {
        if (id == data.id) {
          // Loc ID chi giu lai nhung id nao trong localStorage khac voi id lay tu event click chuot
          let items = localItems.filter((data) => data.id !== id);
          // console.log(items);
          localStorage.setItem("items", JSON.stringify(items));
        }
        // Render lai gio hang
        render();
      });
      // console.log(cartItemR);
      // cartItemR.remove();
      // cartTotal();
      // deleteCart();
    });
  }
  if (cartItem.length == 0) {
    var noItem = document.querySelector(".header_cart--no_item");
    var footer = document.querySelector(".footer_cart");
    if (
      !footer.classList.contains("hidden") &&
      noItem.classList.contains("hidden")
    ) {
      noItem.classList.remove("hidden");
      footer.classList.add("hidden");
    }
  }
}
