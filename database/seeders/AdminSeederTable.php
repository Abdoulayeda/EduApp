<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = Hash::make('passe123');
        $user->role ="admin";
        $user->save();

    }
}
