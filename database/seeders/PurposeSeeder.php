<?php

namespace Database\Seeders;

use App\Models\Purpose;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purpose::factory()->create([
            'type' => 0,
            'value' => 'Menjadikan Harley Davidson Motor Club sebagai organisasi yang berdedikasi tinggi terhadap kesejahteraan dalam bermasyarakat serta memberikan reputasi terbaik dengan memperkenalkan dunia otomotif.'
        ]);

        Purpose::factory()->create([
            'type' => 1,
            'value' => 'Harley Davidson Motor Club mampu mempromosikan Indonesia di kancah Internasional.
'
        ]);

        Purpose::factory()->create([
            'type' => 1,
            'value' => 'Menjaga ikatan tali persaudaraan sesama club dan masyarakat.
'
        ]);

        Purpose::factory()->create([
            'type' => 1,
            'value' => 'Bersinergi terhadap kegiatan sosial-budaya yang ada di masyarakat.
'
        ]);

        Purpose::factory()->create([
            'type' => 1,
            'value' => 'Menjunjung tinggi profesionalitas saat berkendara sesuai dengan peraturan yang telah berlaku.'
        ]);
    }
}
