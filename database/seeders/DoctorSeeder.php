<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $doctors = [
            [
                'name' => 'Dr. Whet Phaartz',
                'specialty' => 'Clinical Psychologist',
                'quote' => "Understanding yourself is the first step towards healing. Let's embark on this journey together.",
                'picture' => 'assets/img/doctors/doctors-1.jpg',
            ],
            [
                'name' => 'Dr. Hana Utako',
                'specialty' => 'Clinical Psychologist',
                'quote' => "In the tapestry of your life, I'm here to help unravel the knots and weave a story of resilience and growth.",
                'picture' => 'assets/img/doctors/doctors-2.jpg',
            ],
            [
                'name' => 'Dr. Chris P. Bacon',
                'specialty' => 'Trauma Therapist',
                'quote' => "In the midst of pain, there is an incredible capacity for resilience. Together, we can unlock the power within you to heal from the wounds of the past.",
                'picture' => 'assets/img/doctors/doctors-3.jpg',
            ],
            [
                'name' => 'Dr. Hyeon Dae Hi',
                'specialty' => 'Trauma Therapist',
                'quote' => "Your story is not defined by the trauma you've experienced. Let's rewrite the narrative, focusing on growth, empowerment, and reclaiming your sense of self.",
                'picture' => 'assets/img/doctors/doctors-4.jpg',
            ],
           
        ];

        // Insert data into the 'doctors' table
        DB::table('doctors')->insert($doctors);
    }
}
