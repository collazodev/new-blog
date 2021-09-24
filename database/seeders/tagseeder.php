<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\tag;

class tagseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        tag::factory(100)->create();
    }
}
