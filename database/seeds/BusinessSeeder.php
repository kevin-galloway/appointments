<?php

use Illuminate\Database\Seeder;
use App\Models\Business;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $businesses = [
            [
                'name' => 'Designs In Dentistry',
                'address' => '14810 Serenita Ave. Oklahoma City, OK 73134',
                'about' => 'Dentist office focused on adult patients.',
                'logo' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'name' => 'Prince Chiropractic Wellness Center',
                'address' => '2537 S Kelly Ave. Edmond, OK 73013',
                'about' => 'Chiropractor',
                'logo' => 'https://www.princechiropractic.com/wp-content/uploads/2019/03/HappilySituated_Prince_2016-82-640x400.jpg'
            ],
            [
                'name' => 'Annex Barbershop',
                'address' => '514 NW 28th, Suite 6. Oklahoma City, OK 73103',
                'about' => 'Barbershop',
                'logo' => 'https://images.squarespace-cdn.com/content/55a15fcae4b0037ee2c3c4d2/1577651655326-4H5L43ANWPJVW4GG33FL/fullsizeoutput_ed.jpeg?content-type=image%2Fjpeg'
            ]
        ];

        foreach ($businesses as $business) {
            Business::create(array(
                'name' => $business['name'],
                'address' => $business['address'],
                'about' => $business['about'],
                'logo' => $business['logo']
            ));
        }
    }
}
