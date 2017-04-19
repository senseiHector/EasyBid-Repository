CREATE DATABASE easyBid;
USE easyBid;

/*Users Table*/
CREATE TABLE users(
  user_id INTEGER AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE,
  firstName VARCHAR(50),
  lastName VARCHAR(50),
  email VARCHAR(100),
  phoneNum VARCHAR(15),
  password VARCHAR(100),
  type SET('user','admin'),
  status TINYINT(1)
);

/*Items Table*/
CREATE TABLE items(
  item_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  item_name VARCHAR(100),
  description VARCHAR(255),
  icon_url VARCHAR(255),
  auctioneer_id INTEGER,
  list_price FLOAT(20),
  min_price FLOAT(20),
  item_condition ENUM('new','slightlyUsed','collectors'),
  status ENUM('available','inTransit','delivered'),
  FOREIGN KEY (auctioneer_id) REFERENCES users(user_id)
);

/*Transactions Table*/
CREATE TABLE transactions(
  transaction_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  bidder_id INTEGER,
  auctioneer_id INTEGER,
  item_id INTEGER,
  transaction_status SET('ongoing','completed'),
  FOREIGN KEY (bidder_id) REFERENCES users(user_id),
  FOREIGN KEY (auctioneer_id) REFERENCES users(user_id),
  FOREIGN KEY (item_id) REFERENCES items(item_id)
);

/*Payment Options Table*/
CREATE TABLE payment_options(
  option_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  option_name VARCHAR(50)
);

/*User Payment Options Table*/
CREATE TABLE user_payment_options(
  user_option_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  option_id INTEGER,
  user_id INTEGER,
  FOREIGN KEY (option_id) REFERENCES payment_options(option_id),
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);

/*Ratings Table*/
CREATE TABLE ratings(
  rating_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  bidder_id INTEGER,
  auctioneer_id INTEGER,
  rating INTEGER,
  comments VARCHAR(1024),
  FOREIGN KEY (bidder_id) REFERENCES users(user_id),
  FOREIGN KEY (auctioneer_id) REFERENCES users(user_id)
);
