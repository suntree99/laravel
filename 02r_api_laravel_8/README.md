# API Laravel

## Tools Yang Digunakan
* XAMPP (Apache dan MySQL) sebagai local server
* Postman (untuk mengetes API)

## Buat Project Laravel 8
* Jalankan Perintah pada CMD
    ```cmd
    composer create-project laravel/laravel:^8.0 laravel-api
    ```

* Untuk menjalankan server masuk ke folder project dan jalankan server
    ```cmd
    cd laravel-api
    php artisan serve
    ````

## Buat Database
* Pada phpMyAdmin buat database dengan nama `mahasiswa`

## Konfigurasi Project
* File .env
    ```cmd
    APP_NAME=Mahasiswa

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3308
    DB_DATABASE=mahasiswa
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Membuat Migration Table Mahasiswa
* Buat file migration
    ```cmd
    php artisan make:migration create_mahasiswa_table
    ```
    * File migration akan terletak di `laravel-api\database\migrations\`

* Ubah schema table pada file migration
    ```php
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->id();
        $table->string('username');
        $table->string('address');
        $table->softDeletes(); // Berfungsi agar data tidak dihapus secara permanen melainkan di hidden
        $table->timestamps();
    });
    ```

* Lakukan migrasi
    ```cmd
    php artisan migrate
    ```

* Inputkan satu atau beberapa data pada tabel melalui phpMyAdmin

## Membuat Model Mahasiswa
* Buat model mahasiswa
    ```cmd
    php artisan make:model Mahasiswa
    ```
    * File model akan terletak di `laravel-api\app\Models\`

* Ubah class mahasiswa
    ```php
    class Mahasiswa extends Model
    {
        use HasFactory;
        use SoftDeletes;

        protected $table = 'mahasiswa';
        protected $fillable = [
            'username',
            'address'
        ];

        protected $hidden = [];
    }
    ```

## Membuat API Controller
* Buat API mahasiswa controller
    ```cmd
    php artisan make:controller API/MahasiswaController --resource
    ```
    * File model akan terletak di `laravel-api\app\Http\Controllers\API\`
    * --resource berfungsi agar dibuatkan fungsi CRUD

## Membuat Struktur Format API
* Buat folder `Helpers` pada `laravel-api\app\`
* Buat file `ApiFormatter.php` pada folder `Helpers`
* Menuliskan format API pada `ApiFormatter.php`
    ```php
    <?php

    namespace App\Helpers;

    class ApiFormatter {
        protected static $response = [
            'code' => null,
            'message' => null,
            'data' => null,
        ];

        public static function createApi($code = null, $message = null, $data = null)
        {
            self::$response['code'] = $code;
            self::$response['message'] = $message;
            self::$response['data'] = $data;

            return response()->json(self::$response, self::$response['code']);
        }
    }
    ```

## Konfigurasi Read All (INDEX)
* Ubah index sectiion pada MahasiswaController
    ```php
    public function index()
    {
        $data = Mahasiswa::all();

        if($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    ```

* Daftarkan di Route API
    ```php
    Route::get('mahasiswa', [MahasiswaController::class, 'index']);
    ```

* Test di PostMan
    `GET` `http://127.0.0.1:8000/api/mahasiswa`

## Konfigurasi Create One (STORE) pada MahasiswaController
* Ubah store sectiion pada MahasiswaController
    ```php
    public function store(Request $request)
    {
        try {
            $request->validate([
                'username' => 'required',
                'address' => 'required',
            ]);

            $mahasiswa = Mahasiswa::create([
                'username' => $request->username,
                'address' => $request->address,
            ]);

            $data = Mahasiswa::where('id', '=', $mahasiswa->id)->get();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    ```

* Daftarkan di Route API
    ```php
    Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
    ```

* Test di PostMan
    `POST` `http://127.0.0.1:8000/api/mahasiswa/store`
    `username`
    `address`

## Konfigurasi Read One (SHOW) pada MahasiswaController
* Ubah show sectiion pada MahasiswaController
    ```php
    public function show($id)
    {
        //
        $data = Mahasiswa::where('id', '=', $id)->get();

        if($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    ```

* Daftarkan di Route API
    ```php
    Route::get('mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
    ```

* Test di PostMan
    `GET` `http://127.0.0.1:8000/api/mahasiswa/show/1`

## Konfigurasi Update One (UPDATE) pada MahasiswaController
* Ubah update sectiion pada MahasiswaController
    ```php
    public function update(Request $request, $id)
    {
        //
        try {
            $request->validate([
                'username' => 'required',
                'address' => 'required',
            ]);

            $mahasiswa = Mahasiswa::findOrFail($id);

            $mahasiswa->update([
                'username' => $request->username,
                'address' => $request->address,
            ]);

            $data = Mahasiswa::where('id', '=', $mahasiswa->id)->get();

            if($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    ```

* Daftarkan di Route API
    ```php
    Route::post('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
    ```

* Test di PostMan
    `POST` `http://127.0.0.1:8000/api/mahasiswa/update/3`

## Konfigurasi Delete One (DESTROY) pada MahasiswaController
* Ubah index sectiion pada MahasiswaController
    ```php
    public function destroy($id)
    {
        //
        try {
            $mahasiswa = Mahasiswa::findOrFail($id);
    
            $data = $mahasiswa->delete();
    
            if($data) {
                return ApiFormatter::createApi(200, 'Success Destroy Data');
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        } catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }
    ```

* Daftarkan di Route API
    ```php
    Route::get('mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);
    ```

* Test di PostMan
    `http://127.0.0.1:8000/api/mahasiswa/destroy/3`

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