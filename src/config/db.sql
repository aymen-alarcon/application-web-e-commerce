CREATE TABLE roles (
    id int AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL UNIQUE,
    permission TEXT
);
CREATE TABLE users (
    id int AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);
CREATE TABLE categories (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT
);
CREATE TABLE products (
    id int AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
CREATE TABLE orders (
    id int AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
        
);
CREATE TABLE order_items (
    id int AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL CHECK (quantity > 0),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);


INSERT INTO categories (name, description) VALUES
('Electronics', 'Electronic devices and gadgets'),
('Clothing', 'Apparel and fashion items'),
('Home', 'Home appliances and furniture'),
('Books', 'Books and educational materials');
INSERT INTO roles (role_name, permission) VALUES
('admin', 'FULL_ACCESS'),
('client', 'READ_ONLY');
INSERT INTO products (name, description, price, stock, category_id) VALUES
('Laptop', '15-inch laptop with 16GB RAM', 1200.00, 10, 1),
('Smartphone', 'Android smartphone 128GB', 800.00, 20, 1),
('Headphones', 'Noise-cancelling headphones', 150.00, 30, 1),

('T-Shirt', 'Cotton t-shirt size M', 25.00, 50, 2),
('Jeans', 'Blue denim jeans', 60.00, 40, 2),

('Sofa', '3-seater fabric sofa', 900.00, 5, 3),
('Microwave', '800W microwave oven', 200.00, 15, 3),

('Book - SQL Basics', 'Beginner SQL guide', 30.00, 100, 4),
('Book - Data Structures', 'Advanced programming concepts', 45.00, 70, 4),

('Desk Lamp', 'LED desk lamp with dimmer', 40.00, 25, 3);