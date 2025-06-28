<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;

public function run(): void
{
    $roles = ['super_admin', 'admin', 'group_leader'];

    foreach ($roles as $roleName) {
        Role::firstOrCreate(['name' => $roleName]);
    }

    $user = User::where('email', 'johnpbeaz@gmail.com')->first();

    if ($user) {
        $user->roles()->sync(Role::whereIn('name', ['super_admin', 'admin'])->pluck('id'));
    }
}

$this->call(RolesTableSeeder::class);
