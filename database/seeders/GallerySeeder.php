<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'picture' => 'assets/img/gallery/gallery-1.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-2.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-3.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-4.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-5.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-6.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-7.jpg',
            ],
            [
                'picture' => 'assets/img/gallery/gallery-8.jpg',
            ],
        ];
        DB::table('galleries')->insert($images);
    }
}
