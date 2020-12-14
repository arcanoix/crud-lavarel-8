<?php

namespace Database\Seeders;

use App\Models\Adress;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adress::factory(10)->create();
       
    }
}
