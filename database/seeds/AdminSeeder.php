<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\Admin::class, 6)->create();
        $user = $users[0];
        $user->name = 'admin';
        $user->nickname = '汤包';
        $user->save();
        Role::create([
            'title' => '管理员',
            'name' => 'webmaster',
            'guard_name' => 'admin',
        ]);
        $user->assignRole('webmaster');
    }
}
