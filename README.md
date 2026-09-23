# Agung Indah Diesel

## Product Information System

Mini Project Product Information System yang dibuat untuk mensimulasikan
sistem informasi produk pada Agung Indah Diesel, sebuah usaha yang bergerak
dalam penyediaan sparepart dan kebutuhan kendaraan diesel.

Project ini dibuat sebagai bagian dari pembelajaran pengembangan perangkat
lunak menggunakan PHP dengan menerapkan pemisahan antara Data Layer,
Processing Layer, dan Presentation Layer.

---

## 📌 Deskripsi Project

Agung Indah Diesel merupakan sistem informasi sederhana yang digunakan
untuk mengelola dan menampilkan informasi produk sparepart kendaraan diesel.

Sistem ini menampilkan beberapa informasi produk, seperti:

- ID produk
- Nama produk
- Kategori produk
- Harga produk
- Jumlah stok
- Deskripsi produk

Selain menampilkan informasi produk, sistem juga dapat menghitung total
nilai seluruh stok berdasarkan harga produk dan jumlah stok.

Sistem juga memiliki fitur penanda stok kritis. Produk yang memiliki jumlah
stok kurang dari 3 akan diberikan tanda khusus pada tabel agar lebih mudah
diperhatikan.

---

## 🎯 Tujuan Project

Project ini bertujuan untuk:

1. Menerapkan penggunaan array multidimensi dalam PHP.
2. Menerapkan function untuk melakukan proses perhitungan data.
3. Menggunakan `foreach` untuk menampilkan data secara dinamis.
4. Menerapkan pemisahan Data Layer, Processing Layer, dan Presentation Layer.
5. Menampilkan informasi produk dalam bentuk tabel.
6. Menerapkan kondisi untuk memberikan penanda pada stok yang rendah.
7. Mengenal penggunaan Git dan GitHub dalam pengelolaan project.

---

## ⚙️ Fitur

### 1. Data Produk

Sistem menyimpan informasi produk berupa:

- ID produk
- Nama produk
- Kategori
- Harga
- Stok
- Deskripsi

### 2. Perhitungan Nilai Stok

Sistem menghitung nilai stok setiap produk berdasarkan rumus:

**Nilai Stok = Harga × Jumlah Stok**

Kemudian seluruh nilai stok produk dijumlahkan untuk mendapatkan total
nilai stok.

### 3. Penanda Stok Kritis

Produk dengan jumlah stok kurang dari 3 akan diberikan warna khusus
pada tabel sebagai penanda bahwa stok produk tersebut rendah.

### 4. Tampilan Produk

Seluruh data produk ditampilkan dalam bentuk tabel agar informasi lebih
mudah dibaca.

### 5. Format Harga Rupiah

Harga produk ditampilkan menggunakan format mata uang Rupiah agar lebih
mudah dibaca oleh pengguna.

---

## 🏗️ Struktur Project

Project ini menggunakan tiga bagian utama:

### Data Layer

File:

`products.php`

Berfungsi untuk menyimpan data produk dalam bentuk array multidimensi.

### Processing Layer

File:

`functions.php`

Berisi function `hitungTotalNilaiStok()` yang digunakan untuk menghitung
total nilai seluruh stok produk.

### Presentation Layer

File:

`index.php`

Berfungsi untuk menampilkan data produk kepada pengguna menggunakan HTML
dan PHP.

---

## 📂 Struktur Folder

```text
agung-indah-diesel/
│
├── index.php
├── products.php
├── functions.php
└── README.md