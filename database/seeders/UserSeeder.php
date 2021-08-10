<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $professional = Role::create(['name' =>'professional']);

        $add_patient = Permission::create(['name' => 'add patient']);
        $edit_patient = Permission::create(['name' => 'edit patient']);

        $professional->syncPermissions([$add_patient]);
        $user = User::create([
            'name'=>'Tawanda',
            'email'=>'tawanda@micre8ion.com',
            'password'=>Hash::make('ch1b@y1w@')
        ]);

        $user->assignRole('admin');
    }
}
