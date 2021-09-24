<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::factory(10)->create();  
    }
}
