<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    public function run()
    {
        // Insert sample data into the `tour_types` table
        $tourTypeId = DB::table('tour_types')->insertGetId([
            'name' => 'National Park',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert sample data into the `tours` table
        DB::table('tours')->insert([
            [
                'title' => 'Serengeti Safari Adventure',
                'description' => 'Experience the beauty of the Serengeti National Park.',
                'days' => 5,
                'people' => '4',
                'amount' => '2000',
                'tour_type_id' => $tourTypeId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ngorongoro Crater Exploration',
                'description' => 'Discover the wonders of Ngorongoro Crater.',
                'days' => 3,
                'people' => '2',
                'amount' => '1500',
                'tour_type_id' => $tourTypeId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tarangire Wildlife Experience',
                'description' => 'Enjoy a wildlife experience in Tarangire National Park.',
                'days' => 2,
                'people' => '6',
                'amount' => '1200',
                'tour_type_id' => $tourTypeId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
