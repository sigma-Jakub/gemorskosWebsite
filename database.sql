-- Creating database. 09/01/2025

CREATE DATABASE IF NOT EXISTS `database`
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci
USE `database`;

-- Creating Employee table. 09/01/2025

CREATE TABLE `employee` (
    `employee_id` INT AUTO_INCREMENT,
    `firstName` VARCHAR(255) NOT NULL,
    `lastName` VARCHAR(255) NOT NULL,
    `phoneNumber` VARCHAR(20) NOT NULL,
    `username` VARCHAR(255) NOT NULL,
    `passwordHash` VARCHAR(255) NOT NULL,
    CONSTRAINT PK_employee_id PRIMARY KEY(`employee_id`)
);

-- Creating Role table. 09/01/2025

CREATE TABLE `role` (
    `role_id` INT AUTO_INCREMENT,
    `roleName` VARCHAR(32) NOT NULL,
    CONSTRAINT PK_role_id PRIMARY KEY(`role_id`)
);

-- Creating Employee_Role table. 09/01/2025

CREATE TABLE `employee_role` (
    `employee_id` INT NOT NULL,
    `role_id` INT NOT NULL,
    CONSTRAINT PK_employee_role PRIMARY KEY(`employee_id`, `role_id`),
    CONSTRAINT FK_employee_id FOREIGN KEY(`employee_id`) REFERENCES `employee`(`employee_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT FK_role_id FOREIGN KEY(`role_id`) REFERENCES `role`(`role_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);

-- Creating Document table. 09/01/2025

CREATE TABLE `document` (
    `document_id` INT AUTO_INCREMENT,
    `docName` VARCHAR(128) NOT NULL,
    CONSTRAINT PK_document_id PRIMARY KEY(`document_id`)
);

-- Creating Permission table. 09/01/2025

CREATE TABLE `permission` (
    `document_id` INT NOT NULL,
    `employee_id` INT NOT NULL,
    `accessType` ENUM('full', 'view') DEFAULT 'view',
    CONSTRAINT PK_permission PRIMARY KEY(`document_id`, `employee_id`),
    CONSTRAINT FK_document_id FOREIGN KEY(`document_id`) REFERENCES `document`(`document_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT FK_employee_id FOREIGN KEY(`employee_id`) REFERENCES `employee`(`employee_id`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
);