<?php
//DB nằm trong schemma
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $limit = 100;
        $fake = Faker::create();
        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $fake->name,
                'email' =>$fake->unique->email,
                'contact_number' => $fake->phoneNumber,
            ]);
        }
    }
}
