## Cara Menjalankan Aplikasi

Berikut langkah-langkah untuk menjalankan/bisa menggunakan aplikasi ini:

- Jika mendownload file maka lakukan pengekstrak project di folder htdocs jika memakai xampp / www jika memakai laragon
- Jika mengclone project maka bisa langsung ke tahap selanjutnya
- Lakukan "composer install" di terminal
- Cek file .env apakah sudah ada, jika terdapat .env.example maka ubah namanya menjadi .env jika tidak ada dua-duanya maka bisa mendownload [disini](https://drive.google.com/file/d/1Rv16Jd3GULOhCDGQOhHfQFlYxeNOzy2M/view?usp=drive_link)
- Nyalakan xampp
- Buat database mysql bernama "recipe_project" menggunakan PhpMyAdmin
- Jalankan "php artisan serve" di terminal dan lakukan "npm run dev" di terminal lain
- Ketik localhost:8000 di web
- Semoga berhasil!
