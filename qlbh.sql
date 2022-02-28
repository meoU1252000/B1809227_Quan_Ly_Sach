Create database quanlybanhang;

use quanlybanhang;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES 'utf8';
SET CHARACTER SET utf8;

Create table Staff(
   id_staff int auto_increment primary key,
   name_staff varchar(255),
   address_staff varchar(255),
   position_staff varchar(255),
   phone_staff varchar(10),
   note_staff varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table staffAccount(
   id_staff int,
   email_staff varchar(255),
   password_staff varchar(255),
   foreign key (id_staff) references Staff(id_staff) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table Role(
  id_role int auto_increment primary key,
  name_role varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table roleDetails(
  id_staff int,
  id_role int,
  foreign key(id_staff) references Staff(id_staff) ON DELETE CASCADE,
  foreign key(id_role) references Role(id_role) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table typeGroup(
   id_typegroup int auto_increment primary key,
   name_typegroup varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table productType(
  id_typegroup int,
  id_type int auto_increment primary key,
  name_type varchar(255),
  foreign key(id_typegroup) references typeGroup(id_typegroup)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table publishingCompany(
   id_publishingcompany int auto_increment primary key,
   name_publishingcompany varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table Product(
   id_type int,
   id_product int auto_increment primary key,
   id_publishingcompany int,
   name_product varchar(255),
   author varchar(255),
   number_product int,
   product_sold int, 
   note_product varchar(255),
   foreign key(id_type) references productType(id_type) ON DELETE CASCADE,
   foreign key(id_publishingcompany) references publishingCompany(id_publishingcompany) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


Create table Supplier(
   id_supplier int auto_increment primary key,
   name_supplier varchar(255),
   phone_supplier varchar(10),
   address_supplier varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table importProduct(
   id_import int auto_increment primary key,
   date_import date
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table importDetails(
   id_import int,
   id_product int,
   id_supplier int,
   price_import float,
   number_import float, 
   foreign key(id_import) references importProduct(id_import) ON DELETE CASCADE,
   foreign key(id_product) references Product(id_product) ON DELETE CASCADE,
   foreign key(id_supplier) references Supplier(id_supplier) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table sellingprice(
   id_sell int primary key auto_increment,
   id_product int,
   id_import int,
   selling_price float,
   date_start date,
   date_end date
);
Create table discountValue(
  id_product int auto_increment primary key,
  discount_value float,
  date_start date,
  date_end date,
  foreign key(id_product) references Product(id_product) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table codeDiscount(
   id_code int auto_increment primary key,
   code_event varchar(255),
   discount_value float
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table Customers(
  id_customer int primary key auto_increment,
  name_customer varchar(255),
  phone_customer varchar(10),
  email_customer varchar(255),
  username_customer varchar(255),
  password_customer varchar(255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table customerAddress(
  id_customer int,
  id_address int primary key auto_increment,
  address varchar(255),
  name_receive varchar(255), 
  phone_receive varchar(10),
  foreign key(id_customer) references Customers(id_customer) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table Orders(
  id_order int auto_increment primary key,
  id_staff int,
  id_customer int,
  id_address int,
  id_code int,
  date_delivery date,
  date_receive date,
  order_status varchar(255),
  total_price float,
  note_orders varchar(255),
  foreign key(id_staff) references Staff(id_staff) ON DELETE CASCADE,
  foreign key(id_customer) references Customers(id_customer) ON DELETE CASCADE,
  foreign key(id_address) references customerAddress(id_address) ON DELETE CASCADE,
  foreign key(id_code) references codeDiscount(id_code) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

Create table orderDetails(
  id_order int,
  number_order int,
  price_order float,
  foreign key(id_order) references Orders(id_order) ON DELETE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


