# sistem-informasi-pembayaran-sekolah
SIP Sekolah Custom bisa di kembangkan lagi 

Features :
Autentikasi Admin
User & CRUD
Jadwal & CRUD
Kelas & CRUD
Mata Pelajaran & CRUD
Guru & CRUD
Siswa & CRUD
Rapot
Dan lain-lain


Install
Clone Repository
https://github.com/AMIRUDIN5592/sistem-informasi-pembayaran-sekolah.git
cd sistem-informasi-pembayaran-sekolah
composer install
cp .env.example .env
Buka .env lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=db_spp
DB_USERNAME=pgsql
DB_PASSWORD=root
Instalasi website
php artisan key:generate
php artisan migrate --seed
Jalankan website
php artisan serve

Yuk Biar Makin Semangat 
Yang Berniat Donasi Untuk Pengembangan Boleh Di Link di Bawah Ini
https://sociabuzz.com/amirudin5592
