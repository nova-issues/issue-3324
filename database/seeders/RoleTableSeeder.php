<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::forceCreate([
            'name' => 'Manager',
        ]);

        Role::forceCreate([
            'name' => 'Staff',
        ]);

        Role::forceCreate([
            'name' => 'Community Member',
        ]);
    }
}
