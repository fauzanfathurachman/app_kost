-- Tabel utama
CREATE TABLE kost (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  alamat VARCHAR(255),
  pemilik VARCHAR(100)
);

CREATE TABLE kamar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nomor VARCHAR(10),
  tipe VARCHAR(50),
  harga DECIMAL(12,2),
  status ENUM('kosong','terisi'),
  kost_id INT,
  FOREIGN KEY (kost_id) REFERENCES kost(id)
);

CREATE TABLE penghuni (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  no_hp VARCHAR(20),
  alamat VARCHAR(255),
  tanggal_masuk DATE,
  kamar_id INT,
  FOREIGN KEY (kamar_id) REFERENCES kamar(id)
);

CREATE TABLE barang (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  jumlah INT,
  kamar_id INT,
  FOREIGN KEY (kamar_id) REFERENCES kamar(id)
);

CREATE TABLE pembayaran (
  id INT AUTO_INCREMENT PRIMARY KEY,
  penghuni_id INT,
  jumlah DECIMAL(12,2),
  tanggal DATE,
  keterangan VARCHAR(255),
  FOREIGN KEY (penghuni_id) REFERENCES penghuni(id)
);

CREATE TABLE user (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255),
  role ENUM('admin','pemilik')
);

CREATE TABLE log_aktivitas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  aksi VARCHAR(255),
  waktu DATETIME,
  FOREIGN KEY (user_id) REFERENCES user(id)
);

-- Sample data
INSERT INTO kost (nama, alamat, pemilik) VALUES
('Kost Mawar', 'Jl. Mawar No. 1', 'Budi');

INSERT INTO kamar (nomor, tipe, harga, status, kost_id) VALUES
('A1', 'Single', 500000, 'kosong', 1),
('A2', 'Single', 500000, 'terisi', 1),
('B1', 'Double', 800000, 'terisi', 1);

INSERT INTO penghuni (nama, no_hp, alamat, tanggal_masuk, kamar_id) VALUES
('Andi', '08123456789', 'Jl. Melati No. 2', '2024-06-01', 2),
('Siti', '08129876543', 'Jl. Kenanga No. 3', '2024-06-05', 3);

INSERT INTO barang (nama, jumlah, kamar_id) VALUES
('Lemari', 1, 2),
('Kasur', 1, 2),
('Meja', 1, 3);

INSERT INTO user (username, password, role) VALUES
('admin', MD5('admin123'), 'admin'),
('budi', MD5('budi123'), 'pemilik'); 