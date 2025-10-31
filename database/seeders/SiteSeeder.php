<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\SiteSettings::create([
            'name' => 'Hizmet',
            'content' => 'uploads/logo.png',
            'favicon' => 'uploads/favicon.ico',
            'email' => 'info@hizmet.com',
            'phone' => '+1234567890',
            'address' => '123 Hizmet St, Istanbul, Turkey',
            'facebook' => 'https://facebook.com/hizmet',
            'twitter' => 'https://twitter.com/hizmet',
            'instagram' => 'https://instagram.com/hizmet',
            'linkedin' => 'https://linkedin.com/company/hizmet',
        ]);
    }
}
