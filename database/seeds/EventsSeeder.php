<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('events')->insert([
            'name' => 'The Beatles | Concert in Cali',
            'description' => 'Dont miss The Beatles in concert!',
            'image' => 'beatles-flyer-low.jpg',
            'country' => 'Colombia',
            'city' => 'Cali',
            'address' => 'Cr36 5 B-32 Cali - Valle Del Cauca | Estadio Pascual Guerrero',
            'total_tickets' => 10000,
            'datetime' => '2020-12-27 22:00:00',
            'open_doors_time' => '2020-12-27 19:00:00',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'VIP',
            'event_id' => 1,
            'price' => '2500000',
            'total_tickets' => '1000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Platino',
            'event_id' => 1,
            'price' => '1800000',
            'total_tickets' => '3000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Oro',
            'event_id' => 1,
            'price' => '1000000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Plata',
            'event_id' => 1,
            'price' => '500000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Bronce',
            'event_id' => 1,
            'price' => '250000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('events')->insert([
            'name' => 'Red Hot Chili Peppers',
            'description' => 'Red Hot Chili Peppers in Bogotá',
            'image' => 'rhcp.jpg',
            'country' => 'Colombia',
            'city' => 'Bogotá DC',
            'address' => 'Dg. 61c #26-36, Bogotá, Cundinamarca | Movistar Arena',
            'total_tickets' => 10000,
            'datetime' => '2021-04-13 20:00:00',
            'open_doors_time' => '2020-12-27 19:00:00',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'VIP',
            'event_id' => 2,
            'price' => '2500000',
            'total_tickets' => '1000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Platino',
            'event_id' => 2,
            'price' => '1800000',
            'total_tickets' => '3000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Oro',
            'event_id' => 2,
            'price' => '1000000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Plata',
            'event_id' => 2,
            'price' => '500000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);

        DB::table('event_locations')->insert([
            'name' => 'Bronce',
            'event_id' => 2,
            'price' => '250000',
            'total_tickets' => '2000',
            'created_at' => $faker->dateTimeBetween($startDate = '-18 months', $endDate = 'now'),
            'updated_at' => now(),
        ]);
    }
}
