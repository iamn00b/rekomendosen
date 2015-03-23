# Rekomendosen 

## Konfigurasi

### Install Composer

```bash
# Download composer
curl -s https://getcomposer.org/installer | php

# Install project dependencies
php composer.phar install

# Or
composer install
```
### Base URL
Ubah global variable `BASE_URL` di file `app/config/global.php`.

### Database
Buat database di MySQL dengan nama 'rekomendosen'.
Jika ingin menggunakan nama lain atau konfigurasi lain, silahkan ubah di `app/config/database.php`.

Lalu jalankan

```bash
# Migrate database dan berikan data dummy
php novice migrate --seed
```

### Akses
Akses direktori `public` untuk melihat website

## Technical Notes
Selain yang berada di folder `app/database/migrations`, nama file harus huruf kecil semua.

## Credits
https://github.com/iamn00b/yasm
