CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(50) NOT NULL UNIQUE,
    firstname VARCHAR(50)NOT NULL,
		lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100)NOT NULL,
    passwd VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  description TEXT,
	category VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  file_path VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) CHARACTER SET utf8;
CREATE TABLE receipts (
  id INT NOT NULL AUTO_INCREMENT,
  userid INT NOT NULL,
  date DATETIME DEFAULT CURRENT_TIMESTAMP,
  address TEXT NOT NULL,
  PRIMARY KEY (id)
)CHARACTER SET utf8;

CREATE TABLE receipt_items (
  id INT NOT NULL AUTO_INCREMENT,
  receipt_id INT NOT NULL,
  product_id INT NOT NULL,
  quantity INT NOT NULL,
	price INT NOT NULL,
	PRIMARY KEY (id)
);
INSERT INTO users (username, firstname, lastname, email, passwd, created_at)
VALUES ('username1', 'John', 'Doe', 'john.doe@example.com', 'password1', CURRENT_TIMESTAMP),
       ('username2', 'Jane', 'Smith', 'jane.smith@example.com', 'password2', CURRENT_TIMESTAMP),
       ('username3', 'Michael', 'Johnson', 'michael.johnson@example.com', 'password3', CURRENT_TIMESTAMP),
       ('username20', 'Sarah', 'Williams', 'sarah.williams@example.com', 'password20', CURRENT_TIMESTAMP);
INSERT INTO products (name, description,category, price, file_path)
VALUES
  ('Example 1', 'Description 1', 'Category 1', 9.99, '/path/to/file1'),
  ('Example 2', 'Description 2', 'Category 2', 19.99, '/path/to/file2'),
  ('Example 3', 'Description 3', 'Category 1', 14.99, '/path/to/file3'),
  ('Example 20', 'Description 20', 'Category 2', 12.99, '/path/to/file20');
INSERT INTO products (name, description,category, price, file_path)
CREATE INDEX product_index ON products (id);
