CSC2053-Final-Project
The Pet Board
Uploading Photos of your pets to a MySQL database using PHP

How to setup
Install Appache and MYSQL on Xampp
Download the code into your htdocs file
Turn on both servers
Open the admin tab in MySql
Create your Schema for table creation (use the names pet_schema and pet_table)
Create the pet table in PHPMyAdmin using SQL (SQL Code Below)
Open the index.php in your web browser and upload!
SQL Code
CREATE TABLE pet_images ( pet_id int(11) NOT NULL, images longblob NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE pet_images ADD PRIMARY KEY (pet_id);

ALTER TABLE pet_images MODIFY pet_id int(11) NOT NULL AUTO_INCREMENT;