<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Alpine Banking Admin",
            'email' => "info@alpinebanking.software",
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
            'remember_token' => Str::random(10),
        ]);
        factory(User::class, 5)->create();
    }
}
