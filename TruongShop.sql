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
  price DECIMAL(10, 2) NOT NULL,
  file_path VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, firstname, lastname, email, passwd, created_at)
VALUES ('username1', 'John', 'Doe', 'john.doe@example.com', 'password1', CURRENT_TIMESTAMP),
       ('username2', 'Jane', 'Smith', 'jane.smith@example.com', 'password2', CURRENT_TIMESTAMP),
       ('username3', 'Michael', 'Johnson', 'michael.johnson@example.com', 'password3', CURRENT_TIMESTAMP),
       ('username20', 'Sarah', 'Williams', 'sarah.williams@example.com', 'password20', CURRENT_TIMESTAMP);
INSERT INTO products (name, description, price, file_path)
VALUES ('Product 1', 'Description 1', 10.99, '/path/to/file1'),
       ('Product 2', 'Description 2', 19.99, '/path/to/file2'),
       ('Product 3', 'Description 3', 5.99, '/path/to/file3');
