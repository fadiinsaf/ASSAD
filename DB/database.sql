CREATE DATABASE ASSAD;

USE ASSAD;

CREATE TABLE IF NOT EXISTS users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(255) UNIQUE NOT NULL,
	password VARCHAR(255) NOT NULL,
	role ENUM('admin','visiter','guide') NOT NULL,
	firstlogin BOOL DEFAULT TRUE,
	is_active BOOL DEFAULT FALSE,
	is_approved BOOL DEFAULT FALSE,
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS habitats(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description TEXT,
  zoo_zone ENUM(
	  'AFRICAN_ZONE',
	  'SAVANNA_AREA',
	  'BIG_CATS_ZONE',
	  'REPTILE_HOUSE',
	  'BIRDS_ZONE',
	  'AQUATIC_ZONE'
	)
);

CREATE TABLE IF NOT EXISTS animals(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	species VARCHAR(100) NOT NULL,
	diet_type ENUM('CARNIVORE','HERBIVORE','OMNIVORE'),
	image TEXT NOT NULL,
	short_description VARCHAR(255),
	id_habitat INT,
	FOREIGN KEY (id_habitat) REFERENCES habitats(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS guide_visits(
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
    description TEXT,
    start_datetime DATETIME NOT NULL,
    duration INT NOT NULL,
    price FLOAT NOT NULL,
    language VARCHAR(20) NOT NULL,
    capacity_max INT NOT NULL,
    status ENUM("available", "not available") DEFAULT "available",
    id_guide INT,
	FOREIGN KEY (id_guide) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS visit_steps(
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(100) NOT NULL,
    description TEXT,
    step_order INT NOT NULL,
    id_visit INT,
	FOREIGN KEY (id_visit) REFERENCES guide_visits(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS reservation(
	id INT AUTO_INCREMENT PRIMARY KEY,
    number_of_people INT NOT NULL,
    id_visiter INT,
    id_visit INT,
	FOREIGN KEY (id_visit) REFERENCES guide_visits(id) ON DELETE CASCADE,
	FOREIGN KEY (id_visiter) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS comment(
	id INT AUTO_INCREMENT PRIMARY KEY,
    comment_text TEXT,
    comment_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    rating INT NOT NULL CHECK(rating BETWEEN 1 and 5),
    id_visiter INT,
    id_visit INT,
	FOREIGN KEY (id_visit) REFERENCES guide_visits(id) ON DELETE CASCADE,
	FOREIGN KEY (id_visiter) REFERENCES users(id) ON DELETE CASCADE
);




