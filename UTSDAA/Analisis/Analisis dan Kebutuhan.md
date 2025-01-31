# Analisis dan Kebutuhan Sistem Manajemen Stok Merchandise Formula 1
## **1. Analisis Kebutuhan**

**a. Tujuan Sistem** 

Latar Belakang: Diperlukan sistem untuk pengelolaan stok merchandise Formula 1 secara efisien, terutama dengan meningkatnya permintaan.
Tujuan:
Memberikan akses kepada customer untuk melihat ketersediaan barang secara real-time.
Memungkinkan admin melakukan pengelolaan stok merchandise melalui fitur CRUD.

**b. Pengguna Sistem**

- Customer:

    Akses read-only untuk melihat daftar merchandise.
- Admin:

    Akses penuh untuk mengelola data merchandise (CRUD) dan memantau laporan stok.

**c. Fitur Utama yang Diperlukan**
- Fitur untuk Customer:
    Menampilkan daftar merchandise Formula 1 beserta detailnya (nama produk, deskripsi, tim, kategori, dan jumlah stok).
- Fitur untuk Admin:
    - CRUD data merchandise:
        - Create: Menambah merchandise baru.
        - Read: Melihat daftar merchandise.
        - Update: Memperbarui data produk.
        - Delete: Menghapus merchandise yang tidak lagi dijual.
        - Monitoring stok:
        - Menyediakan laporan ketersediaan produk untuk menghindari kekurangan stok.

**d. Keamanan Sistem**
Login berbasis peran:
- Admin: Akses penuh untuk fitur CRUD.
- Customer: Hanya dapat melihat data merchandise.
- Sistem otentikasi untuk membatasi akses berdasarkan peran pengguna.
## **2. Kebutuhan Sistem**
**a. Persyaratan Fungsional**

Sistem Login Berbasis Peran:
 - Admin: Memiliki hak penuh untuk mengelola data merchandise.
 - Customer: Hanya dapat melihat data merchandise.
 - CRUD Merchandise oleh Admin:
    - Create: Input data produk, termasuk nama, deskripsi, tim, kategori, dan stok.
    - Read: Menampilkan daftar merchandise yang tersedia.
    - Update: Memperbarui informasi produk, seperti jumlah stok atau kategori.
    - Delete: Menghapus data merchandise yang tidak relevan.

Tampilan Data untuk Customer:
Informasi yang tersedia: nama produk, deskripsi, kategori, tim, dan jumlah stok.

**b. Persyaratan Non-Fungsional**

- Kegunaan:
Antarmuka pengguna yang sederhana dan mudah digunakan oleh customer maupun admin.
- Keamanan:
    - Pembatasan akses dengan kontrol peran.
    - Enkripsi data pengguna.
- Kinerja:
Sistem harus responsif dalam menampilkan daftar merchandise dan mendukung filter/pencarian.
- Reliabilitas:
Data merchandise harus selalu konsisten selama proses pembaruan atau penghapusan oleh admin.
## **3. Struktur Data**
Model dan Entitas yang Diperlukan
 - Merchandise:
Informasi: nama, deskripsi, tim, kategori, stok.
- Pengguna:
Informasi: nama, email, password, peran.
Struktur Tabel Database
- Tabel Merchandise:

    id (Primary Key).

    name: Nama merchandise.

    team: Nama tim Formula 1.

    description: Deskripsi merchandise.

    category: Kategori merchandise.

    stock: Jumlah stok tersedia.

    created_at & updated_at.

    Tabel Users:

    id (Primary Key).

    name: Nama pengguna.

    email: Alamat email.

    password: Kata sandi.

    role: Peran (customer/admin).

    created_at & updated_at.

- Data Awal (Seeder)
Merchandise dari beberapa tim Formula 1 (Ferrari, McLaren, Red Bull).
Contoh akun admin dan customer.
## **4. Resource yang Dibutuhkan**
- Halaman Customer
    - Daftar Merchandise: Menampilkan produk yang tersedia dengan detail informasi (hanya read-only).
- Halaman Admin
    - Dashboard: Menyediakan ringkasan data merchandise.
    - Kelola Merchandise: Formulir untuk fitur CRUD.
    - Pencarian dan Filter: Mempermudah admin untuk mencari barang berdasarkan tim atau kategori.
## **5. Risiko dan Solusi**
- Kesalahan CRUD oleh Admin:
    - Solusi: Tambahkan konfirmasi sebelum menyimpan atau menghapus data.
- Konsistensi Data:
    - Solusi: Validasi data sebelum pembaruan atau penghapusan.