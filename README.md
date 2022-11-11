# Laravel

## 02. Instalasi & Konfigurasi
* Instalasi pada Windows
    * Kunjungi https://laravel.com/docs/8.x -> # Getting Started On Windows -> # Installation Via Composer
        ```cmd
        composer create-project laravel/laravel:^8.0 example-app (untuk membuat project dengan nama example-app)
        cd example-app (masuk ke folder project)
        php artisan serve (menjalankan local server)
        ````
    *  


Instalasi via The Laravel Installer
* Pastikan Environment Variable : %USERPROFILE%\AppData\Roaming\Composer\vendor\bin
- composer global require laravel/installer (mengambil Laravel Installer)
- laravel new example-app
- cd example-app
- php artisan serve (menjalankan local server)

Menjalankan Local Server via Valet
* Pastikan Prevered DNS Server untuk IPv4 (127.0.0.1) dan IPv6 (::1)
* Valet menggunakan port 80, Ganti port XAMPP dari 80 menjadi 8080 (Listen & ServerName localhost)
- composer global require cretueusebiu/valet-windows (mengambil Valet untuk Windows)
- valet install (menginstall valet - cukup sekali)
- valet park (tentukan tempat local development server)


##
##

# Heading 1 / Judul Utama (gunakan #)

## Heading 2 / Sub Judul (gunakan ##)

Text biasa (ditulis biasa tanpa format apapun)

[Hyperlink](https://www.google.com) (nama hyperlink dibungkus kurung siku, urlnya dibungkus tanda kurung biasa)

```bash
git add .
git commit -m "baris code menggunakan backtick 3x di awal(sertakan bahasanya) dan akhir code"
git push
```

Untuk `menyoroti` bungkus text dengan backtick 1x

# Template

## Sub Judul 
```<bahasa>
git add .
git commit -m 'Update README.md'
git push

```

```kotlin

```

Update README.md