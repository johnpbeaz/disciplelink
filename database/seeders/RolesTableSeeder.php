<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Member;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['super_admin', 'admin', 'group_leader'];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName]);
    }

    $user = Member::where('email', 'johnpbeaz@gmail.com')->first();
    
        if ($user) {
            $user->roles()->sync(Role::whereIn('name', ['super_admin', 'admin'])->pluck('id'));
        }
    }