<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin_permissions=Permission::all();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permission=$admin_permissions->filter(function ($perminssion){
            return substr($perminssion->title,0,5)!='user_';
        });
        Role::findOrFail(2)->permissions()->sync($user_permission);

    }
}
