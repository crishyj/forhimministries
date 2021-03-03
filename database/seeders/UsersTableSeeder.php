<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pastor Morgan',
            'email' => 'webadmin@forhimministries.org',
            'password' => bcrypt('Today-Tonight78'),
            'permission' => '1',
        ]);
    }
}
