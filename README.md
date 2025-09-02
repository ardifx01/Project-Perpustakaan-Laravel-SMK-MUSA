# Project-Perpustakaan-Laravel-11
Aplikasi Sistem Informasi Perpustakaan berbasis Laravel 11. Fitur utama: manajemen buku, anggota, peminjaman, pengembalian, dan laporan perpustakaan. Proyek ini dibuat untuk pembelajaran dan praktik pengembangan web dengan framework Laravel terbaru.

# Project-Perpustakaan-Laravel-11

## Deskripsi

Aplikasi Sistem Informasi Perpustakaan berbasis Laravel 11. Fitur utama meliputi manajemen buku, anggota, peminjaman, pengembalian, dan laporan perpustakaan. Proyek ini dibuat untuk pembelajaran dan praktik pengembangan web dengan framework Laravel terbaru.

## Fitur Utama

* Manajemen Buku (CRUD buku)
* Manajemen Anggota (CRUD anggota)
* Peminjaman Buku
* Pengembalian Buku
* Laporan Perpustakaan
* Autentikasi pengguna (Login & Register)

## Instalasi

1. Clone repository:

```bash
git clone https://github.com/<username>/Project-Perpustakaan-Laravel-11.git
```

2. Masuk ke folder project:

```bash
cd Project-Perpustakaan-Laravel-11
```

3. Install dependencies menggunakan Composer:

```bash
composer install
```

4. Copy file `.env.example` menjadi `.env` dan sesuaikan konfigurasi database.

```bash
cp .env.example .env
```

5. Generate key aplikasi Laravel:

```bash
php artisan key:generate
```

6. Jalankan migrasi database:

```bash
php artisan migrate
```

7. Jalankan server Laravel:

```bash
php artisan serve
```

## Cara Penggunaan

1. Buka browser dan akses:

```
http://localhost:8000
```

2. Login dengan akun admin atau register akun baru.
3. Gunakan menu navigasi untuk mengelola buku, anggota, peminjaman, dan laporan.

## Struktur Folder

```
Project-Perpustakaan-Laravel-11/
├── app/          # Logika aplikasi
├── bootstrap/    # Bootstrap framework
├── config/       # Konfigurasi aplikasi
├── database/     # Migrasi dan seeders
├── public/       # Akses publik
├── resources/    # View dan assets
├── routes/       # Route aplikasi
├── storage/      # File storage
├── tests/        # Unit & feature test
└── .env          # Konfigurasi environment (jangan diupload)
```

## Kontribusi

Silakan fork repository ini dan buat pull request untuk kontribusi. Pastikan mengikuti standar Laravel dan menjaga keamanan data.

## Lisensi

Project ini dilisensikan di bawah MIT License.
