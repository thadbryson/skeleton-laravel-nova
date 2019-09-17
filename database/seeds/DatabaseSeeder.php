<?php

declare(strict_types = 1);

use App\Models\User\User;
use App\Models\Cms\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Thad',
            'email'    => 'thadbry@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
