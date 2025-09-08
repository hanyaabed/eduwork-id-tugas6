-- 1. Membuat database ecommerce
CREATE DATABASE ecommerce;

-- 2. Masuk database ecommerce
USE ecommerce;

-- 3. Membuat tabel products
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(255),
    harga DECIMAL(10,2),
    deskripsi TEXT,
    stok INT
);

-- 4. Membuat tabel users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);

-- 5. Membuat table orders
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    quantity INT,
    total INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- 6. CREATE (menambahkan data produk)
INSERT INTO `products` (`nama_produk`, `harga`, `deskripsi`, `stok`) VALUES
('Baju', 5000, 'Kain tipis cocok di cuaca panas', 10), ('Celana', 6000, 'Celana panjang bahan dari kain', 10);

-- 7. READ (menampilkan data produk)
SELECT * FROM products;

-- 8. UPDATE (mengubah data produk)
UPDATE products 
SET nama_produk = 'Baju Polos' 
WHERE id = 1;

-- 9. READ lagi untuk memastikan perubahan setelah update
SELECT * FROM products;

-- 10. DELETE (menghapus data produk)
DELETE FROM products 
WHERE id = 2;

-- 11. READ lagi untuk memastikan perubahan setelah delete
SELECT * FROM products;
