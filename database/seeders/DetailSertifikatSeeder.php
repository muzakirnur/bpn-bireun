<?php

namespace Database\Seeders;

use App\Models\DetailSertifikat;
use Illuminate\Database\Seeder;

class DetailSertifikatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailSertifikat::factory(1000)->create();
    }
}
