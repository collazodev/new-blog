<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;

class postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post::factory(100)->create();
        
    }
}
