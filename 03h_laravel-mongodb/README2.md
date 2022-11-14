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
* Aktifkan `date.timezone = 'Asia/Jakarta` (baris 971 - arahkan pada timezone yang seuai)
* Save file

## Instalasi Laravel 8 pada Windows
* Kunjungi Dokumentasi Laravel 8 https://laravel.com/docs/8.x -> # Getting Started On Windows -> # Installation Via Composer
* Membuat Project Laravel 8 dengan nama `backend-inosoft`
    ```cmd
    composer create-project laravel/laravel:^8.0 backend-inosoft
    ```
* Untuk menjalankan server masuk ke folder project dan jalankan server
    ```cmd
    cd backend-inosoft
    php artisan serve
    ````

## Menginstall MongoDB 4.2 pada Windows
* Kunjungi https://www.mongodb.com/try/download/community
* Pilih Version 4.2.23, Platform Windows, dan Package msi dan tekan Download
* Instal MongoDB dan tentukan `Custom` direktori penyimpanan (misal: `C:\MongoDB`)
* Pada Environment Variables, set System variables untuk Path `C:\MongoDB\Server\4.2\bin`
* Tentukan tempat penyimpanan database (misal pada `C:\MongoDB\data` buat folder `db`)
* Registrasikan tempat penyimpanan database melalui CMD, masuk ke `C:\MongoDB\bin`
* Ketikan perintah `mongod --directoryperdb --dbpath C:\MongoDB\data\db --logpath C:\MongoDB\log\mongo.log --logappend --install`

* Masuk ke shell dengan perintah `mongo`
* Untuk menampilan Database gunakan `show dbs`
* Untuk membuat/atau memilih Database gunakan `use` (misal `use BelajarMongoDB`)
* Untuk membuat User gunakan 
    ```cmd
db.createUser(
    {
        user: 'root',
        pwd: '123456',
        roles: [
            {
                role:"readWrite", 
                db:"Inosoft"
            }
        ]
    }
)
    ```
* Untuk membuat Collection (table) gunakan
    ```cmd
    db.createCollection('user')
    ```
* Untuk menampilkan Collection gunakan `show collections`
* Untuk menampilkan isi Collection gunakan `db.user.find()`
* Untuk menambahkan 1 Document (record) gunakan
    ```cmd
    db.user.insertOne(
        {
            first_name: "Monkey D",
            last_name: "Luffy"
        }
    )
    ```

db.motor.insertOne(
    {
        mesin: "DOHC",
        tipe_suspensi: "Pararel Fork",
        tipe_transmisi: "Manual",
        tahun_keluaran: "2000",
        warna: "Hitam",
        harga: "15000000"
    }
)

db.mobil.insertOne(
    {
        mesin: "Diesel",
        kapasitas_penumpang: "7",
        tipe: "MPV",
        tahun_keluaran: "2020",
        warna: "Silver",
        harga: "315000000"
    }
)

* Untuk menampilkan isi Collection dengan rapi gunakan `db.user.find().pretty()`
* Untuk menambahkan lebih dari 1 Document (record) gunakan
    ```cmd
    db.user.insertMany(
        [
            {
                first_name: "Roronoa",
                last_name: "Zoro"
            },
            {
                first_name: "Tony",
                last_name: "Chopper"
            }
        ]
    )
    ```
* Untuk menambahkan Property baru pada Document gunakan
    ```cmd
    db.user.update(
        {
            first_name: "Monkey D"
        },
        {
            first_name: "Monkey D",
            last_name: "Luffy",
            age: 20
        }
    )
    ```
* Untuk mengubah nilai Property gunakan
    ```cmd
    db.user.update(
        {
            first_name: "Monkey D"
        },
        {
            $set: {
                age: 25
            }
        }
    )
    ```
* Untuk menghapus 1 Document gunakan
    ```cmd
    db.user.remove(
        {
            first_name: "Tony"
        }
    )
    ```
* Untuk menampilkan 1 Document gunakan
    ```cmd
    db.user.find(
        {
            first_name: "Roronoa"
        }
    ).pretty()
    ```

## Mengintegrasikan Laravel dan MongoDB
* Kunjungi https://github.com/jenssegers/laravel-mongodb
* Instal package menggunakan composer sesuai dengan versi Laravel 8 (3.7.x)
    ```cmd
    composer require jenssegers/mongodb:^3.8
    ```