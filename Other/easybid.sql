CREATE DATABASE easyBid;
USE easyBid;

/*Users Table*/
CREATE TABLE users(
  user_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  username	VARCHAR(50),
  firstName	VARCHAR(50),
  lastName	VARCHAR(50),
  email	VARCHAR(100),
  phoneNum	VARCHAR(15),
  password	VARCHAR(255),
  type SET('user','admin'),
  status TINYINT(1)
);

/*Items Table*/
CREATE TABLE items(
  item_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  item_name	VARCHAR(100),
  description	VARCHAR(255),
  icon_url	VARCHAR(255),
  auctioneer_id INTEGER,
  list_price	FLOAT(20),
  min_price	FLOAT(20),
  condition ENUM('new','slightly_used','collectors'),
  status ENUM('available','in_transit','delivered'),
  FOREIGN KEY (auctioneer_id) REFERENCES users(user_id)
);

/*Transactions Table*/
CREATE TABLE transactions(
  transaction_id INTEGER PRIMARY KEY AUTO_INCREMENT,
  bidder_id INTEGER,
  auctioneer_id INTEGER,
  item_id	INTEGER,
  transaction_status SET('ongoing','completed'),
  FOREIGN KEY (bidder_id) REFERENCES users(user_id),
  FOREIGN KEY (auctioneer_id) REFERENCES users(user_id),
  FOREIGN KEY (item_id) REFERENCES items(item_id)
);