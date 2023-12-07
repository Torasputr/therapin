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
                'testimony' => "I used to carry the weight of the world on my shoulders. Thanks to counseling, I discovered the strength within me to face my fears and navigate life's challenges. I'm no longer defined by my struggles; I've become the author of my own story",
                'picture' => 'assets/img/testimonials/testimonials-1.jpg',
            ],
            [
                'name' => 'Sara Wilsson',
                'role' => 'Designer of LMFAO',
                'testimony' => "Anxiety used to control every aspect of my life. Through therapy and a supportive community, I've learned coping mechanisms that have empowered me to take back control. Now, I'm living a life filled with joy and purpose.",
                'picture' => 'assets/img/testimonials/testimonials-2.jpg',
            ],
            [
                'name' => 'Jena Karlis',
                'role' => 'Owner of NoosBee',
                'testimony' => "Opening up about my mental health felt impossible. But by sharing my journey on this platform, I realized I'm not alone. Together, we're breaking the stigma surrounding mental health and fostering a community of understanding and acceptance.",
                'picture' => 'assets/img/testimonials/testimonials-3.jpg',
            ],
            [
                'name' => 'Matt Brandon',
                'role' => 'Freelancer',
                'testimony' => "Mindfulness meditation has been a game-changer for me. Learning to be present in the moment has brought a sense of calmness I never thought possible. I've found a new perspective on life, embracing each day with gratitude and peace.",
                'picture' => 'assets/img/testimonials/testimonials-4.jpg',
            ],
            [
                'name' => 'John Larson',
                'role' => 'Entrepreneur',
                'testimony' => "Connecting with others who understand my struggles has been a lifeline. Support groups provided me with a safe space to share, learn, and grow. Together, we've become a source of strength for one another, proving that no one is truly alone.",
                'picture' => 'assets/img/testimonials/testimonials-5.jpg',
            ],
        ];

        // Insert data into the 'doctors' table
        DB::table('testimonies')->insert($testimonies);
    }
}
