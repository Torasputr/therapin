<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonies = [
            [
                'name' => 'Saul Goodman',
                'role' => 'CEO & Founder of OogaBooga Company',
                'testimony' => "Saya loncat dari lantai 7",
                'picture' => 'assets/img/testimonials/testimonials-1.jpg',
            ],
            [
                'name' => 'Sara Wilsson',
                'role' => 'Designer of LMFAO',
                'testimony' => "Sebelumnya saya mau loncat setelah pake Therapin, saya jadi cuma jatuh dari tangga",
                'picture' => 'assets/img/testimonials/testimonials-2.jpg',
            ],
            [
                'name' => 'Jena Karlis',
                'role' => 'Owner of NoosBee',
                'testimony' => "Saya stress urusin toko saya jadi saya ke Therapin dan akhirnya toko saya bakar. Saya bebas dari stress. Terimakasih Therapin",
                'picture' => 'assets/img/testimonials/testimonials-3.jpg',
            ],
            [
                'name' => 'Matt Brandon',
                'role' => 'Freelancer',
                'testimony' => "Saya pusing client minta kejar deadline begitu dikasih suruh revisi. Setelah pake Therapin, clientnya saya bunuh. Terimakasih Therapin",
                'picture' => 'assets/img/testimonials/testimonials-4.jpg',
            ],
            [
                'name' => 'John Larson',
                'role' => 'Entrepreneur',
                'testimony' => "Understanding yourself is the first step towards healing. Let's embark on this journey together.",
                'picture' => 'assets/img/testimonials/testimonials-5.jpg',
            ],
        ];

        // Insert data into the 'doctors' table
        DB::table('testimonies')->insert($testimonies);
    }
}
