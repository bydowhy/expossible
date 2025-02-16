<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user utama
        $user = User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret'),
            'owner' => true,
        ]);

        // Buat beberapa user tambahan
        User::factory(5)->create();

        // Buat beberapa kontak yang terhubung dengan user
        Article::factory(50)->create([
            'user_id' => $user->id, // Menyesuaikan dengan relasi user-contact
        ]);
    }
}
