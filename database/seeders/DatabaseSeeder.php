<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Eko Setyono Wibowo',
            'username' => 'LilKhoo',
            'email' => 'bowo1120@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::create([
        //     'name' => 'Eko Kurniawan',
        //     'email' => 'Kurniawa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Non Programming',
            'slug' => 'non-programming'
        ]);
        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul PERTAMA',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'wpkwpkwpkw',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel maxime nihil nesciunt libero, tempore quam rem corporis quod repellendus, ducimus eius voluptas sunt obcaecati nostrum quibusdam atque architecto. Magnam repellat aliquam est explicabo blanditiis, suscipit quia sint amet corrupti, libero sit eius. Enim, laboriosam doloremque? Qui nisi veritatis error quam tempora quia vitae neque assumenda, distinctio rem hic aliquid molestiae maiores quaerat pariatur voluptate vel labore nemo exercitationem. Architecto, pariatur molestiae, ex eligendi et neque doloremque accusantium veritatis facilis esse ducimus fugiat cupiditate accusamus, laborum cumque magnam ipsam labore consectetur optio nostrum! Modi laboriosam porro tempore ad odit quis!.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'wpkwpkwpkw',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel maxime nihil nesciunt libero, tempore quam rem corporis quod repellendus, ducimus eius voluptas sunt obcaecati nostrum quibusdam atque architecto. Magnam repellat aliquam est explicabo blanditiis, suscipit quia sint amet corrupti, libero sit eius. Enim, laboriosam doloremque? Qui nisi veritatis error quam tempora quia vitae neque assumenda, distinctio rem hic aliquid molestiae maiores quaerat pariatur voluptate vel labore nemo exercitationem. Architecto, pariatur molestiae, ex eligendi et neque doloremque accusantium veritatis facilis esse ducimus fugiat cupiditate accusamus, laborum cumque magnam ipsam labore consectetur optio nostrum! Modi laboriosam porro tempore ad odit quis!.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'wpkwpkwpkw',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vel maxime nihil nesciunt libero, tempore quam rem corporis quod repellendus, ducimus eius voluptas sunt obcaecati nostrum quibusdam atque architecto. Magnam repellat aliquam est explicabo blanditiis, suscipit quia sint amet corrupti, libero sit eius. Enim, laboriosam doloremque? Qui nisi veritatis error quam tempora quia vitae neque assumenda, distinctio rem hic aliquid molestiae maiores quaerat pariatur voluptate vel labore nemo exercitationem. Architecto, pariatur molestiae, ex eligendi et neque doloremque accusantium veritatis facilis esse ducimus fugiat cupiditate accusamus, laborum cumque magnam ipsam labore consectetur optio nostrum! Modi laboriosam porro tempore ad odit quis!.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
    }
}
