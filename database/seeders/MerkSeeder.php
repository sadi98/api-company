<?php

namespace Database\Seeders;

use App\Models\Merk;
use Illuminate\Database\Seeder;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'Yamaha',
            'Honda',
            'Suzuki',
            'Kawasaki',
            'Piagio'
        ];

        foreach ($datas as $data) {
            Merk::create([
                'name' => $data,
            ]);
        }
    }
}
