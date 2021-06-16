<?php declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create(['email' => 'demo1@example.com']);
         User::factory()->create(['email' => 'demo2@example.com']);
         User::factory()->create(['email' => 'demo3@example.com']);
    }
}
