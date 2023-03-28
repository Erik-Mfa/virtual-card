<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\John;

class JohnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        John::create([
            'nome' => 'John',
            'linkedin' => 'https://www.linkedin.com/in/erik-matos-freitas-araujo-5b29301b7/',
            'github' => 'https://github.com/Erik-Mfa'
        ]);
    }
}
