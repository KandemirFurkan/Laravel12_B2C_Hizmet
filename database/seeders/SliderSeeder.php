<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Slider::create([
            'title' => 'Welcome to Hizmet',
            'subtitle' => 'Discover our services and solutions.',
            'image' => '/imgs/slider1.jpg',
            'status' => 1,
        ]);

        \App\Models\Slider::create([
            'title' => 'Innovative Solutions',
            'subtitle' => 'We provide cutting-edge solutions for your business.',
            'image' => '/imgs/slider1.jpg',
            'status' => 1,
        ]);
    }
}
