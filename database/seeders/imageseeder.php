<?php

namespace Database\Seeders;

use App\Models\image;
use Illuminate\Database\Seeder;


class imageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        image::factory(100)->create();

    }
}
