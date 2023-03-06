<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Gab',
        //     'email' => 'gab@gmail.com',
        //     //aYmFaVznAFtb29A
        //     'password'=>'$2y$10$/8JzNhsOSbs4rNepIerpVuyoWAVdmWVqEqcu1Dawjwc/knq9tDCIu'
        // ]);
        $this->call([
            PermissionsTableSeeder::class,
            RoleTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UserTableSeeder::class,
            RoleUserTableSeeder::class,
        ]);
    }
}
