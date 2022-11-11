<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Budi Darmawan',
            'email' => 'budidarmawan@gmail.com',
            'password' => bcrypt('12345')

        ]);

        User::create([
            'name' => 'Iwan Setiawan',
            'email' => 'iwansetiawan@gmail.com',
            'password' => bcrypt('54321')

        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe perferendis et, amet harum hic libero illum! Architecto temporibus nobis suscipit ad rerum iure doloribus hic dolorum molestiae vero commodi accusantium corporis, velit exercitationem tempore, neque omnis, ipsa cupiditate? Atque recusandae, consequuntur, porro perspiciatis omnis, voluptatem eveniet eum ducimus quisquam id earum voluptate totam. Temporibus amet ex, culpa quod id pariatur, nemo quae neque in quas earum error maxime consequuntur laborum necessitatibus modi cum fuga. Aperiam dolorum beatae laboriosam. Dolorem, rem!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe perferendis et, amet harum hic libero illum! Architecto temporibus nobis suscipit ad rerum iure doloribus hic dolorum molestiae vero commodi accusantium corporis, velit exercitationem tempore, neque omnis, ipsa cupiditate? Atque recusandae, consequuntur, porro perspiciatis omnis, voluptatem eveniet eum ducimus quisquam id earum voluptate totam. Temporibus amet ex, culpa quod id pariatur, nemo quae neque in quas earum error maxime consequuntur laborum necessitatibus modi cum fuga. Aperiam dolorum beatae laboriosam. Dolorem, rem!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe perferendis et, amet harum hic libero illum! Architecto temporibus nobis suscipit ad rerum iure doloribus hic dolorum molestiae vero commodi accusantium corporis, velit exercitationem tempore, neque omnis, ipsa cupiditate? Atque recusandae, consequuntur, porro perspiciatis omnis, voluptatem eveniet eum ducimus quisquam id earum voluptate totam. Temporibus amet ex, culpa quod id pariatur, nemo quae neque in quas earum error maxime consequuntur laborum necessitatibus modi cum fuga. Aperiam dolorum beatae laboriosam. Dolorem, rem!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis eum ex, voluptatem dolore est non autem nostrum obcaecati eveniet laudantium voluptatibus quo tenetur fugit esse sed repudiandae aut saepe perferendis et, amet harum hic libero illum! Architecto temporibus nobis suscipit ad rerum iure doloribus hic dolorum molestiae vero commodi accusantium corporis, velit exercitationem tempore, neque omnis, ipsa cupiditate? Atque recusandae, consequuntur, porro perspiciatis omnis, voluptatem eveniet eum ducimus quisquam id earum voluptate totam. Temporibus amet ex, culpa quod id pariatur, nemo quae neque in quas earum error maxime consequuntur laborum necessitatibus modi cum fuga. Aperiam dolorum beatae laboriosam. Dolorem, rem!',
            'category_id' => 2,
            'user_id' => 2
        ]);

    }
}
