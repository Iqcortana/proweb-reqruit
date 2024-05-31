<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();
        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Faiq Athari',
            'username' => 'faiqathari',
            'email' => 'faiqatha@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        // User::create([
        //     'name' => 'Fiqa Athira',
        //     'email' => 'fiqathi@gmail.com',
        //     'password' => bcrypt('67890')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, odio, eligendi numquam a animi, repellat sequi aut alias saepe explicabo suscipit voluptatum nisi eum exercitationem vero minus laudantium dicta! Veniam animi debitis maiores repellendus dolorum, quisquam voluptates dolore praesentium expedita dolor temporibus molestias consectetur ex eos et! Molestias, illo ea?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, tenetur, fugit consequuntur, odit illum explicabo dolorem modi suscipit nam id dicta magni doloribus unde hic debitis iste libero repellat similique omnis sunt. Ullam impedit consectetur maiores culpa voluptate iusto, magnam dolorem asperiores nam aliquid sit hic molestiae, pariatur illum nesciunt incidunt harum sapiente enim! Deserunt itaque voluptate facere, odio consectetur,</p><p>praesentium qui quasi esse pariatur tempora totam ab vitae mollitia natus odit tenetur blanditiis, amet ut cumque placeat perferendis voluptas possimus corrupti? Voluptas quibusdam ratione id eveniet perferendis labore aliquam nihil velit vero, veniam porro ipsam debitis sit molestias a!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, odio, eligendi numquam a animi, repellat sequi aut alias saepe explicabo suscipit voluptatum nisi eum exercitationem vero minus laudantium dicta! Veniam animi debitis maiores repellendus dolorum, quisquam voluptates dolore praesentium expedita dolor temporibus molestias consectetur ex eos et! Molestias, illo ea?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, tenetur, fugit consequuntur, odit illum explicabo dolorem modi suscipit nam id dicta magni doloribus unde hic debitis iste libero repellat similique omnis sunt. Ullam impedit consectetur maiores culpa voluptate iusto, magnam dolorem asperiores nam aliquid sit hic molestiae, pariatur illum nesciunt incidunt harum sapiente enim! Deserunt itaque voluptate facere, odio consectetur,</p><p>praesentium qui quasi esse pariatur tempora totam ab vitae mollitia natus odit tenetur blanditiis, amet ut cumque placeat perferendis voluptas possimus corrupti? Voluptas quibusdam ratione id eveniet perferendis labore aliquam nihil velit vero, veniam porro ipsam debitis sit molestias a!</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, odio, eligendi numquam a animi, repellat sequi aut alias saepe explicabo suscipit voluptatum nisi eum exercitationem vero minus laudantium dicta! Veniam animi debitis maiores repellendus dolorum, quisquam voluptates dolore praesentium expedita dolor temporibus molestias consectetur ex eos et! Molestias, illo ea?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, tenetur, fugit consequuntur, odit illum explicabo dolorem modi suscipit nam id dicta magni doloribus unde hic debitis iste libero repellat similique omnis sunt. Ullam impedit consectetur maiores culpa voluptate iusto, magnam dolorem asperiores nam aliquid sit hic molestiae, pariatur illum nesciunt incidunt harum sapiente enim! Deserunt itaque voluptate facere, odio consectetur,</p><p>praesentium qui quasi esse pariatur tempora totam ab vitae mollitia natus odit tenetur blanditiis, amet ut cumque placeat perferendis voluptas possimus corrupti? Voluptas quibusdam ratione id eveniet perferendis labore aliquam nihil velit vero, veniam porro ipsam debitis sit molestias a!</p>',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, odio, eligendi numquam a animi, repellat sequi aut alias saepe explicabo suscipit voluptatum nisi eum exercitationem vero minus laudantium dicta! Veniam animi debitis maiores repellendus dolorum, quisquam voluptates dolore praesentium expedita dolor temporibus molestias consectetur ex eos et! Molestias, illo ea?',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, tenetur, fugit consequuntur, odit illum explicabo dolorem modi suscipit nam id dicta magni doloribus unde hic debitis iste libero repellat similique omnis sunt. Ullam impedit consectetur maiores culpa voluptate iusto, magnam dolorem asperiores nam aliquid sit hic molestiae, pariatur illum nesciunt incidunt harum sapiente enim! Deserunt itaque voluptate facere, odio consectetur,</p><p>praesentium qui quasi esse pariatur tempora totam ab vitae mollitia natus odit tenetur blanditiis, amet ut cumque placeat perferendis voluptas possimus corrupti? Voluptas quibusdam ratione id eveniet perferendis labore aliquam nihil velit vero, veniam porro ipsam debitis sit molestias a!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
