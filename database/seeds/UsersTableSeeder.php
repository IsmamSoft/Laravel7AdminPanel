<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::truncate();
            DB::table('role_user')->truncate();


        $superadminRole = Role::where('urole','superadmin')->first();
            $adminRole  = Role::where('urole','admin')->first();
            $authorRole = Role::where('urole','author')->first();
            $userRole   = Role::where('urole','user')->first();

            $superadmin = User::create([
                'name'     => 'Shams',
                'urole'    => 'superadmin',
                'email'    => 'superadmin@admin.com',
                'password' => Hash::make('superadmin@admin.com'),
            ]);


            $admin = User::create([
                'name'          => 'Khan',
                'urole'         => 'admin',
                'email'         => 'admin@admin.com',
                'password'      => Hash::make('admin@admin.com'),
            ]);

            $author = User::create([
                'name'     => 'Arabi',
                'urole'    => 'author',
                'email'    => 'author@admin.com',
                'password' => Hash::make('author@admin.com'),
            ]);

            $user = User::create([
                'name'     => 'Mollah',
                // 'urole'    => 'user',
                'email'    => 'user@admin.com',
                'password' => Hash::make('user@admin.com'),
            ]);

            $superadmin->roles()->attach($superadminRole);
            $admin     ->roles()->attach($admin);
            $author    ->roles()->attach($author);
            $user      ->roles()->attach($user);

    }
}
