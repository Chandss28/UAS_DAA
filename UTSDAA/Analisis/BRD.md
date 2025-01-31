# Dokumen Persyaratan Bisnis (BRD)
Proyek: Sistem Manajemen Stok Merchandise Formula 1
Versi: 1.2
Tanggal: 15 November 2024
---
## 1. Tujuan Proyek
Latar Belakang: Dengan meningkatnya popularitas merchandise Formula 1, diperlukan sistem yang dapat mengelola stok produk dengan efisien, memungkinkan customer melihat ketersediaan item, dan memberi admin akses penuh untuk pengelolaan stok.
Tujuan: Membangun aplikasi berbasis Laravel untuk manajemen stok merchandise Formula 1, dengan fitur yang memungkinkan customer melihat barang yang tersedia dan admin mengelola data barang sepenuhnya. 

---
## 2. Fitur Utama

Fitur untuk Customer

- Lihat Data Merchandise: Customer dapat melihat daftar merchandise Formula 1 yang tersedia, termasuk detail nama produk, deskripsi, tim, dan ketersediaan stok. Akses customer hanya terbatas pada tampilan data tanpa bisa melakukan perubahan.
Fitur untuk Admin
- Pengelolaan Stok Merchandise (CRUD): Admin memiliki akses penuh untuk menambah, memperbarui, dan menghapus data merchandise.
- Monitoring Ketersediaan Stok: Menampilkan laporan stok untuk memudahkan admin dalam memastikan ketersediaan dan mencegah kekurangan produk.

---
## 3. Persyaratan Fungsional
Sistem Login dengan Akses Berdasarkan Peran

Admin: Memiliki hak untuk melakukan seluruh tindakan CRUD pada merchandise.
Customer: Dapat melihat daftar merchandise Formula 1 yang tersedia, tetapi tanpa hak untuk menambah, mengubah, atau menghapus data.

**Pengelolaan Merchandise oleh Admin**

- Create: 
    Menambahkan produk merchandise baru ke dalam database, termasuk detail tim, deskripsi produk, kategori, dan jumlah stok.
- Read: 
    Menampilkan daftar merchandise Formula 1 yang tersedia, baik untuk customer maupun admin.
- Update: 
    Memperbarui informasi produk seperti deskripsi, kategori, dan jumlah stok.
- Delete: 
    Menghapus data merchandise yang sudah tidak tersedia atau tidak lagi dijual.
- Akses Tampilan untuk Customer
    Customer hanya memiliki akses read-only untuk melihat daftar merchandise dengan informasi nama, deskripsi, kategori, tim, dan jumlah stok.

---
## 4. Persyaratan Non-Fungsional

Kegunaan (Usability)

Antarmuka ramah pengguna yang sederhana untuk customer dan admin, dengan navigasi mudah untuk melihat daftar produk dan mengelola stok merchandise.


Keamanan (Security)

Pembatasan akses dengan kontrol peran yang ketat: hanya admin yang dapat mengelola stok merchandise, sedangkan customer hanya dapat melihat data.
Perlindungan data pengguna melalui otentikasi dan enkripsi.

Kinerja (Performance)

Sistem harus menampilkan informasi barang dengan cepat, termasuk pencarian dan filter oleh admin, serta dapat menangani jumlah data yang besar.


Reliabilitas (Reliability)

Menjaga konsistensi dan ketersediaan data merchandise setiap saat, terutama selama pembaruan stok oleh admin.

---
## 5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan
Model dan Entitas yang Diperlukan

Merchandise: Menyimpan informasi produk Formula 1 yang dijual.
Pengguna: Menyimpan data pengguna (customer dan admin), termasuk peran masing-masing.

Struktur Tabel Database

- Tabel Merchandise

    id: bigint UNSIGNED (Primary Key)
    name: varchar(255) - Nama produk merchandise
    team: varchar(255) - Nama tim Formula 1 terkait (misal: Ferrari, McLaren)
    description: text - Deskripsi merchandise
    category: enum('hat', 'jacket', 't-shirt', 'accessory') - Kategori merchandise
    stock: int(11) - Jumlah stok merchandise
    created_at: timestamp - Waktu produk ditambahkan
    updated_at: timestamp - Waktu data diperbarui
    Tabel Pengguna (Users Table)

    id: bigint UNSIGNED (Primary Key)
    name: varchar(255) - Nama pengguna
    email: varchar(255) - Email pengguna
    password: varchar(255) - Password pengguna
    role: enum('customer', 'admin') - Peran pengguna
    created_at: timestamp - Tanggal akun dibuat
    updated_at: timestamp - Tanggal akun diubah

Resource yang Dibutuhkan

- Halaman Customer

    Daftar Merchandise: Menampilkan daftar merchandise dengan informasi nama produk, tim, deskripsi, kategori, dan jumlah stok yang tersedia (hanya read-only).
- Halaman Admin

    Dashboard: Ringkasan data merchandise.
    Kelola Merchandise: Form CRUD untuk penambahan, pembaruan, dan penghapusan data merchandise.
    Pencarian dan Filter Merchandise: Memudahkan admin untuk mencari dan memfilter barang berdasarkan tim atau kategori produk.
- Data Awal (Seeder)

    Data merchandise Formula 1 dari beberapa tim untuk pengujian dan penggunaan awal sistem.
