<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);
        
        User::create([
            'name' => "Gabriel de la Fuente",
            'email' => "gabriel.delafuente@virtualrec.es",
            'password' => bcrypt('12345678'),
        ]);
    }
}
