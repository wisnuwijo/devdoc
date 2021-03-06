<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module')->insert([
            'name' => 'Home',
            'url' => "/admin/",
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'Documentation',
            'url' => '',
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'User Management',
            'url' => '',
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'View documentation',
            'url' => '/admin/documentation/view',
            'parent_id' => 2,
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'Create new topic',
            'url' => '/admin/documentation/new-topic',
            'parent_id' => 2,
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'View user list',
            'url' => '/admin/user-management/view-user-list',
            'parent_id' => 3,
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'Create new user',
            'url' => '/admin/user-management/create',
            'parent_id' => 3,
            'created_at' => now()
        ]);

        DB::table('module')->insert([
            'name' => 'Manage permission',
            'url' => '/admin/user-management/manage-permission',
            'parent_id' => 3,
            'created_at' => now()
        ]);
    }
}
