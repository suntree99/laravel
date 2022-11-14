# Tes Teknis Developer Backend PT. Inosoft Trans Sistem

## Instalasi PHP 8 pada Windows
* Kunjungi https://www.php.net/ -> Download -> Stable PHP 8 -> Windows downloads
* Download Zip VS16 x64 Thread Safe
* Extract dan simpan dalam folder tertentu (misal `C:\Php\Php8`)
* Pada Environment Variables, set System variables untuk Path `C:\Php\Php8`
* Pada `C:\Php\Php8` ubah php.ini-development ubah menjadi php.ini dan buka file tersebut
* Aktifkan `extension_dir = "C:\Php\Php8\ext"` (baris 768 - arahkan pada path yang sesuai)
* Aktifkan `extension=curl` (baris 921)
* Aktifkan `extension=fileinfo` (baris 924) (tambahan)
* Aktifkan `extension=gd` (baris 925) (tambahan)
* Aktifkan `extension=mbstring` (baris 931)
* Aktifkan `extension=mysqli` (baris 933)
* Aktifkan `extension=openssl` (baris 937)
* Aktifkan `extension=pdo_mysql` (baris 939) (tambahan)
* Tambahkan `extension=php_mongodb.dll`
* Download file extension php-mongodb untuk php 8 (php_mongodb.dll) letakan di folder `C:\Php\Php8\ext`
* Save file

## Menginstall MongoDB 4.2 pada Windows
* Kunjungi https://www.mongodb.com/try/download/community
* Pilih Version 4.2.23, Platform Windows, dan Package msi dan tekan Download
* Instal MongoDB dan tentukan `Custom` direktori penyimpanan (misal: `C:\MongoDB`)
* Pada Environment Variables, set System variables untuk Path `C:\MongoDB\Server\4.2\bin`
* Tentukan tempat penyimpanan database (misal pada `C:\MongoDB\data` buat folder `db`)
* Registrasikan tempat penyimpanan database melalui CMD, masuk ke `C:\MongoDB\bin`
* Ketikan perintah `mongod --directoryperdb --dbpath C:\MongoDB\data\db --logpath C:\MongoDB\log\mongo.log --logappend --install`


## Instalasi Laravel 8 pada Windows
* Membuat Project Laravel 8 dengan nama `backend-inosoft`
    ```cmd
    composer create-project laravel/laravel:^8.0 backend-inosoft
    ```
* Untuk menjalankan server masuk ke folder project dan jalankan server
    ```cmd
    cd backend-inosoft
    php artisan serve
    ````

## Menghubungkan Laravel 8 dengan MongoDB 4.2
* Pada terminal project, Install package Laravel MongoDB (jenssegers/laravel-mongodb) versi 3.8 (Laravel 8)
    ```php
    composer require jenssegers/mongodb:^3.8
    ```

* Tambahkan konfigurasi pada `config/app.php` di section package
    ```php
    Jenssegers\Mongodb\MongodbServiceProvider::class,
    ```
    
* Tambahkan konfigurasi pada `config/database.php` di section connection
    ```php
    'mongodb' => [
        'driver' => 'mongodb',
        'host' => env('MG_HOST', '127.0.0.1'),
        'port' => env('MG_PORT', 27017),
        'database' => env('MG_DATABASE', 'crud'),
        'username' => env('MG_USERNAME', 'root'),
        'password' => env('MG_PASSWORD', '123456'),
        'options' => [
            'database' => env('MG_DATABASE', 'crud'), // required with Mongo 3+
        ],
    ],
    ```
    
* Setting .env `DB_CONNECTION=mongodb` dan tambahkan variable pengaturan database
    ```php
        MG_HOST=127.0.0.1
        MG_PORT=27017
        MG_DATABASE=crud
        MG_USERNAME=root
        MG_PASSWORD=123456
    ```
