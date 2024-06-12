# Sistem Informasi Pembayaran Sekolah (SIP Sekolah Custom)

SIP Sekolah Custom adalah aplikasi manajemen pembayaran sekolah yang dapat dikembangkan lebih lanjut. Aplikasi ini memiliki berbagai fitur yang dapat membantu mengelola data sekolah dengan mudah.

## Features

- Autentikasi Admin
- User Management & CRUD
- Jadwal & CRUD
- Kelas & CRUD
- Mata Pelajaran & CRUD
- Guru & CRUD
- Siswa & CRUD
- Rapot
- Dan lain-lain

## Installasi

### Clone Repository

1. Clone repository ini:
    ```bash
    git clone https://github.com/AMIRUDIN5592/sistem-informasi-pembayaran-sekolah.git
    ```

2. Masuk ke directory proyek:
    ```bash
    cd sistem-informasi-pembayaran-sekolah
    ```

### Install Dependencies

1. Jalankan perintah berikut untuk menginstall dependencies:
    ```bash
    composer install
    ```

2. Salin file `.env.example` menjadi `.env`:
    ```bash
    cp .env.example .env
    ```

3. Buka file `.env` dan ubah baris berikut sesuai dengan konfigurasi database yang Anda gunakan:
    ```env
    DB_CONNECTION=pgsql
    DB_HOST=127.0.0.1
    DB_PORT=5432
    DB_DATABASE=db_spp
    DB_USERNAME=pgsql
    DB_PASSWORD=root
    ```

### Instalasi Website

1. Generate application key:
    ```bash
    php artisan key:generate
    ```

2. Jalankan migrasi dan seeding database:
    ```bash
    php artisan migrate --seed
    ```

### Jalankan Website

1. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Donasi

Yuk biar makin semangat! Yang berminat donasi untuk pengembangan aplikasi ini bisa melalui link di bawah ini:

[Donasi via Sociabuzz](https://sociabuzz.com/amirudin5592)

---

Terima kasih telah menggunakan SIP Sekolah Custom! Jangan ragu untuk menghubungi saya jika ada pertanyaan atau masalah.
