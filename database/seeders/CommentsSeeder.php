<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index) {
            DB::table('comments')->insert([
                'topic_id' => 1,
                'language_id' => 1,
                'content' => $faker->sentence(5)
            ]);
        }
        foreach(range(1,20) as $index) {
            DB::table('comments')->insert([
                'topic_id' => 1,
                'language_id' => 2,
                'content' => $faker->sentence(5)
            ]);
        }
        foreach(range(1,20) as $index) {
            DB::table('comments')->insert([
                'topic_id' => 1,
                'language_id' => 3,
                'content' => $faker->sentence(5)
            ]);
        }
        
    }
}
