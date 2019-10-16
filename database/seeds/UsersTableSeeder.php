<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();

        App\User::Create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'password' => bcrypt('#Bjork3552')
        ]);

        Role::create([
               'name'    => 'Admin',
               'slug'    => 'admin',
               'special' => 'all-access'
        ]);
    }
}
