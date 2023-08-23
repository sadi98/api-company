<?php

namespace Database\Seeders;

use App\Models\MotorCycle;
use Illuminate\Database\Seeder;

class MotorCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        MotorCycle::create([
            'merk_id'   => 1,
            'name'      => 'NMAX 155',
            'color'     => 'Black White',
            'cc'        => 155,
            'status'    => 'New',
            'km'        => 5000,
            'price'     => 20000000,
            'body'      => 'Yamaha Nmax tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Yamaha hadir dalam 2 varian. Bicara soal spesifikasi mesin Yamaha Nmax, ini ditenagai dua pilihan mesin Petrol berkapasitas 155 cc. Nmax tersedia dengan transmisi CVT tergantung variannya. Nmax adalah Scooter 2 seater dengan panjang 1955 mm, lebar 740 mm, wheelbase 1350 mm. serta ground clearance 124 mm.'
        ]);
        MotorCycle::create([
            'merk_id'   => 2,
            'name'      => 'PCX 160',
            'color'     => 'Red dop',
            'cc'        => 160,
            'status'    => 'New',
            'km'        => 1000,
            'price'     => 24000000,
            'body'      => 'Honda PCX160 tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Honda hadir dalam 4 varian. Bicara soal spesifikasi mesin Honda PCX160, ini ditenagai dua pilihan mesin Petrol berkapasitas 156.9 cc. PCX160 tersedia dengan transmisi CVT tergantung variannya. PCX160 adalah Scooter 2 seater dengan panjang 1936 mm, lebar 742 mm, wheelbase 1313 mm. serta ground clearance 135 mm.'
        ]);
        MotorCycle::create([
            'merk_id'   => 3,
            'name'      => 'Satria F 150',
            'color'     => 'Blue Drak',
            'cc'        => 150,
            'status'    => 'New',
            'km'        => 1000,
            'price'     => 24000000,
            'body' => 'Suzuki Satria F 150 tersedia dalam pilihan mesin Petrol di Indonesia. Motor sport dari Suzuki hadir dalam 4 varian. Bicara soal spesifikasi mesin Suzuki Satria F 150, ini ditenagai dua pilihan mesin Petrol berkapasitas 147.3 cc. Satria F 150 tersedia dengan transmisi manual tergantung variannya. Satria F 150 adalah Motor sport 2 seater dengan panjang 1940 mm, lebar 745 mm, wheelbase 1280 mm, serta ground clearance 140 mm.'
        ]);
        MotorCycle::create([
            'merk_id'   => 4,
            'name'      => 'ZX 25 RR',
            'color'     => 'Green Glosy',
            'cc'        => 250,
            'status'    => 'New',
            'km'        => 100,
            'price'     => 124000000,
            'body' => 'ZX 5 RR tersedia dalam pilihan mesin Petrol di Indonesia. Motor sport dari ZX hadir dalam 4 varian. Bicara soal spesifikasi mesin ZX 5 RR, ini ditenagai dua pilihan mesin Petrol dengan kapasitas tertentu. ZX 5 RR tersedia dengan transmisi manual tergantung variannya. ZX 5 RR adalah Motor sport 2 seater dengan panjang yang spesifik, lebar yang sesuai, wheelbase sesuai spesifikasi, serta ground clearance sesuai data.'
        ]);
        MotorCycle::create([
            'merk_id'   => 5,
            'name'      => 'Vespa Primavera',
            'color'     => 'Tosca',
            'cc'        => 160,
            'status'    => 'New',
            'km'        => 2000,
            'price'     => 44000000,
            'body' => 'Vespa Matic Primavera tersedia di Indonesia. Skuter ikonik dari Vespa hadir dalam beberapa varian. Bicara soal spesifikasi mesin Vespa Matic Primavera, ini ditenagai mesin dengan kapasitas tertentu. Vespa Matic Primavera tersedia dengan transmisi otomatis. Vespa Matic Primavera adalah skuter elegan dengan panjang, lebar, wheelbase, dan ground clearance sesuai spesifikasi.'
        ]);
    }
}
