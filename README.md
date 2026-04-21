Aplikasi CRUD Data Lagu (Laravel 12)

Deskripsi:
Aplikasi ini merupakan sistem sederhana berbasis web yang dibuat menggunakan Laravel 12 untuk mengelola data lagu.
Fitur utama dalam aplikasi ini adalah CRUD (Create, Read, Update, Delete) yang memungkinkan pengguna untuk menambah, melihat, mengubah, dan menghapus data lagu.
Aplikasi ini dibuat sebagai tugas kuliah untuk memahami konsep dasar framework Laravel serta implementasi database MySQL.

Teknologi yang digunakan: 
Laravel 
PHP
MySQL
HTML 
Bootstrap 5
Laragon

Fitur Aplikasi:
Tambah Data Lagu (Create)
Tampilkan Data Lagu (Read)
Detail Lagu (Read Detail)
Edit Data Lagu (Update)
Hapus Data Lagu (Delete)

Cara Menjalankan Project:
1. Clone / Download Project
git clone <repository-url>
2. Masuk ke folder project
cd web2_crud
3. Install dependency
composer install
4. Copy file environment
cp .env.example .env
5. Generate key
php artisan key:generate
6. Atur database di file .env
DB_DATABASE=lagu
DB_USERNAME=root
DB_PASSWORD=
7. Jalankan migration
php artisan migrate
8. Jalankan server
php artisan serve
9. Buka di browser
http://127.0.0.1:8000/lagu