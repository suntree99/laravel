<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Budi Darmawan",
        "email" => "budi.darmawan@gmail.com",
        "image" => "budi-darmawan.jpeg"
    ]);
});



Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Budi Darmawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officia maiores aliquam voluptatem suscipit, placeat ut quis. Ea sequi fugiat dolorum eius ducimus maxime, nulla rem aut soluta, veniam id, optio porro vero commodi distinctio quos repudiandae necessitatibus cum quis ex dolor reiciendis nam ut! Placeat, voluptate quod esse, ducimus maiores, error vel inventore omnis fugit debitis beatae tempore asperiores magnam. Aliquid quos deserunt dolor, quaerat, facere perferendis iusto repellendus laboriosam quis voluptatem non dolorem amet sed saepe corporis magni."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iwan Setiawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti consequatur sequi quaerat voluptate, hic magni illo expedita accusamus accusantium id tempora officia autem! Numquam dolorum repudiandae labore sit distinctio natus necessitatibus at iusto delectus dolor iure velit incidunt aliquid, quasi nesciunt enim eaque magni. Est blanditiis, voluptatem minus suscipit repellendus tempora ullam natus similique animi iste ratione dolores, vitae impedit sunt tempore, voluptates obcaecati rem ea adipisci molestias soluta dolorem quas? Voluptatem aliquam at sequi rerum vel eligendi ratione dolor? Necessitatibus iste atque voluptatum omnis. Eveniet, praesentium delectus? Neque enim labore molestiae quos nihil aut reiciendis odit dolorum cum eligendi!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post

Route::get('/post/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Budi Darmawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officia maiores aliquam voluptatem suscipit, placeat ut quis. Ea sequi fugiat dolorum eius ducimus maxime, nulla rem aut soluta, veniam id, optio porro vero commodi distinctio quos repudiandae necessitatibus cum quis ex dolor reiciendis nam ut! Placeat, voluptate quod esse, ducimus maiores, error vel inventore omnis fugit debitis beatae tempore asperiores magnam. Aliquid quos deserunt dolor, quaerat, facere perferendis iusto repellendus laboriosam quis voluptatem non dolorem amet sed saepe corporis magni."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Iwan Setiawan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti consequatur sequi quaerat voluptate, hic magni illo expedita accusamus accusantium id tempora officia autem! Numquam dolorum repudiandae labore sit distinctio natus necessitatibus at iusto delectus dolor iure velit incidunt aliquid, quasi nesciunt enim eaque magni. Est blanditiis, voluptatem minus suscipit repellendus tempora ullam natus similique animi iste ratione dolores, vitae impedit sunt tempore, voluptates obcaecati rem ea adipisci molestias soluta dolorem quas? Voluptatem aliquam at sequi rerum vel eligendi ratione dolor? Necessitatibus iste atque voluptatum omnis. Eveniet, praesentium delectus? Neque enim labore molestiae quos nihil aut reiciendis odit dolorum cum eligendi!"
        ]
    ];

    $new_post = [];

    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});