CREATE TABLE `employees` (
   `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `salary` INT(10) NOT NULL
);
INSERT INTO `employees` VALUES (1, 'PhanTienHuy', 'HaNoi', 5000);
