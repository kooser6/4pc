<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'mod']);
        Role::create(['name' => 'event']);
        Role::create(['name' => 'support']);
        Role::create(['name' => 'user']);
    }
}
