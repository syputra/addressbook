<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Post');
        for($i = 1; $i<=15; $i++){

        DB::table('posts')->insert([
        	'namaLokasi' => $faker->name(),
        	'deskripsiLokasi' => $faker->address(),
        	'telp' => $faker->phoneNumber(),
        	'updated_at' => \Carbon\Carbon::now(),
        	'created_at' => \Carbon\Carbon::now(),
        ]);
        }
    }
}
