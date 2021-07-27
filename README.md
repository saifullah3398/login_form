# login_form
# Setup xampp in your local 
# clone login_form project in your local
# database setup details
database name : login_details
table name : user_details

CREATE DATABASE login_details;

CREATE TABLE `user_details` (
 `id` int(50) NOT NULL AUTO_INCREMENT,
 `user_name` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4
